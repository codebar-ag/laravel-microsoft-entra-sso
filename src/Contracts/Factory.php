<?php

namespace CodebarAg\MicrosoftEntraSSO\Contracts;

interface Factory
{
    public function driver(?string $driver = null): Provider;
}
