<?php

declare(strict_types=1);

// odsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/Provider.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodebarAg\MicrosoftEntraSSO\Contracts\Provider
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.4.18-f779640c4ac830acbcc74b82d5f99ef040afd96272892238b66154a0e81ff5da',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Contracts/Provider.php',
            ],
        ],
        'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts',
        'name' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
        'shortName' => 'Provider',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 8,
        'endLine' => 19,
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
            'getAuthorizationUrl' => [
                'name' => 'getAuthorizationUrl',
                'parameters' => [
                    'state' => [
                        'name' => 'state',
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
                        'startLine' => 10,
                        'endLine' => 10,
                        'startColumn' => 41,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'codeVerifier' => [
                        'name' => 'codeVerifier',
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
                        'startLine' => 10,
                        'endLine' => 10,
                        'startColumn' => 56,
                        'endColumn' => 75,
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
                'startLine' => 10,
                'endLine' => 10,
                'startColumn' => 5,
                'endColumn' => 85,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                'aliasName' => null,
            ],
            'exchangeCodeForTokens' => [
                'name' => 'exchangeCodeForTokens',
                'parameters' => [
                    'code' => [
                        'name' => 'code',
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
                        'startLine' => 12,
                        'endLine' => 12,
                        'startColumn' => 43,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'codeVerifier' => [
                        'name' => 'codeVerifier',
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
                        'startLine' => 12,
                        'endLine' => 12,
                        'startColumn' => 57,
                        'endColumn' => 76,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 12,
                'endLine' => 12,
                'startColumn' => 5,
                'endColumn' => 88,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                'aliasName' => null,
            ],
            'getUserFromToken' => [
                'name' => 'getUserFromToken',
                'parameters' => [
                    'accessToken' => [
                        'name' => 'accessToken',
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
                        'startLine' => 14,
                        'endLine' => 14,
                        'startColumn' => 38,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'CodebarAg\\MicrosoftEntraSSO\\Data\\SSOUser',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 14,
                'endLine' => 14,
                'startColumn' => 5,
                'endColumn' => 67,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                'aliasName' => null,
            ],
            'refreshAccessToken' => [
                'name' => 'refreshAccessToken',
                'parameters' => [
                    'refreshToken' => [
                        'name' => 'refreshToken',
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
                        'startLine' => 16,
                        'endLine' => 16,
                        'startColumn' => 40,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'CodebarAg\\MicrosoftEntraSSO\\Data\\SSOToken',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 16,
                'endLine' => 16,
                'startColumn' => 5,
                'endColumn' => 71,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                'aliasName' => null,
            ],
            'stateless' => [
                'name' => 'stateless',
                'parameters' => [
                    'stateless' => [
                        'name' => 'stateless',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 18,
                                'endLine' => 18,
                                'startTokenPos' => 105,
                                'startFilePos' => 539,
                                'endTokenPos' => 105,
                                'endFilePos' => 542,
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
                        'startLine' => 18,
                        'endLine' => 18,
                        'startColumn' => 31,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
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
                'docComment' => null,
                'startLine' => 18,
                'endLine' => 18,
                'startColumn' => 5,
                'endColumn' => 62,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
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
