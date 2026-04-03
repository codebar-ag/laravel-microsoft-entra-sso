<?php

namespace CodebarAg\MicrosoftEntraSSO\Data;

use CodebarAg\MicrosoftEntraSSO\Exceptions\TokenExchangeException;
use Illuminate\Support\Arr;

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
        $accessToken = Arr::get($payload, 'access_token');
        if (! is_string($accessToken) || $accessToken === '') {
            throw TokenExchangeException::failed(
                'invalid_token_response',
                'The token response did not contain an access token.',
            );
        }

        $scopeValue = Arr::get($payload, 'scope', '');
        $approvedScopes = [];
        if (is_string($scopeValue) && $scopeValue !== '') {
            $parts = preg_split('/[\s,]+/', trim($scopeValue)) ?: [];
            $approvedScopes = collect($parts)
                ->filter(fn (string $scope) => $scope !== '')
                ->values()
                ->all();
        }

        $refreshToken = Arr::get($payload, 'refresh_token');
        $expiresIn = Arr::get($payload, 'expires_in');

        return new self(
            accessToken: $accessToken,
            refreshToken: is_string($refreshToken) ? $refreshToken : null,
            expiresIn: is_int($expiresIn) ? $expiresIn : null,
            approvedScopes: $approvedScopes,
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
