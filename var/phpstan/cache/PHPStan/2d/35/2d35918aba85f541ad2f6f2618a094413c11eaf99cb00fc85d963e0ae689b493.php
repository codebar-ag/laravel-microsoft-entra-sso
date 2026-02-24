<?php

declare(strict_types=1);

// odsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodebarAg\MicrosoftEntraSSO\Services\MicrosoftGraphService
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.4.18-c5e16e1d3c659cf820f2e809e93b5dae47ce59c7b6cb2966ff7333b787f00333',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Services/MicrosoftGraphService.php',
            ],
        ],
        'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
        'name' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
        'shortName' => 'MicrosoftGraphService',
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
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
            'GRAPH_BASE' => [
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'name' => 'GRAPH_BASE',
                'modifiers' => 2,
                'type' => null,
                'value' => [
                    'code' => '\'https://graph.microsoft.com/v1.0\'',
                    'attributes' => [
                        'startLine' => 16,
                        'endLine' => 16,
                        'startTokenPos' => 61,
                        'startFilePos' => 505,
                        'endTokenPos' => 61,
                        'endFilePos' => 538,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 16,
                'endLine' => 16,
                'startColumn' => 5,
                'endColumn' => 68,
            ],
        ],
        'immediateProperties' => [
            'oauthService' => [
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'name' => 'oauthService',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 19,
                'endLine' => 19,
                'startColumn' => 9,
                'endColumn' => 40,
                'isPromoted' => true,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'http' => [
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
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
                'startLine' => 20,
                'endLine' => 20,
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
                    'oauthService' => [
                        'name' => 'oauthService',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => true,
                        'attributes' => [
                        ],
                        'startLine' => 19,
                        'endLine' => 19,
                        'startColumn' => 9,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'http' => [
                        'name' => 'http',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 20,
                                'endLine' => 20,
                                'startTokenPos' => 86,
                                'startFilePos' => 649,
                                'endTokenPos' => 87,
                                'endFilePos' => 650,
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
                        'startLine' => 20,
                        'endLine' => 20,
                        'startColumn' => 9,
                        'endColumn' => 34,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 18,
                'endLine' => 21,
                'startColumn' => 5,
                'endColumn' => 8,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'aliasName' => null,
            ],
            'getUserProfile' => [
                'name' => 'getUserProfile',
                'parameters' => [
                    'user' => [
                        'name' => 'user',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 46,
                        'endLine' => 46,
                        'startColumn' => 36,
                        'endColumn' => 59,
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
 * Fetch extended profile information from Microsoft Graph /me endpoint.
 *
 * @return array{
 *     id: string,
 *     displayName: ?string,
 *     givenName: ?string,
 *     surname: ?string,
 *     mail: ?string,
 *     userPrincipalName: ?string,
 *     jobTitle: ?string,
 *     department: ?string,
 *     officeLocation: ?string,
 *     mobilePhone: ?string,
 *     businessPhones: array,
 *     city: ?string,
 *     state: ?string,
 *     country: ?string,
 *     postalCode: ?string,
 *     companyName: ?string,
 *     employeeId: ?string,
 * }
 */',
                'startLine' => 46,
                'endLine' => 63,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'aliasName' => null,
            ],
            'getUserGroups' => [
                'name' => 'getUserGroups',
                'parameters' => [
                    'user' => [
                        'name' => 'user',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 70,
                        'endLine' => 70,
                        'startColumn' => 35,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Support\\Collection',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Fetch all AD security groups the user belongs to.
 *
 * @return Collection<int, array{id: string, displayName: ?string, description: ?string}>
 */',
                'startLine' => 70,
                'endLine' => 85,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'aliasName' => null,
            ],
            'getUserPhotoDataUri' => [
                'name' => 'getUserPhotoDataUri',
                'parameters' => [
                    'user' => [
                        'name' => 'user',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
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
                        'startColumn' => 41,
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
 * Fetch the current user\'s Microsoft profile photo as a data URI.
 */',
                'startLine' => 90,
                'endLine' => 113,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'aliasName' => null,
            ],
            'isUserInGroup' => [
                'name' => 'isUserInGroup',
                'parameters' => [
                    'user' => [
                        'name' => 'user',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 118,
                        'endLine' => 118,
                        'startColumn' => 35,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'groupId' => [
                        'name' => 'groupId',
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
                        'startLine' => 118,
                        'endLine' => 118,
                        'startColumn' => 61,
                        'endColumn' => 75,
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
 * Efficiently check if the user is a member of a specific AD group.
 */',
                'startLine' => 118,
                'endLine' => 133,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'aliasName' => null,
            ],
            'resolveGroupMembership' => [
                'name' => 'resolveGroupMembership',
                'parameters' => [
                    'user' => [
                        'name' => 'user',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 135,
                        'endLine' => 135,
                        'startColumn' => 47,
                        'endColumn' => 70,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'groupId' => [
                        'name' => 'groupId',
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
                        'startLine' => 135,
                        'endLine' => 135,
                        'startColumn' => 73,
                        'endColumn' => 87,
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
                'docComment' => null,
                'startLine' => 135,
                'endLine' => 147,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'aliasName' => null,
            ],
            'authenticatedRequest' => [
                'name' => 'authenticatedRequest',
                'parameters' => [
                    'user' => [
                        'name' => 'user',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 149,
                        'endLine' => 149,
                        'startColumn' => 45,
                        'endColumn' => 68,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                'startLine' => 149,
                'endLine' => 170,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => true,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'aliasName' => null,
            ],
            'refreshToken' => [
                'name' => 'refreshToken',
                'parameters' => [
                    'user' => [
                        'name' => 'user',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\SSOAuthenticatable',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 172,
                        'endLine' => 172,
                        'startColumn' => 37,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'CodebarAg\\MicrosoftEntraSSO\\Models\\MicrosoftSSOIdentity',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 172,
                'endLine' => 206,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => true,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Services',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftGraphService',
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
