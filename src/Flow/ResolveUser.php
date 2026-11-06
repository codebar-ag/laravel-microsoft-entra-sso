<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Flow;

use Carbon\CarbonImmutable;
use CodebarAg\MicrosoftEntraSSO\Config\EntraConfig;
use CodebarAg\MicrosoftEntraSSO\Config\GuardConfig;
use CodebarAg\MicrosoftEntraSSO\Contracts\SsoUser;
use CodebarAg\MicrosoftEntraSSO\Contracts\UserProvisioner;
use CodebarAg\MicrosoftEntraSSO\Enums\DenialReason;
use CodebarAg\MicrosoftEntraSSO\Enums\EmailLinkingMode;
use CodebarAg\MicrosoftEntraSSO\Events\UserRegistered;
use CodebarAg\MicrosoftEntraSSO\Exceptions\ConfigurationException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\SignInDeniedException;
use CodebarAg\MicrosoftEntraSSO\Identity\SignIn;
use CodebarAg\MicrosoftEntraSSO\Models\MicrosoftIdentity;
use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Database\Eloquent\Model;

/**
 * The one place that turns a Microsoft sign-in into a local user:
 * find by identity, else link by email (per EmailLinkingMode), else register.
 */
final readonly class ResolveUser
{
    public function __construct(
        private EntraConfig $config,
        private Container $container,
        private Dispatcher $events,
    ) {}

    /**
     * @throws SignInDeniedException
     * @throws ConfigurationException
     */
    public function handle(SignIn $signIn, GuardConfig $guard): SsoUser
    {
        return $this->findByIdentity($signIn, $guard)
            ?? $this->linkByEmail($signIn, $guard)
            ?? $this->register($signIn, $guard);
    }

    private function findByIdentity(SignIn $signIn, GuardConfig $guard): ?SsoUser
    {
        $row = MicrosoftIdentity::query()
            ->where('authenticatable_type', (new $guard->model)->getMorphClass())
            ->where('microsoft_id', $signIn->identity->objectId)
            ->first();

        if ($row === null) {
            return null;
        }

        // Rows linked before v14 have no tenant: they are adopted and backfilled on the first sign-in.
        $stored = $row->entra_tenant_id === null ? null : strtolower($row->entra_tenant_id);
        if ($stored !== null && $stored !== $signIn->identity->tenantId) {
            throw new SignInDeniedException(DenialReason::TenantMismatch);
        }

        $user = $row->authenticatable;
        if (! $user instanceof $guard->model) {
            // The user was deleted without its identity: drop the orphan so the person can register again.
            $row->delete();

            return null;
        }

        $this->store($user, $signIn);

        return $user;
    }

    private function linkByEmail(SignIn $signIn, GuardConfig $guard): ?SsoUser
    {
        $existing = $guard->model::query()->where('email', $signIn->profile->email)->first();

        if ($existing === null) {
            return null;
        }

        match ($this->config->emailLinking) {
            EmailLinkingMode::Never => throw new SignInDeniedException(DenialReason::EmailLinkingDisabled),
            EmailLinkingMode::SameTenantOnly => $this->assertSameTenant($existing, $signIn),
            EmailLinkingMode::Always => null,
        };

        $this->store($existing, $signIn);

        return $existing;
    }

    private function register(SignIn $signIn, GuardConfig $guard): SsoUser
    {
        if (! $this->config->autoRegister || $this->config->userProvisioner === null) {
            throw new SignInDeniedException(DenialReason::RegistrationDisabled);
        }

        $provisioner = $this->container->make($this->config->userProvisioner);
        if (! $provisioner instanceof UserProvisioner) {
            throw ConfigurationException::invalid('user_provisioner', 'could not be resolved to a UserProvisioner.');
        }

        $user = $provisioner->create($signIn);
        if (! $user instanceof $guard->model) {
            throw ConfigurationException::invalid('user_provisioner', "must create a [{$guard->model}] for guard [{$guard->name}].");
        }

        $this->store($user, $signIn);
        $this->events->dispatch(new UserRegistered($user, $signIn, $guard->name));

        return $user;
    }

    private function assertSameTenant(SsoUser&Model $existing, SignIn $signIn): void
    {
        $stored = $existing->microsoftIdentity()->first()?->entra_tenant_id;

        if ($stored === null || strtolower($stored) !== $signIn->identity->tenantId) {
            throw new SignInDeniedException(DenialReason::EmailLinkingTenantMismatch);
        }
    }

    /**
     * Creates or updates the identity row: oid, tid and the (encrypted) tokens.
     */
    private function store(SsoUser&Model $user, SignIn $signIn): void
    {
        $tokens = $signIn->tokens;
        $row = $user->microsoftIdentity()->firstOrNew([]);
        $relinked = $row->microsoft_id !== $signIn->identity->objectId;

        $row->forceFill([
            'microsoft_id' => $signIn->identity->objectId,
            'entra_tenant_id' => $signIn->identity->tenantId,
            'token' => $tokens->accessToken,
            'refresh_token' => $tokens->refreshToken ?? ($relinked ? null : $row->refresh_token),
            'token_expires_at' => $tokens->expiresAt,
            'linked_at' => $relinked || $row->linked_at === null ? CarbonImmutable::now() : $row->linked_at,
        ])->save();

        $user->unsetRelation('microsoftIdentity');
    }
}
