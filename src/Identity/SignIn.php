<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Identity;

/**
 * Everything the application learns from a completed Microsoft sign-in.
 */
final readonly class SignIn
{
    public function __construct(
        public EntraIdentity $identity,
        public Profile $profile,
        public Tokens $tokens,
    ) {}
}
