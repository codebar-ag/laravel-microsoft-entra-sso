<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Serialization.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Serialization
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-de0e1ea1bc306ad603494d670590f23fb8049bf8800e10b933f59c028dbb1104-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Carbon\\Traits\\Serialization',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Serialization.php',
            ],
        ],
        'namespace' => 'Carbon\\Traits',
        'name' => 'Carbon\\Traits\\Serialization',
        'shortName' => 'Serialization',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Trait Serialization.
 *
 * Serialization and JSON stuff.
 *
 * Depends on the following properties:
 *
 * @property int $year
 * @property int $month
 * @property int $daysInMonth
 * @property int $quarter
 *
 * Depends on the following methods:
 *
 * @method string|static locale(string $locale = null, string ...$fallbackLocales)
 * @method string        toJSON()
 */',
        'attributes' => [
        ],
        'startLine' => 39,
        'endLine' => 249,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Carbon\\Traits\\ObjectInitialisation',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'dumpProperties' => [
                'declaringClassName' => 'Carbon\\Traits\\Serialization',
                'implementingClassName' => 'Carbon\\Traits\\Serialization',
                'name' => 'dumpProperties',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '[\'date\', \'timezone_type\', \'timezone\']',
                    'attributes' => [
                        'startLine' => 48,
                        'endLine' => 48,
                        'startTokenPos' => 65,
                        'startFilePos' => 982,
                        'endTokenPos' => 73,
                        'endFilePos' => 1018,
                    ],
                ],
                'docComment' => '/**
 * List of key to use for dump/serialization.
 *
 * @var string[]
 */',
                'attributes' => [
                ],
                'startLine' => 48,
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 76,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'dumpLocale' => [
                'declaringClassName' => 'Carbon\\Traits\\Serialization',
                'implementingClassName' => 'Carbon\\Traits\\Serialization',
                'name' => 'dumpLocale',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * Locale to dump comes here before serialization.
 *
 * @var string|null
 */',
                'attributes' => [
                ],
                'startLine' => 55,
                'endLine' => 55,
                'startColumn' => 5,
                'endColumn' => 26,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'dumpDateProperties' => [
                'declaringClassName' => 'Carbon\\Traits\\Serialization',
                'implementingClassName' => 'Carbon\\Traits\\Serialization',
                'name' => 'dumpDateProperties',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * Embed date properties to dump in a dedicated variables so it won\'t overlap native
 * DateTime ones.
 *
 * @var array|null
 */',
                'attributes' => [
                ],
                'startLine' => 63,
                'endLine' => 63,
                'startColumn' => 5,
                'endColumn' => 34,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'serialize' => [
                'name' => 'serialize',
                'parameters' => [
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
 * Return a serialized string of the instance.
 */',
                'startLine' => 68,
                'endLine' => 71,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Serialization',
                'implementingClassName' => 'Carbon\\Traits\\Serialization',
                'currentClassName' => 'Carbon\\Traits\\Serialization',
                'aliasName' => null,
            ],
            'fromSerialized' => [
                'name' => 'fromSerialized',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 91,
                        'endLine' => 91,
                        'startColumn' => 43,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 91,
                                'endLine' => 91,
                                'startTokenPos' => 134,
                                'startFilePos' => 2180,
                                'endTokenPos' => 135,
                                'endFilePos' => 2181,
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
                        'startColumn' => 51,
                        'endColumn' => 69,
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
 * Create an instance from a serialized string.
 *
 * If $value is not from a trusted source, consider using the allowed_classes option to limit
 * the types of objects that can be built, for instance:
 *
 * @example
 * ```php
 * $object = Carbon::fromSerialized($value, [\'allowed_classes\' => [Carbon::class, CarbonImmutable::class]]);
 * ```
 *
 * @param \\Stringable|string $value
 * @param array              $options example: [\'allowed_classes\' => [CarbonImmutable::class]]
 *
 * @throws InvalidFormatException
 *
 * @return static
 */',
                'startLine' => 91,
                'endLine' => 100,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Serialization',
                'implementingClassName' => 'Carbon\\Traits\\Serialization',
                'currentClassName' => 'Carbon\\Traits\\Serialization',
                'aliasName' => null,
            ],
            '__set_state' => [
                'name' => '__set_state',
                'parameters' => [
                    'dump' => [
                        'name' => 'dump',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 110,
                        'endLine' => 110,
                        'startColumn' => 40,
                        'endColumn' => 44,
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
                    0 => [
                        'name' => 'ReturnTypeWillChange',
                        'isRepeated' => false,
                        'arguments' => [
                        ],
                    ],
                ],
                'docComment' => '/**
 * The __set_state handler.
 *
 * @param string|array $dump
 *
 * @return static
 */',
                'startLine' => 109,
                'endLine' => 122,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Serialization',
                'implementingClassName' => 'Carbon\\Traits\\Serialization',
                'currentClassName' => 'Carbon\\Traits\\Serialization',
                'aliasName' => null,
            ],
            '__serialize' => [
                'name' => '__serialize',
                'parameters' => [
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
 * Returns the values to dump on serialize() called on.
 *
 * @return array
 */',
                'startLine' => 129,
                'endLine' => 163,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Serialization',
                'implementingClassName' => 'Carbon\\Traits\\Serialization',
                'currentClassName' => 'Carbon\\Traits\\Serialization',
                'aliasName' => null,
            ],
            '__unserialize' => [
                'name' => '__unserialize',
                'parameters' => [
                    'data' => [
                        'name' => 'data',
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
                        'startLine' => 168,
                        'endLine' => 168,
                        'startColumn' => 35,
                        'endColumn' => 45,
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
 * Set locale if specified on unserialize() called.
 */',
                'startLine' => 168,
                'endLine' => 191,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Serialization',
                'implementingClassName' => 'Carbon\\Traits\\Serialization',
                'currentClassName' => 'Carbon\\Traits\\Serialization',
                'aliasName' => null,
            ],
            'jsonSerialize' => [
                'name' => 'jsonSerialize',
                'parameters' => [
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
 * Prepare the object for JSON serialization.
 */',
                'startLine' => 196,
                'endLine' => 209,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Serialization',
                'implementingClassName' => 'Carbon\\Traits\\Serialization',
                'currentClassName' => 'Carbon\\Traits\\Serialization',
                'aliasName' => null,
            ],
            'serializeUsing' => [
                'name' => 'serializeUsing',
                'parameters' => [
                    'format' => [
                        'name' => 'format',
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
                                            'name' => 'callable',
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
                        'startLine' => 217,
                        'endLine' => 217,
                        'startColumn' => 43,
                        'endColumn' => 70,
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
 * @deprecated To avoid conflict between different third-party libraries, static setters should not be used.
 *             You should rather transform Carbon object before the serialization.
 *
 * JSON serialize all Carbon instances using the given callback.
 */',
                'startLine' => 217,
                'endLine' => 220,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Serialization',
                'implementingClassName' => 'Carbon\\Traits\\Serialization',
                'currentClassName' => 'Carbon\\Traits\\Serialization',
                'aliasName' => null,
            ],
            'cleanupDumpProperties' => [
                'name' => 'cleanupDumpProperties',
                'parameters' => [
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
 * Cleanup properties attached to the public scope of DateTime when a dump of the date is requested.
 * foreach ($date as $_) {}
 * serializer($date)
 * var_export($date)
 * get_object_vars($date)
 */',
                'startLine' => 229,
                'endLine' => 242,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Serialization',
                'implementingClassName' => 'Carbon\\Traits\\Serialization',
                'currentClassName' => 'Carbon\\Traits\\Serialization',
                'aliasName' => null,
            ],
            'dumpTimezone' => [
                'name' => 'dumpTimezone',
                'parameters' => [
                    'timezone' => [
                        'name' => 'timezone',
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
                        'startLine' => 245,
                        'endLine' => 245,
                        'startColumn' => 35,
                        'endColumn' => 49,
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
                'docComment' => '/** @codeCoverageIgnore */',
                'startLine' => 245,
                'endLine' => 248,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Serialization',
                'implementingClassName' => 'Carbon\\Traits\\Serialization',
                'currentClassName' => 'Carbon\\Traits\\Serialization',
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
