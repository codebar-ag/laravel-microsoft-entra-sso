<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Concerns;

use CodebarAg\MicrosoftEntraSSO\Models\MicrosoftIdentity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * The model side of Microsoft sign-in: the identity relation and a few helpers. No sign-in logic.
 *
 * @mixin Model
 */
trait HasMicrosoftIdentity
{
    /**
     * @return MorphOne<MicrosoftIdentity, covariant Model>
     */
    public function microsoftIdentity(): MorphOne
    {
        return $this->morphOne(MicrosoftIdentity::class, 'authenticatable');
    }

    public function isMicrosoftLinked(): bool
    {
        return $this->microsoftIdentity()->exists();
    }

    public function isMicrosoftTokenExpired(): bool
    {
        $identity = $this->microsoftIdentity;

        return ! $identity instanceof MicrosoftIdentity || $identity->isTokenExpired();
    }

    public function unlinkMicrosoft(): void
    {
        $this->microsoftIdentity()->delete();
        $this->unsetRelation('microsoftIdentity');
    }
}
