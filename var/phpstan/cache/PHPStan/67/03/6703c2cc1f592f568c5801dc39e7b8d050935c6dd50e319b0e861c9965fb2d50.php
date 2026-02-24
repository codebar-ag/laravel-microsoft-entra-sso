<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Translation/Translator.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Translation\Translator
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-818a412ee2cbe3389ee786654d6b1dde2e822701658da48781157f098775322f-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Translation\\Translator',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Translation/Translator.php',
            ],
        ],
        'namespace' => 'Illuminate\\Translation',
        'name' => 'Illuminate\\Translation\\Translator',
        'shortName' => 'Translator',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 17,
        'endLine' => 597,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Support\\NamespacedItemResolver',
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Translation\\Translator',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Support\\Traits\\Macroable',
            1 => 'Illuminate\\Support\\Traits\\ReflectsClosures',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'loader' => [
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'name' => 'loader',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The loader implementation.
 *
 * @var \\Illuminate\\Contracts\\Translation\\Loader
 */',
                'attributes' => [
                ],
                'startLine' => 26,
                'endLine' => 26,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'locale' => [
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'name' => 'locale',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The default locale being used by the translator.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 33,
                'endLine' => 33,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'fallback' => [
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'name' => 'fallback',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The fallback locale used by the translator.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 40,
                'endLine' => 40,
                'startColumn' => 5,
                'endColumn' => 24,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'loaded' => [
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'name' => 'loaded',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 47,
                        'endLine' => 47,
                        'startTokenPos' => 114,
                        'startFilePos' => 1044,
                        'endTokenPos' => 115,
                        'endFilePos' => 1045,
                    ],
                ],
                'docComment' => '/**
 * The array of loaded translation groups.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 47,
                'endLine' => 47,
                'startColumn' => 5,
                'endColumn' => 27,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'selector' => [
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'name' => 'selector',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The message selector.
 *
 * @var \\Illuminate\\Translation\\MessageSelector
 */',
                'attributes' => [
                ],
                'startLine' => 54,
                'endLine' => 54,
                'startColumn' => 5,
                'endColumn' => 24,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'determineLocalesUsing' => [
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'name' => 'determineLocalesUsing',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The callable that should be invoked to determine applicable locales.
 *
 * @var callable
 */',
                'attributes' => [
                ],
                'startLine' => 61,
                'endLine' => 61,
                'startColumn' => 5,
                'endColumn' => 37,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'stringableHandlers' => [
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'name' => 'stringableHandlers',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 68,
                        'endLine' => 68,
                        'startTokenPos' => 140,
                        'startFilePos' => 1477,
                        'endTokenPos' => 141,
                        'endFilePos' => 1478,
                    ],
                ],
                'docComment' => '/**
 * The custom rendering callbacks for stringable objects.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 68,
                'endLine' => 68,
                'startColumn' => 5,
                'endColumn' => 39,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'missingTranslationKeyCallback' => [
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'name' => 'missingTranslationKeyCallback',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The callback that is responsible for handling missing translation keys.
 *
 * @var callable|null
 */',
                'attributes' => [
                ],
                'startLine' => 75,
                'endLine' => 75,
                'startColumn' => 5,
                'endColumn' => 45,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'handleMissingTranslationKeys' => [
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'name' => 'handleMissingTranslationKeys',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'true',
                    'attributes' => [
                        'startLine' => 82,
                        'endLine' => 82,
                        'startTokenPos' => 159,
                        'startFilePos' => 1812,
                        'endTokenPos' => 159,
                        'endFilePos' => 1815,
                    ],
                ],
                'docComment' => '/**
 * Indicates whether missing translation keys should be handled.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 82,
                'endLine' => 82,
                'startColumn' => 5,
                'endColumn' => 51,
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
                    'loader' => [
                        'name' => 'loader',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Translation\\Loader',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 90,
                        'endLine' => 90,
                        'startColumn' => 33,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'locale' => [
                        'name' => 'locale',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 90,
                        'endLine' => 90,
                        'startColumn' => 49,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new translator instance.
 *
 * @param  \\Illuminate\\Contracts\\Translation\\Loader  $loader
 * @param  string  $locale
 */',
                'startLine' => 90,
                'endLine' => 95,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'hasForLocale' => [
                'name' => 'hasForLocale',
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
                        'startLine' => 104,
                        'endLine' => 104,
                        'startColumn' => 34,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'locale' => [
                        'name' => 'locale',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 104,
                                'endLine' => 104,
                                'startTokenPos' => 214,
                                'startFilePos' => 2335,
                                'endTokenPos' => 214,
                                'endFilePos' => 2338,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 104,
                        'endLine' => 104,
                        'startColumn' => 40,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a translation exists for a given locale.
 *
 * @param  string  $key
 * @param  string|null  $locale
 * @return bool
 */',
                'startLine' => 104,
                'endLine' => 107,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'has' => [
                'name' => 'has',
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
                        'startLine' => 117,
                        'endLine' => 117,
                        'startColumn' => 25,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'locale' => [
                        'name' => 'locale',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 117,
                                'endLine' => 117,
                                'startTokenPos' => 252,
                                'startFilePos' => 2623,
                                'endTokenPos' => 252,
                                'endFilePos' => 2626,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 117,
                        'endLine' => 117,
                        'startColumn' => 31,
                        'endColumn' => 44,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'fallback' => [
                        'name' => 'fallback',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 117,
                                'endLine' => 117,
                                'startTokenPos' => 259,
                                'startFilePos' => 2641,
                                'endTokenPos' => 259,
                                'endFilePos' => 2644,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 117,
                        'endLine' => 117,
                        'startColumn' => 47,
                        'endColumn' => 62,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if a translation exists.
 *
 * @param  string  $key
 * @param  string|null  $locale
 * @param  bool  $fallback
 * @return bool
 */',
                'startLine' => 117,
                'endLine' => 140,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
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
                        'startLine' => 151,
                        'endLine' => 151,
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
                                'startLine' => 151,
                                'endLine' => 151,
                                'startTokenPos' => 405,
                                'startFilePos' => 3858,
                                'endTokenPos' => 406,
                                'endFilePos' => 3859,
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
                        'startLine' => 151,
                        'endLine' => 151,
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
                                'startLine' => 151,
                                'endLine' => 151,
                                'startTokenPos' => 413,
                                'startFilePos' => 3872,
                                'endTokenPos' => 413,
                                'endFilePos' => 3875,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 151,
                        'endLine' => 151,
                        'startColumn' => 52,
                        'endColumn' => 65,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'fallback' => [
                        'name' => 'fallback',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 151,
                                'endLine' => 151,
                                'startTokenPos' => 420,
                                'startFilePos' => 3890,
                                'endTokenPos' => 420,
                                'endFilePos' => 3893,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 151,
                        'endLine' => 151,
                        'startColumn' => 68,
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
 * Get the translation for the given key.
 *
 * @param  string  $key
 * @param  array  $replace
 * @param  string|null  $locale
 * @param  bool  $fallback
 * @return string|array
 */',
                'startLine' => 151,
                'endLine' => 190,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
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
                        'startLine' => 201,
                        'endLine' => 201,
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
                        'startLine' => 201,
                        'endLine' => 201,
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
                                'startLine' => 201,
                                'endLine' => 201,
                                'startTokenPos' => 679,
                                'startFilePos' => 6078,
                                'endTokenPos' => 680,
                                'endFilePos' => 6079,
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
                                'startLine' => 201,
                                'endLine' => 201,
                                'startTokenPos' => 687,
                                'startFilePos' => 6092,
                                'endTokenPos' => 687,
                                'endFilePos' => 6095,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 201,
                        'endLine' => 201,
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
                'startLine' => 201,
                'endLine' => 221,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'localeForChoice' => [
                'name' => 'localeForChoice',
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
                        'startLine' => 230,
                        'endLine' => 230,
                        'startColumn' => 40,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'locale' => [
                        'name' => 'locale',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 230,
                        'endLine' => 230,
                        'startColumn' => 46,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the proper locale for a choice operation.
 *
 * @param  string  $key
 * @param  string|null  $locale
 * @return string
 */',
                'startLine' => 230,
                'endLine' => 235,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'getLine' => [
                'name' => 'getLine',
                'parameters' => [
                    'namespace' => [
                        'name' => 'namespace',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 247,
                        'endLine' => 247,
                        'startColumn' => 32,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'group' => [
                        'name' => 'group',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 247,
                        'endLine' => 247,
                        'startColumn' => 44,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'locale' => [
                        'name' => 'locale',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 247,
                        'endLine' => 247,
                        'startColumn' => 52,
                        'endColumn' => 58,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'item' => [
                        'name' => 'item',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 247,
                        'endLine' => 247,
                        'startColumn' => 61,
                        'endColumn' => 65,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                    'replace' => [
                        'name' => 'replace',
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
                        'startLine' => 247,
                        'endLine' => 247,
                        'startColumn' => 68,
                        'endColumn' => 81,
                        'parameterIndex' => 4,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve a language line out the loaded array.
 *
 * @param  string  $namespace
 * @param  string  $group
 * @param  string  $locale
 * @param  string  $item
 * @param  array  $replace
 * @return string|array|null
 */',
                'startLine' => 247,
                'endLine' => 262,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'makeReplacements' => [
                'name' => 'makeReplacements',
                'parameters' => [
                    'line' => [
                        'name' => 'line',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 271,
                        'endLine' => 271,
                        'startColumn' => 41,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'replace' => [
                        'name' => 'replace',
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
                        'startLine' => 271,
                        'endLine' => 271,
                        'startColumn' => 48,
                        'endColumn' => 61,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Make the place-holder replacements on a line.
 *
 * @param  string  $line
 * @param  array  $replace
 * @return string
 */',
                'startLine' => 271,
                'endLine' => 302,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'addLines' => [
                'name' => 'addLines',
                'parameters' => [
                    'lines' => [
                        'name' => 'lines',
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
                        'startLine' => 312,
                        'endLine' => 312,
                        'startColumn' => 30,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'locale' => [
                        'name' => 'locale',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 312,
                        'endLine' => 312,
                        'startColumn' => 44,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'namespace' => [
                        'name' => 'namespace',
                        'default' => [
                            'code' => '\'*\'',
                            'attributes' => [
                                'startLine' => 312,
                                'endLine' => 312,
                                'startTokenPos' => 1307,
                                'startFilePos' => 9430,
                                'endTokenPos' => 1307,
                                'endFilePos' => 9432,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 312,
                        'endLine' => 312,
                        'startColumn' => 53,
                        'endColumn' => 68,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add translation lines to the given locale.
 *
 * @param  array  $lines
 * @param  string  $locale
 * @param  string  $namespace
 * @return void
 */',
                'startLine' => 312,
                'endLine' => 319,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'load' => [
                'name' => 'load',
                'parameters' => [
                    'namespace' => [
                        'name' => 'namespace',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 329,
                        'endLine' => 329,
                        'startColumn' => 26,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'group' => [
                        'name' => 'group',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 329,
                        'endLine' => 329,
                        'startColumn' => 38,
                        'endColumn' => 43,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'locale' => [
                        'name' => 'locale',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 329,
                        'endLine' => 329,
                        'startColumn' => 46,
                        'endColumn' => 52,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Load the specified language group.
 *
 * @param  string  $namespace
 * @param  string  $group
 * @param  string  $locale
 * @return void
 */',
                'startLine' => 329,
                'endLine' => 341,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'isLoaded' => [
                'name' => 'isLoaded',
                'parameters' => [
                    'namespace' => [
                        'name' => 'namespace',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 351,
                        'endLine' => 351,
                        'startColumn' => 33,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'group' => [
                        'name' => 'group',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 351,
                        'endLine' => 351,
                        'startColumn' => 45,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'locale' => [
                        'name' => 'locale',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 351,
                        'endLine' => 351,
                        'startColumn' => 53,
                        'endColumn' => 59,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the given group has been loaded.
 *
 * @param  string  $namespace
 * @param  string  $group
 * @param  string  $locale
 * @return bool
 */',
                'startLine' => 351,
                'endLine' => 354,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'handleMissingTranslationKey' => [
                'name' => 'handleMissingTranslationKey',
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
                        'startLine' => 365,
                        'endLine' => 365,
                        'startColumn' => 52,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'replace' => [
                        'name' => 'replace',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 365,
                        'endLine' => 365,
                        'startColumn' => 58,
                        'endColumn' => 65,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'locale' => [
                        'name' => 'locale',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 365,
                        'endLine' => 365,
                        'startColumn' => 68,
                        'endColumn' => 74,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'fallback' => [
                        'name' => 'fallback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 365,
                        'endLine' => 365,
                        'startColumn' => 77,
                        'endColumn' => 85,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Handle a missing translation key.
 *
 * @param  string  $key
 * @param  array  $replace
 * @param  string|null  $locale
 * @param  bool  $fallback
 * @return string
 */',
                'startLine' => 365,
                'endLine' => 383,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'handleMissingKeysUsing' => [
                'name' => 'handleMissingKeysUsing',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
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
                        'startLine' => 391,
                        'endLine' => 391,
                        'startColumn' => 44,
                        'endColumn' => 62,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a callback that is responsible for handling missing translation keys.
 *
 * @param  callable|null  $callback
 * @return static
 */',
                'startLine' => 391,
                'endLine' => 396,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'addNamespace' => [
                'name' => 'addNamespace',
                'parameters' => [
                    'namespace' => [
                        'name' => 'namespace',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 405,
                        'endLine' => 405,
                        'startColumn' => 34,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'hint' => [
                        'name' => 'hint',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 405,
                        'endLine' => 405,
                        'startColumn' => 46,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a new namespace to the loader.
 *
 * @param  string  $namespace
 * @param  string  $hint
 * @return void
 */',
                'startLine' => 405,
                'endLine' => 408,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'addPath' => [
                'name' => 'addPath',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 416,
                        'endLine' => 416,
                        'startColumn' => 29,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a new path to the loader.
 *
 * @param  string  $path
 * @return void
 */',
                'startLine' => 416,
                'endLine' => 419,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'addJsonPath' => [
                'name' => 'addJsonPath',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 427,
                        'endLine' => 427,
                        'startColumn' => 33,
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
 * Add a new JSON path to the loader.
 *
 * @param  string  $path
 * @return void
 */',
                'startLine' => 427,
                'endLine' => 430,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'parseKey' => [
                'name' => 'parseKey',
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
                        'startLine' => 438,
                        'endLine' => 438,
                        'startColumn' => 30,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Parse a key into namespace, group, and item.
 *
 * @param  string  $key
 * @return array
 */',
                'startLine' => 438,
                'endLine' => 447,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'localeArray' => [
                'name' => 'localeArray',
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
                        'startLine' => 455,
                        'endLine' => 455,
                        'startColumn' => 36,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the array of locales to be checked.
 *
 * @param  string|null  $locale
 * @return array
 */',
                'startLine' => 455,
                'endLine' => 462,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'determineLocalesUsing' => [
                'name' => 'determineLocalesUsing',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 470,
                        'endLine' => 470,
                        'startColumn' => 43,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Specify a callback that should be invoked to determined the applicable locale array.
 *
 * @param  callable  $callback
 * @return void
 */',
                'startLine' => 470,
                'endLine' => 473,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'getSelector' => [
                'name' => 'getSelector',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the message selector instance.
 *
 * @return \\Illuminate\\Translation\\MessageSelector
 */',
                'startLine' => 480,
                'endLine' => 487,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'setSelector' => [
                'name' => 'setSelector',
                'parameters' => [
                    'selector' => [
                        'name' => 'selector',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Translation\\MessageSelector',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 495,
                        'endLine' => 495,
                        'startColumn' => 33,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the message selector instance.
 *
 * @param  \\Illuminate\\Translation\\MessageSelector  $selector
 * @return void
 */',
                'startLine' => 495,
                'endLine' => 498,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'getLoader' => [
                'name' => 'getLoader',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the language line loader implementation.
 *
 * @return \\Illuminate\\Contracts\\Translation\\Loader
 */',
                'startLine' => 505,
                'endLine' => 508,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'locale' => [
                'name' => 'locale',
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
                'startLine' => 515,
                'endLine' => 518,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
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
                'startLine' => 525,
                'endLine' => 528,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
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
                        'startLine' => 538,
                        'endLine' => 538,
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
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 538,
                'endLine' => 545,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'getFallback' => [
                'name' => 'getFallback',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the fallback locale being used.
 *
 * @return string
 */',
                'startLine' => 552,
                'endLine' => 555,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'setFallback' => [
                'name' => 'setFallback',
                'parameters' => [
                    'fallback' => [
                        'name' => 'fallback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 563,
                        'endLine' => 563,
                        'startColumn' => 33,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the fallback locale being used.
 *
 * @param  string  $fallback
 * @return void
 */',
                'startLine' => 563,
                'endLine' => 566,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'setLoaded' => [
                'name' => 'setLoaded',
                'parameters' => [
                    'loaded' => [
                        'name' => 'loaded',
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
                        'startLine' => 574,
                        'endLine' => 574,
                        'startColumn' => 31,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the loaded translation groups.
 *
 * @param  array  $loaded
 * @return void
 */',
                'startLine' => 574,
                'endLine' => 577,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
                'aliasName' => null,
            ],
            'stringable' => [
                'name' => 'stringable',
                'parameters' => [
                    'class' => [
                        'name' => 'class',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 586,
                        'endLine' => 586,
                        'startColumn' => 32,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'handler' => [
                        'name' => 'handler',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 586,
                                'endLine' => 586,
                                'startTokenPos' => 2170,
                                'startFilePos' => 15846,
                                'endTokenPos' => 2170,
                                'endFilePos' => 15849,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 586,
                        'endLine' => 586,
                        'startColumn' => 40,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a handler to be executed in order to format a given class to a string during translation replacements.
 *
 * @param  callable|string  $class
 * @param  callable|null  $handler
 * @return void
 */',
                'startLine' => 586,
                'endLine' => 596,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Translation',
                'declaringClassName' => 'Illuminate\\Translation\\Translator',
                'implementingClassName' => 'Illuminate\\Translation\\Translator',
                'currentClassName' => 'Illuminate\\Translation\\Translator',
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
