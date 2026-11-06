<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Http\Controllers;

use CodebarAg\MicrosoftEntraSSO\Config\EntraConfig;
use CodebarAg\MicrosoftEntraSSO\Exceptions\SignInFailure;
use CodebarAg\MicrosoftEntraSSO\Flow\CompleteSignIn;
use CodebarAg\MicrosoftEntraSSO\Http\LoginRedirector;
use CodebarAg\MicrosoftEntraSSO\Http\Requests\CallbackRequest;
use Illuminate\Http\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

final readonly class HandleMicrosoftCallbackController
{
    public function __invoke(CallbackRequest $request, string $guard, EntraConfig $config, CompleteSignIn $complete, LoginRedirector $redirector): RedirectResponse
    {
        $guardConfig = $config->findGuard($guard) ?? throw new NotFoundHttpException;

        try {
            $complete->handle($request->session(), $guard, $request->parameters());
        } catch (SignInFailure $failure) {
            return $redirector->failed($failure, $guard);
        }

        return redirect()->intended($guardConfig->redirectAfterLogin);
    }
}
