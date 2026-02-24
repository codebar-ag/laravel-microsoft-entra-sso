<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../pestphp/pest/src/Expectation.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pest\Expectation
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-19f4086978acff1cd1b4be491ae91975fe2b795b4773b304ea4eac95d20e3c5c-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Pest\\Expectation',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../pestphp/pest/src/Expectation.php',
            ],
        ],
        'namespace' => 'Pest',
        'name' => 'Pest\\Expectation',
        'shortName' => 'Expectation',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 32,
        'docComment' => '/**
 * @template TValue
 *
 * @property OppositeExpectation $not Creates the opposite expectation.
 * @property EachExpectation $each Creates an expectation on each element on the traversable value.
 * @property PendingArchExpectation $classes
 * @property PendingArchExpectation $traits
 * @property PendingArchExpectation $interfaces
 * @property PendingArchExpectation $enums
 *
 * @mixin Mixins\\Expectation<TValue>
 * @mixin PendingArchExpectation
 */',
        'attributes' => [
        ],
        'startLine' => 53,
        'endLine' => 1128,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Pest\\Concerns\\Extendable',
            1 => 'Pest\\Concerns\\Pipeable',
            2 => 'Pest\\Concerns\\Retrievable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'value' => [
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
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
                'startLine' => 67,
                'endLine' => 67,
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
                        'startLine' => 67,
                        'endLine' => 67,
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
                'startLine' => 66,
                'endLine' => 70,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'and' => [
                'name' => 'and',
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
                        'startLine' => 80,
                        'endLine' => 80,
                        'startColumn' => 25,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Expectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Creates a new expectation.
 *
 * @template TAndValue
 *
 * @param  TAndValue  $value
 * @return self<TAndValue>
 */',
                'startLine' => 80,
                'endLine' => 83,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'json' => [
                'name' => 'json',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Expectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Creates a new expectation with the decoded JSON value.
 *
 * @return self<array<int|string, mixed>|bool>
 */',
                'startLine' => 90,
                'endLine' => 102,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'dump' => [
                'name' => 'dump',
                'parameters' => [
                    'arguments' => [
                        'name' => 'arguments',
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
                        'startLine' => 109,
                        'endLine' => 109,
                        'startColumn' => 26,
                        'endColumn' => 44,
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
 * Dump the expectation value.
 *
 * @return self<TValue>
 */',
                'startLine' => 109,
                'endLine' => 118,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'dd' => [
                'name' => 'dd',
                'parameters' => [
                    'arguments' => [
                        'name' => 'arguments',
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
                        'startLine' => 125,
                        'endLine' => 125,
                        'startColumn' => 24,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
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
 * Dump the expectation value and end the script.
 *
 * @return never
 */',
                'startLine' => 125,
                'endLine' => 134,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'ddWhen' => [
                'name' => 'ddWhen',
                'parameters' => [
                    'condition' => [
                        'name' => 'condition',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'bool',
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
                        'startLine' => 142,
                        'endLine' => 142,
                        'startColumn' => 28,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'arguments' => [
                        'name' => 'arguments',
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
                        'startLine' => 142,
                        'endLine' => 142,
                        'startColumn' => 53,
                        'endColumn' => 71,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Expectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Dump the expectation value when the result of the condition is truthy.
 *
 * @param  (\\Closure(TValue): bool)|bool  $condition
 * @return self<TValue>
 */',
                'startLine' => 142,
                'endLine' => 151,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'ddUnless' => [
                'name' => 'ddUnless',
                'parameters' => [
                    'condition' => [
                        'name' => 'condition',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'bool',
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
                        'startLine' => 159,
                        'endLine' => 159,
                        'startColumn' => 30,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'arguments' => [
                        'name' => 'arguments',
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
                        'startLine' => 159,
                        'endLine' => 159,
                        'startColumn' => 55,
                        'endColumn' => 73,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Expectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Dump the expectation value when the result of the condition is falsy.
 *
 * @param  (\\Closure(TValue): bool)|bool  $condition
 * @return self<TValue>
 */',
                'startLine' => 159,
                'endLine' => 168,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'ray' => [
                'name' => 'ray',
                'parameters' => [
                    'arguments' => [
                        'name' => 'arguments',
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
                        'startLine' => 175,
                        'endLine' => 175,
                        'startColumn' => 25,
                        'endColumn' => 43,
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
 * Send the expectation value to Ray along with all given arguments.
 *
 * @return self<TValue>
 */',
                'startLine' => 175,
                'endLine' => 182,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'not' => [
                'name' => 'not',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Expectations\\OppositeExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Creates the opposite expectation for the value.
 *
 * @return OppositeExpectation<TValue>
 */',
                'startLine' => 189,
                'endLine' => 192,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'each' => [
                'name' => 'each',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 199,
                                'endLine' => 199,
                                'startTokenPos' => 721,
                                'startFilePos' => 4991,
                                'endTokenPos' => 721,
                                'endFilePos' => 4994,
                            ],
                        ],
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
                        'startLine' => 199,
                        'endLine' => 199,
                        'startColumn' => 26,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Expectations\\EachExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Creates an expectation on each item of the iterable "value".
 *
 * @return EachExpectation<TValue>
 */',
                'startLine' => 199,
                'endLine' => 212,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'sequence' => [
                'name' => 'sequence',
                'parameters' => [
                    'callbacks' => [
                        'name' => 'callbacks',
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
                        'startLine' => 222,
                        'endLine' => 222,
                        'startColumn' => 30,
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
 * Allows you to specify a sequential set of expectations for each item in a iterable "value".
 *
 * @template TSequenceValue
 *
 * @param  (callable(self<TValue>, self<string|int>): void)|TSequenceValue  ...$callbacks
 * @return self<TValue>
 */',
                'startLine' => 222,
                'endLine' => 251,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'match' => [
                'name' => 'match',
                'parameters' => [
                    'subject' => [
                        'name' => 'subject',
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
                        'startLine' => 262,
                        'endLine' => 262,
                        'startColumn' => 27,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'expressions' => [
                        'name' => 'expressions',
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
                        'startLine' => 262,
                        'endLine' => 262,
                        'startColumn' => 43,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => false,
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
 * If the subject matches one of the given "expressions", the expression callback will run.
 *
 * @template TMatchSubject of array-key
 *
 * @param  (callable(): TMatchSubject)|TMatchSubject  $subject
 * @param  array<TMatchSubject, (callable(self<TValue>): mixed)|TValue>  $expressions
 * @return self<TValue>
 */',
                'startLine' => 262,
                'endLine' => 291,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'unless' => [
                'name' => 'unless',
                'parameters' => [
                    'condition' => [
                        'name' => 'condition',
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
                                            'name' => 'bool',
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
                        'startColumn' => 28,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'callable',
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
                        'startColumn' => 54,
                        'endColumn' => 71,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Expectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Apply the callback if the given "condition" is falsy.
 *
 * @param  (callable(): bool)|bool  $condition
 * @param  callable(Expectation<TValue>): mixed  $callback
 * @return self<TValue>
 */',
                'startLine' => 300,
                'endLine' => 307,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'when' => [
                'name' => 'when',
                'parameters' => [
                    'condition' => [
                        'name' => 'condition',
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
                                            'name' => 'bool',
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
                        'startLine' => 316,
                        'endLine' => 316,
                        'startColumn' => 26,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'callable',
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
                        'startColumn' => 52,
                        'endColumn' => 69,
                        'parameterIndex' => 1,
                        'isOptional' => false,
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
 * Apply the callback if the given "condition" is truthy.
 *
 * @param  (callable(): bool)|bool  $condition
 * @param  callable(self<TValue>): mixed  $callback
 * @return self<TValue>
 */',
                'startLine' => 316,
                'endLine' => 327,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            '__call' => [
                'name' => '__call',
                'parameters' => [
                    'method' => [
                        'name' => 'method',
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
                        'startLine' => 335,
                        'endLine' => 335,
                        'startColumn' => 28,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
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
                        'startLine' => 335,
                        'endLine' => 335,
                        'startColumn' => 44,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Pest\\Expectation',
                                    'isIdentifier' => false,
                                ],
                            ],
                            1 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Pest\\Expectations\\HigherOrderExpectation',
                                    'isIdentifier' => false,
                                ],
                            ],
                            2 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Pest\\Arch\\PendingArchExpectation',
                                    'isIdentifier' => false,
                                ],
                            ],
                            3 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                                    'isIdentifier' => false,
                                ],
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Dynamically calls methods on the class or creates a new higher order expectation.
 *
 * @param  array<int, mixed>  $parameters
 * @return Expectation<TValue>|HigherOrderExpectation<Expectation<TValue>, TValue>
 */',
                'startLine' => 335,
                'endLine' => 372,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'getExpectationClosure' => [
                'name' => 'getExpectationClosure',
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
                        'startLine' => 379,
                        'endLine' => 379,
                        'startColumn' => 44,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Closure',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Creates a new expectation closure from the given name.
 *
 * @throws ExpectationNotFound
 */',
                'startLine' => 379,
                'endLine' => 395,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            '__get' => [
                'name' => '__get',
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
                        'startLine' => 402,
                        'endLine' => 402,
                        'startColumn' => 27,
                        'endColumn' => 38,
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
 * Dynamically calls methods on the class without any arguments or creates a new higher order expectation.
 *
 * @return Expectation<TValue>|OppositeExpectation<TValue>|EachExpectation<TValue>|HigherOrderExpectation<Expectation<TValue>, TValue|null>|TValue
 */',
                'startLine' => 402,
                'endLine' => 416,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'hasMethod' => [
                'name' => 'hasMethod',
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
                        'startLine' => 421,
                        'endLine' => 421,
                        'startColumn' => 38,
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
 * Checks if the given expectation method exists.
 */',
                'startLine' => 421,
                'endLine' => 426,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'any' => [
                'name' => 'any',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Matchers\\Any',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Matches any value.
 */',
                'startLine' => 431,
                'endLine' => 434,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toUse' => [
                'name' => 'toUse',
                'parameters' => [
                    'targets' => [
                        'name' => 'targets',
                        'default' => null,
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
                                            'name' => 'string',
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
                        'startLine' => 441,
                        'endLine' => 441,
                        'startColumn' => 27,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target use the given dependencies.
 *
 * @param  array<int, string>|string  $targets
 */',
                'startLine' => 441,
                'endLine' => 444,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toHaveFileSystemPermissions' => [
                'name' => 'toHaveFileSystemPermissions',
                'parameters' => [
                    'permissions' => [
                        'name' => 'permissions',
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
                        'startLine' => 449,
                        'endLine' => 449,
                        'startColumn' => 49,
                        'endColumn' => 67,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target does have the given permissions
 */',
                'startLine' => 449,
                'endLine' => 457,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toHaveLineCountLessThan' => [
                'name' => 'toHaveLineCountLessThan',
                'parameters' => [
                    'lines' => [
                        'name' => 'lines',
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
                        'startLine' => 462,
                        'endLine' => 462,
                        'startColumn' => 45,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target to have line count less than the given number.
 */',
                'startLine' => 462,
                'endLine' => 470,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toHaveMethodsDocumented' => [
                'name' => 'toHaveMethodsDocumented',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target have all methods documented.
 */',
                'startLine' => 475,
                'endLine' => 489,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toHavePropertiesDocumented' => [
                'name' => 'toHavePropertiesDocumented',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target have all properties documented.
 */',
                'startLine' => 494,
                'endLine' => 509,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toUseStrictTypes' => [
                'name' => 'toUseStrictTypes',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target use the "declare(strict_types=1)" declaration.
 */',
                'startLine' => 514,
                'endLine' => 522,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toUseStrictEquality' => [
                'name' => 'toUseStrictEquality',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target uses strict equality.
 */',
                'startLine' => 527,
                'endLine' => 535,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toBeFinal' => [
                'name' => 'toBeFinal',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target is final.
 */',
                'startLine' => 540,
                'endLine' => 548,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toBeReadonly' => [
                'name' => 'toBeReadonly',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target is readonly.
 */',
                'startLine' => 553,
                'endLine' => 561,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toBeTrait' => [
                'name' => 'toBeTrait',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target is trait.
 */',
                'startLine' => 566,
                'endLine' => 574,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toBeTraits' => [
                'name' => 'toBeTraits',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation targets are traits.
 */',
                'startLine' => 579,
                'endLine' => 582,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toBeAbstract' => [
                'name' => 'toBeAbstract',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target is abstract.
 */',
                'startLine' => 587,
                'endLine' => 595,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toHaveMethod' => [
                'name' => 'toHaveMethod',
                'parameters' => [
                    'method' => [
                        'name' => 'method',
                        'default' => null,
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
                                            'name' => 'string',
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
                        'startLine' => 602,
                        'endLine' => 602,
                        'startColumn' => 34,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target has a specific method.
 *
 * @param  array<int, string>|string  $method
 */',
                'startLine' => 602,
                'endLine' => 612,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toHaveMethods' => [
                'name' => 'toHaveMethods',
                'parameters' => [
                    'methods' => [
                        'name' => 'methods',
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
                        'startLine' => 619,
                        'endLine' => 619,
                        'startColumn' => 35,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target has a specific methods.
 *
 * @param  array<int, string>  $methods
 */',
                'startLine' => 619,
                'endLine' => 622,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toHavePublicMethodsBesides' => [
                'name' => 'toHavePublicMethodsBesides',
                'parameters' => [
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
 * Not supported.
 */',
                'startLine' => 627,
                'endLine' => 630,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toHavePublicMethods' => [
                'name' => 'toHavePublicMethods',
                'parameters' => [
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
 * Not supported.
 */',
                'startLine' => 635,
                'endLine' => 638,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toHaveProtectedMethodsBesides' => [
                'name' => 'toHaveProtectedMethodsBesides',
                'parameters' => [
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
 * Not supported.
 */',
                'startLine' => 643,
                'endLine' => 646,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toHaveProtectedMethods' => [
                'name' => 'toHaveProtectedMethods',
                'parameters' => [
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
 * Not supported.
 */',
                'startLine' => 651,
                'endLine' => 654,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toHavePrivateMethodsBesides' => [
                'name' => 'toHavePrivateMethodsBesides',
                'parameters' => [
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
 * Not supported.
 */',
                'startLine' => 659,
                'endLine' => 662,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toHavePrivateMethods' => [
                'name' => 'toHavePrivateMethods',
                'parameters' => [
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
 * Not supported.
 */',
                'startLine' => 667,
                'endLine' => 670,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toBeEnum' => [
                'name' => 'toBeEnum',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target is enum.
 */',
                'startLine' => 675,
                'endLine' => 683,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toBeEnums' => [
                'name' => 'toBeEnums',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation targets are enums.
 */',
                'startLine' => 688,
                'endLine' => 691,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toBeClass' => [
                'name' => 'toBeClass',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target is a class.
 */',
                'startLine' => 696,
                'endLine' => 704,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toBeClasses' => [
                'name' => 'toBeClasses',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation targets are classes.
 */',
                'startLine' => 709,
                'endLine' => 712,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toBeInterface' => [
                'name' => 'toBeInterface',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target is interface.
 */',
                'startLine' => 717,
                'endLine' => 725,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toBeInterfaces' => [
                'name' => 'toBeInterfaces',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation targets are interfaces.
 */',
                'startLine' => 730,
                'endLine' => 733,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toExtend' => [
                'name' => 'toExtend',
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
                        'startLine' => 738,
                        'endLine' => 738,
                        'startColumn' => 30,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target to be subclass of the given class.
 */',
                'startLine' => 738,
                'endLine' => 746,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toExtendNothing' => [
                'name' => 'toExtendNothing',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target to be have a parent class.
 */',
                'startLine' => 751,
                'endLine' => 759,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toUseTrait' => [
                'name' => 'toUseTrait',
                'parameters' => [
                    'trait' => [
                        'name' => 'trait',
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
                        'startLine' => 764,
                        'endLine' => 764,
                        'startColumn' => 32,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target to use the given trait.
 */',
                'startLine' => 764,
                'endLine' => 767,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toUseTraits' => [
                'name' => 'toUseTraits',
                'parameters' => [
                    'traits' => [
                        'name' => 'traits',
                        'default' => null,
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
                                            'name' => 'string',
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
                        'startLine' => 774,
                        'endLine' => 774,
                        'startColumn' => 33,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target to use the given traits.
 *
 * @param  array<int, string>|string  $traits
 */',
                'startLine' => 774,
                'endLine' => 796,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toImplementNothing' => [
                'name' => 'toImplementNothing',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target to not implement any interfaces.
 */',
                'startLine' => 801,
                'endLine' => 809,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toOnlyImplement' => [
                'name' => 'toOnlyImplement',
                'parameters' => [
                    'interfaces' => [
                        'name' => 'interfaces',
                        'default' => null,
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
                                            'name' => 'string',
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
                        'startLine' => 816,
                        'endLine' => 816,
                        'startColumn' => 37,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target to only implement the given interfaces.
 *
 * @param  array<int, string>|string  $interfaces
 */',
                'startLine' => 816,
                'endLine' => 828,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toHavePrefix' => [
                'name' => 'toHavePrefix',
                'parameters' => [
                    'prefix' => [
                        'name' => 'prefix',
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
                        'startLine' => 833,
                        'endLine' => 833,
                        'startColumn' => 34,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target to have the given prefix.
 */',
                'startLine' => 833,
                'endLine' => 841,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toHaveSuffix' => [
                'name' => 'toHaveSuffix',
                'parameters' => [
                    'suffix' => [
                        'name' => 'suffix',
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
                        'startLine' => 846,
                        'endLine' => 846,
                        'startColumn' => 34,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target to have the given suffix.
 */',
                'startLine' => 846,
                'endLine' => 854,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toImplement' => [
                'name' => 'toImplement',
                'parameters' => [
                    'interfaces' => [
                        'name' => 'interfaces',
                        'default' => null,
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
                                            'name' => 'string',
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
                        'startLine' => 861,
                        'endLine' => 861,
                        'startColumn' => 33,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target to implement the given interfaces.
 *
 * @param  array<int, string>|string  $interfaces
 */',
                'startLine' => 861,
                'endLine' => 879,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toOnlyUse' => [
                'name' => 'toOnlyUse',
                'parameters' => [
                    'targets' => [
                        'name' => 'targets',
                        'default' => null,
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
                                            'name' => 'string',
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
                        'startLine' => 886,
                        'endLine' => 886,
                        'startColumn' => 31,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target "only" use on the given dependencies.
 *
 * @param  array<int, string>|string  $targets
 */',
                'startLine' => 886,
                'endLine' => 889,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toUseNothing' => [
                'name' => 'toUseNothing',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target does not use any dependencies.
 */',
                'startLine' => 894,
                'endLine' => 897,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toHaveSuspiciousCharacters' => [
                'name' => 'toHaveSuspiciousCharacters',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the source code of the given expectation target does not include suspicious characters.
 */',
                'startLine' => 902,
                'endLine' => 905,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toBeUsed' => [
                'name' => 'toBeUsed',
                'parameters' => [
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
 * Not supported.
 */',
                'startLine' => 910,
                'endLine' => 913,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toBeUsedIn' => [
                'name' => 'toBeUsedIn',
                'parameters' => [
                    'targets' => [
                        'name' => 'targets',
                        'default' => null,
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
                                            'name' => 'string',
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
                        'startLine' => 920,
                        'endLine' => 920,
                        'startColumn' => 32,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation dependency is used by the given targets.
 *
 * @param  array<int, string>|string  $targets
 */',
                'startLine' => 920,
                'endLine' => 923,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toOnlyBeUsedIn' => [
                'name' => 'toOnlyBeUsedIn',
                'parameters' => [
                    'targets' => [
                        'name' => 'targets',
                        'default' => null,
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
                                            'name' => 'string',
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
                        'startLine' => 930,
                        'endLine' => 930,
                        'startColumn' => 36,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation dependency is "only" used by the given targets.
 *
 * @param  array<int, string>|string  $targets
 */',
                'startLine' => 930,
                'endLine' => 933,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toBeUsedInNothing' => [
                'name' => 'toBeUsedInNothing',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation dependency is not used.
 */',
                'startLine' => 938,
                'endLine' => 941,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toBeInvokable' => [
                'name' => 'toBeInvokable',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation dependency is an invokable class.
 */',
                'startLine' => 946,
                'endLine' => 954,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toHaveSnakeCaseKeys' => [
                'name' => 'toHaveSnakeCaseKeys',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 961,
                                'endLine' => 961,
                                'startTokenPos' => 5383,
                                'startFilePos' => 30783,
                                'endTokenPos' => 5383,
                                'endFilePos' => 30784,
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
                        'startLine' => 961,
                        'endLine' => 961,
                        'startColumn' => 41,
                        'endColumn' => 60,
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
 * Asserts that the given expectation is iterable and contains snake_case keys.
 *
 * @return self<TValue>
 */',
                'startLine' => 961,
                'endLine' => 978,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toHaveKebabCaseKeys' => [
                'name' => 'toHaveKebabCaseKeys',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 985,
                                'endLine' => 985,
                                'startTokenPos' => 5509,
                                'startFilePos' => 31413,
                                'endTokenPos' => 5509,
                                'endFilePos' => 31414,
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
                        'startLine' => 985,
                        'endLine' => 985,
                        'startColumn' => 41,
                        'endColumn' => 60,
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
 * Asserts that the given expectation is iterable and contains kebab-case keys.
 *
 * @return self<TValue>
 */',
                'startLine' => 985,
                'endLine' => 1002,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toHaveCamelCaseKeys' => [
                'name' => 'toHaveCamelCaseKeys',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 1009,
                                'endLine' => 1009,
                                'startTokenPos' => 5635,
                                'startFilePos' => 32042,
                                'endTokenPos' => 5635,
                                'endFilePos' => 32043,
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
                        'startLine' => 1009,
                        'endLine' => 1009,
                        'startColumn' => 41,
                        'endColumn' => 60,
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
 * Asserts that the given expectation is iterable and contains camelCase keys.
 *
 * @return self<TValue>
 */',
                'startLine' => 1009,
                'endLine' => 1026,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toHaveStudlyCaseKeys' => [
                'name' => 'toHaveStudlyCaseKeys',
                'parameters' => [
                    'message' => [
                        'name' => 'message',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 1033,
                                'endLine' => 1033,
                                'startTokenPos' => 5761,
                                'startFilePos' => 32673,
                                'endTokenPos' => 5761,
                                'endFilePos' => 32674,
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
                        'startLine' => 1033,
                        'endLine' => 1033,
                        'startColumn' => 42,
                        'endColumn' => 61,
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
 * Asserts that the given expectation is iterable and contains StudlyCase keys.
 *
 * @return self<TValue>
 */',
                'startLine' => 1033,
                'endLine' => 1050,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toHaveAttribute' => [
                'name' => 'toHaveAttribute',
                'parameters' => [
                    'attribute' => [
                        'name' => 'attribute',
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
                        'startLine' => 1055,
                        'endLine' => 1055,
                        'startColumn' => 37,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target to have the given attribute.
 */',
                'startLine' => 1055,
                'endLine' => 1063,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toHaveConstructor' => [
                'name' => 'toHaveConstructor',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target has a constructor method.
 */',
                'startLine' => 1068,
                'endLine' => 1071,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toHaveDestructor' => [
                'name' => 'toHaveDestructor',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target has a destructor method.
 */',
                'startLine' => 1076,
                'endLine' => 1079,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toBeBackedEnum' => [
                'name' => 'toBeBackedEnum',
                'parameters' => [
                    'backingType' => [
                        'name' => 'backingType',
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
                        'startLine' => 1084,
                        'endLine' => 1084,
                        'startColumn' => 37,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target is a backed enum of given type.
 */',
                'startLine' => 1084,
                'endLine' => 1095,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toBeStringBackedEnums' => [
                'name' => 'toBeStringBackedEnums',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation targets are string backed enums.
 */',
                'startLine' => 1100,
                'endLine' => 1103,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toBeIntBackedEnums' => [
                'name' => 'toBeIntBackedEnums',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation targets are int backed enums.
 */',
                'startLine' => 1108,
                'endLine' => 1111,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toBeStringBackedEnum' => [
                'name' => 'toBeStringBackedEnum',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target is a string backed enum.
 */',
                'startLine' => 1116,
                'endLine' => 1119,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
                'aliasName' => null,
            ],
            'toBeIntBackedEnum' => [
                'name' => 'toBeIntBackedEnum',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the given expectation target is an int backed enum.
 */',
                'startLine' => 1124,
                'endLine' => 1127,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest',
                'declaringClassName' => 'Pest\\Expectation',
                'implementingClassName' => 'Pest\\Expectation',
                'currentClassName' => 'Pest\\Expectation',
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
