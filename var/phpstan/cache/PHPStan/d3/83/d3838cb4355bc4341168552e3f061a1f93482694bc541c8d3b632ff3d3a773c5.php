<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Localization.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Carbon\Traits\Localization
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-ff5044a67f182b8a5586842c1aee15094b77a699fe3779692aa38e482a6beb4e-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Carbon\\Traits\\Localization',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../nesbot/carbon/src/Carbon/Traits/Localization.php',
            ],
        ],
        'namespace' => 'Carbon\\Traits',
        'name' => 'Carbon\\Traits\\Localization',
        'shortName' => 'Localization',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Trait Localization.
 *
 * Embed default and locale translators and translation base methods.
 */',
        'attributes' => [
        ],
        'startLine' => 32,
        'endLine' => 747,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Carbon\\Traits\\StaticLocalization',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'localTranslator' => [
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'name' => 'localTranslator',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Symfony\\Contracts\\Translation\\TranslatorInterface',
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
                        'startLine' => 39,
                        'endLine' => 39,
                        'startTokenPos' => 91,
                        'startFilePos' => 949,
                        'endTokenPos' => 91,
                        'endFilePos' => 952,
                    ],
                ],
                'docComment' => '/**
 * Specific translator of the current instance.
 */',
                'attributes' => [
                ],
                'startLine' => 39,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 59,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'hasLocalTranslator' => [
                'name' => 'hasLocalTranslator',
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
 * Return true if the current instance has its own translator.
 */',
                'startLine' => 44,
                'endLine' => 47,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'getLocalTranslator' => [
                'name' => 'getLocalTranslator',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Symfony\\Contracts\\Translation\\TranslatorInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the translator of the current instance or the default if none set.
 */',
                'startLine' => 52,
                'endLine' => 55,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'setLocalTranslator' => [
                'name' => 'setLocalTranslator',
                'parameters' => [
                    'translator' => [
                        'name' => 'translator',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Symfony\\Contracts\\Translation\\TranslatorInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 60,
                        'endLine' => 60,
                        'startColumn' => 40,
                        'endColumn' => 70,
                        'parameterIndex' => 0,
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
 * Set the translator for the current instance.
 */',
                'startLine' => 60,
                'endLine' => 65,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'getTranslationMessageWith' => [
                'name' => 'getTranslationMessageWith',
                'parameters' => [
                    'translator' => [
                        'name' => 'translator',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 77,
                        'endLine' => 77,
                        'startColumn' => 54,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                        'startLine' => 77,
                        'endLine' => 77,
                        'startColumn' => 67,
                        'endColumn' => 77,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'locale' => [
                        'name' => 'locale',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 77,
                                'endLine' => 77,
                                'startTokenPos' => 226,
                                'startFilePos' => 2177,
                                'endTokenPos' => 226,
                                'endFilePos' => 2180,
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
                        'startLine' => 77,
                        'endLine' => 77,
                        'startColumn' => 80,
                        'endColumn' => 101,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 77,
                                'endLine' => 77,
                                'startTokenPos' => 236,
                                'startFilePos' => 2202,
                                'endTokenPos' => 236,
                                'endFilePos' => 2205,
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
                        'startLine' => 77,
                        'endLine' => 77,
                        'startColumn' => 104,
                        'endColumn' => 126,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns raw translation message for a given key.
 *
 * @param TranslatorInterface|null $translator the translator to use
 * @param string                   $key        key to find
 * @param string|null              $locale     current locale used if null
 * @param string|null              $default    default value if translation returns the key
 *
 * @return string|Closure|null
 */',
                'startLine' => 77,
                'endLine' => 93,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'getTranslationMessage' => [
                'name' => 'getTranslationMessage',
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
                        'startLine' => 105,
                        'endLine' => 105,
                        'startColumn' => 43,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'locale' => [
                        'name' => 'locale',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 105,
                                'endLine' => 105,
                                'startTokenPos' => 407,
                                'startFilePos' => 3395,
                                'endTokenPos' => 407,
                                'endFilePos' => 3398,
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
                        'startLine' => 105,
                        'endLine' => 105,
                        'startColumn' => 56,
                        'endColumn' => 77,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 105,
                                'endLine' => 105,
                                'startTokenPos' => 417,
                                'startFilePos' => 3420,
                                'endTokenPos' => 417,
                                'endFilePos' => 3423,
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
                        'startLine' => 105,
                        'endLine' => 105,
                        'startColumn' => 80,
                        'endColumn' => 102,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'translator' => [
                        'name' => 'translator',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 105,
                                'endLine' => 105,
                                'startTokenPos' => 424,
                                'startFilePos' => 3440,
                                'endTokenPos' => 424,
                                'endFilePos' => 3443,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 105,
                        'endLine' => 105,
                        'startColumn' => 105,
                        'endColumn' => 122,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns raw translation message for a given key.
 *
 * @param string              $key        key to find
 * @param string|null         $locale     current locale used if null
 * @param string|null         $default    default value if translation returns the key
 * @param TranslatorInterface $translator an optional translator to use
 *
 * @return string
 */',
                'startLine' => 105,
                'endLine' => 108,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'translateWith' => [
                'name' => 'translateWith',
                'parameters' => [
                    'translator' => [
                        'name' => 'translator',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Symfony\\Contracts\\Translation\\TranslatorInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 120,
                        'endLine' => 120,
                        'startColumn' => 42,
                        'endColumn' => 72,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                        'startLine' => 120,
                        'endLine' => 120,
                        'startColumn' => 75,
                        'endColumn' => 85,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 120,
                                'endLine' => 120,
                                'startTokenPos' => 484,
                                'startFilePos' => 4068,
                                'endTokenPos' => 485,
                                'endFilePos' => 4069,
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
                        'startLine' => 120,
                        'endLine' => 120,
                        'startColumn' => 88,
                        'endColumn' => 109,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'number' => [
                        'name' => 'number',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 120,
                                'endLine' => 120,
                                'startTokenPos' => 492,
                                'startFilePos' => 4082,
                                'endTokenPos' => 492,
                                'endFilePos' => 4085,
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
                        'startColumn' => 112,
                        'endColumn' => 125,
                        'parameterIndex' => 3,
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
 * Translate using translation string or callback available.
 *
 * @param TranslatorInterface $translator an optional translator to use
 * @param string              $key        key to find
 * @param array               $parameters replacement parameters
 * @param int|float|null      $number     number if plural
 *
 * @return string
 */',
                'startLine' => 120,
                'endLine' => 135,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'translate' => [
                'name' => 'translate',
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
                        'startLine' => 149,
                        'endLine' => 149,
                        'startColumn' => 9,
                        'endColumn' => 19,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 150,
                                'endLine' => 150,
                                'startTokenPos' => 639,
                                'startFilePos' => 5154,
                                'endTokenPos' => 640,
                                'endFilePos' => 5155,
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
                        'startLine' => 150,
                        'endLine' => 150,
                        'startColumn' => 9,
                        'endColumn' => 30,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'number' => [
                        'name' => 'number',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 151,
                                'endLine' => 151,
                                'startTokenPos' => 655,
                                'startFilePos' => 5198,
                                'endTokenPos' => 655,
                                'endFilePos' => 5201,
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
                                            'name' => 'int',
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
                        'startLine' => 151,
                        'endLine' => 151,
                        'startColumn' => 9,
                        'endColumn' => 44,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'translator' => [
                        'name' => 'translator',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 152,
                                'endLine' => 152,
                                'startTokenPos' => 665,
                                'startFilePos' => 5247,
                                'endTokenPos' => 665,
                                'endFilePos' => 5250,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Symfony\\Contracts\\Translation\\TranslatorInterface',
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
                        'startLine' => 152,
                        'endLine' => 152,
                        'startColumn' => 9,
                        'endColumn' => 47,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'altNumbers' => [
                        'name' => 'altNumbers',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 153,
                                'endLine' => 153,
                                'startTokenPos' => 674,
                                'startFilePos' => 5280,
                                'endTokenPos' => 674,
                                'endFilePos' => 5284,
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
                        'startLine' => 153,
                        'endLine' => 153,
                        'startColumn' => 9,
                        'endColumn' => 32,
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
 * Translate using translation string or callback available.
 *
 * @param string                   $key        key to find
 * @param array                    $parameters replacement parameters
 * @param string|int|float|null    $number     number if plural
 * @param TranslatorInterface|null $translator an optional translator to use
 * @param bool                     $altNumbers pass true to use alternative numbers
 *
 * @return string
 */',
                'startLine' => 148,
                'endLine' => 162,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'translateNumber' => [
                'name' => 'translateNumber',
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
                        'startLine' => 171,
                        'endLine' => 171,
                        'startColumn' => 37,
                        'endColumn' => 47,
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
 * Returns the alternative number for a given integer if available in the current locale.
 *
 * @param int $number
 *
 * @return string
 */',
                'startLine' => 171,
                'endLine' => 212,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'translateTimeString' => [
                'name' => 'translateTimeString',
                'parameters' => [
                    'timeString' => [
                        'name' => 'timeString',
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
                        'startLine' => 231,
                        'endLine' => 231,
                        'startColumn' => 9,
                        'endColumn' => 26,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'from' => [
                        'name' => 'from',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 232,
                                'endLine' => 232,
                                'startTokenPos' => 1177,
                                'startFilePos' => 8355,
                                'endTokenPos' => 1177,
                                'endFilePos' => 8358,
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
                        'startLine' => 232,
                        'endLine' => 232,
                        'startColumn' => 9,
                        'endColumn' => 28,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'to' => [
                        'name' => 'to',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 233,
                                'endLine' => 233,
                                'startTokenPos' => 1187,
                                'startFilePos' => 8383,
                                'endTokenPos' => 1187,
                                'endFilePos' => 8386,
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
                        'startLine' => 233,
                        'endLine' => 233,
                        'startColumn' => 9,
                        'endColumn' => 26,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'mode' => [
                        'name' => 'mode',
                        'default' => [
                            'code' => '\\Carbon\\CarbonInterface::TRANSLATE_ALL',
                            'attributes' => [
                                'startLine' => 234,
                                'endLine' => 234,
                                'startTokenPos' => 1196,
                                'startFilePos' => 8409,
                                'endTokenPos' => 1198,
                                'endFilePos' => 8438,
                            ],
                        ],
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
                        'startLine' => 234,
                        'endLine' => 234,
                        'startColumn' => 9,
                        'endColumn' => 50,
                        'parameterIndex' => 3,
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
 * Translate a time string from a locale to an other.
 *
 * @param string      $timeString date/time/duration string to translate (may also contain English)
 * @param string|null $from       input locale of the $timeString parameter (`Carbon::getLocale()` by default)
 * @param string|null $to         output locale of the result returned (`"en"` by default)
 * @param int         $mode       specify what to translate with options:
 *                                - CarbonInterface::TRANSLATE_ALL (default)
 *                                - CarbonInterface::TRANSLATE_MONTHS
 *                                - CarbonInterface::TRANSLATE_DAYS
 *                                - CarbonInterface::TRANSLATE_UNITS
 *                                - CarbonInterface::TRANSLATE_MERIDIEM
 *                                You can use pipe to group: CarbonInterface::TRANSLATE_MONTHS | CarbonInterface::TRANSLATE_DAYS
 *
 * @return string
 */',
                'startLine' => 230,
                'endLine' => 327,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'translateTimeStringTo' => [
                'name' => 'translateTimeStringTo',
                'parameters' => [
                    'timeString' => [
                        'name' => 'timeString',
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
                        'startLine' => 337,
                        'endLine' => 337,
                        'startColumn' => 43,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'to' => [
                        'name' => 'to',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 337,
                                'endLine' => 337,
                                'startTokenPos' => 2073,
                                'startFilePos' => 12695,
                                'endTokenPos' => 2073,
                                'endFilePos' => 12698,
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
                        'startLine' => 337,
                        'endLine' => 337,
                        'startColumn' => 63,
                        'endColumn' => 80,
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
 * Translate a time string from the current locale (`$date->locale()`) to another one.
 *
 * @param string      $timeString time string to translate
 * @param string|null $to         output locale of the result returned ("en" by default)
 *
 * @return string
 */',
                'startLine' => 337,
                'endLine' => 340,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'locale' => [
                'name' => 'locale',
                'parameters' => [
                    'locale' => [
                        'name' => 'locale',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 350,
                                'endLine' => 350,
                                'startTokenPos' => 2118,
                                'startFilePos' => 13049,
                                'endTokenPos' => 2118,
                                'endFilePos' => 13052,
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
                        'startLine' => 350,
                        'endLine' => 350,
                        'startColumn' => 28,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'fallbackLocales' => [
                        'name' => 'fallbackLocales',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 350,
                        'endLine' => 350,
                        'startColumn' => 52,
                        'endColumn' => 77,
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
                                    'name' => 'static',
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Get/set the locale for the current instance.
 *
 * @param string|null $locale
 * @param string      ...$fallbackLocales
 *
 * @return $this|string
 */',
                'startLine' => 350,
                'endLine' => 375,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'getLocale' => [
                'name' => 'getLocale',
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
 * Get the current translator locale.
 *
 * @return string
 */',
                'startLine' => 382,
                'endLine' => 385,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'setLocale' => [
                'name' => 'setLocale',
                'parameters' => [
                    'locale' => [
                        'name' => 'locale',
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
                        'startLine' => 393,
                        'endLine' => 393,
                        'startColumn' => 38,
                        'endColumn' => 51,
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
 * Set the current translator locale and indicate if the source locale file exists.
 * Pass \'auto\' as locale to use the closest language to the current LC_TIME locale.
 *
 * @param string $locale locale ex. en
 */',
                'startLine' => 393,
                'endLine' => 396,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'setFallbackLocale' => [
                'name' => 'setFallbackLocale',
                'parameters' => [
                    'locale' => [
                        'name' => 'locale',
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
                        'startLine' => 405,
                        'endLine' => 405,
                        'startColumn' => 46,
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
 * Set the fallback locale.
 *
 * @see https://symfony.com/doc/current/components/translation.html#fallback-locales
 *
 * @param string $locale
 */',
                'startLine' => 405,
                'endLine' => 435,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'getFallbackLocale' => [
                'name' => 'getFallbackLocale',
                'parameters' => [
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
 * Get the fallback locale.
 *
 * @see https://symfony.com/doc/current/components/translation.html#fallback-locales
 */',
                'startLine' => 442,
                'endLine' => 451,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'executeWithLocale' => [
                'name' => 'executeWithLocale',
                'parameters' => [
                    'locale' => [
                        'name' => 'locale',
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
                        'startLine' => 462,
                        'endLine' => 462,
                        'startColumn' => 46,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'func' => [
                        'name' => 'func',
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
                        'startLine' => 462,
                        'endLine' => 462,
                        'startColumn' => 62,
                        'endColumn' => 75,
                        'parameterIndex' => 1,
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
 * Set the current locale to the given, execute the passed function, reset the locale to previous one,
 * then return the result of the closure (or null if the closure was void).
 *
 * @param string   $locale locale ex. en
 * @param callable $func
 *
 * @return mixed
 */',
                'startLine' => 462,
                'endLine' => 476,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'localeHasShortUnits' => [
                'name' => 'localeHasShortUnits',
                'parameters' => [
                    'locale' => [
                        'name' => 'locale',
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
                        'startLine' => 486,
                        'endLine' => 486,
                        'startColumn' => 48,
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
 * Returns true if the given locale is internally supported and has short-units support.
 * Support is considered enabled if either year, day or hour has a short variant translated.
 *
 * @param string $locale locale ex. en
 *
 * @return bool
 */',
                'startLine' => 486,
                'endLine' => 497,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'localeHasDiffSyntax' => [
                'name' => 'localeHasDiffSyntax',
                'parameters' => [
                    'locale' => [
                        'name' => 'locale',
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
                        'startLine' => 507,
                        'endLine' => 507,
                        'startColumn' => 48,
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
 * Returns true if the given locale is internally supported and has diff syntax support (ago, from now, before, after).
 * Support is considered enabled if the 4 sentences are translated in the given locale.
 *
 * @param string $locale locale ex. en
 *
 * @return bool
 */',
                'startLine' => 507,
                'endLine' => 528,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'localeHasDiffOneDayWords' => [
                'name' => 'localeHasDiffOneDayWords',
                'parameters' => [
                    'locale' => [
                        'name' => 'locale',
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
                        'startLine' => 538,
                        'endLine' => 538,
                        'startColumn' => 53,
                        'endColumn' => 66,
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
 * Returns true if the given locale is internally supported and has words for 1-day diff (just now, yesterday, tomorrow).
 * Support is considered enabled if the 3 words are translated in the given locale.
 *
 * @param string $locale locale ex. en
 *
 * @return bool
 */',
                'startLine' => 538,
                'endLine' => 546,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'localeHasDiffTwoDayWords' => [
                'name' => 'localeHasDiffTwoDayWords',
                'parameters' => [
                    'locale' => [
                        'name' => 'locale',
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
                        'startLine' => 556,
                        'endLine' => 556,
                        'startColumn' => 53,
                        'endColumn' => 66,
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
 * Returns true if the given locale is internally supported and has words for 2-days diff (before yesterday, after tomorrow).
 * Support is considered enabled if the 2 words are translated in the given locale.
 *
 * @param string $locale locale ex. en
 *
 * @return bool
 */',
                'startLine' => 556,
                'endLine' => 563,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'localeHasPeriodSyntax' => [
                'name' => 'localeHasPeriodSyntax',
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
                        'startLine' => 573,
                        'endLine' => 573,
                        'startColumn' => 50,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns true if the given locale is internally supported and has period syntax support (X times, every X, from X, to X).
 * Support is considered enabled if the 4 sentences are translated in the given locale.
 *
 * @param string $locale locale ex. en
 *
 * @return bool
 */',
                'startLine' => 573,
                'endLine' => 582,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'getAvailableLocales' => [
                'name' => 'getAvailableLocales',
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
 * Returns the list of internally available locales and already loaded custom locales.
 * (It will ignore custom translator dynamic loading.)
 *
 * @return array
 */',
                'startLine' => 590,
                'endLine' => 597,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'getAvailableLocalesInfo' => [
                'name' => 'getAvailableLocalesInfo',
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
 * Returns list of Language object for each available locale. This object allow you to get the ISO name, native
 * name, region and variant of the locale.
 *
 * @return Language[]
 */',
                'startLine' => 605,
                'endLine' => 614,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'getTranslatorLocale' => [
                'name' => 'getTranslatorLocale',
                'parameters' => [
                    'translator' => [
                        'name' => 'translator',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 622,
                                'endLine' => 622,
                                'startTokenPos' => 3518,
                                'startFilePos' => 22682,
                                'endTokenPos' => 3518,
                                'endFilePos' => 22685,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 622,
                        'endLine' => 622,
                        'startColumn' => 44,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
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
 * Get the locale of a given translator.
 *
 * If null or omitted, current local translator is used.
 * If no local translator is in use, current global translator is used.
 */',
                'startLine' => 622,
                'endLine' => 631,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 2,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'getLocaleAwareTranslator' => [
                'name' => 'getLocaleAwareTranslator',
                'parameters' => [
                    'translator' => [
                        'name' => 'translator',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 640,
                                'endLine' => 640,
                                'startTokenPos' => 3591,
                                'startFilePos' => 23186,
                                'endTokenPos' => 3591,
                                'endFilePos' => 23189,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 640,
                        'endLine' => 640,
                        'startColumn' => 56,
                        'endColumn' => 73,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Throw an error if passed object is not LocaleAwareInterface.
 *
 * @param LocaleAwareInterface|null $translator
 *
 * @return LocaleAwareInterface|null
 */',
                'startLine' => 640,
                'endLine' => 651,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 18,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'getFromCatalogue' => [
                'name' => 'getFromCatalogue',
                'parameters' => [
                    'translator' => [
                        'name' => 'translator',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 659,
                        'endLine' => 659,
                        'startColumn' => 46,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'catalogue' => [
                        'name' => 'catalogue',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 659,
                        'endLine' => 659,
                        'startColumn' => 59,
                        'endColumn' => 68,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'id' => [
                        'name' => 'id',
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
                        'startLine' => 659,
                        'endLine' => 659,
                        'startColumn' => 71,
                        'endColumn' => 80,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'domain' => [
                        'name' => 'domain',
                        'default' => [
                            'code' => '\'messages\'',
                            'attributes' => [
                                'startLine' => 659,
                                'endLine' => 659,
                                'startTokenPos' => 3700,
                                'startFilePos' => 23855,
                                'endTokenPos' => 3700,
                                'endFilePos' => 23864,
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
                        'startColumn' => 83,
                        'endColumn' => 109,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @param mixed                                                    $translator
 * @param \\Symfony\\Component\\Translation\\MessageCatalogueInterface $catalogue
 *
 * @return mixed
 */',
                'startLine' => 659,
                'endLine' => 664,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'cleanWordFromTranslationString' => [
                'name' => 'cleanWordFromTranslationString',
                'parameters' => [
                    'word' => [
                        'name' => 'word',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 673,
                        'endLine' => 673,
                        'startColumn' => 60,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Return the word cleaned from its translation codes.
 *
 * @param string $word
 *
 * @return string
 */',
                'startLine' => 673,
                'endLine' => 684,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'translateWordsByKeys' => [
                'name' => 'translateWordsByKeys',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 695,
                        'endLine' => 695,
                        'startColumn' => 50,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'messages' => [
                        'name' => 'messages',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 695,
                        'endLine' => 695,
                        'startColumn' => 57,
                        'endColumn' => 65,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 695,
                        'endLine' => 695,
                        'startColumn' => 68,
                        'endColumn' => 71,
                        'parameterIndex' => 2,
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
 * Translate a list of words.
 *
 * @param string[] $keys     keys to translate.
 * @param string[] $messages messages bag handling translations.
 * @param string   $key      \'to\' (to get the translation) or \'from\' (to get the detection RegExp pattern).
 *
 * @return string[]
 */',
                'startLine' => 695,
                'endLine' => 712,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'getTranslationArray' => [
                'name' => 'getTranslationArray',
                'parameters' => [
                    'translation' => [
                        'name' => 'translation',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 723,
                        'endLine' => 723,
                        'startColumn' => 49,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'length' => [
                        'name' => 'length',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 723,
                        'endLine' => 723,
                        'startColumn' => 63,
                        'endColumn' => 69,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'timeString' => [
                        'name' => 'timeString',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 723,
                        'endLine' => 723,
                        'startColumn' => 72,
                        'endColumn' => 82,
                        'parameterIndex' => 2,
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
 * Get an array of translations based on the current date.
 *
 * @param callable $translation
 * @param int      $length
 * @param string   $timeString
 *
 * @return string[]
 */',
                'startLine' => 723,
                'endLine' => 739,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
                'aliasName' => null,
            ],
            'replaceOrdinalWords' => [
                'name' => 'replaceOrdinalWords',
                'parameters' => [
                    'timeString' => [
                        'name' => 'timeString',
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
                        'startLine' => 741,
                        'endLine' => 741,
                        'startColumn' => 49,
                        'endColumn' => 66,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'ordinalWords' => [
                        'name' => 'ordinalWords',
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
                        'startLine' => 741,
                        'endLine' => 741,
                        'startColumn' => 69,
                        'endColumn' => 87,
                        'parameterIndex' => 1,
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
                'docComment' => null,
                'startLine' => 741,
                'endLine' => 746,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Carbon\\Traits',
                'declaringClassName' => 'Carbon\\Traits\\Localization',
                'implementingClassName' => 'Carbon\\Traits\\Localization',
                'currentClassName' => 'Carbon\\Traits\\Localization',
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
