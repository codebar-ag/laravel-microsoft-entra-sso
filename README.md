# Laravel Microsoft Entra SSO

[![Tests](https://github.com/codebar-ag/laravel-microsoft-entra-sso/actions/workflows/tests.yml/badge.svg?branch=main)](https://github.com/codebar-ag/laravel-microsoft-entra-sso/actions/workflows/tests.yml)
[![Linter](https://github.com/codebar-ag/laravel-microsoft-entra-sso/actions/workflows/lint.yml/badge.svg?branch=main)](https://github.com/codebar-ag/laravel-microsoft-entra-sso/actions/workflows/lint.yml)

Microsoft Entra ID (Azure AD) SSO authentication package for Laravel using OAuth2 + OpenID Connect.

## Requirements

- PHP 8.2+
- Laravel 11 or 12
- A Microsoft Entra app registration

## Installation

```bash
composer require codebar-ag/laravel-microsoft-entra-sso
```

Publish config (optional, recommended):

```bash
php artisan vendor:publish --tag=microsoft-entra-sso-config
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
- `refreshAccessToken($refreshToken)`

## Blade usage

Use the bundled button component in your login view:

```blade
<x-microsoft-entra-sso::sso-button guard="web">
    Sign in with Microsoft
</x-microsoft-entra-sso::sso-button>
```

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

Run package tests:

```bash
composer test
```

Run coverage with enforced minimum:

```bash
composer test-coverage
```
