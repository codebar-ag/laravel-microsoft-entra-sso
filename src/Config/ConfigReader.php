<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Config;

use CodebarAg\MicrosoftEntraSSO\Exceptions\ConfigurationException;

/**
 * Typed access to one level of the raw config array. Every failure names the full key.
 */
final readonly class ConfigReader
{
    /**
     * @param  array<mixed>  $values
     */
    public function __construct(
        private array $values,
        private string $path = '',
    ) {}

    public function string(string $key): string
    {
        $value = $this->raw($key);

        if (! is_string($value) || $value === '') {
            throw ConfigurationException::invalid($this->path($key), 'must be a non-empty string.');
        }

        return $value;
    }

    public function optionalString(string $key): ?string
    {
        $value = $this->values[$key] ?? null;

        if ($value === null || $value === '') {
            return null;
        }

        if (! is_string($value)) {
            throw ConfigurationException::invalid($this->path($key), 'must be a string or null.');
        }

        return $value;
    }

    public function int(string $key, int $min): int
    {
        $value = $this->raw($key);

        if (! is_int($value) || $value < $min) {
            throw ConfigurationException::invalid($this->path($key), "must be an integer of at least {$min}.");
        }

        return $value;
    }

    public function bool(string $key): bool
    {
        $value = $this->raw($key);

        if (! is_bool($value)) {
            throw ConfigurationException::invalid($this->path($key), 'must be true or false.');
        }

        return $value;
    }

    /**
     * @return list<string>
     */
    public function stringList(string $key): array
    {
        $value = $this->raw($key);

        if (! is_array($value)) {
            throw ConfigurationException::invalid($this->path($key), 'must be a list of strings.');
        }

        $list = [];
        foreach ($value as $item) {
            if (! is_string($item) || $item === '') {
                throw ConfigurationException::invalid($this->path($key), 'must only contain non-empty strings.');
            }
            $list[] = $item;
        }

        return $list;
    }

    public function section(string $key): self
    {
        $value = $this->raw($key);

        if (! is_array($value)) {
            throw ConfigurationException::invalid($this->path($key), 'must be an array.');
        }

        return new self($value, $this->path($key));
    }

    /**
     * @return array<string, self>
     */
    public function sections(string $key): array
    {
        $value = $this->raw($key);

        if (! is_array($value)) {
            throw ConfigurationException::invalid($this->path($key), 'must be an array.');
        }

        $sections = [];
        foreach ($value as $name => $section) {
            if (! is_string($name) || ! is_array($section)) {
                throw ConfigurationException::invalid($this->path($key), 'must map names to arrays.');
            }
            $sections[$name] = new self($section, $this->path($key.'.'.$name));
        }

        return $sections;
    }

    public function path(string $key): string
    {
        return $this->path === '' ? $key : $this->path.'.'.$key;
    }

    private function raw(string $key): mixed
    {
        if (! array_key_exists($key, $this->values) || $this->values[$key] === null) {
            throw ConfigurationException::missing($this->path($key));
        }

        return $this->values[$key];
    }
}
