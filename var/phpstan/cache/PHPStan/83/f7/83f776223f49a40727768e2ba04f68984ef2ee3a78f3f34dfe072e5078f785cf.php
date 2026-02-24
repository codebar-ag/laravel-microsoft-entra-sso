<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../orchestra/testbench-core/src/Concerns/HandlesRoutes.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Orchestra\Testbench\Concerns\HandlesRoutes
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-a1c9108dc834fa795bfdefd67002d2094bff5582e2e386bbbce2e1145e5d2e51-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Orchestra\\Testbench\\Concerns\\HandlesRoutes',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../orchestra/testbench-core/src/Concerns/HandlesRoutes.php',
            ],
        ],
        'namespace' => 'Orchestra\\Testbench\\Concerns',
        'name' => 'Orchestra\\Testbench\\Concerns\\HandlesRoutes',
        'shortName' => 'HandlesRoutes',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 19,
        'endLine' => 203,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Orchestra\\Testbench\\Concerns\\InteractsWithPHPUnit',
            1 => 'Orchestra\\Testbench\\Concerns\\InteractsWithTestCase',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'requireApplicationCachedRoutesHasRun' => [
                'declaringClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesRoutes',
                'implementingClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesRoutes',
                'name' => 'requireApplicationCachedRoutesHasRun',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 29,
                        'endLine' => 29,
                        'startTokenPos' => 103,
                        'startFilePos' => 871,
                        'endTokenPos' => 103,
                        'endFilePos' => 875,
                    ],
                ],
                'docComment' => '/**
 * Indicates if we have made it through the requireApplicationCachedRoutes function.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 29,
                'endLine' => 29,
                'startColumn' => 5,
                'endColumn' => 65,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'setUpApplicationRoutes' => [
                'name' => 'setUpApplicationRoutes',
                'parameters' => [
                    'app' => [
                        'name' => 'app',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 38,
                        'endLine' => 38,
                        'startColumn' => 47,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'void',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Setup routes requirements.
 *
 * @internal
 *
 * @param  \\Illuminate\\Foundation\\Application  $app
 */',
                'startLine' => 38,
                'endLine' => 68,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Orchestra\\Testbench\\Concerns',
                'declaringClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesRoutes',
                'implementingClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesRoutes',
                'currentClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesRoutes',
                'aliasName' => null,
            ],
            'defineRoutes' => [
                'name' => 'defineRoutes',
                'parameters' => [
                    'router' => [
                        'name' => 'router',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 78,
                        'endLine' => 78,
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
 * Define routes setup.
 *
 * @api
 *
 * @param  \\Illuminate\\Routing\\Router  $router
 * @return void
 */',
                'startLine' => 78,
                'endLine' => 81,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Orchestra\\Testbench\\Concerns',
                'declaringClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesRoutes',
                'implementingClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesRoutes',
                'currentClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesRoutes',
                'aliasName' => null,
            ],
            'defineWebRoutes' => [
                'name' => 'defineWebRoutes',
                'parameters' => [
                    'router' => [
                        'name' => 'router',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 91,
                        'endLine' => 91,
                        'startColumn' => 40,
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
 * Define web routes setup.
 *
 * @api
 *
 * @param  \\Illuminate\\Routing\\Router  $router
 * @return void
 */',
                'startLine' => 91,
                'endLine' => 94,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Orchestra\\Testbench\\Concerns',
                'declaringClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesRoutes',
                'implementingClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesRoutes',
                'currentClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesRoutes',
                'aliasName' => null,
            ],
            'defineStashRoutes' => [
                'name' => 'defineStashRoutes',
                'parameters' => [
                    'route' => [
                        'name' => 'route',
                        'default' => null,
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
                                            'name' => 'string',
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
                        'startLine' => 104,
                        'endLine' => 104,
                        'startColumn' => 42,
                        'endColumn' => 62,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'void',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Define stash routes setup.
 *
 * @api
 *
 * @param  \\Closure|string  $route
 * @return void
 */',
                'startLine' => 104,
                'endLine' => 107,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Orchestra\\Testbench\\Concerns',
                'declaringClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesRoutes',
                'implementingClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesRoutes',
                'currentClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesRoutes',
                'aliasName' => null,
            ],
            'defineCacheRoutes' => [
                'name' => 'defineCacheRoutes',
                'parameters' => [
                    'route' => [
                        'name' => 'route',
                        'default' => null,
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
                                            'name' => 'string',
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
                        'startLine' => 118,
                        'endLine' => 118,
                        'startColumn' => 42,
                        'endColumn' => 62,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'cached' => [
                        'name' => 'cached',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 118,
                                'endLine' => 118,
                                'startTokenPos' => 443,
                                'startFilePos' => 3152,
                                'endTokenPos' => 443,
                                'endFilePos' => 3155,
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
                        'startLine' => 118,
                        'endLine' => 118,
                        'startColumn' => 65,
                        'endColumn' => 83,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'void',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Define cache routes setup.
 *
 * @api
 *
 * @param  \\Closure|string  $route
 * @param  bool  $cached
 * @return void
 */',
                'startLine' => 118,
                'endLine' => 162,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Orchestra\\Testbench\\Concerns',
                'declaringClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesRoutes',
                'implementingClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesRoutes',
                'currentClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesRoutes',
                'aliasName' => null,
            ],
            'requireApplicationCachedRoutes' => [
                'name' => 'requireApplicationCachedRoutes',
                'parameters' => [
                    'files' => [
                        'name' => 'files',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Filesystem\\Filesystem',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 172,
                        'endLine' => 172,
                        'startColumn' => 55,
                        'endColumn' => 71,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'cached' => [
                        'name' => 'cached',
                        'default' => null,
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
                        'startLine' => 172,
                        'endLine' => 172,
                        'startColumn' => 74,
                        'endColumn' => 85,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'void',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Require application cached routes.
 *
 * @internal
 *
 * @param  \\Illuminate\\Filesystem\\Filesystem  $files
 * @return void
 */',
                'startLine' => 172,
                'endLine' => 202,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Orchestra\\Testbench\\Concerns',
                'declaringClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesRoutes',
                'implementingClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesRoutes',
                'currentClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesRoutes',
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
