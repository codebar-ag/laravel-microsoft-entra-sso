<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../pestphp/pest/src/Mixins/Expectation.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pest\Mixins\Expectation
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-bbef1f03f306860bfa078264dc0e534d3708d2e77b27d9f647c5a8624327972c-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Pest\\Mixins\\Expectation',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../pestphp/pest/src/Mixins/Expectation.php',
            ],
        ],
        'namespace' => 'Pest\\Mixins',
        'name' => 'Pest\\Mixins\\Expectation',
        'shortName' => 'Expectation',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 32,
        'docComment' => '/**
 * @internal
 *
 * @template TValue
 *
 * @mixin \\Pest\\Expectation<TValue>
 */',
        'attributes' => [
        ],
        'startLine' => 37,
        'endLine' => 1174,
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
            'exporter' => [
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'name' => 'exporter',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Pest\\Support\\Exporter',
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 42,
                        'endLine' => 42,
                        'startTokenPos' => 146,
                        'startFilePos' => 824,
                        'endTokenPos' => 146,
                        'endFilePos' => 827,
                    ],
                ],
                'docComment' => '/**
 * The exporter instance, if any.
 */',
                'attributes' => [
                ],
                'startLine' => 42,
                'endLine' => 42,
                'startColumn' => 5,
                'endColumn' => 39,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'value' => [
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'name' => 'value',
                'modifiers' => 1,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'mixed',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 50,
                'endLine' => 50,
                'startColumn' => 9,
                'endColumn' => 27,
                'isPromoted' => true,
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
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 50,
                        'endLine' => 50,
                        'startColumn' => 9,
                        'endColumn' => 27,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Creates a new expectation.
 *
 * @param  TValue  $value
 */',
                'startLine' => 49,
                'endLine' => 53,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBe' => [
                'name' => 'toBe',
                'parameters' => [
                    'expected' => [
                        'name' => 'expected',
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
                        'startLine' => 62,
                        'endLine' => 62,
                        'startColumn' => 26,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 62,
                                'endLine' => 62,
                                'startTokenPos' => 191,
                                'startFilePos' => 1271,
                                'endTokenPos' => 191,
                                'endFilePos' => 1272,
                            ],
                        ],
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
                        'startLine' => 62,
                        'endLine' => 62,
                        'startColumn' => 43,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that two variables have the same type and
 * value. Used on objects, it asserts that two
 * variables reference the same object.
 *
 * @return self<TValue>
 */',
                'startLine' => 62,
                'endLine' => 67,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeEmpty' => [
                'name' => 'toBeEmpty',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 74,
                                'endLine' => 74,
                                'startTokenPos' => 236,
                                'startFilePos' => 1519,
                                'endTokenPos' => 236,
                                'endFilePos' => 1520,
                            ],
                        ],
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
                        'startLine' => 74,
                        'endLine' => 74,
                        'startColumn' => 31,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is empty.
 *
 * @return self<TValue>
 */',
                'startLine' => 74,
                'endLine' => 79,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeTrue' => [
                'name' => 'toBeTrue',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 86,
                                'endLine' => 86,
                                'startTokenPos' => 278,
                                'startFilePos' => 1755,
                                'endTokenPos' => 278,
                                'endFilePos' => 1756,
                            ],
                        ],
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
                        'startLine' => 86,
                        'endLine' => 86,
                        'startColumn' => 30,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is true.
 *
 * @return self<TValue>
 */',
                'startLine' => 86,
                'endLine' => 91,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeTruthy' => [
                'name' => 'toBeTruthy',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 98,
                                'endLine' => 98,
                                'startTokenPos' => 320,
                                'startFilePos' => 1994,
                                'endTokenPos' => 320,
                                'endFilePos' => 1995,
                            ],
                        ],
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
                        'startLine' => 98,
                        'endLine' => 98,
                        'startColumn' => 32,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is truthy.
 *
 * @return self<TValue>
 */',
                'startLine' => 98,
                'endLine' => 103,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeFalse' => [
                'name' => 'toBeFalse',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 110,
                                'endLine' => 110,
                                'startTokenPos' => 364,
                                'startFilePos' => 2238,
                                'endTokenPos' => 364,
                                'endFilePos' => 2239,
                            ],
                        ],
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
                        'startLine' => 110,
                        'endLine' => 110,
                        'startColumn' => 31,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is false.
 *
 * @return self<TValue>
 */',
                'startLine' => 110,
                'endLine' => 115,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeFalsy' => [
                'name' => 'toBeFalsy',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 122,
                                'endLine' => 122,
                                'startTokenPos' => 406,
                                'startFilePos' => 2476,
                                'endTokenPos' => 406,
                                'endFilePos' => 2477,
                            ],
                        ],
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
                        'startLine' => 122,
                        'endLine' => 122,
                        'startColumn' => 31,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is falsy.
 *
 * @return self<TValue>
 */',
                'startLine' => 122,
                'endLine' => 127,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeGreaterThan' => [
                'name' => 'toBeGreaterThan',
                'parameters' => [
                    'expected' => [
                        'name' => 'expected',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
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
                        'startLine' => 134,
                        'endLine' => 134,
                        'startColumn' => 37,
                        'endColumn' => 80,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 134,
                                'endLine' => 134,
                                'startTokenPos' => 461,
                                'startFilePos' => 2790,
                                'endTokenPos' => 461,
                                'endFilePos' => 2791,
                            ],
                        ],
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
                        'startColumn' => 83,
                        'endColumn' => 102,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is greater than $expected.
 *
 * @return self<TValue>
 */',
                'startLine' => 134,
                'endLine' => 139,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeGreaterThanOrEqual' => [
                'name' => 'toBeGreaterThanOrEqual',
                'parameters' => [
                    'expected' => [
                        'name' => 'expected',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
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
                        'startLine' => 146,
                        'endLine' => 146,
                        'startColumn' => 44,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 146,
                                'endLine' => 146,
                                'startTokenPos' => 517,
                                'startFilePos' => 3133,
                                'endTokenPos' => 517,
                                'endFilePos' => 3134,
                            ],
                        ],
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
                        'startLine' => 146,
                        'endLine' => 146,
                        'startColumn' => 90,
                        'endColumn' => 109,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is greater than or equal to $expected.
 *
 * @return self<TValue>
 */',
                'startLine' => 146,
                'endLine' => 151,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeLessThan' => [
                'name' => 'toBeLessThan',
                'parameters' => [
                    'expected' => [
                        'name' => 'expected',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
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
                        'startLine' => 158,
                        'endLine' => 158,
                        'startColumn' => 34,
                        'endColumn' => 77,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 158,
                                'endLine' => 158,
                                'startTokenPos' => 573,
                                'startFilePos' => 3470,
                                'endTokenPos' => 573,
                                'endFilePos' => 3471,
                            ],
                        ],
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
                        'startLine' => 158,
                        'endLine' => 158,
                        'startColumn' => 80,
                        'endColumn' => 99,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is less than or equal to $expected.
 *
 * @return self<TValue>
 */',
                'startLine' => 158,
                'endLine' => 163,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeLessThanOrEqual' => [
                'name' => 'toBeLessThanOrEqual',
                'parameters' => [
                    'expected' => [
                        'name' => 'expected',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
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
                        'startLine' => 170,
                        'endLine' => 170,
                        'startColumn' => 41,
                        'endColumn' => 84,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 170,
                                'endLine' => 170,
                                'startTokenPos' => 629,
                                'startFilePos' => 3792,
                                'endTokenPos' => 629,
                                'endFilePos' => 3793,
                            ],
                        ],
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
                        'startLine' => 170,
                        'endLine' => 170,
                        'startColumn' => 87,
                        'endColumn' => 106,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is less than $expected.
 *
 * @return self<TValue>
 */',
                'startLine' => 170,
                'endLine' => 175,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toContain' => [
                'name' => 'toContain',
                'parameters' => [
                    'needles' => [
                        'name' => 'needles',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 182,
                        'endLine' => 182,
                        'startColumn' => 31,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that $needle is an element of the value.
 *
 * @return self<TValue>
 */',
                'startLine' => 182,
                'endLine' => 196,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toContainEqual' => [
                'name' => 'toContainEqual',
                'parameters' => [
                    'needles' => [
                        'name' => 'needles',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 203,
                        'endLine' => 203,
                        'startColumn' => 36,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that $needle equal an element of the value.
 *
 * @return self<TValue>
 */',
                'startLine' => 203,
                'endLine' => 214,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toStartWith' => [
                'name' => 'toStartWith',
                'parameters' => [
                    'expected' => [
                        'name' => 'expected',
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
                        'startLine' => 222,
                        'endLine' => 222,
                        'startColumn' => 33,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 222,
                                'endLine' => 222,
                                'startTokenPos' => 871,
                                'startFilePos' => 5170,
                                'endTokenPos' => 871,
                                'endFilePos' => 5171,
                            ],
                        ],
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
                        'startLine' => 222,
                        'endLine' => 222,
                        'startColumn' => 51,
                        'endColumn' => 70,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value starts with $expected.
 *
 * @param  non-empty-string  $expected
 * @return self<TValue>
 */',
                'startLine' => 222,
                'endLine' => 231,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toEndWith' => [
                'name' => 'toEndWith',
                'parameters' => [
                    'expected' => [
                        'name' => 'expected',
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
                        'startLine' => 239,
                        'endLine' => 239,
                        'startColumn' => 31,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 239,
                                'endLine' => 239,
                                'startTokenPos' => 946,
                                'startFilePos' => 5611,
                                'endTokenPos' => 946,
                                'endFilePos' => 5612,
                            ],
                        ],
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
                        'startLine' => 239,
                        'endLine' => 239,
                        'startColumn' => 49,
                        'endColumn' => 68,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value ends with $expected.
 *
 * @param  non-empty-string  $expected
 * @return self<TValue>
 */',
                'startLine' => 239,
                'endLine' => 248,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toHaveLength' => [
                'name' => 'toHaveLength',
                'parameters' => [
                    'number' => [
                        'name' => 'number',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 255,
                        'endLine' => 255,
                        'startColumn' => 34,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 255,
                                'endLine' => 255,
                                'startTokenPos' => 1021,
                                'startFilePos' => 6006,
                                'endTokenPos' => 1021,
                                'endFilePos' => 6007,
                            ],
                        ],
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
                        'startLine' => 255,
                        'endLine' => 255,
                        'startColumn' => 47,
                        'endColumn' => 66,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that $number matches value\'s Length.
 *
 * @return self<TValue>
 */',
                'startLine' => 255,
                'endLine' => 276,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toHaveCount' => [
                'name' => 'toHaveCount',
                'parameters' => [
                    'count' => [
                        'name' => 'count',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 283,
                        'endLine' => 283,
                        'startColumn' => 33,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 283,
                                'endLine' => 283,
                                'startTokenPos' => 1194,
                                'startFilePos' => 6815,
                                'endTokenPos' => 1194,
                                'endFilePos' => 6816,
                            ],
                        ],
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
                        'startLine' => 283,
                        'endLine' => 283,
                        'startColumn' => 45,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that $count matches the number of elements of the value.
 *
 * @return self<TValue>
 */',
                'startLine' => 283,
                'endLine' => 292,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toHaveSameSize' => [
                'name' => 'toHaveSameSize',
                'parameters' => [
                    'expected' => [
                        'name' => 'expected',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Countable',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'iterable',
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
                        'startLine' => 300,
                        'endLine' => 300,
                        'startColumn' => 36,
                        'endColumn' => 63,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 300,
                                'endLine' => 300,
                                'startTokenPos' => 1282,
                                'startFilePos' => 7333,
                                'endTokenPos' => 1282,
                                'endFilePos' => 7334,
                            ],
                        ],
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
                        'startLine' => 300,
                        'endLine' => 300,
                        'startColumn' => 66,
                        'endColumn' => 85,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the size of the value and $expected are the same.
 *
 * @param  Countable|iterable<mixed>  $expected
 * @return self<TValue>
 */',
                'startLine' => 300,
                'endLine' => 309,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toHaveProperty' => [
                'name' => 'toHaveProperty',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
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
                        'startLine' => 316,
                        'endLine' => 316,
                        'startColumn' => 36,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'new \\Pest\\Matchers\\Any()',
                            'attributes' => [
                                'startLine' => 316,
                                'endLine' => 316,
                                'startTokenPos' => 1368,
                                'startFilePos' => 7775,
                                'endTokenPos' => 1370,
                                'endFilePos' => 7781,
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
                        'startLine' => 316,
                        'endLine' => 316,
                        'startColumn' => 50,
                        'endColumn' => 71,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 316,
                                'endLine' => 316,
                                'startTokenPos' => 1379,
                                'startFilePos' => 7802,
                                'endTokenPos' => 1379,
                                'endFilePos' => 7803,
                            ],
                        ],
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
                        'startLine' => 316,
                        'endLine' => 316,
                        'startColumn' => 74,
                        'endColumn' => 93,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value contains the property $name.
 *
 * @return self<TValue>
 */',
                'startLine' => 316,
                'endLine' => 329,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toHaveProperties' => [
                'name' => 'toHaveProperties',
                'parameters' => [
                    'names' => [
                        'name' => 'names',
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
                        'startLine' => 337,
                        'endLine' => 337,
                        'startColumn' => 38,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 337,
                                'endLine' => 337,
                                'startTokenPos' => 1479,
                                'startFilePos' => 8423,
                                'endTokenPos' => 1479,
                                'endFilePos' => 8424,
                            ],
                        ],
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
                        'startLine' => 337,
                        'endLine' => 337,
                        'startColumn' => 55,
                        'endColumn' => 74,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value contains the provided properties $names.
 *
 * @param  iterable<string, mixed>|iterable<int, string>  $names
 * @return self<TValue>
 */',
                'startLine' => 337,
                'endLine' => 344,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toEqual' => [
                'name' => 'toEqual',
                'parameters' => [
                    'expected' => [
                        'name' => 'expected',
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
                        'startLine' => 351,
                        'endLine' => 351,
                        'startColumn' => 29,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 351,
                                'endLine' => 351,
                                'startTokenPos' => 1569,
                                'startFilePos' => 8845,
                                'endTokenPos' => 1569,
                                'endFilePos' => 8846,
                            ],
                        ],
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
                        'startLine' => 351,
                        'endLine' => 351,
                        'startColumn' => 46,
                        'endColumn' => 65,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that two variables have the same value.
 *
 * @return self<TValue>
 */',
                'startLine' => 351,
                'endLine' => 356,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toEqualCanonicalizing' => [
                'name' => 'toEqualCanonicalizing',
                'parameters' => [
                    'expected' => [
                        'name' => 'expected',
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
                        'startLine' => 369,
                        'endLine' => 369,
                        'startColumn' => 43,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 369,
                                'endLine' => 369,
                                'startTokenPos' => 1619,
                                'startFilePos' => 9542,
                                'endTokenPos' => 1619,
                                'endFilePos' => 9543,
                            ],
                        ],
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
                        'startLine' => 369,
                        'endLine' => 369,
                        'startColumn' => 60,
                        'endColumn' => 79,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that two variables have the same value.
 * The contents of $expected and the $this->value are
 * canonicalized before they are compared. For instance, when the two
 * variables $expected and $this->value are arrays, then these arrays
 * are sorted before they are compared. When $expected and $this->value
 * are objects, each object is converted to an array containing all
 * private, protected and public attributes.
 *
 * @return self<TValue>
 */',
                'startLine' => 369,
                'endLine' => 374,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toEqualWithDelta' => [
                'name' => 'toEqualWithDelta',
                'parameters' => [
                    'expected' => [
                        'name' => 'expected',
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
                        'startLine' => 382,
                        'endLine' => 382,
                        'startColumn' => 38,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'delta' => [
                        'name' => 'delta',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'float',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 382,
                        'endLine' => 382,
                        'startColumn' => 55,
                        'endColumn' => 66,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 382,
                                'endLine' => 382,
                                'startTokenPos' => 1674,
                                'startFilePos' => 9909,
                                'endTokenPos' => 1674,
                                'endFilePos' => 9910,
                            ],
                        ],
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
                        'startLine' => 382,
                        'endLine' => 382,
                        'startColumn' => 69,
                        'endColumn' => 88,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the absolute difference between the value and $expected
 * is lower than $delta.
 *
 * @return self<TValue>
 */',
                'startLine' => 382,
                'endLine' => 387,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeIn' => [
                'name' => 'toBeIn',
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
                        'startLine' => 395,
                        'endLine' => 395,
                        'startColumn' => 28,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 395,
                                'endLine' => 395,
                                'startTokenPos' => 1727,
                                'startFilePos' => 10261,
                                'endTokenPos' => 1727,
                                'endFilePos' => 10262,
                            ],
                        ],
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
                        'startLine' => 395,
                        'endLine' => 395,
                        'startColumn' => 46,
                        'endColumn' => 65,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is one of the given values.
 *
 * @param  iterable<int|string, mixed>  $values
 * @return self<TValue>
 */',
                'startLine' => 395,
                'endLine' => 400,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeInfinite' => [
                'name' => 'toBeInfinite',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 407,
                                'endLine' => 407,
                                'startTokenPos' => 1772,
                                'startFilePos' => 10517,
                                'endTokenPos' => 1772,
                                'endFilePos' => 10518,
                            ],
                        ],
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
                        'startLine' => 407,
                        'endLine' => 407,
                        'startColumn' => 34,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is infinite.
 *
 * @return self<TValue>
 */',
                'startLine' => 407,
                'endLine' => 412,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeInstanceOf' => [
                'name' => 'toBeInstanceOf',
                'parameters' => [
                    'class' => [
                        'name' => 'class',
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
                        'startLine' => 420,
                        'endLine' => 420,
                        'startColumn' => 36,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 420,
                                'endLine' => 420,
                                'startTokenPos' => 1819,
                                'startFilePos' => 10830,
                                'endTokenPos' => 1819,
                                'endFilePos' => 10831,
                            ],
                        ],
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
                        'startLine' => 420,
                        'endLine' => 420,
                        'startColumn' => 51,
                        'endColumn' => 70,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is an instance of $class.
 *
 * @param  class-string  $class
 * @return self<TValue>
 */',
                'startLine' => 420,
                'endLine' => 425,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeArray' => [
                'name' => 'toBeArray',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 432,
                                'endLine' => 432,
                                'startTokenPos' => 1864,
                                'startFilePos' => 11084,
                                'endTokenPos' => 1864,
                                'endFilePos' => 11085,
                            ],
                        ],
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
                        'startLine' => 432,
                        'endLine' => 432,
                        'startColumn' => 31,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is an array.
 *
 * @return self<TValue>
 */',
                'startLine' => 432,
                'endLine' => 437,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeList' => [
                'name' => 'toBeList',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 444,
                                'endLine' => 444,
                                'startTokenPos' => 1906,
                                'startFilePos' => 11324,
                                'endTokenPos' => 1906,
                                'endFilePos' => 11325,
                            ],
                        ],
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
                        'startLine' => 444,
                        'endLine' => 444,
                        'startColumn' => 30,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is a list.
 *
 * @return self<TValue>
 */',
                'startLine' => 444,
                'endLine' => 449,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeBool' => [
                'name' => 'toBeBool',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 456,
                                'endLine' => 456,
                                'startTokenPos' => 1948,
                                'startFilePos' => 11569,
                                'endTokenPos' => 1948,
                                'endFilePos' => 11570,
                            ],
                        ],
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
                        'startLine' => 456,
                        'endLine' => 456,
                        'startColumn' => 30,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is of type bool.
 *
 * @return self<TValue>
 */',
                'startLine' => 456,
                'endLine' => 461,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeCallable' => [
                'name' => 'toBeCallable',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 468,
                                'endLine' => 468,
                                'startTokenPos' => 1990,
                                'startFilePos' => 11822,
                                'endTokenPos' => 1990,
                                'endFilePos' => 11823,
                            ],
                        ],
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
                        'startLine' => 468,
                        'endLine' => 468,
                        'startColumn' => 34,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is of type callable.
 *
 * @return self<TValue>
 */',
                'startLine' => 468,
                'endLine' => 473,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeFloat' => [
                'name' => 'toBeFloat',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 480,
                                'endLine' => 480,
                                'startTokenPos' => 2032,
                                'startFilePos' => 12073,
                                'endTokenPos' => 2032,
                                'endFilePos' => 12074,
                            ],
                        ],
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
                        'startLine' => 480,
                        'endLine' => 480,
                        'startColumn' => 31,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is of type float.
 *
 * @return self<TValue>
 */',
                'startLine' => 480,
                'endLine' => 485,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeInt' => [
                'name' => 'toBeInt',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 492,
                                'endLine' => 492,
                                'startTokenPos' => 2074,
                                'startFilePos' => 12317,
                                'endTokenPos' => 2074,
                                'endFilePos' => 12318,
                            ],
                        ],
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
                        'startLine' => 492,
                        'endLine' => 492,
                        'startColumn' => 29,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is of type int.
 *
 * @return self<TValue>
 */',
                'startLine' => 492,
                'endLine' => 497,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeIterable' => [
                'name' => 'toBeIterable',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 504,
                                'endLine' => 504,
                                'startTokenPos' => 2116,
                                'startFilePos' => 12569,
                                'endTokenPos' => 2116,
                                'endFilePos' => 12570,
                            ],
                        ],
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
                        'startLine' => 504,
                        'endLine' => 504,
                        'startColumn' => 34,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is of type iterable.
 *
 * @return self<TValue>
 */',
                'startLine' => 504,
                'endLine' => 509,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeNumeric' => [
                'name' => 'toBeNumeric',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 516,
                                'endLine' => 516,
                                'startTokenPos' => 2158,
                                'startFilePos' => 12824,
                                'endTokenPos' => 2158,
                                'endFilePos' => 12825,
                            ],
                        ],
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
                        'startLine' => 516,
                        'endLine' => 516,
                        'startColumn' => 33,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is of type numeric.
 *
 * @return self<TValue>
 */',
                'startLine' => 516,
                'endLine' => 521,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeDigits' => [
                'name' => 'toBeDigits',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 528,
                                'endLine' => 528,
                                'startTokenPos' => 2200,
                                'startFilePos' => 13079,
                                'endTokenPos' => 2200,
                                'endFilePos' => 13080,
                            ],
                        ],
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
                        'startLine' => 528,
                        'endLine' => 528,
                        'startColumn' => 32,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value contains only digits.
 *
 * @return self<TValue>
 */',
                'startLine' => 528,
                'endLine' => 533,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeObject' => [
                'name' => 'toBeObject',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 540,
                                'endLine' => 540,
                                'startTokenPos' => 2247,
                                'startFilePos' => 13348,
                                'endTokenPos' => 2247,
                                'endFilePos' => 13349,
                            ],
                        ],
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
                        'startLine' => 540,
                        'endLine' => 540,
                        'startColumn' => 32,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is of type object.
 *
 * @return self<TValue>
 */',
                'startLine' => 540,
                'endLine' => 545,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeResource' => [
                'name' => 'toBeResource',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 552,
                                'endLine' => 552,
                                'startTokenPos' => 2289,
                                'startFilePos' => 13603,
                                'endTokenPos' => 2289,
                                'endFilePos' => 13604,
                            ],
                        ],
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
                        'startLine' => 552,
                        'endLine' => 552,
                        'startColumn' => 34,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is of type resource.
 *
 * @return self<TValue>
 */',
                'startLine' => 552,
                'endLine' => 557,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeScalar' => [
                'name' => 'toBeScalar',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 564,
                                'endLine' => 564,
                                'startTokenPos' => 2331,
                                'startFilePos' => 13856,
                                'endTokenPos' => 2331,
                                'endFilePos' => 13857,
                            ],
                        ],
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
                        'startLine' => 564,
                        'endLine' => 564,
                        'startColumn' => 32,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is of type scalar.
 *
 * @return self<TValue>
 */',
                'startLine' => 564,
                'endLine' => 569,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeString' => [
                'name' => 'toBeString',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 576,
                                'endLine' => 576,
                                'startTokenPos' => 2373,
                                'startFilePos' => 14107,
                                'endTokenPos' => 2373,
                                'endFilePos' => 14108,
                            ],
                        ],
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
                        'startLine' => 576,
                        'endLine' => 576,
                        'startColumn' => 32,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is of type string.
 *
 * @return self<TValue>
 */',
                'startLine' => 576,
                'endLine' => 581,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeJson' => [
                'name' => 'toBeJson',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 588,
                                'endLine' => 588,
                                'startTokenPos' => 2415,
                                'startFilePos' => 14355,
                                'endTokenPos' => 2415,
                                'endFilePos' => 14356,
                            ],
                        ],
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
                        'startLine' => 588,
                        'endLine' => 588,
                        'startColumn' => 30,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is a JSON string.
 *
 * @return self<TValue>
 */',
                'startLine' => 588,
                'endLine' => 595,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeNan' => [
                'name' => 'toBeNan',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 602,
                                'endLine' => 602,
                                'startTokenPos' => 2470,
                                'startFilePos' => 14645,
                                'endTokenPos' => 2470,
                                'endFilePos' => 14646,
                            ],
                        ],
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
                        'startLine' => 602,
                        'endLine' => 602,
                        'startColumn' => 29,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is NAN.
 *
 * @return self<TValue>
 */',
                'startLine' => 602,
                'endLine' => 607,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeNull' => [
                'name' => 'toBeNull',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 614,
                                'endLine' => 614,
                                'startTokenPos' => 2512,
                                'startFilePos' => 14879,
                                'endTokenPos' => 2512,
                                'endFilePos' => 14880,
                            ],
                        ],
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
                        'startLine' => 614,
                        'endLine' => 614,
                        'startColumn' => 30,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is null.
 *
 * @return self<TValue>
 */',
                'startLine' => 614,
                'endLine' => 619,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toHaveKey' => [
                'name' => 'toHaveKey',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                                ],
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 626,
                        'endLine' => 626,
                        'startColumn' => 31,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'new \\Pest\\Matchers\\Any()',
                            'attributes' => [
                                'startLine' => 626,
                                'endLine' => 626,
                                'startTokenPos' => 2561,
                                'startFilePos' => 15149,
                                'endTokenPos' => 2563,
                                'endFilePos' => 15155,
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
                        'startLine' => 626,
                        'endLine' => 626,
                        'startColumn' => 48,
                        'endColumn' => 69,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 626,
                                'endLine' => 626,
                                'startTokenPos' => 2572,
                                'startFilePos' => 15176,
                                'endTokenPos' => 2572,
                                'endFilePos' => 15177,
                            ],
                        ],
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
                        'startLine' => 626,
                        'endLine' => 626,
                        'startColumn' => 72,
                        'endColumn' => 91,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value array has the provided $key.
 *
 * @return self<TValue>
 */',
                'startLine' => 626,
                'endLine' => 651,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toHaveKeys' => [
                'name' => 'toHaveKeys',
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
                        'startLine' => 659,
                        'endLine' => 659,
                        'startColumn' => 32,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 659,
                                'endLine' => 659,
                                'startTokenPos' => 2779,
                                'startFilePos' => 16197,
                                'endTokenPos' => 2779,
                                'endFilePos' => 16198,
                            ],
                        ],
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
                        'startLine' => 659,
                        'endLine' => 659,
                        'startColumn' => 45,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value array has the provided $keys.
 *
 * @param  array<int, int|string|array<array-key, mixed>>  $keys
 * @return self<TValue>
 */',
                'startLine' => 659,
                'endLine' => 670,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeDirectory' => [
                'name' => 'toBeDirectory',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 677,
                                'endLine' => 677,
                                'startTokenPos' => 2883,
                                'startFilePos' => 16651,
                                'endTokenPos' => 2883,
                                'endFilePos' => 16652,
                            ],
                        ],
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
                        'startLine' => 677,
                        'endLine' => 677,
                        'startColumn' => 35,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is a directory.
 *
 * @return self<TValue>
 */',
                'startLine' => 677,
                'endLine' => 686,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeReadableDirectory' => [
                'name' => 'toBeReadableDirectory',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 693,
                                'endLine' => 693,
                                'startTokenPos' => 2950,
                                'startFilePos' => 17042,
                                'endTokenPos' => 2950,
                                'endFilePos' => 17043,
                            ],
                        ],
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
                        'startLine' => 693,
                        'endLine' => 693,
                        'startColumn' => 43,
                        'endColumn' => 62,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is a directory and is readable.
 *
 * @return self<TValue>
 */',
                'startLine' => 693,
                'endLine' => 702,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeWritableDirectory' => [
                'name' => 'toBeWritableDirectory',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 709,
                                'endLine' => 709,
                                'startTokenPos' => 3017,
                                'startFilePos' => 17437,
                                'endTokenPos' => 3017,
                                'endFilePos' => 17438,
                            ],
                        ],
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
                        'startLine' => 709,
                        'endLine' => 709,
                        'startColumn' => 43,
                        'endColumn' => 62,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is a directory and is writable.
 *
 * @return self<TValue>
 */',
                'startLine' => 709,
                'endLine' => 718,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeFile' => [
                'name' => 'toBeFile',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 725,
                                'endLine' => 725,
                                'startTokenPos' => 3084,
                                'startFilePos' => 17798,
                                'endTokenPos' => 3084,
                                'endFilePos' => 17799,
                            ],
                        ],
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
                        'startLine' => 725,
                        'endLine' => 725,
                        'startColumn' => 30,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is a file.
 *
 * @return self<TValue>
 */',
                'startLine' => 725,
                'endLine' => 734,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeReadableFile' => [
                'name' => 'toBeReadableFile',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 741,
                                'endLine' => 741,
                                'startTokenPos' => 3151,
                                'startFilePos' => 18174,
                                'endTokenPos' => 3151,
                                'endFilePos' => 18175,
                            ],
                        ],
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
                        'startLine' => 741,
                        'endLine' => 741,
                        'startColumn' => 38,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is a file and is readable.
 *
 * @return self<TValue>
 */',
                'startLine' => 741,
                'endLine' => 750,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeWritableFile' => [
                'name' => 'toBeWritableFile',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 757,
                                'endLine' => 757,
                                'startTokenPos' => 3218,
                                'startFilePos' => 18554,
                                'endTokenPos' => 3218,
                                'endFilePos' => 18555,
                            ],
                        ],
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
                        'startLine' => 757,
                        'endLine' => 757,
                        'startColumn' => 38,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is a file and is writable.
 *
 * @return self<TValue>
 */',
                'startLine' => 757,
                'endLine' => 765,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toMatchArray' => [
                'name' => 'toMatchArray',
                'parameters' => [
                    'array' => [
                        'name' => 'array',
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
                        'startLine' => 773,
                        'endLine' => 773,
                        'startColumn' => 34,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 773,
                                'endLine' => 773,
                                'startTokenPos' => 3290,
                                'startFilePos' => 19008,
                                'endTokenPos' => 3290,
                                'endFilePos' => 19009,
                            ],
                        ],
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
                        'startLine' => 773,
                        'endLine' => 773,
                        'startColumn' => 51,
                        'endColumn' => 70,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value array matches the given array subset.
 *
 * @param  iterable<int|string, mixed>  $array
 * @return self<TValue>
 */',
                'startLine' => 773,
                'endLine' => 794,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toMatchObject' => [
                'name' => 'toMatchObject',
                'parameters' => [
                    'object' => [
                        'name' => 'object',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'object',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'iterable',
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
                        'startLine' => 803,
                        'endLine' => 803,
                        'startColumn' => 35,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 803,
                                'endLine' => 803,
                                'startTokenPos' => 3476,
                                'startFilePos' => 20000,
                                'endTokenPos' => 3476,
                                'endFilePos' => 20001,
                            ],
                        ],
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
                        'startLine' => 803,
                        'endLine' => 803,
                        'startColumn' => 60,
                        'endColumn' => 79,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value object matches a subset
 * of the properties of an given object.
 *
 * @param  iterable<string, mixed>  $object
 * @return self<TValue>
 */',
                'startLine' => 803,
                'endLine' => 825,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toMatchSnapshot' => [
                'name' => 'toMatchSnapshot',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 832,
                                'endLine' => 832,
                                'startTokenPos' => 3650,
                                'startFilePos' => 20969,
                                'endTokenPos' => 3650,
                                'endFilePos' => 20970,
                            ],
                        ],
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
                        'startLine' => 832,
                        'endLine' => 832,
                        'startColumn' => 37,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value "stringable" matches the given snapshot..
 *
 * @return self<TValue>
 */',
                'startLine' => 832,
                'endLine' => 868,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toMatch' => [
                'name' => 'toMatch',
                'parameters' => [
                    'expression' => [
                        'name' => 'expression',
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
                        'startLine' => 875,
                        'endLine' => 875,
                        'startColumn' => 29,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 875,
                                'endLine' => 875,
                                'startTokenPos' => 4134,
                                'startFilePos' => 23135,
                                'endTokenPos' => 4134,
                                'endFilePos' => 23136,
                            ],
                        ],
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
                        'startLine' => 875,
                        'endLine' => 875,
                        'startColumn' => 49,
                        'endColumn' => 68,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value matches a regular expression.
 *
 * @return self<TValue>
 */',
                'startLine' => 875,
                'endLine' => 883,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toMatchConstraint' => [
                'name' => 'toMatchConstraint',
                'parameters' => [
                    'constraint' => [
                        'name' => 'constraint',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'PHPUnit\\Framework\\Constraint\\Constraint',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 890,
                        'endLine' => 890,
                        'startColumn' => 39,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 890,
                                'endLine' => 890,
                                'startTokenPos' => 4209,
                                'startFilePos' => 23557,
                                'endTokenPos' => 4209,
                                'endFilePos' => 23558,
                            ],
                        ],
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
                        'startLine' => 890,
                        'endLine' => 890,
                        'startColumn' => 63,
                        'endColumn' => 82,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value matches a constraint.
 *
 * @return self<TValue>
 */',
                'startLine' => 890,
                'endLine' => 895,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toContainOnlyInstancesOf' => [
                'name' => 'toContainOnlyInstancesOf',
                'parameters' => [
                    'class' => [
                        'name' => 'class',
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
                        'startLine' => 901,
                        'endLine' => 901,
                        'startColumn' => 46,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 901,
                                'endLine' => 901,
                                'startTokenPos' => 4259,
                                'startFilePos' => 23826,
                                'endTokenPos' => 4259,
                                'endFilePos' => 23827,
                            ],
                        ],
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
                        'startLine' => 901,
                        'endLine' => 901,
                        'startColumn' => 61,
                        'endColumn' => 80,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * @param  class-string  $class
 * @return self<TValue>
 */',
                'startLine' => 901,
                'endLine' => 910,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toThrow' => [
                'name' => 'toThrow',
                'parameters' => [
                    'exception' => [
                        'name' => 'exception',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'callable',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Throwable',
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
                        'startLine' => 918,
                        'endLine' => 918,
                        'startColumn' => 29,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'exceptionMessage' => [
                        'name' => 'exceptionMessage',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 918,
                                'endLine' => 918,
                                'startTokenPos' => 4339,
                                'startFilePos' => 24328,
                                'endTokenPos' => 4339,
                                'endFilePos' => 24331,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 918,
                        'endLine' => 918,
                        'startColumn' => 67,
                        'endColumn' => 98,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 918,
                                'endLine' => 918,
                                'startTokenPos' => 4348,
                                'startFilePos' => 24352,
                                'endTokenPos' => 4348,
                                'endFilePos' => 24353,
                            ],
                        ],
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
                        'startLine' => 918,
                        'endLine' => 918,
                        'startColumn' => 101,
                        'endColumn' => 120,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that executing value throws an exception.
 *
 * @param  (Closure(Throwable): mixed)|string  $exception
 * @return self<TValue>
 */',
                'startLine' => 918,
                'endLine' => 979,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'export' => [
                'name' => 'export',
                'parameters' => [
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
                        'startLine' => 984,
                        'endLine' => 984,
                        'startColumn' => 29,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
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
 * Exports the given value.
 */',
                'startLine' => 984,
                'endLine' => 991,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeUppercase' => [
                'name' => 'toBeUppercase',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 998,
                                'endLine' => 998,
                                'startTokenPos' => 4850,
                                'startFilePos' => 26864,
                                'endTokenPos' => 4850,
                                'endFilePos' => 26865,
                            ],
                        ],
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
                        'startLine' => 998,
                        'endLine' => 998,
                        'startColumn' => 35,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is uppercase.
 *
 * @return self<TValue>
 */',
                'startLine' => 998,
                'endLine' => 1003,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeLowercase' => [
                'name' => 'toBeLowercase',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 1010,
                                'endLine' => 1010,
                                'startTokenPos' => 4897,
                                'startFilePos' => 27131,
                                'endTokenPos' => 4897,
                                'endFilePos' => 27132,
                            ],
                        ],
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
                        'startLine' => 1010,
                        'endLine' => 1010,
                        'startColumn' => 35,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is lowercase.
 *
 * @return self<TValue>
 */',
                'startLine' => 1010,
                'endLine' => 1015,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeAlphaNumeric' => [
                'name' => 'toBeAlphaNumeric',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 1022,
                                'endLine' => 1022,
                                'startTokenPos' => 4944,
                                'startFilePos' => 27404,
                                'endTokenPos' => 4944,
                                'endFilePos' => 27405,
                            ],
                        ],
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
                        'startLine' => 1022,
                        'endLine' => 1022,
                        'startColumn' => 38,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is alphanumeric.
 *
 * @return self<TValue>
 */',
                'startLine' => 1022,
                'endLine' => 1027,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeAlpha' => [
                'name' => 'toBeAlpha',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 1034,
                                'endLine' => 1034,
                                'startTokenPos' => 4991,
                                'startFilePos' => 27663,
                                'endTokenPos' => 4991,
                                'endFilePos' => 27664,
                            ],
                        ],
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
                        'startLine' => 1034,
                        'endLine' => 1034,
                        'startColumn' => 31,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is alpha.
 *
 * @return self<TValue>
 */',
                'startLine' => 1034,
                'endLine' => 1039,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeSnakeCase' => [
                'name' => 'toBeSnakeCase',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 1046,
                                'endLine' => 1046,
                                'startTokenPos' => 5038,
                                'startFilePos' => 27931,
                                'endTokenPos' => 5038,
                                'endFilePos' => 27932,
                            ],
                        ],
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
                        'startLine' => 1046,
                        'endLine' => 1046,
                        'startColumn' => 35,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is snake_case.
 *
 * @return self<TValue>
 */',
                'startLine' => 1046,
                'endLine' => 1057,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeKebabCase' => [
                'name' => 'toBeKebabCase',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 1064,
                                'endLine' => 1064,
                                'startTokenPos' => 5124,
                                'startFilePos' => 28364,
                                'endTokenPos' => 5124,
                                'endFilePos' => 28365,
                            ],
                        ],
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
                        'startLine' => 1064,
                        'endLine' => 1064,
                        'startColumn' => 35,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is kebab-case.
 *
 * @return self<TValue>
 */',
                'startLine' => 1064,
                'endLine' => 1075,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeCamelCase' => [
                'name' => 'toBeCamelCase',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 1082,
                                'endLine' => 1082,
                                'startTokenPos' => 5210,
                                'startFilePos' => 28796,
                                'endTokenPos' => 5210,
                                'endFilePos' => 28797,
                            ],
                        ],
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
                        'startLine' => 1082,
                        'endLine' => 1082,
                        'startColumn' => 35,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is camelCase.
 *
 * @return self<TValue>
 */',
                'startLine' => 1082,
                'endLine' => 1093,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeStudlyCase' => [
                'name' => 'toBeStudlyCase',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 1100,
                                'endLine' => 1100,
                                'startTokenPos' => 5296,
                                'startFilePos' => 29240,
                                'endTokenPos' => 5296,
                                'endFilePos' => 29241,
                            ],
                        ],
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
                        'startLine' => 1100,
                        'endLine' => 1100,
                        'startColumn' => 36,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is StudlyCase.
 *
 * @return self<TValue>
 */',
                'startLine' => 1100,
                'endLine' => 1111,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeUuid' => [
                'name' => 'toBeUuid',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 1118,
                                'endLine' => 1118,
                                'startTokenPos' => 5382,
                                'startFilePos' => 29680,
                                'endTokenPos' => 5382,
                                'endFilePos' => 29681,
                            ],
                        ],
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
                        'startLine' => 1118,
                        'endLine' => 1118,
                        'startColumn' => 30,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is UUID.
 *
 * @return self<TValue>
 */',
                'startLine' => 1118,
                'endLine' => 1127,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeBetween' => [
                'name' => 'toBeBetween',
                'parameters' => [
                    'lowestValue' => [
                        'name' => 'lowestValue',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
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
                        'startLine' => 1134,
                        'endLine' => 1134,
                        'startColumn' => 33,
                        'endColumn' => 72,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'highestValue' => [
                        'name' => 'highestValue',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
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
                        'startLine' => 1134,
                        'endLine' => 1134,
                        'startColumn' => 75,
                        'endColumn' => 115,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 1134,
                                'endLine' => 1134,
                                'startTokenPos' => 5472,
                                'startFilePos' => 30146,
                                'endTokenPos' => 5472,
                                'endFilePos' => 30147,
                            ],
                        ],
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
                        'startLine' => 1134,
                        'endLine' => 1134,
                        'startColumn' => 118,
                        'endColumn' => 137,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is between 2 specified values
 *
 * @return self<TValue>
 */',
                'startLine' => 1134,
                'endLine' => 1140,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeUrl' => [
                'name' => 'toBeUrl',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 1147,
                                'endLine' => 1147,
                                'startTokenPos' => 5533,
                                'startFilePos' => 30486,
                                'endTokenPos' => 5533,
                                'endFilePos' => 30487,
                            ],
                        ],
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
                        'startLine' => 1147,
                        'endLine' => 1147,
                        'startColumn' => 29,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value is a url
 *
 * @return self<TValue>
 */',
                'startLine' => 1147,
                'endLine' => 1156,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
                'aliasName' => null,
            ],
            'toBeSlug' => [
                'name' => 'toBeSlug',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 1163,
                                'endLine' => 1163,
                                'startTokenPos' => 5611,
                                'startFilePos' => 30875,
                                'endTokenPos' => 5611,
                                'endFilePos' => 30876,
                            ],
                        ],
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
                        'startLine' => 1163,
                        'endLine' => 1163,
                        'startColumn' => 30,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'self',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the value can be converted to a slug
 *
 * @return self<TValue>
 */',
                'startLine' => 1163,
                'endLine' => 1173,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Mixins',
                'declaringClassName' => 'Pest\\Mixins\\Expectation',
                'implementingClassName' => 'Pest\\Mixins\\Expectation',
                'currentClassName' => 'Pest\\Mixins\\Expectation',
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
