<?php

namespace CodebarAg\MicrosoftEntraSSO\Tests;

use CodebarAg\MicrosoftEntraSSO\Contracts\SSOAuthenticatable;
use CodebarAg\MicrosoftEntraSSO\Traits\HasMicrosoftSSO;
use Illuminate\Foundation\Auth\User as Authenticatable;

class TestUser extends Authenticatable implements SSOAuthenticatable
{
    use HasMicrosoftSSO;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
