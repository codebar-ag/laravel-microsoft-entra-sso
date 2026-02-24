<?php

use CodebarAg\MicrosoftEntraSSO\Events\SSOUserAuthenticated;
use CodebarAg\MicrosoftEntraSSO\Events\SSOUserRegistered;
use CodebarAg\MicrosoftEntraSSO\Tests\TestUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Http;

function fakeSuccessfulMicrosoftAuth(): void
{
    Http::fake([
        'login.microsoftonline.com/*' => Http::response([
            'access_token' => 'fake-access-token',
            'refresh_token' => 'fake-refresh-token',
            'expires_in' => 3600,
            'token_type' => 'Bearer',
        ]),
        'graph.microsoft.com/*' => Http::response([
            'id' => 'ms-user-123',
            'displayName' => 'John Doe',
            'mail' => 'john@example.com',
            'userPrincipalName' => 'john@example.com',
            'jobTitle' => 'Developer',
            'department' => 'Engineering',
        ]),
    ]);
}

it('authenticates a new user via microsoft sso', function () {
    fakeSuccessfulMicrosoftAuth();
    Event::fake();

    $response = $this
        ->withSession([
            'microsoft_entra_sso_state' => 'test-state',
            'microsoft_entra_sso_code_verifier' => 'test-verifier',
            'microsoft_entra_sso_guard' => 'web',
            'microsoft_entra_sso_issued_at' => time(),
        ])
        ->get('/sso/microsoft/web/callback?code=auth-code&state=test-state');

    $response->assertRedirect('/dashboard');

    expect(Auth::check())->toBeTrue();
    expect(Auth::user())->toBeInstanceOf(TestUser::class);
    expect(Auth::user()->email)->toBe('john@example.com');
    expect(Auth::user()->microsoftIdentity)->not->toBeNull();
    expect(Auth::user()->microsoftIdentity->microsoft_id)->toBe('ms-user-123');

    Event::assertDispatched(SSOUserRegistered::class);
});

it('authenticates an existing user by microsoft id', function () {
    fakeSuccessfulMicrosoftAuth();
    Event::fake();

    $user = TestUser::create([
        'name' => 'Existing User',
        'email' => 'existing@example.com',
        'password' => bcrypt('password'),
    ]);

    $user->microsoftIdentity()->create([
        'microsoft_id' => 'ms-user-123',
        'linked_at' => now(),
    ]);

    $response = $this
        ->withSession([
            'microsoft_entra_sso_state' => 'test-state',
            'microsoft_entra_sso_code_verifier' => 'test-verifier',
            'microsoft_entra_sso_guard' => 'web',
            'microsoft_entra_sso_issued_at' => time(),
        ])
        ->get('/sso/microsoft/web/callback?code=auth-code&state=test-state');

    $response->assertRedirect('/dashboard');

    expect(Auth::user()->email)->toBe('existing@example.com');
    expect(TestUser::count())->toBe(1);

    Event::assertDispatched(SSOUserAuthenticated::class);
});

it('links microsoft account to existing user by email', function () {
    fakeSuccessfulMicrosoftAuth();
    Event::fake();

    $user = TestUser::create([
        'name' => 'Email User',
        'email' => 'john@example.com',
        'password' => bcrypt('password'),
    ]);

    $response = $this
        ->withSession([
            'microsoft_entra_sso_state' => 'test-state',
            'microsoft_entra_sso_code_verifier' => 'test-verifier',
            'microsoft_entra_sso_guard' => 'web',
            'microsoft_entra_sso_issued_at' => time(),
        ])
        ->get('/sso/microsoft/web/callback?code=auth-code&state=test-state');

    $response->assertRedirect('/dashboard');

    $user->refresh();
    expect($user->microsoftIdentity)->not->toBeNull();
    expect($user->microsoftIdentity->microsoft_id)->toBe('ms-user-123');
    expect(TestUser::count())->toBe(1);

    Event::assertDispatched(SSOUserAuthenticated::class);
});

it('rejects callback with invalid state', function () {
    fakeSuccessfulMicrosoftAuth();

    $response = $this
        ->withSession([
            'microsoft_entra_sso_state' => 'correct-state',
            'microsoft_entra_sso_code_verifier' => 'test-verifier',
        ])
        ->get('/sso/microsoft/web/callback?code=auth-code&state=wrong-state');

    $response->assertRedirect(route('login'));
    $response->assertSessionHas('microsoft_entra_sso_error');
});

