<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Routing/RouteRegistrar.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Routing\RouteRegistrar
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-0fcb2b8d3f22cfebbde8316717832ada050bdd92686196f9da7d2eedffa3b7e7-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Routing\\RouteRegistrar',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Routing/RouteRegistrar.php',
            ],
        ],
        'namespace' => 'Illuminate\\Routing',
        'name' => 'Illuminate\\Routing\\RouteRegistrar',
        'shortName' => 'RouteRegistrar',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @method \\Illuminate\\Routing\\Route any(string $uri, \\Closure|array|string|null $action = null)
 * @method \\Illuminate\\Routing\\Route delete(string $uri, \\Closure|array|string|null $action = null)
 * @method \\Illuminate\\Routing\\Route get(string $uri, \\Closure|array|string|null $action = null)
 * @method \\Illuminate\\Routing\\Route options(string $uri, \\Closure|array|string|null $action = null)
 * @method \\Illuminate\\Routing\\Route patch(string $uri, \\Closure|array|string|null $action = null)
 * @method \\Illuminate\\Routing\\Route post(string $uri, \\Closure|array|string|null $action = null)
 * @method \\Illuminate\\Routing\\Route put(string $uri, \\Closure|array|string|null $action = null)
 * @method \\Illuminate\\Routing\\RouteRegistrar as(string $value)
 * @method \\Illuminate\\Routing\\RouteRegistrar can(\\UnitEnum|string  $ability, array|string $models = [])
 * @method \\Illuminate\\Routing\\RouteRegistrar controller(string $controller)
 * @method \\Illuminate\\Routing\\RouteRegistrar domain(\\BackedEnum|string $value)
 * @method \\Illuminate\\Routing\\RouteRegistrar middleware(array|string|null $middleware)
 * @method \\Illuminate\\Routing\\RouteRegistrar missing(\\Closure $missing)
 * @method \\Illuminate\\Routing\\RouteRegistrar name(\\BackedEnum|string $value)
 * @method \\Illuminate\\Routing\\RouteRegistrar namespace(string|null $value)
 * @method \\Illuminate\\Routing\\RouteRegistrar prefix(string $prefix)
 * @method \\Illuminate\\Routing\\RouteRegistrar scopeBindings()
 * @method \\Illuminate\\Routing\\RouteRegistrar where(array $where)
 * @method \\Illuminate\\Routing\\RouteRegistrar withoutMiddleware(array|string $middleware)
 * @method \\Illuminate\\Routing\\RouteRegistrar withoutScopedBindings()
 */',
        'attributes' => [
        ],
        'startLine' => 35,
        'endLine' => 313,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Routing\\CreatesRegularExpressionRouteConstraints',
            1 => 'Illuminate\\Support\\Traits\\Macroable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'router' => [
                'declaringClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'implementingClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'name' => 'router',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The router instance.
 *
 * @var \\Illuminate\\Routing\\Router
 */',
                'attributes' => [
                ],
                'startLine' => 47,
                'endLine' => 47,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'attributes' => [
                'declaringClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'implementingClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'name' => 'attributes',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 54,
                        'endLine' => 54,
                        'startTokenPos' => 85,
                        'startFilePos' => 2284,
                        'endTokenPos' => 86,
                        'endFilePos' => 2285,
                    ],
                ],
                'docComment' => '/**
 * The attributes to pass on to the router.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 54,
                'endLine' => 54,
                'startColumn' => 5,
                'endColumn' => 31,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'passthru' => [
                'declaringClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'implementingClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'name' => 'passthru',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'get\', \'post\', \'put\', \'patch\', \'delete\', \'options\', \'any\']',
                    'attributes' => [
                        'startLine' => 61,
                        'endLine' => 63,
                        'startTokenPos' => 97,
                        'startFilePos' => 2421,
                        'endTokenPos' => 120,
                        'endFilePos' => 2494,
                    ],
                ],
                'docComment' => '/**
 * The methods to dynamically pass through to the router.
 *
 * @var string[]
 */',
                'attributes' => [
                ],
                'startLine' => 61,
                'endLine' => 63,
                'startColumn' => 5,
                'endColumn' => 6,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'allowedAttributes' => [
                'declaringClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'implementingClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'name' => 'allowedAttributes',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'as\', \'can\', \'controller\', \'domain\', \'middleware\', \'missing\', \'name\', \'namespace\', \'prefix\', \'scopeBindings\', \'where\', \'withoutMiddleware\', \'withoutScopedBindings\']',
                    'attributes' => [
                        'startLine' => 70,
                        'endLine' => 84,
                        'startTokenPos' => 131,
                        'startFilePos' => 2635,
                        'endTokenPos' => 172,
                        'endFilePos' => 2910,
                    ],
                ],
                'docComment' => '/**
 * The attributes that can be set through this class.
 *
 * @var string[]
 */',
                'attributes' => [
                ],
                'startLine' => 70,
                'endLine' => 84,
                'startColumn' => 5,
                'endColumn' => 6,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'aliases' => [
                'declaringClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'implementingClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'name' => 'aliases',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[\'name\' => \'as\', \'scopeBindings\' => \'scope_bindings\', \'withoutScopedBindings\' => \'scope_bindings\', \'withoutMiddleware\' => \'excluded_middleware\']',
                    'attributes' => [
                        'startLine' => 91,
                        'endLine' => 96,
                        'startTokenPos' => 183,
                        'startFilePos' => 3020,
                        'endTokenPos' => 213,
                        'endFilePos' => 3202,
                    ],
                ],
                'docComment' => '/**
 * The attributes that are aliased.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 91,
                'endLine' => 96,
                'startColumn' => 5,
                'endColumn' => 6,
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
                    'router' => [
                        'name' => 'router',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Routing\\Router',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 103,
                        'endLine' => 103,
                        'startColumn' => 33,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new route registrar instance.
 *
 * @param  \\Illuminate\\Routing\\Router  $router
 */',
                'startLine' => 103,
                'endLine' => 106,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'implementingClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'currentClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'aliasName' => null,
            ],
            'attribute' => [
                'name' => 'attribute',
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
                        'startLine' => 117,
                        'endLine' => 117,
                        'startColumn' => 31,
                        'endColumn' => 34,
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
                        'startLine' => 117,
                        'endLine' => 117,
                        'startColumn' => 37,
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
 * Set the value for a given attribute.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 117,
                'endLine' => 150,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'implementingClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'currentClassName' => 'Illuminate\\Routing\\RouteRegistrar',
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
                        'startLine' => 160,
                        'endLine' => 160,
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
                        'startLine' => 160,
                        'endLine' => 160,
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
                                'startLine' => 160,
                                'endLine' => 160,
                                'startTokenPos' => 526,
                                'startFilePos' => 4947,
                                'endTokenPos' => 527,
                                'endFilePos' => 4948,
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
                        'startLine' => 160,
                        'endLine' => 160,
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
                'startLine' => 160,
                'endLine' => 163,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'implementingClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'currentClassName' => 'Illuminate\\Routing\\RouteRegistrar',
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
                        'startLine' => 173,
                        'endLine' => 173,
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
                        'startLine' => 173,
                        'endLine' => 173,
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
                                'startLine' => 173,
                                'endLine' => 173,
                                'startTokenPos' => 578,
                                'startFilePos' => 5350,
                                'endTokenPos' => 579,
                                'endFilePos' => 5351,
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
                        'startLine' => 173,
                        'endLine' => 173,
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
                'startLine' => 173,
                'endLine' => 176,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'implementingClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'currentClassName' => 'Illuminate\\Routing\\RouteRegistrar',
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
                        'startLine' => 186,
                        'endLine' => 186,
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
                        'startLine' => 186,
                        'endLine' => 186,
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
                                'startLine' => 186,
                                'endLine' => 186,
                                'startTokenPos' => 630,
                                'startFilePos' => 5768,
                                'endTokenPos' => 631,
                                'endFilePos' => 5769,
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
                        'startLine' => 186,
                        'endLine' => 186,
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
                'startLine' => 186,
                'endLine' => 189,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'implementingClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'currentClassName' => 'Illuminate\\Routing\\RouteRegistrar',
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
                        'startLine' => 199,
                        'endLine' => 199,
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
                        'startLine' => 199,
                        'endLine' => 199,
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
                                'startLine' => 199,
                                'endLine' => 199,
                                'startTokenPos' => 682,
                                'startFilePos' => 6192,
                                'endTokenPos' => 683,
                                'endFilePos' => 6193,
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
                        'startLine' => 199,
                        'endLine' => 199,
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
                'startLine' => 199,
                'endLine' => 202,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'implementingClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'currentClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'aliasName' => null,
            ],
            'group' => [
                'name' => 'group',
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
                        'startLine' => 210,
                        'endLine' => 210,
                        'startColumn' => 27,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
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
 * @param  \\Closure|array|string  $callback
 * @return $this
 */',
                'startLine' => 210,
                'endLine' => 215,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'implementingClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'currentClassName' => 'Illuminate\\Routing\\RouteRegistrar',
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
                        'startLine' => 225,
                        'endLine' => 225,
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
                        'startLine' => 225,
                        'endLine' => 225,
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
                                'startLine' => 225,
                                'endLine' => 225,
                                'startTokenPos' => 767,
                                'startFilePos' => 6863,
                                'endTokenPos' => 767,
                                'endFilePos' => 6866,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 225,
                        'endLine' => 225,
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
 * @param  \\Closure|array|string|null  $action
 * @return \\Illuminate\\Routing\\Route
 */',
                'startLine' => 225,
                'endLine' => 228,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'implementingClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'currentClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'aliasName' => null,
            ],
            'registerRoute' => [
                'name' => 'registerRoute',
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
                        'startLine' => 238,
                        'endLine' => 238,
                        'startColumn' => 38,
                        'endColumn' => 44,
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
                        'startLine' => 238,
                        'endLine' => 238,
                        'startColumn' => 47,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'action' => [
                        'name' => 'action',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 238,
                                'endLine' => 238,
                                'startTokenPos' => 815,
                                'startFilePos' => 7247,
                                'endTokenPos' => 815,
                                'endFilePos' => 7250,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 238,
                        'endLine' => 238,
                        'startColumn' => 53,
                        'endColumn' => 66,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a new route with the router.
 *
 * @param  string  $method
 * @param  string  $uri
 * @param  \\Closure|array|string|null  $action
 * @return \\Illuminate\\Routing\\Route
 */',
                'startLine' => 238,
                'endLine' => 245,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'implementingClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'currentClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'aliasName' => null,
            ],
            'compileAction' => [
                'name' => 'compileAction',
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
                        'startLine' => 253,
                        'endLine' => 253,
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
 * Compile the action into an array including the attributes.
 *
 * @param  \\Closure|array|string|null  $action
 * @return array
 */',
                'startLine' => 253,
                'endLine' => 276,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'implementingClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'currentClassName' => 'Illuminate\\Routing\\RouteRegistrar',
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
                        'startLine' => 287,
                        'endLine' => 287,
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
                        'startLine' => 287,
                        'endLine' => 287,
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
 * Dynamically handle calls into the route registrar.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return \\Illuminate\\Routing\\Route|$this
 *
 * @throws \\BadMethodCallException
 */',
                'startLine' => 287,
                'endLine' => 312,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'implementingClassName' => 'Illuminate\\Routing\\RouteRegistrar',
                'currentClassName' => 'Illuminate\\Routing\\RouteRegistrar',
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
