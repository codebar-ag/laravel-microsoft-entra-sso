<?php

namespace CodebarAg\MicrosoftEntraSSO\Exceptions;

class TokenExchangeException extends SSOException
{
    public static function failed(string $error, string $description = ''): static
    {
        $message = "Token exchange failed: {$error}";

        if ($description) {
            $message .= " — {$description}";
        }

        return new static($message);
    }

    public static function missingAuthorizationCode(): static
    {
        return new static('The authorization code is missing from the callback request.');
    }

    public static function missingCodeVerifier(): static
    {
        return new static('The PKCE code verifier is missing from the session. Please start the sign-in flow again.');
    }
}
