<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Routing/Route.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Routing\Route
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-85b007eff51a1a62ebee021d989bfb741771826e6fc4e69ed66d7cc03cc1b10c-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Routing\\Route',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Routing/Route.php',
            ],
        ],
        'namespace' => 'Illuminate\\Routing',
        'name' => 'Illuminate\\Routing\\Route',
        'shortName' => 'Route',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 30,
        'endLine' => 1415,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Support\\Traits\\Conditionable',
            1 => 'Illuminate\\Routing\\CreatesRegularExpressionRouteConstraints',
            2 => 'Illuminate\\Routing\\FiltersControllerMiddleware',
            3 => 'Illuminate\\Support\\Traits\\Macroable',
            4 => 'Illuminate\\Routing\\ResolvesRouteDependencies',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'uri' => [
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'name' => 'uri',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The URI pattern the route responds to.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 39,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 16,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'methods' => [
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'name' => 'methods',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The HTTP methods the route responds to.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 46,
                'endLine' => 46,
                'startColumn' => 5,
                'endColumn' => 20,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'action' => [
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'name' => 'action',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The route action array.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 53,
                'endLine' => 53,
                'startColumn' => 5,
                'endColumn' => 19,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'isFallback' => [
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'name' => 'isFallback',
                'modifiers' => 1,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 60,
                        'endLine' => 60,
                        'startTokenPos' => 184,
                        'startFilePos' => 1570,
                        'endTokenPos' => 184,
                        'endFilePos' => 1574,
                    ],
                ],
                'docComment' => '/**
 * Indicates whether the route is a fallback route.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 60,
                'endLine' => 60,
                'startColumn' => 5,
                'endColumn' => 31,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'controller' => [
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'name' => 'controller',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The controller instance.
 *
 * @var mixed
 */',
                'attributes' => [
                ],
                'startLine' => 67,
                'endLine' => 67,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'defaults' => [
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'name' => 'defaults',
                'modifiers' => 1,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 74,
                        'endLine' => 74,
                        'startTokenPos' => 202,
                        'startFilePos' => 1781,
                        'endTokenPos' => 203,
                        'endFilePos' => 1782,
                    ],
                ],
                'docComment' => '/**
 * The default values for the route.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 74,
                'endLine' => 74,
                'startColumn' => 5,
                'endColumn' => 26,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'wheres' => [
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'name' => 'wheres',
                'modifiers' => 1,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 81,
                        'endLine' => 81,
                        'startTokenPos' => 214,
                        'startFilePos' => 1892,
                        'endTokenPos' => 215,
                        'endFilePos' => 1893,
                    ],
                ],
                'docComment' => '/**
 * The regular expression requirements.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 81,
                'endLine' => 81,
                'startColumn' => 5,
                'endColumn' => 24,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'parameters' => [
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'name' => 'parameters',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The array of matched parameters.
 *
 * @var array|null
 */',
                'attributes' => [
                ],
                'startLine' => 88,
                'endLine' => 88,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'parameterNames' => [
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'name' => 'parameterNames',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The parameter names for the route.
 *
 * @var array|null
 */',
                'attributes' => [
                ],
                'startLine' => 95,
                'endLine' => 95,
                'startColumn' => 5,
                'endColumn' => 27,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'originalParameters' => [
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'name' => 'originalParameters',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The array of the matched parameters\' original values.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 102,
                'endLine' => 102,
                'startColumn' => 5,
                'endColumn' => 34,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'withTrashedBindings' => [
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'name' => 'withTrashedBindings',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 109,
                        'endLine' => 109,
                        'startTokenPos' => 247,
                        'startFilePos' => 2446,
                        'endTokenPos' => 247,
                        'endFilePos' => 2450,
                    ],
                ],
                'docComment' => '/**
 * Indicates "trashed" models can be retrieved when resolving implicit model bindings for this route.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 109,
                'endLine' => 109,
                'startColumn' => 5,
                'endColumn' => 43,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'lockSeconds' => [
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'name' => 'lockSeconds',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * Indicates the maximum number of seconds the route should acquire a session lock for.
 *
 * @var int|null
 */',
                'attributes' => [
                ],
                'startLine' => 116,
                'endLine' => 116,
                'startColumn' => 5,
                'endColumn' => 27,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'waitSeconds' => [
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'name' => 'waitSeconds',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * Indicates the maximum number of seconds the route should wait while attempting to acquire a session lock.
 *
 * @var int|null
 */',
                'attributes' => [
                ],
                'startLine' => 123,
                'endLine' => 123,
                'startColumn' => 5,
                'endColumn' => 27,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'computedMiddleware' => [
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'name' => 'computedMiddleware',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The computed gathered middleware.
 *
 * @var array|null
 */',
                'attributes' => [
                ],
                'startLine' => 130,
                'endLine' => 130,
                'startColumn' => 5,
                'endColumn' => 31,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'compiled' => [
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'name' => 'compiled',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The compiled version of the route.
 *
 * @var \\Symfony\\Component\\Routing\\CompiledRoute
 */',
                'attributes' => [
                ],
                'startLine' => 137,
                'endLine' => 137,
                'startColumn' => 5,
                'endColumn' => 21,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'router' => [
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'name' => 'router',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The router instance used by the route.
 *
 * @var \\Illuminate\\Routing\\Router
 */',
                'attributes' => [
                ],
                'startLine' => 144,
                'endLine' => 144,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'container' => [
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'name' => 'container',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The container instance used by the route.
 *
 * @var \\Illuminate\\Container\\Container
 */',
                'attributes' => [
                ],
                'startLine' => 151,
                'endLine' => 151,
                'startColumn' => 5,
                'endColumn' => 25,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'bindingFields' => [
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'name' => 'bindingFields',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 158,
                        'endLine' => 158,
                        'startTokenPos' => 300,
                        'startFilePos' => 3487,
                        'endTokenPos' => 301,
                        'endFilePos' => 3488,
                    ],
                ],
                'docComment' => '/**
 * The fields that implicit binding should use for a given parameter.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 158,
                'endLine' => 158,
                'startColumn' => 5,
                'endColumn' => 34,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'validators' => [
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'name' => 'validators',
                'modifiers' => 17,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The validators used by the routes.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 165,
                'endLine' => 165,
                'startColumn' => 5,
                'endColumn' => 30,
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
                    'methods' => [
                        'name' => 'methods',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 174,
                        'endLine' => 174,
                        'startColumn' => 33,
                        'endColumn' => 40,
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
                        'startLine' => 174,
                        'endLine' => 174,
                        'startColumn' => 43,
                        'endColumn' => 46,
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
                        'startLine' => 174,
                        'endLine' => 174,
                        'startColumn' => 49,
                        'endColumn' => 55,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new Route instance.
 *
 * @param  array|string  $methods
 * @param  string  $uri
 * @param  \\Closure|array  $action
 */',
                'startLine' => 174,
                'endLine' => 185,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'parseAction' => [
                'name' => 'parseAction',
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
                        'startLine' => 195,
                        'endLine' => 195,
                        'startColumn' => 36,
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
 * Parse the route action into a standard array.
 *
 * @param  callable|array|null  $action
 * @return array
 *
 * @throws \\UnexpectedValueException
 */',
                'startLine' => 195,
                'endLine' => 198,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'run' => [
                'name' => 'run',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run the route action and return the response.
 *
 * @return mixed
 */',
                'startLine' => 205,
                'endLine' => 218,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'isControllerAction' => [
                'name' => 'isControllerAction',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Checks whether the route\'s action is a controller.
 *
 * @return bool
 */',
                'startLine' => 225,
                'endLine' => 228,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'runCallable' => [
                'name' => 'runCallable',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run the route action and return the response.
 *
 * @return mixed
 */',
                'startLine' => 235,
                'endLine' => 244,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'isSerializedClosure' => [
                'name' => 'isSerializedClosure',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the route action is a serialized Closure.
 *
 * @return bool
 */',
                'startLine' => 251,
                'endLine' => 254,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'runController' => [
                'name' => 'runController',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run the route action and return the response.
 *
 * @return mixed
 *
 * @throws \\Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException
 */',
                'startLine' => 263,
                'endLine' => 268,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'getController' => [
                'name' => 'getController',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the controller instance for the route.
 *
 * @return mixed
 *
 * @throws \\Illuminate\\Contracts\\Container\\BindingResolutionException
 */',
                'startLine' => 277,
                'endLine' => 290,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'getControllerClass' => [
                'name' => 'getControllerClass',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the controller class used for the route.
 *
 * @return string|null
 */',
                'startLine' => 297,
                'endLine' => 300,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'getControllerMethod' => [
                'name' => 'getControllerMethod',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the controller method used for the route.
 *
 * @return string
 */',
                'startLine' => 307,
                'endLine' => 310,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'parseControllerCallback' => [
                'name' => 'parseControllerCallback',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Parse the controller.
 *
 * @return array
 */',
                'startLine' => 317,
                'endLine' => 320,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'flushController' => [
                'name' => 'flushController',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Flush the cached container instance on the route.
 *
 * @return void
 */',
                'startLine' => 327,
                'endLine' => 331,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'matches' => [
                'name' => 'matches',
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
                        'startLine' => 340,
                        'endLine' => 340,
                        'startColumn' => 29,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'includingMethod' => [
                        'name' => 'includingMethod',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 340,
                                'endLine' => 340,
                                'startTokenPos' => 986,
                                'startFilePos' => 7851,
                                'endTokenPos' => 986,
                                'endFilePos' => 7854,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 340,
                        'endLine' => 340,
                        'startColumn' => 47,
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
 * Determine if the route matches a given request.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  bool  $includingMethod
 * @return bool
 */',
                'startLine' => 340,
                'endLine' => 355,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'compileRoute' => [
                'name' => 'compileRoute',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Compile the route into a Symfony CompiledRoute instance.
 *
 * @return \\Symfony\\Component\\Routing\\CompiledRoute
 */',
                'startLine' => 362,
                'endLine' => 369,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'bind' => [
                'name' => 'bind',
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
                        'startLine' => 377,
                        'endLine' => 377,
                        'startColumn' => 26,
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
 * Bind the route to a given request for execution.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return $this
 */',
                'startLine' => 377,
                'endLine' => 387,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'hasParameters' => [
                'name' => 'hasParameters',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the route has parameters.
 *
 * @return bool
 */',
                'startLine' => 394,
                'endLine' => 397,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'hasParameter' => [
                'name' => 'hasParameter',
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
                        'startLine' => 405,
                        'endLine' => 405,
                        'startColumn' => 34,
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
 * Determine a given parameter exists from the route.
 *
 * @param  string  $name
 * @return bool
 */',
                'startLine' => 405,
                'endLine' => 412,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'parameter' => [
                'name' => 'parameter',
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
                        'startLine' => 421,
                        'endLine' => 421,
                        'startColumn' => 31,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 421,
                                'endLine' => 421,
                                'startTokenPos' => 1273,
                                'startFilePos' => 9684,
                                'endTokenPos' => 1273,
                                'endFilePos' => 9687,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 421,
                        'endLine' => 421,
                        'startColumn' => 38,
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
 * Get a given parameter from the route.
 *
 * @param  string  $name
 * @param  string|object|null  $default
 * @return string|object|null
 */',
                'startLine' => 421,
                'endLine' => 424,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'originalParameter' => [
                'name' => 'originalParameter',
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
                        'startLine' => 433,
                        'endLine' => 433,
                        'startColumn' => 39,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 433,
                                'endLine' => 433,
                                'startTokenPos' => 1315,
                                'startFilePos' => 10001,
                                'endTokenPos' => 1315,
                                'endFilePos' => 10004,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 433,
                        'endLine' => 433,
                        'startColumn' => 46,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get original value of a given parameter from the route.
 *
 * @param  string  $name
 * @param  string|null  $default
 * @return string|null
 */',
                'startLine' => 433,
                'endLine' => 436,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'setParameter' => [
                'name' => 'setParameter',
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
                        'startLine' => 445,
                        'endLine' => 445,
                        'startColumn' => 34,
                        'endColumn' => 38,
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
                        'startLine' => 445,
                        'endLine' => 445,
                        'startColumn' => 41,
                        'endColumn' => 46,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set a parameter to the given value.
 *
 * @param  string  $name
 * @param  string|object|null  $value
 * @return void
 */',
                'startLine' => 445,
                'endLine' => 450,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'forgetParameter' => [
                'name' => 'forgetParameter',
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
                        'startLine' => 458,
                        'endLine' => 458,
                        'startColumn' => 37,
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
 * Unset a parameter on the route if it is set.
 *
 * @param  string  $name
 * @return void
 */',
                'startLine' => 458,
                'endLine' => 463,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'parameters' => [
                'name' => 'parameters',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the key / value list of parameters for the route.
 *
 * @return array
 *
 * @throws \\LogicException
 */',
                'startLine' => 472,
                'endLine' => 479,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'originalParameters' => [
                'name' => 'originalParameters',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the key / value list of original parameters for the route.
 *
 * @return array
 *
 * @throws \\LogicException
 */',
                'startLine' => 488,
                'endLine' => 495,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'parametersWithoutNulls' => [
                'name' => 'parametersWithoutNulls',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the key / value list of parameters without null values.
 *
 * @return array
 */',
                'startLine' => 502,
                'endLine' => 505,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'parameterNames' => [
                'name' => 'parameterNames',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get all of the parameter names for the route.
 *
 * @return array
 */',
                'startLine' => 512,
                'endLine' => 519,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'compileParameterNames' => [
                'name' => 'compileParameterNames',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the parameter names for the route.
 *
 * @return array
 */',
                'startLine' => 526,
                'endLine' => 531,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'signatureParameters' => [
                'name' => 'signatureParameters',
                'parameters' => [
                    'conditions' => [
                        'name' => 'conditions',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 539,
                                'endLine' => 539,
                                'startTokenPos' => 1671,
                                'startFilePos' => 12403,
                                'endTokenPos' => 1672,
                                'endFilePos' => 12404,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 539,
                        'endLine' => 539,
                        'startColumn' => 41,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the parameters that are listed in the route / controller signature.
 *
 * @param  array  $conditions
 * @return array
 */',
                'startLine' => 539,
                'endLine' => 546,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'bindingFieldFor' => [
                'name' => 'bindingFieldFor',
                'parameters' => [
                    'parameter' => [
                        'name' => 'parameter',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 554,
                        'endLine' => 554,
                        'startColumn' => 37,
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
 * Get the binding field for the given parameter.
 *
 * @param  string|int  $parameter
 * @return string|null
 */',
                'startLine' => 554,
                'endLine' => 559,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'bindingFields' => [
                'name' => 'bindingFields',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the binding fields for the route.
 *
 * @return array
 */',
                'startLine' => 566,
                'endLine' => 569,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'setBindingFields' => [
                'name' => 'setBindingFields',
                'parameters' => [
                    'bindingFields' => [
                        'name' => 'bindingFields',
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
                        'startLine' => 577,
                        'endLine' => 577,
                        'startColumn' => 38,
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
 * Set the binding fields for the route.
 *
 * @param  array  $bindingFields
 * @return $this
 */',
                'startLine' => 577,
                'endLine' => 582,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'parentOfParameter' => [
                'name' => 'parentOfParameter',
                'parameters' => [
                    'parameter' => [
                        'name' => 'parameter',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 590,
                        'endLine' => 590,
                        'startColumn' => 39,
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
 * Get the parent parameter of the given parameter.
 *
 * @param  string  $parameter
 * @return string|null
 */',
                'startLine' => 590,
                'endLine' => 599,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'withTrashed' => [
                'name' => 'withTrashed',
                'parameters' => [
                    'withTrashed' => [
                        'name' => 'withTrashed',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 607,
                                'endLine' => 607,
                                'startTokenPos' => 1916,
                                'startFilePos' => 14035,
                                'endTokenPos' => 1916,
                                'endFilePos' => 14038,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 607,
                        'endLine' => 607,
                        'startColumn' => 33,
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
 * Allow "trashed" models to be retrieved when resolving implicit model bindings for this route.
 *
 * @param  bool  $withTrashed
 * @return $this
 */',
                'startLine' => 607,
                'endLine' => 612,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'allowsTrashedBindings' => [
                'name' => 'allowsTrashedBindings',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determines if the route allows "trashed" models to be retrieved when resolving implicit model bindings.
 *
 * @return bool
 */',
                'startLine' => 619,
                'endLine' => 622,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'defaults' => [
                'name' => 'defaults',
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
                        'startLine' => 631,
                        'endLine' => 631,
                        'startColumn' => 30,
                        'endColumn' => 33,
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
                        'startLine' => 631,
                        'endLine' => 631,
                        'startColumn' => 36,
                        'endColumn' => 41,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set a default value for the route.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @return $this
 */',
                'startLine' => 631,
                'endLine' => 636,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'setDefaults' => [
                'name' => 'setDefaults',
                'parameters' => [
                    'defaults' => [
                        'name' => 'defaults',
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
                        'startLine' => 644,
                        'endLine' => 644,
                        'startColumn' => 33,
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
 * Set the default values for the route.
 *
 * @param  array  $defaults
 * @return $this
 */',
                'startLine' => 644,
                'endLine' => 649,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'where' => [
                'name' => 'where',
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
                        'startLine' => 658,
                        'endLine' => 658,
                        'startColumn' => 27,
                        'endColumn' => 31,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'expression' => [
                        'name' => 'expression',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 658,
                                'endLine' => 658,
                                'startTokenPos' => 2039,
                                'startFilePos' => 15111,
                                'endTokenPos' => 2039,
                                'endFilePos' => 15114,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 658,
                        'endLine' => 658,
                        'startColumn' => 34,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set a regular expression requirement on the route.
 *
 * @param  array|string  $name
 * @param  string|null  $expression
 * @return $this
 */',
                'startLine' => 658,
                'endLine' => 665,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'parseWhere' => [
                'name' => 'parseWhere',
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
                        'startLine' => 674,
                        'endLine' => 674,
                        'startColumn' => 35,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'expression' => [
                        'name' => 'expression',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 674,
                        'endLine' => 674,
                        'startColumn' => 42,
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
 * Parse arguments to the where method into an array.
 *
 * @param  array|string  $name
 * @param  string  $expression
 * @return array
 */',
                'startLine' => 674,
                'endLine' => 677,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'setWheres' => [
                'name' => 'setWheres',
                'parameters' => [
                    'wheres' => [
                        'name' => 'wheres',
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
                        'startLine' => 685,
                        'endLine' => 685,
                        'startColumn' => 31,
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
 * Set a list of regular expression requirements on the route.
 *
 * @param  array  $wheres
 * @return $this
 */',
                'startLine' => 685,
                'endLine' => 692,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'fallback' => [
                'name' => 'fallback',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Mark this route as a fallback route.
 *
 * @return $this
 */',
                'startLine' => 699,
                'endLine' => 704,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'setFallback' => [
                'name' => 'setFallback',
                'parameters' => [
                    'isFallback' => [
                        'name' => 'isFallback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 712,
                        'endLine' => 712,
                        'startColumn' => 33,
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
 * Set the fallback value.
 *
 * @param  bool  $isFallback
 * @return $this
 */',
                'startLine' => 712,
                'endLine' => 717,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'methods' => [
                'name' => 'methods',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the HTTP verbs the route responds to.
 *
 * @return array
 */',
                'startLine' => 724,
                'endLine' => 727,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'httpOnly' => [
                'name' => 'httpOnly',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the route only responds to HTTP requests.
 *
 * @return bool
 */',
                'startLine' => 734,
                'endLine' => 737,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'httpsOnly' => [
                'name' => 'httpsOnly',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the route only responds to HTTPS requests.
 *
 * @return bool
 */',
                'startLine' => 744,
                'endLine' => 747,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'secure' => [
                'name' => 'secure',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the route only responds to HTTPS requests.
 *
 * @return bool
 */',
                'startLine' => 754,
                'endLine' => 757,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'domain' => [
                'name' => 'domain',
                'parameters' => [
                    'domain' => [
                        'name' => 'domain',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 767,
                                'endLine' => 767,
                                'startTokenPos' => 2353,
                                'startFilePos' => 17335,
                                'endTokenPos' => 2353,
                                'endFilePos' => 17338,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 767,
                        'endLine' => 767,
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
 * Get or set the domain for the route.
 *
 * @param  \\BackedEnum|string|null  $domain
 * @return $this|string|null
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 767,
                'endLine' => 786,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'getDomain' => [
                'name' => 'getDomain',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the domain defined for the route.
 *
 * @return string|null
 */',
                'startLine' => 793,
                'endLine' => 798,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'getPrefix' => [
                'name' => 'getPrefix',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the prefix of the route instance.
 *
 * @return string|null
 */',
                'startLine' => 805,
                'endLine' => 808,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'prefix' => [
                'name' => 'prefix',
                'parameters' => [
                    'prefix' => [
                        'name' => 'prefix',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 816,
                        'endLine' => 816,
                        'startColumn' => 28,
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
 * Add a prefix to the route URI.
 *
 * @param  string|null  $prefix
 * @return $this
 */',
                'startLine' => 816,
                'endLine' => 825,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'updatePrefixOnAction' => [
                'name' => 'updatePrefixOnAction',
                'parameters' => [
                    'prefix' => [
                        'name' => 'prefix',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 833,
                        'endLine' => 833,
                        'startColumn' => 45,
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
 * Update the "prefix" attribute on the action array.
 *
 * @param  string  $prefix
 * @return void
 */',
                'startLine' => 833,
                'endLine' => 838,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'uri' => [
                'name' => 'uri',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the URI associated with the route.
 *
 * @return string
 */',
                'startLine' => 845,
                'endLine' => 848,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'setUri' => [
                'name' => 'setUri',
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
                        'startLine' => 856,
                        'endLine' => 856,
                        'startColumn' => 28,
                        'endColumn' => 31,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the URI that the route responds to.
 *
 * @param  string  $uri
 * @return $this
 */',
                'startLine' => 856,
                'endLine' => 861,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'parseUri' => [
                'name' => 'parseUri',
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
                        'startLine' => 869,
                        'endLine' => 869,
                        'startColumn' => 33,
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
 * Parse the route URI and normalize / store any implicit binding fields.
 *
 * @param  string  $uri
 * @return string
 */',
                'startLine' => 869,
                'endLine' => 876,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'getName' => [
                'name' => 'getName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the name of the route instance.
 *
 * @return string|null
 */',
                'startLine' => 883,
                'endLine' => 886,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'name' => [
                'name' => 'name',
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
                        'startLine' => 896,
                        'endLine' => 896,
                        'startColumn' => 26,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add or change the route name.
 *
 * @param  \\BackedEnum|string  $name
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 896,
                'endLine' => 905,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'named' => [
                'name' => 'named',
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
                        'startLine' => 913,
                        'endLine' => 913,
                        'startColumn' => 27,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine whether the route\'s name matches the given patterns.
 *
 * @param  mixed  ...$patterns
 * @return bool
 */',
                'startLine' => 913,
                'endLine' => 926,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'uses' => [
                'name' => 'uses',
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
                        'startLine' => 934,
                        'endLine' => 934,
                        'startColumn' => 26,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the handler for the route.
 *
 * @param  \\Closure|array|string  $action
 * @return $this
 */',
                'startLine' => 934,
                'endLine' => 946,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'addGroupNamespaceToStringUses' => [
                'name' => 'addGroupNamespaceToStringUses',
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
                        'startLine' => 954,
                        'endLine' => 954,
                        'startColumn' => 54,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Parse a string based action for the "uses" fluent method.
 *
 * @param  string  $action
 * @return string
 */',
                'startLine' => 954,
                'endLine' => 963,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'getActionName' => [
                'name' => 'getActionName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the action name for the route.
 *
 * @return string
 */',
                'startLine' => 970,
                'endLine' => 973,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'getActionMethod' => [
                'name' => 'getActionMethod',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the method name of the route action.
 *
 * @return string
 */',
                'startLine' => 980,
                'endLine' => 983,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'getAction' => [
                'name' => 'getAction',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 991,
                                'endLine' => 991,
                                'startTokenPos' => 3295,
                                'startFilePos' => 22523,
                                'endTokenPos' => 3295,
                                'endFilePos' => 22526,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 991,
                        'endLine' => 991,
                        'startColumn' => 31,
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
 * Get the action array or one of its properties for the route.
 *
 * @param  string|null  $key
 * @return mixed
 */',
                'startLine' => 991,
                'endLine' => 994,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'setAction' => [
                'name' => 'setAction',
                'parameters' => [
                    'action' => [
                        'name' => 'action',
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
                        'startLine' => 1002,
                        'endLine' => 1002,
                        'startColumn' => 31,
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
 * Set the action array for the route.
 *
 * @param  array  $action
 * @return $this
 */',
                'startLine' => 1002,
                'endLine' => 1017,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'getMissing' => [
                'name' => 'getMissing',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the value of the action that should be taken on a missing model exception.
 *
 * @return \\Closure|null
 */',
                'startLine' => 1024,
                'endLine' => 1033,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'missing' => [
                'name' => 'missing',
                'parameters' => [
                    'missing' => [
                        'name' => 'missing',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1041,
                        'endLine' => 1041,
                        'startColumn' => 29,
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
 * Define the callable that should be invoked on a missing model exception.
 *
 * @param  \\Closure  $missing
 * @return $this
 */',
                'startLine' => 1041,
                'endLine' => 1046,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'gatherMiddleware' => [
                'name' => 'gatherMiddleware',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get all middleware, including the ones from the controller.
 *
 * @return array
 */',
                'startLine' => 1053,
                'endLine' => 1064,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'middleware' => [
                'name' => 'middleware',
                'parameters' => [
                    'middleware' => [
                        'name' => 'middleware',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1072,
                                'endLine' => 1072,
                                'startTokenPos' => 3631,
                                'startFilePos' => 24596,
                                'endTokenPos' => 3631,
                                'endFilePos' => 24599,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1072,
                        'endLine' => 1072,
                        'startColumn' => 32,
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
 * Get or set the middlewares attached to the route.
 *
 * @param  array|string|null  $middleware
 * @return ($middleware is null ? array : $this)
 */',
                'startLine' => 1072,
                'endLine' => 1091,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'can' => [
                'name' => 'can',
                'parameters' => [
                    'ability' => [
                        'name' => 'ability',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1100,
                        'endLine' => 1100,
                        'startColumn' => 25,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'models' => [
                        'name' => 'models',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1100,
                                'endLine' => 1100,
                                'startTokenPos' => 3778,
                                'startFilePos' => 25364,
                                'endTokenPos' => 3779,
                                'endFilePos' => 25365,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1100,
                        'endLine' => 1100,
                        'startColumn' => 35,
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
 * Specify that the "Authorize" / "can" middleware should be applied to the route with the given options.
 *
 * @param  \\UnitEnum|string  $ability
 * @param  array|string  $models
 * @return $this
 */',
                'startLine' => 1100,
                'endLine' => 1107,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'controllerMiddleware' => [
                'name' => 'controllerMiddleware',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the middleware for the route\'s controller.
 *
 * @return array
 */',
                'startLine' => 1114,
                'endLine' => 1138,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'staticallyProvidedControllerMiddleware' => [
                'name' => 'staticallyProvidedControllerMiddleware',
                'parameters' => [
                    'class' => [
                        'name' => 'class',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1147,
                        'endLine' => 1147,
                        'startColumn' => 63,
                        'endColumn' => 75,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'method' => [
                        'name' => 'method',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'string',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1147,
                        'endLine' => 1147,
                        'startColumn' => 78,
                        'endColumn' => 91,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the statically provided controller middleware for the given class and method.
 *
 * @param  string  $class
 * @param  string  $method
 * @return array
 */',
                'startLine' => 1147,
                'endLine' => 1165,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'withoutMiddleware' => [
                'name' => 'withoutMiddleware',
                'parameters' => [
                    'middleware' => [
                        'name' => 'middleware',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1173,
                        'endLine' => 1173,
                        'startColumn' => 39,
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
 * Specify middleware that should be removed from the given route.
 *
 * @param  array|string  $middleware
 * @return $this
 */',
                'startLine' => 1173,
                'endLine' => 1180,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'excludedMiddleware' => [
                'name' => 'excludedMiddleware',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the middleware that should be removed from the route.
 *
 * @return array
 */',
                'startLine' => 1187,
                'endLine' => 1190,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'scopeBindings' => [
                'name' => 'scopeBindings',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that the route should enforce scoping of multiple implicit Eloquent bindings.
 *
 * @return $this
 */',
                'startLine' => 1197,
                'endLine' => 1202,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'withoutScopedBindings' => [
                'name' => 'withoutScopedBindings',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that the route should not enforce scoping of multiple implicit Eloquent bindings.
 *
 * @return $this
 */',
                'startLine' => 1209,
                'endLine' => 1214,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'enforcesScopedBindings' => [
                'name' => 'enforcesScopedBindings',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the route should enforce scoping of multiple implicit Eloquent bindings.
 *
 * @return bool
 */',
                'startLine' => 1221,
                'endLine' => 1224,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'preventsScopedBindings' => [
                'name' => 'preventsScopedBindings',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the route should prevent scoping of multiple implicit Eloquent bindings.
 *
 * @return bool
 */',
                'startLine' => 1231,
                'endLine' => 1234,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'block' => [
                'name' => 'block',
                'parameters' => [
                    'lockSeconds' => [
                        'name' => 'lockSeconds',
                        'default' => [
                            'code' => '10',
                            'attributes' => [
                                'startLine' => 1243,
                                'endLine' => 1243,
                                'startTokenPos' => 4376,
                                'startFilePos' => 29290,
                                'endTokenPos' => 4376,
                                'endFilePos' => 29291,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1243,
                        'endLine' => 1243,
                        'startColumn' => 27,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'waitSeconds' => [
                        'name' => 'waitSeconds',
                        'default' => [
                            'code' => '10',
                            'attributes' => [
                                'startLine' => 1243,
                                'endLine' => 1243,
                                'startTokenPos' => 4383,
                                'startFilePos' => 29309,
                                'endTokenPos' => 4383,
                                'endFilePos' => 29310,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1243,
                        'endLine' => 1243,
                        'startColumn' => 46,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Specify that the route should not allow concurrent requests from the same session.
 *
 * @param  int|null  $lockSeconds
 * @param  int|null  $waitSeconds
 * @return $this
 */',
                'startLine' => 1243,
                'endLine' => 1249,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'withoutBlocking' => [
                'name' => 'withoutBlocking',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Specify that the route should allow concurrent requests from the same session.
 *
 * @return $this
 */',
                'startLine' => 1256,
                'endLine' => 1259,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'locksFor' => [
                'name' => 'locksFor',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the maximum number of seconds the route\'s session lock should be held for.
 *
 * @return int|null
 */',
                'startLine' => 1266,
                'endLine' => 1269,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'waitsFor' => [
                'name' => 'waitsFor',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the maximum number of seconds to wait while attempting to acquire a session lock.
 *
 * @return int|null
 */',
                'startLine' => 1276,
                'endLine' => 1279,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'controllerDispatcher' => [
                'name' => 'controllerDispatcher',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the dispatcher for the route\'s controller.
 *
 * @return \\Illuminate\\Routing\\Contracts\\ControllerDispatcher
 *
 * @throws \\Illuminate\\Contracts\\Container\\BindingResolutionException
 */',
                'startLine' => 1288,
                'endLine' => 1295,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'getValidators' => [
                'name' => 'getValidators',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the route validators for the instance.
 *
 * @return array
 */',
                'startLine' => 1302,
                'endLine' => 1315,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'toSymfonyRoute' => [
                'name' => 'toSymfonyRoute',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert the route to a Symfony route.
 *
 * @return \\Symfony\\Component\\Routing\\Route
 */',
                'startLine' => 1322,
                'endLine' => 1329,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'getOptionalParameterNames' => [
                'name' => 'getOptionalParameterNames',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the optional parameter names for the route.
 *
 * @return array<string, null>
 */',
                'startLine' => 1336,
                'endLine' => 1341,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'getCompiled' => [
                'name' => 'getCompiled',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the compiled version of the route.
 *
 * @return \\Symfony\\Component\\Routing\\CompiledRoute
 */',
                'startLine' => 1348,
                'endLine' => 1351,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'setRouter' => [
                'name' => 'setRouter',
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
                        'startLine' => 1359,
                        'endLine' => 1359,
                        'startColumn' => 31,
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
 * Set the router instance on the route.
 *
 * @param  \\Illuminate\\Routing\\Router  $router
 * @return $this
 */',
                'startLine' => 1359,
                'endLine' => 1364,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
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
                        'startLine' => 1372,
                        'endLine' => 1372,
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
 * Set the container instance on the route.
 *
 * @param  \\Illuminate\\Container\\Container  $container
 * @return $this
 */',
                'startLine' => 1372,
                'endLine' => 1377,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            'prepareForSerialization' => [
                'name' => 'prepareForSerialization',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prepare the route instance for serialization.
 *
 * @return void
 *
 * @throws \\LogicException
 */',
                'startLine' => 1386,
                'endLine' => 1403,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
                'aliasName' => null,
            ],
            '__get' => [
                'name' => '__get',
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
                        'startLine' => 1411,
                        'endLine' => 1411,
                        'startColumn' => 27,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dynamically access route parameters.
 *
 * @param  string  $key
 * @return mixed
 */',
                'startLine' => 1411,
                'endLine' => 1414,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Route',
                'implementingClassName' => 'Illuminate\\Routing\\Route',
                'currentClassName' => 'Illuminate\\Routing\\Route',
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
