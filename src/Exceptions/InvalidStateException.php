<?php

namespace CodebarAg\MicrosoftEntraSSO\Exceptions;

class InvalidStateException extends SSOException
{
    public static function make(): self
    {
        return new self(__('microsoft-entra-sso.error.oauth_state_invalid'));
    }
}
