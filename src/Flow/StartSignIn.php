<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Flow;

use CodebarAg\MicrosoftEntraSSO\Config\EntraConfig;
use CodebarAg\MicrosoftEntraSSO\Exceptions\ConfigurationException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\InvalidRedirectUriException;
use Illuminate\Contracts\Session\Session;

/**
 * Starts a sign-in: creates and stores the FlowState and builds the authorization URL.
 */
final readonly class StartSignIn
{
    public function __construct(
        private EntraConfig $config,
        private FlowStateStore $store,
        private CallbackUrl $callbackUrl,
    ) {}

    /**
     * @throws ConfigurationException
     * @throws InvalidRedirectUriException
     */
    public function handle(Session $session, string $guard): AuthorizationRequest
    {
        $this->config->guard($guard);
        $redirectUri = $this->callbackUrl->for($guard);

        $flow = FlowState::begin($guard);
        $this->store->put($session, $flow);

        $query = http_build_query([
            'client_id' => $this->config->clientId,
            'response_type' => 'code',
            'redirect_uri' => $redirectUri,
            'response_mode' => 'query',
            'scope' => implode(' ', $this->config->scopes),
            'state' => $flow->state,
            'nonce' => $flow->nonce,
            'code_challenge' => $flow->codeChallenge(),
            'code_challenge_method' => 'S256',
            'prompt' => 'select_account',
        ]);

        return new AuthorizationRequest(
            "https://login.microsoftonline.com/{$this->config->tenant->value}/oauth2/v2.0/authorize?{$query}",
            $flow,
        );
    }
}
