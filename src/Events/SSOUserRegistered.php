<?php

namespace CodebarAg\MicrosoftEntraSSO\Events;

use CodebarAg\MicrosoftEntraSSO\Contracts\SSOAuthenticatable;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SSOUserRegistered
{
    use Dispatchable, SerializesModels;

    /**
     * @param  array<string, mixed>  $microsoftUser
     */
    public function __construct(
        public readonly SSOAuthenticatable $user,
        public readonly string $guard,
        public readonly array $microsoftUser,
    ) {}
}
