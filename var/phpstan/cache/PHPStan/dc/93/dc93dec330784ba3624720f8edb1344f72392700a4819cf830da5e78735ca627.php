<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Routing/Router.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Routing\Router
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-778dcd6d4e189b433198ea1cda502fb2399bc7d2621ca1f741f99e4c79fdfa14-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Routing\\Router',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Routing/Router.php',
            ],
        ],
        'namespace' => 'Illuminate\\Routing',
        'name' => 'Illuminate\\Routing\\Router',
        'shortName' => 'Router',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @mixin \\Illuminate\\Routing\\RouteRegistrar
 */',
        'attributes' => [
        ],
        'startLine' => 38,
        'endLine' => 1529,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Routing\\BindingRegistrar',
            1 => 'Illuminate\\Contracts\\Routing\\Registrar',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Support\\Traits\\Macroable',
            1 => 'Illuminate\\Support\\Traits\\Tappable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'events' => [
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'name' => 'events',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The event dispatcher instance.
 *
 * @var \\Illuminate\\Contracts\\Events\\Dispatcher
 */',
                'attributes' => [
                ],
                'startLine' => 50,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'container' => [
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'name' => 'container',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The IoC container instance.
 *
 * @var \\Illuminate\\Container\\Container
 */',
                'attributes' => [
                ],
                'startLine' => 57,
                'endLine' => 57,
                'startColumn' => 5,
                'endColumn' => 25,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'routes' => [
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'name' => 'routes',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The route collection instance.
 *
 * @var \\Illuminate\\Routing\\RouteCollectionInterface
 */',
                'attributes' => [
                ],
                'startLine' => 64,
                'endLine' => 64,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'current' => [
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'name' => 'current',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The currently dispatched route instance.
 *
 * @var \\Illuminate\\Routing\\Route|null
 */',
                'attributes' => [
                ],
                'startLine' => 71,
                'endLine' => 71,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'currentRequest' => [
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'name' => 'currentRequest',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The request currently being dispatched.
 *
 * @var \\Illuminate\\Http\\Request
 */',
                'attributes' => [
                ],
                'startLine' => 78,
                'endLine' => 78,
                'startColumn' => 5,
                'endColumn' => 30,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'middleware' => [
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'name' => 'middleware',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 85,
                        'endLine' => 85,
                        'startTokenPos' => 242,
                        'startFilePos' => 2165,
                        'endTokenPos' => 243,
                        'endFilePos' => 2166,
                    ],
                ],
                'docComment' => '/**
 * All of the short-hand keys for middlewares.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 85,
                'endLine' => 85,
                'startColumn' => 5,
                'endColumn' => 31,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'middlewareGroups' => [
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'name' => 'middlewareGroups',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 92,
                        'endLine' => 92,
                        'startTokenPos' => 254,
                        'startFilePos' => 2282,
                        'endTokenPos' => 255,
                        'endFilePos' => 2283,
                    ],
                ],
                'docComment' => '/**
 * All of the middleware groups.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 92,
                'endLine' => 92,
                'startColumn' => 5,
                'endColumn' => 37,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'middlewarePriority' => [
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'name' => 'middlewarePriority',
                'modifiers' => 1,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 101,
                        'endLine' => 101,
                        'startTokenPos' => 266,
                        'startFilePos' => 2484,
                        'endTokenPos' => 267,
                        'endFilePos' => 2485,
                    ],
                ],
                'docComment' => '/**
 * The priority-sorted list of middleware.
 *
 * Forces the listed middleware to always be in the given order.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 101,
                'endLine' => 101,
                'startColumn' => 5,
                'endColumn' => 36,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'binders' => [
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'name' => 'binders',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 108,
                        'endLine' => 108,
                        'startTokenPos' => 278,
                        'startFilePos' => 2598,
                        'endTokenPos' => 279,
                        'endFilePos' => 2599,
                    ],
                ],
                'docComment' => '/**
 * The registered route value binders.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 108,
                'endLine' => 108,
                'startColumn' => 5,
                'endColumn' => 28,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'patterns' => [
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'name' => 'patterns',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 115,
                        'endLine' => 115,
                        'startTokenPos' => 290,
                        'startFilePos' => 2720,
                        'endTokenPos' => 291,
                        'endFilePos' => 2721,
                    ],
                ],
                'docComment' => '/**
 * The globally available parameter patterns.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 115,
                'endLine' => 115,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'groupStack' => [
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'name' => 'groupStack',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 122,
                        'endLine' => 122,
                        'startTokenPos' => 302,
                        'startFilePos' => 2834,
                        'endTokenPos' => 303,
                        'endFilePos' => 2835,
                    ],
                ],
                'docComment' => '/**
 * The route group attribute stack.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 122,
                'endLine' => 122,
                'startColumn' => 5,
                'endColumn' => 31,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'implicitBindingCallback' => [
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'name' => 'implicitBindingCallback',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The registered custom implicit binding callback.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 129,
                'endLine' => 129,
                'startColumn' => 5,
                'endColumn' => 39,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'verbs' => [
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'name' => 'verbs',
                'modifiers' => 17,
                'type' => null,
                'default' => [
                    'code' => '[\'GET\', \'HEAD\', \'POST\', \'PUT\', \'PATCH\', \'DELETE\', \'OPTIONS\']',
                    'attributes' => [
                        'startLine' => 136,
                        'endLine' => 136,
                        'startTokenPos' => 323,
                        'startFilePos' => 3097,
                        'endTokenPos' => 343,
                        'endFilePos' => 3156,
                    ],
                ],
                'docComment' => '/**
 * All of the verbs supported by the router.
 *
 * @var string[]
 */',
                'attributes' => [
                ],
                'startLine' => 136,
                'endLine' => 136,
                'startColumn' => 5,
                'endColumn' => 88,
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
                    'events' => [
                        'name' => 'events',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 144,
                        'endLine' => 144,
                        'startColumn' => 33,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'container' => [
                        'name' => 'container',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 144,
                                'endLine' => 144,
                                'startTokenPos' => 366,
                                'startFilePos' => 3424,
                                'endTokenPos' => 366,
                                'endFilePos' => 3427,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Illuminate\\Container\\Container',
                                            'isIdentifier' => false,
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
                        'startLine' => 144,
                        'endLine' => 144,
                        'startColumn' => 53,
                        'endColumn' => 80,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new Router instance.
 *
 * @param  \\Illuminate\\Contracts\\Events\\Dispatcher  $events
 * @param  \\Illuminate\\Container\\Container|null  $container
 */',
                'startLine' => 144,
                'endLine' => 149,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'get' => [
                'name' => 'get',
                'parameters' => [
                    'uri' => [
                        'name' => 'uri',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 158,
                        'endLine' => 158,
                        'startColumn' => 25,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'action' => [
                        'name' => 'action',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 158,
                                'endLine' => 158,
                                'startTokenPos' => 424,
                                'startFilePos' => 3809,
                                'endTokenPos' => 424,
                                'endFilePos' => 3812,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 158,
                        'endLine' => 158,
                        'startColumn' => 31,
                        'endColumn' => 44,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a new GET route with the router.
 *
 * @param  string  $uri
 * @param  array|string|callable|null  $action
 * @return \\Illuminate\\Routing\\Route
 */',
                'startLine' => 158,
                'endLine' => 161,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'post' => [
                'name' => 'post',
                'parameters' => [
                    'uri' => [
                        'name' => 'uri',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 170,
                        'endLine' => 170,
                        'startColumn' => 26,
                        'endColumn' => 29,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'action' => [
                        'name' => 'action',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 170,
                                'endLine' => 170,
                                'startTokenPos' => 467,
                                'startFilePos' => 4126,
                                'endTokenPos' => 467,
                                'endFilePos' => 4129,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 170,
                        'endLine' => 170,
                        'startColumn' => 32,
                        'endColumn' => 45,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a new POST route with the router.
 *
 * @param  string  $uri
 * @param  array|string|callable|null  $action
 * @return \\Illuminate\\Routing\\Route
 */',
                'startLine' => 170,
                'endLine' => 173,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'put' => [
                'name' => 'put',
                'parameters' => [
                    'uri' => [
                        'name' => 'uri',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 182,
                        'endLine' => 182,
                        'startColumn' => 25,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'action' => [
                        'name' => 'action',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 182,
                                'endLine' => 182,
                                'startTokenPos' => 505,
                                'startFilePos' => 4432,
                                'endTokenPos' => 505,
                                'endFilePos' => 4435,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 182,
                        'endLine' => 182,
                        'startColumn' => 31,
                        'endColumn' => 44,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a new PUT route with the router.
 *
 * @param  string  $uri
 * @param  array|string|callable|null  $action
 * @return \\Illuminate\\Routing\\Route
 */',
                'startLine' => 182,
                'endLine' => 185,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'patch' => [
                'name' => 'patch',
                'parameters' => [
                    'uri' => [
                        'name' => 'uri',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 194,
                        'endLine' => 194,
                        'startColumn' => 27,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'action' => [
                        'name' => 'action',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 194,
                                'endLine' => 194,
                                'startTokenPos' => 543,
                                'startFilePos' => 4741,
                                'endTokenPos' => 543,
                                'endFilePos' => 4744,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 194,
                        'endLine' => 194,
                        'startColumn' => 33,
                        'endColumn' => 46,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a new PATCH route with the router.
 *
 * @param  string  $uri
 * @param  array|string|callable|null  $action
 * @return \\Illuminate\\Routing\\Route
 */',
                'startLine' => 194,
                'endLine' => 197,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'delete' => [
                'name' => 'delete',
                'parameters' => [
                    'uri' => [
                        'name' => 'uri',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 206,
                        'endLine' => 206,
                        'startColumn' => 28,
                        'endColumn' => 31,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'action' => [
                        'name' => 'action',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 206,
                                'endLine' => 206,
                                'startTokenPos' => 581,
                                'startFilePos' => 5054,
                                'endTokenPos' => 581,
                                'endFilePos' => 5057,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 206,
                        'endLine' => 206,
                        'startColumn' => 34,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a new DELETE route with the router.
 *
 * @param  string  $uri
 * @param  array|string|callable|null  $action
 * @return \\Illuminate\\Routing\\Route
 */',
                'startLine' => 206,
                'endLine' => 209,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'options' => [
                'name' => 'options',
                'parameters' => [
                    'uri' => [
                        'name' => 'uri',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 218,
                        'endLine' => 218,
                        'startColumn' => 29,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'action' => [
                        'name' => 'action',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 218,
                                'endLine' => 218,
                                'startTokenPos' => 619,
                                'startFilePos' => 5370,
                                'endTokenPos' => 619,
                                'endFilePos' => 5373,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 218,
                        'endLine' => 218,
                        'startColumn' => 35,
                        'endColumn' => 48,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a new OPTIONS route with the router.
 *
 * @param  string  $uri
 * @param  array|string|callable|null  $action
 * @return \\Illuminate\\Routing\\Route
 */',
                'startLine' => 218,
                'endLine' => 221,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'any' => [
                'name' => 'any',
                'parameters' => [
                    'uri' => [
                        'name' => 'uri',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 230,
                        'endLine' => 230,
                        'startColumn' => 25,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'action' => [
                        'name' => 'action',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 230,
                                'endLine' => 230,
                                'startTokenPos' => 657,
                                'startFilePos' => 5683,
                                'endTokenPos' => 657,
                                'endFilePos' => 5686,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 230,
                        'endLine' => 230,
                        'startColumn' => 31,
                        'endColumn' => 44,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a new route responding to all verbs.
 *
 * @param  string  $uri
 * @param  array|string|callable|null  $action
 * @return \\Illuminate\\Routing\\Route
 */',
                'startLine' => 230,
                'endLine' => 233,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'fallback' => [
                'name' => 'fallback',
                'parameters' => [
                    'action' => [
                        'name' => 'action',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 241,
                        'endLine' => 241,
                        'startColumn' => 30,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a new fallback route with the router.
 *
 * @param  array|string|callable|null  $action
 * @return \\Illuminate\\Routing\\Route
 */',
                'startLine' => 241,
                'endLine' => 248,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'redirect' => [
                'name' => 'redirect',
                'parameters' => [
                    'uri' => [
                        'name' => 'uri',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 258,
                        'endLine' => 258,
                        'startColumn' => 30,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'destination' => [
                        'name' => 'destination',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 258,
                        'endLine' => 258,
                        'startColumn' => 36,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'status' => [
                        'name' => 'status',
                        'default' => [
                            'code' => '302',
                            'attributes' => [
                                'startLine' => 258,
                                'endLine' => 258,
                                'startTokenPos' => 758,
                                'startFilePos' => 6424,
                                'endTokenPos' => 758,
                                'endFilePos' => 6426,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 258,
                        'endLine' => 258,
                        'startColumn' => 50,
                        'endColumn' => 62,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a redirect from one URI to another.
 *
 * @param  string  $uri
 * @param  string  $destination
 * @param  int  $status
 * @return \\Illuminate\\Routing\\Route
 */',
                'startLine' => 258,
                'endLine' => 263,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'permanentRedirect' => [
                'name' => 'permanentRedirect',
                'parameters' => [
                    'uri' => [
                        'name' => 'uri',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 272,
                        'endLine' => 272,
                        'startColumn' => 39,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'destination' => [
                        'name' => 'destination',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 272,
                        'endLine' => 272,
                        'startColumn' => 45,
                        'endColumn' => 56,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a permanent redirect from one URI to another.
 *
 * @param  string  $uri
 * @param  string  $destination
 * @return \\Illuminate\\Routing\\Route
 */',
                'startLine' => 272,
                'endLine' => 275,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'view' => [
                'name' => 'view',
                'parameters' => [
                    'uri' => [
                        'name' => 'uri',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 287,
                        'endLine' => 287,
                        'startColumn' => 26,
                        'endColumn' => 29,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'view' => [
                        'name' => 'view',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 287,
                        'endLine' => 287,
                        'startColumn' => 32,
                        'endColumn' => 36,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'data' => [
                        'name' => 'data',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 287,
                                'endLine' => 287,
                                'startTokenPos' => 848,
                                'startFilePos' => 7236,
                                'endTokenPos' => 849,
                                'endFilePos' => 7237,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 287,
                        'endLine' => 287,
                        'startColumn' => 39,
                        'endColumn' => 48,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'status' => [
                        'name' => 'status',
                        'default' => [
                            'code' => '200',
                            'attributes' => [
                                'startLine' => 287,
                                'endLine' => 287,
                                'startTokenPos' => 856,
                                'startFilePos' => 7250,
                                'endTokenPos' => 856,
                                'endFilePos' => 7252,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 287,
                        'endLine' => 287,
                        'startColumn' => 51,
                        'endColumn' => 63,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'headers' => [
                        'name' => 'headers',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 287,
                                'endLine' => 287,
                                'startTokenPos' => 865,
                                'startFilePos' => 7272,
                                'endTokenPos' => 866,
                                'endFilePos' => 7273,
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
                        'startLine' => 287,
                        'endLine' => 287,
                        'startColumn' => 66,
                        'endColumn' => 84,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a new route that returns a view.
 *
 * @param  string  $uri
 * @param  string  $view
 * @param  array  $data
 * @param  int|array  $status
 * @param  array  $headers
 * @return \\Illuminate\\Routing\\Route
 */',
                'startLine' => 287,
                'endLine' => 296,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'match' => [
                'name' => 'match',
                'parameters' => [
                    'methods' => [
                        'name' => 'methods',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 306,
                        'endLine' => 306,
                        'startColumn' => 27,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'uri' => [
                        'name' => 'uri',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 306,
                        'endLine' => 306,
                        'startColumn' => 37,
                        'endColumn' => 40,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'action' => [
                        'name' => 'action',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 306,
                                'endLine' => 306,
                                'startTokenPos' => 970,
                                'startFilePos' => 7903,
                                'endTokenPos' => 970,
                                'endFilePos' => 7906,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 306,
                        'endLine' => 306,
                        'startColumn' => 43,
                        'endColumn' => 56,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a new route with the given verbs.
 *
 * @param  array|string  $methods
 * @param  string  $uri
 * @param  array|string|callable|null  $action
 * @return \\Illuminate\\Routing\\Route
 */',
                'startLine' => 306,
                'endLine' => 309,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'resources' => [
                'name' => 'resources',
                'parameters' => [
                    'resources' => [
                        'name' => 'resources',
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
                        ],
                        'startLine' => 318,
                        'endLine' => 318,
                        'startColumn' => 31,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 318,
                                'endLine' => 318,
                                'startTokenPos' => 1023,
                                'startFilePos' => 8237,
                                'endTokenPos' => 1024,
                                'endFilePos' => 8238,
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
                        'startLine' => 318,
                        'endLine' => 318,
                        'startColumn' => 49,
                        'endColumn' => 67,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register an array of resource controllers.
 *
 * @param  array  $resources
 * @param  array  $options
 * @return void
 */',
                'startLine' => 318,
                'endLine' => 323,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'softDeletableResources' => [
                'name' => 'softDeletableResources',
                'parameters' => [
                    'resources' => [
                        'name' => 'resources',
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
                        ],
                        'startLine' => 332,
                        'endLine' => 332,
                        'startColumn' => 44,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 332,
                                'endLine' => 332,
                                'startTokenPos' => 1082,
                                'startFilePos' => 8638,
                                'endTokenPos' => 1083,
                                'endFilePos' => 8639,
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
                        'startLine' => 332,
                        'endLine' => 332,
                        'startColumn' => 62,
                        'endColumn' => 80,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register an array of resource controllers that can be soft deleted.
 *
 * @param  array  $resources
 * @param  array  $options
 * @return void
 */',
                'startLine' => 332,
                'endLine' => 337,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'resource' => [
                'name' => 'resource',
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
                        'startLine' => 347,
                        'endLine' => 347,
                        'startColumn' => 30,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'controller' => [
                        'name' => 'controller',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 347,
                        'endLine' => 347,
                        'startColumn' => 37,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 347,
                                'endLine' => 347,
                                'startTokenPos' => 1146,
                                'startFilePos' => 9082,
                                'endTokenPos' => 1147,
                                'endFilePos' => 9083,
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
                        'startLine' => 347,
                        'endLine' => 347,
                        'startColumn' => 50,
                        'endColumn' => 68,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Route a resource to a controller.
 *
 * @param  string  $name
 * @param  string  $controller
 * @param  array  $options
 * @return \\Illuminate\\Routing\\PendingResourceRegistration
 */',
                'startLine' => 347,
                'endLine' => 358,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'apiResources' => [
                'name' => 'apiResources',
                'parameters' => [
                    'resources' => [
                        'name' => 'resources',
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
                        ],
                        'startLine' => 367,
                        'endLine' => 367,
                        'startColumn' => 34,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 367,
                                'endLine' => 367,
                                'startTokenPos' => 1253,
                                'startFilePos' => 9683,
                                'endTokenPos' => 1254,
                                'endFilePos' => 9684,
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
                        'startLine' => 367,
                        'endLine' => 367,
                        'startColumn' => 52,
                        'endColumn' => 70,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register an array of API resource controllers.
 *
 * @param  array  $resources
 * @param  array  $options
 * @return void
 */',
                'startLine' => 367,
                'endLine' => 372,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'apiResource' => [
                'name' => 'apiResource',
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
                        'startLine' => 382,
                        'endLine' => 382,
                        'startColumn' => 33,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'controller' => [
                        'name' => 'controller',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 382,
                        'endLine' => 382,
                        'startColumn' => 40,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 382,
                                'endLine' => 382,
                                'startTokenPos' => 1313,
                                'startFilePos' => 10123,
                                'endTokenPos' => 1314,
                                'endFilePos' => 10124,
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
                        'startLine' => 382,
                        'endLine' => 382,
                        'startColumn' => 53,
                        'endColumn' => 71,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Route an API resource to a controller.
 *
 * @param  string  $name
 * @param  string  $controller
 * @param  array  $options
 * @return \\Illuminate\\Routing\\PendingResourceRegistration
 */',
                'startLine' => 382,
                'endLine' => 393,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'singletons' => [
                'name' => 'singletons',
                'parameters' => [
                    'singletons' => [
                        'name' => 'singletons',
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
                        ],
                        'startLine' => 402,
                        'endLine' => 402,
                        'startColumn' => 32,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 402,
                                'endLine' => 402,
                                'startTokenPos' => 1426,
                                'startFilePos' => 10677,
                                'endTokenPos' => 1427,
                                'endFilePos' => 10678,
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
                        'startLine' => 402,
                        'endLine' => 402,
                        'startColumn' => 51,
                        'endColumn' => 69,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register an array of singleton resource controllers.
 *
 * @param  array  $singletons
 * @param  array  $options
 * @return void
 */',
                'startLine' => 402,
                'endLine' => 407,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'singleton' => [
                'name' => 'singleton',
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
                        'startLine' => 417,
                        'endLine' => 417,
                        'startColumn' => 31,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'controller' => [
                        'name' => 'controller',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 417,
                        'endLine' => 417,
                        'startColumn' => 38,
                        'endColumn' => 48,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 417,
                                'endLine' => 417,
                                'startTokenPos' => 1486,
                                'startFilePos' => 11128,
                                'endTokenPos' => 1487,
                                'endFilePos' => 11129,
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
                        'startLine' => 417,
                        'endLine' => 417,
                        'startColumn' => 51,
                        'endColumn' => 69,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Route a singleton resource to a controller.
 *
 * @param  string  $name
 * @param  string  $controller
 * @param  array  $options
 * @return \\Illuminate\\Routing\\PendingSingletonResourceRegistration
 */',
                'startLine' => 417,
                'endLine' => 428,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'apiSingletons' => [
                'name' => 'apiSingletons',
                'parameters' => [
                    'singletons' => [
                        'name' => 'singletons',
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
                        ],
                        'startLine' => 437,
                        'endLine' => 437,
                        'startColumn' => 35,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 437,
                                'endLine' => 437,
                                'startTokenPos' => 1593,
                                'startFilePos' => 11751,
                                'endTokenPos' => 1594,
                                'endFilePos' => 11752,
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
                        'startLine' => 437,
                        'endLine' => 437,
                        'startColumn' => 54,
                        'endColumn' => 72,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register an array of API singleton resource controllers.
 *
 * @param  array  $singletons
 * @param  array  $options
 * @return void
 */',
                'startLine' => 437,
                'endLine' => 442,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'apiSingleton' => [
                'name' => 'apiSingleton',
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
                        'startLine' => 452,
                        'endLine' => 452,
                        'startColumn' => 34,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'controller' => [
                        'name' => 'controller',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 452,
                        'endLine' => 452,
                        'startColumn' => 41,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 452,
                                'endLine' => 452,
                                'startTokenPos' => 1653,
                                'startFilePos' => 12213,
                                'endTokenPos' => 1654,
                                'endFilePos' => 12214,
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
                        'startLine' => 452,
                        'endLine' => 452,
                        'startColumn' => 54,
                        'endColumn' => 72,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Route an API singleton resource to a controller.
 *
 * @param  string  $name
 * @param  string  $controller
 * @param  array  $options
 * @return \\Illuminate\\Routing\\PendingSingletonResourceRegistration
 */',
                'startLine' => 452,
                'endLine' => 463,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'group' => [
                'name' => 'group',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
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
                        ],
                        'startLine' => 472,
                        'endLine' => 472,
                        'startColumn' => 27,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'routes' => [
                        'name' => 'routes',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 472,
                        'endLine' => 472,
                        'startColumn' => 46,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a route group with shared attributes.
 *
 * @param  array  $attributes
 * @param  \\Closure|array|string  $routes
 * @return $this
 */',
                'startLine' => 472,
                'endLine' => 486,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'updateGroupStack' => [
                'name' => 'updateGroupStack',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
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
                        ],
                        'startLine' => 494,
                        'endLine' => 494,
                        'startColumn' => 41,
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
 * Update the group stack with the given attributes.
 *
 * @param  array  $attributes
 * @return void
 */',
                'startLine' => 494,
                'endLine' => 501,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'mergeWithLastGroup' => [
                'name' => 'mergeWithLastGroup',
                'parameters' => [
                    'new' => [
                        'name' => 'new',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 510,
                        'endLine' => 510,
                        'startColumn' => 40,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'prependExistingPrefix' => [
                        'name' => 'prependExistingPrefix',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 510,
                                'endLine' => 510,
                                'startTokenPos' => 1887,
                                'startFilePos' => 13854,
                                'endTokenPos' => 1887,
                                'endFilePos' => 13857,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 510,
                        'endLine' => 510,
                        'startColumn' => 46,
                        'endColumn' => 74,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Merge the given array with the last group stack.
 *
 * @param  array  $new
 * @param  bool  $prependExistingPrefix
 * @return array
 */',
                'startLine' => 510,
                'endLine' => 513,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'loadRoutes' => [
                'name' => 'loadRoutes',
                'parameters' => [
                    'routes' => [
                        'name' => 'routes',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 521,
                        'endLine' => 521,
                        'startColumn' => 35,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Load the provided routes.
 *
 * @param  \\Closure|string  $routes
 * @return void
 */',
                'startLine' => 521,
                'endLine' => 528,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'getLastGroupPrefix' => [
                'name' => 'getLastGroupPrefix',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the prefix from the last group on the stack.
 *
 * @return string
 */',
                'startLine' => 535,
                'endLine' => 544,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'addRoute' => [
                'name' => 'addRoute',
                'parameters' => [
                    'methods' => [
                        'name' => 'methods',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 554,
                        'endLine' => 554,
                        'startColumn' => 30,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'uri' => [
                        'name' => 'uri',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 554,
                        'endLine' => 554,
                        'startColumn' => 40,
                        'endColumn' => 43,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'action' => [
                        'name' => 'action',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 554,
                        'endLine' => 554,
                        'startColumn' => 46,
                        'endColumn' => 52,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a route to the underlying route collection.
 *
 * @param  array|string  $methods
 * @param  string  $uri
 * @param  array|string|callable|null  $action
 * @return \\Illuminate\\Routing\\Route
 */',
                'startLine' => 554,
                'endLine' => 557,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'createRoute' => [
                'name' => 'createRoute',
                'parameters' => [
                    'methods' => [
                        'name' => 'methods',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 567,
                        'endLine' => 567,
                        'startColumn' => 36,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'uri' => [
                        'name' => 'uri',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 567,
                        'endLine' => 567,
                        'startColumn' => 46,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'action' => [
                        'name' => 'action',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 567,
                        'endLine' => 567,
                        'startColumn' => 52,
                        'endColumn' => 58,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new route instance.
 *
 * @param  array|string  $methods
 * @param  string  $uri
 * @param  mixed  $action
 * @return \\Illuminate\\Routing\\Route
 */',
                'startLine' => 567,
                'endLine' => 590,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'actionReferencesController' => [
                'name' => 'actionReferencesController',
                'parameters' => [
                    'action' => [
                        'name' => 'action',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 598,
                        'endLine' => 598,
                        'startColumn' => 51,
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
 * Determine if the action is routing to a controller.
 *
 * @param  mixed  $action
 * @return bool
 */',
                'startLine' => 598,
                'endLine' => 605,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'convertToControllerAction' => [
                'name' => 'convertToControllerAction',
                'parameters' => [
                    'action' => [
                        'name' => 'action',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 613,
                        'endLine' => 613,
                        'startColumn' => 50,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a controller based route action to the action array.
 *
 * @param  array|string  $action
 * @return array
 */',
                'startLine' => 613,
                'endLine' => 633,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'prependGroupNamespace' => [
                'name' => 'prependGroupNamespace',
                'parameters' => [
                    'class' => [
                        'name' => 'class',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 641,
                        'endLine' => 641,
                        'startColumn' => 46,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prepend the last group namespace onto the use clause.
 *
 * @param  string  $class
 * @return string
 */',
                'startLine' => 641,
                'endLine' => 648,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'prependGroupController' => [
                'name' => 'prependGroupController',
                'parameters' => [
                    'class' => [
                        'name' => 'class',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 656,
                        'endLine' => 656,
                        'startColumn' => 47,
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
 * Prepend the last group controller onto the use clause.
 *
 * @param  string  $class
 * @return string
 */',
                'startLine' => 656,
                'endLine' => 673,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'newRoute' => [
                'name' => 'newRoute',
                'parameters' => [
                    'methods' => [
                        'name' => 'methods',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 683,
                        'endLine' => 683,
                        'startColumn' => 30,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'uri' => [
                        'name' => 'uri',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 683,
                        'endLine' => 683,
                        'startColumn' => 40,
                        'endColumn' => 43,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'action' => [
                        'name' => 'action',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 683,
                        'endLine' => 683,
                        'startColumn' => 46,
                        'endColumn' => 52,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new Route object.
 *
 * @param  array|string  $methods
 * @param  string  $uri
 * @param  mixed  $action
 * @return \\Illuminate\\Routing\\Route
 */',
                'startLine' => 683,
                'endLine' => 688,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'prefix' => [
                'name' => 'prefix',
                'parameters' => [
                    'uri' => [
                        'name' => 'uri',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 696,
                        'endLine' => 696,
                        'startColumn' => 31,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prefix the given URI with the last prefix.
 *
 * @param  string  $uri
 * @return string
 */',
                'startLine' => 696,
                'endLine' => 699,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'addWhereClausesToRoute' => [
                'name' => 'addWhereClausesToRoute',
                'parameters' => [
                    'route' => [
                        'name' => 'route',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 707,
                        'endLine' => 707,
                        'startColumn' => 47,
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
 * Add the necessary where clauses to the route based on its initial registration.
 *
 * @param  \\Illuminate\\Routing\\Route  $route
 * @return \\Illuminate\\Routing\\Route
 */',
                'startLine' => 707,
                'endLine' => 714,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'mergeGroupAttributesIntoRoute' => [
                'name' => 'mergeGroupAttributesIntoRoute',
                'parameters' => [
                    'route' => [
                        'name' => 'route',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 722,
                        'endLine' => 722,
                        'startColumn' => 54,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Merge the group stack with the controller action.
 *
 * @param  \\Illuminate\\Routing\\Route  $route
 * @return void
 */',
                'startLine' => 722,
                'endLine' => 728,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'respondWithRoute' => [
                'name' => 'respondWithRoute',
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
                        'startLine' => 736,
                        'endLine' => 736,
                        'startColumn' => 38,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Return the response returned by the given route.
 *
 * @param  string  $name
 * @return \\Symfony\\Component\\HttpFoundation\\Response
 */',
                'startLine' => 736,
                'endLine' => 741,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'dispatch' => [
                'name' => 'dispatch',
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
                        'startLine' => 749,
                        'endLine' => 749,
                        'startColumn' => 30,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dispatch the request to the application.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return \\Symfony\\Component\\HttpFoundation\\Response
 */',
                'startLine' => 749,
                'endLine' => 754,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'dispatchToRoute' => [
                'name' => 'dispatchToRoute',
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
                        'startLine' => 762,
                        'endLine' => 762,
                        'startColumn' => 37,
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
 * Dispatch the request to a route and return the response.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return \\Symfony\\Component\\HttpFoundation\\Response
 */',
                'startLine' => 762,
                'endLine' => 765,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'findRoute' => [
                'name' => 'findRoute',
                'parameters' => [
                    'request' => [
                        'name' => 'request',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 773,
                        'endLine' => 773,
                        'startColumn' => 34,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Find the route matching a given request.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return \\Illuminate\\Routing\\Route
 */',
                'startLine' => 773,
                'endLine' => 784,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'runRoute' => [
                'name' => 'runRoute',
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
                        'startLine' => 793,
                        'endLine' => 793,
                        'startColumn' => 33,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'route' => [
                        'name' => 'route',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Routing\\Route',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 793,
                        'endLine' => 793,
                        'startColumn' => 51,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Return the response for the given route.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  \\Illuminate\\Routing\\Route  $route
 * @return \\Symfony\\Component\\HttpFoundation\\Response
 */',
                'startLine' => 793,
                'endLine' => 802,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'runRouteWithinStack' => [
                'name' => 'runRouteWithinStack',
                'parameters' => [
                    'route' => [
                        'name' => 'route',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Routing\\Route',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 811,
                        'endLine' => 811,
                        'startColumn' => 44,
                        'endColumn' => 55,
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
                        'startLine' => 811,
                        'endLine' => 811,
                        'startColumn' => 58,
                        'endColumn' => 73,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run the given route within a Stack "onion" instance.
 *
 * @param  \\Illuminate\\Routing\\Route  $route
 * @param  \\Illuminate\\Http\\Request  $request
 * @return mixed
 */',
                'startLine' => 811,
                'endLine' => 824,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'gatherRouteMiddleware' => [
                'name' => 'gatherRouteMiddleware',
                'parameters' => [
                    'route' => [
                        'name' => 'route',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Routing\\Route',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 832,
                        'endLine' => 832,
                        'startColumn' => 43,
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
 * Gather the middleware for the given route with resolved class names.
 *
 * @param  \\Illuminate\\Routing\\Route  $route
 * @return array
 */',
                'startLine' => 832,
                'endLine' => 835,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'resolveMiddleware' => [
                'name' => 'resolveMiddleware',
                'parameters' => [
                    'middleware' => [
                        'name' => 'middleware',
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
                        ],
                        'startLine' => 844,
                        'endLine' => 844,
                        'startColumn' => 39,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'excluded' => [
                        'name' => 'excluded',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 844,
                                'endLine' => 844,
                                'startTokenPos' => 3219,
                                'startFilePos' => 23501,
                                'endTokenPos' => 3220,
                                'endFilePos' => 23502,
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
                        'startLine' => 844,
                        'endLine' => 844,
                        'startColumn' => 58,
                        'endColumn' => 77,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Resolve a flat array of middleware classes from the provided array.
 *
 * @param  array  $middleware
 * @param  array  $excluded
 * @return array
 */',
                'startLine' => 844,
                'endLine' => 882,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'sortMiddleware' => [
                'name' => 'sortMiddleware',
                'parameters' => [
                    'middlewares' => [
                        'name' => 'middlewares',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Support\\Collection',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 890,
                        'endLine' => 890,
                        'startColumn' => 39,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Sort the given middleware by priority.
 *
 * @param  \\Illuminate\\Support\\Collection  $middlewares
 * @return array
 */',
                'startLine' => 890,
                'endLine' => 893,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'prepareResponse' => [
                'name' => 'prepareResponse',
                'parameters' => [
                    'request' => [
                        'name' => 'request',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 902,
                        'endLine' => 902,
                        'startColumn' => 37,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'response' => [
                        'name' => 'response',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 902,
                        'endLine' => 902,
                        'startColumn' => 47,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a response instance from the given value.
 *
 * @param  \\Symfony\\Component\\HttpFoundation\\Request  $request
 * @param  mixed  $response
 * @return \\Symfony\\Component\\HttpFoundation\\Response
 */',
                'startLine' => 902,
                'endLine' => 909,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'toResponse' => [
                'name' => 'toResponse',
                'parameters' => [
                    'request' => [
                        'name' => 'request',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 918,
                        'endLine' => 918,
                        'startColumn' => 39,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'response' => [
                        'name' => 'response',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 918,
                        'endLine' => 918,
                        'startColumn' => 49,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Static version of prepareResponse.
 *
 * @param  \\Symfony\\Component\\HttpFoundation\\Request  $request
 * @param  mixed  $response
 * @return \\Symfony\\Component\\HttpFoundation\\Response
 */',
                'startLine' => 918,
                'endLine' => 947,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'substituteBindings' => [
                'name' => 'substituteBindings',
                'parameters' => [
                    'route' => [
                        'name' => 'route',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 958,
                        'endLine' => 958,
                        'startColumn' => 40,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Substitute the route bindings onto the route.
 *
 * @param  \\Illuminate\\Routing\\Route  $route
 * @return \\Illuminate\\Routing\\Route
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<\\Illuminate\\Database\\Eloquent\\Model>
 * @throws \\Illuminate\\Routing\\Exceptions\\BackedEnumCaseNotFoundException
 */',
                'startLine' => 958,
                'endLine' => 967,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'substituteImplicitBindings' => [
                'name' => 'substituteImplicitBindings',
                'parameters' => [
                    'route' => [
                        'name' => 'route',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 978,
                        'endLine' => 978,
                        'startColumn' => 48,
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
 * Substitute the implicit route bindings for the given route.
 *
 * @param  \\Illuminate\\Routing\\Route  $route
 * @return void
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<\\Illuminate\\Database\\Eloquent\\Model>
 * @throws \\Illuminate\\Routing\\Exceptions\\BackedEnumCaseNotFoundException
 */',
                'startLine' => 978,
                'endLine' => 985,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'substituteImplicitBindingsUsing' => [
                'name' => 'substituteImplicitBindingsUsing',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 993,
                        'endLine' => 993,
                        'startColumn' => 53,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a callback to run after implicit bindings are substituted.
 *
 * @param  callable  $callback
 * @return $this
 */',
                'startLine' => 993,
                'endLine' => 998,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'performBinding' => [
                'name' => 'performBinding',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1010,
                        'endLine' => 1010,
                        'startColumn' => 39,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1010,
                        'endLine' => 1010,
                        'startColumn' => 45,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'route' => [
                        'name' => 'route',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1010,
                        'endLine' => 1010,
                        'startColumn' => 53,
                        'endColumn' => 58,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Call the binding callback for the given key.
 *
 * @param  string  $key
 * @param  string  $value
 * @param  \\Illuminate\\Routing\\Route  $route
 * @return mixed
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<\\Illuminate\\Database\\Eloquent\\Model>
 */',
                'startLine' => 1010,
                'endLine' => 1013,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'matched' => [
                'name' => 'matched',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1021,
                        'endLine' => 1021,
                        'startColumn' => 29,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a route matched event listener.
 *
 * @param  string|callable  $callback
 * @return void
 */',
                'startLine' => 1021,
                'endLine' => 1024,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'getMiddleware' => [
                'name' => 'getMiddleware',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get all of the defined middleware short-hand names.
 *
 * @return array
 */',
                'startLine' => 1031,
                'endLine' => 1034,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'aliasMiddleware' => [
                'name' => 'aliasMiddleware',
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
                        'startLine' => 1043,
                        'endLine' => 1043,
                        'startColumn' => 37,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'class' => [
                        'name' => 'class',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1043,
                        'endLine' => 1043,
                        'startColumn' => 44,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a short-hand name for a middleware.
 *
 * @param  string  $name
 * @param  string  $class
 * @return $this
 */',
                'startLine' => 1043,
                'endLine' => 1048,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'hasMiddlewareGroup' => [
                'name' => 'hasMiddlewareGroup',
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
                        'startLine' => 1056,
                        'endLine' => 1056,
                        'startColumn' => 40,
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
 * Check if a middlewareGroup with the given name exists.
 *
 * @param  string  $name
 * @return bool
 */',
                'startLine' => 1056,
                'endLine' => 1059,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'getMiddlewareGroups' => [
                'name' => 'getMiddlewareGroups',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get all of the defined middleware groups.
 *
 * @return array
 */',
                'startLine' => 1066,
                'endLine' => 1069,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'middlewareGroup' => [
                'name' => 'middlewareGroup',
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
                        'startLine' => 1078,
                        'endLine' => 1078,
                        'startColumn' => 37,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'middleware' => [
                        'name' => 'middleware',
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
                        ],
                        'startLine' => 1078,
                        'endLine' => 1078,
                        'startColumn' => 44,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a group of middleware.
 *
 * @param  string  $name
 * @param  array  $middleware
 * @return $this
 */',
                'startLine' => 1078,
                'endLine' => 1083,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'prependMiddlewareToGroup' => [
                'name' => 'prependMiddlewareToGroup',
                'parameters' => [
                    'group' => [
                        'name' => 'group',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1094,
                        'endLine' => 1094,
                        'startColumn' => 46,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'middleware' => [
                        'name' => 'middleware',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1094,
                        'endLine' => 1094,
                        'startColumn' => 54,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a middleware to the beginning of a middleware group.
 *
 * If the middleware is already in the group, it will not be added again.
 *
 * @param  string  $group
 * @param  string  $middleware
 * @return $this
 */',
                'startLine' => 1094,
                'endLine' => 1101,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'pushMiddlewareToGroup' => [
                'name' => 'pushMiddlewareToGroup',
                'parameters' => [
                    'group' => [
                        'name' => 'group',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1112,
                        'endLine' => 1112,
                        'startColumn' => 43,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'middleware' => [
                        'name' => 'middleware',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1112,
                        'endLine' => 1112,
                        'startColumn' => 51,
                        'endColumn' => 61,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a middleware to the end of a middleware group.
 *
 * If the middleware is already in the group, it will not be added again.
 *
 * @param  string  $group
 * @param  string  $middleware
 * @return $this
 */',
                'startLine' => 1112,
                'endLine' => 1123,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'removeMiddlewareFromGroup' => [
                'name' => 'removeMiddlewareFromGroup',
                'parameters' => [
                    'group' => [
                        'name' => 'group',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1132,
                        'endLine' => 1132,
                        'startColumn' => 47,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'middleware' => [
                        'name' => 'middleware',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1132,
                        'endLine' => 1132,
                        'startColumn' => 55,
                        'endColumn' => 65,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove the given middleware from the specified group.
 *
 * @param  string  $group
 * @param  string  $middleware
 * @return $this
 */',
                'startLine' => 1132,
                'endLine' => 1149,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'flushMiddlewareGroups' => [
                'name' => 'flushMiddlewareGroups',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Flush the router\'s middleware groups.
 *
 * @return $this
 */',
                'startLine' => 1156,
                'endLine' => 1161,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'bind' => [
                'name' => 'bind',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1170,
                        'endLine' => 1170,
                        'startColumn' => 26,
                        'endColumn' => 29,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'binder' => [
                        'name' => 'binder',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1170,
                        'endLine' => 1170,
                        'startColumn' => 32,
                        'endColumn' => 38,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a new route parameter binder.
 *
 * @param  string  $key
 * @param  string|callable  $binder
 * @return void
 */',
                'startLine' => 1170,
                'endLine' => 1175,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'model' => [
                'name' => 'model',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1185,
                        'endLine' => 1185,
                        'startColumn' => 27,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'class' => [
                        'name' => 'class',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1185,
                        'endLine' => 1185,
                        'startColumn' => 33,
                        'endColumn' => 38,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1185,
                                'endLine' => 1185,
                                'startTokenPos' => 4716,
                                'startFilePos' => 33563,
                                'endTokenPos' => 4716,
                                'endFilePos' => 33566,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
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
                        'startLine' => 1185,
                        'endLine' => 1185,
                        'startColumn' => 41,
                        'endColumn' => 65,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a model binder for a wildcard.
 *
 * @param  string  $key
 * @param  string  $class
 * @param  \\Closure|null  $callback
 * @return void
 */',
                'startLine' => 1185,
                'endLine' => 1188,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'getBindingCallback' => [
                'name' => 'getBindingCallback',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1196,
                        'endLine' => 1196,
                        'startColumn' => 40,
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
 * Get the binding callback for a given binding.
 *
 * @param  string  $key
 * @return \\Closure|null
 */',
                'startLine' => 1196,
                'endLine' => 1201,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'getPatterns' => [
                'name' => 'getPatterns',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the global "where" patterns.
 *
 * @return array
 */',
                'startLine' => 1208,
                'endLine' => 1211,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'pattern' => [
                'name' => 'pattern',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1220,
                        'endLine' => 1220,
                        'startColumn' => 29,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'pattern' => [
                        'name' => 'pattern',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1220,
                        'endLine' => 1220,
                        'startColumn' => 35,
                        'endColumn' => 42,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set a global where pattern on all routes.
 *
 * @param  string  $key
 * @param  string  $pattern
 * @return void
 */',
                'startLine' => 1220,
                'endLine' => 1223,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'patterns' => [
                'name' => 'patterns',
                'parameters' => [
                    'patterns' => [
                        'name' => 'patterns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1231,
                        'endLine' => 1231,
                        'startColumn' => 30,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set a group of global where patterns on all routes.
 *
 * @param  array  $patterns
 * @return void
 */',
                'startLine' => 1231,
                'endLine' => 1236,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'hasGroupStack' => [
                'name' => 'hasGroupStack',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the router currently has a group stack.
 *
 * @return bool
 */',
                'startLine' => 1243,
                'endLine' => 1246,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'getGroupStack' => [
                'name' => 'getGroupStack',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the current group stack for the router.
 *
 * @return array
 */',
                'startLine' => 1253,
                'endLine' => 1256,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'input' => [
                'name' => 'input',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1265,
                        'endLine' => 1265,
                        'startColumn' => 27,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1265,
                                'endLine' => 1265,
                                'startTokenPos' => 4960,
                                'startFilePos' => 35267,
                                'endTokenPos' => 4960,
                                'endFilePos' => 35270,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1265,
                        'endLine' => 1265,
                        'startColumn' => 33,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a route parameter for the current route.
 *
 * @param  string  $key
 * @param  string|null  $default
 * @return mixed
 */',
                'startLine' => 1265,
                'endLine' => 1268,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'getCurrentRequest' => [
                'name' => 'getCurrentRequest',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the request currently being dispatched.
 *
 * @return \\Illuminate\\Http\\Request
 */',
                'startLine' => 1275,
                'endLine' => 1278,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'getCurrentRoute' => [
                'name' => 'getCurrentRoute',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the currently dispatched route instance.
 *
 * @return \\Illuminate\\Routing\\Route|null
 */',
                'startLine' => 1285,
                'endLine' => 1288,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'current' => [
                'name' => 'current',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the currently dispatched route instance.
 *
 * @return \\Illuminate\\Routing\\Route|null
 */',
                'startLine' => 1295,
                'endLine' => 1298,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'has' => [
                'name' => 'has',
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
                        'startLine' => 1306,
                        'endLine' => 1306,
                        'startColumn' => 25,
                        'endColumn' => 29,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Check if a route with the given name exists.
 *
 * @param  string|array  $name
 * @return bool
 */',
                'startLine' => 1306,
                'endLine' => 1317,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'currentRouteName' => [
                'name' => 'currentRouteName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the current route name.
 *
 * @return string|null
 */',
                'startLine' => 1324,
                'endLine' => 1327,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'is' => [
                'name' => 'is',
                'parameters' => [
                    'patterns' => [
                        'name' => 'patterns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1335,
                        'endLine' => 1335,
                        'startColumn' => 24,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Alias for the "currentRouteNamed" method.
 *
 * @param  mixed  ...$patterns
 * @return bool
 */',
                'startLine' => 1335,
                'endLine' => 1338,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'currentRouteNamed' => [
                'name' => 'currentRouteNamed',
                'parameters' => [
                    'patterns' => [
                        'name' => 'patterns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1346,
                        'endLine' => 1346,
                        'startColumn' => 39,
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
 * Determine if the current route matches a pattern.
 *
 * @param  mixed  ...$patterns
 * @return bool
 */',
                'startLine' => 1346,
                'endLine' => 1349,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'currentRouteAction' => [
                'name' => 'currentRouteAction',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the current route action.
 *
 * @return string|null
 */',
                'startLine' => 1356,
                'endLine' => 1361,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'uses' => [
                'name' => 'uses',
                'parameters' => [
                    'patterns' => [
                        'name' => 'patterns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1369,
                        'endLine' => 1369,
                        'startColumn' => 26,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Alias for the "currentRouteUses" method.
 *
 * @param  array|string  ...$patterns
 * @return bool
 */',
                'startLine' => 1369,
                'endLine' => 1378,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'currentRouteUses' => [
                'name' => 'currentRouteUses',
                'parameters' => [
                    'action' => [
                        'name' => 'action',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1386,
                        'endLine' => 1386,
                        'startColumn' => 38,
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
 * Determine if the current route action matches a given action.
 *
 * @param  string  $action
 * @return bool
 */',
                'startLine' => 1386,
                'endLine' => 1389,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'singularResourceParameters' => [
                'name' => 'singularResourceParameters',
                'parameters' => [
                    'singular' => [
                        'name' => 'singular',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 1397,
                                'endLine' => 1397,
                                'startTokenPos' => 5382,
                                'startFilePos' => 38148,
                                'endTokenPos' => 5382,
                                'endFilePos' => 38151,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1397,
                        'endLine' => 1397,
                        'startColumn' => 48,
                        'endColumn' => 63,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the unmapped global resource parameters to singular.
 *
 * @param  bool  $singular
 * @return void
 */',
                'startLine' => 1397,
                'endLine' => 1400,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'resourceParameters' => [
                'name' => 'resourceParameters',
                'parameters' => [
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1408,
                                'endLine' => 1408,
                                'startTokenPos' => 5411,
                                'startFilePos' => 38411,
                                'endTokenPos' => 5412,
                                'endFilePos' => 38412,
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
                        'startLine' => 1408,
                        'endLine' => 1408,
                        'startColumn' => 40,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the global resource parameter mapping.
 *
 * @param  array  $parameters
 * @return void
 */',
                'startLine' => 1408,
                'endLine' => 1411,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'resourceVerbs' => [
                'name' => 'resourceVerbs',
                'parameters' => [
                    'verbs' => [
                        'name' => 'verbs',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1419,
                                'endLine' => 1419,
                                'startTokenPos' => 5441,
                                'startFilePos' => 38665,
                                'endTokenPos' => 5442,
                                'endFilePos' => 38666,
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
                        'startLine' => 1419,
                        'endLine' => 1419,
                        'startColumn' => 35,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get or set the verbs used in the resource URIs.
 *
 * @param  array  $verbs
 * @return array|null
 */',
                'startLine' => 1419,
                'endLine' => 1422,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'getRoutes' => [
                'name' => 'getRoutes',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the underlying route collection.
 *
 * @return \\Illuminate\\Routing\\RouteCollectionInterface
 */',
                'startLine' => 1429,
                'endLine' => 1432,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'setRoutes' => [
                'name' => 'setRoutes',
                'parameters' => [
                    'routes' => [
                        'name' => 'routes',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Routing\\RouteCollection',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1440,
                        'endLine' => 1440,
                        'startColumn' => 31,
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
 * Set the route collection instance.
 *
 * @param  \\Illuminate\\Routing\\RouteCollection  $routes
 * @return void
 */',
                'startLine' => 1440,
                'endLine' => 1449,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'setCompiledRoutes' => [
                'name' => 'setCompiledRoutes',
                'parameters' => [
                    'routes' => [
                        'name' => 'routes',
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
                        ],
                        'startLine' => 1457,
                        'endLine' => 1457,
                        'startColumn' => 39,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the compiled route collection instance.
 *
 * @param  array  $routes
 * @return void
 */',
                'startLine' => 1457,
                'endLine' => 1464,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
            'uniqueMiddleware' => [
                'name' => 'uniqueMiddleware',
                'parameters' => [
                    'middleware' => [
                        'name' => 'middleware',
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
                        ],
                        'startLine' => 1472,
                        'endLine' => 1472,
                        'startColumn' => 45,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove any duplicate middleware from the given array.
 *
 * @param  array  $middleware
 * @return array
 */',
                'startLine' => 1472,
                'endLine' => 1487,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
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
                                'name' => 'Illuminate\\Container\\Container',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1495,
                        'endLine' => 1495,
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
 * Set the container instance used by the router.
 *
 * @param  \\Illuminate\\Container\\Container  $container
 * @return $this
 */',
                'startLine' => 1495,
                'endLine' => 1500,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
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
                        'startLine' => 1509,
                        'endLine' => 1509,
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
                        'startLine' => 1509,
                        'endLine' => 1509,
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
 * Dynamically handle calls into the router instance.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */',
                'startLine' => 1509,
                'endLine' => 1528,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Router',
                'implementingClassName' => 'Illuminate\\Routing\\Router',
                'currentClassName' => 'Illuminate\\Routing\\Router',
                'aliasName' => null,
            ],
        ],
        'traitsData' => [
            'aliases' => [
                'Illuminate\\Support\\Traits\\Macroable' => [
                    0 => [
                        'alias' => 'macroCall',
                        'method' => '__call',
                        'hash' => 'illuminate\\support\\traits\\macroable::__call',
                    ],
                ],
            ],
            'modifiers' => [
            ],
            'precedences' => [
            ],
            'hashes' => [
                'illuminate\\support\\traits\\macroable::__call' => 'Illuminate\\Support\\Traits\\Macroable::__call',
            ],
        ],
    ],
]);
