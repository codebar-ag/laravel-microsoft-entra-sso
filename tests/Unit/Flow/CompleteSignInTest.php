<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Unit\Flow;

use CodebarAg\MicrosoftEntraSSO\Enums\DenialReason;
use CodebarAg\MicrosoftEntraSSO\Events\SignedIn;
use CodebarAg\MicrosoftEntraSSO\Events\SignInDenied;
use CodebarAg\MicrosoftEntraSSO\Events\UserRegistered;
use CodebarAg\MicrosoftEntraSSO\Exceptions\ConfigurationException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\InvalidIdTokenException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\InvalidStateException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\SignInDeniedException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\TokenException;
use CodebarAg\MicrosoftEntraSSO\Flow\CallbackParameters;
use CodebarAg\MicrosoftEntraSSO\Flow\CompleteSignIn;
use CodebarAg\MicrosoftEntraSSO\Identity\EntraIdentity;
use CodebarAg\MicrosoftEntraSSO\Models\MicrosoftIdentity;
use CodebarAg\MicrosoftEntraSSO\Tests\Support\FakeEntra;
use CodebarAg\MicrosoftEntraSSO\Tests\Support\TenantGate;
use CodebarAg\MicrosoftEntraSSO\Tests\Support\WrongModelProvisioner;
use CodebarAg\MicrosoftEntraSSO\Tests\TestCase;
use CodebarAg\MicrosoftEntraSSO\Tests\TestUser;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use PHPUnit\Framework\Attributes\Test;

final class CompleteSignInTest extends TestCase
{
    /**
     * @param  array{Store, CallbackParameters}  $begun
     */
    private function complete(array $begun, string $guard = 'web'): void
    {
        $this->container()->make(CompleteSignIn::class)->handle($begun[0], $guard, $begun[1]);
    }

    #[Test]
    public function it_signs_in_and_registers_a_new_user(): void
    {
        Event::fake([SignedIn::class, UserRegistered::class]);
        $begun = $this->begin();
        $before = $begun[0]->getId();

        $user = $this->container()->make(CompleteSignIn::class)->handle($begun[0], 'web', $begun[1]);

        self::assertTrue(Auth::guard('web')->check());
        self::assertSame('john@example.com', TestUser::query()->firstOrFail()->email);
        self::assertNotSame($before, $begun[0]->getId());
        self::assertNull($begun[0]->get('microsoft_entra_sso_flow'));
        $identity = MicrosoftIdentity::query()->firstOrFail();
        self::assertSame(FakeEntra::OID, $identity->microsoft_id);
        self::assertSame(FakeEntra::TENANT, $identity->entra_tenant_id);
        self::assertSame('fake-access-token', $identity->token);
        self::assertSame('fake-refresh-token', $identity->refresh_token);
        self::assertFalse($identity->isTokenExpired());
        Event::assertDispatched(UserRegistered::class, fn (UserRegistered $e): bool => $e->user->getAuthIdentifier() === $user->getAuthIdentifier() && $e->guard === 'web');
        Event::assertDispatched(SignedIn::class, fn (SignedIn $e): bool => $e->signIn->identity->tenantId === FakeEntra::TENANT);
    }

    #[Test]
    public function it_signs_in_a_known_identity_and_updates_its_tokens(): void
    {
        $user = $this->userWithIdentity(identity: ['token' => 'old', 'refresh_token' => 'old-refresh']);
        $linkedAt = $user->microsoftIdentity()->firstOrFail()->linked_at;
        Event::fake([UserRegistered::class]);
        $begun = $this->begin(tokenResponse: ['refresh_token' => null]);

        $this->complete($begun);

        self::assertSame($user->id, Auth::guard('web')->id());
        self::assertSame(1, TestUser::count());
        $identity = $user->microsoftIdentity()->firstOrFail();
        self::assertSame('fake-access-token', $identity->token);
        self::assertSame('old-refresh', $identity->refresh_token);
        self::assertEquals($linkedAt, $identity->linked_at);
        Event::assertNotDispatched(UserRegistered::class);
    }

    #[Test]
    public function it_adopts_and_backfills_an_identity_linked_before_v14(): void
    {
        $user = $this->userWithIdentity(tenant: null);

        $this->complete($this->begin());

        self::assertSame(FakeEntra::TENANT, $user->microsoftIdentity()->firstOrFail()->entra_tenant_id);
    }

    #[Test]
    public function it_refuses_a_known_object_id_from_another_tenant(): void
    {
        $this->settings()->set('microsoft-entra-sso.tenant_id', 'organizations');
        $this->settings()->set('microsoft-entra-sso.email_linking', 'never');
        $this->userWithIdentity();
        Event::fake([SignInDenied::class, SignedIn::class]);

        try {
            $this->complete($this->begin(['tid' => FakeEntra::OTHER_TENANT]));
            self::fail('Expected a denial.');
        } catch (SignInDeniedException $e) {
            self::assertSame(DenialReason::TenantMismatch, $e->reason);
        }

        self::assertFalse(Auth::guard('web')->check());
        Event::assertNotDispatched(SignedIn::class);
        Event::assertDispatched(SignInDenied::class, fn (SignInDenied $e): bool => $e->reason === DenialReason::TenantMismatch
            && $e->identity->equals(new EntraIdentity(FakeEntra::OTHER_TENANT, FakeEntra::OID))
            && array_keys(get_object_vars($e)) === ['identity', 'profile', 'guard', 'reason']);
    }

