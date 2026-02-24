<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Translation/Translator.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Contracts\Translation\Translator
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-d680a3155f868fd7a9e3082eb15c3c293f9c566990d89795a2c309d58bc58019-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Contracts\\Translation\\Translator',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Translation/Translator.php',
            ],
        ],
        'namespace' => 'Illuminate\\Contracts\\Translation',
        'name' => 'Illuminate\\Contracts\\Translation\\Translator',
        'shortName' => 'Translator',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 5,
        'endLine' => 42,
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
                        'startLine' => 15,
                        'endLine' => 15,
                        'startColumn' => 25,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'replace' => [
                        'name' => 'replace',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 15,
                                'endLine' => 15,
                                'startTokenPos' => 30,
                                'startFilePos' => 305,
                                'endTokenPos' => 31,
                                'endFilePos' => 306,
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
                        'startLine' => 15,
                        'endLine' => 15,
                        'startColumn' => 31,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'locale' => [
                        'name' => 'locale',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 15,
                                'endLine' => 15,
                                'startTokenPos' => 38,
                                'startFilePos' => 319,
                                'endTokenPos' => 38,
                                'endFilePos' => 322,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 15,
                        'endLine' => 15,
                        'startColumn' => 52,
                        'endColumn' => 65,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the translation for a given key.
 *
 * @param  string  $key
 * @param  array  $replace
 * @param  string|null  $locale
 * @return mixed
 */',
                'startLine' => 15,
                'endLine' => 15,
                'startColumn' => 5,
                'endColumn' => 67,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Translation',
                'declaringClassName' => 'Illuminate\\Contracts\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Contracts\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Contracts\\Translation\\Translator',
                'aliasName' => null,
            ],
            'choice' => [
                'name' => 'choice',
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
                        'startLine' => 26,
                        'endLine' => 26,
                        'startColumn' => 28,
                        'endColumn' => 31,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'number' => [
                        'name' => 'number',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 26,
                        'endLine' => 26,
                        'startColumn' => 34,
                        'endColumn' => 40,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'replace' => [
                        'name' => 'replace',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 26,
                                'endLine' => 26,
                                'startTokenPos' => 62,
                                'startFilePos' => 633,
                                'endTokenPos' => 63,
                                'endFilePos' => 634,
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
                        'startLine' => 26,
                        'endLine' => 26,
                        'startColumn' => 43,
                        'endColumn' => 61,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'locale' => [
                        'name' => 'locale',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 26,
                                'endLine' => 26,
                                'startTokenPos' => 70,
                                'startFilePos' => 647,
                                'endTokenPos' => 70,
                                'endFilePos' => 650,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 26,
                        'endLine' => 26,
                        'startColumn' => 64,
                        'endColumn' => 77,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a translation according to an integer value.
 *
 * @param  string  $key
 * @param  \\Countable|int|float|array  $number
 * @param  array  $replace
 * @param  string|null  $locale
 * @return string
 */',
                'startLine' => 26,
                'endLine' => 26,
                'startColumn' => 5,
                'endColumn' => 79,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Translation',
                'declaringClassName' => 'Illuminate\\Contracts\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Contracts\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Contracts\\Translation\\Translator',
                'aliasName' => null,
            ],
            'getLocale' => [
                'name' => 'getLocale',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the default locale being used.
 *
 * @return string
 */',
                'startLine' => 33,
                'endLine' => 33,
                'startColumn' => 5,
                'endColumn' => 32,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Translation',
                'declaringClassName' => 'Illuminate\\Contracts\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Contracts\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Contracts\\Translation\\Translator',
                'aliasName' => null,
            ],
            'setLocale' => [
                'name' => 'setLocale',
                'parameters' => [
                    'locale' => [
                        'name' => 'locale',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 41,
                        'endLine' => 41,
                        'startColumn' => 31,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the default locale.
 *
 * @param  string  $locale
 * @return void
 */',
                'startLine' => 41,
                'endLine' => 41,
                'startColumn' => 5,
                'endColumn' => 39,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Translation',
                'declaringClassName' => 'Illuminate\\Contracts\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Contracts\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Contracts\\Translation\\Translator',
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
