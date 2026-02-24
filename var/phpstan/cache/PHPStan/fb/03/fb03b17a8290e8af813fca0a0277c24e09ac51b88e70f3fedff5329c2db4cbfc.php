<?php

declare(strict_types=1);

// odsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Traits/HasMicrosoftSSO.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodebarAg\MicrosoftEntraSSO\Traits\HasMicrosoftSSO
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.4.18-fa5320b5f6e081c3c2ea59312c453062a3197c569b7cf6696c048440c5383a6f',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Traits/HasMicrosoftSSO.php',
            ],
        ],
        'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Traits',
        'name' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
        'shortName' => 'HasMicrosoftSSO',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 10,
        'endLine' => 116,
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
            'microsoftIdentity' => [
                'name' => 'microsoftIdentity',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Database\\Eloquent\\Relations\\MorphOne',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 12,
                'endLine' => 15,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Traits',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'aliasName' => null,
            ],
            'findByMicrosoftId' => [
                'name' => 'findByMicrosoftId',
                'parameters' => [
                    'microsoftId' => [
                        'name' => 'microsoftId',
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
                        'startLine' => 17,
                        'endLine' => 17,
                        'startColumn' => 46,
                        'endColumn' => 64,
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
                'startLine' => 17,
                'endLine' => 24,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Traits',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'aliasName' => null,
            ],
            'findOrCreateFromMicrosoft' => [
                'name' => 'findOrCreateFromMicrosoft',
                'parameters' => [
                    'microsoftUser' => [
                        'name' => 'microsoftUser',
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
                        'startLine' => 26,
                        'endLine' => 26,
                        'startColumn' => 54,
                        'endColumn' => 73,
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
                'docComment' => null,
                'startLine' => 26,
                'endLine' => 55,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Traits',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'aliasName' => null,
            ],
            'linkMicrosoftAccount' => [
                'name' => 'linkMicrosoftAccount',
                'parameters' => [
                    'microsoftUser' => [
                        'name' => 'microsoftUser',
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
                        'startLine' => 57,
                        'endLine' => 57,
                        'startColumn' => 42,
                        'endColumn' => 61,
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
                'docComment' => null,
                'startLine' => 57,
                'endLine' => 70,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Traits',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'aliasName' => null,
            ],
            'updateMicrosoftTokens' => [
                'name' => 'updateMicrosoftTokens',
                'parameters' => [
                    'microsoftUser' => [
                        'name' => 'microsoftUser',
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
                        'startLine' => 72,
                        'endLine' => 72,
                        'startColumn' => 43,
                        'endColumn' => 62,
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
                'docComment' => null,
                'startLine' => 72,
                'endLine' => 93,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Traits',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'aliasName' => null,
            ],
            'hasMicrosoftSSOLinked' => [
                'name' => 'hasMicrosoftSSOLinked',
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
                'docComment' => null,
                'startLine' => 95,
                'endLine' => 98,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Traits',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'aliasName' => null,
            ],
            'isMicrosoftTokenExpired' => [
                'name' => 'isMicrosoftTokenExpired',
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
                'docComment' => null,
                'startLine' => 100,
                'endLine' => 109,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Traits',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'aliasName' => null,
            ],
            'unlinkMicrosoftAccount' => [
                'name' => 'unlinkMicrosoftAccount',
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
                'docComment' => null,
                'startLine' => 111,
                'endLine' => 115,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Traits',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Traits\\HasMicrosoftSSO',
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
