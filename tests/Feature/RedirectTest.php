<?php

use CodebarAg\MicrosoftEntraSSO\Exceptions\SSOException;
use CodebarAg\MicrosoftEntraSSO\Services\MicrosoftOAuthService;

use function Pest\Laravel\get;

it('redirects to microsoft authorization endpoint', function () {
    $response = get(route('microsoft-entra-sso.redirect', ['guard' => 'web']));

    $response->assertRedirect();

    $location = $response->headers->get('Location');

    expect($location)
        ->toContain('login.microsoftonline.com')
        ->toContain('test-tenant-id')
        ->toContain('oauth2/v2.0/authorize')
        ->toContain('client_id=test-client-id')
        ->toContain('response_type=code')
        ->toContain('code_challenge=')
        ->toContain('code_challenge_method=S256')
        ->toContain('state=');
});

it('stores state and code verifier in session', function () {
    $response = get(route('microsoft-entra-sso.redirect', ['guard' => 'web']));

    $response->assertRedirect();
    $response->assertSessionHas('microsoft_entra_sso_state');
    $response->assertSessionHas('microsoft_entra_sso_code_verifier');
    $response->assertSessionHas('microsoft_entra_sso_guard', 'web');
    $response->assertSessionHas('microsoft_entra_sso_issued_at');
});

it('rejects unconfigured guards', function () {
    $response = get('/sso/microsoft/admin/redirect');

    $response->assertRedirect(route('login'));
    $response->assertSessionHas('microsoft_entra_sso_error');
});

it('includes prompt=select_account in redirect url', function () {
    $response = get(route('microsoft-entra-sso.redirect', ['guard' => 'web']));

    $location = $response->headers->get('Location');

    expect($location)->toContain('prompt=select_account');
});

it('includes configured scopes in redirect url', function () {
    $response = get(route('microsoft-entra-sso.redirect', ['guard' => 'web']));

    $location = $response->headers->get('Location');

    expect($location)
        ->toContain('openid')
        ->toContain('profile')
        ->toContain('email')
        ->toContain('User.Read');
});

it('supports guard names with underscores', function () {
    config([
        'microsoft-entra-sso.guards.admin_api' => [
            'model' => \CodebarAg\MicrosoftEntraSSO\Tests\TestUser::class,
            'redirect_after_login' => '/dashboard',
        ],
    ]);

    $response = get(route('microsoft-entra-sso.redirect', ['guard' => 'admin_api']));

    $response->assertRedirect();
    $response->assertSessionHas('microsoft_entra_sso_guard', 'admin_api');
});

it('handles redirect service exceptions gracefully', function () {
    $mock = \Mockery::mock(MicrosoftOAuthService::class);
    $mock->shouldReceive('setRedirectUri')->once()->andReturnSelf();
    $mock->shouldReceive('getAuthorizationUrl')
        ->once()
        ->andThrow(SSOException::configurationMissing('client_id'));
    app()->instance(MicrosoftOAuthService::class, $mock);

    $response = get(route('microsoft-entra-sso.redirect', ['guard' => 'web']));

    $response->assertRedirect(route('login'));
    $response->assertSessionHas('microsoft_entra_sso_error');
});
