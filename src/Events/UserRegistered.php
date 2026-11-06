<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Events;

use CodebarAg\MicrosoftEntraSSO\Contracts\SsoUser;
use CodebarAg\MicrosoftEntraSSO\Identity\SignIn;
use Illuminate\Foundation\Events\Dispatchable;

/**
 * A new local user was created by the UserProvisioner and linked to the Microsoft identity.
 */
final readonly class UserRegistered
{
    use Dispatchable;

    public function __construct(
        public SsoUser $user,
        public SignIn $signIn,
        public string $guard,
    ) {}
}
