<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Support/Manager.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\Manager
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-b1c2789067e4e933c84711d0ed646bb4358c0a0296df8cca54c8660251cbe351-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Support\\Manager',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Support/Manager.php',
            ],
        ],
        'namespace' => 'Illuminate\\Support',
        'name' => 'Illuminate\\Support\\Manager',
        'shortName' => 'Manager',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 64,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 9,
        'endLine' => 188,
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
            'container' => [
                'declaringClassName' => 'Illuminate\\Support\\Manager',
                'implementingClassName' => 'Illuminate\\Support\\Manager',
                'name' => 'container',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The container instance.
 *
 * @var \\Illuminate\\Contracts\\Container\\Container
 */',
                'attributes' => [
                ],
                'startLine' => 16,
                'endLine' => 16,
                'startColumn' => 5,
                'endColumn' => 25,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'config' => [
                'declaringClassName' => 'Illuminate\\Support\\Manager',
                'implementingClassName' => 'Illuminate\\Support\\Manager',
                'name' => 'config',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The configuration repository instance.
 *
 * @var \\Illuminate\\Contracts\\Config\\Repository
 */',
                'attributes' => [
                ],
                'startLine' => 23,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'customCreators' => [
                'declaringClassName' => 'Illuminate\\Support\\Manager',
                'implementingClassName' => 'Illuminate\\Support\\Manager',
                'name' => 'customCreators',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 30,
                        'endLine' => 30,
                        'startTokenPos' => 52,
                        'startFilePos' => 552,
                        'endTokenPos' => 53,
                        'endFilePos' => 553,
                    ],
                ],
                'docComment' => '/**
 * The registered custom driver creators.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 30,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 35,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'drivers' => [
                'declaringClassName' => 'Illuminate\\Support\\Manager',
                'implementingClassName' => 'Illuminate\\Support\\Manager',
                'name' => 'drivers',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 37,
                        'endLine' => 37,
                        'startTokenPos' => 64,
                        'startFilePos' => 662,
                        'endTokenPos' => 65,
                        'endFilePos' => 663,
                    ],
                ],
                'docComment' => '/**
 * The array of created "drivers".
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 37,
                'endLine' => 37,
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
                    'container' => [
                        'name' => 'container',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Container\\Container',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 44,
                        'endLine' => 44,
                        'startColumn' => 33,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new manager instance.
 *
 * @param  \\Illuminate\\Contracts\\Container\\Container  $container
 */',
                'startLine' => 44,
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Manager',
                'implementingClassName' => 'Illuminate\\Support\\Manager',
                'currentClassName' => 'Illuminate\\Support\\Manager',
                'aliasName' => null,
            ],
            'getDefaultDriver' => [
                'name' => 'getDefaultDriver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the default driver name.
 *
 * @return string|null
 */',
                'startLine' => 55,
                'endLine' => 55,
                'startColumn' => 5,
                'endColumn' => 48,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 65,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Manager',
                'implementingClassName' => 'Illuminate\\Support\\Manager',
                'currentClassName' => 'Illuminate\\Support\\Manager',
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
                                'startLine' => 65,
                                'endLine' => 65,
                                'startTokenPos' => 133,
                                'startFilePos' => 1286,
                                'endTokenPos' => 133,
                                'endFilePos' => 1289,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 65,
                        'endLine' => 65,
                        'startColumn' => 28,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a driver instance.
 *
 * @param  string|null  $driver
 * @return mixed
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 65,
                'endLine' => 79,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Manager',
                'implementingClassName' => 'Illuminate\\Support\\Manager',
                'currentClassName' => 'Illuminate\\Support\\Manager',
                'aliasName' => null,
            ],
            'createDriver' => [
                'name' => 'createDriver',
                'parameters' => [
                    'driver' => [
                        'name' => 'driver',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 89,
                        'endLine' => 89,
                        'startColumn' => 37,
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
 * Create a new driver instance.
 *
 * @param  string  $driver
 * @return mixed
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 89,
                'endLine' => 105,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Manager',
                'implementingClassName' => 'Illuminate\\Support\\Manager',
                'currentClassName' => 'Illuminate\\Support\\Manager',
                'aliasName' => null,
            ],
            'callCustomCreator' => [
                'name' => 'callCustomCreator',
                'parameters' => [
                    'driver' => [
                        'name' => 'driver',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 113,
                        'endLine' => 113,
                        'startColumn' => 42,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Call a custom driver creator.
 *
 * @param  string  $driver
 * @return mixed
 */',
                'startLine' => 113,
                'endLine' => 116,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Manager',
                'implementingClassName' => 'Illuminate\\Support\\Manager',
                'currentClassName' => 'Illuminate\\Support\\Manager',
                'aliasName' => null,
            ],
            'extend' => [
                'name' => 'extend',
                'parameters' => [
                    'driver' => [
                        'name' => 'driver',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 125,
                        'endLine' => 125,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Closure',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 125,
                        'endLine' => 125,
                        'startColumn' => 37,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a custom driver creator Closure.
 *
 * @param  string  $driver
 * @param  \\Closure  $callback
 * @return $this
 */',
                'startLine' => 125,
                'endLine' => 130,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Manager',
                'implementingClassName' => 'Illuminate\\Support\\Manager',
                'currentClassName' => 'Illuminate\\Support\\Manager',
                'aliasName' => null,
            ],
            'getDrivers' => [
                'name' => 'getDrivers',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get all of the created "drivers".
 *
 * @return array
 */',
                'startLine' => 137,
                'endLine' => 140,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Manager',
                'implementingClassName' => 'Illuminate\\Support\\Manager',
                'currentClassName' => 'Illuminate\\Support\\Manager',
                'aliasName' => null,
            ],
            'getContainer' => [
                'name' => 'getContainer',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the container instance used by the manager.
 *
 * @return \\Illuminate\\Contracts\\Container\\Container
 */',
                'startLine' => 147,
                'endLine' => 150,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Manager',
                'implementingClassName' => 'Illuminate\\Support\\Manager',
                'currentClassName' => 'Illuminate\\Support\\Manager',
                'aliasName' => null,
            ],
            'setContainer' => [
                'name' => 'setContainer',
                'parameters' => [
                    'container' => [
                        'name' => 'container',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Container\\Container',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 158,
                        'endLine' => 158,
                        'startColumn' => 34,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the container instance used by the manager.
 *
 * @param  \\Illuminate\\Contracts\\Container\\Container  $container
 * @return $this
 */',
                'startLine' => 158,
                'endLine' => 163,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Manager',
                'implementingClassName' => 'Illuminate\\Support\\Manager',
                'currentClassName' => 'Illuminate\\Support\\Manager',
                'aliasName' => null,
            ],
            'forgetDrivers' => [
                'name' => 'forgetDrivers',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Forget all of the resolved driver instances.
 *
 * @return $this
 */',
                'startLine' => 170,
                'endLine' => 175,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Manager',
                'implementingClassName' => 'Illuminate\\Support\\Manager',
                'currentClassName' => 'Illuminate\\Support\\Manager',
                'aliasName' => null,
            ],
            '__call' => [
                'name' => '__call',
                'parameters' => [
                    'method' => [
                        'name' => 'method',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 184,
                        'endLine' => 184,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 184,
                        'endLine' => 184,
                        'startColumn' => 37,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dynamically call the default driver instance.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */',
                'startLine' => 184,
                'endLine' => 187,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Manager',
                'implementingClassName' => 'Illuminate\\Support\\Manager',
                'currentClassName' => 'Illuminate\\Support\\Manager',
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
