<?php

declare(strict_types=1);

use CodebarAg\MicrosoftEntraSSO\Events\SSOLoginDenied;
use CodebarAg\MicrosoftEntraSSO\Events\SSOUserAuthenticated;
use CodebarAg\MicrosoftEntraSSO\Events\SSOUserRegistered;
use CodebarAg\MicrosoftEntraSSO\Exceptions\LoginDeniedException;
use CodebarAg\MicrosoftEntraSSO\Models\MicrosoftSSOIdentity;
use CodebarAg\MicrosoftEntraSSO\Services\EmailLinkingPolicy;
use CodebarAg\MicrosoftEntraSSO\Tests\Support\EntraFake;
use CodebarAg\MicrosoftEntraSSO\Tests\Support\TenantGate;
use CodebarAg\MicrosoftEntraSSO\Tests\TestUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Http;

beforeEach(function () {
    Cache::flush();
    TenantGate::$calls = [];
    TenantGate::$allowedTenants = [EntraFake::TENANT];
});

function signIn(?string $nonce = null)
{
    return test()->withSession(EntraFake::session($nonce))
        ->get('/sso/microsoft/web/callback?code=auth-code&state=test-state');
}

function existingUser(?string $tenant = EntraFake::TENANT, string $oid = 'other-oid', string $email = 'john@example.com'): TestUser
{
    $user = TestUser::create(['name' => 'Existing', 'email' => $email, 'password' => bcrypt('x')]);
    $attributes = ['microsoft_id' => $oid, 'linked_at' => now()];
    if ($tenant !== null) {
        $attributes['entra_tenant_id'] = $tenant;
    }
    $user->microsoftIdentity()->create($attributes);

    return $user;
}

// --- tenant capture -------------------------------------------------------

it('stores the tenant on the identity and passes tenant_id/object_id to events', function () {
    EntraFake::http();
    Event::fake([SSOUserRegistered::class]);

    signIn()->assertRedirect('/dashboard');

    $identity = Auth::user()->microsoftIdentity;
    expect($identity->entra_tenant_id)->toBe(EntraFake::TENANT)
        ->and($identity->microsoft_id)->toBe(EntraFake::OID);

    Event::assertDispatched(SSOUserRegistered::class, fn ($e) => $e->microsoftUser['tenant_id'] === EntraFake::TENANT
        && $e->microsoftUser['object_id'] === EntraFake::OID);
});

it('finds users by tenant and object id', function () {
    $user = existingUser(EntraFake::TENANT, 'oid-1');

    expect(TestUser::findByMicrosoftIdentity(EntraFake::TENANT, 'oid-1')?->is($user))->toBeTrue()
        ->and(TestUser::findByMicrosoftIdentity(strtoupper(EntraFake::TENANT), 'oid-1')?->is($user))->toBeTrue()
        ->and(TestUser::findByMicrosoftIdentity(EntraFake::OTHER_TENANT, 'oid-1'))->toBeNull()
        ->and(TestUser::findByMicrosoftIdentity(EntraFake::TENANT, 'nope'))->toBeNull()
        ->and(TestUser::findByMicrosoftId('oid-1')?->is($user))->toBeTrue();
});

it('logs in an existing identity and backfills a missing tenant', function () {
    EntraFake::http();
    $user = existingUser(null, EntraFake::OID);

    signIn()->assertRedirect('/dashboard');

    expect(Auth::user()->is($user))->toBeTrue()
        ->and($user->microsoftIdentity()->first()->entra_tenant_id)->toBe(EntraFake::TENANT);
});

it('refuses a known microsoft id that now arrives from another tenant', function () {
    config()->set('microsoft-entra-sso.tenant_id', 'organizations');
    config()->set('microsoft-entra-sso.email_linking', 'never');
    EntraFake::http(['id_token' => EntraFake::idToken(['tid' => EntraFake::OTHER_TENANT])]);
    existingUser(EntraFake::TENANT, EntraFake::OID);
    Event::fake([SSOLoginDenied::class]);

    signIn()->assertRedirect('/login')->assertSessionHas('microsoft_entra_sso_error');

    expect(Auth::check())->toBeFalse();
    Event::assertDispatched(SSOLoginDenied::class, fn ($e) => $e->reason === 'tenant_mismatch');
});

