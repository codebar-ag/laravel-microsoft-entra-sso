<?php

declare(strict_types=1);

// odsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodebarAg\MicrosoftEntraSSO\Http\Controllers\HandleMicrosoftCallbackController
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.4.18-07095c0f3e8ef84f05594e0d2deafda5ad646388607915d189c6381d5824eb85',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\HandleMicrosoftCallbackController',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/HandleMicrosoftCallbackController.php',
            ],
        ],
        'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers',
        'name' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\HandleMicrosoftCallbackController',
        'shortName' => 'HandleMicrosoftCallbackController',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 15,
        'endLine' => 87,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Routing\\Controller',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\Concerns\\HandlesMicrosoftSSO',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'oauthService' => [
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\HandleMicrosoftCallbackController',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\HandleMicrosoftCallbackController',
                'name' => 'oauthService',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 20,
                'endLine' => 20,
                'startColumn' => 9,
                'endColumn' => 53,
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
                                'name' => 'CodebarAg\\MicrosoftEntraSSO\\Services\\MicrosoftOAuthService',
                                'isIdentifier' => false,
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
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 19,
                'endLine' => 21,
                'startColumn' => 5,
                'endColumn' => 8,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\HandleMicrosoftCallbackController',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\HandleMicrosoftCallbackController',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\HandleMicrosoftCallbackController',
                'aliasName' => null,
            ],
            '__invoke' => [
                'name' => '__invoke',
                'parameters' => [
                    'request' => [
                        'name' => 'request',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Http\\Request',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 23,
                        'endLine' => 23,
                        'startColumn' => 30,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'guard' => [
                        'name' => 'guard',
                        'default' => [
                            'code' => '\'web\'',
                            'attributes' => [
                                'startLine' => 23,
                                'endLine' => 23,
                                'startTokenPos' => 103,
                                'startFilePos' => 759,
                                'endTokenPos' => 103,
                                'endFilePos' => 763,
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
                        'startLine' => 23,
                        'endLine' => 23,
                        'startColumn' => 48,
                        'endColumn' => 68,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Http\\RedirectResponse',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 23,
                'endLine' => 86,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => true,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\HandleMicrosoftCallbackController',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\HandleMicrosoftCallbackController',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\HandleMicrosoftCallbackController',
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
