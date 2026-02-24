<?php

namespace CodebarAg\MicrosoftEntraSSO\Exceptions;

class InvalidStateException extends SSOException
{
    public static function make(): self
    {
        return new self('The OAuth state parameter does not match the expected value. This may indicate a CSRF attack.');
    }
}