// --- id token in the flow -------------------------------------------------

it('rejects a forged id token and creates no user', function (array $claims) {
    EntraFake::http(['id_token' => EntraFake::idToken($claims)]);

    signIn()->assertRedirect('/login')->assertSessionHas('microsoft_entra_sso_error');

    expect(Auth::check())->toBeFalse()->and(TestUser::count())->toBe(0);
})->with([
    'wrong aud' => [['aud' => 'other-app']],
    'expired' => [['exp' => time() - 7200]],
    'wrong iss' => [['iss' => 'https://login.microsoftonline.com/'.EntraFake::OTHER_TENANT.'/v2.0']],
]);

it('rejects an id token signed with an unknown key', function () {
    EntraFake::http(['id_token' => EntraFake::idToken(key: 'attacker')]);

    signIn()->assertRedirect('/login')->assertSessionHas('microsoft_entra_sso_error');

    expect(TestUser::count())->toBe(0);
});

it('rejects an id token that belongs to another graph user', function () {
    EntraFake::http(['id_token' => EntraFake::idToken(['oid' => 'someone-else'])]);

    signIn()->assertRedirect('/login')->assertSessionHas('microsoft_entra_sso_error');

    expect(TestUser::count())->toBe(0);
});

it('skips the oid check for personal microsoft accounts', function () {
    config()->set('microsoft-entra-sso.tenant_id', 'organizations');
    config()->set('microsoft-entra-sso.email_linking', 'never');
    EntraFake::http(['id_token' => EntraFake::idToken(['tid' => '9188040d-6c67-4c5b-b112-36a304b66dad', 'oid' => 'pairwise'])]);

    signIn()->assertRedirect('/dashboard');
});

it('binds the id token to the session nonce', function () {
    EntraFake::http(['id_token' => EntraFake::idToken(['nonce' => 'n-1'])]);

    signIn('n-1')->assertRedirect('/dashboard');
});

it('rejects an id token with a different nonce', function () {
    EntraFake::http(['id_token' => EntraFake::idToken(['nonce' => 'attacker'])]);

    signIn('n-1')->assertRedirect('/login')->assertSessionHas('microsoft_entra_sso_error');

    expect(TestUser::count())->toBe(0);
});

it('sends a nonce on redirect and keeps it in the session', function () {
    $response = $this->get('/sso/microsoft/web/redirect');

    $nonce = session('microsoft_entra_sso_nonce');
    expect($nonce)->toBeString()->not->toBeEmpty();
    parse_str((string) parse_url($response->headers->get('Location'), PHP_URL_QUERY), $query);
    expect($query['nonce'])->toBe($nonce);
});

it('does not use a nonce in stateless mode', function () {
    config()->set('microsoft-entra-sso.stateless', true);

    $response = $this->get('/sso/microsoft/web/redirect');

    expect($response->headers->get('Location'))->not->toContain('nonce=');
});

it('treats a missing id token as before unless required', function () {
    EntraFake::http(['id_token' => null]);

    signIn()->assertRedirect('/dashboard');

    expect(Auth::user()->microsoftIdentity->entra_tenant_id)->toBeNull();
});

it('rejects a missing id token when required', function () {
    config()->set('microsoft-entra-sso.id_token.require', true);
    EntraFake::http(['id_token' => null]);

    signIn()->assertRedirect('/login')->assertSessionHas('microsoft_entra_sso_error');

    expect(TestUser::count())->toBe(0);
});

it('ignores the id token when validation is switched off', function () {
    config()->set('microsoft-entra-sso.id_token.validate', false);
    EntraFake::http(['id_token' => 'garbage']);

    signIn()->assertRedirect('/dashboard');

    Http::assertNotSent(fn ($r) => str_contains($r->url(), 'openid-configuration'));
    expect(Auth::user()->microsoftIdentity->entra_tenant_id)->toBeNull();
});

// --- login gate -----------------------------------------------------------

it('lets an allowed tenant through the gate', function () {
    config()->set('microsoft-entra-sso.login_gate', TenantGate::class);
    EntraFake::http();

    signIn()->assertRedirect('/dashboard');

    expect(TenantGate::$calls)->toHaveCount(1)
        ->and(TenantGate::$calls[0][0]->tenantId)->toBe(EntraFake::TENANT)
        ->and(TenantGate::$calls[0][0]->objectId)->toBe(EntraFake::OID)
        ->and(TenantGate::$calls[0][1])->toBe('web');
});

