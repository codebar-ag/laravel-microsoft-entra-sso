<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Support;

use Illuminate\Contracts\Cache\Store;

/**
 * A cache store without atomic locks.
 */
final class NoLockStore implements Store
{
    public function get($key): mixed
    {
        return null;
    }

    /**
     * @param  array<int, string>  $keys
     * @return array<string, mixed>
     */
    public function many(array $keys): array
    {
        return array_fill_keys($keys, null);
    }

    public function put($key, $value, $seconds): bool
    {
        return true;
    }

    /**
     * @param  array<string, mixed>  $values
     */
    public function putMany(array $values, $seconds): bool
    {
        return true;
    }

    public function increment($key, $value = 1): int|false
    {
        return false;
    }

    public function decrement($key, $value = 1): int|false
    {
        return false;
    }

    public function touch($key, $seconds): bool
    {
        return true;
    }

    public function forever($key, $value): bool
    {
        return true;
    }

    public function forget($key): bool
    {
        return true;
    }

    public function flush(): bool
    {
        return true;
    }

    public function getPrefix(): string
    {
        return '';
    }
}
