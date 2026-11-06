<?php

declare(strict_types=1);

use App\Models\User;

return [

    /*
    |--------------------------------------------------------------------------
    | Microsoft Entra ID (Azure AD) Credentials
    |--------------------------------------------------------------------------
    |
    | Register an application in the Entra admin center and copy the client
    | (application) ID and client secret here.
    |
    | tenant_id is either the GUID of ONE directory (single directory app: only
    | people of that directory can sign in) or "organizations" / "common" /
    | "consumers" (customer directories: people of any directory can sign in,
    | restrict them with a login gate).
    |
    | The redirect URI registered in Entra is derived from the route
    | {prefix}/{guard}/callback and the host of the request, see
    | allowed_redirect_hosts.
    |
    */

    'tenant_id' => env('MICROSOFT_ENTRA_SSO_TENANT_ID'),

    'client_id' => env('MICROSOFT_ENTRA_SSO_CLIENT_ID'),

    'client_secret' => env('MICROSOFT_ENTRA_SSO_CLIENT_SECRET'),

    /*
    |--------------------------------------------------------------------------
    | OAuth Scopes
    |--------------------------------------------------------------------------
    |
    | The scopes requested during the OAuth2 authorization flow. "openid" is
    | required. The defaults are sufficient for SSO login. Add Microsoft Graph
    | scopes only when you need them: GroupMember.Read.All needs admin consent
    | in every customer directory.
    |
    */

    'scopes' => ['openid', 'profile', 'email', 'User.Read'],

    /*
    |--------------------------------------------------------------------------
    | Auto-Registration
    |--------------------------------------------------------------------------
    |
    | When enabled, a person signing in for the first time is created through
    | your UserProvisioner. Disabled by default: only existing users (or users
    | linked by email, see email_linking) can sign in.
    |
    */

    'auto_register' => (bool) env('MICROSOFT_ENTRA_SSO_AUTO_REGISTER', false),

    /*
    |--------------------------------------------------------------------------
    | Id Token Validation
    |--------------------------------------------------------------------------
    |
    | The id token is always required and validated (RS256 signature against
    | the Entra JWKS, audience, issuer vs. tid, exp/nbf/iat, nonce); its tenant
    | (tid) and object id (oid) are the identity of the person. Keys are cached
    | for jwks_cache_ttl seconds and re-fetched at most once per
    | jwks_refresh_cooldown seconds when a token uses an unknown key id.
    |
    */

    'id_token' => [
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
    |   'never'            never link by email (default)
    |   'same_tenant_only' link only if the user's Microsoft identity has the same tenant id
    |   'always'           link by email; only allowed when tenant_id is a single directory GUID
    |
    | An email address in a foreign directory is not proof of ownership
    | (nOAuth, see README), so 'always' with "organizations", "common" or
    | "consumers" is a configuration error.
    |
    */

    'email_linking' => env('MICROSOFT_ENTRA_SSO_EMAIL_LINKING', 'never'),

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
    | Security Hardening
    |--------------------------------------------------------------------------
    |
    | state_ttl_seconds controls how long the sign-in state (state, PKCE
    | verifier, nonce) stays valid in the session. allowed_redirect_hosts
    | restricts the host of the derived redirect URI (empty allows any host,
    | set it in production).
    |
    */

    'state_ttl_seconds' => 300,

    'allowed_redirect_hosts' => [],

    /*
    |--------------------------------------------------------------------------
    | Errors and Login Page
    |--------------------------------------------------------------------------
    |
    | The package ships no UI. A failed sign-in redirects to the route named by
    | login_route (or "/" when it does not exist) and flashes the translated
    | error message under error_flash_key.
    |
    */

    'error_flash_key' => 'microsoft_entra_sso_error',

    'login_route' => 'login',

    /*
    |--------------------------------------------------------------------------
    | HTTP Client Options
    |--------------------------------------------------------------------------
    |
    | Configure request behavior for OAuth, JWKS and Graph calls. Only
    | transient failures (connection errors, 5xx) are retried, because
    | authorization codes and refresh tokens are single use.
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
    | Microsoft Graph
    |--------------------------------------------------------------------------
    |
    | group_membership_cache_ttl caches group membership checks per user for
    | that many seconds (0 disables). The refresh lock serialises concurrent
    | access token refreshes of the same user.
    |
    */

    'graph' => [
        'group_membership_cache_ttl' => 60,
        'refresh_lock_seconds' => 10,
        'refresh_lock_wait_seconds' => 5,
    ],

    /*
    |--------------------------------------------------------------------------
    | Guards
    |--------------------------------------------------------------------------
    |
    | Define which authentication guards can use Microsoft SSO. Each guard
    | maps to an Eloquent model and a post-login redirect path. The model
    | must implement the SsoUser contract (use the HasMicrosoftIdentity trait).
    |
    */

    'guards' => [
        'web' => [
            'model' => User::class,
            'redirect_after_login' => '/dashboard',
        ],
    ],

];
