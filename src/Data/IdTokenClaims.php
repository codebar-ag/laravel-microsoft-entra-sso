<?php

namespace CodebarAg\MicrosoftEntraSSO\Data;

/**
 * The verified claims of a Microsoft Entra id token.
 */
class IdTokenClaims
{
    /**
     * @param  array<string, mixed>  $raw
     */
    public function __construct(
        public readonly string $tenantId,
        public readonly ?string $objectId,
        public readonly string $subject,
        public readonly ?string $nonce,
        public readonly array $raw,
    ) {}
}
