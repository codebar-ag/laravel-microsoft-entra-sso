<?php

namespace CodebarAg\MicrosoftEntraSSO\Traits;

use CodebarAg\MicrosoftEntraSSO\Models\MicrosoftSSOIdentity;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

trait HasMicrosoftSSO
{
    public function microsoftIdentity(): MorphOne
    {
        return $this->morphOne(MicrosoftSSOIdentity::class, 'authenticatable');
    }

    public static function findByMicrosoftId(string $microsoftId): ?static
    {
        $identity = MicrosoftSSOIdentity::byMicrosoftId($microsoftId)
            ->where('authenticatable_type', (new static)->getMorphClass())
            ->first();

        return $identity?->authenticatable;
    }

    public static function findOrCreateFromMicrosoft(array $microsoftUser): static
    {
        $existing = static::findByMicrosoftId($microsoftUser['id']);

        if ($existing) {
            $existing->updateMicrosoftTokens($microsoftUser);

            return $existing;
        }

        $byEmail = static::where('email', $microsoftUser['email'])->first();

        if ($byEmail) {
            $byEmail->linkMicrosoftAccount($microsoftUser);

            return $byEmail;
        }

        $user = static::create([
            'name' => $microsoftUser['name'],
            'email' => $microsoftUser['email'],
            'password' => bcrypt(Str::random(32)),
        ]);

        $user->forceFill(['email_verified_at' => Carbon::now()])->save();

        $user->linkMicrosoftAccount($microsoftUser);

        return $user->refresh();
    }

    public function linkMicrosoftAccount(array $microsoftUser): void
    {
        $refreshToken = $microsoftUser['refresh_token'] ?? null;

        $this->microsoftIdentity()->updateOrCreate([], [
            'microsoft_id' => $microsoftUser['id'],
            'token' => $microsoftUser['token'] ?? null,
            'refresh_token' => $refreshToken,
            'token_expires_at' => isset($microsoftUser['expires_in'])
                ? Carbon::now()->addSeconds($microsoftUser['expires_in'])
                : null,
            'refresh_token_expires_at' => $refreshToken !== null
                ? self::computeRefreshTokenExpiresAt($microsoftUser)
                : null,
            'linked_at' => Carbon::now(),
        ]);

        $this->unsetRelation('microsoftIdentity');
    }

    public function updateMicrosoftTokens(array $microsoftUser): void
    {
        $identity = $this->microsoftIdentity;

        if (! $identity) {
            return;
        }

        $refreshToken = $microsoftUser['refresh_token'] ?? null;

        $data = array_filter([
            'token' => $microsoftUser['token'] ?? null,
            'refresh_token' => $refreshToken,
            'token_expires_at' => isset($microsoftUser['expires_in'])
                ? Carbon::now()->addSeconds($microsoftUser['expires_in'])
                : null,
            'refresh_token_expires_at' => $refreshToken !== null
                ? self::computeRefreshTokenExpiresAt($microsoftUser)
                : null,
        ]);

        if ($data) {
            $identity->update($data);
        }

        $this->unsetRelation('microsoftIdentity');
    }

    /**
     * @param  array<string, mixed>  $microsoftUser
     */
    protected static function computeRefreshTokenExpiresAt(array $microsoftUser): Carbon
    {
        $expiresIn = $microsoftUser['refresh_token_expires_in'] ?? null;

        if (is_int($expiresIn) && $expiresIn > 0) {
            return Carbon::now()->addSeconds($expiresIn);
        }

        $defaultDays = (int) config('microsoft-entra-sso.refresh_token_expires_default_days', 30);

        return Carbon::now()->addDays(max(1, $defaultDays));
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
