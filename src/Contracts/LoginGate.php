<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Contracts;

use CodebarAg\MicrosoftEntraSSO\Data\SSOUser;

/**
 * Decides whether a Microsoft sign-in may continue at all.
 *
 * Configure with `microsoft-entra-sso.login_gate`. The gate runs after the
 * id token has been validated and before any user is looked up, linked or
 * registered, so a denial never creates or modifies a local account.
 */
interface LoginGate
{
    public function allows(SSOUser $user, string $guard): bool;
}
