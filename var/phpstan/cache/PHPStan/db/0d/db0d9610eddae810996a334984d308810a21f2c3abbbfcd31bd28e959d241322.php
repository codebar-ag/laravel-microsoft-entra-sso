<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Auth/TokenGuard.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Auth\TokenGuard
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-4587331bb03e0983caef51d65c4af3a72276ae98a3939b9e45f445a4e3a2b45b-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Auth\\TokenGuard',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Auth/TokenGuard.php',
            ],
        ],
        'namespace' => 'Illuminate\\Auth',
        'name' => 'Illuminate\\Auth\\TokenGuard',
        'shortName' => 'TokenGuard',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 10,
        'endLine' => 134,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Auth\\Guard',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Auth\\GuardHelpers',
            1 => 'Illuminate\\Support\\Traits\\Macroable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'request' => [
                'declaringClassName' => 'Illuminate\\Auth\\TokenGuard',
                'implementingClassName' => 'Illuminate\\Auth\\TokenGuard',
                'name' => 'request',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The request instance.
 *
 * @var \\Illuminate\\Http\\Request
 */',
                'attributes' => [
                ],
                'startLine' => 19,
                'endLine' => 19,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'inputKey' => [
                'declaringClassName' => 'Illuminate\\Auth\\TokenGuard',
                'implementingClassName' => 'Illuminate\\Auth\\TokenGuard',
                'name' => 'inputKey',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The name of the query string item from the request containing the API token.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 26,
                'endLine' => 26,
                'startColumn' => 5,
                'endColumn' => 24,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'storageKey' => [
                'declaringClassName' => 'Illuminate\\Auth\\TokenGuard',
                'implementingClassName' => 'Illuminate\\Auth\\TokenGuard',
                'name' => 'storageKey',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The name of the token "column" in persistent storage.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 33,
                'endLine' => 33,
                'startColumn' => 5,
                'endColumn' => 26,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'hash' => [
                'declaringClassName' => 'Illuminate\\Auth\\TokenGuard',
                'implementingClassName' => 'Illuminate\\Auth\\TokenGuard',
                'name' => 'hash',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 40,
                        'endLine' => 40,
                        'startTokenPos' => 74,
                        'startFilePos' => 772,
                        'endTokenPos' => 74,
                        'endFilePos' => 776,
                    ],
                ],
                'docComment' => '/**
 * Indicates if the API token is hashed in storage.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 40,
                'endLine' => 40,
                'startColumn' => 5,
                'endColumn' => 28,
                'isPromoted' => false,
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
                                'name' => 'Illuminate\\Contracts\\Auth\\UserProvider',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 52,
                        'endLine' => 52,
                        'startColumn' => 9,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                        'startLine' => 53,
                        'endLine' => 53,
                        'startColumn' => 9,
                        'endColumn' => 24,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'inputKey' => [
                        'name' => 'inputKey',
                        'default' => [
                            'code' => '\'api_token\'',
                            'attributes' => [
                                'startLine' => 54,
                                'endLine' => 54,
                                'startTokenPos' => 100,
                                'startFilePos' => 1167,
                                'endTokenPos' => 100,
                                'endFilePos' => 1177,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 54,
                        'endLine' => 54,
                        'startColumn' => 9,
                        'endColumn' => 31,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'storageKey' => [
                        'name' => 'storageKey',
                        'default' => [
                            'code' => '\'api_token\'',
                            'attributes' => [
                                'startLine' => 55,
                                'endLine' => 55,
                                'startTokenPos' => 107,
                                'startFilePos' => 1202,
                                'endTokenPos' => 107,
                                'endFilePos' => 1212,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 55,
                        'endLine' => 55,
                        'startColumn' => 9,
                        'endColumn' => 33,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'hash' => [
                        'name' => 'hash',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 56,
                                'endLine' => 56,
                                'startTokenPos' => 114,
                                'startFilePos' => 1231,
                                'endTokenPos' => 114,
                                'endFilePos' => 1235,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 56,
                        'endLine' => 56,
                        'startColumn' => 9,
                        'endColumn' => 21,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new authentication guard.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\UserProvider  $provider
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  string  $inputKey
 * @param  string  $storageKey
 * @param  bool  $hash
 */',
                'startLine' => 51,
                'endLine' => 63,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\TokenGuard',
                'implementingClassName' => 'Illuminate\\Auth\\TokenGuard',
                'currentClassName' => 'Illuminate\\Auth\\TokenGuard',
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
                'startLine' => 70,
                'endLine' => 90,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\TokenGuard',
                'implementingClassName' => 'Illuminate\\Auth\\TokenGuard',
                'currentClassName' => 'Illuminate\\Auth\\TokenGuard',
                'aliasName' => null,
            ],
            'getTokenForRequest' => [
                'name' => 'getTokenForRequest',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the token for the current request.
 *
 * @return string|null
 */',
                'startLine' => 97,
                'endLine' => 103,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\TokenGuard',
                'implementingClassName' => 'Illuminate\\Auth\\TokenGuard',
                'currentClassName' => 'Illuminate\\Auth\\TokenGuard',
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
                                'startLine' => 111,
                                'endLine' => 111,
                                'startTokenPos' => 375,
                                'startFilePos' => 2749,
                                'endTokenPos' => 376,
                                'endFilePos' => 2750,
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
                        'startLine' => 111,
                        'endLine' => 111,
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
                'startLine' => 111,
                'endLine' => 120,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\TokenGuard',
                'implementingClassName' => 'Illuminate\\Auth\\TokenGuard',
                'currentClassName' => 'Illuminate\\Auth\\TokenGuard',
                'aliasName' => null,
            ],
            'setRequest' => [
                'name' => 'setRequest',
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
                        'startLine' => 128,
                        'endLine' => 128,
                        'startColumn' => 32,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the current request instance.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return $this
 */',
                'startLine' => 128,
                'endLine' => 133,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\TokenGuard',
                'implementingClassName' => 'Illuminate\\Auth\\TokenGuard',
                'currentClassName' => 'Illuminate\\Auth\\TokenGuard',
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