    #[Test]
    public function the_login_gate_lets_an_allowed_tenant_in(): void
    {
        $this->settings()->set('microsoft-entra-sso.tenant_id', 'organizations');
        $this->settings()->set('microsoft-entra-sso.email_linking', 'never');
        $this->settings()->set('microsoft-entra-sso.login_gate', TenantGate::class);

        $this->complete($this->begin());

        self::assertSame(1, TestUser::count());
    }

    #[Test]
    public function the_login_gate_runs_before_anything_is_created(): void
    {
        $this->settings()->set('microsoft-entra-sso.tenant_id', 'organizations');
        $this->settings()->set('microsoft-entra-sso.email_linking', 'never');
        $this->settings()->set('microsoft-entra-sso.login_gate', TenantGate::class);
        Event::fake([SignInDenied::class]);

        try {
            $this->complete($this->begin(['tid' => FakeEntra::OTHER_TENANT]));
            self::fail('Expected a denial.');
        } catch (SignInDeniedException $e) {
            self::assertSame(DenialReason::LoginGate, $e->reason);
            self::assertSame('microsoft-entra-sso.error.login_denied', $e->translationKey());
        }

        self::assertSame(0, TestUser::count());
        self::assertSame(0, MicrosoftIdentity::count());
        Event::assertDispatched(SignInDenied::class, fn (SignInDenied $e): bool => $e->reason === DenialReason::LoginGate);
    }

    #[Test]
    public function it_denies_when_registration_is_off_and_nobody_matches(): void
    {
        $this->settings()->set('microsoft-entra-sso.auto_register', false);

        $this->expectException(SignInDeniedException::class);

        $this->complete($this->begin());
    }

    #[Test]
    public function it_rejects_a_provisioner_that_creates_the_wrong_model(): void
    {
        $this->settings()->set('microsoft-entra-sso.user_provisioner', WrongModelProvisioner::class);

        $this->expectException(ConfigurationException::class);
        $this->expectExceptionMessage('user_provisioner');

        $this->complete($this->begin());
    }

    #[Test]
    public function it_rejects_an_auth_guard_that_is_not_stateful(): void
    {
        $this->settings()->set('auth.guards.api', ['driver' => 'token', 'provider' => 'users']);
        $this->settings()->set('microsoft-entra-sso.guards.api', ['model' => TestUser::class, 'redirect_after_login' => '/']);

        $this->expectException(ConfigurationException::class);
        $this->expectExceptionMessage('stateful');

        $this->complete($this->begin(guard: 'api'), 'api');
    }

    #[Test]
    public function it_rejects_a_callback_without_a_matching_state(): void
    {
        [$session] = $this->begin();

        $this->expectException(InvalidStateException::class);

        $this->container()->make(CompleteSignIn::class)->handle($session, 'web', new CallbackParameters('code', 'forged'));
    }

    #[Test]
    public function it_reports_an_error_callback(): void
    {
        [$session, $params] = $this->begin();

        try {
            $this->container()->make(CompleteSignIn::class)->handle($session, 'web', new CallbackParameters(state: $params->state, error: 'access_denied', errorDescription: 'nope'));
            self::fail('Expected a TokenException.');
        } catch (TokenException $e) {
            self::assertStringContainsString('access_denied - nope', $e->getMessage());
        }
    }

    #[Test]
    public function it_requires_an_authorization_code(): void
    {
        [$session, $params] = $this->begin();

        $this->expectExceptionObject(TokenException::missingAuthorizationCode());

        $this->container()->make(CompleteSignIn::class)->handle($session, 'web', new CallbackParameters(state: $params->state));
    }

    #[Test]
    public function it_requires_an_id_token(): void
    {
        $begun = $this->begin(tokenResponse: ['id_token' => null]);

        $this->expectException(InvalidIdTokenException::class);
        $this->expectExceptionMessage('no id token');

        $this->complete($begun);
    }

    #[Test]
    public function it_binds_the_id_token_to_the_session_nonce(): void
    {
        $this->expectException(InvalidIdTokenException::class);
        $this->expectExceptionMessage('nonce');

        $this->complete($this->begin(['nonce' => 'attacker']));
    }

    #[Test]
    public function it_rejects_an_id_token_of_another_graph_user(): void
    {
        $this->expectException(InvalidIdTokenException::class);
        $this->expectExceptionMessage('Microsoft Graph user');

        $this->complete($this->begin(graph: ['id' => 'bbbbbbbb-bbbb-4bbb-8bbb-bbbbbbbbbbbb']));
    }

    #[Test]
    public function it_skips_the_graph_id_check_for_personal_accounts(): void
    {
        $this->settings()->set('microsoft-entra-sso.tenant_id', 'consumers');
        $this->settings()->set('microsoft-entra-sso.email_linking', 'never');

        $this->complete($this->begin(['tid' => EntraIdentity::PERSONAL_ACCOUNT_TENANT], ['id' => 'pairwise-hex-id']));

        self::assertTrue(Auth::guard('web')->check());
    }

    #[Test]
    public function it_rejects_an_unknown_guard(): void
    {
        [$session, $params] = $this->begin();

        $this->expectException(ConfigurationException::class);

        $this->container()->make(CompleteSignIn::class)->handle($session, 'admin', $params);
    }
}
