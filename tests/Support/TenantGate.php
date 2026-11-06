<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Support;

use CodebarAg\MicrosoftEntraSSO\Config\GuardConfig;
use CodebarAg\MicrosoftEntraSSO\Contracts\LoginGate;
use CodebarAg\MicrosoftEntraSSO\Identity\SignIn;

/**
 * Only lets the configured tenants in.
 */
final class TenantGate implements LoginGate
{
    public function allows(SignIn $signIn, GuardConfig $guard): bool
    {
        return $signIn->identity->tenantId === FakeEntra::TENANT;
    }
}
