<?php

namespace CodebarAg\MicrosoftEntraSSO;

use CodebarAg\MicrosoftEntraSSO\Contracts\Factory;
use CodebarAg\MicrosoftEntraSSO\Contracts\Provider;
use CodebarAg\MicrosoftEntraSSO\Services\GuardConfigValidator;
use CodebarAg\MicrosoftEntraSSO\Services\MicrosoftGraphService;
use CodebarAg\MicrosoftEntraSSO\Services\MicrosoftOAuthService;
use Illuminate\Support\ServiceProvider;

class MicrosoftEntraSSOServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/microsoft-entra-sso.php', 'microsoft-entra-sso');

        $this->app->singleton(MicrosoftOAuthService::class, function ($app) {
            $service = new MicrosoftOAuthService(
                tenantId: config('microsoft-entra-sso.tenant_id'),
                clientId: config('microsoft-entra-sso.client_id'),
                clientSecret: config('microsoft-entra-sso.client_secret'),
                redirectUri: config('microsoft-entra-sso.redirect_uri'),
                scopes: config('microsoft-entra-sso.scopes', []),
                http: config('microsoft-entra-sso.http', []),
            );

            return $service->stateless((bool) config('microsoft-entra-sso.stateless', false));
        });

        $this->app->singleton(Provider::class, fn ($app) => $app->make(MicrosoftOAuthService::class));
        $this->app->singleton(Factory::class, fn ($app) => new MicrosoftEntraSSOManager($app->make(Provider::class)));

        $this->app->singleton(MicrosoftGraphService::class, function ($app) {
            return new MicrosoftGraphService(
                $app->make(MicrosoftOAuthService::class),
                config('microsoft-entra-sso.http', []),
            );
        });

        $this->app->singleton(GuardConfigValidator::class);
    }

    public function boot(): void
    {
        $this->registerRoutes();
        $this->registerMigrations();
        $this->registerViews();
        $this->registerPublishables();
    }

    protected function registerRoutes(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }

    protected function registerMigrations(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    protected function registerViews(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'microsoft-entra-sso');
    }

    protected function registerPublishables(): void
    {
        if (! $this->app->runningInConsole()) {
            return;
        }

        $this->publishes([
            __DIR__.'/../config/microsoft-entra-sso.php' => config_path('microsoft-entra-sso.php'),
        ], 'microsoft-entra-sso-config');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/microsoft-entra-sso'),
        ], 'microsoft-entra-sso-views');
    }
}
