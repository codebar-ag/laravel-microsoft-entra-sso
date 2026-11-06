<?php

use App\Models\User;

return [

    /*
    |--------------------------------------------------------------------------
    | Microsoft Entra ID (Azure AD) Credentials
    |--------------------------------------------------------------------------
    |
    | Register an application in the Azure Portal / Entra admin center and
    | copy the tenant ID, client (application) ID, and client secret here.
    | The redirect URI must match the one configured in Azure exactly.
    |
    */

    'tenant_id' => env('MICROSOFT_ENTRA_SSO_TENANT_ID'),

    'client_id' => env('MICROSOFT_ENTRA_SSO_CLIENT_ID'),

    'client_secret' => env('MICROSOFT_ENTRA_SSO_CLIENT_SECRET'),

    'redirect_uri' => env('MICROSOFT_ENTRA_SSO_REDIRECT_URI'),

    /*
    |--------------------------------------------------------------------------
    | OAuth Scopes
    |--------------------------------------------------------------------------
    |
    | The scopes requested during the OAuth2 authorization flow. The defaults
    | are sufficient for SSO login. Add additional Microsoft Graph scopes
    | if your application needs to access Microsoft APIs on behalf of the user.
    |
    */

    'scopes' => ['openid', 'profile', 'email', 'User.Read', 'GroupMember.Read.All'],

    /*
    |--------------------------------------------------------------------------
    | Auto-Registration
    |--------------------------------------------------------------------------
    |
    | When enabled, users authenticating via Microsoft SSO for the first time
    | will be automatically created in your database. Disable this if you
    | only want to allow SSO for pre-existing users.
    |
    */

    'auto_register' => true,

    /*
    |--------------------------------------------------------------------------
    | Id Token Validation
    |--------------------------------------------------------------------------
    |
    | When the token response contains an id token it is validated (RS256
    | signature against the Entra JWKS, audience, issuer vs. tid, exp/nbf,
    | nonce) and the user's tenant id (tid) and object id (oid) are exposed.
    | Validation fails closed. Set `require` to true to also reject token
    | responses without an id token (recommended for multi-tenant apps).
    | Keys are cached for jwks_cache_ttl seconds and re-fetched at most once
    | per jwks_refresh_cooldown seconds when a token uses an unknown key id.
    |
    */

    'id_token' => [
        'validate' => true,
        'require' => (bool) env('MICROSOFT_ENTRA_SSO_REQUIRE_ID_TOKEN', false),
        'leeway_seconds' => 60,
        'jwks_cache_ttl' => 86400,
        'jwks_refresh_cooldown' => 60,
        'cache_store' => null,
    ],

    /*
    |--------------------------------------------------------------------------
    | Login Gate
    |--------------------------------------------------------------------------
    |
    | Optional class implementing CodebarAg\MicrosoftEntraSSO\Contracts\LoginGate.
    | It runs on every Microsoft sign-in before a user is looked up, linked or
    | registered. Returning false denies the sign-in. null disables the gate.
    |
    */

    'login_gate' => null,

    /*
    |--------------------------------------------------------------------------
    | Email Linking
    |--------------------------------------------------------------------------
    |
    | How an existing local user is matched to a Microsoft sign-in by email:
    |   'always'           link by email (default, historic behaviour)
    |   'same_tenant_only' link only if the user's Microsoft identity has the same tenant id
    |   'never'            never link by email
    |
    | Multi-tenant apps must not use 'always' (see README, "nOAuth").
    |
    */

    'email_linking' => env('MICROSOFT_ENTRA_SSO_EMAIL_LINKING', 'always'),

    /*
    |--------------------------------------------------------------------------
    | Route Configuration
    |--------------------------------------------------------------------------
    |
    | Customize the route prefix and middleware applied to the SSO routes.
    | The routes register as: {prefix}/{guard}/redirect and {prefix}/{guard}/callback
    |
    */

    'route_prefix' => 'sso/microsoft',

    'route_middleware' => ['web'],

    /*
    |--------------------------------------------------------------------------
    | OAuth Flow Behavior
    |--------------------------------------------------------------------------
    |
    | Enable stateless mode for API-style integrations where session-backed
    | state validation is not available. When stateless is disabled, callback
    | requests must match both the stored OAuth state and guard.
    |
    */

    'stateless' => false,

    /*
    |--------------------------------------------------------------------------
    | Security Hardening
    |--------------------------------------------------------------------------
    |
    | state_ttl_seconds controls how long OAuth state/code verifier values
    | remain valid in session. allowed_redirect_hosts can be used to restrict
    | redirect URIs to known hostnames.
    |
    */

    'state_ttl_seconds' => 300,
    'allowed_redirect_hosts' => [],

    /*
    |--------------------------------------------------------------------------
    | HTTP Client Options
    |--------------------------------------------------------------------------
    |
    | Configure request behavior for OAuth and Graph calls.
    |
    */

    'http' => [
        'timeout' => 10,
        'connect_timeout' => 5,
        'retry_times' => 1,
        'retry_sleep_ms' => 200,
    ],

    /*
    |--------------------------------------------------------------------------
    | Guards
    |--------------------------------------------------------------------------
    |
    | Define which authentication guards can use Microsoft SSO. Each guard
    | maps to an Eloquent model and a post-login redirect path. The model
    | must use the HasMicrosoftSSO trait.
    |
    */

    'guards' => [
        'web' => [
            'model' => User::class,
            'redirect_after_login' => '/dashboard',
        ],
    ],

];
