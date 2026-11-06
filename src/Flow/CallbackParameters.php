<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Flow;

use SensitiveParameter;

/**
 * The query parameters Microsoft sends back to the callback.
 */
final readonly class CallbackParameters
{
    public function __construct(
        #[SensitiveParameter] public ?string $code = null,
        public ?string $state = null,
        public ?string $error = null,
        public ?string $errorDescription = null,
    ) {}
}
