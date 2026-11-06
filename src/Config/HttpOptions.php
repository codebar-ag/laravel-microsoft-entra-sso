<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Config;

final readonly class HttpOptions
{
    public function __construct(
        public int $timeout,
        public int $connectTimeout,
        public int $retryTimes,
        public int $retrySleepMs,
    ) {}
}
