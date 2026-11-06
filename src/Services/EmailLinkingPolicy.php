<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Services;

use CodebarAg\MicrosoftEntraSSO\Contracts\SSOAuthenticatable;
use CodebarAg\MicrosoftEntraSSO\Exceptions\LoginDeniedException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\SSOException;
use Illuminate\Support\Arr;

/**
 * Decides whether an existing local user may be linked to a Microsoft sign-in
 * purely because the email addresses match.
 *
 * Modes (`microsoft-entra-sso.email_linking`):
 *  - always:           link by email (default, historic behaviour).
 *  - same_tenant_only: link only when the existing user already has a Microsoft
 *                      identity whose stored tenant id equals the signing-in
 *                      tenant id. Users without a Microsoft identity, identities
 *                      without a stored tenant, and sign-ins without a validated
 *                      tenant id are never linked.
 *  - never:            never link by email.
 *
 * Apps that override findOrCreateFromMicrosoft() should call assertCanLink()
 * before linking an existing user found by email.
 */
final class EmailLinkingPolicy
{
    public const ALWAYS = 'always';

    public const SAME_TENANT_ONLY = 'same_tenant_only';

    public const NEVER = 'never';

    public function mode(): string
    {
        $mode = config('microsoft-entra-sso.email_linking', self::ALWAYS);
        $mode = is_string($mode) ? $mode : '';

        if (! in_array($mode, [self::ALWAYS, self::SAME_TENANT_ONLY, self::NEVER], true)) {
            throw SSOException::invalidEmailLinking($mode);
        }

        return $mode;
    }

    /**
     * @param  array<string, mixed>  $microsoftUser  as passed to findOrCreateFromMicrosoft()
     */
    public function canLink(SSOAuthenticatable $existing, array $microsoftUser): bool
    {
        try {
            $this->assertCanLink($existing, $microsoftUser);
        } catch (LoginDeniedException) {
            return false;
        }

        return true;
    }

    /**
     * @param  array<string, mixed>  $microsoftUser  as passed to findOrCreateFromMicrosoft()
     *
     * @throws LoginDeniedException
     */
    public function assertCanLink(SSOAuthenticatable $existing, array $microsoftUser): void
    {
        switch ($this->mode()) {
            case self::NEVER:
                throw LoginDeniedException::emailLinkingDisabled();
            case self::SAME_TENANT_ONLY:
                $incoming = self::tenant(Arr::get($microsoftUser, 'tenant_id'));
                $stored = self::tenant($existing->microsoftIdentity()->first()?->entra_tenant_id);

                if ($incoming === null || $stored === null || $incoming !== $stored) {
                    throw LoginDeniedException::emailLinkingTenantMismatch();
                }
        }
    }

    /**
     * An identity found by Microsoft id must not change tenant.
     *
     * @param  array<string, mixed>  $microsoftUser
     *
     * @throws LoginDeniedException
     */
    public function assertIdentityTenant(SSOAuthenticatable $existing, array $microsoftUser): void
    {
        $incoming = self::tenant(Arr::get($microsoftUser, 'tenant_id'));
        $stored = self::tenant($existing->microsoftIdentity()->first()?->entra_tenant_id);

        if ($incoming !== null && $stored !== null && $incoming !== $stored) {
            throw LoginDeniedException::tenantMismatch();
        }
    }

    private static function tenant(mixed $value): ?string
    {
        return is_string($value) && $value !== '' ? strtolower($value) : null;
    }
}
