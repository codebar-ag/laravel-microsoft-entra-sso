<?php

namespace CodebarAg\MicrosoftEntraSSO\Exceptions;

class InvalidStateException extends SSOException
{
    public static function make(): static
    {
        return new static('The OAuth state parameter does not match the expected value. This may indicate a CSRF attack.');
    }
}
