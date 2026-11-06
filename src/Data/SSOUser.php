<?php

namespace CodebarAg\MicrosoftEntraSSO\Data;

use CodebarAg\MicrosoftEntraSSO\Exceptions\TokenExchangeException;
use Illuminate\Support\Arr;

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
        public readonly ?string $tenantId = null,
        public readonly ?string $objectId = null,
    ) {}

    /**
     * @param  array<string, mixed>  $graphPayload
     */
    public static function fromGraphPayload(array $graphPayload): self
    {
        $id = Arr::get($graphPayload, 'id');
        if (! is_string($id) || $id === '') {
            throw TokenExchangeException::failed(
                'invalid_user_response',
                'Microsoft Graph did not return a user identifier.',
            );
        }

        $email = Arr::get($graphPayload, 'mail') ?? Arr::get($graphPayload, 'userPrincipalName');
        if (! is_string($email) || $email === '') {
            throw TokenExchangeException::failed(
                'invalid_user_response',
                'Microsoft Graph did not return a usable email address.',
            );
        }

        $displayName = Arr::get($graphPayload, 'displayName');
        $name = is_string($displayName) ? $displayName : '';
        $jobTitle = Arr::get($graphPayload, 'jobTitle');
        $department = Arr::get($graphPayload, 'department');

        return new self(
            id: $id,
            name: $name,
            email: $email,
            jobTitle: is_string($jobTitle) ? $jobTitle : null,
            department: is_string($department) ? $department : null,
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
            tenantId: $this->tenantId,
            objectId: $this->objectId,
        );
    }

    /**
     * Attach the tenant (tid) and object id (oid) taken from a validated id token.
     */
    public function withTenant(?string $tenantId, ?string $objectId): self
    {
        return new self(
            id: $this->id,
            name: $this->name,
            email: $this->email,
            jobTitle: $this->jobTitle,
            department: $this->department,
            raw: $this->raw,
            token: $this->token,
            refreshToken: $this->refreshToken,
            expiresIn: $this->expiresIn,
            approvedScopes: $this->approvedScopes,
            tenantId: $tenantId,
            objectId: $objectId,
        );
    }

    /**
     * A copy without access/refresh tokens, safe to hand to events and logs.
     */
    public function withoutTokens(): self
    {
        return new self(
            id: $this->id,
            name: $this->name,
            email: $this->email,
            jobTitle: $this->jobTitle,
            department: $this->department,
            raw: $this->raw,
            approvedScopes: $this->approvedScopes,
            tenantId: $this->tenantId,
            objectId: $this->objectId,
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
            'tenant_id' => $this->tenantId,
            'object_id' => $this->objectId,
        ];
    }
}