it('uses translated german error text for invalid oauth state', function () {
    fakeSuccessfulMicrosoftAuth();
    app()->setLocale('de');

    $response = $this
        ->withSession([
            'microsoft_entra_sso_state' => 'correct-state',
            'microsoft_entra_sso_code_verifier' => 'test-verifier',
        ])
        ->get('/sso/microsoft/web/callback?code=auth-code&state=wrong-state');

    $response->assertRedirect(route('login'));
    $response->assertSessionHas(
        'microsoft_entra_sso_error',
        __('microsoft-entra-sso.error.oauth_state_invalid'),
    );
});

it('rejects callback when state is missing from request', function () {
    fakeSuccessfulMicrosoftAuth();

    $response = $this
        ->withSession([
            'microsoft_entra_sso_state' => 'expected-state',
            'microsoft_entra_sso_code_verifier' => 'test-verifier',
        ])
        ->get('/sso/microsoft/web/callback?code=auth-code');

    $response->assertRedirect(route('login'));
    $response->assertSessionHas('microsoft_entra_sso_error');
});

it('rejects callback when state is missing from session', function () {
    fakeSuccessfulMicrosoftAuth();

    $response = $this
        ->withSession([
            'microsoft_entra_sso_code_verifier' => 'test-verifier',
        ])
        ->get('/sso/microsoft/web/callback?code=auth-code&state=test-state');

    $response->assertRedirect(route('login'));
    $response->assertSessionHas('microsoft_entra_sso_error');
});

it('rejects callback with missing code', function () {
    fakeSuccessfulMicrosoftAuth();

    $response = $this
        ->withSession([
            'microsoft_entra_sso_state' => 'test-state',
            'microsoft_entra_sso_code_verifier' => 'test-verifier',
        ])
        ->get('/sso/microsoft/web/callback?state=test-state');

    $response->assertRedirect(route('login'));
    $response->assertSessionHas('microsoft_entra_sso_error');
});

it('rejects callback with missing code verifier in session', function () {
    fakeSuccessfulMicrosoftAuth();

    $response = $this
        ->withSession([
            'microsoft_entra_sso_state' => 'test-state',
            'microsoft_entra_sso_guard' => 'web',
            'microsoft_entra_sso_issued_at' => time(),
        ])
        ->get('/sso/microsoft/web/callback?code=auth-code&state=test-state');

    $response->assertRedirect(route('login'));
    $response->assertSessionHas('microsoft_entra_sso_error');
});

it('rejects callback with unconfigured guard', function () {
    fakeSuccessfulMicrosoftAuth();

    $response = $this
        ->withSession([
            'microsoft_entra_sso_state' => 'test-state',
            'microsoft_entra_sso_code_verifier' => 'test-verifier',
            'microsoft_entra_sso_guard' => 'admin',
            'microsoft_entra_sso_issued_at' => time(),
        ])
        ->get('/sso/microsoft/admin/callback?code=auth-code&state=test-state');

    $response->assertRedirect(route('login'));
    $response->assertSessionHas('microsoft_entra_sso_error');
});

it('handles oauth error response from microsoft', function () {
    fakeSuccessfulMicrosoftAuth();

    $response = $this
        ->withSession([
            'microsoft_entra_sso_state' => 'test-state',
            'microsoft_entra_sso_code_verifier' => 'test-verifier',
        ])
        ->get('/sso/microsoft/web/callback?error=access_denied&error_description=User+cancelled&state=test-state');

    $response->assertRedirect(route('login'));
    $response->assertSessionHas('microsoft_entra_sso_error');
});

it('prevents registration when auto_register is disabled', function () {
    fakeSuccessfulMicrosoftAuth();
    config(['microsoft-entra-sso.auto_register' => false]);

    $response = $this
        ->withSession([
            'microsoft_entra_sso_state' => 'test-state',
            'microsoft_entra_sso_code_verifier' => 'test-verifier',
            'microsoft_entra_sso_guard' => 'web',
            'microsoft_entra_sso_issued_at' => time(),
        ])
        ->get('/sso/microsoft/web/callback?code=auth-code&state=test-state');

    $response->assertRedirect(route('login'));
    $response->assertSessionHas('microsoft_entra_sso_error');

    expect(TestUser::count())->toBe(0);
});

it('handles token exchange failure gracefully', function () {
    Http::fake([
        'login.microsoftonline.com/*' => Http::response([
            'error' => 'invalid_grant',
            'error_description' => 'The authorization code has expired.',
        ], 400),
    ]);

    $response = $this
        ->withSession([
            'microsoft_entra_sso_state' => 'test-state',
            'microsoft_entra_sso_code_verifier' => 'test-verifier',
            'microsoft_entra_sso_guard' => 'web',
            'microsoft_entra_sso_issued_at' => time(),
        ])
        ->get('/sso/microsoft/web/callback?code=expired-code&state=test-state');

    $response->assertRedirect(route('login'));
    $response->assertSessionHas('microsoft_entra_sso_error');
});

