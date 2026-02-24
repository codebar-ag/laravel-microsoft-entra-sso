<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Events/Dispatchable.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Events\Dispatchable
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-70c0e27c21cb8a278bedcd79eb6d2dc33bc12ac326d4e27f84a01eaa44759e7c-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Foundation\\Events\\Dispatchable',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Events/Dispatchable.php',
            ],
        ],
        'namespace' => 'Illuminate\\Foundation\\Events',
        'name' => 'Illuminate\\Foundation\\Events\\Dispatchable',
        'shortName' => 'Dispatchable',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 5,
        'endLine' => 56,
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
            'dispatch' => [
                'name' => 'dispatch',
                'parameters' => [
                    'arguments' => [
                        'name' => 'arguments',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 13,
                        'endLine' => 13,
                        'startColumn' => 37,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dispatch the event with the given arguments.
 *
 * @param  mixed  ...$arguments
 * @return mixed
 */',
                'startLine' => 13,
                'endLine' => 16,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Foundation\\Events',
                'declaringClassName' => 'Illuminate\\Foundation\\Events\\Dispatchable',
                'implementingClassName' => 'Illuminate\\Foundation\\Events\\Dispatchable',
                'currentClassName' => 'Illuminate\\Foundation\\Events\\Dispatchable',
                'aliasName' => null,
            ],
            'dispatchIf' => [
                'name' => 'dispatchIf',
                'parameters' => [
                    'boolean' => [
                        'name' => 'boolean',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 25,
                        'endLine' => 25,
                        'startColumn' => 39,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'arguments' => [
                        'name' => 'arguments',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 25,
                        'endLine' => 25,
                        'startColumn' => 49,
                        'endColumn' => 61,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dispatch the event with the given arguments if the given truth test passes.
 *
 * @param  bool  $boolean
 * @param  mixed  ...$arguments
 * @return mixed
 */',
                'startLine' => 25,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Foundation\\Events',
                'declaringClassName' => 'Illuminate\\Foundation\\Events\\Dispatchable',
                'implementingClassName' => 'Illuminate\\Foundation\\Events\\Dispatchable',
                'currentClassName' => 'Illuminate\\Foundation\\Events\\Dispatchable',
                'aliasName' => null,
            ],
            'dispatchUnless' => [
                'name' => 'dispatchUnless',
                'parameters' => [
                    'boolean' => [
                        'name' => 'boolean',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 39,
                        'endLine' => 39,
                        'startColumn' => 43,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'arguments' => [
                        'name' => 'arguments',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 39,
                        'endLine' => 39,
                        'startColumn' => 53,
                        'endColumn' => 65,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dispatch the event with the given arguments unless the given truth test passes.
 *
 * @param  bool  $boolean
 * @param  mixed  ...$arguments
 * @return mixed
 */',
                'startLine' => 39,
                'endLine' => 44,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Foundation\\Events',
                'declaringClassName' => 'Illuminate\\Foundation\\Events\\Dispatchable',
                'implementingClassName' => 'Illuminate\\Foundation\\Events\\Dispatchable',
                'currentClassName' => 'Illuminate\\Foundation\\Events\\Dispatchable',
                'aliasName' => null,
            ],
            'broadcast' => [
                'name' => 'broadcast',
                'parameters' => [
                    'arguments' => [
                        'name' => 'arguments',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 52,
                        'endLine' => 52,
                        'startColumn' => 38,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Broadcast the event with the given arguments.
 *
 * @param  mixed  ...$arguments
 * @return \\Illuminate\\Broadcasting\\PendingBroadcast
 */',
                'startLine' => 52,
                'endLine' => 55,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Foundation\\Events',
                'declaringClassName' => 'Illuminate\\Foundation\\Events\\Dispatchable',
                'implementingClassName' => 'Illuminate\\Foundation\\Events\\Dispatchable',
                'currentClassName' => 'Illuminate\\Foundation\\Events\\Dispatchable',
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
