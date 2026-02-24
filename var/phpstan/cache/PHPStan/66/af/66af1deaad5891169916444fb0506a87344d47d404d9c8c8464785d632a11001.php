<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/http-foundation/HeaderBag.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Component\HttpFoundation\HeaderBag
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-2b30a4041025f6f92dcf595fc761f5494795a03b8214a244234f6ff54e905e9f-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/http-foundation/HeaderBag.php',
            ],
        ],
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'name' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
        'shortName' => 'HeaderBag',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * HeaderBag is a container for HTTP headers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @implements \\IteratorAggregate<string, list<string|null>>
 */',
        'attributes' => [
        ],
        'startLine' => 21,
        'endLine' => 273,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'IteratorAggregate',
            1 => 'Countable',
            2 => 'Stringable',
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
            'UPPER' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'name' => 'UPPER',
                'modifiers' => 2,
                'type' => null,
                'value' => [
                    'code' => '\'_ABCDEFGHIJKLMNOPQRSTUVWXYZ\'',
                    'attributes' => [
                        'startLine' => 23,
                        'endLine' => 23,
                        'startTokenPos' => 35,
                        'startFilePos' => 554,
                        'endTokenPos' => 35,
                        'endFilePos' => 582,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 23,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 58,
            ],
            'LOWER' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'name' => 'LOWER',
                'modifiers' => 2,
                'type' => null,
                'value' => [
                    'code' => '\'-abcdefghijklmnopqrstuvwxyz\'',
                    'attributes' => [
                        'startLine' => 24,
                        'endLine' => 24,
                        'startTokenPos' => 46,
                        'startFilePos' => 613,
                        'endTokenPos' => 46,
                        'endFilePos' => 641,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 24,
                'endLine' => 24,
                'startColumn' => 5,
                'endColumn' => 58,
            ],
        ],
        'immediateProperties' => [
            'headers' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'name' => 'headers',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 29,
                        'endLine' => 29,
                        'startTokenPos' => 59,
                        'startFilePos' => 737,
                        'endTokenPos' => 60,
                        'endFilePos' => 738,
                    ],
                ],
                'docComment' => '/**
 * @var array<string, list<string|null>>
 */',
                'attributes' => [
                ],
                'startLine' => 29,
                'endLine' => 29,
                'startColumn' => 5,
                'endColumn' => 34,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'cacheControl' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'name' => 'cacheControl',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 30,
                        'endLine' => 30,
                        'startTokenPos' => 71,
                        'startFilePos' => 777,
                        'endTokenPos' => 72,
                        'endFilePos' => 778,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 30,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 39,
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
                    'headers' => [
                        'name' => 'headers',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 32,
                                'endLine' => 32,
                                'startTokenPos' => 87,
                                'startFilePos' => 831,
                                'endTokenPos' => 88,
                                'endFilePos' => 832,
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
                        'startLine' => 32,
                        'endLine' => 32,
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
                'docComment' => null,
                'startLine' => 32,
                'endLine' => 37,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'aliasName' => null,
            ],
            '__toString' => [
                'name' => '__toString',
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
 * Returns the headers as a string.
 */',
                'startLine' => 42,
                'endLine' => 59,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'aliasName' => null,
            ],
            'all' => [
                'name' => 'all',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 68,
                                'endLine' => 68,
                                'startTokenPos' => 290,
                                'startFilePos' => 1774,
                                'endTokenPos' => 290,
                                'endFilePos' => 1777,
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
                        'startLine' => 68,
                        'endLine' => 68,
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
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the headers.
 *
 * @param string|null $key The name of the headers to return or null to get them all
 *
 * @return ($key is null ? array<string, list<string|null>> : list<string|null>)
 */',
                'startLine' => 68,
                'endLine' => 75,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'aliasName' => null,
            ],
            'keys' => [
                'name' => 'keys',
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
 * Returns the parameter keys.
 *
 * @return string[]
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
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'aliasName' => null,
            ],
            'replace' => [
                'name' => 'replace',
                'parameters' => [
                    'headers' => [
                        'name' => 'headers',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 90,
                                'endLine' => 90,
                                'startTokenPos' => 392,
                                'startFilePos' => 2237,
                                'endTokenPos' => 393,
                                'endFilePos' => 2238,
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
                        'startLine' => 90,
                        'endLine' => 90,
                        'startColumn' => 29,
                        'endColumn' => 47,
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
 * Replaces the current HTTP headers by a new set.
 */',
                'startLine' => 90,
                'endLine' => 94,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'aliasName' => null,
            ],
            'add' => [
                'name' => 'add',
                'parameters' => [
                    'headers' => [
                        'name' => 'headers',
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
                        'startLine' => 99,
                        'endLine' => 99,
                        'startColumn' => 25,
                        'endColumn' => 38,
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
 * Adds new headers the current HTTP headers set.
 */',
                'startLine' => 99,
                'endLine' => 104,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'aliasName' => null,
            ],
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
                        'startLine' => 109,
                        'endLine' => 109,
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
                                'startLine' => 109,
                                'endLine' => 109,
                                'startTokenPos' => 490,
                                'startFilePos' => 2677,
                                'endTokenPos' => 490,
                                'endFilePos' => 2680,
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
                        'startLine' => 109,
                        'endLine' => 109,
                        'startColumn' => 38,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => true,
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the first header by name or the default one.
 */',
                'startLine' => 109,
                'endLine' => 122,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
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
                        'startLine' => 130,
                        'endLine' => 130,
                        'startColumn' => 25,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'values' => [
                        'name' => 'values',
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
                                            'name' => 'array',
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
                        'startLine' => 130,
                        'endLine' => 130,
                        'startColumn' => 38,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'replace' => [
                        'name' => 'replace',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 130,
                                'endLine' => 130,
                                'startTokenPos' => 587,
                                'startFilePos' => 3222,
                                'endTokenPos' => 587,
                                'endFilePos' => 3225,
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
                        'startLine' => 130,
                        'endLine' => 130,
                        'startColumn' => 65,
                        'endColumn' => 84,
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
 * Sets a header by name.
 *
 * @param string|string[]|null $values  The value or an array of values
 * @param bool                 $replace Whether to replace the actual value or not (true by default)
 */',
                'startLine' => 130,
                'endLine' => 153,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
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
                        'startLine' => 158,
                        'endLine' => 158,
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
 * Returns true if the HTTP header is defined.
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
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'aliasName' => null,
            ],
            'contains' => [
                'name' => 'contains',
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
                        'startLine' => 166,
                        'endLine' => 166,
                        'startColumn' => 30,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
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
                        'startLine' => 166,
                        'endLine' => 166,
                        'startColumn' => 43,
                        'endColumn' => 55,
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
 * Returns true if the given HTTP header contains the given value.
 */',
                'startLine' => 166,
                'endLine' => 169,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'aliasName' => null,
            ],
            'remove' => [
                'name' => 'remove',
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
                        'startLine' => 174,
                        'endLine' => 174,
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
                        'name' => 'void',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Removes a header.
 */',
                'startLine' => 174,
                'endLine' => 183,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'aliasName' => null,
            ],
            'getDate' => [
                'name' => 'getDate',
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
                        'startLine' => 190,
                        'endLine' => 190,
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
                                'startLine' => 190,
                                'endLine' => 190,
                                'startTokenPos' => 1001,
                                'startFilePos' => 4932,
                                'endTokenPos' => 1001,
                                'endFilePos' => 4935,
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
                        'startLine' => 190,
                        'endLine' => 190,
                        'startColumn' => 42,
                        'endColumn' => 76,
                        'parameterIndex' => 1,
                        'isOptional' => true,
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
                                    'name' => 'DateTimeImmutable',
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
                'docComment' => '/**
 * Returns the HTTP header value converted to a date.
 *
 * @throws \\RuntimeException When the HTTP header is not parseable
 */',
                'startLine' => 190,
                'endLine' => 201,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'aliasName' => null,
            ],
            'addCacheControlDirective' => [
                'name' => 'addCacheControlDirective',
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
                        'startLine' => 206,
                        'endLine' => 206,
                        'startColumn' => 46,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 206,
                                'endLine' => 206,
                                'startTokenPos' => 1128,
                                'startFilePos' => 5509,
                                'endTokenPos' => 1128,
                                'endFilePos' => 5512,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'bool',
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
                        'startLine' => 206,
                        'endLine' => 206,
                        'startColumn' => 59,
                        'endColumn' => 83,
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
 * Adds a custom Cache-Control directive.
 */',
                'startLine' => 206,
                'endLine' => 211,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'aliasName' => null,
            ],
            'hasCacheControlDirective' => [
                'name' => 'hasCacheControlDirective',
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
                        'startLine' => 216,
                        'endLine' => 216,
                        'startColumn' => 46,
                        'endColumn' => 56,
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
 * Returns true if the Cache-Control directive is defined.
 */',
                'startLine' => 216,
                'endLine' => 219,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'aliasName' => null,
            ],
            'getCacheControlDirective' => [
                'name' => 'getCacheControlDirective',
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
                        'startLine' => 224,
                        'endLine' => 224,
                        'startColumn' => 46,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
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
                                    'name' => 'bool',
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
                                    'name' => 'null',
                                    'isIdentifier' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns a Cache-Control directive value by name.
 */',
                'startLine' => 224,
                'endLine' => 227,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'aliasName' => null,
            ],
            'removeCacheControlDirective' => [
                'name' => 'removeCacheControlDirective',
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
                        'startLine' => 232,
                        'endLine' => 232,
                        'startColumn' => 49,
                        'endColumn' => 59,
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
 * Removes a Cache-Control directive.
 */',
                'startLine' => 232,
                'endLine' => 237,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'aliasName' => null,
            ],
            'getIterator' => [
                'name' => 'getIterator',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'ArrayIterator',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns an iterator for headers.
 *
 * @return \\ArrayIterator<string, list<string|null>>
 */',
                'startLine' => 244,
                'endLine' => 247,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'aliasName' => null,
            ],
            'count' => [
                'name' => 'count',
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
 * Returns the number of headers.
 */',
                'startLine' => 252,
                'endLine' => 255,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'aliasName' => null,
            ],
            'getCacheControlHeader' => [
                'name' => 'getCacheControlHeader',
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
                'docComment' => null,
                'startLine' => 257,
                'endLine' => 262,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'aliasName' => null,
            ],
            'parseCacheControl' => [
                'name' => 'parseCacheControl',
                'parameters' => [
                    'header' => [
                        'name' => 'header',
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
                        'startLine' => 267,
                        'endLine' => 267,
                        'startColumn' => 42,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
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
 * Parses a Cache-Control HTTP header.
 */',
                'startLine' => 267,
                'endLine' => 272,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
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
