<?php

namespace CodebarAg\MicrosoftEntraSSO\Http\Controllers;

use CodebarAg\MicrosoftEntraSSO\Exceptions\SSOException;
use CodebarAg\MicrosoftEntraSSO\Http\Controllers\Concerns\HandlesMicrosoftSSO;
use CodebarAg\MicrosoftEntraSSO\Services\MicrosoftOAuthService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class RedirectToMicrosoftController extends Controller
{
    use HandlesMicrosoftSSO;

    public function __construct(
        protected MicrosoftOAuthService $oauthService,
    ) {}

    public function __invoke(Request $request, string $guard = 'web'): RedirectResponse
    {
        try {
            $this->validateGuard($guard);

            $state = MicrosoftOAuthService::generateState();
            $codeVerifier = MicrosoftOAuthService::generateCodeVerifier();

            $this->oauthService->setRedirectUri($this->getCallbackUrl($guard));

            $request->session()->put('microsoft_entra_sso_state', $state);
            $request->session()->put('microsoft_entra_sso_code_verifier', $codeVerifier);
            $request->session()->put('microsoft_entra_sso_guard', $guard);
            $request->session()->put('microsoft_entra_sso_issued_at', time());

            $url = $this->oauthService->getAuthorizationUrl($state, $codeVerifier);

            return redirect()->away($url);
        } catch (SSOException $e) {
            Log::warning('Microsoft Entra SSO redirect failed', [
                'guard' => $guard,
                'error' => $e->getMessage(),
            ]);

            return $this->redirectToLoginWithError($e->getMessage());
        }
    }
}
