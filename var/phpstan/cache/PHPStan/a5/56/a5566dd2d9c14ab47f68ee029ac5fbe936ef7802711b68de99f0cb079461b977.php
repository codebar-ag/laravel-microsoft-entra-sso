<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Comparison.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Comparison
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-2238f1264439673c03b0f283618e7638718eb6a6f4aa6b9d74f58b59e9b5906b-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Carbon\\Traits\\Comparison',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Comparison.php',
            ],
        ],
        'namespace' => 'Carbon\\Traits',
        'name' => 'Carbon\\Traits\\Comparison',
        'shortName' => 'Comparison',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Trait Comparison.
 *
 * Comparison utils and testers. All the following methods return booleans.
 * nowWithSameTz
 *
 * Depends on the following methods:
 *
 * @method static        resolveCarbon($date)
 * @method static        copy()
 * @method static        nowWithSameTz()
 * @method static static yesterday($timezone = null)
 * @method static static tomorrow($timezone = null)
 */',
        'attributes' => [
        ],
        'startLine' => 44,
        'endLine' => 1361,
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
            'endOfTime' => [
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'name' => 'endOfTime',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 46,
                        'endLine' => 46,
                        'startTokenPos' => 98,
                        'startFilePos' => 1056,
                        'endTokenPos' => 98,
                        'endFilePos' => 1060,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 46,
                'endLine' => 46,
                'startColumn' => 5,
                'endColumn' => 38,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'startOfTime' => [
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'name' => 'startOfTime',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 48,
                        'endLine' => 48,
                        'startTokenPos' => 109,
                        'startFilePos' => 1098,
                        'endTokenPos' => 109,
                        'endFilePos' => 1102,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 48,
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 40,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'eq' => [
                'name' => 'eq',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 62,
                        'endLine' => 62,
                        'startColumn' => 24,
                        'endColumn' => 53,
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
 * Determines if the instance is equal to another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->eq(\'2018-07-25 12:45:16\'); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->eq(Carbon::parse(\'2018-07-25 12:45:16\')); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->eq(\'2018-07-25 12:45:17\'); // false
 * ```
 *
 * @see equalTo()
 */',
                'startLine' => 62,
                'endLine' => 65,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'equalTo' => [
                'name' => 'equalTo',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 77,
                        'endLine' => 77,
                        'startColumn' => 29,
                        'endColumn' => 58,
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
 * Determines if the instance is equal to another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->equalTo(\'2018-07-25 12:45:16\'); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->equalTo(Carbon::parse(\'2018-07-25 12:45:16\')); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->equalTo(\'2018-07-25 12:45:17\'); // false
 * ```
 */',
                'startLine' => 77,
                'endLine' => 80,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'ne' => [
                'name' => 'ne',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 94,
                        'endLine' => 94,
                        'startColumn' => 24,
                        'endColumn' => 53,
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
 * Determines if the instance is not equal to another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->ne(\'2018-07-25 12:45:16\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->ne(Carbon::parse(\'2018-07-25 12:45:16\')); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->ne(\'2018-07-25 12:45:17\'); // true
 * ```
 *
 * @see notEqualTo()
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
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'notEqualTo' => [
                'name' => 'notEqualTo',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 109,
                        'endLine' => 109,
                        'startColumn' => 32,
                        'endColumn' => 61,
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
 * Determines if the instance is not equal to another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->notEqualTo(\'2018-07-25 12:45:16\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->notEqualTo(Carbon::parse(\'2018-07-25 12:45:16\')); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->notEqualTo(\'2018-07-25 12:45:17\'); // true
 * ```
 */',
                'startLine' => 109,
                'endLine' => 112,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'gt' => [
                'name' => 'gt',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 126,
                        'endLine' => 126,
                        'startColumn' => 24,
                        'endColumn' => 53,
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
 * Determines if the instance is greater (after) than another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->gt(\'2018-07-25 12:45:15\'); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->gt(\'2018-07-25 12:45:16\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->gt(\'2018-07-25 12:45:17\'); // false
 * ```
 *
 * @see greaterThan()
 */',
                'startLine' => 126,
                'endLine' => 129,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'greaterThan' => [
                'name' => 'greaterThan',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 141,
                        'endLine' => 141,
                        'startColumn' => 33,
                        'endColumn' => 62,
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
 * Determines if the instance is greater (after) than another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->greaterThan(\'2018-07-25 12:45:15\'); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->greaterThan(\'2018-07-25 12:45:16\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->greaterThan(\'2018-07-25 12:45:17\'); // false
 * ```
 */',
                'startLine' => 141,
                'endLine' => 144,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isAfter' => [
                'name' => 'isAfter',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 158,
                        'endLine' => 158,
                        'startColumn' => 29,
                        'endColumn' => 58,
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
 * Determines if the instance is greater (after) than another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->isAfter(\'2018-07-25 12:45:15\'); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->isAfter(\'2018-07-25 12:45:16\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->isAfter(\'2018-07-25 12:45:17\'); // false
 * ```
 *
 * @see greaterThan()
 */',
                'startLine' => 158,
                'endLine' => 161,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'gte' => [
                'name' => 'gte',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 175,
                        'endLine' => 175,
                        'startColumn' => 25,
                        'endColumn' => 54,
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
 * Determines if the instance is greater (after) than or equal to another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->gte(\'2018-07-25 12:45:15\'); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->gte(\'2018-07-25 12:45:16\'); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->gte(\'2018-07-25 12:45:17\'); // false
 * ```
 *
 * @see greaterThanOrEqualTo()
 */',
                'startLine' => 175,
                'endLine' => 178,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'greaterThanOrEqualTo' => [
                'name' => 'greaterThanOrEqualTo',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 190,
                        'endLine' => 190,
                        'startColumn' => 42,
                        'endColumn' => 71,
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
 * Determines if the instance is greater (after) than or equal to another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->greaterThanOrEqualTo(\'2018-07-25 12:45:15\'); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->greaterThanOrEqualTo(\'2018-07-25 12:45:16\'); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->greaterThanOrEqualTo(\'2018-07-25 12:45:17\'); // false
 * ```
 */',
                'startLine' => 190,
                'endLine' => 193,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'lt' => [
                'name' => 'lt',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 207,
                        'endLine' => 207,
                        'startColumn' => 24,
                        'endColumn' => 53,
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
 * Determines if the instance is less (before) than another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->lt(\'2018-07-25 12:45:15\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->lt(\'2018-07-25 12:45:16\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->lt(\'2018-07-25 12:45:17\'); // true
 * ```
 *
 * @see lessThan()
 */',
                'startLine' => 207,
                'endLine' => 210,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'lessThan' => [
                'name' => 'lessThan',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 222,
                        'endLine' => 222,
                        'startColumn' => 30,
                        'endColumn' => 59,
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
 * Determines if the instance is less (before) than another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->lessThan(\'2018-07-25 12:45:15\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->lessThan(\'2018-07-25 12:45:16\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->lessThan(\'2018-07-25 12:45:17\'); // true
 * ```
 */',
                'startLine' => 222,
                'endLine' => 225,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isBefore' => [
                'name' => 'isBefore',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 239,
                        'endLine' => 239,
                        'startColumn' => 30,
                        'endColumn' => 59,
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
 * Determines if the instance is less (before) than another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->isBefore(\'2018-07-25 12:45:15\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->isBefore(\'2018-07-25 12:45:16\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->isBefore(\'2018-07-25 12:45:17\'); // true
 * ```
 *
 * @see lessThan()
 */',
                'startLine' => 239,
                'endLine' => 242,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'lte' => [
                'name' => 'lte',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 256,
                        'endLine' => 256,
                        'startColumn' => 25,
                        'endColumn' => 54,
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
 * Determines if the instance is less (before) or equal to another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->lte(\'2018-07-25 12:45:15\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->lte(\'2018-07-25 12:45:16\'); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->lte(\'2018-07-25 12:45:17\'); // true
 * ```
 *
 * @see lessThanOrEqualTo()
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
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'lessThanOrEqualTo' => [
                'name' => 'lessThanOrEqualTo',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 271,
                        'endLine' => 271,
                        'startColumn' => 39,
                        'endColumn' => 68,
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
 * Determines if the instance is less (before) or equal to another
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25 12:45:16\')->lessThanOrEqualTo(\'2018-07-25 12:45:15\'); // false
 * Carbon::parse(\'2018-07-25 12:45:16\')->lessThanOrEqualTo(\'2018-07-25 12:45:16\'); // true
 * Carbon::parse(\'2018-07-25 12:45:16\')->lessThanOrEqualTo(\'2018-07-25 12:45:17\'); // true
 * ```
 */',
                'startLine' => 271,
                'endLine' => 274,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'between' => [
                'name' => 'between',
                'parameters' => [
                    'date1' => [
                        'name' => 'date1',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 293,
                        'endLine' => 293,
                        'startColumn' => 29,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'date2' => [
                        'name' => 'date2',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 293,
                        'endLine' => 293,
                        'startColumn' => 62,
                        'endColumn' => 92,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'equal' => [
                        'name' => 'equal',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 293,
                                'endLine' => 293,
                                'startTokenPos' => 609,
                                'startFilePos' => 9503,
                                'endTokenPos' => 609,
                                'endFilePos' => 9506,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'bool',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 293,
                        'endLine' => 293,
                        'startColumn' => 95,
                        'endColumn' => 112,
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
 * Determines if the instance is between two others.
 *
 * The third argument allow you to specify if bounds are included or not (true by default)
 * but for when you including/excluding bounds may produce different results in your application,
 * we recommend to use the explicit methods ->betweenIncluded() or ->betweenExcluded() instead.
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25\')->between(\'2018-07-14\', \'2018-08-01\'); // true
 * Carbon::parse(\'2018-07-25\')->between(\'2018-08-01\', \'2018-08-20\'); // false
 * Carbon::parse(\'2018-07-25\')->between(\'2018-07-25\', \'2018-08-01\'); // true
 * Carbon::parse(\'2018-07-25\')->between(\'2018-07-25\', \'2018-08-01\', false); // false
 * ```
 *
 * @param bool $equal Indicates if an equal to comparison should be done
 */',
                'startLine' => 293,
                'endLine' => 307,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'betweenIncluded' => [
                'name' => 'betweenIncluded',
                'parameters' => [
                    'date1' => [
                        'name' => 'date1',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 319,
                        'endLine' => 319,
                        'startColumn' => 37,
                        'endColumn' => 67,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'date2' => [
                        'name' => 'date2',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 319,
                        'endLine' => 319,
                        'startColumn' => 70,
                        'endColumn' => 100,
                        'parameterIndex' => 1,
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
 * Determines if the instance is between two others, bounds included.
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25\')->betweenIncluded(\'2018-07-14\', \'2018-08-01\'); // true
 * Carbon::parse(\'2018-07-25\')->betweenIncluded(\'2018-08-01\', \'2018-08-20\'); // false
 * Carbon::parse(\'2018-07-25\')->betweenIncluded(\'2018-07-25\', \'2018-08-01\'); // true
 * ```
 */',
                'startLine' => 319,
                'endLine' => 322,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'betweenExcluded' => [
                'name' => 'betweenExcluded',
                'parameters' => [
                    'date1' => [
                        'name' => 'date1',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 334,
                        'endLine' => 334,
                        'startColumn' => 37,
                        'endColumn' => 67,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'date2' => [
                        'name' => 'date2',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 334,
                        'endLine' => 334,
                        'startColumn' => 70,
                        'endColumn' => 100,
                        'parameterIndex' => 1,
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
 * Determines if the instance is between two others, bounds excluded.
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25\')->betweenExcluded(\'2018-07-14\', \'2018-08-01\'); // true
 * Carbon::parse(\'2018-07-25\')->betweenExcluded(\'2018-08-01\', \'2018-08-20\'); // false
 * Carbon::parse(\'2018-07-25\')->betweenExcluded(\'2018-07-25\', \'2018-08-01\'); // false
 * ```
 */',
                'startLine' => 334,
                'endLine' => 337,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isBetween' => [
                'name' => 'isBetween',
                'parameters' => [
                    'date1' => [
                        'name' => 'date1',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 352,
                        'endLine' => 352,
                        'startColumn' => 31,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'date2' => [
                        'name' => 'date2',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 352,
                        'endLine' => 352,
                        'startColumn' => 64,
                        'endColumn' => 94,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'equal' => [
                        'name' => 'equal',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 352,
                                'endLine' => 352,
                                'startTokenPos' => 837,
                                'startFilePos' => 11671,
                                'endTokenPos' => 837,
                                'endFilePos' => 11674,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'bool',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 352,
                        'endLine' => 352,
                        'startColumn' => 97,
                        'endColumn' => 114,
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
 * Determines if the instance is between two others
 *
 * @example
 * ```
 * Carbon::parse(\'2018-07-25\')->isBetween(\'2018-07-14\', \'2018-08-01\'); // true
 * Carbon::parse(\'2018-07-25\')->isBetween(\'2018-08-01\', \'2018-08-20\'); // false
 * Carbon::parse(\'2018-07-25\')->isBetween(\'2018-07-25\', \'2018-08-01\'); // true
 * Carbon::parse(\'2018-07-25\')->isBetween(\'2018-07-25\', \'2018-08-01\', false); // false
 * ```
 *
 * @param bool $equal Indicates if an equal to comparison should be done
 */',
                'startLine' => 352,
                'endLine' => 355,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isWeekday' => [
                'name' => 'isWeekday',
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
 * Determines if the instance is a weekday.
 *
 * @example
 * ```
 * Carbon::parse(\'2019-07-14\')->isWeekday(); // false
 * Carbon::parse(\'2019-07-15\')->isWeekday(); // true
 * ```
 */',
                'startLine' => 366,
                'endLine' => 369,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isWeekend' => [
                'name' => 'isWeekend',
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
 * Determines if the instance is a weekend day.
 *
 * @example
 * ```
 * Carbon::parse(\'2019-07-14\')->isWeekend(); // true
 * Carbon::parse(\'2019-07-15\')->isWeekend(); // false
 * ```
 */',
                'startLine' => 380,
                'endLine' => 387,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isYesterday' => [
                'name' => 'isYesterday',
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
 * Determines if the instance is yesterday.
 *
 * @example
 * ```
 * Carbon::yesterday()->isYesterday(); // true
 * Carbon::tomorrow()->isYesterday(); // false
 * ```
 */',
                'startLine' => 398,
                'endLine' => 403,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isToday' => [
                'name' => 'isToday',
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
 * Determines if the instance is today.
 *
 * @example
 * ```
 * Carbon::today()->isToday(); // true
 * Carbon::tomorrow()->isToday(); // false
 * ```
 */',
                'startLine' => 414,
                'endLine' => 417,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isTomorrow' => [
                'name' => 'isTomorrow',
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
 * Determines if the instance is tomorrow.
 *
 * @example
 * ```
 * Carbon::tomorrow()->isTomorrow(); // true
 * Carbon::yesterday()->isTomorrow(); // false
 * ```
 */',
                'startLine' => 428,
                'endLine' => 433,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isFuture' => [
                'name' => 'isFuture',
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
 * Determines if the instance is in the future, ie. greater (after) than now.
 *
 * @example
 * ```
 * Carbon::now()->addHours(5)->isFuture(); // true
 * Carbon::now()->subHours(5)->isFuture(); // false
 * ```
 */',
                'startLine' => 444,
                'endLine' => 447,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isPast' => [
                'name' => 'isPast',
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
 * Determines if the instance is in the past, ie. less (before) than now.
 *
 * @example
 * ```
 * Carbon::now()->subHours(5)->isPast(); // true
 * Carbon::now()->addHours(5)->isPast(); // false
 * ```
 */',
                'startLine' => 458,
                'endLine' => 461,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isNowOrFuture' => [
                'name' => 'isNowOrFuture',
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
 * Determines if the instance is now or in the future, ie. greater (after) than or equal to now.
 *
 * @example
 * ```
 * Carbon::now()->isNowOrFuture(); // true
 * Carbon::now()->addHours(5)->isNowOrFuture(); // true
 * Carbon::now()->subHours(5)->isNowOrFuture(); // false
 * ```
 */',
                'startLine' => 473,
                'endLine' => 476,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isNowOrPast' => [
                'name' => 'isNowOrPast',
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
 * Determines if the instance is now or in the past, ie. less (before) than or equal to now.
 *
 * @example
 * ```
 * Carbon::now()->isNowOrPast(); // true
 * Carbon::now()->subHours(5)->isNowOrPast(); // true
 * Carbon::now()->addHours(5)->isNowOrPast(); // false
 * ```
 */',
                'startLine' => 488,
                'endLine' => 491,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isLeapYear' => [
                'name' => 'isLeapYear',
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
 * Determines if the instance is a leap year.
 *
 * @example
 * ```
 * Carbon::parse(\'2020-01-01\')->isLeapYear(); // true
 * Carbon::parse(\'2019-01-01\')->isLeapYear(); // false
 * ```
 */',
                'startLine' => 502,
                'endLine' => 505,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isLongYear' => [
                'name' => 'isLongYear',
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
 * Determines if the instance is a long year (using calendar year).
 *
 * ⚠️ This method completely ignores month and day to use the numeric year number,
 * it\'s not correct if the exact date matters. For instance as `2019-12-30` is already
 * in the first week of the 2020 year, if you want to know from this date if ISO week
 * year 2020 is a long year, use `isLongIsoYear` instead.
 *
 * @example
 * ```
 * Carbon::create(2015)->isLongYear(); // true
 * Carbon::create(2016)->isLongYear(); // false
 * ```
 *
 * @see https://en.wikipedia.org/wiki/ISO_8601#Week_dates
 */',
                'startLine' => 523,
                'endLine' => 526,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isLongIsoYear' => [
                'name' => 'isLongIsoYear',
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
 * Determines if the instance is a long year (using ISO 8601 year).
 *
 * @example
 * ```
 * Carbon::parse(\'2015-01-01\')->isLongIsoYear(); // true
 * Carbon::parse(\'2016-01-01\')->isLongIsoYear(); // true
 * Carbon::parse(\'2016-01-03\')->isLongIsoYear(); // false
 * Carbon::parse(\'2019-12-29\')->isLongIsoYear(); // false
 * Carbon::parse(\'2019-12-30\')->isLongIsoYear(); // true
 * ```
 *
 * @see https://en.wikipedia.org/wiki/ISO_8601#Week_dates
 */',
                'startLine' => 542,
                'endLine' => 545,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isSameAs' => [
                'name' => 'isSameAs',
                'parameters' => [
                    'format' => [
                        'name' => 'format',
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
                        'startLine' => 559,
                        'endLine' => 559,
                        'startColumn' => 30,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 559,
                        'endLine' => 559,
                        'startColumn' => 46,
                        'endColumn' => 75,
                        'parameterIndex' => 1,
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
 * Compares the formatted values of the two dates.
 *
 * @example
 * ```
 * Carbon::parse(\'2019-06-13\')->isSameAs(\'Y-d\', Carbon::parse(\'2019-12-13\')); // true
 * Carbon::parse(\'2019-06-13\')->isSameAs(\'Y-d\', Carbon::parse(\'2019-06-14\')); // false
 * ```
 *
 * @param string                   $format date formats to compare.
 * @param DateTimeInterface|string $date   instance to compare with or null to use current day.
 */',
                'startLine' => 559,
                'endLine' => 562,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isSameUnit' => [
                'name' => 'isSameUnit',
                'parameters' => [
                    'unit' => [
                        'name' => 'unit',
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
                        'startLine' => 580,
                        'endLine' => 580,
                        'startColumn' => 32,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 580,
                        'endLine' => 580,
                        'startColumn' => 46,
                        'endColumn' => 75,
                        'parameterIndex' => 1,
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
 * Determines if the instance is in the current unit given.
 *
 * @example
 * ```
 * Carbon::parse(\'2019-01-13\')->isSameUnit(\'year\', Carbon::parse(\'2019-12-25\')); // true
 * Carbon::parse(\'2018-12-13\')->isSameUnit(\'year\', Carbon::parse(\'2019-12-25\')); // false
 * ```
 *
 * @param string                   $unit singular unit string
 * @param DateTimeInterface|string $date instance to compare with or null to use current day.
 *
 * @throws BadComparisonUnitException
 *
 * @return bool
 */',
                'startLine' => 580,
                'endLine' => 626,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isCurrentUnit' => [
                'name' => 'isCurrentUnit',
                'parameters' => [
                    'unit' => [
                        'name' => 'unit',
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
                        'startLine' => 641,
                        'endLine' => 641,
                        'startColumn' => 35,
                        'endColumn' => 46,
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
 * Determines if the instance is in the current unit given.
 *
 * @example
 * ```
 * Carbon::now()->isCurrentUnit(\'hour\'); // true
 * Carbon::now()->subHours(2)->isCurrentUnit(\'hour\'); // false
 * ```
 *
 * @param string $unit The unit to test.
 *
 * @throws BadMethodCallException
 */',
                'startLine' => 641,
                'endLine' => 644,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isSameQuarter' => [
                'name' => 'isSameQuarter',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 662,
                        'endLine' => 662,
                        'startColumn' => 35,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'ofSameYear' => [
                        'name' => 'ofSameYear',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 662,
                                'endLine' => 662,
                                'startTokenPos' => 1760,
                                'startFilePos' => 21053,
                                'endTokenPos' => 1760,
                                'endFilePos' => 21056,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'bool',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 662,
                        'endLine' => 662,
                        'startColumn' => 67,
                        'endColumn' => 89,
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
 * Checks if the passed in date is in the same quarter as the instance quarter (and year if needed).
 *
 * @example
 * ```
 * Carbon::parse(\'2019-01-12\')->isSameQuarter(Carbon::parse(\'2019-03-01\')); // true
 * Carbon::parse(\'2019-01-12\')->isSameQuarter(Carbon::parse(\'2019-04-01\')); // false
 * Carbon::parse(\'2019-01-12\')->isSameQuarter(Carbon::parse(\'2018-03-01\')); // false
 * Carbon::parse(\'2019-01-12\')->isSameQuarter(Carbon::parse(\'2018-03-01\'), false); // true
 * ```
 *
 * @param DateTimeInterface|string $date       The instance to compare with or null to use current day.
 * @param bool                     $ofSameYear Check if it is the same month in the same year.
 *
 * @return bool
 */',
                'startLine' => 662,
                'endLine' => 667,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isSameMonth' => [
                'name' => 'isSameMonth',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 685,
                        'endLine' => 685,
                        'startColumn' => 33,
                        'endColumn' => 62,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'ofSameYear' => [
                        'name' => 'ofSameYear',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 685,
                                'endLine' => 685,
                                'startTokenPos' => 1832,
                                'startFilePos' => 22046,
                                'endTokenPos' => 1832,
                                'endFilePos' => 22049,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'bool',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 685,
                        'endLine' => 685,
                        'startColumn' => 65,
                        'endColumn' => 87,
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
 * Checks if the passed in date is in the same month as the instance´s month.
 *
 * @example
 * ```
 * Carbon::parse(\'2019-01-12\')->isSameMonth(Carbon::parse(\'2019-01-01\')); // true
 * Carbon::parse(\'2019-01-12\')->isSameMonth(Carbon::parse(\'2019-02-01\')); // false
 * Carbon::parse(\'2019-01-12\')->isSameMonth(Carbon::parse(\'2018-01-01\')); // false
 * Carbon::parse(\'2019-01-12\')->isSameMonth(Carbon::parse(\'2018-01-01\'), false); // true
 * ```
 *
 * @param DateTimeInterface|string $date       The instance to compare with or null to use the current date.
 * @param bool                     $ofSameYear Check if it is the same month in the same year.
 *
 * @return bool
 */',
                'startLine' => 685,
                'endLine' => 688,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isDayOfWeek' => [
                'name' => 'isDayOfWeek',
                'parameters' => [
                    'dayOfWeek' => [
                        'name' => 'dayOfWeek',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 705,
                        'endLine' => 705,
                        'startColumn' => 33,
                        'endColumn' => 42,
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
 * Checks if this day is a specific day of the week.
 *
 * @example
 * ```
 * Carbon::parse(\'2019-07-17\')->isDayOfWeek(Carbon::WEDNESDAY); // true
 * Carbon::parse(\'2019-07-17\')->isDayOfWeek(Carbon::FRIDAY); // false
 * Carbon::parse(\'2019-07-17\')->isDayOfWeek(\'Wednesday\'); // true
 * Carbon::parse(\'2019-07-17\')->isDayOfWeek(\'Friday\'); // false
 * ```
 *
 * @param int|string $dayOfWeek
 *
 * @return bool
 */',
                'startLine' => 705,
                'endLine' => 712,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isBirthday' => [
                'name' => 'isBirthday',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 729,
                                'endLine' => 729,
                                'startTokenPos' => 1953,
                                'startFilePos' => 23537,
                                'endTokenPos' => 1953,
                                'endFilePos' => 23540,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeInterface',
                                            'isIdentifier' => false,
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
                        'startLine' => 729,
                        'endLine' => 729,
                        'startColumn' => 32,
                        'endColumn' => 73,
                        'parameterIndex' => 0,
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
 * Check if its the birthday. Compares the date/month values of the two dates.
 *
 * @example
 * ```
 * Carbon::now()->subYears(5)->isBirthday(); // true
 * Carbon::now()->subYears(5)->subDay()->isBirthday(); // false
 * Carbon::parse(\'2019-06-05\')->isBirthday(Carbon::parse(\'2001-06-05\')); // true
 * Carbon::parse(\'2019-06-05\')->isBirthday(Carbon::parse(\'2001-06-06\')); // false
 * ```
 *
 * @param DateTimeInterface|string|null $date The instance to compare with or null to use current day.
 *
 * @return bool
 */',
                'startLine' => 729,
                'endLine' => 732,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isLastOfMonth' => [
                'name' => 'isLastOfMonth',
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
 * Check if today is the last day of the Month
 *
 * @example
 * ```
 * Carbon::parse(\'2019-02-28\')->isLastOfMonth(); // true
 * Carbon::parse(\'2019-03-28\')->isLastOfMonth(); // false
 * Carbon::parse(\'2019-03-30\')->isLastOfMonth(); // false
 * Carbon::parse(\'2019-03-31\')->isLastOfMonth(); // true
 * Carbon::parse(\'2019-04-30\')->isLastOfMonth(); // true
 * ```
 */',
                'startLine' => 746,
                'endLine' => 749,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isStartOfUnit' => [
                'name' => 'isStartOfUnit',
                'parameters' => [
                    'unit' => [
                        'name' => 'unit',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\Unit',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 761,
                        'endLine' => 761,
                        'startColumn' => 9,
                        'endColumn' => 18,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 762,
                                'endLine' => 762,
                                'startTokenPos' => 2040,
                                'startFilePos' => 24593,
                                'endTokenPos' => 2040,
                                'endFilePos' => 24596,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 762,
                        'endLine' => 762,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'params' => [
                        'name' => 'params',
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
                        'startLine' => 763,
                        'endLine' => 763,
                        'startColumn' => 9,
                        'endColumn' => 24,
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
 * Check if the instance is start of a given unit (tolerating a given interval).
 *
 * @example
 * ```
 * // Check if a date-time is the first 15 minutes of the hour it\'s in
 * Carbon::parse(\'2019-02-28 20:13:00\')->isStartOfUnit(Unit::Hour, \'15 minutes\'); // true
 * ```
 */',
                'startLine' => 760,
                'endLine' => 781,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isEndOfUnit' => [
                'name' => 'isEndOfUnit',
                'parameters' => [
                    'unit' => [
                        'name' => 'unit',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\Unit',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 793,
                        'endLine' => 793,
                        'startColumn' => 9,
                        'endColumn' => 18,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 794,
                                'endLine' => 794,
                                'startTokenPos' => 2248,
                                'startFilePos' => 25773,
                                'endTokenPos' => 2248,
                                'endFilePos' => 25776,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 794,
                        'endLine' => 794,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'params' => [
                        'name' => 'params',
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
                        'startLine' => 795,
                        'endLine' => 795,
                        'startColumn' => 9,
                        'endColumn' => 24,
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
 * Check if the instance is end of a given unit (tolerating a given interval).
 *
 * @example
 * ```
 * // Check if a date-time is the last 15 minutes of the hour it\'s in
 * Carbon::parse(\'2019-02-28 20:13:00\')->isEndOfUnit(Unit::Hour, \'15 minutes\'); // false
 * ```
 */',
                'startLine' => 792,
                'endLine' => 813,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isStartOfMillisecond' => [
                'name' => 'isStartOfMillisecond',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 819,
                                'endLine' => 819,
                                'startTokenPos' => 2451,
                                'startFilePos' => 26756,
                                'endTokenPos' => 2451,
                                'endFilePos' => 26759,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 819,
                        'endLine' => 819,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
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
 * Determines if the instance is start of millisecond (first microsecond by default but interval can be customized).
 */',
                'startLine' => 818,
                'endLine' => 822,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isEndOfMillisecond' => [
                'name' => 'isEndOfMillisecond',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 828,
                                'endLine' => 828,
                                'startTokenPos' => 2503,
                                'startFilePos' => 27107,
                                'endTokenPos' => 2503,
                                'endFilePos' => 27110,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 828,
                        'endLine' => 828,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
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
 * Determines if the instance is end of millisecond (last microsecond by default but interval can be customized).
 */',
                'startLine' => 827,
                'endLine' => 831,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isStartOfSecond' => [
                'name' => 'isStartOfSecond',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 837,
                                'endLine' => 837,
                                'startTokenPos' => 2555,
                                'startFilePos' => 27451,
                                'endTokenPos' => 2555,
                                'endFilePos' => 27454,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 837,
                        'endLine' => 837,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
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
 * Determines if the instance is start of second (first microsecond by default but interval can be customized).
 */',
                'startLine' => 836,
                'endLine' => 840,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isEndOfSecond' => [
                'name' => 'isEndOfSecond',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 846,
                                'endLine' => 846,
                                'startTokenPos' => 2607,
                                'startFilePos' => 27787,
                                'endTokenPos' => 2607,
                                'endFilePos' => 27790,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 846,
                        'endLine' => 846,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
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
 * Determines if the instance is end of second (last microsecond by default but interval can be customized).
 */',
                'startLine' => 845,
                'endLine' => 849,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isStartOfMinute' => [
                'name' => 'isStartOfMinute',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 855,
                                'endLine' => 855,
                                'startTokenPos' => 2659,
                                'startFilePos' => 28126,
                                'endTokenPos' => 2659,
                                'endFilePos' => 28129,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 855,
                        'endLine' => 855,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
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
 * Determines if the instance is start of minute (first microsecond by default but interval can be customized).
 */',
                'startLine' => 854,
                'endLine' => 858,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isEndOfMinute' => [
                'name' => 'isEndOfMinute',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 864,
                                'endLine' => 864,
                                'startTokenPos' => 2711,
                                'startFilePos' => 28462,
                                'endTokenPos' => 2711,
                                'endFilePos' => 28465,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 864,
                        'endLine' => 864,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
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
 * Determines if the instance is end of minute (last microsecond by default but interval can be customized).
 */',
                'startLine' => 863,
                'endLine' => 867,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isStartOfHour' => [
                'name' => 'isStartOfHour',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 873,
                                'endLine' => 873,
                                'startTokenPos' => 2763,
                                'startFilePos' => 28797,
                                'endTokenPos' => 2763,
                                'endFilePos' => 28800,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 873,
                        'endLine' => 873,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
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
 * Determines if the instance is start of hour (first microsecond by default but interval can be customized).
 */',
                'startLine' => 872,
                'endLine' => 876,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isEndOfHour' => [
                'name' => 'isEndOfHour',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 882,
                                'endLine' => 882,
                                'startTokenPos' => 2815,
                                'startFilePos' => 29127,
                                'endTokenPos' => 2815,
                                'endFilePos' => 29130,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 882,
                        'endLine' => 882,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
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
 * Determines if the instance is end of hour (last microsecond by default but interval can be customized).
 */',
                'startLine' => 881,
                'endLine' => 885,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isStartOfDay' => [
                'name' => 'isStartOfDay',
                'parameters' => [
                    'checkMicroseconds' => [
                        'name' => 'checkMicroseconds',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 906,
                                'endLine' => 906,
                                'startTokenPos' => 2867,
                                'startFilePos' => 30578,
                                'endTokenPos' => 2867,
                                'endFilePos' => 30582,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 906,
                        'endLine' => 906,
                        'startColumn' => 9,
                        'endColumn' => 97,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 907,
                                'endLine' => 907,
                                'startTokenPos' => 2886,
                                'startFilePos' => 30668,
                                'endTokenPos' => 2886,
                                'endFilePos' => 30671,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 907,
                        'endLine' => 907,
                        'startColumn' => 9,
                        'endColumn' => 87,
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
 * Check if the instance is start of day / midnight.
 *
 * @example
 * ```
 * Carbon::parse(\'2019-02-28 00:00:00\')->isStartOfDay(); // true
 * Carbon::parse(\'2019-02-28 00:00:00.999999\')->isStartOfDay(); // true
 * Carbon::parse(\'2019-02-28 00:00:01\')->isStartOfDay(); // false
 * Carbon::parse(\'2019-02-28 00:00:00.000000\')->isStartOfDay(true); // true
 * Carbon::parse(\'2019-02-28 00:00:00.000012\')->isStartOfDay(true); // false
 * ```
 *
 * @param bool                                                           $checkMicroseconds check time at microseconds precision
 * @param Unit|DateInterval|Closure|CarbonConverterInterface|string|null $interval          if an interval is specified it will be used as precision
 *                                                                                          for instance with "15 minutes", it checks if current date-time
 *                                                                                          is in the last 15 minutes of the day, with Unit::Hour, it
 *                                                                                          checks if it\'s in the last hour of the day.
 */',
                'startLine' => 905,
                'endLine' => 944,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isEndOfDay' => [
                'name' => 'isEndOfDay',
                'parameters' => [
                    'checkMicroseconds' => [
                        'name' => 'checkMicroseconds',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 967,
                                'endLine' => 967,
                                'startTokenPos' => 3153,
                                'startFilePos' => 33568,
                                'endTokenPos' => 3153,
                                'endFilePos' => 33572,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 967,
                        'endLine' => 967,
                        'startColumn' => 9,
                        'endColumn' => 97,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 968,
                                'endLine' => 968,
                                'startTokenPos' => 3172,
                                'startFilePos' => 33658,
                                'endTokenPos' => 3172,
                                'endFilePos' => 33661,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 968,
                        'endLine' => 968,
                        'startColumn' => 9,
                        'endColumn' => 87,
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
 * Check if the instance is end of day.
 *
 * @example
 * ```
 * Carbon::parse(\'2019-02-28 23:59:59.999999\')->isEndOfDay(); // true
 * Carbon::parse(\'2019-02-28 23:59:59.123456\')->isEndOfDay(); // true
 * Carbon::parse(\'2019-02-28 23:59:59\')->isEndOfDay(); // true
 * Carbon::parse(\'2019-02-28 23:59:58.999999\')->isEndOfDay(); // false
 * Carbon::parse(\'2019-02-28 23:59:59.999999\')->isEndOfDay(true); // true
 * Carbon::parse(\'2019-02-28 23:59:59.123456\')->isEndOfDay(true); // false
 * Carbon::parse(\'2019-02-28 23:59:59\')->isEndOfDay(true); // false
 * ```
 *
 * @param bool                                                           $checkMicroseconds check time at microseconds precision
 * @param Unit|DateInterval|Closure|CarbonConverterInterface|string|null $interval          if an interval is specified it will be used as precision
 *                                                                                          for instance with "15 minutes", it checks if current date-time
 *                                                                                          is in the last 15 minutes of the day, with Unit::Hour, it
 *                                                                                          checks if it\'s in the last hour of the day.
 */',
                'startLine' => 966,
                'endLine' => 1003,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isStartOfWeek' => [
                'name' => 'isStartOfWeek',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1015,
                                'endLine' => 1015,
                                'startTokenPos' => 3432,
                                'startFilePos' => 35454,
                                'endTokenPos' => 3432,
                                'endFilePos' => 35457,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 1015,
                        'endLine' => 1015,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'weekStartsAt' => [
                        'name' => 'weekStartsAt',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1016,
                                'endLine' => 1016,
                                'startTokenPos' => 3445,
                                'startFilePos' => 35501,
                                'endTokenPos' => 3445,
                                'endFilePos' => 35504,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\WeekDay',
                                            'isIdentifier' => false,
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
                        'startLine' => 1016,
                        'endLine' => 1016,
                        'startColumn' => 9,
                        'endColumn' => 45,
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
 * Determines if the instance is start of week (first day by default but interval can be customized).
 *
 * @example
 * ```
 * Carbon::parse(\'2024-08-31\')->startOfWeek()->isStartOfWeek(); // true
 * Carbon::parse(\'2024-08-31\')->isStartOfWeek(); // false
 * ```
 */',
                'startLine' => 1014,
                'endLine' => 1019,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isEndOfWeek' => [
                'name' => 'isEndOfWeek',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1031,
                                'endLine' => 1031,
                                'startTokenPos' => 3500,
                                'startFilePos' => 36015,
                                'endTokenPos' => 3500,
                                'endFilePos' => 36018,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 1031,
                        'endLine' => 1031,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'weekEndsAt' => [
                        'name' => 'weekEndsAt',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1032,
                                'endLine' => 1032,
                                'startTokenPos' => 3513,
                                'startFilePos' => 36060,
                                'endTokenPos' => 3513,
                                'endFilePos' => 36063,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\WeekDay',
                                            'isIdentifier' => false,
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
                        'startLine' => 1032,
                        'endLine' => 1032,
                        'startColumn' => 9,
                        'endColumn' => 43,
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
 * Determines if the instance is end of week (last day by default but interval can be customized).
 *
 * @example
 * ```
 * Carbon::parse(\'2024-08-31\')->endOfWeek()->isEndOfWeek(); // true
 * Carbon::parse(\'2024-08-31\')->isEndOfWeek(); // false
 * ```
 */',
                'startLine' => 1030,
                'endLine' => 1035,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isStartOfMonth' => [
                'name' => 'isStartOfMonth',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1041,
                                'endLine' => 1041,
                                'startTokenPos' => 3568,
                                'startFilePos' => 36400,
                                'endTokenPos' => 3568,
                                'endFilePos' => 36403,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 1041,
                        'endLine' => 1041,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
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
 * Determines if the instance is start of month (first day by default but interval can be customized).
 */',
                'startLine' => 1040,
                'endLine' => 1044,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isEndOfMonth' => [
                'name' => 'isEndOfMonth',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1050,
                                'endLine' => 1050,
                                'startTokenPos' => 3620,
                                'startFilePos' => 36725,
                                'endTokenPos' => 3620,
                                'endFilePos' => 36728,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 1050,
                        'endLine' => 1050,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
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
 * Determines if the instance is end of month (last day by default but interval can be customized).
 */',
                'startLine' => 1049,
                'endLine' => 1053,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isStartOfQuarter' => [
                'name' => 'isStartOfQuarter',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1059,
                                'endLine' => 1059,
                                'startTokenPos' => 3672,
                                'startFilePos' => 37057,
                                'endTokenPos' => 3672,
                                'endFilePos' => 37060,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 1059,
                        'endLine' => 1059,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
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
 * Determines if the instance is start of quarter (first day by default but interval can be customized).
 */',
                'startLine' => 1058,
                'endLine' => 1062,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isEndOfQuarter' => [
                'name' => 'isEndOfQuarter',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1068,
                                'endLine' => 1068,
                                'startTokenPos' => 3724,
                                'startFilePos' => 37388,
                                'endTokenPos' => 3724,
                                'endFilePos' => 37391,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 1068,
                        'endLine' => 1068,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
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
 * Determines if the instance is end of quarter (last day by default but interval can be customized).
 */',
                'startLine' => 1067,
                'endLine' => 1071,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isStartOfYear' => [
                'name' => 'isStartOfYear',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1077,
                                'endLine' => 1077,
                                'startTokenPos' => 3776,
                                'startFilePos' => 37716,
                                'endTokenPos' => 3776,
                                'endFilePos' => 37719,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 1077,
                        'endLine' => 1077,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
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
 * Determines if the instance is start of year (first day by default but interval can be customized).
 */',
                'startLine' => 1076,
                'endLine' => 1080,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isEndOfYear' => [
                'name' => 'isEndOfYear',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1086,
                                'endLine' => 1086,
                                'startTokenPos' => 3828,
                                'startFilePos' => 38038,
                                'endTokenPos' => 3828,
                                'endFilePos' => 38041,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 1086,
                        'endLine' => 1086,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
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
 * Determines if the instance is end of year (last day by default but interval can be customized).
 */',
                'startLine' => 1085,
                'endLine' => 1089,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isStartOfDecade' => [
                'name' => 'isStartOfDecade',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1095,
                                'endLine' => 1095,
                                'startTokenPos' => 3880,
                                'startFilePos' => 38367,
                                'endTokenPos' => 3880,
                                'endFilePos' => 38370,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 1095,
                        'endLine' => 1095,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
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
 * Determines if the instance is start of decade (first day by default but interval can be customized).
 */',
                'startLine' => 1094,
                'endLine' => 1098,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isEndOfDecade' => [
                'name' => 'isEndOfDecade',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1104,
                                'endLine' => 1104,
                                'startTokenPos' => 3932,
                                'startFilePos' => 38695,
                                'endTokenPos' => 3932,
                                'endFilePos' => 38698,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 1104,
                        'endLine' => 1104,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
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
 * Determines if the instance is end of decade (last day by default but interval can be customized).
 */',
                'startLine' => 1103,
                'endLine' => 1107,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isStartOfCentury' => [
                'name' => 'isStartOfCentury',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1113,
                                'endLine' => 1113,
                                'startTokenPos' => 3984,
                                'startFilePos' => 39028,
                                'endTokenPos' => 3984,
                                'endFilePos' => 39031,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 1113,
                        'endLine' => 1113,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
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
 * Determines if the instance is start of century (first day by default but interval can be customized).
 */',
                'startLine' => 1112,
                'endLine' => 1116,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isEndOfCentury' => [
                'name' => 'isEndOfCentury',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1122,
                                'endLine' => 1122,
                                'startTokenPos' => 4036,
                                'startFilePos' => 39359,
                                'endTokenPos' => 4036,
                                'endFilePos' => 39362,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 1122,
                        'endLine' => 1122,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
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
 * Determines if the instance is end of century (last day by default but interval can be customized).
 */',
                'startLine' => 1121,
                'endLine' => 1125,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isStartOfMillennium' => [
                'name' => 'isStartOfMillennium',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1131,
                                'endLine' => 1131,
                                'startTokenPos' => 4088,
                                'startFilePos' => 39699,
                                'endTokenPos' => 4088,
                                'endFilePos' => 39702,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 1131,
                        'endLine' => 1131,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
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
 * Determines if the instance is start of millennium (first day by default but interval can be customized).
 */',
                'startLine' => 1130,
                'endLine' => 1134,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isEndOfMillennium' => [
                'name' => 'isEndOfMillennium',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1140,
                                'endLine' => 1140,
                                'startTokenPos' => 4140,
                                'startFilePos' => 40039,
                                'endTokenPos' => 4140,
                                'endFilePos' => 40042,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Unit',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    3 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\CarbonConverterInterface',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    4 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    5 => [
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
                        'startLine' => 1140,
                        'endLine' => 1140,
                        'startColumn' => 9,
                        'endColumn' => 87,
                        'parameterIndex' => 0,
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
 * Determines if the instance is end of millennium (last day by default but interval can be customized).
 */',
                'startLine' => 1139,
                'endLine' => 1143,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isMidnight' => [
                'name' => 'isMidnight',
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
 * Check if the instance is start of day / midnight.
 *
 * @example
 * ```
 * Carbon::parse(\'2019-02-28 00:00:00\')->isMidnight(); // true
 * Carbon::parse(\'2019-02-28 00:00:00.999999\')->isMidnight(); // true
 * Carbon::parse(\'2019-02-28 00:00:01\')->isMidnight(); // false
 * ```
 */',
                'startLine' => 1155,
                'endLine' => 1158,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isMidday' => [
                'name' => 'isMidday',
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
 * Check if the instance is midday.
 *
 * @example
 * ```
 * Carbon::parse(\'2019-02-28 11:59:59.999999\')->isMidday(); // false
 * Carbon::parse(\'2019-02-28 12:00:00\')->isMidday(); // true
 * Carbon::parse(\'2019-02-28 12:00:00.999999\')->isMidday(); // true
 * Carbon::parse(\'2019-02-28 12:00:01\')->isMidday(); // false
 * ```
 */',
                'startLine' => 1171,
                'endLine' => 1175,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'hasFormat' => [
                'name' => 'hasFormat',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
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
                        'startLine' => 1186,
                        'endLine' => 1186,
                        'startColumn' => 38,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'format' => [
                        'name' => 'format',
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
                        'startLine' => 1186,
                        'endLine' => 1186,
                        'startColumn' => 52,
                        'endColumn' => 65,
                        'parameterIndex' => 1,
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
 * Checks if the (date)time string is in a given format.
 *
 * @example
 * ```
 * Carbon::hasFormat(\'11:12:45\', \'h:i:s\'); // true
 * Carbon::hasFormat(\'13:12:45\', \'h:i:s\'); // false
 * ```
 */',
                'startLine' => 1186,
                'endLine' => 1189,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'hasFormatWithModifiers' => [
                'name' => 'hasFormatWithModifiers',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
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
                        'startLine' => 1205,
                        'endLine' => 1205,
                        'startColumn' => 51,
                        'endColumn' => 63,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'format' => [
                        'name' => 'format',
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
                        'startLine' => 1205,
                        'endLine' => 1205,
                        'startColumn' => 66,
                        'endColumn' => 79,
                        'parameterIndex' => 1,
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
 * Checks if the (date)time string is in a given format.
 *
 * @example
 * ```
 * Carbon::hasFormatWithModifiers(\'31/08/2015\', \'d#m#Y\'); // true
 * Carbon::hasFormatWithModifiers(\'31/08/2015\', \'m#d#Y\'); // false
 * ```
 *
 * @param string $date
 * @param string $format
 *
 * @return bool
 */',
                'startLine' => 1205,
                'endLine' => 1208,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'canBeCreatedFromFormat' => [
                'name' => 'canBeCreatedFromFormat',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
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
                        'startLine' => 1220,
                        'endLine' => 1220,
                        'startColumn' => 51,
                        'endColumn' => 63,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'format' => [
                        'name' => 'format',
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
                        'startLine' => 1220,
                        'endLine' => 1220,
                        'startColumn' => 66,
                        'endColumn' => 79,
                        'parameterIndex' => 1,
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
 * Checks if the (date)time string is in a given format and valid to create a
 * new instance.
 *
 * @example
 * ```
 * Carbon::canBeCreatedFromFormat(\'11:12:45\', \'h:i:s\'); // true
 * Carbon::canBeCreatedFromFormat(\'13:12:45\', \'h:i:s\'); // false
 * ```
 */',
                'startLine' => 1220,
                'endLine' => 1237,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'is' => [
                'name' => 'is',
                'parameters' => [
                    'tester' => [
                        'name' => 'tester',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\WeekDay',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Carbon\\Month',
                                            'isIdentifier' => false,
                                        ],
                                    ],
                                    2 => [
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
                        'startLine' => 1261,
                        'endLine' => 1261,
                        'startColumn' => 24,
                        'endColumn' => 51,
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
 * Returns true if the current date matches the given string.
 *
 * @example
 * ```
 * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'2019\')); // true
 * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'2018\')); // false
 * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'2019-06\')); // true
 * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'06-02\')); // true
 * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'2019-06-02\')); // true
 * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'Sunday\')); // true
 * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'June\')); // true
 * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'12:23\')); // true
 * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'12:23:45\')); // true
 * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'12:23:00\')); // false
 * var_dump(Carbon::parse(\'2019-06-02 12:23:45\')->is(\'12h\')); // true
 * var_dump(Carbon::parse(\'2019-06-02 15:23:45\')->is(\'3pm\')); // true
 * var_dump(Carbon::parse(\'2019-06-02 15:23:45\')->is(\'3am\')); // false
 * ```
 *
 * @param string $tester day name, month name, hour, date, etc. as string
 */',
                'startLine' => 1261,
                'endLine' => 1340,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isStartOfTime' => [
                'name' => 'isStartOfTime',
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
 * Returns true if the date was created using CarbonImmutable::startOfTime()
 *
 * @return bool
 */',
                'startLine' => 1347,
                'endLine' => 1350,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
                'aliasName' => null,
            ],
            'isEndOfTime' => [
                'name' => 'isEndOfTime',
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
 * Returns true if the date was created using CarbonImmutable::endOfTime()
 *
 * @return bool
 */',
                'startLine' => 1357,
                'endLine' => 1360,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Comparison',
                'implementingClassName' => 'Carbon\\Traits\\Comparison',
                'currentClassName' => 'Carbon\\Traits\\Comparison',
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
