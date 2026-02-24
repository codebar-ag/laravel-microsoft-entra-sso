<?php

namespace CodebarAg\MicrosoftEntraSSO\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureSSOEnabled
{
    public function handle(Request $request, Closure $next): Response
    {
        $hasCredentials = config('microsoft-entra-sso.client_id')
            && config('microsoft-entra-sso.client_secret')
            && config('microsoft-entra-sso.tenant_id');

        if (! $hasCredentials) {
            abort(503, 'Microsoft SSO is not configured.');
        }

        return $next($request);
    }
}
