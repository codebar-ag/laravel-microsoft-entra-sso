<?php

namespace CodebarAg\MicrosoftEntraSSO\Http\Controllers\Concerns;

use CodebarAg\MicrosoftEntraSSO\Contracts\SSOAuthenticatable;
use CodebarAg\MicrosoftEntraSSO\Data\SSOUser;
use CodebarAg\MicrosoftEntraSSO\Events\SSOUserAuthenticated;
use CodebarAg\MicrosoftEntraSSO\Events\SSOUserRegistered;
use CodebarAg\MicrosoftEntraSSO\Exceptions\InvalidStateException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\SSOException;
use CodebarAg\MicrosoftEntraSSO\Services\GuardConfigValidator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

trait HandlesMicrosoftSSO
{
    protected function validateGuard(string $guard): void
    {
        app(GuardConfigValidator::class)->guardConfig($guard);
    }

    protected function validateState(Request $request, string $guard): void
    {
        if ((bool) config('microsoft-entra-sso.stateless', false)) {
            return;
        }

        $sessionGuard = $request->session()->pull('microsoft_entra_sso_guard');
        if (! is_string($sessionGuard) || $sessionGuard === '') {
            throw InvalidStateException::make();
        }
        if ($sessionGuard !== $guard) {
            throw SSOException::guardMismatch($sessionGuard, $guard);
        }

        $issuedAt = $request->session()->pull('microsoft_entra_sso_issued_at');
        $ttl = (int) config('microsoft-entra-sso.state_ttl_seconds', 300);
        if (! is_int($issuedAt) || $issuedAt <= 0) {
            throw InvalidStateException::make();
        }
        if (time() - $issuedAt > $ttl) {
            throw SSOException::stateExpired();
        }

        $sessionState = $request->session()->pull('microsoft_entra_sso_state');
        $returnedState = $request->input('state');

        if (! is_string($sessionState) || ! is_string($returnedState) || $sessionState === '' || $sessionState !== $returnedState) {
            throw InvalidStateException::make();
        }
    }

    protected function getCallbackUrl(string $guard): string
    {
        return url(config('microsoft-entra-sso.route_prefix')."/{$guard}/callback");
    }

    protected function redirectToLoginWithError(string $message): RedirectResponse
    {
        $target = Route::has('login') ? route('login') : '/';

        return redirect()->to($target)
            ->with('microsoft_entra_sso_error', $message);
    }

    protected function resolveUser(SSOUser $microsoftUser, string $guard): SSOAuthenticatable
    {
        $guardConfig = app(GuardConfigValidator::class)->guardConfig($guard);
        $modelClass = $guardConfig['model'];
        $microsoftUserData = $microsoftUser->toArray();

        $microsoftId = $microsoftUserData['id'] ?? null;
        if (! is_string($microsoftId) || $microsoftId === '') {
            throw SSOException::userNotFound('missing-id');
        }

        /** @var SSOAuthenticatable|null $existing */
        $existing = $modelClass::findByMicrosoftId($microsoftId);

        if ($existing) {
            $existing->updateMicrosoftTokens($microsoftUserData);
            SSOUserAuthenticated::dispatch($existing, $guard, $microsoftUserData);

            return $existing;
        }

        $email = $microsoftUserData['email'] ?? null;
        $byEmail = null;
        if (is_string($email) && $email !== '') {
            $byEmail = $modelClass::where('email', $email)->first();
        }

        if ($byEmail) {
            $byEmail->linkMicrosoftAccount($microsoftUserData);
            SSOUserAuthenticated::dispatch($byEmail, $guard, $microsoftUserData);

            return $byEmail;
        }

        if (! config('microsoft-entra-sso.auto_register', true)) {
            throw SSOException::userNotFound($microsoftId);
        }

        /** @var SSOAuthenticatable $user */
        $user = $modelClass::findOrCreateFromMicrosoft($microsoftUserData);
        SSOUserRegistered::dispatch($user, $guard, $microsoftUserData);

        return $user;
    }
}
