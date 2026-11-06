<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Enums;

enum DenialReason: string
{
    case LoginGate = 'login_gate';
    case EmailLinkingDisabled = 'email_linking_never';
    case EmailLinkingTenantMismatch = 'email_linking_tenant_mismatch';
    case TenantMismatch = 'tenant_mismatch';
    case RegistrationDisabled = 'registration_disabled';

    public function translationKey(): string
    {
        return match ($this) {
            self::LoginGate => 'microsoft-entra-sso.error.login_denied',
            self::EmailLinkingDisabled => 'microsoft-entra-sso.error.email_linking_disabled',
            self::EmailLinkingTenantMismatch => 'microsoft-entra-sso.error.email_linking_tenant_mismatch',
            self::TenantMismatch => 'microsoft-entra-sso.error.identity_tenant_mismatch',
            self::RegistrationDisabled => 'microsoft-entra-sso.error.registration_disabled',
        };
    }
}
