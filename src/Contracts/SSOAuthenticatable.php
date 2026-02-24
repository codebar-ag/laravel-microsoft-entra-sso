<?php

namespace CodebarAg\MicrosoftEntraSSO\Contracts;

use CodebarAg\MicrosoftEntraSSO\Models\MicrosoftSSOIdentity;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * @property-read MicrosoftSSOIdentity|null $microsoftIdentity
 */
interface SSOAuthenticatable
{
    public function microsoftIdentity(): MorphOne;

    public static function findByMicrosoftId(string $microsoftId): ?static;

    public static function findOrCreateFromMicrosoft(array $microsoftUser): static;

    public function linkMicrosoftAccount(array $microsoftUser): void;

    public function hasMicrosoftSSOLinked(): bool;

    public function isMicrosoftTokenExpired(): bool;

    public function updateMicrosoftTokens(array $microsoftUser): void;
}
