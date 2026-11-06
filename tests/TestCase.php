<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests;

use CodebarAg\MicrosoftEntraSSO\EntraSsoServiceProvider;
use CodebarAg\MicrosoftEntraSSO\Flow\CallbackParameters;
use CodebarAg\MicrosoftEntraSSO\Flow\StartSignIn;
use CodebarAg\MicrosoftEntraSSO\Tests\Support\FakeEntra;
use CodebarAg\MicrosoftEntraSSO\Tests\Support\TestProvisioner;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\Console\Kernel;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Foundation\Application;
use Illuminate\Http\Client\Factory as HttpFactory;
use Illuminate\Session\ArraySessionHandler;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use LogicException;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpDatabase();
        $this->registerTestRoutes();
    }

    protected function container(): Application
    {
        return $this->app ?? throw new LogicException('The application is not booted.');
    }

    protected function entra(): FakeEntra
    {
        return new FakeEntra($this->container()->make(HttpFactory::class));
    }

    /**
     * Starts a sign-in and fakes Entra so the callback succeeds.
     *
     * @param  array<string, mixed>  $claims  id token claim overrides
     * @param  array<string, mixed>  $graph
     * @param  array<string, mixed>  $tokenResponse
     * @return array{Store, CallbackParameters}
     */
    protected function begin(array $claims = [], array $graph = [], array $tokenResponse = [], string $guard = 'web'): array
    {
        $session = new Store('test', new ArraySessionHandler(120));
        $flow = $this->container()->make(StartSignIn::class)->handle($session, $guard)->flow;

        $entra = $this->entra();
        $entra->fake(array_merge(['id_token' => $entra->idToken($claims + ['nonce' => $flow->nonce])], $tokenResponse), $graph);

        return [$session, new CallbackParameters('auth-code', $flow->state)];
    }

    /**
     * @param  array<string, mixed>  $identity
     */
    protected function userWithIdentity(string $email = 'john@example.com', ?string $tenant = FakeEntra::TENANT, string $oid = FakeEntra::OID, array $identity = []): TestUser
    {
        $user = TestUser::create(['name' => 'Existing', 'email' => $email, 'password' => bcrypt('x')]);
        $user->microsoftIdentity()->create(array_merge([
            'microsoft_id' => $oid,
            'entra_tenant_id' => $tenant,
            'linked_at' => now(),
        ], $identity));

        return $user;
    }

    /**
     * @param  array<string, mixed>  $options
     */
    protected function command(string $command, array $options = []): int
    {
        return $this->container()->make(Kernel::class)->call($command, $options);
    }

    protected function http(): HttpFactory
    {
        return $this->container()->make(HttpFactory::class);
    }

    protected function settings(): Repository
    {
        return $this->container()->make(Repository::class);
    }

    protected function getPackageProviders($app): array
    {
        return [
            EntraSsoServiceProvider::class,
        ];
    }

    protected function defineEnvironment($app): void
    {
        $app['config']->set('microsoft-entra-sso.tenant_id', FakeEntra::TENANT);
        $app['config']->set('microsoft-entra-sso.client_id', 'test-client-id');
        $app['config']->set('microsoft-entra-sso.client_secret', 'test-client-secret');
        $app['config']->set('microsoft-entra-sso.scopes', ['openid', 'profile', 'email', 'User.Read']);
        $app['config']->set('microsoft-entra-sso.auto_register', true);
        $app['config']->set('microsoft-entra-sso.user_provisioner', TestProvisioner::class);
        $app['config']->set('microsoft-entra-sso.email_linking', 'always');
        $app['config']->set('microsoft-entra-sso.state_ttl_seconds', 300);
        $app['config']->set('microsoft-entra-sso.http', [
            'timeout' => 5,
            'connect_timeout' => 5,
            'retry_times' => 1,
            'retry_sleep_ms' => 1,
        ]);
        $app['config']->set('microsoft-entra-sso.id_token.jwks_refresh_cooldown', 0);
        $app['config']->set('microsoft-entra-sso.graph.group_membership_cache_ttl', 0);
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
        Route::get('/login', fn () => 'login page')->name('login');
        Route::get('/dashboard', fn () => 'dashboard')->name('dashboard');
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

        self::assertSame(0, $this->command('migrate'));
    }
}
