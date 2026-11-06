<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Contracts;

use CodebarAg\MicrosoftEntraSSO\Config\GuardConfig;
use CodebarAg\MicrosoftEntraSSO\Identity\SignIn;

/**
 * Decides who may enter. Configure with `microsoft-entra-sso.login_gate`.
 *
 * The gate runs after the id token has been validated and before any user is looked up,
 * linked or created, so a denial never creates or modifies a local account.
 */
interface LoginGate
{
    public function allows(SignIn $signIn, GuardConfig $guard): bool;
}
