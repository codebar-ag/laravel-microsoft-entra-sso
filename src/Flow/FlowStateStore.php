<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Flow;

use Carbon\CarbonImmutable;
use CodebarAg\MicrosoftEntraSSO\Config\EntraConfig;
use CodebarAg\MicrosoftEntraSSO\Exceptions\InvalidStateException;
use Illuminate\Contracts\Session\Session;

/**
 * Keeps the FlowState under one session key. pull() consumes it, whatever the outcome.
 */
final readonly class FlowStateStore
{
    public const string KEY = 'microsoft_entra_sso_flow';

    public function __construct(private EntraConfig $config) {}

    public function put(Session $session, FlowState $state): void
    {
        $session->put(self::KEY, $state->toArray());
    }

    /**
     * @throws InvalidStateException
     */
    public function pull(Session $session, string $guard, ?string $returnedState): FlowState
    {
        $flow = FlowState::fromSession($session->pull(self::KEY)) ?? throw InvalidStateException::missing();

        if ($flow->guard !== $guard) {
            throw InvalidStateException::guardMismatch($flow->guard, $guard);
        }

        if (CarbonImmutable::now()->getTimestamp() - $flow->issuedAt > $this->config->stateTtlSeconds) {
            throw InvalidStateException::expired();
        }

        if ($returnedState === null || ! hash_equals($flow->state, $returnedState)) {
            throw InvalidStateException::mismatch();
        }

        return $flow;
    }
}
