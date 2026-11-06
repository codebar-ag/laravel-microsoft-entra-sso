<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Traits;

use CodebarAg\MicrosoftEntraSSO\Exceptions\SSOException;
use CodebarAg\MicrosoftEntraSSO\Models\MicrosoftSSOIdentity;
use CodebarAg\MicrosoftEntraSSO\Services\EmailLinkingPolicy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

trait HasMicrosoftSSO
{
    /**
     * @return MorphOne<MicrosoftSSOIdentity, $this>
     */
    public function microsoftIdentity(): MorphOne
    {
        return $this->morphOne(MicrosoftSSOIdentity::class, 'authenticatable');
    }

    public static function findByMicrosoftId(string $microsoftId): ?static
    {
        $morphClass = (new (static::class))->getMorphClass();

        $identity = MicrosoftSSOIdentity::byMicrosoftId($microsoftId)
            ->where('authenticatable_type', $morphClass)
            ->first();

        $model = $identity?->authenticatable;

        return $model instanceof static ? $model : null;
    }

    /**
     * Find the user by the Entra tenant id (tid) and object id (oid) of the identity.
     * Identities that were linked before tenant ids were stored are not matched.
     */
    public static function findByMicrosoftIdentity(string $tenantId, string $objectId): ?static
    {
        $morphClass = (new (static::class))->getMorphClass();

        $identity = MicrosoftSSOIdentity::byMicrosoftIdentity($tenantId, $objectId)
            ->where('authenticatable_type', $morphClass)
            ->first();

        $model = $identity?->authenticatable;

        return $model instanceof static ? $model : null;
    }

    /**
     * @param  array<string, mixed>  $microsoftUser
     */
    public static function findOrCreateFromMicrosoft(array $microsoftUser): static
    {
        $mid = Arr::get($microsoftUser, 'id');
        if (! is_string($mid) || $mid === '') {
            throw SSOException::userNotFound('missing-id');
        }

        $existing = static::findByMicrosoftId($mid);

        if ($existing) {
            app(EmailLinkingPolicy::class)->assertIdentityTenant($existing, $microsoftUser);
            $existing->updateMicrosoftTokens($microsoftUser);

            return $existing;
        }

        $email = Arr::get($microsoftUser, 'email');
        if (! is_string($email) || $email === '') {
            throw SSOException::userNotFound('missing-email');
        }

        $byEmail = static::where('email', $email)->first();

        if ($byEmail instanceof static) {
            app(EmailLinkingPolicy::class)->assertCanLink($byEmail, $microsoftUser);
            $byEmail->linkMicrosoftAccount($microsoftUser);

            return $byEmail;
        }

        $name = Arr::get($microsoftUser, 'name');
        if (! is_string($name)) {
            $name = '';
        }

        $user = static::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt(Str::random(32)),
        ]);

        $user->forceFill(['email_verified_at' => Carbon::now()])->save();

        $user->linkMicrosoftAccount($microsoftUser);

        return static::query()->whereKey($user->getKey())->firstOrFail();
    }

    /**
     * @param  array<string, mixed>  $microsoftUser
     */
    public function linkMicrosoftAccount(array $microsoftUser): void
    {
        $mid = Arr::get($microsoftUser, 'id');
        if (! is_string($mid) || $mid === '') {
            throw SSOException::userNotFound('missing-id');
        }

        $expiresAt = null;
        $expiresIn = Arr::get($microsoftUser, 'expires_in');
        if ($expiresIn !== null && is_numeric($expiresIn)) {
            $expiresAt = Carbon::now()->addSeconds((int) $expiresIn);
        }

        $attributes = [
            'microsoft_id' => $mid,
            'token' => Arr::get($microsoftUser, 'token'),
            'refresh_token' => Arr::get($microsoftUser, 'refresh_token'),
            'token_expires_at' => $expiresAt,
            'linked_at' => Carbon::now(),
        ];

        if (MicrosoftSSOIdentity::supportsTenantColumn()) {
            $tenantId = Arr::get($microsoftUser, 'tenant_id');
            $attributes['entra_tenant_id'] = is_string($tenantId) && $tenantId !== '' ? strtolower($tenantId) : null;
        }

        $this->microsoftIdentity()->updateOrCreate([], $attributes);

        $this->unsetRelation('microsoftIdentity');
    }

    /**
     * @param  array<string, mixed>  $microsoftUser
     */
    public function updateMicrosoftTokens(array $microsoftUser): void
    {
        $identity = $this->microsoftIdentity;

        if (! $identity) {
            return;
        }

        $expiresAt = null;
        $expiresIn = Arr::get($microsoftUser, 'expires_in');
        if ($expiresIn !== null && is_numeric($expiresIn)) {
            $expiresAt = Carbon::now()->addSeconds((int) $expiresIn);
        }

        $data = array_filter([
            'token' => Arr::get($microsoftUser, 'token'),
            'refresh_token' => Arr::get($microsoftUser, 'refresh_token'),
            'token_expires_at' => $expiresAt,
        ]);

        $tenantId = Arr::get($microsoftUser, 'tenant_id');
        if (is_string($tenantId) && $tenantId !== ''
            && $identity->entra_tenant_id === null
            && MicrosoftSSOIdentity::supportsTenantColumn()) {
            $data['entra_tenant_id'] = strtolower($tenantId);
        }

        if ($data) {
            $identity->update($data);
        }

        $this->unsetRelation('microsoftIdentity');
    }

    public function hasMicrosoftSSOLinked(): bool
    {
        return $this->microsoftIdentity()->exists();
    }

    public function isMicrosoftTokenExpired(): bool
    {
        $identity = $this->microsoftIdentity;

        if (! $identity) {
            return true;
        }

        return $identity->isTokenExpired();
    }

    public function unlinkMicrosoftAccount(): void
    {
        $this->microsoftIdentity()->delete();
        $this->unsetRelation('microsoftIdentity');
    }
}
