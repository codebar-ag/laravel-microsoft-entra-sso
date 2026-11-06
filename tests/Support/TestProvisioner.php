<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Support;

use CodebarAg\MicrosoftEntraSSO\Contracts\SsoUser;
use CodebarAg\MicrosoftEntraSSO\Contracts\UserProvisioner;
use CodebarAg\MicrosoftEntraSSO\Identity\SignIn;
use CodebarAg\MicrosoftEntraSSO\Tests\TestUser;

final class TestProvisioner implements UserProvisioner
{
    public function create(SignIn $signIn): SsoUser
    {
        return TestUser::create([
            'name' => $signIn->profile->name,
            'email' => $signIn->profile->email,
            'password' => bcrypt('secret'),
        ]);
    }
}
