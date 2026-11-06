<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Exceptions;

use RuntimeException;

/**
 * The redirect URI derived for this request is on a host that is not allowed.
 */
final class InvalidRedirectUriException extends RuntimeException implements SignInFailure
{
    public static function hostNotAllowed(string $uri): self
    {
        return new self("The redirect URI [{$uri}] is not on an allowed host (allowed_redirect_hosts).");
    }

    public function translationKey(): string
    {
        return 'microsoft-entra-sso.error.invalid_redirect_uri';
    }
}
