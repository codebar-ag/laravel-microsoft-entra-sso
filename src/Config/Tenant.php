<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Config;

use CodebarAg\MicrosoftEntraSSO\Support\Guid;

/**
 * The authority segment of the Entra endpoints: one directory (a GUID) or a multi-directory keyword.
 */
final readonly class Tenant
{
    private const array KEYWORDS = ['organizations', 'common', 'consumers'];

    private function __construct(public string $value) {}

    public static function tryFrom(string $value): ?self
    {
        $normalized = strtolower($value);

        if (Guid::isValid($normalized) || in_array($normalized, self::KEYWORDS, true)) {
            return new self($normalized);
        }

        return null;
    }

    public function isSingleDirectory(): bool
    {
        return Guid::isValid($this->value);
    }
}