it('cleans up temporary sso session values after successful login', function () {
    fakeSuccessfulMicrosoftAuth();

    $response = $this
        ->withSession([
            'microsoft_entra_sso_state' => 'test-state',
            'microsoft_entra_sso_code_verifier' => 'test-verifier',
            'microsoft_entra_sso_guard' => 'web',
            'microsoft_entra_sso_issued_at' => time(),
        ])
        ->get('/sso/microsoft/web/callback?code=auth-code&state=test-state');

    $response->assertRedirect('/dashboard');
    $response->assertSessionMissing('microsoft_entra_sso_state');
    $response->assertSessionMissing('microsoft_entra_sso_code_verifier');
    $response->assertSessionMissing('microsoft_entra_sso_guard');
    $response->assertSessionMissing('microsoft_entra_sso_issued_at');
});

it('uses intended destination when present', function () {
    fakeSuccessfulMicrosoftAuth();

    $response = $this
        ->withSession([
            'url.intended' => '/account',
            'microsoft_entra_sso_state' => 'test-state',
            'microsoft_entra_sso_code_verifier' => 'test-verifier',
            'microsoft_entra_sso_guard' => 'web',
            'microsoft_entra_sso_issued_at' => time(),
        ])
        ->get('/sso/microsoft/web/callback?code=auth-code&state=test-state');

    $response->assertRedirect('/account');
});

it('handles malformed token payload without access token', function () {
    Http::fake([
        'login.microsoftonline.com/*' => Http::response([
            'refresh_token' => 'fake-refresh-token',
            'expires_in' => 3600,
        ]),
    ]);

    $response = $this
        ->withSession([
            'microsoft_entra_sso_state' => 'test-state',
            'microsoft_entra_sso_code_verifier' => 'test-verifier',
            'microsoft_entra_sso_guard' => 'web',
            'microsoft_entra_sso_issued_at' => time(),
        ])
        ->get('/sso/microsoft/web/callback?code=auth-code&state=test-state');

    $response->assertRedirect(route('login'));
    $response->assertSessionHas('microsoft_entra_sso_error');
});

it('handles malformed graph user payload gracefully', function () {
    Http::fake([
        'login.microsoftonline.com/*' => Http::response([
            'access_token' => 'fake-access-token',
            'refresh_token' => 'fake-refresh-token',
            'expires_in' => 3600,
            'token_type' => 'Bearer',
        ]),
        'graph.microsoft.com/*' => Http::response([
            'displayName' => 'John Doe',
            'mail' => 'john@example.com',
        ]),
    ]);

    $response = $this
        ->withSession([
            'microsoft_entra_sso_state' => 'test-state',
            'microsoft_entra_sso_code_verifier' => 'test-verifier',
            'microsoft_entra_sso_guard' => 'web',
            'microsoft_entra_sso_issued_at' => time(),
        ])
        ->get('/sso/microsoft/web/callback?code=auth-code&state=test-state');

    $response->assertRedirect(route('login'));
    $response->assertSessionHas('microsoft_entra_sso_error');
});

it('rejects callback when route guard does not match session guard', function () {
    fakeSuccessfulMicrosoftAuth();

    $response = $this
        ->withSession([
            'microsoft_entra_sso_state' => 'test-state',
            'microsoft_entra_sso_code_verifier' => 'test-verifier',
            'microsoft_entra_sso_guard' => 'web',
            'microsoft_entra_sso_issued_at' => time(),
        ])
        ->get('/sso/microsoft/admin/callback?code=auth-code&state=test-state');

    $response->assertRedirect(route('login'));
    $response->assertSessionHas('microsoft_entra_sso_error');
});

it('rejects callback when session issued_at is missing', function () {
    fakeSuccessfulMicrosoftAuth();

    $response = $this
        ->withSession([
            'microsoft_entra_sso_state' => 'test-state',
            'microsoft_entra_sso_code_verifier' => 'test-verifier',
            'microsoft_entra_sso_guard' => 'web',
        ])
        ->get('/sso/microsoft/web/callback?code=auth-code&state=test-state');

    $response->assertRedirect(route('login'));
    $response->assertSessionHas('microsoft_entra_sso_error');
});

it('supports stateless callback mode', function () {
    fakeSuccessfulMicrosoftAuth();
    config(['microsoft-entra-sso.stateless' => true]);

    $response = $this->get('/sso/microsoft/web/callback?code=auth-code&code_verifier=test-verifier');

    $response->assertRedirect('/dashboard');

    Http::assertSent(function (\Illuminate\Http\Client\Request $request) {
        if (! str_contains($request->url(), '/oauth2/v2.0/token')) {
            return true;
        }

        return $request['code_verifier'] === 'test-verifier';
    });
});
