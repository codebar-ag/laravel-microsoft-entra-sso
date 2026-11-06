<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Config;

use CodebarAg\MicrosoftEntraSSO\Contracts\SsoUser;
use Illuminate\Database\Eloquent\Model;

/**
 * One authentication guard that may sign in with Microsoft.
 */
final readonly class GuardConfig
{
    /**
     * @param  class-string<Model&SsoUser>  $model
     */
    public function __construct(
        public string $name,
        public string $model,
        public string $redirectAfterLogin,
    ) {}
}
