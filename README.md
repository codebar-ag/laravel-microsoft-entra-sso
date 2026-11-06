<img src="https://banners.beyondco.de/Laravel%20Microsoft%20Entra%20SSO.png?theme=light&packageManager=composer+require&packageName=codebar-ag%2Flaravel-microsoft-entra-sso&pattern=circuitBoard&style=style_2&description=Microsoft+Entra+ID+SSO+authentication+for+Laravel.&md=1&showWatermark=0&fontSize=150px&images=home&widths=500&heights=500">

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codebar-ag/laravel-microsoft-entra-sso.svg?style=flat-square)](https://packagist.org/packages/codebar-ag/laravel-microsoft-entra-sso)
[![Total Downloads](https://img.shields.io/packagist/dt/codebar-ag/laravel-microsoft-entra-sso.svg?style=flat-square)](https://packagist.org/packages/codebar-ag/laravel-microsoft-entra-sso)
[![GitHub-Tests](https://github.com/codebar-ag/laravel-microsoft-entra-sso/actions/workflows/tests.yml/badge.svg?branch=main)](https://github.com/codebar-ag/laravel-microsoft-entra-sso/actions/workflows/tests.yml)
[![GitHub Code Style](https://github.com/codebar-ag/laravel-microsoft-entra-sso/actions/workflows/fix-php-code-style-issues.yml/badge.svg?branch=main)](https://github.com/codebar-ag/laravel-microsoft-entra-sso/actions/workflows/fix-php-code-style-issues.yml)
[![PHPStan](https://github.com/codebar-ag/laravel-microsoft-entra-sso/actions/workflows/phpstan.yml/badge.svg)](https://github.com/codebar-ag/laravel-microsoft-entra-sso/actions/workflows/phpstan.yml)
[![Dependency Review](https://github.com/codebar-ag/laravel-microsoft-entra-sso/actions/workflows/dependency-review.yml/badge.svg)](https://github.com/codebar-ag/laravel-microsoft-entra-sso/actions/workflows/dependency-review.yml)

Microsoft Entra ID (Azure AD) SSO authentication package for Laravel using OAuth2 + OpenID Connect.

## Requirements

- PHP 8.3, 8.4, or 8.5
- Laravel 13
- A Microsoft Entra app registration

## Installation

```bash
composer require codebar-ag/laravel-microsoft-entra-sso
```

Publish config (optional, recommended):

```bash
php artisan vendor:publish --tag=microsoft-entra-sso-config
```

Publish package translations (recommended if you want to customize text or add locales):

```bash
php artisan vendor:publish --tag=microsoft-entra-sso-translations
```

## Configuration

Set these environment variables:

```dotenv
MICROSOFT_ENTRA_SSO_TENANT_ID=your-tenant-id
MICROSOFT_ENTRA_SSO_CLIENT_ID=your-client-id
MICROSOFT_ENTRA_SSO_CLIENT_SECRET=your-client-secret
MICROSOFT_ENTRA_SSO_REDIRECT_URI=${APP_URL}/sso/microsoft/web/callback
```

Configure guards in `config/microsoft-entra-sso.php`:

```php
'guards' => [
    'web' => [
        'model' => App\Models\User::class,
        'redirect_after_login' => '/dashboard',
    ],
],
```

The configured model must implement `CodebarAg\MicrosoftEntraSSO\Contracts\SSOAuthenticatable` (typically via the `HasMicrosoftSSO` trait).

### Security and flow options

The package supports additional hardening options:

```php
'stateless' => false,
'state_ttl_seconds' => 300,
'allowed_redirect_hosts' => ['example.com', 'localhost'],
```

- `stateless`: skips session-bound state validation (useful for API/mobile callback workflows).
- `state_ttl_seconds`: rejects stale OAuth state values.
- `allowed_redirect_hosts`: prevents redirect URI host misuse.

### HTTP behavior

OAuth and Graph calls can be tuned:

```php
'http' => [
    'timeout' => 10,
    'connect_timeout' => 5,
    'retry_times' => 1,
    'retry_sleep_ms' => 200,
],
```

Use these values to set environment-specific resiliency for slow networks or transient upstream failures.

## Multi-tenant (customer directories)

By default the package suits a single company directory. If your app lets people from *other* organisations sign in (SaaS, customer portals, ticketing), configure it as follows. Everything below is opt-in; with no new config, behaviour is unchanged.

### Accept customer directories

Set the tenant to `organizations` (work and school accounts of any directory; use `common` to also allow personal accounts):

```dotenv
MICROSOFT_ENTRA_SSO_TENANT_ID=organizations
```

The Entra app registration must be set to "Accounts in any organizational directory (multitenant)".

Use only scopes that customers can consent to on their own:

```php
'scopes' => ['openid', 'profile', 'email', 'User.Read'],
```

The package default also requests `GroupMember.Read.All`. That scope needs admin consent in every customer tenant, so sign-ins of regular customer users fail. Leave it out unless you really need group membership.

### Validated id token, `tid` and `oid`

The `openid` scope makes Entra return an id token. The package validates it and fails closed (the sign-in is refused with an error):

- RS256 signature against the Entra JWKS (found via the OpenID discovery document, cached, refreshed at most once per cooldown when a token uses an unknown key id)
- `aud` equals your client id
- `iss` equals `https://login.microsoftonline.com/{tid}/v2.0` for the token's own `tid`
- `exp`, `nbf`, `iat` with 60 seconds leeway
- `nonce`, bound to the session (not in `stateless` mode)
- if `tenant_id` is a tenant GUID, the token's `tid` must equal it

The result is available as `SSOUser::$tenantId` and `SSOUser::$objectId`, and as `tenant_id` and `object_id` in the array handed to `findOrCreateFromMicrosoft()`, `linkMicrosoftAccount()`, `updateMicrosoftTokens()` and the events. `tid` is stored on the identity in the new `entra_tenant_id` column (run `php artisan migrate`; the package keeps working without the column but then stores no tenant). Identities created before the upgrade get their tenant filled in on their next sign-in.

```php
'id_token' => [
    'validate' => true,                 // set false to ignore id tokens entirely
    'require' => true,                  // reject token responses without an id token (recommended)
    'leeway_seconds' => 60,
    'jwks_cache_ttl' => 86400,
    'jwks_refresh_cooldown' => 60,
    'cache_store' => null,              // null = default cache store
],
```

`require` defaults to `false` (or `MICROSOFT_ENTRA_SSO_REQUIRE_ID_TOKEN`) so existing apps keep working; multi-tenant apps should switch it on. Signature checking uses [firebase/php-jwt](https://github.com/firebase/php-jwt) (maintained by Google's Firebase team, minimal, JWK support, enforces the key's algorithm so `none`/HS256 confusion is not possible).

Look up a user by tenant and object id with `User::findByMicrosoftIdentity($tenantId, $objectId)`. `findByMicrosoftId()` keeps working.

### Login gate

A gate decides which tenants (or users) may sign in at all. It runs on every Microsoft sign-in after token validation and **before** any user is looked up, linked or registered:

```php
use CodebarAg\MicrosoftEntraSSO\Contracts\LoginGate;
use CodebarAg\MicrosoftEntraSSO\Data\SSOUser;

class AllowedTenantsGate implements LoginGate
{
    public function allows(SSOUser $user, string $guard): bool
    {
        return $user->tenantId !== null
            && Workspace::where('entra_tenant_id', $user->tenantId)->exists();
    }
}
```

```php
'login_gate' => App\Auth\AllowedTenantsGate::class,
```

The class is resolved from the container. When it returns `false` no user is created or linked, the visitor is redirected to the login page with the usual `microsoft_entra_sso_error` flash message (translatable key `microsoft-entra-sso.error.login_denied`), and `SSOLoginDenied` is dispatched (reason `login_gate`) so you can log it. A configured class that does not exist or does not implement `LoginGate` denies every sign-in.

### Email linking and nOAuth

The package links an existing local user to a Microsoft sign-in by email (`mail`, else `userPrincipalName`). In a multi-tenant app this is dangerous ("nOAuth"): the `mail` attribute is controlled by the administrator of the signing-in directory, who can set it to anyone's address (for example `ceo@customer-a.com` in their own tenant) and sign in as that user. Never trust the email of a foreign tenant to identify an account.

```php
'email_linking' => 'same_tenant_only', // 'always' (default) | 'same_tenant_only' | 'never'
```

| Mode | Existing user matched by email |
| --- | --- |
| `always` | Linked (historic behaviour, default). |
| `same_tenant_only` | Linked only if that user already has a Microsoft identity whose stored `entra_tenant_id` equals the sign-in's `tid`. A user with no Microsoft identity, an identity without a stored tenant, or a sign-in without a validated `tid` is **not** linked. |
| `never` | Never linked by email. |

A refused link shows the user `microsoft-entra-sso.error.email_linking_tenant_mismatch` or `...email_linking_disabled` ("an account with this email address already exists, sign in with your existing method and link your Microsoft account from your profile") and dispatches `SSOLoginDenied`. Users who are already linked (found by tenant/object id), and new users when `auto_register` is on, are unaffected by the mode. If a known `microsoft_id` shows up with a different tenant than the stored one, the sign-in is refused (`tenant_mismatch`).

Linking from the profile page (calling `$user->linkMicrosoftAccount($data)` yourself while the user is signed in) is never restricted by this setting.

If your model overrides `findOrCreateFromMicrosoft()`, call the policy before linking an existing user found by email:

```php
use CodebarAg\MicrosoftEntraSSO\Services\EmailLinkingPolicy;

public static function findOrCreateFromMicrosoft(array $microsoftUser): static
{
    // ...
    if ($byEmail) {
        app(EmailLinkingPolicy::class)->assertCanLink($byEmail, $microsoftUser); // throws LoginDeniedException
        $byEmail->linkMicrosoftAccount($microsoftUser);
    }
    // ...
}
```

`canLink()` returns a boolean instead of throwing, and `mode()` returns the configured mode. The package's own controller applies the policy as well, so overriding is only needed if you replace the lookup logic.

### Recommended configuration

```php
'tenant_id' => 'organizations',
'scopes' => ['openid', 'profile', 'email', 'User.Read'],
'auto_register' => false,               // or true together with a strict login gate
'login_gate' => App\Auth\AllowedTenantsGate::class,
'email_linking' => 'same_tenant_only',  // or 'never' and let users link from their profile
'id_token' => ['require' => true],
```

## Routes and controllers

The package registers two routes under the configured prefix (`sso/microsoft` by default):

- `GET /sso/microsoft/{guard}/redirect` -> `RedirectToMicrosoftController` (invokable)
- `GET /sso/microsoft/{guard}/callback` -> `HandleMicrosoftCallbackController` (invokable)

Named routes remain:

- `microsoft-entra-sso.redirect`
- `microsoft-entra-sso.callback`

## Socialite-like API usage

The facade resolves a manager/factory contract and supports driver resolution similar to Socialite:

```php
use CodebarAg\MicrosoftEntraSSO\Facades\MicrosoftEntraSSO;

$provider = MicrosoftEntraSSO::driver('microsoft');
```

Under the hood the provider offers:

- `getAuthorizationUrl($state, $codeVerifier)`
- `exchangeCodeForTokens($code, $codeVerifier)`
- `getUserFromToken($token)`
- `getUserFromTokens($tokens, $nonce)` (Graph profile plus validated `tid`/`oid` from the id token)
- `refreshAccessToken($refreshToken)`

## Services and methods

### Service resolution

Resolve the OAuth provider via facade/manager:

```php
use CodebarAg\MicrosoftEntraSSO\Facades\MicrosoftEntraSSO;

$provider = MicrosoftEntraSSO::driver('microsoft');
```

Resolve services directly from the container:

```php
use CodebarAg\MicrosoftEntraSSO\Services\MicrosoftOAuthService;
use CodebarAg\MicrosoftEntraSSO\Services\MicrosoftGraphService;

$oauth = app(MicrosoftOAuthService::class);
$graph = app(MicrosoftGraphService::class);
```

### Provider API (OAuth)

- `stateless(bool $stateless = true): static` - enable/disable session-less callback validation mode.
- `getAuthorizationUrl(string $state, string $codeVerifier): string` - build Microsoft authorize URL.
- `exchangeCodeForTokens(string $code, string $codeVerifier): SSOToken` - exchange callback code for tokens.
- `getUserFromToken(string $accessToken): SSOUser` - fetch current Microsoft user profile from Graph `/me`.
- `refreshAccessToken(string $refreshToken): SSOToken` - refresh an expired/expiring token.
- `setRedirectUri(string $uri): static` - override redirect URI at runtime.
- `getRedirectUri(): ?string` - inspect current redirect URI.

Static helpers on `MicrosoftOAuthService`:

- `generateState(): string` - generate random OAuth state.
- `generateCodeVerifier(): string` - generate PKCE verifier.
- `generateCodeChallenge(string $codeVerifier): string` - derive PKCE S256 challenge.

### Graph API helper service

- `getUserProfile(SSOAuthenticatable $user): array` - extended profile fields from Microsoft Graph.
- `getUserGroups(SSOAuthenticatable $user): Collection` - all Azure AD groups for the user (handles pagination).
- `getUserPhotoDataUri(SSOAuthenticatable $user): ?string` - profile photo as data URI (`null` when missing).
- `isUserInGroup(SSOAuthenticatable $user, string $groupId): bool` - efficient membership check (cache-aware).

### Model trait API (`HasMicrosoftSSO`)

- `findByMicrosoftId(string $microsoftId): ?static`
- `findByMicrosoftIdentity(string $tenantId, string $objectId): ?static`
- `findOrCreateFromMicrosoft(array $microsoftUser): static`
- `linkMicrosoftAccount(array $microsoftUser): void`
- `updateMicrosoftTokens(array $microsoftUser): void`
- `hasMicrosoftSSOLinked(): bool`
- `isMicrosoftTokenExpired(): bool`
- `unlinkMicrosoftAccount(): void`

### Data objects

`SSOToken` helpers:

- `fromArray(array $payload): SSOToken`
- `toArray(): array`

`SSOUser` helpers:

- `fromGraphPayload(array $graphPayload): SSOUser`
- `withToken(SSOToken $token): SSOUser`
- `withTenant(?string $tenantId, ?string $objectId): SSOUser`
- `withoutTokens(): SSOUser`

`SSOUser` exposes the Entra tenant id as `$tenantId` (`tid`) and the object id as `$objectId` (`oid`). Both come from the validated id token and are `null` when no id token was issued.
- `toArray(): array`

## Blade usage

Use the bundled button component in your login view:

```blade
<x-microsoft-entra-sso::sso-button guard="web" />
```

You can override the label with a translation key:

```blade
<x-microsoft-entra-sso::sso-button
    guard="web"
    label="microsoft-entra-sso.button.sign_in"
/>
```

## Translations

The package ships with JSON translations for:

- `lang/en.json`
- `lang/de.json`

After publishing (`microsoft-entra-sso-translations`), you can:

- edit existing keys in your application's `lang/en.json` and `lang/de.json`
- add additional locales by creating files like `lang/fr.json` with the same keys
- set `APP_LOCALE` (and optionally `APP_FALLBACK_LOCALE`) to control runtime language

## Tailwind v4 (plain Tailwind, no Flux)

This package does not require Flux or any frontend UI dependency.

If you use the provided Blade component styles, ensure Tailwind v4 scans the package classes. Add a source path in your app stylesheet:

```css
@import "tailwindcss";
@source "../../packages/codebar-ag/laravel-microsoft-entra-sso/resources/views/**/*.blade.php";
```

If your package is installed from `vendor/`, point `@source` at the vendor path instead:

```css
@import "tailwindcss";
@source "../../vendor/codebar-ag/laravel-microsoft-entra-sso/resources/views/**/*.blade.php";
```

Alternative: publish views and scan `resources/views/vendor/microsoft-entra-sso/**/*.blade.php`.

## Events and extension points

The package dispatches:

- `CodebarAg\MicrosoftEntraSSO\Events\SSOUserRegistered`
- `CodebarAg\MicrosoftEntraSSO\Events\SSOUserAuthenticated`

Both events are emitted during the callback flow after the package authenticates or registers a user.

- `CodebarAg\MicrosoftEntraSSO\Events\SSOLoginDenied` (login gate or email linking policy refused a sign-in; carries `microsoftUser` without tokens, `guard` and `reason`: `login_gate`, `email_linking_never`, `email_linking_tenant_mismatch` or `tenant_mismatch`)

You can listen to these events to add:

- custom provisioning
- role/group synchronization
- audit logging

## Troubleshooting

- `microsoft_entra_sso_error` in session:
  - Check Entra app credentials and callback URL.
  - Ensure guard exists in `config/microsoft-entra-sso.php`.
  - Ensure your app has a `login` route (or fallback redirect handling in your app).
  - If state errors occur, verify callback happens within `state_ttl_seconds`.
- Button appears unstyled:
  - Verify Tailwind v4 `@source` includes package Blade view paths.
  - Rebuild frontend assets after changing Tailwind sources.

## Quality Checks

Run linting:

```bash
composer lint
```

Run static analysis:

```bash
composer analyse
```

`composer analyse` runs PHPStan/Larastan using `phpstan.neon.dist` at level 9.

Run package tests:

```bash
composer test
```

Run coverage with enforced minimum:

```bash
composer test-coverage
```
