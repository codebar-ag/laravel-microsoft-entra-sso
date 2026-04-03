<?php

namespace CodebarAg\MicrosoftEntraSSO\Http\Controllers\Concerns;

use CodebarAg\MicrosoftEntraSSO\Contracts\SSOAuthenticatable;
use CodebarAg\MicrosoftEntraSSO\Data\SSOUser;
use CodebarAg\MicrosoftEntraSSO\Events\SSOUserAuthenticated;
use CodebarAg\MicrosoftEntraSSO\Events\SSOUserRegistered;
use CodebarAg\MicrosoftEntraSSO\Exceptions\InvalidStateException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\SSOException;
use CodebarAg\MicrosoftEntraSSO\Services\GuardConfigValidator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
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
        if (is_string($issuedAt) && ctype_digit($issuedAt)) {
            $issuedAt = (int) $issuedAt;
        }
        $ttlRaw = config('microsoft-entra-sso.state_ttl_seconds', 300);
        $ttl = is_int($ttlRaw) ? $ttlRaw : (is_numeric($ttlRaw) ? (int) $ttlRaw : 300);
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
        $prefix = config('microsoft-entra-sso.route_prefix', 'sso/microsoft');
        $prefix = is_string($prefix) && $prefix !== '' ? $prefix : 'sso/microsoft';

        return url($prefix."/{$guard}/callback");
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
        $modelClass = Arr::get($guardConfig, 'model');
        if (! is_string($modelClass) || $modelClass === '') {
            throw SSOException::guardModelNotConfigured($guard);
        }
        /** @var class-string<Model&SSOAuthenticatable> $modelClass */
        $microsoftUserData = $microsoftUser->toArray();

        $microsoftId = Arr::get($microsoftUserData, 'id');
        if (! is_string($microsoftId) || $microsoftId === '') {
            throw SSOException::userNotFound('missing-id');
        }

        $existing = $modelClass::findByMicrosoftId($microsoftId);

        if ($existing) {
            $existing->updateMicrosoftTokens($microsoftUserData);
            SSOUserAuthenticated::dispatch($existing, $guard, $microsoftUserData);

            return $existing;
        }

        $email = Arr::get($microsoftUserData, 'email');
        $byEmail = null;
        if (is_string($email) && $email !== '') {
            $byEmail = $modelClass::query()->where('email', $email)->first();
        }

        if ($byEmail instanceof SSOAuthenticatable) {
            $byEmail->linkMicrosoftAccount($microsoftUserData);
            SSOUserAuthenticated::dispatch($byEmail, $guard, $microsoftUserData);

            return $byEmail;
        }

        if (! config('microsoft-entra-sso.auto_register', true)) {
            throw SSOException::userNotFound($microsoftId);
        }

        $user = $modelClass::findOrCreateFromMicrosoft($microsoftUserData);
        SSOUserRegistered::dispatch($user, $guard, $microsoftUserData);

        return $user;
    }
}
