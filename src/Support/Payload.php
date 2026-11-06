<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Support;

/**
 * Narrows decoded JSON (mixed) to the shapes the clients parse.
 */
final class Payload
{
    /**
     * Keeps the string-keyed entries of a decoded JSON object, an empty array for anything else.
     *
     * @return array<string, mixed>
     */
    public static function assoc(mixed $value): array
    {
        if (! is_array($value)) {
            return [];
        }

        $assoc = [];
        foreach ($value as $key => $item) {
            if (is_string($key)) {
                $assoc[$key] = $item;
            }
        }

        return $assoc;
    }

    /**
     * Keeps the entries that are JSON objects.
     *
     * @return list<array<string, mixed>>
     */
    public static function objects(mixed $value): array
    {
        if (! is_array($value)) {
            return [];
        }

        $objects = [];
        foreach ($value as $item) {
            if (is_array($item)) {
                $objects[] = self::assoc($item);
            }
        }

        return $objects;
    }

    /**
     * Keeps the entries that are non-empty strings.
     *
     * @return list<string>
     */
    public static function strings(mixed $value): array
    {
        if (! is_array($value)) {
            return [];
        }

        $strings = [];
        foreach ($value as $item) {
            if (is_string($item) && $item !== '') {
                $strings[] = $item;
            }
        }

        return $strings;
    }

    public static function string(mixed $value): ?string
    {
        return is_string($value) && $value !== '' ? $value : null;
    }
}
