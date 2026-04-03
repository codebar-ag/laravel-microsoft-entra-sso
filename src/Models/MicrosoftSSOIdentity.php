<?php

namespace CodebarAg\MicrosoftEntraSSO\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Carbon;

/**
 * @property string|null $token
 * @property string|null $refresh_token
 * @property Carbon|null $token_expires_at
 * @property Carbon|null $linked_at
 */
class MicrosoftSSOIdentity extends Model
{
    protected $table = 'microsoft_sso_identities';

    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'token' => 'encrypted',
            'refresh_token' => 'encrypted',
            'token_expires_at' => 'datetime',
            'linked_at' => 'datetime',
        ];
    }

    protected $hidden = [
        'token',
        'refresh_token',
    ];

    /**
     * @return MorphTo<Model, $this>
     */
    public function authenticatable(): MorphTo
    {
        return $this->morphTo();
    }

    public function isTokenExpired(): bool
    {
        if (! $this->token_expires_at) {
            return true;
        }

        return $this->token_expires_at->isPast();
    }

    /**
     * @param  Builder<MicrosoftSSOIdentity>  $query
     * @return Builder<MicrosoftSSOIdentity>
     */
    public function scopeByMicrosoftId(Builder $query, string $microsoftId): Builder
    {
        return $query->where('microsoft_id', $microsoftId);
    }

    /**
     * @param  Builder<MicrosoftSSOIdentity>  $query
     * @return Builder<MicrosoftSSOIdentity>
     */
    public function scopeForAuthenticatable(Builder $query, Model $model): Builder
    {
        return $query
            ->where('authenticatable_type', $model->getMorphClass())
            ->where('authenticatable_id', $model->getKey());
    }
}
