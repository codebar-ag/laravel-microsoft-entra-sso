<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Flow;

/**
 * The redirect to Microsoft and the state that was stored for it.
 */
final readonly class AuthorizationRequest
{
    public function __construct(
        public string $url,
        public FlowState $flow,
    ) {}
}
