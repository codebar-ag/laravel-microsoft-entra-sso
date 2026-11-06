<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Clients;

use CodebarAg\MicrosoftEntraSSO\Config\EntraConfig;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\Factory;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\RequestException;
use Throwable;

/**
 * Builds the outgoing requests of all clients: timeouts and one retry policy.
 *
 * Only transient failures (connection errors, 5xx) are retried. Authorization codes and
 * refresh tokens are single use, so client errors must never be replayed; failed responses
 * are returned so the callers map them to their own exception.
 */
final readonly class HttpClient
{
    public function __construct(
        private Factory $http,
        private EntraConfig $config,
    ) {}

    public function request(): PendingRequest
    {
        $options = $this->config->http;

        return $this->http
            ->timeout($options->timeout)
            ->connectTimeout($options->connectTimeout)
            ->retry(
                $options->retryTimes,
                $options->retrySleepMs,
                static fn (Throwable $e): bool => $e instanceof ConnectionException
                    || ($e instanceof RequestException && $e->response->serverError()),
                throw: false,
            )
            ->acceptJson();
    }
}
