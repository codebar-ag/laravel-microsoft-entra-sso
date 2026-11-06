<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Exceptions;

use RuntimeException;

/**
 * The id token is missing, not trustworthy, or does not belong to this sign-in.
 */
final class InvalidIdTokenException extends RuntimeException implements SignInFailure
{
    public static function because(string $reason): self
    {
        return new self("Invalid id token: {$reason}");
    }

    public function translationKey(): string
    {
        return 'microsoft-entra-sso.error.invalid_id_token';
    }
}