it('denies a tenant the gate refuses without creating or linking anything', function () {
    config()->set('microsoft-entra-sso.login_gate', TenantGate::class);
    TenantGate::$allowedTenants = [EntraFake::OTHER_TENANT];
    EntraFake::http();
    Event::fake([SSOLoginDenied::class, SSOUserRegistered::class, SSOUserAuthenticated::class]);
    $existing = TestUser::create(['name' => 'E', 'email' => 'john@example.com', 'password' => bcrypt('x')]);

    signIn()->assertRedirect('/login')
        ->assertSessionHas('microsoft_entra_sso_error', __('microsoft-entra-sso.error.login_denied'));

    expect(Auth::check())->toBeFalse()
        ->and(TestUser::count())->toBe(1)
        ->and(MicrosoftSSOIdentity::count())->toBe(0)
        ->and($existing->hasMicrosoftSSOLinked())->toBeFalse();
    Event::assertNotDispatched(SSOUserRegistered::class);
    Event::assertNotDispatched(SSOUserAuthenticated::class);
    Event::assertDispatched(SSOLoginDenied::class, fn ($e) => $e->reason === 'login_gate'
        && $e->guard === 'web'
        && $e->microsoftUser->tenantId === EntraFake::TENANT
        && $e->microsoftUser->token === null
        && $e->microsoftUser->refreshToken === null);
});

it('also gates users that are already linked', function () {
    config()->set('microsoft-entra-sso.login_gate', TenantGate::class);
    TenantGate::$allowedTenants = [];
    EntraFake::http();
    existingUser(EntraFake::TENANT, EntraFake::OID);

    signIn()->assertRedirect('/login')->assertSessionHas('microsoft_entra_sso_error');

    expect(Auth::check())->toBeFalse();
});

// --- email linking --------------------------------------------------------

it('links by email by default, also across tenants (unchanged behaviour)', function () {
    EntraFake::http();
    $user = TestUser::create(['name' => 'E', 'email' => 'john@example.com', 'password' => bcrypt('x')]);

    expect(config('microsoft-entra-sso.email_linking'))->toBe('always');
    signIn()->assertRedirect('/dashboard');

    expect(Auth::user()->is($user))->toBeTrue()
        ->and($user->microsoftIdentity()->first()->entra_tenant_id)->toBe(EntraFake::TENANT);
});

it('same_tenant_only links when the existing identity is from the same tenant', function () {
    config()->set('microsoft-entra-sso.email_linking', 'same_tenant_only');
    EntraFake::http();
    $user = existingUser(EntraFake::TENANT, 'old-oid');

    signIn()->assertRedirect('/dashboard');

    expect(Auth::user()->is($user))->toBeTrue()
        ->and($user->microsoftIdentity()->first()->microsoft_id)->toBe(EntraFake::OID);
});

it('same_tenant_only refuses another tenant, a missing identity and a legacy identity', function (?string $tenant, bool $withIdentity) {
    config()->set('microsoft-entra-sso.email_linking', 'same_tenant_only');
    EntraFake::http();
    Event::fake([SSOLoginDenied::class]);
    $user = $withIdentity
        ? existingUser($tenant, 'old-oid')
        : TestUser::create(['name' => 'E', 'email' => 'john@example.com', 'password' => bcrypt('x')]);

    signIn()->assertRedirect('/login')
        ->assertSessionHas('microsoft_entra_sso_error', __('microsoft-entra-sso.error.email_linking_tenant_mismatch'));

    expect(Auth::check())->toBeFalse()
        ->and(TestUser::count())->toBe(1);
    if ($withIdentity) {
        expect($user->microsoftIdentity()->first()->microsoft_id)->toBe('old-oid');
    }
    Event::assertDispatched(SSOLoginDenied::class, fn ($e) => $e->reason === 'email_linking_tenant_mismatch');
})->with([
    'other tenant' => [EntraFake::OTHER_TENANT, true],
    'no identity' => [null, false],
    'legacy identity without tenant' => [null, true],
]);

