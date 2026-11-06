<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Support;

use CodebarAg\MicrosoftEntraSSO\Concerns\HasMicrosoftIdentity;
use CodebarAg\MicrosoftEntraSSO\Contracts\SsoUser;
use Illuminate\Foundation\Auth\User as Authenticatable;

final class OtherUser extends Authenticatable implements SsoUser
{
    use HasMicrosoftIdentity;

    protected $table = 'users';

    protected $fillable = ['name', 'email', 'password'];
}
