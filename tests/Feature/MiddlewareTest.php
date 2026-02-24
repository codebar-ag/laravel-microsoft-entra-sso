<?php

use CodebarAg\MicrosoftEntraSSO\Middleware\EnsureSSOEnabled;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\get;

beforeEach(function () {
    Route::middleware(['web', EnsureSSOEnabled::class])
        ->get('/test-sso-middleware', fn () => 'ok');
});

it('allows requests when sso is configured', function () {
    $response = get('/test-sso-middleware');

    $response->assertOk();
    $response->assertSee('ok');
});

it('blocks requests when client id is missing', function () {
    config(['microsoft-entra-sso.client_id' => null]);

    $response = get('/test-sso-middleware');

    $response->assertStatus(503);
});

it('blocks requests when client secret is missing', function () {
    config(['microsoft-entra-sso.client_secret' => null]);

    $response = get('/test-sso-middleware');

    $response->assertStatus(503);
});

it('blocks requests when tenant id is missing', function () {
    config(['microsoft-entra-sso.tenant_id' => null]);

    $response = get('/test-sso-middleware');

    $response->assertStatus(503);
});
