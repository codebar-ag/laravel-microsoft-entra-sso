<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Flow;

use CodebarAg\MicrosoftEntraSSO\Clients\GraphClient;
use CodebarAg\MicrosoftEntraSSO\Clients\IdTokenValidator;
use CodebarAg\MicrosoftEntraSSO\Clients\TokenClient;
use CodebarAg\MicrosoftEntraSSO\Config\EntraConfig;
use CodebarAg\MicrosoftEntraSSO\Config\GuardConfig;
use CodebarAg\MicrosoftEntraSSO\Contracts\LoginGate;
use CodebarAg\MicrosoftEntraSSO\Contracts\SsoUser;
use CodebarAg\MicrosoftEntraSSO\Enums\DenialReason;
use CodebarAg\MicrosoftEntraSSO\Events\SignedIn;
use CodebarAg\MicrosoftEntraSSO\Events\SignInDenied;
use CodebarAg\MicrosoftEntraSSO\Exceptions\ConfigurationException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\InvalidIdTokenException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\SignInDeniedException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\SignInFailure;
use CodebarAg\MicrosoftEntraSSO\Exceptions\TokenException;
use CodebarAg\MicrosoftEntraSSO\Identity\SignIn;
use Illuminate\Contracts\Auth\Factory as AuthFactory;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\Session\Session;

/**
 * Completes a sign-in: state check, code exchange, id token, profile, gate, user, login.
 */
final readonly class CompleteSignIn
{
    public function __construct(
        private EntraConfig $config,
        private FlowStateStore $store,
        private CallbackUrl $callbackUrl,
        private TokenClient $tokens,
        private GraphClient $graph,
        private IdTokenValidator $validator,
        private ResolveUser $resolveUser,
        private Container $container,
        private AuthFactory $auth,
        private Dispatcher $events,
    ) {}

    /**
     * @throws SignInFailure
     * @throws ConfigurationException
     */
    public function handle(Session $session, string $guard, CallbackParameters $callback): SsoUser
    {
        $guardConfig = $this->config->guard($guard);
        $flow = $this->store->pull($session, $guard, $callback->state);

        if ($callback->error !== null) {
            throw TokenException::rejected($callback->error, $callback->errorDescription ?? '');
        }
        if ($callback->code === null) {
            throw TokenException::missingAuthorizationCode();
        }

        $tokens = $this->tokens->exchangeCode($callback->code, $flow->codeVerifier, $this->callbackUrl->for($guard));
        $claims = $this->validator->validate(
            $tokens->idToken ?? throw InvalidIdTokenException::because('the token response has no id token.'),
            $flow->nonce,
        );
        $profile = $this->graph->me($tokens->accessToken);

        if (! $claims->identity->isPersonalAccount() && $claims->identity->objectId !== strtolower($profile->graphId)) {
            throw InvalidIdTokenException::because('it does not belong to the Microsoft Graph user.');
        }

        $signIn = new SignIn($claims->identity, $profile, $tokens);

        try {
            $this->assertAllowed($signIn, $guardConfig);
            $user = $this->resolveUser->handle($signIn, $guardConfig);
        } catch (SignInDeniedException $e) {
            $this->events->dispatch(new SignInDenied($signIn->identity, $signIn->profile, $guard, $e->reason));

            throw $e;
        }

        $this->login($guard, $user);
        $session->regenerate();
        $this->events->dispatch(new SignedIn($user, $signIn, $guard));

        return $user;
    }

    /**
     * Runs the login gate. Nothing is looked up, linked or created before it passes.
     */
    private function assertAllowed(SignIn $signIn, GuardConfig $guard): void
    {
        if ($this->config->loginGate === null) {
            return;
        }

        $gate = $this->container->make($this->config->loginGate);
        if (! $gate instanceof LoginGate) {
            throw ConfigurationException::invalid('login_gate', 'could not be resolved to a LoginGate.');
        }

        if (! $gate->allows($signIn, $guard)) {
            throw new SignInDeniedException(DenialReason::LoginGate);
        }
    }

    private function login(string $guard, SsoUser $user): void
    {
        $statefulGuard = $this->auth->guard($guard);

        if (! $statefulGuard instanceof StatefulGuard) {
            throw ConfigurationException::invalid("guards.{$guard}", 'the auth guard must be a stateful (session) guard.');
        }

        $statefulGuard->login($user, remember: true);
    }
}
