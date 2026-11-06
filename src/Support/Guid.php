<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Support;

/**
 * Pure helpers for the GUIDs Microsoft uses for tenants and objects.
 */
final class Guid
{
    private const string PATTERN = '/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/i';

    public static function isValid(string $value): bool
    {
        return preg_match(self::PATTERN, $value) === 1;
    }

    public static function normalize(string $value): string
    {
        return strtolower($value);
    }
}
