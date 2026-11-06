<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Contracts;

interface Factory
{
    public function driver(?string $driver = null): Provider;
}
