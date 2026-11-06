<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Exceptions;

use Throwable;

/**
 * A failure of the sign-in that is shown to the person. getMessage() is for logs;
 * translationKey() names the translated message for the login page.
 */
interface SignInFailure extends Throwable
{
    public function translationKey(): string;
}
