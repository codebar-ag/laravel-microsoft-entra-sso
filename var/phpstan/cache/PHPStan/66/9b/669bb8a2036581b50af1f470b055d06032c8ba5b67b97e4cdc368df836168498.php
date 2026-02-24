<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../psr/simple-cache/src/CacheInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Psr\SimpleCache\CacheInterface
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-3210f4d4838fe90b204bdffe60aafe7789dc8684b43d2b0c93ea348ad8af94d5-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Psr\\SimpleCache\\CacheInterface',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../psr/simple-cache/src/CacheInterface.php',
            ],
        ],
        'namespace' => 'Psr\\SimpleCache',
        'name' => 'Psr\\SimpleCache\\CacheInterface',
        'shortName' => 'CacheInterface',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 5,
        'endLine' => 114,
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
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 18,
                        'endLine' => 18,
                        'startColumn' => 25,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 18,
                                'endLine' => 18,
                                'startTokenPos' => 32,
                                'startFilePos' => 561,
                                'endTokenPos' => 32,
                                'endFilePos' => 564,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 18,
                        'endLine' => 18,
                        'startColumn' => 38,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'mixed',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Fetches a value from the cache.
 *
 * @param string $key     The unique key of this item in the cache.
 * @param mixed  $default Default value to return if the key does not exist.
 *
 * @return mixed The value of the item from the cache, or $default in case of cache miss.
 *
 * @throws \\Psr\\SimpleCache\\InvalidArgumentException
 *   MUST be thrown if the $key string is not a legal value.
 */',
                'startLine' => 18,
                'endLine' => 18,
                'startColumn' => 5,
                'endColumn' => 67,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\SimpleCache',
                'declaringClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'implementingClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'currentClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'aliasName' => null,
            ],
            'set' => [
                'name' => 'set',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 34,
                        'endLine' => 34,
                        'startColumn' => 25,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 34,
                        'endLine' => 34,
                        'startColumn' => 38,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'ttl' => [
                        'name' => 'ttl',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 34,
                                'endLine' => 34,
                                'startTokenPos' => 67,
                                'startFilePos' => 1451,
                                'endTokenPos' => 67,
                                'endFilePos' => 1454,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'null',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 34,
                        'endLine' => 34,
                        'startColumn' => 52,
                        'endColumn' => 85,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Persists data in the cache, uniquely referenced by a key with an optional expiration TTL time.
 *
 * @param string                 $key   The key of the item to store.
 * @param mixed                  $value The value of the item to store, must be serializable.
 * @param null|int|\\DateInterval $ttl   Optional. The TTL value of this item. If no value is sent and
 *                                      the driver supports TTL then the library may set a default value
 *                                      for it or let the driver take care of that.
 *
 * @return bool True on success and false on failure.
 *
 * @throws \\Psr\\SimpleCache\\InvalidArgumentException
 *   MUST be thrown if the $key string is not a legal value.
 */',
                'startLine' => 34,
                'endLine' => 34,
                'startColumn' => 5,
                'endColumn' => 93,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\SimpleCache',
                'declaringClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'implementingClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'currentClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'aliasName' => null,
            ],
            'delete' => [
                'name' => 'delete',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 46,
                        'endLine' => 46,
                        'startColumn' => 28,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Delete an item from the cache by its unique key.
 *
 * @param string $key The unique cache key of the item to delete.
 *
 * @return bool True if the item was successfully removed. False if there was an error.
 *
 * @throws \\Psr\\SimpleCache\\InvalidArgumentException
 *   MUST be thrown if the $key string is not a legal value.
 */',
                'startLine' => 46,
                'endLine' => 46,
                'startColumn' => 5,
                'endColumn' => 46,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\SimpleCache',
                'declaringClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'implementingClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'currentClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'aliasName' => null,
            ],
            'clear' => [
                'name' => 'clear',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Wipes clean the entire cache\'s keys.
 *
 * @return bool True on success and false on failure.
 */',
                'startLine' => 53,
                'endLine' => 53,
                'startColumn' => 5,
                'endColumn' => 34,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\SimpleCache',
                'declaringClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'implementingClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'currentClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'aliasName' => null,
            ],
            'getMultiple' => [
                'name' => 'getMultiple',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'iterable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 67,
                        'endLine' => 67,
                        'startColumn' => 33,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 67,
                                'endLine' => 67,
                                'startTokenPos' => 124,
                                'startFilePos' => 2726,
                                'endTokenPos' => 124,
                                'endFilePos' => 2729,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 67,
                        'endLine' => 67,
                        'startColumn' => 49,
                        'endColumn' => 69,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'iterable',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Obtains multiple cache items by their unique keys.
 *
 * @param iterable<string> $keys    A list of keys that can be obtained in a single operation.
 * @param mixed            $default Default value to return for keys that do not exist.
 *
 * @return iterable<string, mixed> A list of key => value pairs. Cache keys that do not exist or are stale will have $default as value.
 *
 * @throws \\Psr\\SimpleCache\\InvalidArgumentException
 *   MUST be thrown if $keys is neither an array nor a Traversable,
 *   or if any of the $keys are not a legal value.
 */',
                'startLine' => 67,
                'endLine' => 67,
                'startColumn' => 5,
                'endColumn' => 81,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\SimpleCache',
                'declaringClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'implementingClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'currentClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'aliasName' => null,
            ],
            'setMultiple' => [
                'name' => 'setMultiple',
                'parameters' => [
                    'values' => [
                        'name' => 'values',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'iterable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 83,
                        'endLine' => 83,
                        'startColumn' => 33,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'ttl' => [
                        'name' => 'ttl',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 83,
                                'endLine' => 83,
                                'startTokenPos' => 154,
                                'startFilePos' => 3597,
                                'endTokenPos' => 154,
                                'endFilePos' => 3600,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'null',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 83,
                        'endLine' => 83,
                        'startColumn' => 51,
                        'endColumn' => 84,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Persists a set of key => value pairs in the cache, with an optional TTL.
 *
 * @param iterable               $values A list of key => value pairs for a multiple-set operation.
 * @param null|int|\\DateInterval $ttl    Optional. The TTL value of this item. If no value is sent and
 *                                       the driver supports TTL then the library may set a default value
 *                                       for it or let the driver take care of that.
 *
 * @return bool True on success and false on failure.
 *
 * @throws \\Psr\\SimpleCache\\InvalidArgumentException
 *   MUST be thrown if $values is neither an array nor a Traversable,
 *   or if any of the $values are not a legal value.
 */',
                'startLine' => 83,
                'endLine' => 83,
                'startColumn' => 5,
                'endColumn' => 92,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\SimpleCache',
                'declaringClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'implementingClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'currentClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'aliasName' => null,
            ],
            'deleteMultiple' => [
                'name' => 'deleteMultiple',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'iterable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 96,
                        'endLine' => 96,
                        'startColumn' => 36,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Deletes multiple cache items in a single operation.
 *
 * @param iterable<string> $keys A list of string-based keys to be deleted.
 *
 * @return bool True if the items were successfully removed. False if there was an error.
 *
 * @throws \\Psr\\SimpleCache\\InvalidArgumentException
 *   MUST be thrown if $keys is neither an array nor a Traversable,
 *   or if any of the $keys are not a legal value.
 */',
                'startLine' => 96,
                'endLine' => 96,
                'startColumn' => 5,
                'endColumn' => 57,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\SimpleCache',
                'declaringClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'implementingClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'currentClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'aliasName' => null,
            ],
            'has' => [
                'name' => 'has',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 113,
                        'endLine' => 113,
                        'startColumn' => 25,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Determines whether an item is present in the cache.
 *
 * NOTE: It is recommended that has() is only to be used for cache warming type purposes
 * and not to be used within your live applications operations for get/set, as this method
 * is subject to a race condition where your has() will return true and immediately after,
 * another script can remove it making the state of your app out of date.
 *
 * @param string $key The cache item key.
 *
 * @return bool
 *
 * @throws \\Psr\\SimpleCache\\InvalidArgumentException
 *   MUST be thrown if the $key string is not a legal value.
 */',
                'startLine' => 113,
                'endLine' => 113,
                'startColumn' => 5,
                'endColumn' => 43,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Psr\\SimpleCache',
                'declaringClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'implementingClassName' => 'Psr\\SimpleCache\\CacheInterface',
                'currentClassName' => 'Psr\\SimpleCache\\CacheInterface',
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
