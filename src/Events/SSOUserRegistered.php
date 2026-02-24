<?php

namespace CodebarAg\MicrosoftEntraSSO\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SSOUserRegistered
{
    use Dispatchable, SerializesModels;

    public function __construct(
        public readonly mixed $user,
        public readonly string $guard,
        public readonly array $microsoftUser,
    ) {}
}
