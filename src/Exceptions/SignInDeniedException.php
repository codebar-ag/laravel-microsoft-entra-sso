<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Exceptions;

use CodebarAg\MicrosoftEntraSSO\Enums\DenialReason;
use RuntimeException;

/**
 * The sign-in is valid but not allowed (login gate, email linking, tenant, registration).
 */
final class SignInDeniedException extends RuntimeException implements SignInFailure
{
    public function __construct(public readonly DenialReason $reason)
    {
        parent::__construct("Microsoft sign-in denied: {$reason->value}.");
    }

    public function translationKey(): string
    {
        return $this->reason->translationKey();
    }
}
