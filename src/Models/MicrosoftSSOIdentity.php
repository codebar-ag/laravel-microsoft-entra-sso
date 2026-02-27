<?php

namespace CodebarAg\MicrosoftEntraSSO\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

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
            'refresh_token_expires_at' => 'datetime',
            'linked_at' => 'datetime',
        ];
    }

    protected $hidden = [
        'token',
        'refresh_token',
    ];

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

    public function isRefreshTokenExpired(): bool
    {
        if (! $this->refresh_token_expires_at) {
            return false;
        }

        return $this->refresh_token_expires_at->isPast();
    }

    public function scopeByMicrosoftId(Builder $query, string $microsoftId): Builder
    {
        return $query->where('microsoft_id', $microsoftId);
    }

    public function scopeForAuthenticatable(Builder $query, Model $model): Builder
    {
        return $query
            ->where('authenticatable_type', $model->getMorphClass())
            ->where('authenticatable_id', $model->getKey());
    }
}
