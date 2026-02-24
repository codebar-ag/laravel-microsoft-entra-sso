<?php

namespace CodebarAg\MicrosoftEntraSSO\Exceptions;

use Exception;

class SSOException extends Exception
{
    public static function configurationMissing(string $key): self
    {
        return new self(__('microsoft-entra-sso.error.configuration_missing', ['key' => $key]));
    }

    public static function guardNotConfigured(string $guard): self
    {
        return new self(__('microsoft-entra-sso.error.guard_not_configured', ['guard' => $guard]));
    }

    public static function guardMismatch(string $expectedGuard, string $actualGuard): self
    {
        return new self(__('microsoft-entra-sso.error.guard_mismatch', [
            'expected_guard' => $expectedGuard,
            'actual_guard' => $actualGuard,
        ]));
    }

    public static function guardModelNotConfigured(string $guard): self
    {
        return new self(__('microsoft-entra-sso.error.guard_model_not_configured', ['guard' => $guard]));
    }

    public static function modelClassNotFound(string $model): self
    {
        return new self(__('microsoft-entra-sso.error.model_class_not_found', ['model' => $model]));
    }

    public static function modelMissingTrait(string $model): self
    {
        return new self(__('microsoft-entra-sso.error.model_missing_trait', ['model' => $model]));
    }

    public static function userNotFound(string $microsoftId): self
    {
        return new self(__('microsoft-entra-sso.error.user_not_found', ['microsoft_id' => $microsoftId]));
    }

    public static function stateExpired(): self
    {
        return new self(__('microsoft-entra-sso.error.state_expired'));
    }

    public static function invalidRedirectUri(string $uri): self
    {
        return new self(__('microsoft-entra-sso.error.invalid_redirect_uri', ['uri' => $uri]));
    }
}
