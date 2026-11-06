<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO;

use CodebarAg\MicrosoftEntraSSO\Config\EntraConfig;
use CodebarAg\MicrosoftEntraSSO\Http\Controllers\HandleMicrosoftCallbackController;
use CodebarAg\MicrosoftEntraSSO\Http\Controllers\RedirectToMicrosoftController;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

final class EntraSsoServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/microsoft-entra-sso.php', 'microsoft-entra-sso');

        $this->app->singleton(EntraConfig::class, function (): EntraConfig {
            $config = config('microsoft-entra-sso');

            return EntraConfig::fromArray(is_array($config) ? $config : []);
        });
    }

    public function boot(): void
    {
        $this->registerRoutes();
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadJsonTranslationsFrom(__DIR__.'/../lang');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'microsoft-entra-sso');
        $this->registerPublishables();
    }

    private function registerRoutes(): void
    {
        if ($this->app->routesAreCached()) {
            return;
        }

        $prefix = config('microsoft-entra-sso.route_prefix');
        $middleware = config('microsoft-entra-sso.route_middleware');

        $this->app->make(Router::class)
            ->middleware(is_array($middleware) ? array_values(array_filter($middleware, is_string(...))) : ['web'])
            ->prefix(is_string($prefix) && $prefix !== '' ? $prefix : 'sso/microsoft')
            ->group(function (Router $router): void {
                $router->get('{guard}/redirect', RedirectToMicrosoftController::class)
                    ->name('microsoft-entra-sso.redirect')
                    ->where('guard', '[A-Za-z0-9_]+');

                $router->get('{guard}/callback', HandleMicrosoftCallbackController::class)
                    ->name('microsoft-entra-sso.callback')
                    ->where('guard', '[A-Za-z0-9_]+');
            });
    }

    private function registerPublishables(): void
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
