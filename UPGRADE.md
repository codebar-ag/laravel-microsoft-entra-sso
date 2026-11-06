# Upgrade guide: v13 to v14

v14 is a restructuring without backwards compatibility: no shims, no deprecated aliases. Requirements: **PHP 8.5, Laravel 13**.
Work through the sections in order. Search your code base for `MicrosoftEntraSSO\`, `HasMicrosoftSSO`, `SSOAuthenticatable`,
`SSOUser`, `SSOException` and `microsoft-entra-sso.` to find every place.

## 1. Database

The table `microsoft_sso_identities` is unchanged. Run `php artisan migrate`: the existing add-column migration adds `entra_tenant_id`
(it skips itself when the column exists, new installs get it from the create migration). Rows linked by v13 without a tenant are adopted
on the first sign-in and the tenant is stored then. Personal Microsoft accounts linked by v13 stored the Graph id as `microsoft_id`,
which is not the `oid` of the id token; those people are matched by email or registered again according to `email_linking`.

## 2. Configuration

```php
// v13 defaults                                // v14 defaults
'scopes' => [..., 'GroupMember.Read.All'],      'scopes' => ['openid', 'profile', 'email', 'User.Read'],
'auto_register' => true,                        'auto_register' => false,   // + 'user_provisioner' => YourProvisioner::class
'email_linking' => 'always',                    'email_linking' => 'never', // 'always' only with a single directory GUID
```

| v13 | v14 |
| --- | --- |
| `redirect_uri` | removed. The redirect URI is the callback route URL (`{prefix}/{guard}/callback`); register that in Entra. Restrict hosts with `allowed_redirect_hosts` |
| `stateless` | removed (state, PKCE verifier and nonce always live in the session) |
| `id_token.validate`, `id_token.require` | removed. The id token is always required and validated, it carries the identity |
| `group_membership_cache_ttl`, `refresh_lock_seconds`, `refresh_lock_wait_seconds` (undocumented root keys) | `graph.group_membership_cache_ttl`, `graph.refresh_lock_seconds`, `graph.refresh_lock_wait_seconds` |
| `tenant_id` any string | a directory GUID, `organizations`, `common` or `consumers` |
| `email_linking = always` with any tenant | `ConfigurationException` unless `tenant_id` is a single directory GUID |
| hard-wired flash key and `login` route | `error_flash_key` (default `microsoft_entra_sso_error`), `login_route` (default `login`) |
| new | `user_provisioner` (required with `auto_register`) |

Invalid configuration now throws a `ConfigurationException` naming the key on first use instead of falling back to a default. The
middleware `EnsureSSOEnabled` (503 when unconfigured) is gone.

## 3. The user model

```php
// v13
use CodebarAg\MicrosoftEntraSSO\Contracts\SSOAuthenticatable;
use CodebarAg\MicrosoftEntraSSO\Traits\HasMicrosoftSSO;

class User extends Authenticatable implements SSOAuthenticatable
{
    use HasMicrosoftSSO;
}

// v14
use CodebarAg\MicrosoftEntraSSO\Concerns\HasMicrosoftIdentity;
use CodebarAg\MicrosoftEntraSSO\Contracts\SsoUser;

class User extends Authenticatable implements SsoUser
{
    use HasMicrosoftIdentity;
}
```

| v13 trait method | v14 |
| --- | --- |
| `microsoftIdentity()` | same |
| `hasMicrosoftSSOLinked()` | `isMicrosoftLinked()` |
| `isMicrosoftTokenExpired()` | same |
| `unlinkMicrosoftAccount()` | `unlinkMicrosoft()` |
| `findByMicrosoftId()`, `findByMicrosoftIdentity()` | removed (the package resolves users in `ResolveUser`) |
| `findOrCreateFromMicrosoft()`, `linkMicrosoftAccount()`, `updateMicrosoftTokens()` | removed, see the provisioner below |

The model `MicrosoftSSOIdentity` is now `CodebarAg\MicrosoftEntraSSO\Models\MicrosoftIdentity` (same table). `supportsTenantColumn()` is gone.

## 4. Creating users: `UserProvisioner`

Overriding `findOrCreateFromMicrosoft()` is replaced by one small contract. Finding by identity and linking by email are done by the
package; the provisioner only creates the user.

```php
// v13
public static function findOrCreateFromMicrosoft(array $microsoftUser): static
{
    // find by id, find by email (+ EmailLinkingPolicy), create ...
}

