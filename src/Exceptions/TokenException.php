<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Exceptions;

use RuntimeException;

/**
 * The token endpoint refused a request or answered with something unusable.
 */
final class TokenException extends RuntimeException implements SignInFailure
{
    private function __construct(string $message, private readonly string $translationKey)
    {
        parent::__construct($message);
    }

    public static function rejected(string $error, string $description): self
    {
        return new self(
            "Token request rejected: {$error}".($description !== '' ? " - {$description}" : ''),
            'microsoft-entra-sso.error.token_failed',
        );
    }

    public static function invalidResponse(string $reason): self
    {
        return new self("Invalid token response: {$reason}", 'microsoft-entra-sso.error.token_failed');
    }

    public static function missingAuthorizationCode(): self
    {
        return new self('The callback has no authorization code.', 'microsoft-entra-sso.error.missing_authorization_code');
    }

    public function translationKey(): string
    {
        return $this->translationKey;
    }
}
