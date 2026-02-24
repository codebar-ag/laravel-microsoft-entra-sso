<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../orchestra/testbench-core/src/Concerns/HandlesDatabases.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Orchestra\Testbench\Concerns\HandlesDatabases
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-997c61f20b2f53189b857020d65ab5b680056461233de4fdd0c02e8889271429-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Orchestra\\Testbench\\Concerns\\HandlesDatabases',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../orchestra/testbench-core/src/Concerns/HandlesDatabases.php',
            ],
        ],
        'namespace' => 'Orchestra\\Testbench\\Concerns',
        'name' => 'Orchestra\\Testbench\\Concerns\\HandlesDatabases',
        'shortName' => 'HandlesDatabases',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @internal
 */',
        'attributes' => [
        ],
        'startLine' => 17,
        'endLine' => 150,
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
            'setUpDatabaseRequirements' => [
                'name' => 'setUpDatabaseRequirements',
                'parameters' => [
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
                        'startLine' => 26,
                        'endLine' => 26,
                        'startColumn' => 50,
                        'endColumn' => 66,
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
 * Setup database requirements.
 *
 * @internal
 *
 * @param  \\Closure():void  $callback
 */',
                'startLine' => 26,
                'endLine' => 71,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Orchestra\\Testbench\\Concerns',
                'declaringClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesDatabases',
                'implementingClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesDatabases',
                'currentClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesDatabases',
                'aliasName' => null,
            ],
            'usesSqliteInMemoryDatabaseConnection' => [
                'name' => 'usesSqliteInMemoryDatabaseConnection',
                'parameters' => [
                    'connection' => [
                        'name' => 'connection',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 81,
                                'endLine' => 81,
                                'startTokenPos' => 440,
                                'startFilePos' => 2650,
                                'endTokenPos' => 440,
                                'endFilePos' => 2653,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
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
                        'startLine' => 81,
                        'endLine' => 81,
                        'startColumn' => 61,
                        'endColumn' => 86,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if using in-memory SQLite database connection
 *
 * @api
 *
 * @param  string|null  $connection
 * @return bool
 */',
                'startLine' => 81,
                'endLine' => 101,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Orchestra\\Testbench\\Concerns',
                'declaringClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesDatabases',
                'implementingClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesDatabases',
                'currentClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesDatabases',
                'aliasName' => null,
            ],
            'defineDatabaseMigrations' => [
                'name' => 'defineDatabaseMigrations',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Define database migrations.
 *
 * @api
 *
 * @return void
 */',
                'startLine' => 110,
                'endLine' => 113,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Orchestra\\Testbench\\Concerns',
                'declaringClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesDatabases',
                'implementingClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesDatabases',
                'currentClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesDatabases',
                'aliasName' => null,
            ],
            'defineDatabaseMigrationsAfterDatabaseRefreshed' => [
                'name' => 'defineDatabaseMigrationsAfterDatabaseRefreshed',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Define database migrations after database refreshed.
 *
 * @api
 *
 * @return void
 */',
                'startLine' => 122,
                'endLine' => 125,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Orchestra\\Testbench\\Concerns',
                'declaringClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesDatabases',
                'implementingClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesDatabases',
                'currentClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesDatabases',
                'aliasName' => null,
            ],
            'destroyDatabaseMigrations' => [
                'name' => 'destroyDatabaseMigrations',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Destroy database migrations.
 *
 * @api
 *
 * @return void
 */',
                'startLine' => 134,
                'endLine' => 137,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Orchestra\\Testbench\\Concerns',
                'declaringClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesDatabases',
                'implementingClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesDatabases',
                'currentClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesDatabases',
                'aliasName' => null,
            ],
            'defineDatabaseSeeders' => [
                'name' => 'defineDatabaseSeeders',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Define database seeders.
 *
 * @api
 *
 * @return void
 */',
                'startLine' => 146,
                'endLine' => 149,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Orchestra\\Testbench\\Concerns',
                'declaringClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesDatabases',
                'implementingClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesDatabases',
                'currentClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesDatabases',
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
