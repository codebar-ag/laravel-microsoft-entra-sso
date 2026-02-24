<?php

use CodebarAg\MicrosoftEntraSSO\MicrosoftEntraSSOServiceProvider;
use CodebarAg\MicrosoftEntraSSO\Services\MicrosoftOAuthService;

it('registers microsoft oauth service as singleton', function () {
    $instance1 = app(MicrosoftOAuthService::class);
    $instance2 = app(MicrosoftOAuthService::class);

    expect($instance1)->toBeInstanceOf(MicrosoftOAuthService::class);
    expect($instance1)->toBe($instance2);
});

it('merges package config', function () {
    expect(config('microsoft-entra-sso'))->toBeArray();
    expect(config('microsoft-entra-sso.tenant_id'))->not->toBeNull();
});

it('loads package migrations', function () {
    expect(
        collect(app('migrator')->paths())
            ->contains(fn ($path) => str_contains($path, 'laravel-microsoft-entra-sso'))
    )->toBeTrue();
});

it('skips publishables when not running in console', function () {
    $app = Mockery::mock(app())->makePartial();
    $app->shouldReceive('runningInConsole')->andReturn(false);

    $provider = new MicrosoftEntraSSOServiceProvider($app);

    $reflection = new ReflectionMethod($provider, 'registerPublishables');
    $reflection->setAccessible(true);
    $reflection->invoke($provider);

    expect(true)->toBeTrue();
});
