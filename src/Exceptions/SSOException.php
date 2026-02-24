<?php

namespace CodebarAg\MicrosoftEntraSSO\Exceptions;

use Exception;

class SSOException extends Exception
{
    public static function configurationMissing(string $key): static
    {
        return new static("Microsoft Entra SSO configuration value [{$key}] is missing. Please check your microsoft-entra-sso config file.");
    }

    public static function guardNotConfigured(string $guard): static
    {
        return new static("Guard [{$guard}] is not configured for Microsoft Entra SSO. Add it to the 'guards' array in your microsoft-entra-sso config.");
    }

    public static function modelMissingTrait(string $model): static
    {
        return new static("Model [{$model}] must use the HasMicrosoftSSO trait to support Microsoft Entra SSO.");
    }

    public static function userNotFound(string $microsoftId): static
    {
        return new static("No user found with Microsoft ID [{$microsoftId}] and auto-registration is disabled.");
    }
}
