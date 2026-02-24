<?php

declare(strict_types=1);

namespace Pest;

use Attribute;
use BadMethodCallException;
use Closure;
use InvalidArgumentException;
use OutOfRangeException;
use Pest\Arch\Contracts\ArchExpectation;
use Pest\Arch\Expectations\Targeted;
use Pest\Arch\Expectations\ToBeUsedIn;
use Pest\Arch\Expectations\ToBeUsedInNothing;
use Pest\Arch\Expectations\ToOnlyBeUsedIn;
use Pest\Arch\Expectations\ToOnlyUse;
use Pest\Arch\Expectations\ToUse;
use Pest\Arch\Expectations\ToUseNothing;
use Pest\Arch\PendingArchExpectation;
use Pest\Arch\Support\FileLineFinder;
use Pest\Concerns\Extendable;
use Pest\Concerns\Pipeable;
use Pest\Concerns\Retrievable;
use Pest\Exceptions\ExpectationNotFound;
use Pest\Exceptions\InvalidExpectation;
use Pest\Exceptions\InvalidExpectationValue;
use Pest\Expectations\EachExpectation;
use Pest\Expectations\HigherOrderExpectation;
use Pest\Expectations\OppositeExpectation;
use Pest\Matchers\Any;
use Pest\Support\ExpectationPipeline;
use Pest\Support\Reflection;
use PHPUnit\Architecture\Elements\ObjectDescription;
use PHPUnit\Framework\ExpectationFailedException;
use ReflectionEnum;
use ReflectionMethod;
use ReflectionProperty;

/**
 * @template TValue
 *
 * @property OppositeExpectation $not Creates the opposite expectation.
 * @property EachExpectation $each Creates an expectation on each element on the traversable value.
 * @property PendingArchExpectation $classes
 * @property PendingArchExpectation $traits
 * @property PendingArchExpectation $interfaces
 * @property PendingArchExpectation $enums
 *
 * @mixin Mixins\Expectation<TValue>
 * @mixin PendingArchExpectation
 */
final class Expectation
{
    /** @use Extendable<self<TValue>> */
    use Extendable;

    use Pipeable;
    use Retrievable;

    /**
     * Creates a new expectation.
     *
     * @param  TValue  $value
     */
    public function __construct(
        public mixed $value
    ) {
        // ..
    }

    /**
     * Creates a new expectation.
     *
     * @template TAndValue
     *
     * @param  TAndValue  $value
     * @return self<TAndValue>
     */
    public function and(mixed $value): Expectation
    {
        return $value instanceof self ? $value : new self($value);
    }

    /**
     * Creates a new expectation with the decoded JSON value.
     *
     * @return self<array<int|string, mixed>|bool>
     */
    public function json(): Expectation
    {
        if (! is_string($this->value)) {
            InvalidExpectationValue::expected('string');
        }

        $this->toBeJson();

        /** @var array<int|string, mixed>|bool $value */
        $value = json_decode($this->value, true, 512, JSON_THROW_ON_ERROR);

        return $this->and($value);
    }

    /**
     * Dump the expectation value.
     *
     * @return self<TValue>
     */
    public function dump(mixed ...$arguments): self
    {
        if (function_exists('dump')) {
            dump($this->value, ...$arguments);
        } else {
            var_dump($this->value);
        }

        return $this;
    }

    /**
     * Dump the expectation value and end the script.
     *
     * @return never
     */
    public function dd(mixed ...$arguments): void
    {
        if (function_exists('dd')) {
            dd($this->value, ...$arguments);
        }

        var_dump($this->value);

        exit(1);
    }

    /**
     * Dump the expectation value when the result of the condition is truthy.
     *
     * @param  (\Closure(TValue): bool)|bool  $condition
     * @return self<TValue>
     */
    public function ddWhen(Closure|bool $condition, mixed ...$arguments): Expectation
    {
        $condition = $condition instanceof Closure ? $condition($this->value) : $condition;

        if (! $condition) {
            return $this;
        }

        $this->dd(...$arguments);
    }

