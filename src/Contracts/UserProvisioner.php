<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Contracts;

use CodebarAg\MicrosoftEntraSSO\Identity\SignIn;

/**
 * Decides how a new user is created. Configure with `microsoft-entra-sso.user_provisioner`;
 * it is only called when `auto_register` is on and nobody matched. Create and return the user:
 * the package stores the Microsoft identity, dispatches UserRegistered and signs the user in.
 */
interface UserProvisioner
{
    public function create(SignIn $signIn): SsoUser;
}
