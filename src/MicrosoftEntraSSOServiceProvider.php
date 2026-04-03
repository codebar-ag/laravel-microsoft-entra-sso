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
                tenantId: self::nullableString(config('microsoft-entra-sso.tenant_id')),
                clientId: self::nullableString(config('microsoft-entra-sso.client_id')),
                clientSecret: self::nullableString(config('microsoft-entra-sso.client_secret')),
                redirectUri: self::nullableString(config('microsoft-entra-sso.redirect_uri')),
                scopes: self::stringListConfig('microsoft-entra-sso.scopes', []),
                http: self::httpConfigArray(),
            );

            return $service->stateless((bool) config('microsoft-entra-sso.stateless', false));
        });

        $this->app->singleton(Provider::class, fn ($app) => $app->make(MicrosoftOAuthService::class));
        $this->app->singleton(Factory::class, fn ($app) => new MicrosoftEntraSSOManager($app->make(Provider::class)));

        $this->app->singleton(MicrosoftGraphService::class, function ($app) {
            return new MicrosoftGraphService(
                $app->make(MicrosoftOAuthService::class),
                self::httpConfigArray(),
            );
        });

        $this->app->singleton(GuardConfigValidator::class);
    }

    /**
     * @return array<string, mixed>
     */
    private static function httpConfigArray(): array
    {
        $v = config('microsoft-entra-sso.http', []);

        return is_array($v) ? $v : [];
    }

    /**
     * @param  array<int, string>  $default
     * @return array<int, string>
     */
    private static function stringListConfig(string $key, array $default): array
    {
        $v = config($key, $default);
        if (! is_array($v)) {
            return $default;
        }
        $out = [];
        foreach ($v as $item) {
            if (is_string($item)) {
                $out[] = $item;
            }
        }

        return $out;
    }

    private static function nullableString(mixed $value): ?string
    {
        return is_string($value) ? $value : null;
    }

    public function boot(): void
    {
        $this->registerRoutes();
        $this->registerMigrations();
        $this->registerTranslations();
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

    protected function registerTranslations(): void
    {
        $this->loadJsonTranslationsFrom(__DIR__.'/../lang');
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

        $this->publishes([
            __DIR__.'/../lang/en.json' => lang_path('en.json'),
            __DIR__.'/../lang/de.json' => lang_path('de.json'),
        ], 'microsoft-entra-sso-translations');
    }
}
