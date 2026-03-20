<?php

namespace CodebarAg\MicrosoftEntraSSO\Facades;

use CodebarAg\MicrosoftEntraSSO\Contracts\Factory;
use CodebarAg\MicrosoftEntraSSO\MicrosoftEntraSSOManager;
use Illuminate\Support\Facades\Facade;

/**
 * @method static \CodebarAg\MicrosoftEntraSSO\Contracts\Provider driver(?string $driver = null)
 *
 * @see MicrosoftEntraSSOManager
 */
class MicrosoftEntraSSO extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return Factory::class;
    }
}
