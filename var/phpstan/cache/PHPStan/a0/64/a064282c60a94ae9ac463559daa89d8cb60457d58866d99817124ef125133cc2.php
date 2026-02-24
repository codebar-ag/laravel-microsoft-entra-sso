<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Routing/Controller.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Routing\Controller
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-ef532520a7e2c340917ada40c8e397fa9a2d3515fb90cb08905d7f4a684add8f-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Routing\\Controller',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Routing/Controller.php',
            ],
        ],
        'namespace' => 'Illuminate\\Routing',
        'name' => 'Illuminate\\Routing\\Controller',
        'shortName' => 'Controller',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 64,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 7,
        'endLine' => 72,
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
            'middleware' => [
                'declaringClassName' => 'Illuminate\\Routing\\Controller',
                'implementingClassName' => 'Illuminate\\Routing\\Controller',
                'name' => 'middleware',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 14,
                        'endLine' => 14,
                        'startTokenPos' => 28,
                        'startFilePos' => 216,
                        'endTokenPos' => 29,
                        'endFilePos' => 217,
                    ],
                ],
                'docComment' => '/**
 * The middleware registered on the controller.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 14,
                'endLine' => 14,
                'startColumn' => 5,
                'endColumn' => 31,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'middleware' => [
                'name' => 'middleware',
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
                        'startLine' => 23,
                        'endLine' => 23,
                        'startColumn' => 32,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 23,
                                'endLine' => 23,
                                'startTokenPos' => 49,
                                'startFilePos' => 495,
                                'endTokenPos' => 50,
                                'endFilePos' => 496,
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
                        'startLine' => 23,
                        'endLine' => 23,
                        'startColumn' => 45,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register middleware on the controller.
 *
 * @param  \\Closure|array|string  $middleware
 * @param  array  $options
 * @return \\Illuminate\\Routing\\ControllerMiddlewareOptions
 */',
                'startLine' => 23,
                'endLine' => 33,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Controller',
                'implementingClassName' => 'Illuminate\\Routing\\Controller',
                'currentClassName' => 'Illuminate\\Routing\\Controller',
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
 * Get the middleware assigned to the controller.
 *
 * @return array
 */',
                'startLine' => 40,
                'endLine' => 43,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Controller',
                'implementingClassName' => 'Illuminate\\Routing\\Controller',
                'currentClassName' => 'Illuminate\\Routing\\Controller',
                'aliasName' => null,
            ],
            'callAction' => [
                'name' => 'callAction',
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
                        'startLine' => 52,
                        'endLine' => 52,
                        'startColumn' => 32,
                        'endColumn' => 38,
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
                        'startLine' => 52,
                        'endLine' => 52,
                        'startColumn' => 41,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute an action on the controller.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return \\Symfony\\Component\\HttpFoundation\\Response
 */',
                'startLine' => 52,
                'endLine' => 55,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Controller',
                'implementingClassName' => 'Illuminate\\Routing\\Controller',
                'currentClassName' => 'Illuminate\\Routing\\Controller',
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
                        'startLine' => 66,
                        'endLine' => 66,
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
                        'startLine' => 66,
                        'endLine' => 66,
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
 * Handle calls to missing methods on the controller.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \\BadMethodCallException
 */',
                'startLine' => 66,
                'endLine' => 71,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Routing',
                'declaringClassName' => 'Illuminate\\Routing\\Controller',
                'implementingClassName' => 'Illuminate\\Routing\\Controller',
                'currentClassName' => 'Illuminate\\Routing\\Controller',
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
