<?php

namespace CodebarAg\MicrosoftEntraSSO\Data;

use CodebarAg\MicrosoftEntraSSO\Exceptions\TokenExchangeException;

class SSOUser
{
    /**
     * @param  array<string, mixed>  $raw
     * @param  array<int, string>  $approvedScopes
     */
    public function __construct(
        public readonly string $id,
        public readonly string $name,
        public readonly string $email,
        public readonly ?string $jobTitle,
        public readonly ?string $department,
        public readonly array $raw,
        public readonly ?string $token = null,
        public readonly ?string $refreshToken = null,
        public readonly ?int $expiresIn = null,
        public readonly array $approvedScopes = [],
    ) {}

    /**
     * @param  array<string, mixed>  $graphPayload
     */
    public static function fromGraphPayload(array $graphPayload): self
    {
        $id = $graphPayload['id'] ?? null;
        if (! is_string($id) || $id === '') {
            throw TokenExchangeException::failed(
                'invalid_user_response',
                'Microsoft Graph did not return a user identifier.',
            );
        }

        $email = $graphPayload['mail'] ?? $graphPayload['userPrincipalName'] ?? null;
        if (! is_string($email) || $email === '') {
            throw TokenExchangeException::failed(
                'invalid_user_response',
                'Microsoft Graph did not return a usable email address.',
            );
        }

        return new self(
            id: $id,
            name: (function () use ($graphPayload): string {
                $n = $graphPayload['displayName'] ?? '';

                return is_string($n) ? $n : '';
            })(),
            email: $email,
            jobTitle: is_string($graphPayload['jobTitle'] ?? null) ? $graphPayload['jobTitle'] : null,
            department: is_string($graphPayload['department'] ?? null) ? $graphPayload['department'] : null,
            raw: $graphPayload,
        );
    }

    public function withToken(SSOToken $token): self
    {
        return new self(
            id: $this->id,
            name: $this->name,
            email: $this->email,
            jobTitle: $this->jobTitle,
            department: $this->department,
            raw: $this->raw,
            token: $token->accessToken,
            refreshToken: $token->refreshToken,
            expiresIn: $token->expiresIn,
            approvedScopes: $token->approvedScopes,
        );
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'job_title' => $this->jobTitle,
            'department' => $this->department,
            'raw' => $this->raw,
            'token' => $this->token,
            'refresh_token' => $this->refreshToken,
            'expires_in' => $this->expiresIn,
            'approved_scopes' => $this->approvedScopes,
        ];
    }
}
