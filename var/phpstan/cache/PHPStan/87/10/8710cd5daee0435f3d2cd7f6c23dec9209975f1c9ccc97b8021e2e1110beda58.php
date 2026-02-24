<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Auth/GuardHelpers.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Auth\GuardHelpers
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-449dc7fdef866e571d65ce9847c69a6686b059865ae763ef9970e0e7b128a063-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Auth\\GuardHelpers',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Auth/GuardHelpers.php',
            ],
        ],
        'namespace' => 'Illuminate\\Auth',
        'name' => 'Illuminate\\Auth\\GuardHelpers',
        'shortName' => 'GuardHelpers',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * These methods are typically the same across all guards.
 */',
        'attributes' => [
        ],
        'startLine' => 11,
        'endLine' => 124,
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
            'user' => [
                'declaringClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'implementingClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'name' => 'user',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The currently authenticated user.
 *
 * @var \\Illuminate\\Contracts\\Auth\\Authenticatable|null
 */',
                'attributes' => [
                ],
                'startLine' => 18,
                'endLine' => 18,
                'startColumn' => 5,
                'endColumn' => 20,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'provider' => [
                'declaringClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'implementingClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'name' => 'provider',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The user provider implementation.
 *
 * @var \\Illuminate\\Contracts\\Auth\\UserProvider
 */',
                'attributes' => [
                ],
                'startLine' => 25,
                'endLine' => 25,
                'startColumn' => 5,
                'endColumn' => 24,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'authenticate' => [
                'name' => 'authenticate',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the current user is authenticated. If not, throw an exception.
 *
 * @return \\Illuminate\\Contracts\\Auth\\Authenticatable
 *
 * @throws \\Illuminate\\Auth\\AuthenticationException
 */',
                'startLine' => 34,
                'endLine' => 37,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'implementingClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'currentClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'aliasName' => null,
            ],
            'hasUser' => [
                'name' => 'hasUser',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the guard has a user instance.
 *
 * @return bool
 */',
                'startLine' => 44,
                'endLine' => 47,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'implementingClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'currentClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'aliasName' => null,
            ],
            'check' => [
                'name' => 'check',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the current user is authenticated.
 *
 * @return bool
 */',
                'startLine' => 54,
                'endLine' => 57,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'implementingClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'currentClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'aliasName' => null,
            ],
            'guest' => [
                'name' => 'guest',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the current user is a guest.
 *
 * @return bool
 */',
                'startLine' => 64,
                'endLine' => 67,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'implementingClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'currentClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'aliasName' => null,
            ],
            'id' => [
                'name' => 'id',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the ID for the currently authenticated user.
 *
 * @return int|string|null
 */',
                'startLine' => 74,
                'endLine' => 77,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'implementingClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'currentClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'aliasName' => null,
            ],
            'setUser' => [
                'name' => 'setUser',
                'parameters' => [
                    'user' => [
                        'name' => 'user',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Auth\\Authenticatable',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 85,
                        'endLine' => 85,
                        'startColumn' => 29,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the current user.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @return $this
 */',
                'startLine' => 85,
                'endLine' => 90,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'implementingClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'currentClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'aliasName' => null,
            ],
            'forgetUser' => [
                'name' => 'forgetUser',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Forget the current user.
 *
 * @return $this
 */',
                'startLine' => 97,
                'endLine' => 102,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'implementingClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'currentClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'aliasName' => null,
            ],
            'getProvider' => [
                'name' => 'getProvider',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the user provider used by the guard.
 *
 * @return \\Illuminate\\Contracts\\Auth\\UserProvider
 */',
                'startLine' => 109,
                'endLine' => 112,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'implementingClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'currentClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'aliasName' => null,
            ],
            'setProvider' => [
                'name' => 'setProvider',
                'parameters' => [
                    'provider' => [
                        'name' => 'provider',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 120,
                        'endLine' => 120,
                        'startColumn' => 33,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the user provider used by the guard.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\UserProvider  $provider
 * @return void
 */',
                'startLine' => 120,
                'endLine' => 123,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'implementingClassName' => 'Illuminate\\Auth\\GuardHelpers',
                'currentClassName' => 'Illuminate\\Auth\\GuardHelpers',
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
