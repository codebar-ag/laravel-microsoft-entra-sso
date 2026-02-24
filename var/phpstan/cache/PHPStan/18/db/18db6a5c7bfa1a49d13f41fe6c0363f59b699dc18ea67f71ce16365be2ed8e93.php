<?php

declare(strict_types=1);

// odsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/SSOAuthenticatable.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodebarAg\MicrosoftEntraSSO\Contracts\SSOAuthenticatable
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.4.18-2e680d2fceba64113b1d031e7e9d95f570a2211c51ac03b5eba500d240e27b57',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/SSOAuthenticatable.php',
            ],
        ],
        'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts',
        'name' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
        'shortName' => 'SSOAuthenticatable',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @property-read MicrosoftSSOIdentity|null $microsoftIdentity
 */',
        'attributes' => [
        ],
        'startLine' => 11,
        'endLine' => 26,
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
                'startLine' => 13,
                'endLine' => 13,
                'startColumn' => 5,
                'endColumn' => 50,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
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
                        'startLine' => 15,
                        'endLine' => 15,
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
                'startLine' => 15,
                'endLine' => 15,
                'startColumn' => 5,
                'endColumn' => 75,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
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
                        'startLine' => 17,
                        'endLine' => 17,
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
                'startLine' => 17,
                'endLine' => 17,
                'startColumn' => 5,
                'endColumn' => 83,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
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
                        'startLine' => 19,
                        'endLine' => 19,
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
                'startLine' => 19,
                'endLine' => 19,
                'startColumn' => 5,
                'endColumn' => 69,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
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
                'startLine' => 21,
                'endLine' => 21,
                'startColumn' => 5,
                'endColumn' => 50,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
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
                'startLine' => 23,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 52,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
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
                        'startLine' => 25,
                        'endLine' => 25,
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
                'startLine' => 25,
                'endLine' => 25,
                'startColumn' => 5,
                'endColumn' => 70,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
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