    /**
     * Dump the expectation value when the result of the condition is falsy.
     *
     * @param  (\Closure(TValue): bool)|bool  $condition
     * @return self<TValue>
     */
    public function ddUnless(Closure|bool $condition, mixed ...$arguments): Expectation
    {
        $condition = $condition instanceof Closure ? $condition($this->value) : $condition;

        if ($condition) {
            return $this;
        }

        $this->dd(...$arguments);
    }

    /**
     * Send the expectation value to Ray along with all given arguments.
     *
     * @return self<TValue>
     */
    public function ray(mixed ...$arguments): self
    {
        if (function_exists('ray')) {
            ray($this->value, ...$arguments);
        }

        return $this;
    }

    /**
     * Creates the opposite expectation for the value.
     *
     * @return OppositeExpectation<TValue>
     */
    public function not(): OppositeExpectation
    {
        return new OppositeExpectation($this);
    }

    /**
     * Creates an expectation on each item of the iterable "value".
     *
     * @return EachExpectation<TValue>
     */
    public function each(?callable $callback = null): EachExpectation
    {
        if (! is_iterable($this->value)) {
            throw new BadMethodCallException('Expectation value is not iterable.');
        }

        if (is_callable($callback)) {
            foreach ($this->value as $key => $item) {
                $callback(new self($item), $key);
            }
        }

        return new EachExpectation($this);
    }

    /**
     * Allows you to specify a sequential set of expectations for each item in a iterable "value".
     *
     * @template TSequenceValue
     *
     * @param  (callable(self<TValue>, self<string|int>): void)|TSequenceValue  ...$callbacks
     * @return self<TValue>
     */
    public function sequence(mixed ...$callbacks): self
    {
        if (! is_iterable($this->value)) {
            throw new BadMethodCallException('Expectation value is not iterable.');
        }

        if ($callbacks === []) {
            throw new InvalidArgumentException('No sequence expectations defined.');
        }

        $index = $valuesCount = 0;

        foreach ($this->value as $key => $value) {
            $valuesCount++;

            if ($callbacks[$index] instanceof Closure) {
                $callbacks[$index](new self($value), new self($key));
            } else {
                (new self($value))->toEqual($callbacks[$index]);
            }

            $index = isset($callbacks[$index + 1]) ? $index + 1 : 0;
        }

        if ($valuesCount < count($callbacks)) {
            throw new OutOfRangeException('Sequence expectations are more than the iterable items.');
        }

        return $this;
    }

    /**
     * If the subject matches one of the given "expressions", the expression callback will run.
     *
     * @template TMatchSubject of array-key
     *
     * @param  (callable(): TMatchSubject)|TMatchSubject  $subject
     * @param  array<TMatchSubject, (callable(self<TValue>): mixed)|TValue>  $expressions
     * @return self<TValue>
     */
    public function match(mixed $subject, array $expressions): self
    {
        $subject = $subject instanceof Closure ? $subject() : $subject;

        $matched = false;

        foreach ($expressions as $key => $callback) {
            if ($subject != $key) { // @pest-arch-ignore-line
                continue;
            }

            $matched = true;

            if (is_callable($callback)) {
                $callback(new self($this->value));

                continue;
            }

            $this->and($this->value)->toEqual($callback);

            break;
        }

        if ($matched === false) {
            throw new ExpectationFailedException('Unhandled match value.');
        }

        return $this;
    }

    /**
     * Apply the callback if the given "condition" is falsy.
     *
     * @param  (callable(): bool)|bool  $condition
     * @param  callable(Expectation<TValue>): mixed  $callback
     * @return self<TValue>
     */
    public function unless(callable|bool $condition, callable $callback): Expectation
    {
        $condition = is_callable($condition)
            ? $condition
            : static fn (): bool => $condition;

        return $this->when(! $condition(), $callback);
    }

    /**
     * Apply the callback if the given "condition" is truthy.
     *
     * @param  (callable(): bool)|bool  $condition
     * @param  callable(self<TValue>): mixed  $callback
     * @return self<TValue>
     */
    public function when(callable|bool $condition, callable $callback): self
    {
        $condition = is_callable($condition)
            ? $condition
            : static fn (): bool => $condition;

        if ($condition()) {
            $callback($this->and($this->value));
        }

        return $this;
    }

