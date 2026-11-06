<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Identity;

/**
 * The verified claims of a Microsoft Entra id token.
 */
final readonly class IdTokenClaims
{
    public function __construct(
        public EntraIdentity $identity,
        public string $subject,
        public ?string $nonce,
    ) {}
}
