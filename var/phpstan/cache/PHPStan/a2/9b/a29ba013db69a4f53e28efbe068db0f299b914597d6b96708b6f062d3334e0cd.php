<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Routing/RouteCollectionInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Routing\RouteCollectionInterface
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-7ee0a97b14099fe6504598e4ea8a44e3c5e4da9641cd91315b6670a8602d0b88-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Routing/RouteCollectionInterface.php',
            ],
        ],
        'namespace' => 'Illuminate\\Routing',
        'name' => 'Illuminate\\Routing\\RouteCollectionInterface',
        'shortName' => 'RouteCollectionInterface',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 7,
        'endLine' => 98,
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
            'add' => [
                'name' => 'add',
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
                        'startLine' => 15,
                        'endLine' => 15,
                        'startColumn' => 25,
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
 * Add a Route instance to the collection.
 *
 * @param  \\Illuminate\\Routing\\Route  $route
 * @return \\Illuminate\\Routing\\Route
 */',
                'startLine' => 15,
                'endLine' => 15,
                'startColumn' => 5,
                'endColumn' => 38,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'implementingClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'currentClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'aliasName' => null,
            ],
            'refreshNameLookups' => [
                'name' => 'refreshNameLookups',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Refresh the name look-up table.
 *
 * This is done in case any names are fluently defined or if routes are overwritten.
 *
 * @return void
 */',
                'startLine' => 24,
                'endLine' => 24,
                'startColumn' => 5,
                'endColumn' => 41,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'implementingClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'currentClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'aliasName' => null,
            ],
            'refreshActionLookups' => [
                'name' => 'refreshActionLookups',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Refresh the action look-up table.
 *
 * This is done in case any actions are overwritten with new controllers.
 *
 * @return void
 */',
                'startLine' => 33,
                'endLine' => 33,
                'startColumn' => 5,
                'endColumn' => 43,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'implementingClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'currentClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'aliasName' => null,
            ],
            'match' => [
                'name' => 'match',
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
                        'startLine' => 44,
                        'endLine' => 44,
                        'startColumn' => 27,
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
 * Find the first route matching a given request.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return \\Illuminate\\Routing\\Route
 *
 * @throws \\Symfony\\Component\\HttpKernel\\Exception\\MethodNotAllowedHttpException
 * @throws \\Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException
 */',
                'startLine' => 44,
                'endLine' => 44,
                'startColumn' => 5,
                'endColumn' => 44,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'implementingClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'currentClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'aliasName' => null,
            ],
            'get' => [
                'name' => 'get',
                'parameters' => [
                    'method' => [
                        'name' => 'method',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 52,
                                'endLine' => 52,
                                'startTokenPos' => 80,
                                'startFilePos' => 1308,
                                'endTokenPos' => 80,
                                'endFilePos' => 1311,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 52,
                        'endLine' => 52,
                        'startColumn' => 25,
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
 * Get routes from the collection by method.
 *
 * @param  string|null  $method
 * @return \\Illuminate\\Routing\\Route[]
 */',
                'startLine' => 52,
                'endLine' => 52,
                'startColumn' => 5,
                'endColumn' => 40,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'implementingClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'currentClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'aliasName' => null,
            ],
            'hasNamedRoute' => [
                'name' => 'hasNamedRoute',
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
                        'startLine' => 60,
                        'endLine' => 60,
                        'startColumn' => 35,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the route collection contains a given named route.
 *
 * @param  string  $name
 * @return bool
 */',
                'startLine' => 60,
                'endLine' => 60,
                'startColumn' => 5,
                'endColumn' => 41,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'implementingClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'currentClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'aliasName' => null,
            ],
            'getByName' => [
                'name' => 'getByName',
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
                        'startLine' => 68,
                        'endLine' => 68,
                        'startColumn' => 31,
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
 * Get a route instance by its name.
 *
 * @param  string  $name
 * @return \\Illuminate\\Routing\\Route|null
 */',
                'startLine' => 68,
                'endLine' => 68,
                'startColumn' => 5,
                'endColumn' => 37,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'implementingClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'currentClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'aliasName' => null,
            ],
            'getByAction' => [
                'name' => 'getByAction',
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
                        'startLine' => 76,
                        'endLine' => 76,
                        'startColumn' => 33,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a route instance by its controller action.
 *
 * @param  string  $action
 * @return \\Illuminate\\Routing\\Route|null
 */',
                'startLine' => 76,
                'endLine' => 76,
                'startColumn' => 5,
                'endColumn' => 41,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'implementingClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'currentClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
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
 * Get all of the routes in the collection.
 *
 * @return \\Illuminate\\Routing\\Route[]
 */',
                'startLine' => 83,
                'endLine' => 83,
                'startColumn' => 5,
                'endColumn' => 32,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'implementingClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'currentClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'aliasName' => null,
            ],
            'getRoutesByMethod' => [
                'name' => 'getRoutesByMethod',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get all of the routes keyed by their HTTP verb / method.
 *
 * @return array
 */',
                'startLine' => 90,
                'endLine' => 90,
                'startColumn' => 5,
                'endColumn' => 40,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'implementingClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'currentClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'aliasName' => null,
            ],
            'getRoutesByName' => [
                'name' => 'getRoutesByName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get all of the routes keyed by their name.
 *
 * @return \\Illuminate\\Routing\\Route[]
 */',
                'startLine' => 97,
                'endLine' => 97,
                'startColumn' => 5,
                'endColumn' => 38,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'implementingClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
                'currentClassName' => 'Illuminate\\Routing\\RouteCollectionInterface',
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
