<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Log/Logger.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Log\Logger
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-b7382fcab927960291e1c6b595cb0755b46e4fe6d7d94f91e7372a268a61fdd1-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Log\\Logger',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Log/Logger.php',
            ],
        ],
        'namespace' => 'Illuminate\\Log',
        'name' => 'Illuminate\\Log\\Logger',
        'shortName' => 'Logger',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 14,
        'endLine' => 322,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Psr\\Log\\LoggerInterface',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Support\\Traits\\Conditionable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'logger' => [
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'name' => 'logger',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The underlying logger implementation.
 *
 * @var \\Psr\\Log\\LoggerInterface
 */',
                'attributes' => [
                ],
                'startLine' => 23,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'dispatcher' => [
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'name' => 'dispatcher',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The event dispatcher instance.
 *
 * @var \\Illuminate\\Contracts\\Events\\Dispatcher|null
 */',
                'attributes' => [
                ],
                'startLine' => 30,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 26,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'context' => [
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'name' => 'context',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 37,
                        'endLine' => 37,
                        'startTokenPos' => 84,
                        'startFilePos' => 763,
                        'endTokenPos' => 85,
                        'endFilePos' => 764,
                    ],
                ],
                'docComment' => '/**
 * Any context to be added to logs.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 37,
                'endLine' => 37,
                'startColumn' => 5,
                'endColumn' => 28,
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
                    'logger' => [
                        'name' => 'logger',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Psr\\Log\\LoggerInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 45,
                        'endLine' => 45,
                        'startColumn' => 33,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'dispatcher' => [
                        'name' => 'dispatcher',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 45,
                                'endLine' => 45,
                                'startTokenPos' => 108,
                                'startFilePos' => 1037,
                                'endTokenPos' => 108,
                                'endFilePos' => 1040,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'null',
                                            'isIdentifier' => true,
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
                        'startLine' => 45,
                        'endLine' => 45,
                        'startColumn' => 58,
                        'endColumn' => 87,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new log writer instance.
 *
 * @param  \\Psr\\Log\\LoggerInterface  $logger
 * @param  \\Illuminate\\Contracts\\Events\\Dispatcher|null  $dispatcher
 */',
                'startLine' => 45,
                'endLine' => 49,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'currentClassName' => 'Illuminate\\Log\\Logger',
                'aliasName' => null,
            ],
            'emergency' => [
                'name' => 'emergency',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 58,
                        'endLine' => 58,
                        'startColumn' => 31,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 58,
                                'endLine' => 58,
                                'startTokenPos' => 150,
                                'startFilePos' => 1454,
                                'endTokenPos' => 151,
                                'endFilePos' => 1455,
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
                        'startLine' => 58,
                        'endLine' => 58,
                        'startColumn' => 41,
                        'endColumn' => 59,
                        'parameterIndex' => 1,
                        'isOptional' => true,
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
 * Log an emergency message to the logs.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|\\Illuminate\\Contracts\\Support\\Jsonable|\\Illuminate\\Support\\Stringable|array|string  $message
 * @param  array  $context
 * @return void
 */',
                'startLine' => 58,
                'endLine' => 61,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'currentClassName' => 'Illuminate\\Log\\Logger',
                'aliasName' => null,
            ],
            'alert' => [
                'name' => 'alert',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 70,
                        'endLine' => 70,
                        'startColumn' => 27,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 70,
                                'endLine' => 70,
                                'startTokenPos' => 192,
                                'startFilePos' => 1852,
                                'endTokenPos' => 193,
                                'endFilePos' => 1853,
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
                        'startLine' => 70,
                        'endLine' => 70,
                        'startColumn' => 37,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
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
 * Log an alert message to the logs.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|\\Illuminate\\Contracts\\Support\\Jsonable|\\Illuminate\\Support\\Stringable|array|string  $message
 * @param  array  $context
 * @return void
 */',
                'startLine' => 70,
                'endLine' => 73,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'currentClassName' => 'Illuminate\\Log\\Logger',
                'aliasName' => null,
            ],
            'critical' => [
                'name' => 'critical',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 82,
                        'endLine' => 82,
                        'startColumn' => 30,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 82,
                                'endLine' => 82,
                                'startTokenPos' => 234,
                                'startFilePos' => 2255,
                                'endTokenPos' => 235,
                                'endFilePos' => 2256,
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
                        'startLine' => 82,
                        'endLine' => 82,
                        'startColumn' => 40,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => true,
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
 * Log a critical message to the logs.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|\\Illuminate\\Contracts\\Support\\Jsonable|\\Illuminate\\Support\\Stringable|array|string  $message
 * @param  array  $context
 * @return void
 */',
                'startLine' => 82,
                'endLine' => 85,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'currentClassName' => 'Illuminate\\Log\\Logger',
                'aliasName' => null,
            ],
            'error' => [
                'name' => 'error',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 94,
                        'endLine' => 94,
                        'startColumn' => 27,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 94,
                                'endLine' => 94,
                                'startTokenPos' => 276,
                                'startFilePos' => 2653,
                                'endTokenPos' => 277,
                                'endFilePos' => 2654,
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
                        'startLine' => 94,
                        'endLine' => 94,
                        'startColumn' => 37,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
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
 * Log an error message to the logs.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|\\Illuminate\\Contracts\\Support\\Jsonable|\\Illuminate\\Support\\Stringable|array|string  $message
 * @param  array  $context
 * @return void
 */',
                'startLine' => 94,
                'endLine' => 97,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'currentClassName' => 'Illuminate\\Log\\Logger',
                'aliasName' => null,
            ],
            'warning' => [
                'name' => 'warning',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 106,
                        'endLine' => 106,
                        'startColumn' => 29,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 106,
                                'endLine' => 106,
                                'startTokenPos' => 318,
                                'startFilePos' => 3054,
                                'endTokenPos' => 319,
                                'endFilePos' => 3055,
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
                        'startLine' => 106,
                        'endLine' => 106,
                        'startColumn' => 39,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => true,
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
 * Log a warning message to the logs.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|\\Illuminate\\Contracts\\Support\\Jsonable|\\Illuminate\\Support\\Stringable|array|string  $message
 * @param  array  $context
 * @return void
 */',
                'startLine' => 106,
                'endLine' => 109,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'currentClassName' => 'Illuminate\\Log\\Logger',
                'aliasName' => null,
            ],
            'notice' => [
                'name' => 'notice',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 118,
                        'endLine' => 118,
                        'startColumn' => 28,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 118,
                                'endLine' => 118,
                                'startTokenPos' => 360,
                                'startFilePos' => 3445,
                                'endTokenPos' => 361,
                                'endFilePos' => 3446,
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
                        'startLine' => 118,
                        'endLine' => 118,
                        'startColumn' => 38,
                        'endColumn' => 56,
                        'parameterIndex' => 1,
                        'isOptional' => true,
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
 * Log a notice to the logs.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|\\Illuminate\\Contracts\\Support\\Jsonable|\\Illuminate\\Support\\Stringable|array|string  $message
 * @param  array  $context
 * @return void
 */',
                'startLine' => 118,
                'endLine' => 121,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'currentClassName' => 'Illuminate\\Log\\Logger',
                'aliasName' => null,
            ],
            'info' => [
                'name' => 'info',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 130,
                        'endLine' => 130,
                        'startColumn' => 26,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 130,
                                'endLine' => 130,
                                'startTokenPos' => 402,
                                'startFilePos' => 3850,
                                'endTokenPos' => 403,
                                'endFilePos' => 3851,
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
                        'startLine' => 130,
                        'endLine' => 130,
                        'startColumn' => 36,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => true,
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
 * Log an informational message to the logs.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|\\Illuminate\\Contracts\\Support\\Jsonable|\\Illuminate\\Support\\Stringable|array|string  $message
 * @param  array  $context
 * @return void
 */',
                'startLine' => 130,
                'endLine' => 133,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'currentClassName' => 'Illuminate\\Log\\Logger',
                'aliasName' => null,
            ],
            'debug' => [
                'name' => 'debug',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 142,
                        'endLine' => 142,
                        'startColumn' => 27,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 142,
                                'endLine' => 142,
                                'startTokenPos' => 444,
                                'startFilePos' => 4247,
                                'endTokenPos' => 445,
                                'endFilePos' => 4248,
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
                        'startLine' => 142,
                        'endLine' => 142,
                        'startColumn' => 37,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
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
 * Log a debug message to the logs.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|\\Illuminate\\Contracts\\Support\\Jsonable|\\Illuminate\\Support\\Stringable|array|string  $message
 * @param  array  $context
 * @return void
 */',
                'startLine' => 142,
                'endLine' => 145,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'currentClassName' => 'Illuminate\\Log\\Logger',
                'aliasName' => null,
            ],
            'log' => [
                'name' => 'log',
                'parameters' => [
                    'level' => [
                        'name' => 'level',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 155,
                        'endLine' => 155,
                        'startColumn' => 25,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 155,
                        'endLine' => 155,
                        'startColumn' => 33,
                        'endColumn' => 40,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 155,
                                'endLine' => 155,
                                'startTokenPos' => 489,
                                'startFilePos' => 4674,
                                'endTokenPos' => 490,
                                'endFilePos' => 4675,
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
                        'startLine' => 155,
                        'endLine' => 155,
                        'startColumn' => 43,
                        'endColumn' => 61,
                        'parameterIndex' => 2,
                        'isOptional' => true,
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
 * Log a message to the logs.
 *
 * @param  string  $level
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|\\Illuminate\\Contracts\\Support\\Jsonable|\\Illuminate\\Support\\Stringable|array|string  $message
 * @param  array  $context
 * @return void
 */',
                'startLine' => 155,
                'endLine' => 158,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'currentClassName' => 'Illuminate\\Log\\Logger',
                'aliasName' => null,
            ],
            'write' => [
                'name' => 'write',
                'parameters' => [
                    'level' => [
                        'name' => 'level',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 168,
                        'endLine' => 168,
                        'startColumn' => 27,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 168,
                        'endLine' => 168,
                        'startColumn' => 35,
                        'endColumn' => 42,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 168,
                                'endLine' => 168,
                                'startTokenPos' => 534,
                                'startFilePos' => 5114,
                                'endTokenPos' => 535,
                                'endFilePos' => 5115,
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
                        'startLine' => 168,
                        'endLine' => 168,
                        'startColumn' => 45,
                        'endColumn' => 63,
                        'parameterIndex' => 2,
                        'isOptional' => true,
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
 * Dynamically pass log calls into the writer.
 *
 * @param  string  $level
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|\\Illuminate\\Contracts\\Support\\Jsonable|\\Illuminate\\Support\\Stringable|array|string  $message
 * @param  array  $context
 * @return void
 */',
                'startLine' => 168,
                'endLine' => 171,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'currentClassName' => 'Illuminate\\Log\\Logger',
                'aliasName' => null,
            ],
            'writeLog' => [
                'name' => 'writeLog',
                'parameters' => [
                    'level' => [
                        'name' => 'level',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 181,
                        'endLine' => 181,
                        'startColumn' => 33,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 181,
                        'endLine' => 181,
                        'startColumn' => 41,
                        'endColumn' => 48,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 181,
                        'endLine' => 181,
                        'startColumn' => 51,
                        'endColumn' => 58,
                        'parameterIndex' => 2,
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
 * Write a message to the log.
 *
 * @param  string  $level
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|\\Illuminate\\Contracts\\Support\\Jsonable|\\Illuminate\\Support\\Stringable|array|string  $message
 * @param  array  $context
 * @return void
 */',
                'startLine' => 181,
                'endLine' => 193,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'currentClassName' => 'Illuminate\\Log\\Logger',
                'aliasName' => null,
            ],
            'withContext' => [
                'name' => 'withContext',
                'parameters' => [
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 201,
                                'endLine' => 201,
                                'startTokenPos' => 683,
                                'startFilePos' => 6065,
                                'endTokenPos' => 684,
                                'endFilePos' => 6066,
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
                        'startLine' => 201,
                        'endLine' => 201,
                        'startColumn' => 33,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add context to all future logs.
 *
 * @param  array  $context
 * @return $this
 */',
                'startLine' => 201,
                'endLine' => 206,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'currentClassName' => 'Illuminate\\Log\\Logger',
                'aliasName' => null,
            ],
            'withoutContext' => [
                'name' => 'withoutContext',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 214,
                                'endLine' => 214,
                                'startTokenPos' => 728,
                                'startFilePos' => 6364,
                                'endTokenPos' => 728,
                                'endFilePos' => 6367,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'array',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'null',
                                            'isIdentifier' => true,
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
                        'startLine' => 214,
                        'endLine' => 214,
                        'startColumn' => 36,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Flush the log context on all currently resolved channels.
 *
 * @param  string[]|null  $keys
 * @return $this
 */',
                'startLine' => 214,
                'endLine' => 223,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'currentClassName' => 'Illuminate\\Log\\Logger',
                'aliasName' => null,
            ],
            'listen' => [
                'name' => 'listen',
                'parameters' => [
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
                        'startLine' => 233,
                        'endLine' => 233,
                        'startColumn' => 28,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a new callback handler for when a log event is triggered.
 *
 * @param  \\Closure  $callback
 * @return void
 *
 * @throws \\RuntimeException
 */',
                'startLine' => 233,
                'endLine' => 240,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'currentClassName' => 'Illuminate\\Log\\Logger',
                'aliasName' => null,
            ],
            'fireLogEvent' => [
                'name' => 'fireLogEvent',
                'parameters' => [
                    'level' => [
                        'name' => 'level',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 250,
                        'endLine' => 250,
                        'startColumn' => 37,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 250,
                        'endLine' => 250,
                        'startColumn' => 45,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 250,
                                'endLine' => 250,
                                'startTokenPos' => 868,
                                'startFilePos' => 7261,
                                'endTokenPos' => 869,
                                'endFilePos' => 7262,
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
                        'startLine' => 250,
                        'endLine' => 250,
                        'startColumn' => 55,
                        'endColumn' => 73,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Fires a log event.
 *
 * @param  string  $level
 * @param  string  $message
 * @param  array  $context
 * @return void
 */',
                'startLine' => 250,
                'endLine' => 262,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'currentClassName' => 'Illuminate\\Log\\Logger',
                'aliasName' => null,
            ],
            'formatMessage' => [
                'name' => 'formatMessage',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 270,
                        'endLine' => 270,
                        'startColumn' => 38,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Format the parameters for the logger.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|\\Illuminate\\Contracts\\Support\\Jsonable|\\Illuminate\\Support\\Stringable|array|string  $message
 * @return string
 */',
                'startLine' => 270,
                'endLine' => 278,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'currentClassName' => 'Illuminate\\Log\\Logger',
                'aliasName' => null,
            ],
            'getLogger' => [
                'name' => 'getLogger',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the underlying logger implementation.
 *
 * @return \\Psr\\Log\\LoggerInterface
 */',
                'startLine' => 285,
                'endLine' => 288,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'currentClassName' => 'Illuminate\\Log\\Logger',
                'aliasName' => null,
            ],
            'getEventDispatcher' => [
                'name' => 'getEventDispatcher',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the event dispatcher instance.
 *
 * @return \\Illuminate\\Contracts\\Events\\Dispatcher|null
 */',
                'startLine' => 295,
                'endLine' => 298,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'currentClassName' => 'Illuminate\\Log\\Logger',
                'aliasName' => null,
            ],
            'setEventDispatcher' => [
                'name' => 'setEventDispatcher',
                'parameters' => [
                    'dispatcher' => [
                        'name' => 'dispatcher',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 306,
                        'endLine' => 306,
                        'startColumn' => 40,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the event dispatcher instance.
 *
 * @param  \\Illuminate\\Contracts\\Events\\Dispatcher  $dispatcher
 * @return void
 */',
                'startLine' => 306,
                'endLine' => 309,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'currentClassName' => 'Illuminate\\Log\\Logger',
                'aliasName' => null,
            ],
            '__call' => [
                'name' => '__call',
                'parameters' => [
                    'method' => [
                        'name' => 'method',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 318,
                        'endLine' => 318,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 318,
                        'endLine' => 318,
                        'startColumn' => 37,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dynamically proxy method calls to the underlying logger.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */',
                'startLine' => 318,
                'endLine' => 321,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Log',
                'declaringClassName' => 'Illuminate\\Log\\Logger',
                'implementingClassName' => 'Illuminate\\Log\\Logger',
                'currentClassName' => 'Illuminate\\Log\\Logger',
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
