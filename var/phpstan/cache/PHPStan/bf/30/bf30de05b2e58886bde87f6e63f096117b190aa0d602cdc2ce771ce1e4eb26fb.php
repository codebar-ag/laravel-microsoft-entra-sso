<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Cache/LockProvider.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Contracts\Cache\LockProvider
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-d3c3d0cb9516e509d9a94ebda3e18a101671fec0361a8508d883ad259db47d23-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Contracts\\Cache\\LockProvider',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Cache/LockProvider.php',
            ],
        ],
        'namespace' => 'Illuminate\\Contracts\\Cache',
        'name' => 'Illuminate\\Contracts\\Cache\\LockProvider',
        'shortName' => 'LockProvider',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 5,
        'endLine' => 25,
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
            'lock' => [
                'name' => 'lock',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 15,
                        'endLine' => 15,
                        'startColumn' => 26,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'seconds' => [
                        'name' => 'seconds',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 15,
                                'endLine' => 15,
                                'startTokenPos' => 28,
                                'startFilePos' => 306,
                                'endTokenPos' => 28,
                                'endFilePos' => 306,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 15,
                        'endLine' => 15,
                        'startColumn' => 33,
                        'endColumn' => 44,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'owner' => [
                        'name' => 'owner',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 15,
                                'endLine' => 15,
                                'startTokenPos' => 35,
                                'startFilePos' => 318,
                                'endTokenPos' => 35,
                                'endFilePos' => 321,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 15,
                        'endLine' => 15,
                        'startColumn' => 47,
                        'endColumn' => 59,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a lock instance.
 *
 * @param  string  $name
 * @param  int  $seconds
 * @param  string|null  $owner
 * @return \\Illuminate\\Contracts\\Cache\\Lock
 */',
                'startLine' => 15,
                'endLine' => 15,
                'startColumn' => 5,
                'endColumn' => 61,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\LockProvider',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\LockProvider',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\LockProvider',
                'aliasName' => null,
            ],
            'restoreLock' => [
                'name' => 'restoreLock',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 24,
                        'endLine' => 24,
                        'startColumn' => 33,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'owner' => [
                        'name' => 'owner',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 24,
                        'endLine' => 24,
                        'startColumn' => 40,
                        'endColumn' => 45,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Restore a lock instance using the owner identifier.
 *
 * @param  string  $name
 * @param  string  $owner
 * @return \\Illuminate\\Contracts\\Cache\\Lock
 */',
                'startLine' => 24,
                'endLine' => 24,
                'startColumn' => 5,
                'endColumn' => 47,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\LockProvider',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\LockProvider',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\LockProvider',
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
