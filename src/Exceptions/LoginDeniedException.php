<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Exceptions;

final class LoginDeniedException extends SSOException
{
    public const REASON_LOGIN_GATE = 'login_gate';

    public const REASON_EMAIL_LINKING_NEVER = 'email_linking_never';

    public const REASON_EMAIL_LINKING_TENANT_MISMATCH = 'email_linking_tenant_mismatch';

    public const REASON_TENANT_MISMATCH = 'tenant_mismatch';

    final public function __construct(string $message, public readonly string $reason)
    {
        parent::__construct($message);
    }

    public static function byGate(): self
    {
        return new self(__('microsoft-entra-sso.error.login_denied'), self::REASON_LOGIN_GATE);
    }

    public static function emailLinkingDisabled(): self
    {
        return new self(__('microsoft-entra-sso.error.email_linking_disabled'), self::REASON_EMAIL_LINKING_NEVER);
    }

    public static function emailLinkingTenantMismatch(): self
    {
        return new self(__('microsoft-entra-sso.error.email_linking_tenant_mismatch'), self::REASON_EMAIL_LINKING_TENANT_MISMATCH);
    }

    public static function tenantMismatch(): self
    {
        return new self(__('microsoft-entra-sso.error.identity_tenant_mismatch'), self::REASON_TENANT_MISMATCH);
    }
}
