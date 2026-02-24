<?php

namespace CodebarAg\MicrosoftEntraSSO\Exceptions;

class TokenExchangeException extends SSOException
{
    public static function failed(string $error, string $description = ''): self
    {
        $message = $description !== ''
            ? __('microsoft-entra-sso.error.token_exchange_failed_with_description', [
                'error' => $error,
                'description' => $description,
            ])
            : __('microsoft-entra-sso.error.token_exchange_failed', ['error' => $error]);

        return new self($message);
    }

    public static function missingAuthorizationCode(): self
    {
        return new self(__('microsoft-entra-sso.error.missing_authorization_code'));
    }

    public static function missingCodeVerifier(): self
    {
        return new self(__('microsoft-entra-sso.error.missing_code_verifier'));
    }
}
