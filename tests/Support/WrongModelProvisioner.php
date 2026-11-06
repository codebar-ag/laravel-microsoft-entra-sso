<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Support;

use CodebarAg\MicrosoftEntraSSO\Contracts\SsoUser;
use CodebarAg\MicrosoftEntraSSO\Contracts\UserProvisioner;
use CodebarAg\MicrosoftEntraSSO\Identity\SignIn;

final class WrongModelProvisioner implements UserProvisioner
{
    public function create(SignIn $signIn): SsoUser
    {
        return OtherUser::create(['name' => 'x', 'email' => $signIn->profile->email, 'password' => 'x']);
    }
}