// v14
final class MicrosoftUserProvisioner implements UserProvisioner
{
    public function create(SignIn $signIn): SsoUser
    {
        return User::create(['name' => $signIn->profile->name, 'email' => $signIn->profile->email, /* ... */]);
    }
}
// config: 'auto_register' => true, 'user_provisioner' => MicrosoftUserProvisioner::class
```

Logic you had in the override that ran on every sign-in (syncing attributes, assigning roles) belongs in a `SignedIn` listener.

## 5. Login gate

```php
// v13
public function allows(SSOUser $user, string $guard): bool { return in_array($user->tenantId, [...], true); }

// v14
public function allows(SignIn $signIn, GuardConfig $guard): bool { return in_array($signIn->identity->tenantId, [...], true); }
```

| v13 `SSOUser` | v14 |
| --- | --- |
| `$user->id` (Graph id) | `$signIn->profile->graphId` |
| `$user->tenantId`, `$user->objectId` | `$signIn->identity->tenantId`, `$signIn->identity->objectId` (`EntraIdentity`, GUID validated, lowercase) |
| `$user->name`, `email`, `jobTitle`, `department` | `$signIn->profile->name`, `email`, `jobTitle`, `department` |
| `$user->token`, `refreshToken`, `expiresIn`, `approvedScopes` | `$signIn->tokens->accessToken`, `refreshToken`, `expiresAt`, `scopes` |
| `$user->raw`, `toArray()` | removed; no arrays cross the public API |
| `$guard` (string) | `$guard->name` (`GuardConfig` also has `model` and `redirectAfterLogin`) |

## 6. Events

| v13 | v14 |
| --- | --- |
| `SSOUserAuthenticated($user, $guard, array $microsoftUser)` | `SignedIn($user, SignIn $signIn, $guard)`, dispatched for **every** successful sign-in (also new users) |
| `SSOUserRegistered(...)` | `UserRegistered($user, SignIn $signIn, $guard)` (additionally to `SignedIn`) |
| `SSOLoginDenied(SSOUser, $guard, string $reason)` | `SignInDenied(EntraIdentity, Profile, $guard, DenialReason $reason)`, never carries tokens |

`DenialReason` values: `login_gate`, `email_linking_never`, `email_linking_tenant_mismatch`, `tenant_mismatch`, `registration_disabled`.

## 7. Exceptions

`SSOException`, `LoginDeniedException` and `TokenExchangeException` are replaced by focused exceptions: `ConfigurationException`,
`InvalidStateException`, `TokenException`, `InvalidIdTokenException`, `SignInDeniedException` (`->reason` is a `DenialReason`),
`InvalidRedirectUriException`, `GraphException`. All except `ConfigurationException` implement `SignInFailure` (`translationKey()`).
The callback controller no longer catches `\Throwable`; bugs surface as bugs.

## 8. Entry points

| v13 | v14 |
| --- | --- |
| `MicrosoftEntraSSO::driver('microsoft')`, `Factory`, `Provider`, `MicrosoftEntraSSOManager` | removed. Inject `StartSignIn` / `CompleteSignIn`, or just use the routes |
| `MicrosoftOAuthService` | `TokenClient`, `GraphClient`, `JwksClient`, `IdTokenValidator` (all stateless) |
| `MicrosoftGraphService::getUserProfile/getUserGroups/getUserPhotoDataUri/isUserInGroup` | `GraphProfileService::profile/groups/photo/isMemberOf`, also via the `MicrosoftEntraSSO` facade; typed results (`GraphProfile`, `Group`) instead of arrays |
| `HandlesMicrosoftSSO` controller trait | removed. Do not extend the controllers (they are `final`); use the config and the events |
| `EmailLinkingPolicy` | `EmailLinkingMode` enum, applied in `ResolveUser` |
| `MicrosoftEntraSSOServiceProvider` | `EntraSsoServiceProvider` (auto-discovered) |
| Group cache key without model scope | `isMemberOf` caches per model class, user and group |

Every class is `final` and has `declare(strict_types=1)`; the extension points are the contracts `LoginGate`, `UserProvisioner`, `SsoUser`.

## 9. UI

The Blade components (`x-microsoft-entra-sso::sso-button`) and the error view are removed, and the `microsoft-entra-sso-views` publish
tag with them. Render your own button (a link to `route('microsoft-entra-sso.redirect', ['guard' => 'web'])`) and show
`session(config('microsoft-entra-sso.error_flash_key'))`. The translation keys `button.*` and `error.page_title|auth_failed*` are gone;
the remaining `error.*` keys are the sign-in failure messages (`SignInFailure::translationKey()`).

## 10. Behaviour changes worth testing

- `email_linking` defaults to `never`; a person whose email matches an existing user is refused instead of linked.
- Registration is off by default and needs a `UserProvisioner`.
- The id token must contain `oid` (a GUID) and the nonce; the Graph id must equal the `oid` (except personal accounts).
- An unknown guard in the URL is a 404.
- `SignedIn` is also dispatched for newly registered users.
