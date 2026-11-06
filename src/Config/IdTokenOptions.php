<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Config;

final readonly class IdTokenOptions
{
    public function __construct(
        public int $leewaySeconds,
        public int $jwksCacheTtl,
        public int $jwksRefreshCooldown,
        public ?string $cacheStore,
    ) {}
}
