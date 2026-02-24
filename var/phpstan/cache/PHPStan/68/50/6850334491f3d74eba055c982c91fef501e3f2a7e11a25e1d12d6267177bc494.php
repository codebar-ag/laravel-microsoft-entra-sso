<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Database/Schema/SQLiteBuilder.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Schema\SQLiteBuilder
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-32ec0ac434c065225709d3a05affe378463d8d37bab82ae1b8c55affbd7008b6-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Database/Schema/SQLiteBuilder.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Schema',
        'name' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
        'shortName' => 'SQLiteBuilder',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 9,
        'endLine' => 173,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Illuminate\\Database\\Schema\\Builder',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'createDatabase' => [
                'name' => 'createDatabase',
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
                        'startLine' => 17,
                        'endLine' => 17,
                        'startColumn' => 36,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a database in the schema.
 *
 * @param  string  $name
 * @return bool
 */',
                'startLine' => 17,
                'endLine' => 20,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'aliasName' => null,
            ],
            'dropDatabaseIfExists' => [
                'name' => 'dropDatabaseIfExists',
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
                        'startLine' => 28,
                        'endLine' => 28,
                        'startColumn' => 42,
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
 * Drop a database from the schema if the database exists.
 *
 * @param  string  $name
 * @return bool
 */',
                'startLine' => 28,
                'endLine' => 31,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'aliasName' => null,
            ],
            'getTables' => [
                'name' => 'getTables',
                'parameters' => [
                    'schema' => [
                        'name' => 'schema',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 34,
                                'endLine' => 34,
                                'startTokenPos' => 112,
                                'startFilePos' => 724,
                                'endTokenPos' => 112,
                                'endFilePos' => 727,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 34,
                        'endLine' => 34,
                        'startColumn' => 31,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/** @inheritDoc */',
                'startLine' => 34,
                'endLine' => 61,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'aliasName' => null,
            ],
            'getViews' => [
                'name' => 'getViews',
                'parameters' => [
                    'schema' => [
                        'name' => 'schema',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 64,
                                'endLine' => 64,
                                'startTokenPos' => 328,
                                'startFilePos' => 1731,
                                'endTokenPos' => 328,
                                'endFilePos' => 1734,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 64,
                        'endLine' => 64,
                        'startColumn' => 30,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/** @inheritDoc */',
                'startLine' => 64,
                'endLine' => 77,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'aliasName' => null,
            ],
            'getColumns' => [
                'name' => 'getColumns',
                'parameters' => [
                    'table' => [
                        'name' => 'table',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 80,
                        'endLine' => 80,
                        'startColumn' => 32,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/** @inheritDoc */',
                'startLine' => 80,
                'endLine' => 90,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'aliasName' => null,
            ],
            'dropAllTables' => [
                'name' => 'dropAllTables',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Drop all tables from the database.
 *
 * @return void
 */',
                'startLine' => 97,
                'endLine' => 119,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'aliasName' => null,
            ],
            'dropAllViews' => [
                'name' => 'dropAllViews',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Drop all views from the database.
 *
 * @return void
 */',
                'startLine' => 126,
                'endLine' => 137,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'aliasName' => null,
            ],
            'pragma' => [
                'name' => 'pragma',
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
                        'startLine' => 146,
                        'endLine' => 146,
                        'startColumn' => 28,
                        'endColumn' => 31,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 146,
                                'endLine' => 146,
                                'startTokenPos' => 818,
                                'startFilePos' => 4265,
                                'endTokenPos' => 818,
                                'endFilePos' => 4268,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 146,
                        'endLine' => 146,
                        'startColumn' => 34,
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
 * Get the value for the given pragma name or set the given value.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @return mixed
 */',
                'startLine' => 146,
                'endLine' => 151,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'aliasName' => null,
            ],
            'refreshDatabaseFile' => [
                'name' => 'refreshDatabaseFile',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 159,
                                'endLine' => 159,
                                'startTokenPos' => 884,
                                'startFilePos' => 4624,
                                'endTokenPos' => 884,
                                'endFilePos' => 4627,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 159,
                        'endLine' => 159,
                        'startColumn' => 41,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Empty the database file.
 *
 * @param  string|null  $path
 * @return void
 */',
                'startLine' => 159,
                'endLine' => 162,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'aliasName' => null,
            ],
            'getCurrentSchemaListing' => [
                'name' => 'getCurrentSchemaListing',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the names of current schemas for the connection.
 *
 * @return string[]|null
 */',
                'startLine' => 169,
                'endLine' => 172,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\SQLiteBuilder',
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
