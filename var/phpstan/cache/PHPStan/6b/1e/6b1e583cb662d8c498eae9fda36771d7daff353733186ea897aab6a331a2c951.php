<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Cache/Repository.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Contracts\Cache\Repository
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-a2baa980ca82fcc25fd767058a7e6658f30a1657b6c9f6fd73057ec9be3033a9-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Contracts\\Cache\\Repository',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Cache/Repository.php',
            ],
        ],
        'namespace' => 'Illuminate\\Contracts\\Cache',
        'name' => 'Illuminate\\Contracts\\Cache\\Repository',
        'shortName' => 'Repository',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 8,
        'endLine' => 116,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Psr\\SimpleCache\\CacheInterface',
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'pull' => [
                'name' => 'pull',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 19,
                        'endLine' => 19,
                        'startColumn' => 26,
                        'endColumn' => 29,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 19,
                                'endLine' => 19,
                                'startTokenPos' => 42,
                                'startFilePos' => 453,
                                'endTokenPos' => 42,
                                'endFilePos' => 456,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 19,
                        'endLine' => 19,
                        'startColumn' => 32,
                        'endColumn' => 46,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve an item from the cache and delete it.
 *
 * @template TCacheValue
 *
 * @param  array|string  $key
 * @param  TCacheValue|(\\Closure(): TCacheValue)  $default
 * @return (TCacheValue is null ? mixed : TCacheValue)
 */',
                'startLine' => 19,
                'endLine' => 19,
                'startColumn' => 5,
                'endColumn' => 48,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'aliasName' => null,
            ],
            'put' => [
                'name' => 'put',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 29,
                        'endLine' => 29,
                        'startColumn' => 25,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 29,
                        'endLine' => 29,
                        'startColumn' => 31,
                        'endColumn' => 36,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'ttl' => [
                        'name' => 'ttl',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 29,
                                'endLine' => 29,
                                'startTokenPos' => 64,
                                'startFilePos' => 704,
                                'endTokenPos' => 64,
                                'endFilePos' => 707,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 29,
                        'endLine' => 29,
                        'startColumn' => 39,
                        'endColumn' => 49,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Store an item in the cache.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @param  \\DateTimeInterface|\\DateInterval|int|null  $ttl
 * @return bool
 */',
                'startLine' => 29,
                'endLine' => 29,
                'startColumn' => 5,
                'endColumn' => 51,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'aliasName' => null,
            ],
            'add' => [
                'name' => 'add',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 39,
                        'endLine' => 39,
                        'startColumn' => 25,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 39,
                        'endLine' => 39,
                        'startColumn' => 31,
                        'endColumn' => 36,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'ttl' => [
                        'name' => 'ttl',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 39,
                                'endLine' => 39,
                                'startTokenPos' => 86,
                                'startFilePos' => 981,
                                'endTokenPos' => 86,
                                'endFilePos' => 984,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 39,
                        'endLine' => 39,
                        'startColumn' => 39,
                        'endColumn' => 49,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Store an item in the cache if the key does not exist.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @param  \\DateTimeInterface|\\DateInterval|int|null  $ttl
 * @return bool
 */',
                'startLine' => 39,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 51,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'aliasName' => null,
            ],
            'increment' => [
                'name' => 'increment',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 48,
                        'endLine' => 48,
                        'startColumn' => 31,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 48,
                                'endLine' => 48,
                                'startTokenPos' => 105,
                                'startFilePos' => 1190,
                                'endTokenPos' => 105,
                                'endFilePos' => 1190,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 48,
                        'endLine' => 48,
                        'startColumn' => 37,
                        'endColumn' => 46,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Increment the value of an item in the cache.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @return int|bool
 */',
                'startLine' => 48,
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 48,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'aliasName' => null,
            ],
            'decrement' => [
                'name' => 'decrement',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 57,
                        'endLine' => 57,
                        'startColumn' => 31,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 57,
                                'endLine' => 57,
                                'startTokenPos' => 124,
                                'startFilePos' => 1396,
                                'endTokenPos' => 124,
                                'endFilePos' => 1396,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 57,
                        'endLine' => 57,
                        'startColumn' => 37,
                        'endColumn' => 46,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Decrement the value of an item in the cache.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @return int|bool
 */',
                'startLine' => 57,
                'endLine' => 57,
                'startColumn' => 5,
                'endColumn' => 48,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'aliasName' => null,
            ],
            'forever' => [
                'name' => 'forever',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 66,
                        'endLine' => 66,
                        'startColumn' => 29,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 66,
                        'endLine' => 66,
                        'startColumn' => 35,
                        'endColumn' => 40,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Store an item in the cache indefinitely.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @return bool
 */',
                'startLine' => 66,
                'endLine' => 66,
                'startColumn' => 5,
                'endColumn' => 42,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'aliasName' => null,
            ],
            'remember' => [
                'name' => 'remember',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 78,
                        'endLine' => 78,
                        'startColumn' => 30,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'ttl' => [
                        'name' => 'ttl',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 78,
                        'endLine' => 78,
                        'startColumn' => 36,
                        'endColumn' => 39,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 78,
                        'endLine' => 78,
                        'startColumn' => 42,
                        'endColumn' => 58,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get an item from the cache, or execute the given Closure and store the result.
 *
 * @template TCacheValue
 *
 * @param  string  $key
 * @param  \\DateTimeInterface|\\DateInterval|\\Closure|int|null  $ttl
 * @param  \\Closure(): TCacheValue  $callback
 * @return TCacheValue
 */',
                'startLine' => 78,
                'endLine' => 78,
                'startColumn' => 5,
                'endColumn' => 60,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'aliasName' => null,
            ],
            'sear' => [
                'name' => 'sear',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 89,
                        'endLine' => 89,
                        'startColumn' => 26,
                        'endColumn' => 29,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 89,
                        'endLine' => 89,
                        'startColumn' => 32,
                        'endColumn' => 48,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get an item from the cache, or execute the given Closure and store the result forever.
 *
 * @template TCacheValue
 *
 * @param  string  $key
 * @param  \\Closure(): TCacheValue  $callback
 * @return TCacheValue
 */',
                'startLine' => 89,
                'endLine' => 89,
                'startColumn' => 5,
                'endColumn' => 50,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'aliasName' => null,
            ],
            'rememberForever' => [
                'name' => 'rememberForever',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 100,
                        'endLine' => 100,
                        'startColumn' => 37,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 100,
                        'endLine' => 100,
                        'startColumn' => 43,
                        'endColumn' => 59,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get an item from the cache, or execute the given Closure and store the result forever.
 *
 * @template TCacheValue
 *
 * @param  string  $key
 * @param  \\Closure(): TCacheValue  $callback
 * @return TCacheValue
 */',
                'startLine' => 100,
                'endLine' => 100,
                'startColumn' => 5,
                'endColumn' => 61,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'aliasName' => null,
            ],
            'forget' => [
                'name' => 'forget',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 108,
                        'endLine' => 108,
                        'startColumn' => 28,
                        'endColumn' => 31,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove an item from the cache.
 *
 * @param  string  $key
 * @return bool
 */',
                'startLine' => 108,
                'endLine' => 108,
                'startColumn' => 5,
                'endColumn' => 33,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'aliasName' => null,
            ],
            'getStore' => [
                'name' => 'getStore',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the cache store implementation.
 *
 * @return \\Illuminate\\Contracts\\Cache\\Store
 */',
                'startLine' => 115,
                'endLine' => 115,
                'startColumn' => 5,
                'endColumn' => 31,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Repository',
                'aliasName' => null,
            ],
        ],
        'traitsData' => [
            'aliases' => [
            ],
            'modifiers' => [
            ],
            'precedences' => [
            ],
            'hashes' => [
            ],
        ],
    ],
]);
