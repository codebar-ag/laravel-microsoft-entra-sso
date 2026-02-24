<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Cache/Lock.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Contracts\Cache\Lock
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-ceb400855a8e2884b320ff31c0976fea4de45e8dffa2a8190e504f942829f207-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Contracts\\Cache\\Lock',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Cache/Lock.php',
            ],
        ],
        'namespace' => 'Illuminate\\Contracts\\Cache',
        'name' => 'Illuminate\\Contracts\\Cache\\Lock',
        'shortName' => 'Lock',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 5,
        'endLine' => 46,
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
            'get' => [
                'name' => 'get',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 13,
                                'endLine' => 13,
                                'startTokenPos' => 25,
                                'startFilePos' => 219,
                                'endTokenPos' => 25,
                                'endFilePos' => 222,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 13,
                        'endLine' => 13,
                        'startColumn' => 25,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Attempt to acquire the lock.
 *
 * @param  callable|null  $callback
 * @return mixed
 */',
                'startLine' => 13,
                'endLine' => 13,
                'startColumn' => 5,
                'endColumn' => 42,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Lock',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Lock',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Lock',
                'aliasName' => null,
            ],
            'block' => [
                'name' => 'block',
                'parameters' => [
                    'seconds' => [
                        'name' => 'seconds',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 24,
                        'endLine' => 24,
                        'startColumn' => 27,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 24,
                                'endLine' => 24,
                                'startTokenPos' => 44,
                                'startFilePos' => 527,
                                'endTokenPos' => 44,
                                'endFilePos' => 530,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 24,
                        'endLine' => 24,
                        'startColumn' => 37,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Attempt to acquire the lock for the given number of seconds.
 *
 * @param  int  $seconds
 * @param  callable|null  $callback
 * @return mixed
 *
 * @throws \\Illuminate\\Contracts\\Cache\\LockTimeoutException
 */',
                'startLine' => 24,
                'endLine' => 24,
                'startColumn' => 5,
                'endColumn' => 54,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Lock',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Lock',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Lock',
                'aliasName' => null,
            ],
            'release' => [
                'name' => 'release',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Release the lock.
 *
 * @return bool
 */',
                'startLine' => 31,
                'endLine' => 31,
                'startColumn' => 5,
                'endColumn' => 30,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Lock',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Lock',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Lock',
                'aliasName' => null,
            ],
            'owner' => [
                'name' => 'owner',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the current owner of the lock.
 *
 * @return string
 */',
                'startLine' => 38,
                'endLine' => 38,
                'startColumn' => 5,
                'endColumn' => 28,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Lock',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Lock',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Lock',
                'aliasName' => null,
            ],
            'forceRelease' => [
                'name' => 'forceRelease',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Releases this lock in disregard of ownership.
 *
 * @return void
 */',
                'startLine' => 45,
                'endLine' => 45,
                'startColumn' => 5,
                'endColumn' => 35,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Cache',
                'declaringClassName' => 'Illuminate\\Contracts\\Cache\\Lock',
                'implementingClassName' => 'Illuminate\\Contracts\\Cache\\Lock',
                'currentClassName' => 'Illuminate\\Contracts\\Cache\\Lock',
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
