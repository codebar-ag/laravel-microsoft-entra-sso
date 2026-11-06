<?php

namespace CodebarAg\MicrosoftEntraSSO\Events;

use CodebarAg\MicrosoftEntraSSO\Data\SSOUser;
use Illuminate\Foundation\Events\Dispatchable;

/**
 * Dispatched when a Microsoft sign-in is refused (login gate, email linking policy).
 * The user carried here never includes access or refresh tokens.
 */
class SSOLoginDenied
{
    use Dispatchable;

    public function __construct(
        public readonly SSOUser $microsoftUser,
        public readonly string $guard,
        public readonly string $reason,
    ) {}
}
