<?php

use CodebarAg\MicrosoftEntraSSO\Exceptions\TokenExchangeException;
use CodebarAg\MicrosoftEntraSSO\Services\MicrosoftOAuthService;
use Illuminate\Support\Facades\Http;

it('generates a random state string', function () {
    $state = MicrosoftOAuthService::generateState();

    expect($state)->toBeString()->toHaveLength(40);
});

it('generates a random code verifier', function () {
    $verifier = MicrosoftOAuthService::generateCodeVerifier();

    expect($verifier)->toBeString()->toHaveLength(128);
});

it('generates a valid s256 code challenge', function () {
    $verifier = 'dBjftJeZ4CVP-mB92K27uhbUJU1p1r_wW1gFWFOEjXk';
    $challenge = MicrosoftOAuthService::generateCodeChallenge($verifier);

    expect($challenge)->toBeString()->not->toContain('+', '/', '=');
});

it('builds correct authorization url', function () {
    $service = new MicrosoftOAuthService(
        tenantId: 'my-tenant',
        clientId: 'my-client',
        clientSecret: 'my-secret',
        redirectUri: 'http://localhost/callback',
        scopes: ['openid', 'profile'],
    );

    $url = $service->getAuthorizationUrl('my-state', 'my-verifier');

    expect($url)
        ->toContain('login.microsoftonline.com/my-tenant/oauth2/v2.0/authorize')
        ->toContain('client_id=my-client')
        ->toContain('response_type=code')
        ->toContain(urlencode('http://localhost/callback'))
        ->toContain('state=my-state')
        ->toContain('code_challenge_method=S256')
        ->toContain('prompt=select_account');
});

it('uses common tenant when tenant id is null', function () {
    $service = new MicrosoftOAuthService(
        tenantId: null,
        clientId: 'my-client',
        clientSecret: 'my-secret',
        redirectUri: 'http://localhost/callback',
        scopes: ['openid'],
    );

    $url = $service->getAuthorizationUrl('state', 'verifier');

    expect($url)->toContain('login.microsoftonline.com/common/');
});

it('exchanges code for tokens successfully', function () {
    Http::fake([
        'login.microsoftonline.com/*' => Http::response([
            'access_token' => 'access-123',
            'refresh_token' => 'refresh-456',
            'expires_in' => 3600,
        ]),
    ]);

    $service = new MicrosoftOAuthService(
        tenantId: 'test-tenant',
        clientId: 'test-client',
        clientSecret: 'test-secret',
        redirectUri: 'http://localhost/callback',
        scopes: ['openid'],
    );

    $tokens = $service->exchangeCodeForTokens('auth-code', 'verifier');

    expect($tokens)
        ->toHaveKey('access_token', 'access-123')
        ->toHaveKey('refresh_token', 'refresh-456')
        ->toHaveKey('expires_in', 3600);
});

it('throws exception on failed token exchange', function () {
    Http::fake([
        'login.microsoftonline.com/*' => Http::response([
            'error' => 'invalid_grant',
            'error_description' => 'Code expired.',
        ], 400),
    ]);

    $service = new MicrosoftOAuthService(
        tenantId: 'test-tenant',
        clientId: 'test-client',
        clientSecret: 'test-secret',
        redirectUri: 'http://localhost/callback',
        scopes: ['openid'],
    );

    $service->exchangeCodeForTokens('bad-code', 'verifier');
})->throws(TokenExchangeException::class);

it('fetches user from microsoft graph', function () {
    Http::fake([
        'graph.microsoft.com/*' => Http::response([
            'id' => 'user-abc',
            'displayName' => 'Jane Smith',
            'mail' => 'jane@example.com',
            'userPrincipalName' => 'jane@example.com',
            'jobTitle' => 'Engineer',
            'department' => 'R&D',
        ]),
    ]);

    $service = new MicrosoftOAuthService(
        tenantId: 'test-tenant',
        clientId: 'test-client',
        clientSecret: 'test-secret',
        redirectUri: 'http://localhost/callback',
        scopes: ['openid'],
    );

    $user = $service->getUserFromToken('access-token');

    expect($user)
        ->toHaveKey('id', 'user-abc')
        ->toHaveKey('name', 'Jane Smith')
        ->toHaveKey('email', 'jane@example.com')
        ->toHaveKey('job_title', 'Engineer')
        ->toHaveKey('department', 'R&D')
        ->toHaveKey('raw');
});

it('refreshes access token successfully', function () {
    Http::fake([
        'login.microsoftonline.com/*' => Http::response([
            'access_token' => 'new-access-token',
            'refresh_token' => 'new-refresh-token',
            'expires_in' => 3600,
        ]),
    ]);

    $service = new MicrosoftOAuthService(
        tenantId: 'test-tenant',
        clientId: 'test-client',
        clientSecret: 'test-secret',
        redirectUri: 'http://localhost/callback',
        scopes: ['openid'],
    );

    $tokens = $service->refreshAccessToken('old-refresh-token');

    expect($tokens)->toHaveKey('access_token', 'new-access-token');
});

it('allows changing redirect uri', function () {
    $service = new MicrosoftOAuthService(
        tenantId: 'test-tenant',
        clientId: 'test-client',
        clientSecret: 'test-secret',
        redirectUri: 'http://original/callback',
        scopes: ['openid'],
    );

    $service->setRedirectUri('http://new/callback');

    expect($service->getRedirectUri())->toBe('http://new/callback');

    $url = $service->getAuthorizationUrl('state', 'verifier');
    expect($url)->toContain(urlencode('http://new/callback'));
});

it('throws exception when graph api fails', function () {
    Http::fake([
        'graph.microsoft.com/*' => Http::response([
            'error' => ['code' => 'InvalidAuthenticationToken', 'message' => 'Access token is expired.'],
        ], 401),
    ]);

    $service = new MicrosoftOAuthService(
        tenantId: 'test-tenant',
        clientId: 'test-client',
        clientSecret: 'test-secret',
        redirectUri: 'http://localhost/callback',
        scopes: ['openid'],
    );

    $service->getUserFromToken('expired-token');
})->throws(TokenExchangeException::class);

it('throws exception when refresh token fails', function () {
    Http::fake([
        'login.microsoftonline.com/*' => Http::response([
            'error' => 'invalid_grant',
            'error_description' => 'Refresh token has expired.',
        ], 400),
    ]);

    $service = new MicrosoftOAuthService(
        tenantId: 'test-tenant',
        clientId: 'test-client',
        clientSecret: 'test-secret',
        redirectUri: 'http://localhost/callback',
        scopes: ['openid'],
    );

    $service->refreshAccessToken('expired-refresh-token');
})->throws(TokenExchangeException::class);
