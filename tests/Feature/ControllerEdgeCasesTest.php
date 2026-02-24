<?php

use Illuminate\Support\Facades\Http;

it('handles unexpected throwable in callback gracefully', function () {
    Http::fake([
        'login.microsoftonline.com/*' => Http::response([
            'access_token' => 'fake-access-token',
            'refresh_token' => 'fake-refresh-token',
            'expires_in' => 3600,
        ]),
        'graph.microsoft.com/*' => Http::response([
            'id' => 'ms-user-123',
            'displayName' => 'John Doe',
            'mail' => 'john@example.com',
            'userPrincipalName' => 'john@example.com',
        ]),
    ]);

    config(['microsoft-entra-sso.guards.web.model' => 'NonExistentModel']);

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

it('rejects model that does not implement SSOAuthenticatable', function () {
    Http::fake([
        'login.microsoftonline.com/*' => Http::response([
            'access_token' => 'fake-access-token',
            'refresh_token' => 'fake-refresh-token',
            'expires_in' => 3600,
        ]),
        'graph.microsoft.com/*' => Http::response([
            'id' => 'ms-user-123',
            'displayName' => 'John Doe',
            'mail' => 'john@example.com',
            'userPrincipalName' => 'john@example.com',
        ]),
    ]);

    config(['microsoft-entra-sso.guards.web.model' => \Illuminate\Foundation\Auth\User::class]);

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

it('prevents callback replay because state is pulled from session', function () {
    Http::fake([
        'login.microsoftonline.com/*' => Http::response([
            'access_token' => 'fake-access-token',
            'refresh_token' => 'fake-refresh-token',
            'expires_in' => 3600,
        ]),
        'graph.microsoft.com/*' => Http::response([
            'id' => 'ms-user-123',
            'displayName' => 'John Doe',
            'mail' => 'john@example.com',
            'userPrincipalName' => 'john@example.com',
        ]),
    ]);

    $first = $this
        ->withSession([
            'microsoft_entra_sso_state' => 'test-state',
            'microsoft_entra_sso_code_verifier' => 'test-verifier',
            'microsoft_entra_sso_guard' => 'web',
        ])
        ->get('/sso/microsoft/web/callback?code=auth-code&state=test-state');

    $first->assertRedirect('/dashboard');

    $second = $this
        ->withSession([
            'microsoft_entra_sso_code_verifier' => 'test-verifier',
            'microsoft_entra_sso_guard' => 'web',
        ])
        ->get('/sso/microsoft/web/callback?code=auth-code&state=test-state');

    $second->assertRedirect(route('login'));
    $second->assertSessionHas('microsoft_entra_sso_error');
});
