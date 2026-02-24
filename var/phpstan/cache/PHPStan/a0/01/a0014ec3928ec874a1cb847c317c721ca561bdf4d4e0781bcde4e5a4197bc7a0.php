<?php

declare(strict_types=1);

// odsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodebarAg\MicrosoftEntraSSO\Http\Controllers\RedirectToMicrosoftController
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.4.18-7ecfa4e492c887c4c5ad755b0a55f2470237ae95a69943a5488d58ae1a743990',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\RedirectToMicrosoftController',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/Http/Controllers/RedirectToMicrosoftController.php',
            ],
        ],
        'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers',
        'name' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\RedirectToMicrosoftController',
        'shortName' => 'RedirectToMicrosoftController',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 13,
        'endLine' => 48,
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
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\RedirectToMicrosoftController',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\RedirectToMicrosoftController',
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
                'startLine' => 18,
                'endLine' => 18,
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
                        'startLine' => 18,
                        'endLine' => 18,
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
                'startLine' => 17,
                'endLine' => 19,
                'startColumn' => 5,
                'endColumn' => 8,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\RedirectToMicrosoftController',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\RedirectToMicrosoftController',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\RedirectToMicrosoftController',
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
                        'startLine' => 21,
                        'endLine' => 21,
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
                                'startLine' => 21,
                                'endLine' => 21,
                                'startTokenPos' => 93,
                                'startFilePos' => 651,
                                'endTokenPos' => 93,
                                'endFilePos' => 655,
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
                        'startLine' => 21,
                        'endLine' => 21,
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
                'startLine' => 21,
                'endLine' => 47,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\RedirectToMicrosoftController',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\RedirectToMicrosoftController',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\Http\\Controllers\\RedirectToMicrosoftController',
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
