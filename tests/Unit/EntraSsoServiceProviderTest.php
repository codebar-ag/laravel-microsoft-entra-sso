<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Unit;

use CodebarAg\MicrosoftEntraSSO\EntraSsoServiceProvider;
use CodebarAg\MicrosoftEntraSSO\Tests\TestCase;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use PHPUnit\Framework\Attributes\Test;

final class EntraSsoServiceProviderTest extends TestCase
{
    #[Test]
    public function it_registers_both_routes_under_the_configured_prefix(): void
    {
        $router = $this->container()->make(Router::class);

        self::assertSame('/sso/microsoft/web/redirect', route('microsoft-entra-sso.redirect', ['guard' => 'web'], false));
        self::assertSame('/sso/microsoft/web/callback', route('microsoft-entra-sso.callback', ['guard' => 'web'], false));
        $callback = $router->getRoutes()->getByName('microsoft-entra-sso.callback');
        self::assertNotNull($callback);
        self::assertContains('web', $callback->gatherMiddleware());
    }

    #[Test]
    public function it_loads_translations_and_migrations(): void
    {
        $this->container()->setLocale('de');

        self::assertStringContainsString('Microsoft', __('microsoft-entra-sso.error.token_failed'));
        self::assertNotSame('microsoft-entra-sso.error.token_failed', __('microsoft-entra-sso.error.token_failed'));
        self::assertTrue(collect($this->container()->make('migrator')->paths())->contains(fn ($path): bool => str_contains($path, 'laravel-microsoft-entra-sso')));
    }

    #[Test]
    public function it_publishes_config_and_translations(): void
    {
        self::assertCount(1, ServiceProvider::pathsToPublish(EntraSsoServiceProvider::class, 'microsoft-entra-sso-config'));
        self::assertCount(2, ServiceProvider::pathsToPublish(EntraSsoServiceProvider::class, 'microsoft-entra-sso-translations'));
    }

    #[Test]
    public function every_translation_key_exists_in_both_languages(): void
    {
        $en = json_decode((string) file_get_contents(__DIR__.'/../../lang/en.json'), true);
        $de = json_decode((string) file_get_contents(__DIR__.'/../../lang/de.json'), true);

        self::assertIsArray($en);
        self::assertIsArray($de);
        self::assertSame(array_keys($en), array_keys($de));
    }
}
