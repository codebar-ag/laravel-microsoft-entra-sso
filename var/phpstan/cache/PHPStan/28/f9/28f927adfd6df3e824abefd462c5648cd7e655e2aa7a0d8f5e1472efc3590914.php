<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Cache/Store.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Contracts\Cache\Store
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-d3993cfd21aef5e709e65771fc6ae207677c181b68639eb574e76ee531941628-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Contracts\\Cache\\Store',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Cache/Store.php',
            ],
        ],
        'namespace' => 'Illuminate\\Contracts\\Cache',
        'name' => 'Illuminate\\Contracts\\Cache\\Store',
        'shortName' => 'Store',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 5,
        'endLine' => 92,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'get' => [
                'name' => 'get',
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
                        'startLine' => 13,
                        'endLine' => 13,
                        'startColumn' => 25,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve an item from the cache by key.
 *
 * @param  string  $key
 * @return mixed
 */',
                'startLine' => 13,
                'endLine' => 13,
                'startColumn' => 5,
                'endColumn' => 30,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'aliasName' => null,
            ],
            'many' => [
                'name' => 'many',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'array',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 23,
                        'endLine' => 23,
                        'startColumn' => 26,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve multiple items from the cache by key.
 *
 * Items not found in the cache will have a null value.
 *
 * @param  array  $keys
 * @return array
 */',
                'startLine' => 23,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 38,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Store',
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
                        'startLine' => 33,
                        'endLine' => 33,
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
                        'startLine' => 33,
                        'endLine' => 33,
                        'startColumn' => 31,
                        'endColumn' => 36,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'seconds' => [
                        'name' => 'seconds',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 33,
                        'endLine' => 33,
                        'startColumn' => 39,
                        'endColumn' => 46,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Store an item in the cache for a given number of seconds.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @param  int  $seconds
 * @return bool
 */',
                'startLine' => 33,
                'endLine' => 33,
                'startColumn' => 5,
                'endColumn' => 48,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'aliasName' => null,
            ],
            'putMany' => [
                'name' => 'putMany',
                'parameters' => [
                    'values' => [
                        'name' => 'values',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'array',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 42,
                        'endLine' => 42,
                        'startColumn' => 29,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'seconds' => [
                        'name' => 'seconds',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 42,
                        'endLine' => 42,
                        'startColumn' => 44,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Store multiple items in the cache for a given number of seconds.
 *
 * @param  array  $values
 * @param  int  $seconds
 * @return bool
 */',
                'startLine' => 42,
                'endLine' => 42,
                'startColumn' => 5,
                'endColumn' => 53,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Store',
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
                        'startLine' => 51,
                        'endLine' => 51,
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
                                'startLine' => 51,
                                'endLine' => 51,
                                'startTokenPos' => 89,
                                'startFilePos' => 1122,
                                'endTokenPos' => 89,
                                'endFilePos' => 1122,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 51,
                        'endLine' => 51,
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
                'startLine' => 51,
                'endLine' => 51,
                'startColumn' => 5,
                'endColumn' => 48,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Store',
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
                        'startLine' => 60,
                        'endLine' => 60,
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
                                'startLine' => 60,
                                'endLine' => 60,
                                'startTokenPos' => 108,
                                'startFilePos' => 1328,
                                'endTokenPos' => 108,
                                'endFilePos' => 1328,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 60,
                        'endLine' => 60,
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
                'startLine' => 60,
                'endLine' => 60,
                'startColumn' => 5,
                'endColumn' => 48,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Store',
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
                        'startLine' => 69,
                        'endLine' => 69,
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
                        'startLine' => 69,
                        'endLine' => 69,
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
                'startLine' => 69,
                'endLine' => 69,
                'startColumn' => 5,
                'endColumn' => 42,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Store',
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
                        'startLine' => 77,
                        'endLine' => 77,
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
                'startLine' => 77,
                'endLine' => 77,
                'startColumn' => 5,
                'endColumn' => 33,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'aliasName' => null,
            ],
            'flush' => [
                'name' => 'flush',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove all items from the cache.
 *
 * @return bool
 */',
                'startLine' => 84,
                'endLine' => 84,
                'startColumn' => 5,
                'endColumn' => 28,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'aliasName' => null,
            ],
            'getPrefix' => [
                'name' => 'getPrefix',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the cache key prefix.
 *
 * @return string
 */',
                'startLine' => 91,
                'endLine' => 91,
                'startColumn' => 5,
                'endColumn' => 32,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Store',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Store',
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
