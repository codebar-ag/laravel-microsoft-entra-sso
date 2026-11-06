<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Carbon;

/**
 * The link between a local user and a Microsoft identity, plus the encrypted Graph tokens.
 *
 * @property string $microsoft_id the object id (oid)
 * @property string|null $entra_tenant_id the directory id (tid), null for rows linked before v14
 * @property string|null $token
 * @property string|null $refresh_token
 * @property Carbon|null $token_expires_at
 * @property Carbon|null $linked_at
 */
final class MicrosoftIdentity extends Model
{
    protected $table = 'microsoft_sso_identities';

    protected $guarded = [];

    protected $hidden = ['token', 'refresh_token'];

    protected function casts(): array
    {
        return [
            'token' => 'encrypted',
            'refresh_token' => 'encrypted',
            'token_expires_at' => 'datetime',
            'linked_at' => 'datetime',
        ];
    }

    /**
     * @return MorphTo<Model, $this>
     */
    public function authenticatable(): MorphTo
    {
        return $this->morphTo();
    }

    public function isTokenExpired(): bool
    {
        return $this->token_expires_at === null || $this->token_expires_at->isPast();
    }
}
