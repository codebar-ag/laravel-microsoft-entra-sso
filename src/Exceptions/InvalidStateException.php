<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Exceptions;

use RuntimeException;

/**
 * The callback does not belong to a sign-in this session started.
 */
final class InvalidStateException extends RuntimeException implements SignInFailure
{
    private function __construct(string $message, private readonly string $translationKey = 'microsoft-entra-sso.error.state_invalid')
    {
        parent::__construct($message);
    }

    public static function missing(): self
    {
        return new self('The session holds no sign-in state.');
    }

    public static function mismatch(): self
    {
        return new self('The returned state does not match the stored state.');
    }

    public static function guardMismatch(string $expected, string $actual): self
    {
        return new self("The sign-in was started for guard [{$expected}] but the callback used [{$actual}].");
    }

    public static function expired(): self
    {
        return new self('The sign-in state has expired.', 'microsoft-entra-sso.error.state_expired');
    }

    public function translationKey(): string
    {
        return $this->translationKey;
    }
}