    /**
     * Dynamically calls methods on the class or creates a new higher order expectation.
     *
     * @param  array<int, mixed>  $parameters
     * @return Expectation<TValue>|HigherOrderExpectation<Expectation<TValue>, TValue>
     */
    public function __call(string $method, array $parameters): Expectation|HigherOrderExpectation|PendingArchExpectation|ArchExpectation
    {
        if (! self::hasMethod($method)) {
            if (! is_object($this->value) && method_exists(PendingArchExpectation::class, $method)) {
                $pendingArchExpectation = new PendingArchExpectation($this, []);

                return $pendingArchExpectation->$method(...$parameters); // @phpstan-ignore-line
            }

            if (! is_object($this->value)) {
                throw new BadMethodCallException(sprintf(
                    'Method "%s" does not exist in %s.',
                    $method,
                    gettype($this->value)
                ));
            }

            /* @phpstan-ignore-next-line */
            return new HigherOrderExpectation($this, call_user_func_array($this->value->$method(...), $parameters));
        }

        $closure = $this->getExpectationClosure($method);
        $reflectionClosure = new \ReflectionFunction($closure);
        $expectation = $reflectionClosure->getClosureThis();

        if ($reflectionClosure->getReturnType()?->__toString() === ArchExpectation::class) {
            return $closure(...$parameters);
        }

        assert(is_object($expectation));

        ExpectationPipeline::for($closure)
            ->send(...$parameters)
            ->through($this->pipes($method, $expectation, Expectation::class))
            ->run();

        return $this;
    }

    /**
     * Creates a new expectation closure from the given name.
     *
     * @throws ExpectationNotFound
     */
    private function getExpectationClosure(string $name): Closure
    {
        if (method_exists(Mixins\Expectation::class, $name)) {
            // @phpstan-ignore-next-line
            return Closure::fromCallable([new Mixins\Expectation($this->value), $name]);
        }

        if (self::hasExtend($name)) {
            $extend = self::$extends[$name]->bindTo($this, Expectation::class);

            if ($extend != false) { // @pest-arch-ignore-line
                return $extend;
            }
        }

        throw ExpectationNotFound::fromName($name);
    }

    /**
     * Dynamically calls methods on the class without any arguments or creates a new higher order expectation.
     *
     * @return Expectation<TValue>|OppositeExpectation<TValue>|EachExpectation<TValue>|HigherOrderExpectation<Expectation<TValue>, TValue|null>|TValue
     */
    public function __get(string $name): mixed
    {
        if (! self::hasMethod($name)) {
            if (! is_object($this->value) && method_exists(PendingArchExpectation::class, $name)) {
                /* @phpstan-ignore-next-line */
                return $this->{$name}();
            }

            /* @phpstan-ignore-next-line */
            return new HigherOrderExpectation($this, $this->retrieve($name, $this->value));
        }

        /* @phpstan-ignore-next-line */
        return $this->{$name}();
    }

    /**
     * Checks if the given expectation method exists.
     */
    public static function hasMethod(string $name): bool
    {
        return method_exists(self::class, $name)
            || method_exists(Mixins\Expectation::class, $name)
            || self::hasExtend($name);
    }

    /**
     * Matches any value.
     */
    public function any(): Any
    {
        return new Any;
    }

    /**
     * Asserts that the given expectation target use the given dependencies.
     *
     * @param  array<int, string>|string  $targets
     */
    public function toUse(array|string $targets): ArchExpectation
    {
        return ToUse::make($this, $targets);
    }

    /**
     * Asserts that the given expectation target does have the given permissions
     */
    public function toHaveFileSystemPermissions(string $permissions): ArchExpectation
    {
        return Targeted::make(
            $this,
            fn (ObjectDescription $object): bool => substr(sprintf('%o', fileperms($object->path)), -4) === $permissions,
            sprintf('permissions to be [%s]', $permissions),
            FileLineFinder::where(fn (string $line): bool => str_contains($line, '
