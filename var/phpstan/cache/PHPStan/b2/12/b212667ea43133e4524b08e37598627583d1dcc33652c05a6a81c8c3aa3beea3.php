<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Difference.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Difference
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-ce0d4db35c21ace424a014578bec04eca915e9a69710d106b483212b492f68c8-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Carbon\\Traits\\Difference',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Difference.php',
            ],
        ],
        'namespace' => 'Carbon\\Traits',
        'name' => 'Carbon\\Traits\\Difference',
        'shortName' => 'Difference',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Trait Difference.
 *
 * Depends on the following methods:
 *
 * @method bool lessThan($date)
 * @method static copy()
 * @method static resolveCarbon($date = null)
 */',
        'attributes' => [
        ],
        'startLine' => 36,
        'endLine' => 855,
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
            'diffAsDateInterval' => [
                'name' => 'diffAsDateInterval',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 48,
                                'endLine' => 48,
                                'startTokenPos' => 87,
                                'startFilePos' => 1199,
                                'endTokenPos' => 87,
                                'endFilePos' => 1202,
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
                        'startColumn' => 40,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 48,
                                'endLine' => 48,
                                'startTokenPos' => 96,
                                'startFilePos' => 1222,
                                'endTokenPos' => 96,
                                'endFilePos' => 1226,
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
                        'startLine' => 48,
                        'endLine' => 48,
                        'startColumn' => 54,
                        'endColumn' => 75,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'DateInterval',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the difference as a DateInterval instance.
 * Return relative interval (negative if $absolute flag is not set to true and the given date is before
 * current one).
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return DateInterval
 */',
                'startLine' => 48,
                'endLine' => 61,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'diffAsCarbonInterval' => [
                'name' => 'diffAsCarbonInterval',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 73,
                                'endLine' => 73,
                                'startTokenPos' => 187,
                                'startFilePos' => 2244,
                                'endTokenPos' => 187,
                                'endFilePos' => 2247,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 73,
                        'endLine' => 73,
                        'startColumn' => 42,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 73,
                                'endLine' => 73,
                                'startTokenPos' => 196,
                                'startFilePos' => 2267,
                                'endTokenPos' => 196,
                                'endFilePos' => 2271,
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
                        'startLine' => 73,
                        'endLine' => 73,
                        'startColumn' => 56,
                        'endColumn' => 77,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'skip' => [
                        'name' => 'skip',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 73,
                                'endLine' => 73,
                                'startTokenPos' => 205,
                                'startFilePos' => 2288,
                                'endTokenPos' => 206,
                                'endFilePos' => 2289,
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
                        'startLine' => 73,
                        'endLine' => 73,
                        'startColumn' => 80,
                        'endColumn' => 95,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Carbon\\CarbonInterval',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the difference as a CarbonInterval instance.
 * Return relative interval (negative if $absolute flag is not set to true and the given date is before
 * current one).
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return CarbonInterval
 */',
                'startLine' => 73,
                'endLine' => 77,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'diff' => [
                'name' => 'diff',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 91,
                                'endLine' => 91,
                                'startTokenPos' => 262,
                                'startFilePos' => 2981,
                                'endTokenPos' => 262,
                                'endFilePos' => 2984,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 91,
                        'endLine' => 91,
                        'startColumn' => 26,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 91,
                                'endLine' => 91,
                                'startTokenPos' => 271,
                                'startFilePos' => 3004,
                                'endTokenPos' => 271,
                                'endFilePos' => 3008,
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
                        'startLine' => 91,
                        'endLine' => 91,
                        'startColumn' => 40,
                        'endColumn' => 61,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'skip' => [
                        'name' => 'skip',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 91,
                                'endLine' => 91,
                                'startTokenPos' => 280,
                                'startFilePos' => 3025,
                                'endTokenPos' => 281,
                                'endFilePos' => 3026,
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
                        'startLine' => 91,
                        'endLine' => 91,
                        'startColumn' => 64,
                        'endColumn' => 79,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Carbon\\CarbonInterval',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * @alias diffAsCarbonInterval
 *
 * Get the difference as a DateInterval instance.
 * Return relative interval (negative if $absolute flag is not set to true and the given date is before
 * current one).
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return CarbonInterval
 */',
                'startLine' => 91,
                'endLine' => 94,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'diffInUnit' => [
                'name' => 'diffInUnit',
                'parameters' => [
                    'unit' => [
                        'name' => 'unit',
                        'default' => null,
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
                        'startLine' => 106,
                        'endLine' => 106,
                        'startColumn' => 32,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 106,
                                'endLine' => 106,
                                'startTokenPos' => 326,
                                'startFilePos' => 3940,
                                'endTokenPos' => 326,
                                'endFilePos' => 3943,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 106,
                        'endLine' => 106,
                        'startColumn' => 51,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 106,
                                'endLine' => 106,
                                'startTokenPos' => 335,
                                'startFilePos' => 3963,
                                'endTokenPos' => 335,
                                'endFilePos' => 3967,
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
                        'startLine' => 106,
                        'endLine' => 106,
                        'startColumn' => 65,
                        'endColumn' => 86,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'utc' => [
                        'name' => 'utc',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 106,
                                'endLine' => 106,
                                'startTokenPos' => 344,
                                'startFilePos' => 3982,
                                'endTokenPos' => 344,
                                'endFilePos' => 3986,
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
                        'startLine' => 106,
                        'endLine' => 106,
                        'startColumn' => 89,
                        'endColumn' => 105,
                        'parameterIndex' => 3,
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
 * @param Unit|string                                            $unit     microsecond, millisecond, second, minute,
 *                                                                         hour, day, week, month, quarter, year,
 *                                                                         century, millennium
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 * @param bool                                                   $utc      Always convert dates to UTC before comparing (if not set, it will do it only if timezones are different)
 *
 * @return float
 */',
                'startLine' => 106,
                'endLine' => 116,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'diffInYears' => [
                'name' => 'diffInYears',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 127,
                                'endLine' => 127,
                                'startTokenPos' => 450,
                                'startFilePos' => 4800,
                                'endTokenPos' => 450,
                                'endFilePos' => 4803,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 127,
                        'endLine' => 127,
                        'startColumn' => 33,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 127,
                                'endLine' => 127,
                                'startTokenPos' => 459,
                                'startFilePos' => 4823,
                                'endTokenPos' => 459,
                                'endFilePos' => 4827,
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
                        'startLine' => 127,
                        'endLine' => 127,
                        'startColumn' => 47,
                        'endColumn' => 68,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'utc' => [
                        'name' => 'utc',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 127,
                                'endLine' => 127,
                                'startTokenPos' => 468,
                                'startFilePos' => 4842,
                                'endTokenPos' => 468,
                                'endFilePos' => 4846,
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
                        'startLine' => 127,
                        'endLine' => 127,
                        'startColumn' => 71,
                        'endColumn' => 87,
                        'parameterIndex' => 2,
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
 * Get the difference in years
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 * @param bool                                                   $utc      Always convert dates to UTC before comparing (if not set, it will do it only if timezones are different)
 *
 * @return float
 */',
                'startLine' => 127,
                'endLine' => 159,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'diffInQuarters' => [
                'name' => 'diffInQuarters',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 170,
                                'endLine' => 170,
                                'startTokenPos' => 744,
                                'startFilePos' => 6337,
                                'endTokenPos' => 744,
                                'endFilePos' => 6340,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 170,
                        'endLine' => 170,
                        'startColumn' => 36,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 170,
                                'endLine' => 170,
                                'startTokenPos' => 753,
                                'startFilePos' => 6360,
                                'endTokenPos' => 753,
                                'endFilePos' => 6364,
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
                        'startLine' => 170,
                        'endLine' => 170,
                        'startColumn' => 50,
                        'endColumn' => 71,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'utc' => [
                        'name' => 'utc',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 170,
                                'endLine' => 170,
                                'startTokenPos' => 762,
                                'startFilePos' => 6379,
                                'endTokenPos' => 762,
                                'endFilePos' => 6383,
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
                        'startLine' => 170,
                        'endLine' => 170,
                        'startColumn' => 74,
                        'endColumn' => 90,
                        'parameterIndex' => 2,
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
 * Get the difference in quarters.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 * @param bool                                                   $utc      Always convert dates to UTC before comparing (if not set, it will do it only if timezones are different)
 *
 * @return float
 */',
                'startLine' => 170,
                'endLine' => 173,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'diffInMonths' => [
                'name' => 'diffInMonths',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 184,
                                'endLine' => 184,
                                'startTokenPos' => 806,
                                'startFilePos' => 6997,
                                'endTokenPos' => 806,
                                'endFilePos' => 7000,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 184,
                        'endLine' => 184,
                        'startColumn' => 34,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 184,
                                'endLine' => 184,
                                'startTokenPos' => 815,
                                'startFilePos' => 7020,
                                'endTokenPos' => 815,
                                'endFilePos' => 7024,
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
                        'startLine' => 184,
                        'endLine' => 184,
                        'startColumn' => 48,
                        'endColumn' => 69,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'utc' => [
                        'name' => 'utc',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 184,
                                'endLine' => 184,
                                'startTokenPos' => 824,
                                'startFilePos' => 7039,
                                'endTokenPos' => 824,
                                'endFilePos' => 7043,
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
                        'startLine' => 184,
                        'endLine' => 184,
                        'startColumn' => 72,
                        'endColumn' => 88,
                        'parameterIndex' => 2,
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
 * Get the difference in months.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 * @param bool                                                   $utc      Always convert dates to UTC before comparing (if not set, it will do it only if timezones are different)
 *
 * @return float
 */',
                'startLine' => 184,
                'endLine' => 229,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'diffInWeeks' => [
                'name' => 'diffInWeeks',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 240,
                                'endLine' => 240,
                                'startTokenPos' => 1269,
                                'startFilePos' => 9090,
                                'endTokenPos' => 1269,
                                'endFilePos' => 9093,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 240,
                        'endLine' => 240,
                        'startColumn' => 33,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 240,
                                'endLine' => 240,
                                'startTokenPos' => 1278,
                                'startFilePos' => 9113,
                                'endTokenPos' => 1278,
                                'endFilePos' => 9117,
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
                        'startLine' => 240,
                        'endLine' => 240,
                        'startColumn' => 47,
                        'endColumn' => 68,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'utc' => [
                        'name' => 'utc',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 240,
                                'endLine' => 240,
                                'startTokenPos' => 1287,
                                'startFilePos' => 9132,
                                'endTokenPos' => 1287,
                                'endFilePos' => 9136,
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
                        'startLine' => 240,
                        'endLine' => 240,
                        'startColumn' => 71,
                        'endColumn' => 87,
                        'parameterIndex' => 2,
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
 * Get the difference in weeks.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 * @param bool                                                   $utc      Always convert dates to UTC before comparing (if not set, it will do it only if timezones are different)
 *
 * @return float
 */',
                'startLine' => 240,
                'endLine' => 243,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'diffInDays' => [
                'name' => 'diffInDays',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 254,
                                'endLine' => 254,
                                'startTokenPos' => 1331,
                                'startFilePos' => 9739,
                                'endTokenPos' => 1331,
                                'endFilePos' => 9742,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 254,
                        'endLine' => 254,
                        'startColumn' => 32,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 254,
                                'endLine' => 254,
                                'startTokenPos' => 1340,
                                'startFilePos' => 9762,
                                'endTokenPos' => 1340,
                                'endFilePos' => 9766,
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
                        'startLine' => 254,
                        'endLine' => 254,
                        'startColumn' => 46,
                        'endColumn' => 67,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'utc' => [
                        'name' => 'utc',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 254,
                                'endLine' => 254,
                                'startTokenPos' => 1349,
                                'startFilePos' => 9781,
                                'endTokenPos' => 1349,
                                'endFilePos' => 9785,
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
                        'startLine' => 254,
                        'endLine' => 254,
                        'startColumn' => 70,
                        'endColumn' => 86,
                        'parameterIndex' => 2,
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
 * Get the difference in days.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 * @param bool                                                   $utc      Always convert dates to UTC before comparing (if not set, it will do it only if timezones are different)
 *
 * @return float
 */',
                'startLine' => 254,
                'endLine' => 278,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'diffInDaysFiltered' => [
                'name' => 'diffInDaysFiltered',
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
                        'startLine' => 289,
                        'endLine' => 289,
                        'startColumn' => 40,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 289,
                                'endLine' => 289,
                                'startTokenPos' => 1649,
                                'startFilePos' => 11269,
                                'endTokenPos' => 1649,
                                'endFilePos' => 11272,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 289,
                        'endLine' => 289,
                        'startColumn' => 59,
                        'endColumn' => 70,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 289,
                                'endLine' => 289,
                                'startTokenPos' => 1658,
                                'startFilePos' => 11292,
                                'endTokenPos' => 1658,
                                'endFilePos' => 11296,
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
                        'startLine' => 289,
                        'endLine' => 289,
                        'startColumn' => 73,
                        'endColumn' => 94,
                        'parameterIndex' => 2,
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
 * Get the difference in days using a filter closure.
 *
 * @param Closure                                                $callback
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
 */',
                'startLine' => 289,
                'endLine' => 292,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'diffInHoursFiltered' => [
                'name' => 'diffInHoursFiltered',
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
                        'startLine' => 303,
                        'endLine' => 303,
                        'startColumn' => 41,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 303,
                                'endLine' => 303,
                                'startTokenPos' => 1708,
                                'startFilePos' => 11848,
                                'endTokenPos' => 1708,
                                'endFilePos' => 11851,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 303,
                        'endLine' => 303,
                        'startColumn' => 60,
                        'endColumn' => 71,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 303,
                                'endLine' => 303,
                                'startTokenPos' => 1717,
                                'startFilePos' => 11871,
                                'endTokenPos' => 1717,
                                'endFilePos' => 11875,
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
                        'startLine' => 303,
                        'endLine' => 303,
                        'startColumn' => 74,
                        'endColumn' => 95,
                        'parameterIndex' => 2,
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
 * Get the difference in hours using a filter closure.
 *
 * @param Closure                                                $callback
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
 */',
                'startLine' => 303,
                'endLine' => 306,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'diffFiltered' => [
                'name' => 'diffFiltered',
                'parameters' => [
                    'ci' => [
                        'name' => 'ci',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Carbon\\CarbonInterval',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 318,
                        'endLine' => 318,
                        'startColumn' => 34,
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
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 318,
                        'endLine' => 318,
                        'startColumn' => 54,
                        'endColumn' => 70,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 318,
                                'endLine' => 318,
                                'startTokenPos' => 1772,
                                'startFilePos' => 12560,
                                'endTokenPos' => 1772,
                                'endFilePos' => 12563,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 318,
                        'endLine' => 318,
                        'startColumn' => 73,
                        'endColumn' => 84,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 318,
                                'endLine' => 318,
                                'startTokenPos' => 1781,
                                'startFilePos' => 12583,
                                'endTokenPos' => 1781,
                                'endFilePos' => 12587,
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
                        'startLine' => 318,
                        'endLine' => 318,
                        'startColumn' => 87,
                        'endColumn' => 108,
                        'parameterIndex' => 3,
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
 * Get the difference by the given interval using a filter closure.
 *
 * @param CarbonInterval                                         $ci       An interval to traverse by
 * @param Closure                                                $callback
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
 */',
                'startLine' => 318,
                'endLine' => 334,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'diffInWeekdays' => [
                'name' => 'diffInWeekdays',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 344,
                                'endLine' => 344,
                                'startTokenPos' => 1939,
                                'startFilePos' => 13389,
                                'endTokenPos' => 1939,
                                'endFilePos' => 13392,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 344,
                        'endLine' => 344,
                        'startColumn' => 36,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 344,
                                'endLine' => 344,
                                'startTokenPos' => 1948,
                                'startFilePos' => 13412,
                                'endTokenPos' => 1948,
                                'endFilePos' => 13416,
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
                        'startLine' => 344,
                        'endLine' => 344,
                        'startColumn' => 50,
                        'endColumn' => 71,
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
 * Get the difference in weekdays.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
 */',
                'startLine' => 344,
                'endLine' => 351,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'diffInWeekendDays' => [
                'name' => 'diffInWeekendDays',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 361,
                                'endLine' => 361,
                                'startTokenPos' => 2024,
                                'startFilePos' => 14016,
                                'endTokenPos' => 2024,
                                'endFilePos' => 14019,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 361,
                        'endLine' => 361,
                        'startColumn' => 39,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 361,
                                'endLine' => 361,
                                'startTokenPos' => 2033,
                                'startFilePos' => 14039,
                                'endTokenPos' => 2033,
                                'endFilePos' => 14043,
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
                        'startLine' => 361,
                        'endLine' => 361,
                        'startColumn' => 53,
                        'endColumn' => 74,
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
 * Get the difference in weekend days using a filter.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return int
 */',
                'startLine' => 361,
                'endLine' => 368,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'diffInHours' => [
                'name' => 'diffInHours',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 378,
                                'endLine' => 378,
                                'startTokenPos' => 2109,
                                'startFilePos' => 14617,
                                'endTokenPos' => 2109,
                                'endFilePos' => 14620,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 378,
                        'endLine' => 378,
                        'startColumn' => 33,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 378,
                                'endLine' => 378,
                                'startTokenPos' => 2118,
                                'startFilePos' => 14640,
                                'endTokenPos' => 2118,
                                'endFilePos' => 14644,
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
                        'startLine' => 378,
                        'endLine' => 378,
                        'startColumn' => 47,
                        'endColumn' => 68,
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
 * Get the difference in hours.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return float
 */',
                'startLine' => 378,
                'endLine' => 381,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'diffInMinutes' => [
                'name' => 'diffInMinutes',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 391,
                                'endLine' => 391,
                                'startTokenPos' => 2159,
                                'startFilePos' => 15069,
                                'endTokenPos' => 2159,
                                'endFilePos' => 15072,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 391,
                        'endLine' => 391,
                        'startColumn' => 35,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 391,
                                'endLine' => 391,
                                'startTokenPos' => 2168,
                                'startFilePos' => 15092,
                                'endTokenPos' => 2168,
                                'endFilePos' => 15096,
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
                        'startLine' => 391,
                        'endLine' => 391,
                        'startColumn' => 49,
                        'endColumn' => 70,
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
 * Get the difference in minutes.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return float
 */',
                'startLine' => 391,
                'endLine' => 394,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'diffInSeconds' => [
                'name' => 'diffInSeconds',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 404,
                                'endLine' => 404,
                                'startTokenPos' => 2209,
                                'startFilePos' => 15523,
                                'endTokenPos' => 2209,
                                'endFilePos' => 15526,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 404,
                        'endLine' => 404,
                        'startColumn' => 35,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 404,
                                'endLine' => 404,
                                'startTokenPos' => 2218,
                                'startFilePos' => 15546,
                                'endTokenPos' => 2218,
                                'endFilePos' => 15550,
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
                        'startLine' => 404,
                        'endLine' => 404,
                        'startColumn' => 49,
                        'endColumn' => 70,
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
 * Get the difference in seconds.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return float
 */',
                'startLine' => 404,
                'endLine' => 407,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'diffInMicroseconds' => [
                'name' => 'diffInMicroseconds',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 417,
                                'endLine' => 417,
                                'startTokenPos' => 2259,
                                'startFilePos' => 15997,
                                'endTokenPos' => 2259,
                                'endFilePos' => 16000,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 417,
                        'endLine' => 417,
                        'startColumn' => 40,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 417,
                                'endLine' => 417,
                                'startTokenPos' => 2268,
                                'startFilePos' => 16020,
                                'endTokenPos' => 2268,
                                'endFilePos' => 16024,
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
                        'startLine' => 417,
                        'endLine' => 417,
                        'startColumn' => 54,
                        'endColumn' => 75,
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
 * Get the difference in microseconds.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return float
 */',
                'startLine' => 417,
                'endLine' => 425,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'diffInMilliseconds' => [
                'name' => 'diffInMilliseconds',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 435,
                                'endLine' => 435,
                                'startTokenPos' => 2355,
                                'startFilePos' => 16646,
                                'endTokenPos' => 2355,
                                'endFilePos' => 16649,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 435,
                        'endLine' => 435,
                        'startColumn' => 40,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 435,
                                'endLine' => 435,
                                'startTokenPos' => 2364,
                                'startFilePos' => 16669,
                                'endTokenPos' => 2364,
                                'endFilePos' => 16673,
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
                        'startLine' => 435,
                        'endLine' => 435,
                        'startColumn' => 54,
                        'endColumn' => 75,
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
 * Get the difference in milliseconds.
 *
 * @param \\Carbon\\CarbonInterface|\\DateTimeInterface|string|null $date
 * @param bool                                                   $absolute Get the absolute of the difference
 *
 * @return float
 */',
                'startLine' => 435,
                'endLine' => 438,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'secondsSinceMidnight' => [
                'name' => 'secondsSinceMidnight',
                'parameters' => [
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
 * The number of seconds since midnight.
 *
 * @return float
 */',
                'startLine' => 445,
                'endLine' => 448,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'secondsUntilEndOfDay' => [
                'name' => 'secondsUntilEndOfDay',
                'parameters' => [
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
 * The number of seconds until 23:59:59.
 *
 * @return float
 */',
                'startLine' => 455,
                'endLine' => 458,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'diffForHumans' => [
                'name' => 'diffForHumans',
                'parameters' => [
                    'other' => [
                        'name' => 'other',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 510,
                                'endLine' => 510,
                                'startTokenPos' => 2481,
                                'startFilePos' => 22333,
                                'endTokenPos' => 2481,
                                'endFilePos' => 22336,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 510,
                        'endLine' => 510,
                        'startColumn' => 35,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'syntax' => [
                        'name' => 'syntax',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 510,
                                'endLine' => 510,
                                'startTokenPos' => 2488,
                                'startFilePos' => 22349,
                                'endTokenPos' => 2488,
                                'endFilePos' => 22352,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 510,
                        'endLine' => 510,
                        'startColumn' => 50,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'short' => [
                        'name' => 'short',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 510,
                                'endLine' => 510,
                                'startTokenPos' => 2495,
                                'startFilePos' => 22364,
                                'endTokenPos' => 2495,
                                'endFilePos' => 22368,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 510,
                        'endLine' => 510,
                        'startColumn' => 66,
                        'endColumn' => 79,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'parts' => [
                        'name' => 'parts',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 510,
                                'endLine' => 510,
                                'startTokenPos' => 2502,
                                'startFilePos' => 22380,
                                'endTokenPos' => 2502,
                                'endFilePos' => 22380,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 510,
                        'endLine' => 510,
                        'startColumn' => 82,
                        'endColumn' => 91,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 510,
                                'endLine' => 510,
                                'startTokenPos' => 2509,
                                'startFilePos' => 22394,
                                'endTokenPos' => 2509,
                                'endFilePos' => 22397,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 510,
                        'endLine' => 510,
                        'startColumn' => 94,
                        'endColumn' => 108,
                        'parameterIndex' => 4,
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
 * Get the difference in a human readable format in the current locale from current instance to an other
 * instance given (or now if null given).
 *
 * @example
 * ```
 * echo Carbon::tomorrow()->diffForHumans() . "\\n";
 * echo Carbon::tomorrow()->diffForHumans([\'parts\' => 2]) . "\\n";
 * echo Carbon::tomorrow()->diffForHumans([\'parts\' => 3, \'join\' => true]) . "\\n";
 * echo Carbon::tomorrow()->diffForHumans(Carbon::yesterday()) . "\\n";
 * echo Carbon::tomorrow()->diffForHumans(Carbon::yesterday(), [\'short\' => true]) . "\\n";
 * ```
 *
 * @param Carbon|DateTimeInterface|string|array|null $other   if array passed, will be used as parameters array, see $syntax below;
 *                                                            if null passed, now will be used as comparison reference;
 *                                                            if any other type, it will be converted to date and used as reference.
 * @param int|array                                  $syntax  if array passed, parameters will be extracted from it, the array may contains:
 *                                                            ⦿ \'syntax\' entry (see below)
 *                                                            ⦿ \'short\' entry (see below)
 *                                                            ⦿ \'parts\' entry (see below)
 *                                                            ⦿ \'options\' entry (see below)
 *                                                            ⦿ \'skip\' entry, list of units to skip (array of strings or a single string,
 *                                                            ` it can be the unit name (singular or plural) or its shortcut
 *                                                            ` (y, m, w, d, h, min, s, ms, µs).
 *                                                            ⦿ \'aUnit\' entry, prefer "an hour" over "1 hour" if true
 *                                                            ⦿ \'altNumbers\' entry, use alternative numbers if available
 *                                                            ` (from the current language if true is passed, from the given language(s)
 *                                                            ` if array or string is passed)
 *                                                            ⦿ \'join\' entry determines how to join multiple parts of the string
 *                                                            `  - if $join is a string, it\'s used as a joiner glue
 *                                                            `  - if $join is a callable/closure, it get the list of string and should return a string
 *                                                            `  - if $join is an array, the first item will be the default glue, and the second item
 *                                                            `    will be used instead of the glue for the last item
 *                                                            `  - if $join is true, it will be guessed from the locale (\'list\' translation file entry)
 *                                                            `  - if $join is missing, a space will be used as glue
 *                                                            ⦿ \'other\' entry (see above)
 *                                                            ⦿ \'minimumUnit\' entry determines the smallest unit of time to display can be long or
 *                                                            `  short form of the units, e.g. \'hour\' or \'h\' (default value: s)
 *                                                            ⦿ \'locale\' language in which the diff should be output (has no effect if \'translator\' key is set)
 *                                                            ⦿ \'translator\' a custom translator to use to translator the output.
 *                                                            if int passed, it adds modifiers:
 *                                                            Possible values:
 *                                                            - CarbonInterface::DIFF_ABSOLUTE          no modifiers
 *                                                            - CarbonInterface::DIFF_RELATIVE_TO_NOW   add ago/from now modifier
 *                                                            - CarbonInterface::DIFF_RELATIVE_TO_OTHER add before/after modifier
 *                                                            Default value: CarbonInterface::DIFF_ABSOLUTE
 * @param bool                                       $short   displays short format of time units
 * @param int                                        $parts   maximum number of parts to display (default value: 1: single unit)
 * @param int                                        $options human diff options
 */',
                'startLine' => 510,
                'endLine' => 536,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'from' => [
                'name' => 'from',
                'parameters' => [
                    'other' => [
                        'name' => 'other',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 572,
                                'endLine' => 572,
                                'startTokenPos' => 2809,
                                'startFilePos' => 26713,
                                'endTokenPos' => 2809,
                                'endFilePos' => 26716,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 572,
                        'endLine' => 572,
                        'startColumn' => 26,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'syntax' => [
                        'name' => 'syntax',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 572,
                                'endLine' => 572,
                                'startTokenPos' => 2816,
                                'startFilePos' => 26729,
                                'endTokenPos' => 2816,
                                'endFilePos' => 26732,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 572,
                        'endLine' => 572,
                        'startColumn' => 41,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'short' => [
                        'name' => 'short',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 572,
                                'endLine' => 572,
                                'startTokenPos' => 2823,
                                'startFilePos' => 26744,
                                'endTokenPos' => 2823,
                                'endFilePos' => 26748,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 572,
                        'endLine' => 572,
                        'startColumn' => 57,
                        'endColumn' => 70,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'parts' => [
                        'name' => 'parts',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 572,
                                'endLine' => 572,
                                'startTokenPos' => 2830,
                                'startFilePos' => 26760,
                                'endTokenPos' => 2830,
                                'endFilePos' => 26760,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 572,
                        'endLine' => 572,
                        'startColumn' => 73,
                        'endColumn' => 82,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 572,
                                'endLine' => 572,
                                'startTokenPos' => 2837,
                                'startFilePos' => 26774,
                                'endTokenPos' => 2837,
                                'endFilePos' => 26777,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 572,
                        'endLine' => 572,
                        'startColumn' => 85,
                        'endColumn' => 99,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @alias diffForHumans
 *
 * Get the difference in a human readable format in the current locale from current instance to an other
 * instance given (or now if null given).
 *
 * @param Carbon|\\DateTimeInterface|string|array|null $other   if array passed, will be used as parameters array, see $syntax below;
 *                                                             if null passed, now will be used as comparison reference;
 *                                                             if any other type, it will be converted to date and used as reference.
 * @param int|array                                   $syntax  if array passed, parameters will be extracted from it, the array may contains:
 *                                                             - \'syntax\' entry (see below)
 *                                                             - \'short\' entry (see below)
 *                                                             - \'parts\' entry (see below)
 *                                                             - \'options\' entry (see below)
 *                                                             - \'join\' entry determines how to join multiple parts of the string
 *                                                             `  - if $join is a string, it\'s used as a joiner glue
 *                                                             `  - if $join is a callable/closure, it get the list of string and should return a string
 *                                                             `  - if $join is an array, the first item will be the default glue, and the second item
 *                                                             `    will be used instead of the glue for the last item
 *                                                             `  - if $join is true, it will be guessed from the locale (\'list\' translation file entry)
 *                                                             `  - if $join is missing, a space will be used as glue
 *                                                             - \'other\' entry (see above)
 *                                                             if int passed, it add modifiers:
 *                                                             Possible values:
 *                                                             - CarbonInterface::DIFF_ABSOLUTE          no modifiers
 *                                                             - CarbonInterface::DIFF_RELATIVE_TO_NOW   add ago/from now modifier
 *                                                             - CarbonInterface::DIFF_RELATIVE_TO_OTHER add before/after modifier
 *                                                             Default value: CarbonInterface::DIFF_ABSOLUTE
 * @param bool                                        $short   displays short format of time units
 * @param int                                         $parts   maximum number of parts to display (default value: 1: single unit)
 * @param int                                         $options human diff options
 *
 * @return string
 */',
                'startLine' => 572,
                'endLine' => 575,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'since' => [
                'name' => 'since',
                'parameters' => [
                    'other' => [
                        'name' => 'other',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 583,
                                'endLine' => 583,
                                'startTokenPos' => 2878,
                                'startFilePos' => 27114,
                                'endTokenPos' => 2878,
                                'endFilePos' => 27117,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 583,
                        'endLine' => 583,
                        'startColumn' => 27,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'syntax' => [
                        'name' => 'syntax',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 583,
                                'endLine' => 583,
                                'startTokenPos' => 2885,
                                'startFilePos' => 27130,
                                'endTokenPos' => 2885,
                                'endFilePos' => 27133,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 583,
                        'endLine' => 583,
                        'startColumn' => 42,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'short' => [
                        'name' => 'short',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 583,
                                'endLine' => 583,
                                'startTokenPos' => 2892,
                                'startFilePos' => 27145,
                                'endTokenPos' => 2892,
                                'endFilePos' => 27149,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 583,
                        'endLine' => 583,
                        'startColumn' => 58,
                        'endColumn' => 71,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'parts' => [
                        'name' => 'parts',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 583,
                                'endLine' => 583,
                                'startTokenPos' => 2899,
                                'startFilePos' => 27161,
                                'endTokenPos' => 2899,
                                'endFilePos' => 27161,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 583,
                        'endLine' => 583,
                        'startColumn' => 74,
                        'endColumn' => 83,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 583,
                                'endLine' => 583,
                                'startTokenPos' => 2906,
                                'startFilePos' => 27175,
                                'endTokenPos' => 2906,
                                'endFilePos' => 27178,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 583,
                        'endLine' => 583,
                        'startColumn' => 86,
                        'endColumn' => 100,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @alias diffForHumans
 *
 * Get the difference in a human readable format in the current locale from current instance to an other
 * instance given (or now if null given).
 */',
                'startLine' => 583,
                'endLine' => 586,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'to' => [
                'name' => 'to',
                'parameters' => [
                    'other' => [
                        'name' => 'other',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 636,
                                'endLine' => 636,
                                'startTokenPos' => 2947,
                                'startFilePos' => 30958,
                                'endTokenPos' => 2947,
                                'endFilePos' => 30961,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 636,
                        'endLine' => 636,
                        'startColumn' => 24,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'syntax' => [
                        'name' => 'syntax',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 636,
                                'endLine' => 636,
                                'startTokenPos' => 2954,
                                'startFilePos' => 30974,
                                'endTokenPos' => 2954,
                                'endFilePos' => 30977,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 636,
                        'endLine' => 636,
                        'startColumn' => 39,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'short' => [
                        'name' => 'short',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 636,
                                'endLine' => 636,
                                'startTokenPos' => 2961,
                                'startFilePos' => 30989,
                                'endTokenPos' => 2961,
                                'endFilePos' => 30993,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 636,
                        'endLine' => 636,
                        'startColumn' => 55,
                        'endColumn' => 68,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'parts' => [
                        'name' => 'parts',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 636,
                                'endLine' => 636,
                                'startTokenPos' => 2968,
                                'startFilePos' => 31005,
                                'endTokenPos' => 2968,
                                'endFilePos' => 31005,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 636,
                        'endLine' => 636,
                        'startColumn' => 71,
                        'endColumn' => 80,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 636,
                                'endLine' => 636,
                                'startTokenPos' => 2975,
                                'startFilePos' => 31019,
                                'endTokenPos' => 2975,
                                'endFilePos' => 31022,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 636,
                        'endLine' => 636,
                        'startColumn' => 83,
                        'endColumn' => 97,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the difference in a human readable format in the current locale from an other
 * instance given (or now if null given) to current instance.
 *
 * When comparing a value in the past to default now:
 * 1 hour from now
 * 5 months from now
 *
 * When comparing a value in the future to default now:
 * 1 hour ago
 * 5 months ago
 *
 * When comparing a value in the past to another value:
 * 1 hour after
 * 5 months after
 *
 * When comparing a value in the future to another value:
 * 1 hour before
 * 5 months before
 *
 * @param Carbon|\\DateTimeInterface|string|array|null $other   if array passed, will be used as parameters array, see $syntax below;
 *                                                             if null passed, now will be used as comparison reference;
 *                                                             if any other type, it will be converted to date and used as reference.
 * @param int|array                                   $syntax  if array passed, parameters will be extracted from it, the array may contains:
 *                                                             - \'syntax\' entry (see below)
 *                                                             - \'short\' entry (see below)
 *                                                             - \'parts\' entry (see below)
 *                                                             - \'options\' entry (see below)
 *                                                             - \'join\' entry determines how to join multiple parts of the string
 *                                                             `  - if $join is a string, it\'s used as a joiner glue
 *                                                             `  - if $join is a callable/closure, it get the list of string and should return a string
 *                                                             `  - if $join is an array, the first item will be the default glue, and the second item
 *                                                             `    will be used instead of the glue for the last item
 *                                                             `  - if $join is true, it will be guessed from the locale (\'list\' translation file entry)
 *                                                             `  - if $join is missing, a space will be used as glue
 *                                                             - \'other\' entry (see above)
 *                                                             if int passed, it add modifiers:
 *                                                             Possible values:
 *                                                             - CarbonInterface::DIFF_ABSOLUTE          no modifiers
 *                                                             - CarbonInterface::DIFF_RELATIVE_TO_NOW   add ago/from now modifier
 *                                                             - CarbonInterface::DIFF_RELATIVE_TO_OTHER add before/after modifier
 *                                                             Default value: CarbonInterface::DIFF_ABSOLUTE
 * @param bool                                        $short   displays short format of time units
 * @param int                                         $parts   maximum number of parts to display (default value: 1: single unit)
 * @param int                                         $options human diff options
 *
 * @return string
 */',
                'startLine' => 636,
                'endLine' => 643,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'until' => [
                'name' => 'until',
                'parameters' => [
                    'other' => [
                        'name' => 'other',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 679,
                                'endLine' => 679,
                                'startTokenPos' => 3046,
                                'startFilePos' => 34518,
                                'endTokenPos' => 3046,
                                'endFilePos' => 34521,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 679,
                        'endLine' => 679,
                        'startColumn' => 27,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'syntax' => [
                        'name' => 'syntax',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 679,
                                'endLine' => 679,
                                'startTokenPos' => 3053,
                                'startFilePos' => 34534,
                                'endTokenPos' => 3053,
                                'endFilePos' => 34537,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 679,
                        'endLine' => 679,
                        'startColumn' => 42,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'short' => [
                        'name' => 'short',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 679,
                                'endLine' => 679,
                                'startTokenPos' => 3060,
                                'startFilePos' => 34549,
                                'endTokenPos' => 3060,
                                'endFilePos' => 34553,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 679,
                        'endLine' => 679,
                        'startColumn' => 58,
                        'endColumn' => 71,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'parts' => [
                        'name' => 'parts',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 679,
                                'endLine' => 679,
                                'startTokenPos' => 3067,
                                'startFilePos' => 34565,
                                'endTokenPos' => 3067,
                                'endFilePos' => 34565,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 679,
                        'endLine' => 679,
                        'startColumn' => 74,
                        'endColumn' => 83,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 679,
                                'endLine' => 679,
                                'startTokenPos' => 3074,
                                'startFilePos' => 34579,
                                'endTokenPos' => 3074,
                                'endFilePos' => 34582,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 679,
                        'endLine' => 679,
                        'startColumn' => 86,
                        'endColumn' => 100,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @alias to
 *
 * Get the difference in a human readable format in the current locale from an other
 * instance given (or now if null given) to current instance.
 *
 * @param Carbon|\\DateTimeInterface|string|array|null $other   if array passed, will be used as parameters array, see $syntax below;
 *                                                             if null passed, now will be used as comparison reference;
 *                                                             if any other type, it will be converted to date and used as reference.
 * @param int|array                                   $syntax  if array passed, parameters will be extracted from it, the array may contains:
 *                                                             - \'syntax\' entry (see below)
 *                                                             - \'short\' entry (see below)
 *                                                             - \'parts\' entry (see below)
 *                                                             - \'options\' entry (see below)
 *                                                             - \'join\' entry determines how to join multiple parts of the string
 *                                                             `  - if $join is a string, it\'s used as a joiner glue
 *                                                             `  - if $join is a callable/closure, it get the list of string and should return a string
 *                                                             `  - if $join is an array, the first item will be the default glue, and the second item
 *                                                             `    will be used instead of the glue for the last item
 *                                                             `  - if $join is true, it will be guessed from the locale (\'list\' translation file entry)
 *                                                             `  - if $join is missing, a space will be used as glue
 *                                                             - \'other\' entry (see above)
 *                                                             if int passed, it add modifiers:
 *                                                             Possible values:
 *                                                             - CarbonInterface::DIFF_ABSOLUTE          no modifiers
 *                                                             - CarbonInterface::DIFF_RELATIVE_TO_NOW   add ago/from now modifier
 *                                                             - CarbonInterface::DIFF_RELATIVE_TO_OTHER add before/after modifier
 *                                                             Default value: CarbonInterface::DIFF_ABSOLUTE
 * @param bool                                        $short   displays short format of time units
 * @param int                                         $parts   maximum number of parts to display (default value: 1: single unit)
 * @param int                                         $options human diff options
 *
 * @return string
 */',
                'startLine' => 679,
                'endLine' => 682,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'fromNow' => [
                'name' => 'fromNow',
                'parameters' => [
                    'syntax' => [
                        'name' => 'syntax',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 712,
                                'endLine' => 712,
                                'startTokenPos' => 3115,
                                'startFilePos' => 36665,
                                'endTokenPos' => 3115,
                                'endFilePos' => 36668,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 712,
                        'endLine' => 712,
                        'startColumn' => 29,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'short' => [
                        'name' => 'short',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 712,
                                'endLine' => 712,
                                'startTokenPos' => 3122,
                                'startFilePos' => 36680,
                                'endTokenPos' => 3122,
                                'endFilePos' => 36684,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 712,
                        'endLine' => 712,
                        'startColumn' => 45,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'parts' => [
                        'name' => 'parts',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 712,
                                'endLine' => 712,
                                'startTokenPos' => 3129,
                                'startFilePos' => 36696,
                                'endTokenPos' => 3129,
                                'endFilePos' => 36696,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 712,
                        'endLine' => 712,
                        'startColumn' => 61,
                        'endColumn' => 70,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 712,
                                'endLine' => 712,
                                'startTokenPos' => 3136,
                                'startFilePos' => 36710,
                                'endTokenPos' => 3136,
                                'endFilePos' => 36713,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 712,
                        'endLine' => 712,
                        'startColumn' => 73,
                        'endColumn' => 87,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the difference in a human readable format in the current locale from current
 * instance to now.
 *
 * @param int|array $syntax  if array passed, parameters will be extracted from it, the array may contains:
 *                           - \'syntax\' entry (see below)
 *                           - \'short\' entry (see below)
 *                           - \'parts\' entry (see below)
 *                           - \'options\' entry (see below)
 *                           - \'join\' entry determines how to join multiple parts of the string
 *                           `  - if $join is a string, it\'s used as a joiner glue
 *                           `  - if $join is a callable/closure, it get the list of string and should return a string
 *                           `  - if $join is an array, the first item will be the default glue, and the second item
 *                           `    will be used instead of the glue for the last item
 *                           `  - if $join is true, it will be guessed from the locale (\'list\' translation file entry)
 *                           `  - if $join is missing, a space will be used as glue
 *                           if int passed, it add modifiers:
 *                           Possible values:
 *                           - CarbonInterface::DIFF_ABSOLUTE          no modifiers
 *                           - CarbonInterface::DIFF_RELATIVE_TO_NOW   add ago/from now modifier
 *                           - CarbonInterface::DIFF_RELATIVE_TO_OTHER add before/after modifier
 *                           Default value: CarbonInterface::DIFF_ABSOLUTE
 * @param bool      $short   displays short format of time units
 * @param int       $parts   maximum number of parts to display (default value: 1: single unit)
 * @param int       $options human diff options
 *
 * @return string
 */',
                'startLine' => 712,
                'endLine' => 721,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'toNow' => [
                'name' => 'toNow',
                'parameters' => [
                    'syntax' => [
                        'name' => 'syntax',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 751,
                                'endLine' => 751,
                                'startTokenPos' => 3230,
                                'startFilePos' => 38985,
                                'endTokenPos' => 3230,
                                'endFilePos' => 38988,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 751,
                        'endLine' => 751,
                        'startColumn' => 27,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'short' => [
                        'name' => 'short',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 751,
                                'endLine' => 751,
                                'startTokenPos' => 3237,
                                'startFilePos' => 39000,
                                'endTokenPos' => 3237,
                                'endFilePos' => 39004,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 751,
                        'endLine' => 751,
                        'startColumn' => 43,
                        'endColumn' => 56,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'parts' => [
                        'name' => 'parts',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 751,
                                'endLine' => 751,
                                'startTokenPos' => 3244,
                                'startFilePos' => 39016,
                                'endTokenPos' => 3244,
                                'endFilePos' => 39016,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 751,
                        'endLine' => 751,
                        'startColumn' => 59,
                        'endColumn' => 68,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 751,
                                'endLine' => 751,
                                'startTokenPos' => 3251,
                                'startFilePos' => 39030,
                                'endTokenPos' => 3251,
                                'endFilePos' => 39033,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 751,
                        'endLine' => 751,
                        'startColumn' => 71,
                        'endColumn' => 85,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the difference in a human readable format in the current locale from an other
 * instance given to now
 *
 * @param int|array $syntax  if array passed, parameters will be extracted from it, the array may contains:
 *                           - \'syntax\' entry (see below)
 *                           - \'short\' entry (see below)
 *                           - \'parts\' entry (see below)
 *                           - \'options\' entry (see below)
 *                           - \'join\' entry determines how to join multiple parts of the string
 *                           `  - if $join is a string, it\'s used as a joiner glue
 *                           `  - if $join is a callable/closure, it get the list of string and should return a string
 *                           `  - if $join is an array, the first item will be the default glue, and the second item
 *                           `    will be used instead of the glue for the last item
 *                           `  - if $join is true, it will be guessed from the locale (\'list\' translation file entry)
 *                           `  - if $join is missing, a space will be used as glue
 *                           if int passed, it add modifiers:
 *                           Possible values:
 *                           - CarbonInterface::DIFF_ABSOLUTE          no modifiers
 *                           - CarbonInterface::DIFF_RELATIVE_TO_NOW   add ago/from now modifier
 *                           - CarbonInterface::DIFF_RELATIVE_TO_OTHER add before/after modifier
 *                           Default value: CarbonInterface::DIFF_ABSOLUTE
 * @param bool      $short   displays short format of time units
 * @param int       $parts   maximum number of parts to display (default value: 1: single part)
 * @param int       $options human diff options
 *
 * @return string
 */',
                'startLine' => 751,
                'endLine' => 754,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'ago' => [
                'name' => 'ago',
                'parameters' => [
                    'syntax' => [
                        'name' => 'syntax',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 784,
                                'endLine' => 784,
                                'startTokenPos' => 3292,
                                'startFilePos' => 41116,
                                'endTokenPos' => 3292,
                                'endFilePos' => 41119,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 784,
                        'endLine' => 784,
                        'startColumn' => 25,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'short' => [
                        'name' => 'short',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 784,
                                'endLine' => 784,
                                'startTokenPos' => 3299,
                                'startFilePos' => 41131,
                                'endTokenPos' => 3299,
                                'endFilePos' => 41135,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 784,
                        'endLine' => 784,
                        'startColumn' => 41,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'parts' => [
                        'name' => 'parts',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 784,
                                'endLine' => 784,
                                'startTokenPos' => 3306,
                                'startFilePos' => 41147,
                                'endTokenPos' => 3306,
                                'endFilePos' => 41147,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 784,
                        'endLine' => 784,
                        'startColumn' => 57,
                        'endColumn' => 66,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 784,
                                'endLine' => 784,
                                'startTokenPos' => 3313,
                                'startFilePos' => 41161,
                                'endTokenPos' => 3313,
                                'endFilePos' => 41164,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 784,
                        'endLine' => 784,
                        'startColumn' => 69,
                        'endColumn' => 83,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the difference in a human readable format in the current locale from an other
 * instance given to now
 *
 * @param int|array $syntax  if array passed, parameters will be extracted from it, the array may contains:
 *                           - \'syntax\' entry (see below)
 *                           - \'short\' entry (see below)
 *                           - \'parts\' entry (see below)
 *                           - \'options\' entry (see below)
 *                           - \'join\' entry determines how to join multiple parts of the string
 *                           `  - if $join is a string, it\'s used as a joiner glue
 *                           `  - if $join is a callable/closure, it get the list of string and should return a string
 *                           `  - if $join is an array, the first item will be the default glue, and the second item
 *                           `    will be used instead of the glue for the last item
 *                           `  - if $join is true, it will be guessed from the locale (\'list\' translation file entry)
 *                           `  - if $join is missing, a space will be used as glue
 *                           if int passed, it add modifiers:
 *                           Possible values:
 *                           - CarbonInterface::DIFF_ABSOLUTE          no modifiers
 *                           - CarbonInterface::DIFF_RELATIVE_TO_NOW   add ago/from now modifier
 *                           - CarbonInterface::DIFF_RELATIVE_TO_OTHER add before/after modifier
 *                           Default value: CarbonInterface::DIFF_ABSOLUTE
 * @param bool      $short   displays short format of time units
 * @param int       $parts   maximum number of parts to display (default value: 1: single part)
 * @param int       $options human diff options
 *
 * @return string
 */',
                'startLine' => 784,
                'endLine' => 793,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'timespan' => [
                'name' => 'timespan',
                'parameters' => [
                    'other' => [
                        'name' => 'other',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 801,
                                'endLine' => 801,
                                'startTokenPos' => 3407,
                                'startFilePos' => 41671,
                                'endTokenPos' => 3407,
                                'endFilePos' => 41674,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 801,
                        'endLine' => 801,
                        'startColumn' => 30,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 801,
                                'endLine' => 801,
                                'startTokenPos' => 3414,
                                'startFilePos' => 41689,
                                'endTokenPos' => 3414,
                                'endFilePos' => 41692,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 801,
                        'endLine' => 801,
                        'startColumn' => 45,
                        'endColumn' => 60,
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
 * Get the difference in a human-readable format in the current locale from current instance to another
 * instance given (or now if null given).
 *
 * @return string
 */',
                'startLine' => 801,
                'endLine' => 812,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'calendar' => [
                'name' => 'calendar',
                'parameters' => [
                    'referenceTime' => [
                        'name' => 'referenceTime',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 825,
                                'endLine' => 825,
                                'startTokenPos' => 3516,
                                'startFilePos' => 42509,
                                'endTokenPos' => 3516,
                                'endFilePos' => 42512,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 825,
                        'endLine' => 825,
                        'startColumn' => 30,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'formats' => [
                        'name' => 'formats',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 825,
                                'endLine' => 825,
                                'startTokenPos' => 3525,
                                'startFilePos' => 42532,
                                'endTokenPos' => 3526,
                                'endFilePos' => 42533,
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
                        'startLine' => 825,
                        'endLine' => 825,
                        'startColumn' => 53,
                        'endColumn' => 71,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns either day of week + time (e.g. "Last Friday at 3:30 PM") if reference time is within 7 days,
 * or a calendar date (e.g. "10/29/2017") otherwise.
 *
 * Language, date and time formats will change according to the current locale.
 *
 * @param Carbon|\\DateTimeInterface|string|null $referenceTime
 * @param array                                 $formats
 *
 * @return string
 */',
                'startLine' => 825,
                'endLine' => 849,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
                'aliasName' => null,
            ],
            'getIntervalDayDiff' => [
                'name' => 'getIntervalDayDiff',
                'parameters' => [
                    'interval' => [
                        'name' => 'interval',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'DateInterval',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 851,
                        'endLine' => 851,
                        'startColumn' => 41,
                        'endColumn' => 62,
                        'parameterIndex' => 0,
                        'isOptional' => false,
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
                'docComment' => null,
                'startLine' => 851,
                'endLine' => 854,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Difference',
                'implementingClassName' => 'Carbon\\Traits\\Difference',
                'currentClassName' => 'Carbon\\Traits\\Difference',
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
