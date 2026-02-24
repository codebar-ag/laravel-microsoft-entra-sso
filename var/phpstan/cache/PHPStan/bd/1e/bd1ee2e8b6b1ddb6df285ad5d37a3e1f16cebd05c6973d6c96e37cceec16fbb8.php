<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../nesbot/carbon/src/Carbon/Traits/IntervalRounding.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\IntervalRounding
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-f8aa8b67c35ba4c9a2dd49784f246a1cecd2c8fb179c69934ddc5dd3a64f17b0-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Carbon\\Traits\\IntervalRounding',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../nesbot/carbon/src/Carbon/Traits/IntervalRounding.php',
            ],
        ],
        'namespace' => 'Carbon\\Traits',
        'name' => 'Carbon\\Traits\\IntervalRounding',
        'shortName' => 'IntervalRounding',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Trait to call rounding methods to interval or the interval of a period.
 */',
        'attributes' => [
        ],
        'startLine' => 23,
        'endLine' => 59,
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
            'callRoundMethod' => [
                'name' => 'callRoundMethod',
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
                        'startLine' => 25,
                        'endLine' => 25,
                        'startColumn' => 40,
                        'endColumn' => 53,
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
                        'startLine' => 25,
                        'endLine' => 25,
                        'startColumn' => 56,
                        'endColumn' => 72,
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
                                    'name' => 'static',
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
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 25,
                'endLine' => 38,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\IntervalRounding',
                'implementingClassName' => 'Carbon\\Traits\\IntervalRounding',
                'currentClassName' => 'Carbon\\Traits\\IntervalRounding',
                'aliasName' => null,
            ],
            'roundWith' => [
                'name' => 'roundWith',
                'parameters' => [
                    'precision' => [
                        'name' => 'precision',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateInterval',
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
                                            'name' => 'float',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    3 => [
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
                        'startLine' => 40,
                        'endLine' => 40,
                        'startColumn' => 34,
                        'endColumn' => 73,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'function' => [
                        'name' => 'function',
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
                                ],
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 40,
                        'endLine' => 40,
                        'startColumn' => 76,
                        'endColumn' => 100,
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
                                    'name' => 'static',
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
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 40,
                'endLine' => 58,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\IntervalRounding',
                'implementingClassName' => 'Carbon\\Traits\\IntervalRounding',
                'currentClassName' => 'Carbon\\Traits\\IntervalRounding',
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
