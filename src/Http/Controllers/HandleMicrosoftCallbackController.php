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
            $this->validateState($request);

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

            $codeVerifier = $request->session()->pull('microsoft_entra_sso_code_verifier');
            if (! is_string($codeVerifier) || $codeVerifier === '') {
                throw TokenExchangeException::missingCodeVerifier();
            }

            $this->oauthService->setRedirectUri($this->getCallbackUrl($guard));

            $tokens = $this->oauthService->exchangeCodeForTokens($code, $codeVerifier);
            $accessToken = $tokens['access_token'] ?? null;
            if (! is_string($accessToken) || $accessToken === '') {
                throw TokenExchangeException::failed(
                    'invalid_token_response',
                    'The token response did not contain an access token.',
                );
            }

            $microsoftUser = $this->oauthService->getUserFromToken($accessToken);
            if (! isset($microsoftUser['id']) || ! is_string($microsoftUser['id']) || $microsoftUser['id'] === '') {
                throw TokenExchangeException::failed(
                    'invalid_user_response',
                    'Microsoft Graph did not return a user identifier.',
                );
            }

            $email = $microsoftUser['email'] ?? null;
            if (! is_string($email) || $email === '') {
                throw TokenExchangeException::failed(
                    'invalid_user_response',
                    'Microsoft Graph did not return a usable email address.',
                );
            }

            $microsoftUser['token'] = $accessToken;
            $microsoftUser['refresh_token'] = $tokens['refresh_token'] ?? null;
            $microsoftUser['expires_in'] = $tokens['expires_in'] ?? null;

            $user = $this->resolveUser($microsoftUser, $guard);

            Auth::guard($guard)->login($user, remember: true);

            $request->session()->regenerate();
            $request->session()->forget([
                'microsoft_entra_sso_state',
                'microsoft_entra_sso_code_verifier',
                'microsoft_entra_sso_guard',
            ]);

            $redirectPath = config("microsoft-entra-sso.guards.{$guard}.redirect_after_login", '/');

            return redirect()->intended($redirectPath);
        } catch (SSOException $e) {
            Log::error('Microsoft Entra SSO Error: '.$e->getMessage());

            return $this->redirectToLoginWithError($e->getMessage());
        } catch (\Throwable $e) {
            Log::error('Microsoft Entra SSO unexpected error: '.$e->getMessage(), [
                'exception' => $e,
            ]);

            return $this->redirectToLoginWithError(
                'An unexpected error occurred during Microsoft sign-in. Please try again.',
            );
        }
    }
}
