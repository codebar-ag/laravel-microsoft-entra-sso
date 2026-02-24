# Laravel Microsoft Entra SSO

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

## Routes and controllers

The package registers two routes under the configured prefix (`sso/microsoft` by default):

- `GET /sso/microsoft/{guard}/redirect` -> `RedirectToMicrosoftController` (invokable)
- `GET /sso/microsoft/{guard}/callback` -> `HandleMicrosoftCallbackController` (invokable)

Named routes remain:

- `microsoft-entra-sso.redirect`
- `microsoft-entra-sso.callback`

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

## Troubleshooting

- `microsoft_entra_sso_error` in session:
  - Check Entra app credentials and callback URL.
  - Ensure guard exists in `config/microsoft-entra-sso.php`.
  - Ensure your app has a `login` route (or fallback redirect handling in your app).
- Button appears unstyled:
  - Verify Tailwind v4 `@source` includes package Blade view paths.
  - Rebuild frontend assets after changing Tailwind sources.

## Testing

Run package tests:

```bash
composer test
```

Run coverage with enforced minimum:

```bash
composer test-coverage
```
