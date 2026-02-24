<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Timestamp.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Timestamp
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-b4487b810e6a4b05fa5c9d338b6ec5d8339f3719521d6a28144c09ff0daaa4cf-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Carbon\\Traits\\Timestamp',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Timestamp.php',
            ],
        ],
        'namespace' => 'Carbon\\Traits',
        'name' => 'Carbon\\Traits\\Timestamp',
        'shortName' => 'Timestamp',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Trait Timestamp.
 */',
        'attributes' => [
        ],
        'startLine' => 21,
        'endLine' => 192,
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
            'createFromTimestamp' => [
                'name' => 'createFromTimestamp',
                'parameters' => [
                    'timestamp' => [
                        'name' => 'timestamp',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
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
                        'startLine' => 30,
                        'endLine' => 30,
                        'startColumn' => 9,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 31,
                                'endLine' => 31,
                                'startTokenPos' => 66,
                                'startFilePos' => 718,
                                'endTokenPos' => 66,
                                'endFilePos' => 721,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeZone',
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
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    3 => [
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
                        'startLine' => 31,
                        'endLine' => 31,
                        'startColumn' => 9,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                    0 => [
                        'name' => 'ReturnTypeWillChange',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/**
 * Create a Carbon instance from a timestamp and set the timezone (UTC by default).
 *
 * Timestamp input can be given as int, float or a string containing one or more numbers.
 */',
                'startLine' => 28,
                'endLine' => 36,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Timestamp',
                'implementingClassName' => 'Carbon\\Traits\\Timestamp',
                'currentClassName' => 'Carbon\\Traits\\Timestamp',
                'aliasName' => null,
            ],
            'createFromTimestampUTC' => [
                'name' => 'createFromTimestampUTC',
                'parameters' => [
                    'timestamp' => [
                        'name' => 'timestamp',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
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
                        'startLine' => 43,
                        'endLine' => 43,
                        'startColumn' => 51,
                        'endColumn' => 77,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a Carbon instance from a timestamp keeping the timezone to UTC.
 *
 * Timestamp input can be given as int, float or a string containing one or more numbers.
 */',
                'startLine' => 43,
                'endLine' => 52,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Timestamp',
                'implementingClassName' => 'Carbon\\Traits\\Timestamp',
                'currentClassName' => 'Carbon\\Traits\\Timestamp',
                'aliasName' => null,
            ],
            'createFromTimestampMsUTC' => [
                'name' => 'createFromTimestampMsUTC',
                'parameters' => [
                    'timestamp' => [
                        'name' => 'timestamp',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 63,
                        'endLine' => 63,
                        'startColumn' => 53,
                        'endColumn' => 62,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a Carbon instance from a timestamp in milliseconds.
 *
 * Timestamp input can be given as int, float or a string containing one or more numbers.
 *
 * @param float|int|string $timestamp
 *
 * @return static
 */',
                'startLine' => 63,
                'endLine' => 76,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Timestamp',
                'implementingClassName' => 'Carbon\\Traits\\Timestamp',
                'currentClassName' => 'Carbon\\Traits\\Timestamp',
                'aliasName' => null,
            ],
            'createFromTimestampMs' => [
                'name' => 'createFromTimestampMs',
                'parameters' => [
                    'timestamp' => [
                        'name' => 'timestamp',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
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
                        'startLine' => 84,
                        'endLine' => 84,
                        'startColumn' => 9,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'timezone' => [
                        'name' => 'timezone',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 85,
                                'endLine' => 85,
                                'startTokenPos' => 485,
                                'startFilePos' => 3019,
                                'endTokenPos' => 485,
                                'endFilePos' => 3022,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'DateTimeZone',
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
                                            'name' => 'int',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    3 => [
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
                        'startLine' => 85,
                        'endLine' => 85,
                        'startColumn' => 9,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a Carbon instance from a timestamp in milliseconds.
 *
 * Timestamp input can be given as int, float or a string containing one or more numbers.
 */',
                'startLine' => 83,
                'endLine' => 90,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Timestamp',
                'implementingClassName' => 'Carbon\\Traits\\Timestamp',
                'currentClassName' => 'Carbon\\Traits\\Timestamp',
                'aliasName' => null,
            ],
            'timestamp' => [
                'name' => 'timestamp',
                'parameters' => [
                    'timestamp' => [
                        'name' => 'timestamp',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'float',
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
                        'startLine' => 97,
                        'endLine' => 97,
                        'startColumn' => 31,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the instance\'s timestamp.
 *
 * Timestamp input can be given as int, float or a string containing one or more numbers.
 */',
                'startLine' => 97,
                'endLine' => 100,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Timestamp',
                'implementingClassName' => 'Carbon\\Traits\\Timestamp',
                'currentClassName' => 'Carbon\\Traits\\Timestamp',
                'aliasName' => null,
            ],
            'getPreciseTimestamp' => [
                'name' => 'getPreciseTimestamp',
                'parameters' => [
                    'precision' => [
                        'name' => 'precision',
                        'default' => [
                            'code' => '6',
                            'attributes' => [
                                'startLine' => 120,
                                'endLine' => 120,
                                'startTokenPos' => 577,
                                'startFilePos' => 4478,
                                'endTokenPos' => 577,
                                'endFilePos' => 4478,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 120,
                        'endLine' => 120,
                        'startColumn' => 41,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
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
 * Returns a timestamp rounded with the given precision (6 by default).
 *
 * @example getPreciseTimestamp()   1532087464437474 (microsecond maximum precision)
 * @example getPreciseTimestamp(6)  1532087464437474
 * @example getPreciseTimestamp(5)  153208746443747  (1/100000 second precision)
 * @example getPreciseTimestamp(4)  15320874644375   (1/10000 second precision)
 * @example getPreciseTimestamp(3)  1532087464437    (millisecond precision)
 * @example getPreciseTimestamp(2)  153208746444     (1/100 second precision)
 * @example getPreciseTimestamp(1)  15320874644      (1/10 second precision)
 * @example getPreciseTimestamp(0)  1532087464       (second precision)
 * @example getPreciseTimestamp(-1) 153208746        (10 second precision)
 * @example getPreciseTimestamp(-2) 15320875         (100 second precision)
 *
 * @param int $precision
 *
 * @return float
 */',
                'startLine' => 120,
                'endLine' => 123,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Timestamp',
                'implementingClassName' => 'Carbon\\Traits\\Timestamp',
                'currentClassName' => 'Carbon\\Traits\\Timestamp',
                'aliasName' => null,
            ],
            'valueOf' => [
                'name' => 'valueOf',
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
 * Returns the milliseconds timestamps used amongst other by Date javascript objects.
 *
 * @return float
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
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Timestamp',
                'implementingClassName' => 'Carbon\\Traits\\Timestamp',
                'currentClassName' => 'Carbon\\Traits\\Timestamp',
                'aliasName' => null,
            ],
            'getTimestampMs' => [
                'name' => 'getTimestampMs',
                'parameters' => [
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
 * Returns the timestamp with millisecond precision.
 *
 * @return int
 */',
                'startLine' => 140,
                'endLine' => 143,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Timestamp',
                'implementingClassName' => 'Carbon\\Traits\\Timestamp',
                'currentClassName' => 'Carbon\\Traits\\Timestamp',
                'aliasName' => null,
            ],
            'unix' => [
                'name' => 'unix',
                'parameters' => [
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
 * @alias getTimestamp
 *
 * Returns the UNIX timestamp for the current date.
 *
 * @return int
 */',
                'startLine' => 152,
                'endLine' => 155,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Timestamp',
                'implementingClassName' => 'Carbon\\Traits\\Timestamp',
                'currentClassName' => 'Carbon\\Traits\\Timestamp',
                'aliasName' => null,
            ],
            'getIntegerAndDecimalParts' => [
                'name' => 'getIntegerAndDecimalParts',
                'parameters' => [
                    'numbers' => [
                        'name' => 'numbers',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 169,
                        'endLine' => 169,
                        'startColumn' => 55,
                        'endColumn' => 62,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'decimals' => [
                        'name' => 'decimals',
                        'default' => [
                            'code' => '6',
                            'attributes' => [
                                'startLine' => 169,
                                'endLine' => 169,
                                'startTokenPos' => 717,
                                'startFilePos' => 5899,
                                'endTokenPos' => 717,
                                'endFilePos' => 5899,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 169,
                        'endLine' => 169,
                        'startColumn' => 65,
                        'endColumn' => 77,
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
 * Return an array with integer part digits and decimals digits split from one or more positive numbers
 * (such as timestamps) as string with the given number of decimals (6 by default).
 *
 * By splitting integer and decimal, this method obtain a better precision than
 * number_format when the input is a string.
 *
 * @param float|int|string $numbers  one or more numbers
 * @param int              $decimals number of decimals precision (6 by default)
 *
 * @return array 0-index is integer part, 1-index is decimal part digits
 */',
                'startLine' => 169,
                'endLine' => 191,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Timestamp',
                'implementingClassName' => 'Carbon\\Traits\\Timestamp',
                'currentClassName' => 'Carbon\\Traits\\Timestamp',
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
