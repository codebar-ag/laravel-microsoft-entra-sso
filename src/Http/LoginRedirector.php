<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Http;

use CodebarAg\MicrosoftEntraSSO\Config\EntraConfig;
use CodebarAg\MicrosoftEntraSSO\Exceptions\SignInFailure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\Router;
use Psr\Log\LoggerInterface;

/**
 * Sends a failed sign-in back to the login page with a translated message flashed to the session.
 */
final readonly class LoginRedirector
{
    public function __construct(
        private EntraConfig $config,
        private Redirector $redirector,
        private Router $router,
        private LoggerInterface $logger,
    ) {}

    public function failed(SignInFailure $failure, string $guard): RedirectResponse
    {
        $this->logger->warning('Microsoft Entra SSO sign-in failed', [
            'guard' => $guard,
            'failure' => $failure::class,
            'message' => $failure->getMessage(),
        ]);

        $target = $this->router->has($this->config->loginRoute) ? route($this->config->loginRoute) : '/';

        return $this->redirector->to($target)->with($this->config->errorFlashKey, __($failure->translationKey()));
    }
}
