<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Support;

use CodebarAg\MicrosoftEntraSSO\Contracts\LoginGate;
use CodebarAg\MicrosoftEntraSSO\Data\SSOUser;

/**
 * Only lets the allowed tenants in; remembers what it was asked.
 */
final class TenantGate implements LoginGate
{
    /** @var array<int, array{SSOUser, string}> */
    public static array $calls = [];

    /** @var array<int, string> */
    public static array $allowedTenants = [EntraFake::TENANT];

    public function allows(SSOUser $user, string $guard): bool
    {
        self::$calls[] = [$user, $guard];

        return in_array($user->tenantId, self::$allowedTenants, true);
    }
}
