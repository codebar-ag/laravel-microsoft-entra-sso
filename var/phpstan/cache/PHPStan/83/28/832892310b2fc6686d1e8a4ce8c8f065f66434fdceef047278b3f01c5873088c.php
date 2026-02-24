<?php

declare(strict_types=1);

// odsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOManager.php-PHPStan\BetterReflection\Reflection\ReflectionClass-CodebarAg\MicrosoftEntraSSO\MicrosoftEntraSSOManager
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6.65.0.9-8.4.18-9e9a85709f499856dec443e5681b01ecef3f5ae3a73499e421d8a463237e8260',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'CodebarAg\\MicrosoftEntraSSO\\MicrosoftEntraSSOManager',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/src/MicrosoftEntraSSOManager.php',
            ],
        ],
        'namespace' => 'CodebarAg\\MicrosoftEntraSSO',
        'name' => 'CodebarAg\\MicrosoftEntraSSO\\MicrosoftEntraSSOManager',
        'shortName' => 'MicrosoftEntraSSOManager',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 9,
        'endLine' => 25,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Factory',
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'provider' => [
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\MicrosoftEntraSSOManager',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\MicrosoftEntraSSOManager',
                'name' => 'provider',
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
                'startLine' => 12,
                'endLine' => 12,
                'startColumn' => 9,
                'endColumn' => 36,
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
                    'provider' => [
                        'name' => 'provider',
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
                        'startLine' => 12,
                        'endLine' => 12,
                        'startColumn' => 9,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 11,
                'endLine' => 13,
                'startColumn' => 5,
                'endColumn' => 8,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\MicrosoftEntraSSOManager',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\MicrosoftEntraSSOManager',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\MicrosoftEntraSSOManager',
                'aliasName' => null,
            ],
            'driver' => [
                'name' => 'driver',
                'parameters' => [
                    'driver' => [
                        'name' => 'driver',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 15,
                                'endLine' => 15,
                                'startTokenPos' => 64,
                                'startFilePos' => 359,
                                'endTokenPos' => 64,
                                'endFilePos' => 362,
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
                        'startLine' => 15,
                        'endLine' => 15,
                        'startColumn' => 28,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'CodebarAg\\MicrosoftEntraSSO\\Contracts\\Provider',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 15,
                'endLine' => 24,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => true,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'CodebarAg\\MicrosoftEntraSSO',
                'declaringClassName' => 'CodebarAg\\MicrosoftEntraSSO\\MicrosoftEntraSSOManager',
                'implementingClassName' => 'CodebarAg\\MicrosoftEntraSSO\\MicrosoftEntraSSOManager',
                'currentClassName' => 'CodebarAg\\MicrosoftEntraSSO\\MicrosoftEntraSSOManager',
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
