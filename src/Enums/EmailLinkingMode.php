<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Enums;

/**
 * How an existing local user is matched to a Microsoft sign-in by email address.
 */
enum EmailLinkingMode: string
{
    /** Link by email. Only allowed for a single directory, see the nOAuth note in the README. */
    case Always = 'always';

    /** Link only when the user's stored Microsoft identity belongs to the signing-in tenant. */
    case SameTenantOnly = 'same_tenant_only';

    /** Never link by email. */
    case Never = 'never';
}
