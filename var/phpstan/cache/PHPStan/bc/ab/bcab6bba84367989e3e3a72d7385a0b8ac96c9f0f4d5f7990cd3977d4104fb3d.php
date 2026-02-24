<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Auth/UserProvider.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Contracts\Auth\UserProvider
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6a9a08a7a0622a4740139471f18a43733891d9fde6cd24f78d44dadbac3b37f6-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Auth/UserProvider.php',
            ],
        ],
        'namespace' => 'Illuminate\\Contracts\\Auth',
        'name' => 'Illuminate\\Contracts\\Auth\\UserProvider',
        'shortName' => 'UserProvider',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 5,
        'endLine' => 59,
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
            'retrieveById' => [
                'name' => 'retrieveById',
                'parameters' => [
                    'identifier' => [
                        'name' => 'identifier',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 13,
                        'endLine' => 13,
                        'startColumn' => 34,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve a user by their unique identifier.
 *
 * @param  mixed  $identifier
 * @return \\Illuminate\\Contracts\\Auth\\Authenticatable|null
 */',
                'startLine' => 13,
                'endLine' => 13,
                'startColumn' => 5,
                'endColumn' => 46,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Auth',
                'declaringClassName' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                'implementingClassName' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                'currentClassName' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                'aliasName' => null,
            ],
            'retrieveByToken' => [
                'name' => 'retrieveByToken',
                'parameters' => [
                    'identifier' => [
                        'name' => 'identifier',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 22,
                        'endLine' => 22,
                        'startColumn' => 37,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'token' => [
                        'name' => 'token',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                            0 => [
                                'name' => 'SensitiveParameter',
                                'isRepeated' => false,
                                'arguments' => [
                                ],
                            ],
                        ],
                        'startLine' => 22,
                        'endLine' => 22,
                        'startColumn' => 50,
                        'endColumn' => 78,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve a user by their unique identifier and "remember me" token.
 *
 * @param  mixed  $identifier
 * @param  string  $token
 * @return \\Illuminate\\Contracts\\Auth\\Authenticatable|null
 */',
                'startLine' => 22,
                'endLine' => 22,
                'startColumn' => 5,
                'endColumn' => 80,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Auth',
                'declaringClassName' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                'implementingClassName' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                'currentClassName' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                'aliasName' => null,
            ],
            'updateRememberToken' => [
                'name' => 'updateRememberToken',
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
                        'startLine' => 31,
                        'endLine' => 31,
                        'startColumn' => 41,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'token' => [
                        'name' => 'token',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                            0 => [
                                'name' => 'SensitiveParameter',
                                'isRepeated' => false,
                                'arguments' => [
                                ],
                            ],
                        ],
                        'startLine' => 31,
                        'endLine' => 31,
                        'startColumn' => 64,
                        'endColumn' => 92,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Update the "remember me" token for the given user in storage.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @param  string  $token
 * @return void
 */',
                'startLine' => 31,
                'endLine' => 31,
                'startColumn' => 5,
                'endColumn' => 94,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Auth',
                'declaringClassName' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                'implementingClassName' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                'currentClassName' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                'aliasName' => null,
            ],
            'retrieveByCredentials' => [
                'name' => 'retrieveByCredentials',
                'parameters' => [
                    'credentials' => [
                        'name' => 'credentials',
                        'default' => null,
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
                            0 => [
                                'name' => 'SensitiveParameter',
                                'isRepeated' => false,
                                'arguments' => [
                                ],
                            ],
                        ],
                        'startLine' => 39,
                        'endLine' => 39,
                        'startColumn' => 43,
                        'endColumn' => 83,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve a user by the given credentials.
 *
 * @param  array  $credentials
 * @return \\Illuminate\\Contracts\\Auth\\Authenticatable|null
 */',
                'startLine' => 39,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 85,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Auth',
                'declaringClassName' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                'implementingClassName' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                'currentClassName' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                'aliasName' => null,
            ],
            'validateCredentials' => [
                'name' => 'validateCredentials',
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
                        'startLine' => 48,
                        'endLine' => 48,
                        'startColumn' => 41,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'credentials' => [
                        'name' => 'credentials',
                        'default' => null,
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
                            0 => [
                                'name' => 'SensitiveParameter',
                                'isRepeated' => false,
                                'arguments' => [
                                ],
                            ],
                        ],
                        'startLine' => 48,
                        'endLine' => 48,
                        'startColumn' => 64,
                        'endColumn' => 104,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Validate a user against the given credentials.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @param  array  $credentials
 * @return bool
 */',
                'startLine' => 48,
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 106,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Auth',
                'declaringClassName' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                'implementingClassName' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                'currentClassName' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                'aliasName' => null,
            ],
            'rehashPasswordIfRequired' => [
                'name' => 'rehashPasswordIfRequired',
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
                        'startLine' => 58,
                        'endLine' => 58,
                        'startColumn' => 46,
                        'endColumn' => 66,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'credentials' => [
                        'name' => 'credentials',
                        'default' => null,
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
                            0 => [
                                'name' => 'SensitiveParameter',
                                'isRepeated' => false,
                                'arguments' => [
                                ],
                            ],
                        ],
                        'startLine' => 58,
                        'endLine' => 58,
                        'startColumn' => 69,
                        'endColumn' => 109,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'force' => [
                        'name' => 'force',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 58,
                                'endLine' => 58,
                                'startTokenPos' => 134,
                                'startFilePos' => 1818,
                                'endTokenPos' => 134,
                                'endFilePos' => 1822,
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
                        'startLine' => 58,
                        'endLine' => 58,
                        'startColumn' => 112,
                        'endColumn' => 130,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Rehash the user\'s password if required and supported.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Authenticatable  $user
 * @param  array  $credentials
 * @param  bool  $force
 * @return void
 */',
                'startLine' => 58,
                'endLine' => 58,
                'startColumn' => 5,
                'endColumn' => 132,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Auth',
                'declaringClassName' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                'implementingClassName' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                'currentClassName' => 'Illuminate\\Contracts\\Auth\\UserProvider',
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
