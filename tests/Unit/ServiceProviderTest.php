<?php

use CodebarAg\MicrosoftEntraSSO\Contracts\Factory;
use CodebarAg\MicrosoftEntraSSO\Contracts\Provider;
use CodebarAg\MicrosoftEntraSSO\MicrosoftEntraSSOManager;
use CodebarAg\MicrosoftEntraSSO\MicrosoftEntraSSOServiceProvider;
use CodebarAg\MicrosoftEntraSSO\Services\MicrosoftOAuthService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

it('registers microsoft oauth service as singleton', function () {
    $instance1 = app(MicrosoftOAuthService::class);
    $instance2 = app(MicrosoftOAuthService::class);

    expect($instance1)->toBeInstanceOf(MicrosoftOAuthService::class);
    expect($instance1)->toBe($instance2);
});

it('registers provider and factory contracts', function () {
    expect(app(Provider::class))->toBeInstanceOf(MicrosoftOAuthService::class);
    expect(app(Factory::class))->toBeInstanceOf(MicrosoftEntraSSOManager::class);
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
    /** @var Application $app */
    $app = Mockery::mock(Application::class)->makePartial();
    $app->shouldReceive('runningInConsole')->andReturn(false);

    $provider = new MicrosoftEntraSSOServiceProvider($app);

    $reflection = new ReflectionMethod($provider, 'registerPublishables');
    $reflection->setAccessible(true);
    $result = $reflection->invoke($provider);

    expect($result)->toBeNull();
});

it('loads package json translations', function () {
    app()->setLocale('de');

    expect(__('microsoft-entra-sso.button.sign_in'))->toBe('Mit Microsoft anmelden');
});

it('registers translation publish paths', function () {
    $paths = ServiceProvider::pathsToPublish(
        MicrosoftEntraSSOServiceProvider::class,
        'microsoft-entra-sso-translations',
    );

    expect(array_values($paths))->toContain(lang_path('en.json'));
    expect(array_values($paths))->toContain(lang_path('de.json'));
    expect(collect(array_keys($paths))->contains(fn (string $path) => str_ends_with($path, '/lang/en.json')))->toBeTrue();
    expect(collect(array_keys($paths))->contains(fn (string $path) => str_ends_with($path, '/lang/de.json')))->toBeTrue();
});