it('same_tenant_only refuses when the sign-in carries no validated tenant', function () {
    config()->set('microsoft-entra-sso.email_linking', 'same_tenant_only');
    EntraFake::http(['id_token' => null]);
    existingUser(EntraFake::TENANT, 'old-oid');

    signIn()->assertRedirect('/login')->assertSessionHas('microsoft_entra_sso_error');

    expect(Auth::check())->toBeFalse();
});

it('same_tenant_only still auto-registers unknown emails', function () {
    config()->set('microsoft-entra-sso.email_linking', 'same_tenant_only');
    EntraFake::http();

    signIn()->assertRedirect('/dashboard');

    expect(TestUser::count())->toBe(1);
});

it('never refuses to link by email and explains why', function () {
    config()->set('microsoft-entra-sso.email_linking', 'never');
    EntraFake::http();
    Event::fake([SSOLoginDenied::class]);
    TestUser::create(['name' => 'E', 'email' => 'john@example.com', 'password' => bcrypt('x')]);

    signIn()->assertRedirect('/login')
        ->assertSessionHas('microsoft_entra_sso_error', __('microsoft-entra-sso.error.email_linking_disabled'));

    expect(Auth::check())->toBeFalse()->and(MicrosoftSSOIdentity::count())->toBe(0);
    Event::assertDispatched(SSOLoginDenied::class, fn ($e) => $e->reason === 'email_linking_never');
});

it('never still lets already linked identities and new users in', function () {
    config()->set('microsoft-entra-sso.email_linking', 'never');
    EntraFake::http();

    signIn()->assertRedirect('/dashboard');
    Auth::logout();
    signIn()->assertRedirect('/dashboard');

    expect(TestUser::count())->toBe(1);
});

it('applies the policy to apps that call findOrCreateFromMicrosoft directly', function () {
    $payload = ['id' => 'new-oid', 'name' => 'J', 'email' => 'john@example.com', 'tenant_id' => EntraFake::OTHER_TENANT];
    TestUser::create(['name' => 'E', 'email' => 'john@example.com', 'password' => bcrypt('x')]);

    config()->set('microsoft-entra-sso.email_linking', 'never');
    expect(fn () => TestUser::findOrCreateFromMicrosoft($payload))
        ->toThrow(LoginDeniedException::class);

    config()->set('microsoft-entra-sso.email_linking', 'same_tenant_only');
    expect(fn () => TestUser::findOrCreateFromMicrosoft($payload))
        ->toThrow(LoginDeniedException::class);

    config()->set('microsoft-entra-sso.email_linking', 'always');
    expect(TestUser::findOrCreateFromMicrosoft($payload)->microsoftIdentity->entra_tenant_id)->toBe(EntraFake::OTHER_TENANT);
});

it('exposes the policy as a helper for app overrides', function () {
    $policy = app(EmailLinkingPolicy::class);
    $user = existingUser(EntraFake::TENANT);

    config()->set('microsoft-entra-sso.email_linking', 'same_tenant_only');
    expect($policy->mode())->toBe('same_tenant_only')
        ->and($policy->canLink($user, ['tenant_id' => EntraFake::TENANT]))->toBeTrue()
        ->and($policy->canLink($user, ['tenant_id' => EntraFake::OTHER_TENANT]))->toBeFalse()
        ->and($policy->canLink($user, []))->toBeFalse();
    config()->set('microsoft-entra-sso.email_linking', 'never');
    expect($policy->canLink($user, ['tenant_id' => EntraFake::TENANT]))->toBeFalse();
});

it('rejects a changed tenant for a known identity in the trait default', function () {
    existingUser(EntraFake::TENANT, 'oid-1');

    TestUser::findOrCreateFromMicrosoft(['id' => 'oid-1', 'email' => 'x@example.com', 'tenant_id' => EntraFake::OTHER_TENANT]);
})->throws(LoginDeniedException::class);

it('keeps an existing tenant when tokens are updated', function () {
    $user = existingUser(EntraFake::TENANT, 'oid-1');

    $user->updateMicrosoftTokens(['token' => 't', 'tenant_id' => EntraFake::OTHER_TENANT]);

    expect($user->microsoftIdentity()->first()->entra_tenant_id)->toBe(EntraFake::TENANT);
});

// --- migration ------------------------------------------------------------
