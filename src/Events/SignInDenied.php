<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Events;

use CodebarAg\MicrosoftEntraSSO\Enums\DenialReason;
use CodebarAg\MicrosoftEntraSSO\Identity\EntraIdentity;
use CodebarAg\MicrosoftEntraSSO\Identity\Profile;
use Illuminate\Foundation\Events\Dispatchable;

/**
 * A valid Microsoft sign-in was refused. Carries no access, refresh or id token.
 */
final readonly class SignInDenied
{
    use Dispatchable;

    public function __construct(
        public EntraIdentity $identity,
        public Profile $profile,
        public string $guard,
        public DenialReason $reason,
    ) {}
}
