<?php

namespace CodebarAg\MicrosoftEntraSSO\Tests;

use CodebarAg\MicrosoftEntraSSO\MicrosoftEntraSSOServiceProvider;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpDatabase();
        $this->registerTestRoutes();
    }

    protected function getPackageProviders($app): array
    {
        return [
            MicrosoftEntraSSOServiceProvider::class,
        ];
    }

    protected function defineEnvironment($app): void
    {
        $app['config']->set('microsoft-entra-sso.tenant_id', 'test-tenant-id');
        $app['config']->set('microsoft-entra-sso.client_id', 'test-client-id');
        $app['config']->set('microsoft-entra-sso.client_secret', 'test-client-secret');
        $app['config']->set('microsoft-entra-sso.redirect_uri', 'http://localhost/sso/microsoft/web/callback');
        $app['config']->set('microsoft-entra-sso.scopes', ['openid', 'profile', 'email', 'User.Read']);
        $app['config']->set('microsoft-entra-sso.auto_register', true);
        $app['config']->set('microsoft-entra-sso.state_ttl_seconds', 300);
        $app['config']->set('microsoft-entra-sso.http', [
            'timeout' => 5,
            'connect_timeout' => 5,
            'retry_times' => 1,
            'retry_sleep_ms' => 1,
        ]);
        $app['config']->set('microsoft-entra-sso.group_membership_cache_ttl', 0);
        $app['config']->set('microsoft-entra-sso.guards.web.model', TestUser::class);
        $app['config']->set('microsoft-entra-sso.guards.web.redirect_after_login', '/dashboard');

        $app['config']->set('auth.providers.users.model', TestUser::class);
        $app['config']->set('auth.guards.web.driver', 'session');
        $app['config']->set('auth.guards.web.provider', 'users');
        $app['config']->set('cache.default', 'array');

        $app['config']->set('app.key', 'base64:'.base64_encode(random_bytes(32)));
    }

    protected function registerTestRoutes(): void
    {
        \Illuminate\Support\Facades\Route::get('/login', fn () => 'login page')->name('login');
        \Illuminate\Support\Facades\Route::get('/dashboard', fn () => 'dashboard')->name('dashboard');
    }

    protected function setUpDatabase(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('microsoft_sso_identities', function (Blueprint $table) {
            $table->id();
            $table->morphs('authenticatable');
            $table->string('microsoft_id')->unique();
            $table->text('token')->nullable();
            $table->text('refresh_token')->nullable();
            $table->timestamp('token_expires_at')->nullable();
            $table->timestamp('linked_at')->nullable();
            $table->timestamps();
        });
    }
}
