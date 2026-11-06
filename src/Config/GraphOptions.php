<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Config;

final readonly class GraphOptions
{
    public function __construct(
        public int $groupMembershipCacheTtl,
        public int $refreshLockSeconds,
        public int $refreshLockWaitSeconds,
    ) {}
}
