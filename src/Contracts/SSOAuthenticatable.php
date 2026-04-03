<?php

namespace CodebarAg\MicrosoftEntraSSO\Contracts;

use CodebarAg\MicrosoftEntraSSO\Models\MicrosoftSSOIdentity;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * @property-read MicrosoftSSOIdentity|null $microsoftIdentity
 */
interface SSOAuthenticatable extends Authenticatable
{
    /**
     * @return MorphOne<MicrosoftSSOIdentity, Model>
     */
    public function microsoftIdentity(): MorphOne;

    public static function findByMicrosoftId(string $microsoftId): ?static;

    /**
     * @param  array<string, mixed>  $microsoftUser
     */
    public static function findOrCreateFromMicrosoft(array $microsoftUser): static;

    /**
     * @param  array<string, mixed>  $microsoftUser
     */
    public function linkMicrosoftAccount(array $microsoftUser): void;

    public function hasMicrosoftSSOLinked(): bool;

    public function isMicrosoftTokenExpired(): bool;

    /**
     * @param  array<string, mixed>  $microsoftUser
     */
    public function updateMicrosoftTokens(array $microsoftUser): void;
}
