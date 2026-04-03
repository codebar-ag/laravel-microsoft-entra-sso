<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Support;

use CodebarAg\MicrosoftEntraSSO\Contracts\SSOAuthenticatable;
use CodebarAg\MicrosoftEntraSSO\Traits\HasMicrosoftSSO;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;

/**
 * @internal Ensures Larastan analyses {@see HasMicrosoftSSO}; not part of the public API.
 */
abstract class UsesHasMicrosoftSSOTraitForStaticAnalysis extends AuthenticatableUser implements SSOAuthenticatable
{
    use HasMicrosoftSSO;
}
