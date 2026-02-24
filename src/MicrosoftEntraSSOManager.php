<?php

namespace CodebarAg\MicrosoftEntraSSO;

use CodebarAg\MicrosoftEntraSSO\Contracts\Factory;
use CodebarAg\MicrosoftEntraSSO\Contracts\Provider;
use InvalidArgumentException;

class MicrosoftEntraSSOManager implements Factory
{
    public function __construct(
        protected Provider $provider,
    ) {}

    public function driver(?string $driver = null): Provider
    {
        $driver ??= 'microsoft';

        if ($driver !== 'microsoft') {
            throw new InvalidArgumentException("Unsupported Microsoft Entra SSO driver [{$driver}].");
        }

        return $this->provider;
    }
}
