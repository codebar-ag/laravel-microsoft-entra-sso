<?php

namespace CodebarAg\MicrosoftEntraSSO\Http\Controllers\Concerns;

use CodebarAg\MicrosoftEntraSSO\Contracts\SSOAuthenticatable;
use CodebarAg\MicrosoftEntraSSO\Events\SSOUserAuthenticated;
use CodebarAg\MicrosoftEntraSSO\Events\SSOUserRegistered;
use CodebarAg\MicrosoftEntraSSO\Exceptions\InvalidStateException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\SSOException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

trait HandlesMicrosoftSSO
{
    protected function validateGuard(string $guard): void
    {
        $guards = config('microsoft-entra-sso.guards', []);

        if (! isset($guards[$guard])) {
            throw SSOException::guardNotConfigured($guard);
        }
    }

    protected function validateState(Request $request): void
    {
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

    protected function resolveUser(array $microsoftUser, string $guard): SSOAuthenticatable
    {
        $guardConfig = config("microsoft-entra-sso.guards.{$guard}");
        $modelClass = $guardConfig['model'];

        if (! in_array(SSOAuthenticatable::class, class_implements($modelClass) ?: [], true)) {
            throw SSOException::modelMissingTrait($modelClass);
        }

        $microsoftId = $microsoftUser['id'] ?? null;
        if (! is_string($microsoftId) || $microsoftId === '') {
            throw SSOException::userNotFound('missing-id');
        }

        /** @var SSOAuthenticatable|null $existing */
        $existing = $modelClass::findByMicrosoftId($microsoftId);

        if ($existing) {
            $existing->updateMicrosoftTokens($microsoftUser);
            SSOUserAuthenticated::dispatch($existing, $guard, $microsoftUser);

            return $existing;
        }

        $email = $microsoftUser['email'] ?? null;
        $byEmail = null;
        if (is_string($email) && $email !== '') {
            $byEmail = $modelClass::where('email', $email)->first();
        }

        if ($byEmail) {
            $byEmail->linkMicrosoftAccount($microsoftUser);
            SSOUserAuthenticated::dispatch($byEmail, $guard, $microsoftUser);

            return $byEmail;
        }

        if (! config('microsoft-entra-sso.auto_register', true)) {
            throw SSOException::userNotFound($microsoftId);
        }

        /** @var SSOAuthenticatable $user */
        $user = $modelClass::findOrCreateFromMicrosoft($microsoftUser);
        SSOUserRegistered::dispatch($user, $guard, $microsoftUser);

        return $user;
    }
}
