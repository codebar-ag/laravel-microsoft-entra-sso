<?php

namespace CodebarAg\MicrosoftEntraSSO\Http\Controllers;

use CodebarAg\MicrosoftEntraSSO\Exceptions\SSOException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\TokenExchangeException;
use CodebarAg\MicrosoftEntraSSO\Http\Controllers\Concerns\HandlesMicrosoftSSO;
use CodebarAg\MicrosoftEntraSSO\Services\MicrosoftOAuthService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HandleMicrosoftCallbackController extends Controller
{
    use HandlesMicrosoftSSO;

    public function __construct(
        protected MicrosoftOAuthService $oauthService,
    ) {}

    public function __invoke(Request $request, string $guard = 'web'): RedirectResponse
    {
        try {
            $this->validateGuard($guard);
            $this->validateState($request, $guard);

            if ($request->has('error')) {
                throw TokenExchangeException::failed(
                    (string) $request->input('error', 'unknown_error'),
                    (string) $request->input('error_description', ''),
                );
            }

            $code = $request->input('code');
            if (! is_string($code) || $code === '') {
                throw TokenExchangeException::missingAuthorizationCode();
            }

            $codeVerifier = (bool) config('microsoft-entra-sso.stateless', false)
                ? (string) $request->input('code_verifier', '')
                : $request->session()->pull('microsoft_entra_sso_code_verifier');

            if (! is_string($codeVerifier) || $codeVerifier === '') {
                throw TokenExchangeException::missingCodeVerifier();
            }

            $this->oauthService->setRedirectUri($this->getCallbackUrl($guard));

            $tokens = $this->oauthService->exchangeCodeForTokens($code, $codeVerifier);
            $microsoftUser = $this->oauthService->getUserFromToken($tokens->accessToken)->withToken($tokens);

            $user = $this->resolveUser($microsoftUser, $guard);

            Auth::guard($guard)->login($user, remember: true);

            $request->session()->regenerate();
            $request->session()->forget([
                'microsoft_entra_sso_state',
                'microsoft_entra_sso_code_verifier',
                'microsoft_entra_sso_guard',
                'microsoft_entra_sso_issued_at',
            ]);

            $redirectPath = config("microsoft-entra-sso.guards.{$guard}.redirect_after_login", '/');

            return redirect()->intended($redirectPath);
        } catch (SSOException $e) {
            Log::warning('Microsoft Entra SSO callback failed', [
                'guard' => $guard,
                'error' => $e->getMessage(),
            ]);

            return $this->redirectToLoginWithError($e->getMessage());
        } catch (\Throwable $e) {
            Log::error('Microsoft Entra SSO unexpected callback error', [
                'guard' => $guard,
                'exception' => $e,
            ]);

            return $this->redirectToLoginWithError(
                'An unexpected error occurred during Microsoft sign-in. Please try again.',
            );
        }
    }
}
