<?php

namespace CodebarAg\MicrosoftEntraSSO\Exceptions;

use Exception;

class SSOException extends Exception
{
    public static function configurationMissing(string $key): self
    {
        return new self("Microsoft Entra SSO configuration value [{$key}] is missing. Please check your microsoft-entra-sso config file.");
    }

    public static function guardNotConfigured(string $guard): self
    {
        return new self("Guard [{$guard}] is not configured for Microsoft Entra SSO. Add it to the 'guards' array in your microsoft-entra-sso config.");
    }

    public static function guardMismatch(string $expectedGuard, string $actualGuard): self
    {
        return new self("OAuth guard mismatch. Expected [{$expectedGuard}] but callback used [{$actualGuard}].");
    }

    public static function guardModelNotConfigured(string $guard): self
    {
        return new self("Guard [{$guard}] is missing a valid model class in microsoft-entra-sso config.");
    }

    public static function modelClassNotFound(string $model): self
    {
        return new self("Model class [{$model}] configured for Microsoft Entra SSO does not exist.");
    }

    public static function modelMissingTrait(string $model): self
    {
        return new self("Model [{$model}] must use the HasMicrosoftSSO trait to support Microsoft Entra SSO.");
    }

    public static function userNotFound(string $microsoftId): self
    {
        return new self("No user found with Microsoft ID [{$microsoftId}] and auto-registration is disabled.");
    }

    public static function stateExpired(): self
    {
        return new self('The OAuth state has expired. Please start the Microsoft sign-in flow again.');
    }

    public static function invalidRedirectUri(string $uri): self
    {
        return new self("The configured redirect URI [{$uri}] is invalid or not allowed.");
    }
}
