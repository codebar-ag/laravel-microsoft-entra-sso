<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Exceptions;

use RuntimeException;

/**
 * The package configuration is invalid. Developer-facing: the message names the offending key.
 */
final class ConfigurationException extends RuntimeException
{
    public static function invalid(string $key, string $reason): self
    {
        return new self("Invalid microsoft-entra-sso configuration [{$key}]: {$reason}");
    }

    public static function missing(string $key): self
    {
        return self::invalid($key, 'a value is required.');
    }
}
