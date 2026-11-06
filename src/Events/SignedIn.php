<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Events;

use CodebarAg\MicrosoftEntraSSO\Contracts\SsoUser;
use CodebarAg\MicrosoftEntraSSO\Identity\SignIn;
use Illuminate\Foundation\Events\Dispatchable;

/**
 * A person signed in with Microsoft (also dispatched right after UserRegistered).
 */
final readonly class SignedIn
{
    use Dispatchable;

    public function __construct(
        public SsoUser $user,
        public SignIn $signIn,
        public string $guard,
    ) {}
}
