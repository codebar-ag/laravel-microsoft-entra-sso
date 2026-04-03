<?php

namespace CodebarAg\MicrosoftEntraSSO\Data;

use CodebarAg\MicrosoftEntraSSO\Exceptions\TokenExchangeException;

class SSOToken
{
    /**
     * @param  array<int, string>  $approvedScopes
     */
    public function __construct(
        public readonly string $accessToken,
        public readonly ?string $refreshToken,
        public readonly ?int $expiresIn,
        public readonly array $approvedScopes = [],
    ) {}

    /**
     * @param  array<string, mixed>  $payload
     */
    public static function fromArray(array $payload): self
    {
        $accessToken = $payload['access_token'] ?? null;
        if (! is_string($accessToken) || $accessToken === '') {
            throw TokenExchangeException::failed(
                'invalid_token_response',
                'The token response did not contain an access token.',
            );
        }

        $scopeValue = $payload['scope'] ?? '';
        $approvedScopes = [];
        if (is_string($scopeValue) && $scopeValue !== '') {
            $approvedScopes = preg_split('/[\s,]+/', trim($scopeValue)) ?: [];
        }

        $refreshToken = $payload['refresh_token'] ?? null;

        return new self(
            accessToken: $accessToken,
            refreshToken: is_string($refreshToken) ? $refreshToken : null,
            expiresIn: is_int($payload['expires_in'] ?? null) ? $payload['expires_in'] : null,
            approvedScopes: array_values(array_filter($approvedScopes, static fn (string $scope) => $scope !== '')),
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'access_token' => $this->accessToken,
            'refresh_token' => $this->refreshToken,
            'expires_in' => $this->expiresIn,
            'scope' => implode(' ', $this->approvedScopes),
        ];
    }
}
