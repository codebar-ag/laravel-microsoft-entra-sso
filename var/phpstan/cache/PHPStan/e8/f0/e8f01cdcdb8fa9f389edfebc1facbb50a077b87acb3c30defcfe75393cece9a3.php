<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Database/Schema/Builder.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Schema\Builder
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-758bed354739cc8cb4fcc80b18302d1131d7edb6902ad18a32e45b609a806556-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Schema\\Builder',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Database/Schema/Builder.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Schema',
        'name' => 'Illuminate\\Database\\Schema\\Builder',
        'shortName' => 'Builder',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 14,
        'endLine' => 776,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Support\\Traits\\Macroable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'connection' => [
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'name' => 'connection',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The database connection instance.
 *
 * @var \\Illuminate\\Database\\Connection
 */',
                'attributes' => [
                ],
                'startLine' => 23,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 26,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'grammar' => [
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'name' => 'grammar',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The schema grammar instance.
 *
 * @var \\Illuminate\\Database\\Schema\\Grammars\\Grammar
 */',
                'attributes' => [
                ],
                'startLine' => 30,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'resolver' => [
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'name' => 'resolver',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The Blueprint resolver callback.
 *
 * @var \\Closure(\\Illuminate\\Database\\Connection, string, \\Closure|null): \\Illuminate\\Database\\Schema\\Blueprint
 */',
                'attributes' => [
                ],
                'startLine' => 37,
                'endLine' => 37,
                'startColumn' => 5,
                'endColumn' => 24,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'defaultStringLength' => [
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'name' => 'defaultStringLength',
                'modifiers' => 17,
                'type' => null,
                'default' => [
                    'code' => '255',
                    'attributes' => [
                        'startLine' => 44,
                        'endLine' => 44,
                        'startTokenPos' => 89,
                        'startFilePos' => 954,
                        'endTokenPos' => 89,
                        'endFilePos' => 956,
                    ],
                ],
                'docComment' => '/**
 * The default string length for migrations.
 *
 * @var non-negative-int|null
 */',
                'attributes' => [
                ],
                'startLine' => 44,
                'endLine' => 44,
                'startColumn' => 5,
                'endColumn' => 45,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'defaultTimePrecision' => [
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'name' => 'defaultTimePrecision',
                'modifiers' => 17,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'int',
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
                'default' => [
                    'code' => '0',
                    'attributes' => [
                        'startLine' => 49,
                        'endLine' => 49,
                        'startTokenPos' => 105,
                        'startFilePos' => 1073,
                        'endTokenPos' => 105,
                        'endFilePos' => 1073,
                    ],
                ],
                'docComment' => '/**
 * The default time precision for migrations.
 */',
                'attributes' => [
                ],
                'startLine' => 49,
                'endLine' => 49,
                'startColumn' => 5,
                'endColumn' => 49,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'defaultMorphKeyType' => [
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'name' => 'defaultMorphKeyType',
                'modifiers' => 17,
                'type' => null,
                'default' => [
                    'code' => '\'int\'',
                    'attributes' => [
                        'startLine' => 56,
                        'endLine' => 56,
                        'startTokenPos' => 118,
                        'startFilePos' => 1221,
                        'endTokenPos' => 118,
                        'endFilePos' => 1225,
                    ],
                ],
                'docComment' => '/**
 * The default relationship morph key type.
 *
 * @var \'int\'|\'uuid\'|\'ulid\'
 */',
                'attributes' => [
                ],
                'startLine' => 56,
                'endLine' => 56,
                'startColumn' => 5,
                'endColumn' => 47,
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
                    'connection' => [
                        'name' => 'connection',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Connection',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 63,
                        'endLine' => 63,
                        'startColumn' => 33,
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
 * Create a new database Schema manager.
 *
 * @param  \\Illuminate\\Database\\Connection  $connection
 */',
                'startLine' => 63,
                'endLine' => 67,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'defaultStringLength' => [
                'name' => 'defaultStringLength',
                'parameters' => [
                    'length' => [
                        'name' => 'length',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 75,
                        'endLine' => 75,
                        'startColumn' => 48,
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
 * Set the default string length for migrations.
 *
 * @param  non-negative-int  $length
 * @return void
 */',
                'startLine' => 75,
                'endLine' => 78,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'defaultTimePrecision' => [
                'name' => 'defaultTimePrecision',
                'parameters' => [
                    'precision' => [
                        'name' => 'precision',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'int',
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
                        'startLine' => 83,
                        'endLine' => 83,
                        'startColumn' => 49,
                        'endColumn' => 63,
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
 * Set the default time precision for migrations.
 */',
                'startLine' => 83,
                'endLine' => 86,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'defaultMorphKeyType' => [
                'name' => 'defaultMorphKeyType',
                'parameters' => [
                    'type' => [
                        'name' => 'type',
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
                        'startLine' => 96,
                        'endLine' => 96,
                        'startColumn' => 48,
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
 * Set the default morph key type for migrations.
 *
 * @param  string  $type
 * @return void
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 96,
                'endLine' => 103,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'morphUsingUuids' => [
                'name' => 'morphUsingUuids',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the default morph key type for migrations to UUIDs.
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
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'morphUsingUlids' => [
                'name' => 'morphUsingUlids',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the default morph key type for migrations to ULIDs.
 *
 * @return void
 */',
                'startLine' => 120,
                'endLine' => 123,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
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
                        'startLine' => 131,
                        'endLine' => 131,
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
                'startLine' => 131,
                'endLine' => 136,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
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
                        'startLine' => 144,
                        'endLine' => 144,
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
                'startLine' => 144,
                'endLine' => 149,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'getSchemas' => [
                'name' => 'getSchemas',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the schemas that belong to the connection.
 *
 * @return list<array{name: string, path: string|null, default: bool}>
 */',
                'startLine' => 156,
                'endLine' => 161,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'hasTable' => [
                'name' => 'hasTable',
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
                        'startLine' => 169,
                        'endLine' => 169,
                        'startColumn' => 30,
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
 * Determine if the given table exists.
 *
 * @param  string  $table
 * @return bool
 */',
                'startLine' => 169,
                'endLine' => 186,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'hasView' => [
                'name' => 'hasView',
                'parameters' => [
                    'view' => [
                        'name' => 'view',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 194,
                        'endLine' => 194,
                        'startColumn' => 29,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the given view exists.
 *
 * @param  string  $view
 * @return bool
 */',
                'startLine' => 194,
                'endLine' => 207,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
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
                                'startLine' => 215,
                                'endLine' => 215,
                                'startTokenPos' => 711,
                                'startFilePos' => 5358,
                                'endTokenPos' => 711,
                                'endFilePos' => 5361,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 215,
                        'endLine' => 215,
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
                'docComment' => '/**
 * Get the tables that belong to the connection.
 *
 * @param  string|string[]|null  $schema
 * @return list<array{name: string, schema: string|null, schema_qualified_name: string, size: int|null, comment: string|null, collation: string|null, engine: string|null}>
 */',
                'startLine' => 215,
                'endLine' => 220,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'getTableListing' => [
                'name' => 'getTableListing',
                'parameters' => [
                    'schema' => [
                        'name' => 'schema',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 229,
                                'endLine' => 229,
                                'startTokenPos' => 762,
                                'startFilePos' => 5800,
                                'endTokenPos' => 762,
                                'endFilePos' => 5803,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 229,
                        'endLine' => 229,
                        'startColumn' => 37,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'schemaQualified' => [
                        'name' => 'schemaQualified',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 229,
                                'endLine' => 229,
                                'startTokenPos' => 769,
                                'startFilePos' => 5825,
                                'endTokenPos' => 769,
                                'endFilePos' => 5828,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 229,
                        'endLine' => 229,
                        'startColumn' => 53,
                        'endColumn' => 75,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the names of the tables that belong to the connection.
 *
 * @param  string|string[]|null  $schema
 * @param  bool  $schemaQualified
 * @return list<string>
 */',
                'startLine' => 229,
                'endLine' => 235,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
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
                                'startLine' => 243,
                                'endLine' => 243,
                                'startTokenPos' => 814,
                                'startFilePos' => 6259,
                                'endTokenPos' => 814,
                                'endFilePos' => 6262,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 243,
                        'endLine' => 243,
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
                'docComment' => '/**
 * Get the views that belong to the connection.
 *
 * @param  string|string[]|null  $schema
 * @return list<array{name: string, schema: string|null, schema_qualified_name: string, definition: string}>
 */',
                'startLine' => 243,
                'endLine' => 248,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'getTypes' => [
                'name' => 'getTypes',
                'parameters' => [
                    'schema' => [
                        'name' => 'schema',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 256,
                                'endLine' => 256,
                                'startTokenPos' => 865,
                                'startFilePos' => 6744,
                                'endTokenPos' => 865,
                                'endFilePos' => 6747,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 256,
                        'endLine' => 256,
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
                'docComment' => '/**
 * Get the user-defined types that belong to the connection.
 *
 * @param  string|string[]|null  $schema
 * @return list<array{name: string, schema: string, type: string, type: string, category: string, implicit: bool}>
 */',
                'startLine' => 256,
                'endLine' => 261,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'hasColumn' => [
                'name' => 'hasColumn',
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
                        'startLine' => 270,
                        'endLine' => 270,
                        'startColumn' => 31,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 270,
                        'endLine' => 270,
                        'startColumn' => 39,
                        'endColumn' => 45,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the given table has a given column.
 *
 * @param  string  $table
 * @param  string  $column
 * @return bool
 */',
                'startLine' => 270,
                'endLine' => 275,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'hasColumns' => [
                'name' => 'hasColumns',
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
                        'startLine' => 284,
                        'endLine' => 284,
                        'startColumn' => 32,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'columns' => [
                        'name' => 'columns',
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
                        'startLine' => 284,
                        'endLine' => 284,
                        'startColumn' => 40,
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
 * Determine if the given table has given columns.
 *
 * @param  string  $table
 * @param  array<string>  $columns
 * @return bool
 */',
                'startLine' => 284,
                'endLine' => 295,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'whenTableHasColumn' => [
                'name' => 'whenTableHasColumn',
                'parameters' => [
                    'table' => [
                        'name' => 'table',
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
                        'startLine' => 305,
                        'endLine' => 305,
                        'startColumn' => 40,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'column' => [
                        'name' => 'column',
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
                        'startLine' => 305,
                        'endLine' => 305,
                        'startColumn' => 55,
                        'endColumn' => 68,
                        'parameterIndex' => 1,
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
                        'startLine' => 305,
                        'endLine' => 305,
                        'startColumn' => 71,
                        'endColumn' => 87,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute a table builder callback if the given table has a given column.
 *
 * @param  string  $table
 * @param  string  $column
 * @param  \\Closure  $callback
 * @return void
 */',
                'startLine' => 305,
                'endLine' => 310,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'whenTableDoesntHaveColumn' => [
                'name' => 'whenTableDoesntHaveColumn',
                'parameters' => [
                    'table' => [
                        'name' => 'table',
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
                        'startLine' => 320,
                        'endLine' => 320,
                        'startColumn' => 47,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'column' => [
                        'name' => 'column',
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
                        'startLine' => 320,
                        'endLine' => 320,
                        'startColumn' => 62,
                        'endColumn' => 75,
                        'parameterIndex' => 1,
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
                        'startLine' => 320,
                        'endLine' => 320,
                        'startColumn' => 78,
                        'endColumn' => 94,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute a table builder callback if the given table doesn\'t have a given column.
 *
 * @param  string  $table
 * @param  string  $column
 * @param  \\Closure  $callback
 * @return void
 */',
                'startLine' => 320,
                'endLine' => 325,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'whenTableHasIndex' => [
                'name' => 'whenTableHasIndex',
                'parameters' => [
                    'table' => [
                        'name' => 'table',
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
                        'startLine' => 336,
                        'endLine' => 336,
                        'startColumn' => 39,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'index' => [
                        'name' => 'index',
                        'default' => null,
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
                                            'name' => 'array',
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
                        'startLine' => 336,
                        'endLine' => 336,
                        'startColumn' => 54,
                        'endColumn' => 72,
                        'parameterIndex' => 1,
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
                        'startLine' => 336,
                        'endLine' => 336,
                        'startColumn' => 75,
                        'endColumn' => 91,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'type' => [
                        'name' => 'type',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 336,
                                'endLine' => 336,
                                'startTokenPos' => 1210,
                                'startFilePos' => 9087,
                                'endTokenPos' => 1210,
                                'endFilePos' => 9090,
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
                        'startLine' => 336,
                        'endLine' => 336,
                        'startColumn' => 94,
                        'endColumn' => 113,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute a table builder callback if the given table has a given index.
 *
 * @param  string  $table
 * @param  string|array  $index
 * @param  \\Closure  $callback
 * @param  string|null  $type
 * @return void
 */',
                'startLine' => 336,
                'endLine' => 341,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'whenTableDoesntHaveIndex' => [
                'name' => 'whenTableDoesntHaveIndex',
                'parameters' => [
                    'table' => [
                        'name' => 'table',
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
                        'startLine' => 352,
                        'endLine' => 352,
                        'startColumn' => 46,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'index' => [
                        'name' => 'index',
                        'default' => null,
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
                                            'name' => 'array',
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
                        'startLine' => 352,
                        'endLine' => 352,
                        'startColumn' => 61,
                        'endColumn' => 79,
                        'parameterIndex' => 1,
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
                        'startLine' => 352,
                        'endLine' => 352,
                        'startColumn' => 82,
                        'endColumn' => 98,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'type' => [
                        'name' => 'type',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 352,
                                'endLine' => 352,
                                'startTokenPos' => 1294,
                                'startFilePos' => 9629,
                                'endTokenPos' => 1294,
                                'endFilePos' => 9632,
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
                        'startLine' => 352,
                        'endLine' => 352,
                        'startColumn' => 101,
                        'endColumn' => 120,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute a table builder callback if the given table doesn\'t have a given index.
 *
 * @param  string  $table
 * @param  string|array  $index
 * @param  \\Closure  $callback
 * @param  string|null  $type
 * @return void
 */',
                'startLine' => 352,
                'endLine' => 357,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'getColumnType' => [
                'name' => 'getColumnType',
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
                        'startLine' => 367,
                        'endLine' => 367,
                        'startColumn' => 35,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 367,
                        'endLine' => 367,
                        'startColumn' => 43,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'fullDefinition' => [
                        'name' => 'fullDefinition',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 367,
                                'endLine' => 367,
                                'startTokenPos' => 1366,
                                'startFilePos' => 10056,
                                'endTokenPos' => 1366,
                                'endFilePos' => 10060,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 367,
                        'endLine' => 367,
                        'startColumn' => 52,
                        'endColumn' => 74,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the data type for the given column name.
 *
 * @param  string  $table
 * @param  string  $column
 * @param  bool  $fullDefinition
 * @return string
 */',
                'startLine' => 367,
                'endLine' => 378,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'getColumnListing' => [
                'name' => 'getColumnListing',
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
                        'startLine' => 386,
                        'endLine' => 386,
                        'startColumn' => 38,
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
 * Get the column listing for a given table.
 *
 * @param  string  $table
 * @return list<string>
 */',
                'startLine' => 386,
                'endLine' => 389,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
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
                        'startLine' => 397,
                        'endLine' => 397,
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
                'docComment' => '/**
 * Get the columns for a given table.
 *
 * @param  string  $table
 * @return list<array{name: string, type: string, type_name: string, nullable: bool, default: mixed, auto_increment: bool, comment: string|null, generation: array{type: string, expression: string|null}|null}>
 */',
                'startLine' => 397,
                'endLine' => 408,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'getIndexes' => [
                'name' => 'getIndexes',
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
                        'startLine' => 416,
                        'endLine' => 416,
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
                'docComment' => '/**
 * Get the indexes for a given table.
 *
 * @param  string  $table
 * @return list<array{name: string, columns: list<string>, type: string, unique: bool, primary: bool}>
 */',
                'startLine' => 416,
                'endLine' => 427,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'getIndexListing' => [
                'name' => 'getIndexListing',
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
                        'startLine' => 435,
                        'endLine' => 435,
                        'startColumn' => 37,
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
 * Get the names of the indexes for a given table.
 *
 * @param  string  $table
 * @return list<string>
 */',
                'startLine' => 435,
                'endLine' => 438,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'hasIndex' => [
                'name' => 'hasIndex',
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
                        'startLine' => 448,
                        'endLine' => 448,
                        'startColumn' => 30,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'index' => [
                        'name' => 'index',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 448,
                        'endLine' => 448,
                        'startColumn' => 38,
                        'endColumn' => 43,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'type' => [
                        'name' => 'type',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 448,
                                'endLine' => 448,
                                'startTokenPos' => 1705,
                                'startFilePos' => 12503,
                                'endTokenPos' => 1705,
                                'endFilePos' => 12506,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 448,
                        'endLine' => 448,
                        'startColumn' => 46,
                        'endColumn' => 57,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the given table has a given index.
 *
 * @param  string  $table
 * @param  string|array  $index
 * @param  string|null  $type
 * @return bool
 */',
                'startLine' => 448,
                'endLine' => 464,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'getForeignKeys' => [
                'name' => 'getForeignKeys',
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
                        'startLine' => 472,
                        'endLine' => 472,
                        'startColumn' => 36,
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
 * Get the foreign keys for a given table.
 *
 * @param  string  $table
 * @return array
 */',
                'startLine' => 472,
                'endLine' => 483,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'table' => [
                'name' => 'table',
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
                        'startLine' => 492,
                        'endLine' => 492,
                        'startColumn' => 27,
                        'endColumn' => 32,
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
                        'startLine' => 492,
                        'endLine' => 492,
                        'startColumn' => 35,
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
 * Modify a table on the schema.
 *
 * @param  string  $table
 * @param  \\Closure  $callback
 * @return void
 */',
                'startLine' => 492,
                'endLine' => 495,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'create' => [
                'name' => 'create',
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
                        'startLine' => 504,
                        'endLine' => 504,
                        'startColumn' => 28,
                        'endColumn' => 33,
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
                        'startLine' => 504,
                        'endLine' => 504,
                        'startColumn' => 36,
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
 * Create a new table on the schema.
 *
 * @param  string  $table
 * @param  \\Closure  $callback
 * @return void
 */',
                'startLine' => 504,
                'endLine' => 511,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'drop' => [
                'name' => 'drop',
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
                        'startLine' => 519,
                        'endLine' => 519,
                        'startColumn' => 26,
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
 * Drop a table from the schema.
 *
 * @param  string  $table
 * @return void
 */',
                'startLine' => 519,
                'endLine' => 524,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'dropIfExists' => [
                'name' => 'dropIfExists',
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
                        'startLine' => 532,
                        'endLine' => 532,
                        'startColumn' => 34,
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
 * Drop a table from the schema if it exists.
 *
 * @param  string  $table
 * @return void
 */',
                'startLine' => 532,
                'endLine' => 537,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'dropColumns' => [
                'name' => 'dropColumns',
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
                        'startLine' => 546,
                        'endLine' => 546,
                        'startColumn' => 33,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 546,
                        'endLine' => 546,
                        'startColumn' => 41,
                        'endColumn' => 48,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Drop columns from a table schema.
 *
 * @param  string  $table
 * @param  string|array<string>  $columns
 * @return void
 */',
                'startLine' => 546,
                'endLine' => 551,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
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
 *
 * @throws \\LogicException
 */',
                'startLine' => 560,
                'endLine' => 563,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
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
 *
 * @throws \\LogicException
 */',
                'startLine' => 572,
                'endLine' => 575,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'dropAllTypes' => [
                'name' => 'dropAllTypes',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Drop all types from the database.
 *
 * @return void
 *
 * @throws \\LogicException
 */',
                'startLine' => 584,
                'endLine' => 587,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'rename' => [
                'name' => 'rename',
                'parameters' => [
                    'from' => [
                        'name' => 'from',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 596,
                        'endLine' => 596,
                        'startColumn' => 28,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'to' => [
                        'name' => 'to',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 596,
                        'endLine' => 596,
                        'startColumn' => 35,
                        'endColumn' => 37,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Rename a table on the schema.
 *
 * @param  string  $from
 * @param  string  $to
 * @return void
 */',
                'startLine' => 596,
                'endLine' => 601,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'enableForeignKeyConstraints' => [
                'name' => 'enableForeignKeyConstraints',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Enable foreign key constraints.
 *
 * @return bool
 */',
                'startLine' => 608,
                'endLine' => 613,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'disableForeignKeyConstraints' => [
                'name' => 'disableForeignKeyConstraints',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Disable foreign key constraints.
 *
 * @return bool
 */',
                'startLine' => 620,
                'endLine' => 625,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'withoutForeignKeyConstraints' => [
                'name' => 'withoutForeignKeyConstraints',
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
                        'startLine' => 635,
                        'endLine' => 635,
                        'startColumn' => 50,
                        'endColumn' => 66,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Disable foreign key constraints during the execution of a callback.
 *
 * @template TReturn
 *
 * @param  (\\Closure(): TReturn)  $callback
 * @return TReturn
 */',
                'startLine' => 635,
                'endLine' => 644,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'ensureVectorExtensionExists' => [
                'name' => 'ensureVectorExtensionExists',
                'parameters' => [
                    'schema' => [
                        'name' => 'schema',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 652,
                                'endLine' => 652,
                                'startTokenPos' => 2449,
                                'startFilePos' => 17498,
                                'endTokenPos' => 2449,
                                'endFilePos' => 17501,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 652,
                        'endLine' => 652,
                        'startColumn' => 49,
                        'endColumn' => 62,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create the vector extension on the schema if it does not exist.
 *
 * @param  string|null  $schema
 * @return void
 */',
                'startLine' => 652,
                'endLine' => 655,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'ensureExtensionExists' => [
                'name' => 'ensureExtensionExists',
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
                        'startLine' => 664,
                        'endLine' => 664,
                        'startColumn' => 43,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'schema' => [
                        'name' => 'schema',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 664,
                                'endLine' => 664,
                                'startTokenPos' => 2482,
                                'startFilePos' => 17807,
                                'endTokenPos' => 2482,
                                'endFilePos' => 17810,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 664,
                        'endLine' => 664,
                        'startColumn' => 50,
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
 * Create a new extension on the schema if it does not exist.
 *
 * @param  string  $name
 * @param  string|null  $schema
 * @return void
 */',
                'startLine' => 664,
                'endLine' => 676,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'build' => [
                'name' => 'build',
                'parameters' => [
                    'blueprint' => [
                        'name' => 'blueprint',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Schema\\Blueprint',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 684,
                        'endLine' => 684,
                        'startColumn' => 30,
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
 * Execute the blueprint to build / modify the table.
 *
 * @param  \\Illuminate\\Database\\Schema\\Blueprint  $blueprint
 * @return void
 */',
                'startLine' => 684,
                'endLine' => 687,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'createBlueprint' => [
                'name' => 'createBlueprint',
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
                        'startLine' => 696,
                        'endLine' => 696,
                        'startColumn' => 40,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 696,
                                'endLine' => 696,
                                'startTokenPos' => 2645,
                                'startFilePos' => 18860,
                                'endTokenPos' => 2645,
                                'endFilePos' => 18863,
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
                        'startLine' => 696,
                        'endLine' => 696,
                        'startColumn' => 48,
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
 * Create a new command set with a Closure.
 *
 * @param  string  $table
 * @param  \\Closure|null  $callback
 * @return \\Illuminate\\Database\\Schema\\Blueprint
 */',
                'startLine' => 696,
                'endLine' => 705,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
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
 * Get the names of the current schemas for the connection.
 *
 * @return string[]|null
 */',
                'startLine' => 712,
                'endLine' => 715,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'getCurrentSchemaName' => [
                'name' => 'getCurrentSchemaName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the default schema name for the connection.
 *
 * @return string|null
 */',
                'startLine' => 722,
                'endLine' => 725,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'parseSchemaAndTable' => [
                'name' => 'parseSchemaAndTable',
                'parameters' => [
                    'reference' => [
                        'name' => 'reference',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 734,
                        'endLine' => 734,
                        'startColumn' => 41,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'withDefaultSchema' => [
                        'name' => 'withDefaultSchema',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 734,
                                'endLine' => 734,
                                'startTokenPos' => 2787,
                                'startFilePos' => 19887,
                                'endTokenPos' => 2787,
                                'endFilePos' => 19890,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 734,
                        'endLine' => 734,
                        'startColumn' => 53,
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
 * Parse the given database object reference and extract the schema and table.
 *
 * @param  string  $reference
 * @param  string|bool|null  $withDefaultSchema
 * @return array{string|null, string}
 */',
                'startLine' => 734,
                'endLine' => 754,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'getConnection' => [
                'name' => 'getConnection',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the database connection instance.
 *
 * @return \\Illuminate\\Database\\Connection
 */',
                'startLine' => 761,
                'endLine' => 764,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'aliasName' => null,
            ],
            'blueprintResolver' => [
                'name' => 'blueprintResolver',
                'parameters' => [
                    'resolver' => [
                        'name' => 'resolver',
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
                        'startLine' => 772,
                        'endLine' => 772,
                        'startColumn' => 39,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the Schema Blueprint resolver callback.
 *
 * @param  \\Closure(\\Illuminate\\Database\\Connection, string, \\Closure|null): \\Illuminate\\Database\\Schema\\Blueprint  $resolver
 * @return void
 */',
                'startLine' => 772,
                'endLine' => 775,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Builder',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Builder',
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
