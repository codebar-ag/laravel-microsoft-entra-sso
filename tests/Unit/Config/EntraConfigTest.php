<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Unit\Config;

use CodebarAg\MicrosoftEntraSSO\Config\EntraConfig;
use CodebarAg\MicrosoftEntraSSO\Enums\EmailLinkingMode;
use CodebarAg\MicrosoftEntraSSO\Exceptions\ConfigurationException;
use CodebarAg\MicrosoftEntraSSO\Tests\Support\FakeEntra;
use CodebarAg\MicrosoftEntraSSO\Tests\Support\TenantGate;
use CodebarAg\MicrosoftEntraSSO\Tests\TestCase;
use CodebarAg\MicrosoftEntraSSO\Tests\TestUser;
use Illuminate\Support\Arr;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use stdClass;

final class EntraConfigTest extends TestCase
{
    /**
     * @param  array<string, mixed>  $overrides  dotted keys
     */
    private function build(array $overrides = []): EntraConfig
    {
        $config = $this->settings()->get('microsoft-entra-sso');
        self::assertIsArray($config);

        foreach ($overrides as $key => $value) {
            Arr::set($config, $key, $value);
        }

        return EntraConfig::fromArray($config);
    }

    #[Test]
    public function it_builds_a_valid_config(): void
    {
        $config = $this->build();

        self::assertSame(FakeEntra::TENANT, $config->tenant->value);
        self::assertTrue($config->tenant->isSingleDirectory());
        self::assertSame('test-client-id', $config->clientId);
        self::assertSame(EmailLinkingMode::Always, $config->emailLinking);
        self::assertSame(TestUser::class, $config->guard('web')->model);
        self::assertSame('/dashboard', $config->guard('web')->redirectAfterLogin);
        self::assertNull($config->findGuard('nope'));
        self::assertNull($config->loginGate);
        self::assertSame(300, $config->stateTtlSeconds);
    }

    #[Test]
    public function it_ships_secure_defaults(): void
    {
        $defaults = require __DIR__.'/../../../config/microsoft-entra-sso.php';
        self::assertIsArray($defaults);

        self::assertSame('never', $defaults['email_linking']);
        self::assertFalse($defaults['auto_register']);
        self::assertSame(['openid', 'profile', 'email', 'User.Read'], $defaults['scopes']);
    }

    #[Test]
    public function it_allows_multi_directory_authorities_with_safe_linking(): void
    {
        foreach (['organizations', 'common', 'consumers'] as $tenant) {
            $config = $this->build(['tenant_id' => $tenant, 'email_linking' => 'same_tenant_only']);
            self::assertFalse($config->tenant->isSingleDirectory());
        }
    }

    #[Test]
    public function auto_register_requires_a_user_provisioner(): void
    {
        $this->expectExceptionMessage('user_provisioner');

        $this->build(['user_provisioner' => null]);
    }

    #[Test]
    public function without_auto_register_no_provisioner_is_needed(): void
    {
        $config = $this->build(['auto_register' => false, 'user_provisioner' => null]);

        self::assertNull($config->userProvisioner);
    }

    #[Test]
    public function it_resolves_the_login_gate(): void
    {
        $config = $this->build(['login_gate' => TenantGate::class]);

        self::assertSame(TenantGate::class, $config->loginGate);
    }

    /**
     * @return array<string, array{string, mixed}>
     */
    public static function invalidValues(): array
    {
        return [
            'tenant name' => ['tenant_id', 'contoso.onmicrosoft.com'],
            'tenant missing' => ['tenant_id', null],
            'client id' => ['client_id', ''],
            'client secret' => ['client_secret', 5],
            'scopes without openid' => ['scopes', ['email']],
            'scopes not strings' => ['scopes', ['openid', 1]],
            'scopes not list' => ['scopes', 'openid'],
            'email linking' => ['email_linking', 'sometimes'],
            'always with organizations' => ['tenant_id', 'organizations'],
            'gate class missing' => ['login_gate', 'App\\Nope'],
            'gate wrong type' => ['login_gate', stdClass::class],
            'gate not a string' => ['login_gate', 1],
            'ttl' => ['state_ttl_seconds', 0],
            'provisioner wrong type' => ['user_provisioner', stdClass::class],
            'provisioner missing class' => ['user_provisioner', 'App\\Nope'],
            'auto register' => ['auto_register', 'yes'],
            'timeout' => ['http.timeout', 0],
            'retry sleep' => ['http.retry_sleep_ms', -1],
            'id token section' => ['id_token', 'x'],
            'graph ttl' => ['graph.group_membership_cache_ttl', -1],
            'guards empty' => ['guards', []],
            'guards not mapped' => ['guards', ['x']],
            'guards not array' => ['guards', 'web'],
            'guard model missing class' => ['guards.web.model', 'App\\Nope'],
            'guard model not eloquent' => ['guards.web.model', stdClass::class],
            'guard redirect' => ['guards.web.redirect_after_login', ''],
        ];
    }

    #[Test]
    #[DataProvider('invalidValues')]
    public function it_fails_fast_naming_the_key(string $key, mixed $value): void
    {
        $this->expectException(ConfigurationException::class);
        $this->expectExceptionMessage(explode('.', $key)[0]);

        $this->build([$key => $value]);
    }

    #[Test]
    public function it_names_the_nested_key(): void
    {
        $this->expectExceptionMessage('[http.timeout]');

        $this->build(['http.timeout' => 0]);
    }

    #[Test]
    public function it_rejects_an_unknown_guard(): void
    {
        $this->expectExceptionMessage('guards.admin');

        $this->build()->guard('admin');
    }

    #[Test]
    public function it_is_registered_as_a_singleton_built_from_config(): void
    {
        self::assertSame($this->container()->make(EntraConfig::class), $this->container()->make(EntraConfig::class));
    }

    #[Test]
    public function it_fails_on_resolution_when_the_config_is_invalid(): void
    {
        $this->settings()->set('microsoft-entra-sso.client_id', null);

        $this->expectException(ConfigurationException::class);
        $this->expectExceptionMessage('client_id');

        $this->container()->make(EntraConfig::class);
    }

    #[Test]
    public function it_accepts_an_optional_cache_store_and_ignores_empty_values(): void
    {
        $config = $this->build(['id_token.cache_store' => 'array']);
        self::assertSame('array', $config->idToken->cacheStore);

        $this->expectExceptionMessage('id_token.cache_store');
        $this->build(['id_token.cache_store' => 5]);
    }
}
