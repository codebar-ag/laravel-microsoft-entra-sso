<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Auth/Authenticatable.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Auth\Authenticatable
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-9f2f7db979a7d557cfc92fa53aca95ba039ce3b18b75282f9ffb185176f30e5e-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Auth\\Authenticatable',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Auth/Authenticatable.php',
            ],
        ],
        'namespace' => 'Illuminate\\Auth',
        'name' => 'Illuminate\\Auth\\Authenticatable',
        'shortName' => 'Authenticatable',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 5,
        'endLine' => 105,
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
            'authPasswordName' => [
                'declaringClassName' => 'Illuminate\\Auth\\Authenticatable',
                'implementingClassName' => 'Illuminate\\Auth\\Authenticatable',
                'name' => 'authPasswordName',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'password\'',
                    'attributes' => [
                        'startLine' => 12,
                        'endLine' => 12,
                        'startTokenPos' => 21,
                        'startFilePos' => 209,
                        'endTokenPos' => 21,
                        'endFilePos' => 218,
                    ],
                ],
                'docComment' => '/**
 * The column name of the password field using during authentication.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 12,
                'endLine' => 12,
                'startColumn' => 5,
                'endColumn' => 45,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'rememberTokenName' => [
                'declaringClassName' => 'Illuminate\\Auth\\Authenticatable',
                'implementingClassName' => 'Illuminate\\Auth\\Authenticatable',
                'name' => 'rememberTokenName',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'remember_token\'',
                    'attributes' => [
                        'startLine' => 19,
                        'endLine' => 19,
                        'startTokenPos' => 32,
                        'startFilePos' => 350,
                        'endTokenPos' => 32,
                        'endFilePos' => 365,
                    ],
                ],
                'docComment' => '/**
 * The column name of the "remember me" token.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 19,
                'endLine' => 19,
                'startColumn' => 5,
                'endColumn' => 52,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'getAuthIdentifierName' => [
                'name' => 'getAuthIdentifierName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the name of the unique identifier for the user.
 *
 * @return string
 */',
                'startLine' => 26,
                'endLine' => 29,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\Authenticatable',
                'implementingClassName' => 'Illuminate\\Auth\\Authenticatable',
                'currentClassName' => 'Illuminate\\Auth\\Authenticatable',
                'aliasName' => null,
            ],
            'getAuthIdentifier' => [
                'name' => 'getAuthIdentifier',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the unique identifier for the user.
 *
 * @return mixed
 */',
                'startLine' => 36,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\Authenticatable',
                'implementingClassName' => 'Illuminate\\Auth\\Authenticatable',
                'currentClassName' => 'Illuminate\\Auth\\Authenticatable',
                'aliasName' => null,
            ],
            'getAuthIdentifierForBroadcasting' => [
                'name' => 'getAuthIdentifierForBroadcasting',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the unique broadcast identifier for the user.
 *
 * @return mixed
 */',
                'startLine' => 46,
                'endLine' => 49,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\Authenticatable',
                'implementingClassName' => 'Illuminate\\Auth\\Authenticatable',
                'currentClassName' => 'Illuminate\\Auth\\Authenticatable',
                'aliasName' => null,
            ],
            'getAuthPasswordName' => [
                'name' => 'getAuthPasswordName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the name of the password attribute for the user.
 *
 * @return string
 */',
                'startLine' => 56,
                'endLine' => 59,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\Authenticatable',
                'implementingClassName' => 'Illuminate\\Auth\\Authenticatable',
                'currentClassName' => 'Illuminate\\Auth\\Authenticatable',
                'aliasName' => null,
            ],
            'getAuthPassword' => [
                'name' => 'getAuthPassword',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the password for the user.
 *
 * @return string
 */',
                'startLine' => 66,
                'endLine' => 69,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\Authenticatable',
                'implementingClassName' => 'Illuminate\\Auth\\Authenticatable',
                'currentClassName' => 'Illuminate\\Auth\\Authenticatable',
                'aliasName' => null,
            ],
            'getRememberToken' => [
                'name' => 'getRememberToken',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the token value for the "remember me" session.
 *
 * @return string|null
 */',
                'startLine' => 76,
                'endLine' => 81,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\Authenticatable',
                'implementingClassName' => 'Illuminate\\Auth\\Authenticatable',
                'currentClassName' => 'Illuminate\\Auth\\Authenticatable',
                'aliasName' => null,
            ],
            'setRememberToken' => [
                'name' => 'setRememberToken',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 89,
                        'endLine' => 89,
                        'startColumn' => 38,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the token value for the "remember me" session.
 *
 * @param  string  $value
 * @return void
 */',
                'startLine' => 89,
                'endLine' => 94,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\Authenticatable',
                'implementingClassName' => 'Illuminate\\Auth\\Authenticatable',
                'currentClassName' => 'Illuminate\\Auth\\Authenticatable',
                'aliasName' => null,
            ],
            'getRememberTokenName' => [
                'name' => 'getRememberTokenName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the column name for the "remember me" token.
 *
 * @return string
 */',
                'startLine' => 101,
                'endLine' => 104,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Auth',
                'declaringClassName' => 'Illuminate\\Auth\\Authenticatable',
                'implementingClassName' => 'Illuminate\\Auth\\Authenticatable',
                'currentClassName' => 'Illuminate\\Auth\\Authenticatable',
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
