<?php

declare(strict_types=1);

// odsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodebarAg\MicrosoftEntraSSO\Services\MicrosoftOAuthService
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.4.18-d1c6e0d410100eb8bac7edac90dab2e32c560ab955ad55cb1b5ecd5567da4c69',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftOAuthService.php',
            ],
        ],
        'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
        'name' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
        'shortName' => 'MicrosoftOAuthService',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 14,
        'endLine' => 207,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'authorizeEndpoint' => [
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'name' => 'authorizeEndpoint',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 16,
                'endLine' => 16,
                'startColumn' => 5,
                'endColumn' => 40,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'tokenEndpoint' => [
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'name' => 'tokenEndpoint',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 18,
                'endLine' => 18,
                'startColumn' => 5,
                'endColumn' => 36,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'graphEndpoint' => [
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'name' => 'graphEndpoint',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '\'https://graph.microsoft.com/v1.0/me\'',
                    'attributes' => [
                        'startLine' => 20,
                        'endLine' => 20,
                        'startTokenPos' => 79,
                        'startFilePos' => 602,
                        'endTokenPos' => 79,
                        'endFilePos' => 638,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 20,
                'endLine' => 20,
                'startColumn' => 5,
                'endColumn' => 76,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'stateless' => [
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'name' => 'stateless',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 22,
                        'endLine' => 22,
                        'startTokenPos' => 90,
                        'startFilePos' => 674,
                        'endTokenPos' => 90,
                        'endFilePos' => 678,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 22,
                'endLine' => 22,
                'startColumn' => 5,
                'endColumn' => 38,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'tenantId' => [
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'name' => 'tenantId',
                'modifiers' => 2,
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
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 28,
                'endLine' => 28,
                'startColumn' => 9,
                'endColumn' => 35,
                'isPromoted' => true,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'clientId' => [
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'name' => 'clientId',
                'modifiers' => 2,
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
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 29,
                'endLine' => 29,
                'startColumn' => 9,
                'endColumn' => 35,
                'isPromoted' => true,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'clientSecret' => [
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'name' => 'clientSecret',
                'modifiers' => 2,
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
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 30,
                'endLine' => 30,
                'startColumn' => 9,
                'endColumn' => 39,
                'isPromoted' => true,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'redirectUri' => [
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'name' => 'redirectUri',
                'modifiers' => 2,
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
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 31,
                'endLine' => 31,
                'startColumn' => 9,
                'endColumn' => 38,
                'isPromoted' => true,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'scopes' => [
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'name' => 'scopes',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 32,
                'endLine' => 32,
                'startColumn' => 9,
                'endColumn' => 36,
                'isPromoted' => true,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'http' => [
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'name' => 'http',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 33,
                'endLine' => 33,
                'startColumn' => 9,
                'endColumn' => 34,
                'isPromoted' => true,
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
                    'tenantId' => [
                        'name' => 'tenantId',
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
                                            'name' => 'null',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 28,
                        'endLine' => 28,
                        'startColumn' => 9,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'clientId' => [
                        'name' => 'clientId',
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
                                            'name' => 'null',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 29,
                        'endLine' => 29,
                        'startColumn' => 9,
                        'endColumn' => 35,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'clientSecret' => [
                        'name' => 'clientSecret',
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
                                            'name' => 'null',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 30,
                        'endLine' => 30,
                        'startColumn' => 9,
                        'endColumn' => 39,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'redirectUri' => [
                        'name' => 'redirectUri',
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
                                            'name' => 'null',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                ],
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 31,
                        'endLine' => 31,
                        'startColumn' => 9,
                        'endColumn' => 38,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                    'scopes' => [
                        'name' => 'scopes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 32,
                                'endLine' => 32,
                                'startTokenPos' => 142,
                                'startFilePos' => 963,
                                'endTokenPos' => 143,
                                'endFilePos' => 964,
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
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 32,
                        'endLine' => 32,
                        'startColumn' => 9,
                        'endColumn' => 36,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                    'http' => [
                        'name' => 'http',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 33,
                                'endLine' => 33,
                                'startTokenPos' => 154,
                                'startFilePos' => 999,
                                'endTokenPos' => 155,
                                'endFilePos' => 1000,
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
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 33,
                        'endLine' => 33,
                        'startColumn' => 9,
                        'endColumn' => 34,
                        'parameterIndex' => 5,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @param  array<int, string>  $scopes
 */',
                'startLine' => 27,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
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
                                'startLine' => 41,
                                'endLine' => 41,
                                'startTokenPos' => 227,
                                'startFilePos' => 1353,
                                'endTokenPos' => 227,
                                'endFilePos' => 1356,
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
                        'startLine' => 41,
                        'endLine' => 41,
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
                'startLine' => 41,
                'endLine' => 46,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'aliasName' => null,
            ],
            'generateState' => [
                'name' => 'generateState',
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
                'startLine' => 48,
                'endLine' => 51,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'aliasName' => null,
            ],
            'generateCodeVerifier' => [
                'name' => 'generateCodeVerifier',
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
                'startLine' => 53,
                'endLine' => 56,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'aliasName' => null,
            ],
            'generateCodeChallenge' => [
                'name' => 'generateCodeChallenge',
                'parameters' => [
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
                        'startLine' => 58,
                        'endLine' => 58,
                        'startColumn' => 50,
                        'endColumn' => 69,
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
                'docComment' => null,
                'startLine' => 58,
                'endLine' => 61,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'aliasName' => null,
            ],
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
                        'startLine' => 63,
                        'endLine' => 63,
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
                        'startLine' => 63,
                        'endLine' => 63,
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
                'startLine' => 63,
                'endLine' => 80,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
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
                        'startLine' => 82,
                        'endLine' => 82,
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
                        'startLine' => 82,
                        'endLine' => 82,
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
                'startLine' => 82,
                'endLine' => 110,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => true,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
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
                        'startLine' => 112,
                        'endLine' => 112,
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
                'startLine' => 112,
                'endLine' => 126,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => true,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
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
                        'startLine' => 128,
                        'endLine' => 128,
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
                'startLine' => 128,
                'endLine' => 148,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => true,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'aliasName' => null,
            ],
            'getRedirectUri' => [
                'name' => 'getRedirectUri',
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
                'docComment' => null,
                'startLine' => 150,
                'endLine' => 153,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'aliasName' => null,
            ],
            'setRedirectUri' => [
                'name' => 'setRedirectUri',
                'parameters' => [
                    'uri' => [
                        'name' => 'uri',
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
                        'startLine' => 155,
                        'endLine' => 155,
                        'startColumn' => 36,
                        'endColumn' => 46,
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
                'startLine' => 155,
                'endLine' => 161,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'aliasName' => null,
            ],
            'validateConfiguration' => [
                'name' => 'validateConfiguration',
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
                'startLine' => 163,
                'endLine' => 172,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => true,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'aliasName' => null,
            ],
            'validateRedirectUri' => [
                'name' => 'validateRedirectUri',
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
                'startLine' => 174,
                'endLine' => 193,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => true,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'aliasName' => null,
            ],
            'httpClient' => [
                'name' => 'httpClient',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Http\\Client\\PendingRequest',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 195,
                'endLine' => 206,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
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
