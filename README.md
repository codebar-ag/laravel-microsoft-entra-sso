<img src="https://banners.beyondco.de/Laravel%20Microsoft%20Entra%20SSO.png?theme=light&packageManager=composer+require&packageName=codebar-ag%2Flaravel-microsoft-entra-sso&pattern=circuitBoard&style=style_2&description=Microsoft+Entra+ID+SSO+authentication+for+Laravel.&md=1&showWatermark=0&fontSize=150px&images=home&widths=500&heights=500">

[![Latest Version on Packagist](https://img.shields.io/packagist/v/codebar-ag/laravel-microsoft-entra-sso.svg?style=flat-square)](https://packagist.org/packages/codebar-ag/laravel-microsoft-entra-sso)
[![Total Downloads](https://img.shields.io/packagist/dt/codebar-ag/laravel-microsoft-entra-sso.svg?style=flat-square)](https://packagist.org/packages/codebar-ag/laravel-microsoft-entra-sso)
[![GitHub-Tests](https://github.com/codebar-ag/laravel-microsoft-entra-sso/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/codebar-ag/laravel-microsoft-entra-sso/actions/workflows/run-tests.yml)
[![GitHub Code Style](https://github.com/codebar-ag/laravel-microsoft-entra-sso/actions/workflows/fix-php-code-style-issues.yml/badge.svg?branch=main)](https://github.com/codebar-ag/laravel-microsoft-entra-sso/actions/workflows/fix-php-code-style-issues.yml)
[![PHPStan](https://github.com/codebar-ag/laravel-microsoft-entra-sso/actions/workflows/phpstan.yml/badge.svg)](https://github.com/codebar-ag/laravel-microsoft-entra-sso/actions/workflows/phpstan.yml)
[![Dependency Review](https://github.com/codebar-ag/laravel-microsoft-entra-sso/actions/workflows/dependency-review.yml/badge.svg)](https://github.com/codebar-ag/laravel-microsoft-entra-sso/actions/workflows/dependency-review.yml)

Microsoft Entra ID SSO for Laravel (OAuth2 authorization code flow with PKCE + OpenID Connect). Strict, typed and small: you decide
**who may enter** and **how a new user is created**, the package does the rest.

## Requirements

- PHP 8.5, Laravel 13
- A Microsoft Entra app registration (redirect URI `https://your-app.test/sso/microsoft/web/callback`)

## Installation

```bash
composer require codebar-ag/laravel-microsoft-entra-sso
php artisan vendor:publish --tag=microsoft-entra-sso-config
php artisan migrate
```

The package ships **no UI**. It redirects failed sign-ins to your login page with a translated message; you render the button and the
message (see [Errors and the login page](#errors-and-the-login-page)).

Upgrading from v13? Read [UPGRADE.md](UPGRADE.md).

## Configuration

```dotenv
MICROSOFT_ENTRA_SSO_TENANT_ID=00000000-0000-0000-0000-000000000000
MICROSOFT_ENTRA_SSO_CLIENT_ID=...
MICROSOFT_ENTRA_SSO_CLIENT_SECRET=...
```

The configuration is validated once, when it is first needed. An invalid value throws a `ConfigurationException` that names the key,
nothing is silently replaced by a default.

| Key | Default | Meaning |
| --- | --- | --- |
| `tenant_id` | none | A directory GUID (single directory) or `organizations`, `common`, `consumers` (customer directories) |
| `client_id`, `client_secret` | none | The app registration |
| `scopes` | `openid profile email User.Read` | Must contain `openid`. `GroupMember.Read.All` needs admin consent in every customer directory |
| `auto_register` | `false` | Create unknown people through your `UserProvisioner` |
| `user_provisioner` | `null` | `UserProvisioner` class, required when `auto_register` is on |
| `login_gate` | `null` | `LoginGate` class that decides who may enter |
| `email_linking` | `never` | `never`, `same_tenant_only`, `always` (single directory only), see [Email linking](#email-linking-and-noauth) |
| `state_ttl_seconds` | `300` | How long the sign-in state stays valid in the session |
| `allowed_redirect_hosts` | `[]` | Hosts the derived redirect URI may have (empty allows any; set it in production) |
| `error_flash_key` | `microsoft_entra_sso_error` | Session flash key for the translated error |
| `login_route` | `login` | Route name of your login page (`/` when the route does not exist) |
| `route_prefix`, `route_middleware` | `sso/microsoft`, `['web']` | Route registration |
| `id_token.*` | see file | Leeway, JWKS cache TTL and refresh cooldown, cache store |
| `http.*` | see file | Timeouts and retries (only transient failures are retried) |
| `graph.*` | see file | Group membership cache TTL, refresh lock |
| `guards` | `web => [model, redirect_after_login]` | Guards that may sign in with Microsoft |

Routes: `GET {prefix}/{guard}/redirect` (name `microsoft-entra-sso.redirect`) and `GET {prefix}/{guard}/callback`
(`microsoft-entra-sso.callback`). The redirect URI registered in Entra is the callback URL of your app.

### Single directory or customer directories

- **Single directory** (`tenant_id` is a GUID): only people of that directory can sign in; other directories are refused by the id token
  check. Use this for internal tools.
- **Customer directories** (`organizations` or `common`): people of any directory can sign in. Always restrict them with a
  [login gate](#login-gate) (for example a list of customer tenant ids) and keep `email_linking` at `never` or `same_tenant_only`.

The identity of a person is the pair **tenant id (`tid`) and object id (`oid`)** of the validated id token (`EntraIdentity`), not the
email address.

## The user model

```php
use CodebarAg\MicrosoftEntraSSO\Concerns\HasMicrosoftIdentity;
use CodebarAg\MicrosoftEntraSSO\Contracts\SsoUser;

class User extends Authenticatable implements SsoUser
{
    use HasMicrosoftIdentity; // microsoftIdentity() relation, isMicrosoftLinked(), isMicrosoftTokenExpired(), unlinkMicrosoft()
}
```

The trait contains no sign-in logic. The identity (object id, tenant id, encrypted tokens) lives in the `microsoft_sso_identities` table
(`MicrosoftIdentity` model).

## Login gate

The gate runs after the id token is validated and **before** anything is looked up, linked or created. A denial never touches your users.

```php
use CodebarAg\MicrosoftEntraSSO\Config\GuardConfig;
use CodebarAg\MicrosoftEntraSSO\Contracts\LoginGate;
use CodebarAg\MicrosoftEntraSSO\Identity\SignIn;

final class CustomerTenantGate implements LoginGate
{
    public function allows(SignIn $signIn, GuardConfig $guard): bool
    {
        return Customer::query()->where('entra_tenant_id', $signIn->identity->tenantId)->where('active', true)->exists();
    }
}
```

Register it: `'login_gate' => CustomerTenantGate::class`. `SignIn` carries `identity` (`EntraIdentity`), `profile` (`Profile`) and `tokens` (`Tokens`).

## User provisioner

Only used when `auto_register` is on and nobody matched. Create the user and return it; the package stores the Microsoft identity,
dispatches `UserRegistered`, logs the user in and fires `SignedIn`.

```php
use CodebarAg\MicrosoftEntraSSO\Contracts\SsoUser;
use CodebarAg\MicrosoftEntraSSO\Contracts\UserProvisioner;

final class MicrosoftUserProvisioner implements UserProvisioner
{
    public function create(SignIn $signIn): SsoUser
    {
        return User::create([
            'name' => $signIn->profile->name,
            'email' => $signIn->profile->email,
            'password' => Hash::make(Str::random(40)),
            'email_verified_at' => now(),
        ]);
    }
}
```

The returned user must be an instance of the model configured for the guard.

## Email linking and nOAuth

When nobody has the signing-in identity, an existing local user with the same email can be linked (`email_linking`):

- `never` (default): never link. The person must sign in the old way and link from a profile page.
- `same_tenant_only`: link only if that user's stored Microsoft identity belongs to the same tenant.
- `always`: link by email. **Only allowed when `tenant_id` is a single directory GUID.**

Why: the `email`/`mail` value of a Microsoft account in a foreign directory is **not proof of ownership**. An administrator of another
directory can set any email on their own user ("nOAuth"). If a multi-directory app links by email, that administrator signs in as your
user. With a single trusted directory the email is controlled by you, so `always` is safe there. `organizations`/`common`/`consumers`
combined with `always` is a `ConfigurationException`.

A known identity (same object id) arriving from a different tenant is always refused (`DenialReason::TenantMismatch`). Rows linked by
v13 have no stored tenant; they are adopted and the tenant is stored on the first v14 sign-in.

## Errors and the login page

Failures implement `SignInFailure` and carry a translation key. The callback controller redirects to `login_route` and flashes the
translated message under `error_flash_key`:

```blade
@if (session('microsoft_entra_sso_error'))
    <p role="alert">{{ session('microsoft_entra_sso_error') }}</p>
@endif

<a href="{{ route('microsoft-entra-sso.redirect', ['guard' => 'web']) }}">Sign in with Microsoft</a>
```

Publish the translations with `php artisan vendor:publish --tag=microsoft-entra-sso-translations` (English and German included).
Exceptions that are not sign-in failures (`ConfigurationException`, bugs) are not swallowed.

## Microsoft Graph

```php
use CodebarAg\MicrosoftEntraSSO\Facades\MicrosoftEntraSSO;

$profile = MicrosoftEntraSSO::profile($user);          // GraphProfile (typed)
$groups = MicrosoftEntraSSO::groups($user);            // list<Group>
$photo = MicrosoftEntraSSO::photo($user);              // data URI or null
$member = MicrosoftEntraSSO::isMemberOf($user, $guid); // cached per user model, user and group (graph.group_membership_cache_ttl)
```

(or inject `GraphProfileService`). The stored access token is used; when it expired it is refreshed with the stored refresh token under a
cache lock (the default cache store must support locks), because refresh tokens are single use. Pagination links outside of
`graph.microsoft.com` are refused. Failures throw `GraphException` or `TokenException`.

## Events

| Event | Payload |
| --- | --- |
| `SignedIn` | `user`, `signIn`, `guard` (every successful sign-in) |
| `UserRegistered` | `user`, `signIn`, `guard` (additionally, for new users) |
| `SignInDenied` | `identity`, `profile`, `guard`, `reason` (`DenialReason`); carries no tokens |

## What is validated

PKCE (S256), `state` with TTL and guard binding (consumed on first use), `nonce`, the id token (RS256 only, signature against the Entra
JWKS with a cache and a refresh cooldown, `aud`, `iss` vs. `tid`, `exp`/`nbf`/`iat` with leeway, configured directory), and that the
`oid` equals the Graph user id (except personal Microsoft accounts). Authorization codes and refresh tokens are single use, so only
transient failures (connection errors, 5xx) are retried.

## Testing

Use `Http::fake()` for `login.microsoftonline.com` (token endpoint, OpenID discovery, JWKS) and `graph.microsoft.com`. The package's own
tests contain a `FakeEntra` helper (`tests/Support/FakeEntra.php`) that generates RSA keys, signs id tokens and fakes all three
surfaces; copy it into your test suite. To start a flow in a test, call `StartSignIn::handle($session, 'web')` and sign the id token
with the returned `flow->nonce`, then call `CompleteSignIn::handle($session, 'web', new CallbackParameters($code, $flow->state))`.

```bash
composer test            # Pest
composer analyse         # PHPStan level max over src and tests
composer lint            # Pint
vendor/bin/pest --type-coverage --min=100
vendor/bin/pest --coverage --min=95
```

## License

MIT. See [LICENSE.md](LICENSE.md).
