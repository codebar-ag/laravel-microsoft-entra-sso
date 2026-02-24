<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Auth/Guard.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Contracts\Auth\Guard
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-83f259f501d0dde0937a48701529730c4d95cc5192e37529979d9923005e14f8-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Contracts\\Auth\\Guard',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Auth/Guard.php',
            ],
        ],
        'namespace' => 'Illuminate\\Contracts\\Auth',
        'name' => 'Illuminate\\Contracts\\Auth\\Guard',
        'shortName' => 'Guard',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 5,
        'endLine' => 57,
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
                'startLine' => 12,
                'endLine' => 12,
                'startColumn' => 5,
                'endColumn' => 28,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Auth',
                'declaringClassName' => 'Illuminate\\Contracts\\Auth\\Guard',
                'implementingClassName' => 'Illuminate\\Contracts\\Auth\\Guard',
                'currentClassName' => 'Illuminate\\Contracts\\Auth\\Guard',
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
                'startLine' => 19,
                'endLine' => 19,
                'startColumn' => 5,
                'endColumn' => 28,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Auth',
                'declaringClassName' => 'Illuminate\\Contracts\\Auth\\Guard',
                'implementingClassName' => 'Illuminate\\Contracts\\Auth\\Guard',
                'currentClassName' => 'Illuminate\\Contracts\\Auth\\Guard',
                'aliasName' => null,
            ],
            'user' => [
                'name' => 'user',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the currently authenticated user.
 *
 * @return \\Illuminate\\Contracts\\Auth\\Authenticatable|null
 */',
                'startLine' => 26,
                'endLine' => 26,
                'startColumn' => 5,
                'endColumn' => 27,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Auth',
                'declaringClassName' => 'Illuminate\\Contracts\\Auth\\Guard',
                'implementingClassName' => 'Illuminate\\Contracts\\Auth\\Guard',
                'currentClassName' => 'Illuminate\\Contracts\\Auth\\Guard',
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
                'startLine' => 33,
                'endLine' => 33,
                'startColumn' => 5,
                'endColumn' => 25,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Auth',
                'declaringClassName' => 'Illuminate\\Contracts\\Auth\\Guard',
                'implementingClassName' => 'Illuminate\\Contracts\\Auth\\Guard',
                'currentClassName' => 'Illuminate\\Contracts\\Auth\\Guard',
                'aliasName' => null,
            ],
            'validate' => [
                'name' => 'validate',
                'parameters' => [
                    'credentials' => [
                        'name' => 'credentials',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 41,
                                'endLine' => 41,
                                'startTokenPos' => 71,
                                'startFilePos' => 776,
                                'endTokenPos' => 72,
                                'endFilePos' => 777,
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
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 41,
                        'endLine' => 41,
                        'startColumn' => 30,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Validate a user\'s credentials.
 *
 * @param  array  $credentials
 * @return bool
 */',
                'startLine' => 41,
                'endLine' => 41,
                'startColumn' => 5,
                'endColumn' => 54,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Auth',
                'declaringClassName' => 'Illuminate\\Contracts\\Auth\\Guard',
                'implementingClassName' => 'Illuminate\\Contracts\\Auth\\Guard',
                'currentClassName' => 'Illuminate\\Contracts\\Auth\\Guard',
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
                'startLine' => 48,
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 30,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Auth',
                'declaringClassName' => 'Illuminate\\Contracts\\Auth\\Guard',
                'implementingClassName' => 'Illuminate\\Contracts\\Auth\\Guard',
                'currentClassName' => 'Illuminate\\Contracts\\Auth\\Guard',
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
                        'startLine' => 56,
                        'endLine' => 56,
                        'startColumn' => 29,
                        'endColumn' => 49,
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
                'startLine' => 56,
                'endLine' => 56,
                'startColumn' => 5,
                'endColumn' => 51,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Auth',
                'declaringClassName' => 'Illuminate\\Contracts\\Auth\\Guard',
                'implementingClassName' => 'Illuminate\\Contracts\\Auth\\Guard',
                'currentClassName' => 'Illuminate\\Contracts\\Auth\\Guard',
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
