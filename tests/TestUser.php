<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests;

use CodebarAg\MicrosoftEntraSSO\Concerns\HasMicrosoftIdentity;
use CodebarAg\MicrosoftEntraSSO\Contracts\SsoUser;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property int $id
 * @property string $name
 * @property string $email
 */
class TestUser extends Authenticatable implements SsoUser
{
    use HasMicrosoftIdentity;

    protected $table = 'users';

    protected $fillable = ['name', 'email', 'password'];
}
