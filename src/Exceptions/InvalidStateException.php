<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Exceptions;

final class InvalidStateException extends SSOException
{
    public static function make(): self
    {
        return new self(__('microsoft-entra-sso.error.oauth_state_invalid'));
    }
}
