<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Http\Controllers;

use CodebarAg\MicrosoftEntraSSO\Config\EntraConfig;
use CodebarAg\MicrosoftEntraSSO\Exceptions\InvalidRedirectUriException;
use CodebarAg\MicrosoftEntraSSO\Flow\StartSignIn;
use CodebarAg\MicrosoftEntraSSO\Http\LoginRedirector;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

final readonly class RedirectToMicrosoftController
{
    public function __invoke(Request $request, string $guard, EntraConfig $config, StartSignIn $start, LoginRedirector $redirector): RedirectResponse
    {
        $config->findGuard($guard) ?? throw new NotFoundHttpException;

        try {
            return redirect()->away($start->handle($request->session(), $guard)->url);
        } catch (InvalidRedirectUriException $e) {
            return $redirector->failed($e, $guard);
        }
    }
}
