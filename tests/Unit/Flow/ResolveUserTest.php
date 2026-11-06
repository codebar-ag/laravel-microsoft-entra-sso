<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Unit\Flow;

use Carbon\CarbonImmutable;
use CodebarAg\MicrosoftEntraSSO\Config\EntraConfig;
use CodebarAg\MicrosoftEntraSSO\Enums\DenialReason;
use CodebarAg\MicrosoftEntraSSO\Events\UserRegistered;
use CodebarAg\MicrosoftEntraSSO\Exceptions\SignInDeniedException;
use CodebarAg\MicrosoftEntraSSO\Flow\ResolveUser;
use CodebarAg\MicrosoftEntraSSO\Identity\EntraIdentity;
use CodebarAg\MicrosoftEntraSSO\Identity\Profile;
use CodebarAg\MicrosoftEntraSSO\Identity\SignIn;
use CodebarAg\MicrosoftEntraSSO\Identity\Tokens;
use CodebarAg\MicrosoftEntraSSO\Models\MicrosoftIdentity;
use CodebarAg\MicrosoftEntraSSO\Tests\Support\FakeEntra;
use CodebarAg\MicrosoftEntraSSO\Tests\TestCase;
use CodebarAg\MicrosoftEntraSSO\Tests\TestUser;
use Illuminate\Support\Facades\Event;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

final class ResolveUserTest extends TestCase
{
    private function resolve(string $tenant = FakeEntra::TENANT, string $oid = FakeEntra::OID, string $email = 'john@example.com'): TestUser
    {
        $signIn = new SignIn(
            new EntraIdentity($tenant, $oid),
            new Profile($oid, 'John', $email),
            new Tokens('access', 'refresh', CarbonImmutable::now()->addHour()),
        );
        $user = $this->container()->make(ResolveUser::class)->handle($signIn, $this->container()->make(EntraConfig::class)->guard('web'));
        self::assertInstanceOf(TestUser::class, $user);

        return $user;
    }

    private function mode(string $mode, string $tenant = FakeEntra::TENANT): void
    {
        $this->settings()->set('microsoft-entra-sso.email_linking', $mode);
        $this->settings()->set('microsoft-entra-sso.tenant_id', $tenant);
    }

    private function assertDenied(DenialReason $reason, callable $resolve): void
    {
        try {
            $resolve();
            self::fail('Expected a denial.');
        } catch (SignInDeniedException $e) {
            self::assertSame($reason, $e->reason);
        }
    }

    #[Test]
    public function it_finds_the_user_by_identity(): void
    {
        $user = $this->userWithIdentity('other@example.com');

        self::assertTrue($this->resolve()->is($user));
        self::assertSame(1, TestUser::count());
    }

    #[Test]
    public function it_does_not_find_identities_of_another_model(): void
    {
        $this->settings()->set('microsoft-entra-sso.auto_register', false);
        $this->settings()->set('microsoft-entra-sso.email_linking', 'never');
        $other = new MicrosoftIdentity([
            'microsoft_id' => FakeEntra::OID,
            'entra_tenant_id' => FakeEntra::TENANT,
            'authenticatable_type' => 'someone-else',
            'authenticatable_id' => 1,
        ]);
        $other->save();

        $this->assertDenied(DenialReason::RegistrationDisabled, fn () => $this->resolve(email: 'new@example.com'));
    }

    #[Test]
    public function it_ignores_an_identity_row_whose_user_is_gone(): void
    {
        $user = $this->userWithIdentity();
        TestUser::query()->whereKey($user->id)->delete();

        $created = $this->resolve();

        self::assertNotSame($user->id, $created->id);
    }

    #[Test]
    public function always_links_a_user_with_the_same_email(): void
    {
        $user = TestUser::create(['name' => 'E', 'email' => 'john@example.com', 'password' => 'x']);

        self::assertTrue($this->resolve()->is($user));
        $identity = $user->microsoftIdentity()->firstOrFail();
        self::assertSame(FakeEntra::TENANT, $identity->entra_tenant_id);
        self::assertNotNull($identity->linked_at);
    }

    #[Test]
    public function never_refuses_to_link_by_email(): void
    {
        $this->mode('never');
        TestUser::create(['name' => 'E', 'email' => 'john@example.com', 'password' => 'x']);

        $this->assertDenied(DenialReason::EmailLinkingDisabled, fn () => $this->resolve());
        self::assertSame(0, MicrosoftIdentity::count());
    }

    #[Test]
    public function never_still_lets_known_identities_and_new_users_in(): void
    {
        $this->mode('never');
        $known = $this->userWithIdentity('known@example.com');

        self::assertTrue($this->resolve()->is($known));
        self::assertSame('new@example.com', $this->resolve(oid: 'bbbbbbbb-bbbb-4bbb-8bbb-bbbbbbbbbbbb', email: 'new@example.com')->email);
    }

    #[Test]
    public function same_tenant_only_links_when_the_stored_tenant_matches(): void
    {
        $this->mode('same_tenant_only', 'organizations');
        $user = $this->userWithIdentity(oid: 'cccccccc-cccc-4ccc-8ccc-cccccccccccc');

        self::assertTrue($this->resolve()->is($user));
        self::assertSame(FakeEntra::OID, $user->microsoftIdentity()->firstOrFail()->microsoft_id);
    }

    #[Test]
    public function same_tenant_only_refuses_another_tenant(): void
    {
        $this->mode('same_tenant_only', 'organizations');
        $this->userWithIdentity(oid: 'cccccccc-cccc-4ccc-8ccc-cccccccccccc');

        $this->assertDenied(DenialReason::EmailLinkingTenantMismatch, fn () => $this->resolve(FakeEntra::OTHER_TENANT));
    }

    /**
     * @return array<string, array{bool}>
     */
    public static function unlinkedUsers(): array
    {
        return [
            'user without identity' => [false],
            'identity without tenant' => [true],
        ];
    }

    #[Test]
    #[DataProvider('unlinkedUsers')]
    public function same_tenant_only_refuses_users_without_a_stored_tenant(bool $withIdentity): void
    {
        $this->mode('same_tenant_only', 'organizations');
        if ($withIdentity) {
            $this->userWithIdentity(tenant: null, oid: 'cccccccc-cccc-4ccc-8ccc-cccccccccccc');
        } else {
            TestUser::create(['name' => 'E', 'email' => 'john@example.com', 'password' => 'x']);
        }

        $this->assertDenied(DenialReason::EmailLinkingTenantMismatch, fn () => $this->resolve());
    }

    #[Test]
    public function same_tenant_only_still_registers_unknown_emails(): void
    {
        $this->mode('same_tenant_only', 'organizations');

        self::assertSame('new@example.com', $this->resolve(email: 'new@example.com')->email);
    }

    #[Test]
    public function it_registers_through_the_provisioner_and_dispatches_the_event(): void
    {
        Event::fake([UserRegistered::class]);

        $user = $this->resolve(email: 'new@example.com');

        self::assertSame('new@example.com', $user->email);
        self::assertSame(FakeEntra::OID, $user->microsoftIdentity()->firstOrFail()->microsoft_id);
        Event::assertDispatched(UserRegistered::class);
    }

    #[Test]
    public function it_refuses_to_register_when_auto_register_is_off(): void
    {
        $this->settings()->set('microsoft-entra-sso.auto_register', false);

        $this->assertDenied(DenialReason::RegistrationDisabled, fn () => $this->resolve());
        self::assertSame(0, TestUser::count());
    }
}
