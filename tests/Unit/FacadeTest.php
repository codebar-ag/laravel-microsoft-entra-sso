<?php

use CodebarAg\MicrosoftEntraSSO\Facades\MicrosoftEntraSSO;
use CodebarAg\MicrosoftEntraSSO\Services\MicrosoftOAuthService;

it('facade resolves to microsoft oauth service', function () {
    $resolved = MicrosoftEntraSSO::getFacadeRoot();

    expect($resolved)->toBeInstanceOf(MicrosoftOAuthService::class);
});

it('facade can generate state via proxy', function () {
    $state = MicrosoftEntraSSO::generateState();

    expect($state)->toBeString()->toHaveLength(40);
});
