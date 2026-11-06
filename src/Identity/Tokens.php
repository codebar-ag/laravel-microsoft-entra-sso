<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Identity;

use Carbon\CarbonImmutable;
use SensitiveParameter;

final readonly class Tokens
{
    /**
     * @param  list<string>  $scopes
     */
    public function __construct(
        #[SensitiveParameter] public string $accessToken,
        #[SensitiveParameter] public ?string $refreshToken,
        public ?CarbonImmutable $expiresAt,
        public array $scopes = [],
        #[SensitiveParameter] public ?string $idToken = null,
    ) {}

    public function isExpired(): bool
    {
        return $this->expiresAt === null || $this->expiresAt->isPast();
    }

    /**
     * A refresh response may omit the refresh token; the previous one stays valid then.
     */
    public function keepingRefreshToken(?string $previous): self
    {
        return clone ($this, ['refreshToken' => $this->refreshToken ?? $previous]);
    }
}
