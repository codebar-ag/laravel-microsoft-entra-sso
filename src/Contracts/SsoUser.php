<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Contracts;

use CodebarAg\MicrosoftEntraSSO\Models\MicrosoftIdentity;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * An Eloquent user model that can sign in with Microsoft. Use the HasMicrosoftIdentity trait.
 */
interface SsoUser extends Authenticatable
{
    /**
     * @return MorphOne<MicrosoftIdentity, covariant \Illuminate\Database\Eloquent\Model>
     */
    public function microsoftIdentity(): MorphOne;

    public function isMicrosoftTokenExpired(): bool;
}
