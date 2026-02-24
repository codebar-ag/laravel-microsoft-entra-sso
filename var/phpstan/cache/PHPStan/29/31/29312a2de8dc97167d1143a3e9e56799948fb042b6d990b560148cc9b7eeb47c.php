<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Config/Repository.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Config\Repository
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-724814f955454e3fd0b6ca31203dd02c8d28d62afcbbbcbed108cc74bae6ea10-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Config\\Repository',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Config/Repository.php',
            ],
        ],
        'namespace' => 'Illuminate\\Config',
        'name' => 'Illuminate\\Config\\Repository',
        'shortName' => 'Repository',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 12,
        'endLine' => 305,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'ArrayAccess',
            1 => 'Illuminate\\Contracts\\Config\\Repository',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Support\\Traits\\Macroable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'items' => [
                'declaringClassName' => 'Illuminate\\Config\\Repository',
                'implementingClassName' => 'Illuminate\\Config\\Repository',
                'name' => 'items',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 21,
                        'endLine' => 21,
                        'startTokenPos' => 67,
                        'startFilePos' => 446,
                        'endTokenPos' => 68,
                        'endFilePos' => 447,
                    ],
                ],
                'docComment' => '/**
 * All of the configuration items.
 *
 * @var array<string,mixed>
 */',
                'attributes' => [
                ],
                'startLine' => 21,
                'endLine' => 21,
                'startColumn' => 5,
                'endColumn' => 26,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            '__construct' => [
                'name' => '__construct',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 28,
                                'endLine' => 28,
                                'startTokenPos' => 85,
                                'startFilePos' => 596,
                                'endTokenPos' => 86,
                                'endFilePos' => 597,
                            ],
                        ],
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
                        'startLine' => 28,
                        'endLine' => 28,
                        'startColumn' => 33,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new configuration repository.
 *
 * @param  array  $items
 */',
                'startLine' => 28,
                'endLine' => 31,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Config',
                'declaringClassName' => 'Illuminate\\Config\\Repository',
                'implementingClassName' => 'Illuminate\\Config\\Repository',
                'currentClassName' => 'Illuminate\\Config\\Repository',
                'aliasName' => null,
            ],
            'has' => [
                'name' => 'has',
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
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the given configuration value exists.
 *
 * @param  string  $key
 * @return bool
 */',
                'startLine' => 39,
                'endLine' => 42,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Config',
                'declaringClassName' => 'Illuminate\\Config\\Repository',
                'implementingClassName' => 'Illuminate\\Config\\Repository',
                'currentClassName' => 'Illuminate\\Config\\Repository',
                'aliasName' => null,
            ],
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
                        'startLine' => 51,
                        'endLine' => 51,
                        'startColumn' => 25,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 51,
                                'endLine' => 51,
                                'startTokenPos' => 147,
                                'startFilePos' => 1057,
                                'endTokenPos' => 147,
                                'endFilePos' => 1060,
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
                        'startColumn' => 31,
                        'endColumn' => 45,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the specified configuration value.
 *
 * @param  array|string  $key
 * @param  mixed  $default
 * @return mixed
 */',
                'startLine' => 51,
                'endLine' => 58,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Config',
                'declaringClassName' => 'Illuminate\\Config\\Repository',
                'implementingClassName' => 'Illuminate\\Config\\Repository',
                'currentClassName' => 'Illuminate\\Config\\Repository',
                'aliasName' => null,
            ],
            'getMany' => [
                'name' => 'getMany',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
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
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get many configuration values.
 *
 * @param  array<string|int,mixed>  $keys
 * @return array<string,mixed>
 */',
                'startLine' => 66,
                'endLine' => 79,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Config',
                'declaringClassName' => 'Illuminate\\Config\\Repository',
                'implementingClassName' => 'Illuminate\\Config\\Repository',
                'currentClassName' => 'Illuminate\\Config\\Repository',
                'aliasName' => null,
            ],
            'string' => [
                'name' => 'string',
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
                        'startLine' => 90,
                        'endLine' => 90,
                        'startColumn' => 28,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 90,
                                'endLine' => 90,
                                'startTokenPos' => 311,
                                'startFilePos' => 1968,
                                'endTokenPos' => 311,
                                'endFilePos' => 1971,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 90,
                        'endLine' => 90,
                        'startColumn' => 41,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the specified string configuration value.
 *
 * @param  string  $key
 * @param  (\\Closure():(string|null))|string|null  $default
 * @return string
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 90,
                'endLine' => 101,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Config',
                'declaringClassName' => 'Illuminate\\Config\\Repository',
                'implementingClassName' => 'Illuminate\\Config\\Repository',
                'currentClassName' => 'Illuminate\\Config\\Repository',
                'aliasName' => null,
            ],
            'integer' => [
                'name' => 'integer',
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
                        'startLine' => 112,
                        'endLine' => 112,
                        'startColumn' => 29,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 112,
                                'endLine' => 112,
                                'startTokenPos' => 397,
                                'startFilePos' => 2566,
                                'endTokenPos' => 397,
                                'endFilePos' => 2569,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 112,
                        'endLine' => 112,
                        'startColumn' => 42,
                        'endColumn' => 56,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the specified integer configuration value.
 *
 * @param  string  $key
 * @param  (\\Closure():(int|null))|int|null  $default
 * @return int
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 112,
                'endLine' => 123,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Config',
                'declaringClassName' => 'Illuminate\\Config\\Repository',
                'implementingClassName' => 'Illuminate\\Config\\Repository',
                'currentClassName' => 'Illuminate\\Config\\Repository',
                'aliasName' => null,
            ],
            'float' => [
                'name' => 'float',
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
                        'startLine' => 134,
                        'endLine' => 134,
                        'startColumn' => 27,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 134,
                                'endLine' => 134,
                                'startTokenPos' => 483,
                                'startFilePos' => 3162,
                                'endTokenPos' => 483,
                                'endFilePos' => 3165,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 134,
                        'endLine' => 134,
                        'startColumn' => 40,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'float',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the specified float configuration value.
 *
 * @param  string  $key
 * @param  (\\Closure():(float|null))|float|null  $default
 * @return float
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 134,
                'endLine' => 145,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Config',
                'declaringClassName' => 'Illuminate\\Config\\Repository',
                'implementingClassName' => 'Illuminate\\Config\\Repository',
                'currentClassName' => 'Illuminate\\Config\\Repository',
                'aliasName' => null,
            ],
            'boolean' => [
                'name' => 'boolean',
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
                        'startLine' => 156,
                        'endLine' => 156,
                        'startColumn' => 29,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 156,
                                'endLine' => 156,
                                'startTokenPos' => 569,
                                'startFilePos' => 3760,
                                'endTokenPos' => 569,
                                'endFilePos' => 3763,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 156,
                        'endLine' => 156,
                        'startColumn' => 42,
                        'endColumn' => 56,
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
 * Get the specified boolean configuration value.
 *
 * @param  string  $key
 * @param  (\\Closure():(bool|null))|bool|null  $default
 * @return bool
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 156,
                'endLine' => 167,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Config',
                'declaringClassName' => 'Illuminate\\Config\\Repository',
                'implementingClassName' => 'Illuminate\\Config\\Repository',
                'currentClassName' => 'Illuminate\\Config\\Repository',
                'aliasName' => null,
            ],
            'array' => [
                'name' => 'array',
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
                        'startLine' => 178,
                        'endLine' => 178,
                        'startColumn' => 27,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 178,
                                'endLine' => 178,
                                'startTokenPos' => 655,
                                'startFilePos' => 4411,
                                'endTokenPos' => 655,
                                'endFilePos' => 4414,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 178,
                        'endLine' => 178,
                        'startColumn' => 40,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the specified array configuration value.
 *
 * @param  string  $key
 * @param  (\\Closure():(array<array-key, mixed>|null))|array<array-key, mixed>|null  $default
 * @return array<array-key, mixed>
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 178,
                'endLine' => 189,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Config',
                'declaringClassName' => 'Illuminate\\Config\\Repository',
                'implementingClassName' => 'Illuminate\\Config\\Repository',
                'currentClassName' => 'Illuminate\\Config\\Repository',
                'aliasName' => null,
            ],
            'collection' => [
                'name' => 'collection',
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
                        'startLine' => 198,
                        'endLine' => 198,
                        'startColumn' => 32,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 198,
                                'endLine' => 198,
                                'startTokenPos' => 741,
                                'startFilePos' => 5041,
                                'endTokenPos' => 741,
                                'endFilePos' => 5044,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 198,
                        'endLine' => 198,
                        'startColumn' => 45,
                        'endColumn' => 59,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Support\\Collection',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the specified array configuration value as a collection.
 *
 * @param  string  $key
 * @param  (\\Closure():(array<array-key, mixed>|null))|array<array-key, mixed>|null  $default
 * @return Collection<array-key, mixed>
 */',
                'startLine' => 198,
                'endLine' => 201,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Config',
                'declaringClassName' => 'Illuminate\\Config\\Repository',
                'implementingClassName' => 'Illuminate\\Config\\Repository',
                'currentClassName' => 'Illuminate\\Config\\Repository',
                'aliasName' => null,
            ],
            'set' => [
                'name' => 'set',
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
                        'startLine' => 210,
                        'endLine' => 210,
                        'startColumn' => 25,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 210,
                                'endLine' => 210,
                                'startTokenPos' => 784,
                                'startFilePos' => 5318,
                                'endTokenPos' => 784,
                                'endFilePos' => 5321,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 210,
                        'endLine' => 210,
                        'startColumn' => 31,
                        'endColumn' => 43,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set a given configuration value.
 *
 * @param  array|string  $key
 * @param  mixed  $value
 * @return void
 */',
                'startLine' => 210,
                'endLine' => 217,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Config',
                'declaringClassName' => 'Illuminate\\Config\\Repository',
                'implementingClassName' => 'Illuminate\\Config\\Repository',
                'currentClassName' => 'Illuminate\\Config\\Repository',
                'aliasName' => null,
            ],
            'prepend' => [
                'name' => 'prepend',
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
                        'startLine' => 226,
                        'endLine' => 226,
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
                        'startLine' => 226,
                        'endLine' => 226,
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
 * Prepend a value onto an array configuration value.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @return void
 */',
                'startLine' => 226,
                'endLine' => 233,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Config',
                'declaringClassName' => 'Illuminate\\Config\\Repository',
                'implementingClassName' => 'Illuminate\\Config\\Repository',
                'currentClassName' => 'Illuminate\\Config\\Repository',
                'aliasName' => null,
            ],
            'push' => [
                'name' => 'push',
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
                        'startLine' => 242,
                        'endLine' => 242,
                        'startColumn' => 26,
                        'endColumn' => 29,
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
                        'startLine' => 242,
                        'endLine' => 242,
                        'startColumn' => 32,
                        'endColumn' => 37,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Push a value onto an array configuration value.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @return void
 */',
                'startLine' => 242,
                'endLine' => 249,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Config',
                'declaringClassName' => 'Illuminate\\Config\\Repository',
                'implementingClassName' => 'Illuminate\\Config\\Repository',
                'currentClassName' => 'Illuminate\\Config\\Repository',
                'aliasName' => null,
            ],
            'all' => [
                'name' => 'all',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get all of the configuration items for the application.
 *
 * @return array
 */',
                'startLine' => 256,
                'endLine' => 259,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Config',
                'declaringClassName' => 'Illuminate\\Config\\Repository',
                'implementingClassName' => 'Illuminate\\Config\\Repository',
                'currentClassName' => 'Illuminate\\Config\\Repository',
                'aliasName' => null,
            ],
            'offsetExists' => [
                'name' => 'offsetExists',
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
                        'startLine' => 267,
                        'endLine' => 267,
                        'startColumn' => 34,
                        'endColumn' => 37,
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
 * Determine if the given configuration option exists.
 *
 * @param  string  $key
 * @return bool
 */',
                'startLine' => 267,
                'endLine' => 270,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Config',
                'declaringClassName' => 'Illuminate\\Config\\Repository',
                'implementingClassName' => 'Illuminate\\Config\\Repository',
                'currentClassName' => 'Illuminate\\Config\\Repository',
                'aliasName' => null,
            ],
            'offsetGet' => [
                'name' => 'offsetGet',
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
                        'startLine' => 278,
                        'endLine' => 278,
                        'startColumn' => 31,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
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
 * Get a configuration option.
 *
 * @param  string  $key
 * @return mixed
 */',
                'startLine' => 278,
                'endLine' => 281,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Config',
                'declaringClassName' => 'Illuminate\\Config\\Repository',
                'implementingClassName' => 'Illuminate\\Config\\Repository',
                'currentClassName' => 'Illuminate\\Config\\Repository',
                'aliasName' => null,
            ],
            'offsetSet' => [
                'name' => 'offsetSet',
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
                        'startLine' => 290,
                        'endLine' => 290,
                        'startColumn' => 31,
                        'endColumn' => 34,
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
                        'startLine' => 290,
                        'endLine' => 290,
                        'startColumn' => 37,
                        'endColumn' => 42,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'void',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Set a configuration option.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @return void
 */',
                'startLine' => 290,
                'endLine' => 293,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Config',
                'declaringClassName' => 'Illuminate\\Config\\Repository',
                'implementingClassName' => 'Illuminate\\Config\\Repository',
                'currentClassName' => 'Illuminate\\Config\\Repository',
                'aliasName' => null,
            ],
            'offsetUnset' => [
                'name' => 'offsetUnset',
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
                        'startLine' => 301,
                        'endLine' => 301,
                        'startColumn' => 33,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'void',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Unset a configuration option.
 *
 * @param  string  $key
 * @return void
 */',
                'startLine' => 301,
                'endLine' => 304,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Config',
                'declaringClassName' => 'Illuminate\\Config\\Repository',
                'implementingClassName' => 'Illuminate\\Config\\Repository',
                'currentClassName' => 'Illuminate\\Config\\Repository',
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
