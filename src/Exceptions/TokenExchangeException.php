<?php

namespace CodebarAg\MicrosoftEntraSSO\Exceptions;

class TokenExchangeException extends SSOException
{
    public static function failed(string $error, string $description = ''): self
    {
        $message = "Token exchange failed: {$error}";

        if ($description) {
            $message .= " — {$description}";
        }

        return new self($message);
    }

    public static function missingAuthorizationCode(): self
    {
        return new self('The authorization code is missing from the callback request.');
    }

    public static function missingCodeVerifier(): self
    {
        return new self('The PKCE code verifier is missing from the session. Please start the sign-in flow again.');
    }
}
