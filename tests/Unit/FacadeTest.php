<?php

use CodebarAg\MicrosoftEntraSSO\Contracts\Factory;
use CodebarAg\MicrosoftEntraSSO\Facades\MicrosoftEntraSSO;
use CodebarAg\MicrosoftEntraSSO\MicrosoftEntraSSOManager;
use CodebarAg\MicrosoftEntraSSO\Services\MicrosoftOAuthService;

it('facade resolves to microsoft entra sso manager', function () {
    $resolved = MicrosoftEntraSSO::getFacadeRoot();

    expect($resolved)->toBeInstanceOf(MicrosoftEntraSSOManager::class);
});

it('facade resolves factory contract binding', function () {
    expect(app(Factory::class))->toBeInstanceOf(MicrosoftEntraSSOManager::class);
});

it('facade can resolve microsoft provider driver', function () {
    $provider = MicrosoftEntraSSO::driver();

    expect($provider)->toBeInstanceOf(MicrosoftOAuthService::class);
});
