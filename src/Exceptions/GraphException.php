<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Exceptions;

use RuntimeException;

/**
 * Microsoft Graph refused a request or answered with something unusable.
 */
final class GraphException extends RuntimeException implements SignInFailure
{
    public static function requestFailed(string $endpoint, int $status): self
    {
        return new self("Microsoft Graph request to {$endpoint} failed with status {$status}.");
    }

    public static function invalidResponse(string $what): self
    {
        return new self("Microsoft Graph returned an invalid response for {$what}.");
    }

    public static function untrustedLink(): self
    {
        return new self('Microsoft Graph returned a pagination link outside of Microsoft Graph.');
    }

    public static function missingIdentity(): self
    {
        return new self('The user has no linked Microsoft identity.');
    }

    public static function missingToken(): self
    {
        return new self('The linked Microsoft identity has no access token and no refresh token.');
    }

    public function translationKey(): string
    {
        return 'microsoft-entra-sso.error.graph_failed';
    }
}
