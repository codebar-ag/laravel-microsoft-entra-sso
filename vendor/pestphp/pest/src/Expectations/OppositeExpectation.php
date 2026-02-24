<?php

declare(strict_types=1);

namespace Pest\Expectations;

use Attribute;
use Pest\Arch\Contracts\ArchExpectation;
use Pest\Arch\Expectations\Targeted;
use Pest\Arch\Expectations\ToBeUsedIn;
use Pest\Arch\Expectations\ToBeUsedInNothing;
use Pest\Arch\Expectations\ToUse;
use Pest\Arch\GroupArchExpectation;
use Pest\Arch\PendingArchExpectation;
use Pest\Arch\SingleArchExpectation;
use Pest\Arch\Support\FileLineFinder;
use Pest\Exceptions\InvalidExpectation;
use Pest\Exceptions\MissingDependency;
use Pest\Expectation;
use Pest\Support\Arr;
use Pest\Support\Exporter;
use Pest\Support\Reflection;
use PHPUnit\Architecture\Elements\ObjectDescription;
use PHPUnit\Framework\AssertionFailedError;
use PHPUnit\Framework\ExpectationFailedException;
use ReflectionMethod;
use ReflectionProperty;
use Spoofchecker;
use stdClass;

/**
 * @internal
 *
 * @template TValue
 *
 * @mixin Expectation<TValue>
 */
final readonly class OppositeExpectation
{
    /**
     * Creates a new opposite expectation.
     *
     * @param  Expectation<TValue>  $original
     */
    public function __construct(private Expectation $original) {}

    /**
     * Asserts that the value array not has the provided $keys.
     *
     * @param  array<int, int|string|array<int-string, mixed>>  $keys
     * @return Expectation<TValue>
     */
    public function toHaveKeys(array $keys): Expectation
    {
        foreach ($keys as $k => $key) {
            try {
                if (is_array($key)) {
                    $this->toHaveKeys(array_keys(Arr::dot($key, $k.'.')));
                } else {
                    $this->original->toHaveKey($key);
                }
            } catch (ExpectationFailedException) {
                continue;
            }

            $this->throwExpectationFailedException('toHaveKey', [$key]);
        }

        return $this->original;
    }

    /**
     * Asserts that the given expectation target does not use any of the given dependencies.
     *
     * @param  array<int, string>|string  $targets
     */
    public function toUse(array|string $targets): ArchExpectation
    {
        /** @var Expectation<array<int, string>|string> $original */
        $original = $this->original;

        return GroupArchExpectation::fromExpectations($original, array_map(fn (string $target): SingleArchExpectation => ToUse::make($original, $target)->opposite(
            fn () => $this->throwExpectationFailedException('toUse', $target),
        ), is_string($targets) ? [$targets] : $targets));
    }

    /**
     * Asserts that the given expectation target does not have the given permissions
     */
    public function toHaveFileSystemPermissions(string $permissions): ArchExpectation
    {
        /** @var Expectation<array<int, string>|string> $original */
        $original = $this->original;

        return Targeted::make(
            $original,
            fn (ObjectDescription $object): bool => substr(sprintf('%o', fileperms($object->path)), -4) !== $permissions,
            sprintf('permissions not to be [%s]', $permissions),
            FileLineFinder::where(fn (string $line): bool => str_contains($line, '
