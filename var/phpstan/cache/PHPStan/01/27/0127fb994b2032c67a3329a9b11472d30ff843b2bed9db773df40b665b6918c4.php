<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Database/Schema/Blueprint.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Schema\Blueprint
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-5053cf9356fbfd10e55019473e5817392aecbb36f074a7b4a54b19c7426cfacb-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Schema\\Blueprint',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Database/Schema/Blueprint.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Schema',
        'name' => 'Illuminate\\Database\\Schema\\Blueprint',
        'shortName' => 'Blueprint',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 18,
        'endLine' => 1974,
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
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'name' => 'connection',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Database\\Connection',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => '/**
 * The database connection instance.
 */',
                'attributes' => [
                ],
                'startLine' => 25,
                'endLine' => 25,
                'startColumn' => 5,
                'endColumn' => 37,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'grammar' => [
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'name' => 'grammar',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Database\\Schema\\Grammars\\Grammar',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => '/**
 * The schema grammar instance.
 */',
                'attributes' => [
                ],
                'startLine' => 30,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 31,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'table' => [
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'name' => 'table',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The table the blueprint describes.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 37,
                'endLine' => 37,
                'startColumn' => 5,
                'endColumn' => 21,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'columns' => [
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'name' => 'columns',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 44,
                        'endLine' => 44,
                        'startTokenPos' => 108,
                        'startFilePos' => 987,
                        'endTokenPos' => 109,
                        'endFilePos' => 988,
                    ],
                ],
                'docComment' => '/**
 * The columns that should be added to the table.
 *
 * @var \\Illuminate\\Database\\Schema\\ColumnDefinition[]
 */',
                'attributes' => [
                ],
                'startLine' => 44,
                'endLine' => 44,
                'startColumn' => 5,
                'endColumn' => 28,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'commands' => [
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'name' => 'commands',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 51,
                        'endLine' => 51,
                        'startTokenPos' => 120,
                        'startFilePos' => 1136,
                        'endTokenPos' => 121,
                        'endFilePos' => 1137,
                    ],
                ],
                'docComment' => '/**
 * The commands that should be run for the table.
 *
 * @var \\Illuminate\\Support\\Fluent[]
 */',
                'attributes' => [
                ],
                'startLine' => 51,
                'endLine' => 51,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'engine' => [
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'name' => 'engine',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The storage engine that should be used for the table.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 58,
                'endLine' => 58,
                'startColumn' => 5,
                'endColumn' => 19,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'charset' => [
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'name' => 'charset',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The default character set that should be used for the table.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 65,
                'endLine' => 65,
                'startColumn' => 5,
                'endColumn' => 20,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'collation' => [
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'name' => 'collation',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The collation that should be used for the table.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 72,
                'endLine' => 72,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'temporary' => [
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'name' => 'temporary',
                'modifiers' => 1,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 79,
                        'endLine' => 79,
                        'startTokenPos' => 153,
                        'startFilePos' => 1627,
                        'endTokenPos' => 153,
                        'endFilePos' => 1631,
                    ],
                ],
                'docComment' => '/**
 * Whether to make the table temporary.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 79,
                'endLine' => 79,
                'startColumn' => 5,
                'endColumn' => 30,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'after' => [
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'name' => 'after',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The column to add new columns after.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 86,
                'endLine' => 86,
                'startColumn' => 5,
                'endColumn' => 18,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'state' => [
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'name' => 'state',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The blueprint state instance.
 *
 * @var \\Illuminate\\Database\\Schema\\BlueprintState|null
 */',
                'attributes' => [
                ],
                'startLine' => 93,
                'endLine' => 93,
                'startColumn' => 5,
                'endColumn' => 21,
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
                        'startLine' => 102,
                        'endLine' => 102,
                        'startColumn' => 33,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'table' => [
                        'name' => 'table',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 102,
                        'endLine' => 102,
                        'startColumn' => 57,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 102,
                                'endLine' => 102,
                                'startTokenPos' => 193,
                                'startFilePos' => 2174,
                                'endTokenPos' => 193,
                                'endFilePos' => 2177,
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
                        'startLine' => 102,
                        'endLine' => 102,
                        'startColumn' => 65,
                        'endColumn' => 89,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new schema blueprint.
 *
 * @param  \\Illuminate\\Database\\Connection  $connection
 * @param  string  $table
 * @param  (\\Closure(self): void)|null  $callback
 */',
                'startLine' => 102,
                'endLine' => 111,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'build' => [
                'name' => 'build',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the blueprint against the database.
 *
 * @return void
 */',
                'startLine' => 118,
                'endLine' => 123,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'toSql' => [
                'name' => 'toSql',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the raw SQL statements for the blueprint.
 *
 * @return array
 */',
                'startLine' => 130,
                'endLine' => 160,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'ensureCommandsAreValid' => [
                'name' => 'ensureCommandsAreValid',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Ensure the commands on the blueprint are valid for the connection type.
 *
 * @return void
 *
 * @throws \\BadMethodCallException
 */',
                'startLine' => 169,
                'endLine' => 172,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'commandsNamed' => [
                'name' => 'commandsNamed',
                'parameters' => [
                    'names' => [
                        'name' => 'names',
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
                        'startLine' => 182,
                        'endLine' => 182,
                        'startColumn' => 38,
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
 * Get all of the commands matching the given names.
 *
 * @deprecated Will be removed in a future Laravel version.
 *
 * @param  array  $names
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 182,
                'endLine' => 186,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'addImpliedCommands' => [
                'name' => 'addImpliedCommands',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add the commands that are implied by the blueprint\'s state.
 *
 * @return void
 */',
                'startLine' => 193,
                'endLine' => 208,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'addFluentIndexes' => [
                'name' => 'addFluentIndexes',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add the index commands fluently specified on columns.
 *
 * @return void
 */',
                'startLine' => 215,
                'endLine' => 265,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'addFluentCommands' => [
                'name' => 'addFluentCommands',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add the fluent commands specified on any columns.
 *
 * @return void
 */',
                'startLine' => 272,
                'endLine' => 279,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'addAlterCommands' => [
                'name' => 'addAlterCommands',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add the alter commands if whenever needed.
 *
 * @return void
 */',
                'startLine' => 286,
                'endLine' => 319,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'creating' => [
                'name' => 'creating',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the blueprint has a create command.
 *
 * @return bool
 */',
                'startLine' => 326,
                'endLine' => 330,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'create' => [
                'name' => 'create',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that the table needs to be created.
 *
 * @return \\Illuminate\\Support\\Fluent
 */',
                'startLine' => 337,
                'endLine' => 340,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'engine' => [
                'name' => 'engine',
                'parameters' => [
                    'engine' => [
                        'name' => 'engine',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 348,
                        'endLine' => 348,
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
 * Specify the storage engine that should be used for the table.
 *
 * @param  string  $engine
 * @return void
 */',
                'startLine' => 348,
                'endLine' => 351,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'innoDb' => [
                'name' => 'innoDb',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Specify that the InnoDB storage engine should be used for the table (MySQL only).
 *
 * @return void
 */',
                'startLine' => 358,
                'endLine' => 361,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'charset' => [
                'name' => 'charset',
                'parameters' => [
                    'charset' => [
                        'name' => 'charset',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 369,
                        'endLine' => 369,
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
 * Specify the character set that should be used for the table.
 *
 * @param  string  $charset
 * @return void
 */',
                'startLine' => 369,
                'endLine' => 372,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'collation' => [
                'name' => 'collation',
                'parameters' => [
                    'collation' => [
                        'name' => 'collation',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 380,
                        'endLine' => 380,
                        'startColumn' => 31,
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
 * Specify the collation that should be used for the table.
 *
 * @param  string  $collation
 * @return void
 */',
                'startLine' => 380,
                'endLine' => 383,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'temporary' => [
                'name' => 'temporary',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that the table needs to be temporary.
 *
 * @return void
 */',
                'startLine' => 390,
                'endLine' => 393,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'drop' => [
                'name' => 'drop',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that the table should be dropped.
 *
 * @return \\Illuminate\\Support\\Fluent
 */',
                'startLine' => 400,
                'endLine' => 403,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'dropIfExists' => [
                'name' => 'dropIfExists',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that the table should be dropped if it exists.
 *
 * @return \\Illuminate\\Support\\Fluent
 */',
                'startLine' => 410,
                'endLine' => 413,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'dropColumn' => [
                'name' => 'dropColumn',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 421,
                        'endLine' => 421,
                        'startColumn' => 32,
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
 * Indicate that the given columns should be dropped.
 *
 * @param  mixed  $columns
 * @return \\Illuminate\\Support\\Fluent
 */',
                'startLine' => 421,
                'endLine' => 426,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'renameColumn' => [
                'name' => 'renameColumn',
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
                        'startLine' => 435,
                        'endLine' => 435,
                        'startColumn' => 34,
                        'endColumn' => 38,
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
                        'startLine' => 435,
                        'endLine' => 435,
                        'startColumn' => 41,
                        'endColumn' => 43,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that the given columns should be renamed.
 *
 * @param  string  $from
 * @param  string  $to
 * @return \\Illuminate\\Support\\Fluent
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
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'dropPrimary' => [
                'name' => 'dropPrimary',
                'parameters' => [
                    'index' => [
                        'name' => 'index',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 446,
                                'endLine' => 446,
                                'startTokenPos' => 1646,
                                'startFilePos' => 11922,
                                'endTokenPos' => 1646,
                                'endFilePos' => 11925,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 446,
                        'endLine' => 446,
                        'startColumn' => 33,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that the given primary key should be dropped.
 *
 * @param  string|array|null  $index
 * @return \\Illuminate\\Support\\Fluent
 */',
                'startLine' => 446,
                'endLine' => 449,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'dropUnique' => [
                'name' => 'dropUnique',
                'parameters' => [
                    'index' => [
                        'name' => 'index',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 457,
                        'endLine' => 457,
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
 * Indicate that the given unique key should be dropped.
 *
 * @param  string|array  $index
 * @return \\Illuminate\\Support\\Fluent
 */',
                'startLine' => 457,
                'endLine' => 460,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'dropIndex' => [
                'name' => 'dropIndex',
                'parameters' => [
                    'index' => [
                        'name' => 'index',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 468,
                        'endLine' => 468,
                        'startColumn' => 31,
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
 * Indicate that the given index should be dropped.
 *
 * @param  string|array  $index
 * @return \\Illuminate\\Support\\Fluent
 */',
                'startLine' => 468,
                'endLine' => 471,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'dropFullText' => [
                'name' => 'dropFullText',
                'parameters' => [
                    'index' => [
                        'name' => 'index',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 479,
                        'endLine' => 479,
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
 * Indicate that the given fulltext index should be dropped.
 *
 * @param  string|array  $index
 * @return \\Illuminate\\Support\\Fluent
 */',
                'startLine' => 479,
                'endLine' => 482,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'dropSpatialIndex' => [
                'name' => 'dropSpatialIndex',
                'parameters' => [
                    'index' => [
                        'name' => 'index',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 490,
                        'endLine' => 490,
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
 * Indicate that the given spatial index should be dropped.
 *
 * @param  string|array  $index
 * @return \\Illuminate\\Support\\Fluent
 */',
                'startLine' => 490,
                'endLine' => 493,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'dropForeign' => [
                'name' => 'dropForeign',
                'parameters' => [
                    'index' => [
                        'name' => 'index',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 501,
                        'endLine' => 501,
                        'startColumn' => 33,
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
 * Indicate that the given foreign key should be dropped.
 *
 * @param  string|array  $index
 * @return \\Illuminate\\Support\\Fluent
 */',
                'startLine' => 501,
                'endLine' => 504,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'dropConstrainedForeignId' => [
                'name' => 'dropConstrainedForeignId',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 512,
                        'endLine' => 512,
                        'startColumn' => 46,
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
 * Indicate that the given column and foreign key should be dropped.
 *
 * @param  string  $column
 * @return \\Illuminate\\Support\\Fluent
 */',
                'startLine' => 512,
                'endLine' => 517,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'dropForeignIdFor' => [
                'name' => 'dropForeignIdFor',
                'parameters' => [
                    'model' => [
                        'name' => 'model',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 526,
                        'endLine' => 526,
                        'startColumn' => 38,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 526,
                                'endLine' => 526,
                                'startTokenPos' => 1874,
                                'startFilePos' => 14075,
                                'endTokenPos' => 1874,
                                'endFilePos' => 14078,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 526,
                        'endLine' => 526,
                        'startColumn' => 46,
                        'endColumn' => 59,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that the given foreign key should be dropped.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Model|string  $model
 * @param  string|null  $column
 * @return \\Illuminate\\Support\\Fluent
 */',
                'startLine' => 526,
                'endLine' => 533,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'dropConstrainedForeignIdFor' => [
                'name' => 'dropConstrainedForeignIdFor',
                'parameters' => [
                    'model' => [
                        'name' => 'model',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 542,
                        'endLine' => 542,
                        'startColumn' => 49,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 542,
                                'endLine' => 542,
                                'startTokenPos' => 1937,
                                'startFilePos' => 14536,
                                'endTokenPos' => 1937,
                                'endFilePos' => 14539,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 542,
                        'endLine' => 542,
                        'startColumn' => 57,
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
 * Indicate that the given foreign key should be dropped.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Model|string  $model
 * @param  string|null  $column
 * @return \\Illuminate\\Support\\Fluent
 */',
                'startLine' => 542,
                'endLine' => 549,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'renameIndex' => [
                'name' => 'renameIndex',
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
                        'startLine' => 558,
                        'endLine' => 558,
                        'startColumn' => 33,
                        'endColumn' => 37,
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
                        'startLine' => 558,
                        'endLine' => 558,
                        'startColumn' => 40,
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
 * Indicate that the given indexes should be renamed.
 *
 * @param  string  $from
 * @param  string  $to
 * @return \\Illuminate\\Support\\Fluent
 */',
                'startLine' => 558,
                'endLine' => 561,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'dropTimestamps' => [
                'name' => 'dropTimestamps',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that the timestamp columns should be dropped.
 *
 * @return void
 */',
                'startLine' => 568,
                'endLine' => 571,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'dropTimestampsTz' => [
                'name' => 'dropTimestampsTz',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that the timestamp columns should be dropped.
 *
 * @return void
 */',
                'startLine' => 578,
                'endLine' => 581,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'dropSoftDeletes' => [
                'name' => 'dropSoftDeletes',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => '\'deleted_at\'',
                            'attributes' => [
                                'startLine' => 589,
                                'endLine' => 589,
                                'startTokenPos' => 2080,
                                'startFilePos' => 15607,
                                'endTokenPos' => 2080,
                                'endFilePos' => 15618,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 589,
                        'endLine' => 589,
                        'startColumn' => 37,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that the soft delete column should be dropped.
 *
 * @param  string  $column
 * @return void
 */',
                'startLine' => 589,
                'endLine' => 592,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'dropSoftDeletesTz' => [
                'name' => 'dropSoftDeletesTz',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => '\'deleted_at\'',
                            'attributes' => [
                                'startLine' => 600,
                                'endLine' => 600,
                                'startTokenPos' => 2107,
                                'startFilePos' => 15855,
                                'endTokenPos' => 2107,
                                'endFilePos' => 15866,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 600,
                        'endLine' => 600,
                        'startColumn' => 39,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that the soft delete column should be dropped.
 *
 * @param  string  $column
 * @return void
 */',
                'startLine' => 600,
                'endLine' => 603,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'dropRememberToken' => [
                'name' => 'dropRememberToken',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that the remember token column should be dropped.
 *
 * @return void
 */',
                'startLine' => 610,
                'endLine' => 613,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'dropMorphs' => [
                'name' => 'dropMorphs',
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
                        'startLine' => 622,
                        'endLine' => 622,
                        'startColumn' => 32,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'indexName' => [
                        'name' => 'indexName',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 622,
                                'endLine' => 622,
                                'startTokenPos' => 2159,
                                'startFilePos' => 16356,
                                'endTokenPos' => 2159,
                                'endFilePos' => 16359,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 622,
                        'endLine' => 622,
                        'startColumn' => 39,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that the polymorphic columns should be dropped.
 *
 * @param  string  $name
 * @param  string|null  $indexName
 * @return void
 */',
                'startLine' => 622,
                'endLine' => 627,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'rename' => [
                'name' => 'rename',
                'parameters' => [
                    'to' => [
                        'name' => 'to',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 635,
                        'endLine' => 635,
                        'startColumn' => 28,
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
 * Rename the table to a given name.
 *
 * @param  string  $to
 * @return \\Illuminate\\Support\\Fluent
 */',
                'startLine' => 635,
                'endLine' => 638,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'primary' => [
                'name' => 'primary',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 648,
                        'endLine' => 648,
                        'startColumn' => 29,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'name' => [
                        'name' => 'name',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 648,
                                'endLine' => 648,
                                'startTokenPos' => 2269,
                                'startFilePos' => 17063,
                                'endTokenPos' => 2269,
                                'endFilePos' => 17066,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 648,
                        'endLine' => 648,
                        'startColumn' => 39,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'algorithm' => [
                        'name' => 'algorithm',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 648,
                                'endLine' => 648,
                                'startTokenPos' => 2276,
                                'startFilePos' => 17082,
                                'endTokenPos' => 2276,
                                'endFilePos' => 17085,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 648,
                        'endLine' => 648,
                        'startColumn' => 53,
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
 * Specify the primary key(s) for the table.
 *
 * @param  string|array  $columns
 * @param  string|null  $name
 * @param  string|null  $algorithm
 * @return \\Illuminate\\Database\\Schema\\IndexDefinition
 */',
                'startLine' => 648,
                'endLine' => 651,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'unique' => [
                'name' => 'unique',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 661,
                        'endLine' => 661,
                        'startColumn' => 28,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'name' => [
                        'name' => 'name',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 661,
                                'endLine' => 661,
                                'startTokenPos' => 2317,
                                'startFilePos' => 17460,
                                'endTokenPos' => 2317,
                                'endFilePos' => 17463,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 661,
                        'endLine' => 661,
                        'startColumn' => 38,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'algorithm' => [
                        'name' => 'algorithm',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 661,
                                'endLine' => 661,
                                'startTokenPos' => 2324,
                                'startFilePos' => 17479,
                                'endTokenPos' => 2324,
                                'endFilePos' => 17482,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 661,
                        'endLine' => 661,
                        'startColumn' => 52,
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
 * Specify a unique index for the table.
 *
 * @param  string|array  $columns
 * @param  string|null  $name
 * @param  string|null  $algorithm
 * @return \\Illuminate\\Database\\Schema\\IndexDefinition
 */',
                'startLine' => 661,
                'endLine' => 664,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'index' => [
                'name' => 'index',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 674,
                        'endLine' => 674,
                        'startColumn' => 27,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'name' => [
                        'name' => 'name',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 674,
                                'endLine' => 674,
                                'startTokenPos' => 2365,
                                'startFilePos' => 17849,
                                'endTokenPos' => 2365,
                                'endFilePos' => 17852,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 674,
                        'endLine' => 674,
                        'startColumn' => 37,
                        'endColumn' => 48,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'algorithm' => [
                        'name' => 'algorithm',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 674,
                                'endLine' => 674,
                                'startTokenPos' => 2372,
                                'startFilePos' => 17868,
                                'endTokenPos' => 2372,
                                'endFilePos' => 17871,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 674,
                        'endLine' => 674,
                        'startColumn' => 51,
                        'endColumn' => 67,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Specify an index for the table.
 *
 * @param  string|array  $columns
 * @param  string|null  $name
 * @param  string|null  $algorithm
 * @return \\Illuminate\\Database\\Schema\\IndexDefinition
 */',
                'startLine' => 674,
                'endLine' => 677,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'fullText' => [
                'name' => 'fullText',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 687,
                        'endLine' => 687,
                        'startColumn' => 30,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'name' => [
                        'name' => 'name',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 687,
                                'endLine' => 687,
                                'startTokenPos' => 2413,
                                'startFilePos' => 18248,
                                'endTokenPos' => 2413,
                                'endFilePos' => 18251,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 687,
                        'endLine' => 687,
                        'startColumn' => 40,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'algorithm' => [
                        'name' => 'algorithm',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 687,
                                'endLine' => 687,
                                'startTokenPos' => 2420,
                                'startFilePos' => 18267,
                                'endTokenPos' => 2420,
                                'endFilePos' => 18270,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 687,
                        'endLine' => 687,
                        'startColumn' => 54,
                        'endColumn' => 70,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Specify a fulltext index for the table.
 *
 * @param  string|array  $columns
 * @param  string|null  $name
 * @param  string|null  $algorithm
 * @return \\Illuminate\\Database\\Schema\\IndexDefinition
 */',
                'startLine' => 687,
                'endLine' => 690,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'spatialIndex' => [
                'name' => 'spatialIndex',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 700,
                        'endLine' => 700,
                        'startColumn' => 34,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'name' => [
                        'name' => 'name',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 700,
                                'endLine' => 700,
                                'startTokenPos' => 2461,
                                'startFilePos' => 18657,
                                'endTokenPos' => 2461,
                                'endFilePos' => 18660,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 700,
                        'endLine' => 700,
                        'startColumn' => 44,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'operatorClass' => [
                        'name' => 'operatorClass',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 700,
                                'endLine' => 700,
                                'startTokenPos' => 2468,
                                'startFilePos' => 18680,
                                'endTokenPos' => 2468,
                                'endFilePos' => 18683,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 700,
                        'endLine' => 700,
                        'startColumn' => 58,
                        'endColumn' => 78,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Specify a spatial index for the table.
 *
 * @param  string|array  $columns
 * @param  string|null  $name
 * @param  string|null  $operatorClass
 * @return \\Illuminate\\Database\\Schema\\IndexDefinition
 */',
                'startLine' => 700,
                'endLine' => 703,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'vectorIndex' => [
                'name' => 'vectorIndex',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
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
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'name' => [
                        'name' => 'name',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 712,
                                'endLine' => 712,
                                'startTokenPos' => 2512,
                                'startFilePos' => 19031,
                                'endTokenPos' => 2512,
                                'endFilePos' => 19034,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 712,
                        'endLine' => 712,
                        'startColumn' => 42,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Specify a vector index for the table.
 *
 * @param  string  $column
 * @param  string|null  $name
 * @return \\Illuminate\\Database\\Schema\\IndexDefinition
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
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'rawIndex' => [
                'name' => 'rawIndex',
                'parameters' => [
                    'expression' => [
                        'name' => 'expression',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 724,
                        'endLine' => 724,
                        'startColumn' => 30,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 724,
                        'endLine' => 724,
                        'startColumn' => 43,
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
 * Specify a raw index for the table.
 *
 * @param  string  $expression
 * @param  string  $name
 * @return \\Illuminate\\Database\\Schema\\IndexDefinition
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
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'foreign' => [
                'name' => 'foreign',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 736,
                        'endLine' => 736,
                        'startColumn' => 29,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'name' => [
                        'name' => 'name',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 736,
                                'endLine' => 736,
                                'startTokenPos' => 2594,
                                'startFilePos' => 19712,
                                'endTokenPos' => 2594,
                                'endFilePos' => 19715,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 736,
                        'endLine' => 736,
                        'startColumn' => 39,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Specify a foreign key for the table.
 *
 * @param  string|array  $columns
 * @param  string|null  $name
 * @return \\Illuminate\\Database\\Schema\\ForeignKeyDefinition
 */',
                'startLine' => 736,
                'endLine' => 745,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'id' => [
                'name' => 'id',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => '\'id\'',
                            'attributes' => [
                                'startLine' => 753,
                                'endLine' => 753,
                                'startTokenPos' => 2668,
                                'startFilePos' => 20215,
                                'endTokenPos' => 2668,
                                'endFilePos' => 20218,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 753,
                        'endLine' => 753,
                        'startColumn' => 24,
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
 * Create a new auto-incrementing big integer column on the table (8-byte, 0 to 18,446,744,073,709,551,615).
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 753,
                'endLine' => 756,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'increments' => [
                'name' => 'increments',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 764,
                        'endLine' => 764,
                        'startColumn' => 32,
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
 * Create a new auto-incrementing integer column on the table (4-byte, 0 to 4,294,967,295).
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 764,
                'endLine' => 767,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'integerIncrements' => [
                'name' => 'integerIncrements',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 775,
                        'endLine' => 775,
                        'startColumn' => 39,
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
 * Create a new auto-incrementing integer column on the table (4-byte, 0 to 4,294,967,295).
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 775,
                'endLine' => 778,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'tinyIncrements' => [
                'name' => 'tinyIncrements',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 786,
                        'endLine' => 786,
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
 * Create a new auto-incrementing tiny integer column on the table (1-byte, 0 to 255).
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 786,
                'endLine' => 789,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'smallIncrements' => [
                'name' => 'smallIncrements',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 797,
                        'endLine' => 797,
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
 * Create a new auto-incrementing small integer column on the table (2-byte, 0 to 65,535).
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 797,
                'endLine' => 800,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'mediumIncrements' => [
                'name' => 'mediumIncrements',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 808,
                        'endLine' => 808,
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
 * Create a new auto-incrementing medium integer column on the table (3-byte, 0 to 16,777,215).
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 808,
                'endLine' => 811,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'bigIncrements' => [
                'name' => 'bigIncrements',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 819,
                        'endLine' => 819,
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
 * Create a new auto-incrementing big integer column on the table (8-byte, 0 to 18,446,744,073,709,551,615).
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 819,
                'endLine' => 822,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'char' => [
                'name' => 'char',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 831,
                        'endLine' => 831,
                        'startColumn' => 26,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'length' => [
                        'name' => 'length',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 831,
                                'endLine' => 831,
                                'startTokenPos' => 2868,
                                'startFilePos' => 22477,
                                'endTokenPos' => 2868,
                                'endFilePos' => 22480,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 831,
                        'endLine' => 831,
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
 * Create a new char column on the table.
 *
 * @param  string  $column
 * @param  int|null  $length
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 831,
                'endLine' => 836,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'string' => [
                'name' => 'string',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 845,
                        'endLine' => 845,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'length' => [
                        'name' => 'length',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 845,
                                'endLine' => 845,
                                'startTokenPos' => 2931,
                                'startFilePos' => 22887,
                                'endTokenPos' => 2931,
                                'endFilePos' => 22890,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 845,
                        'endLine' => 845,
                        'startColumn' => 37,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new string column on the table.
 *
 * @param  string  $column
 * @param  int|null  $length
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 845,
                'endLine' => 850,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'tinyText' => [
                'name' => 'tinyText',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 858,
                        'endLine' => 858,
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
 * Create a new tiny text column on the table (up to 255 characters).
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 858,
                'endLine' => 861,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'text' => [
                'name' => 'text',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 869,
                        'endLine' => 869,
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
 * Create a new text column on the table (up to 65,535 characters / ~64 KB).
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 869,
                'endLine' => 872,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'mediumText' => [
                'name' => 'mediumText',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 880,
                        'endLine' => 880,
                        'startColumn' => 32,
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
 * Create a new medium text column on the table (up to 16,777,215 characters / ~16 MB).
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 880,
                'endLine' => 883,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'longText' => [
                'name' => 'longText',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 891,
                        'endLine' => 891,
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
 * Create a new long text column on the table (up to 4,294,967,295 characters / ~4 GB).
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 891,
                'endLine' => 894,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'integer' => [
                'name' => 'integer',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 905,
                        'endLine' => 905,
                        'startColumn' => 29,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'autoIncrement' => [
                        'name' => 'autoIncrement',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 905,
                                'endLine' => 905,
                                'startTokenPos' => 3098,
                                'startFilePos' => 24631,
                                'endTokenPos' => 3098,
                                'endFilePos' => 24635,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 905,
                        'endLine' => 905,
                        'startColumn' => 38,
                        'endColumn' => 59,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'unsigned' => [
                        'name' => 'unsigned',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 905,
                                'endLine' => 905,
                                'startTokenPos' => 3105,
                                'startFilePos' => 24650,
                                'endTokenPos' => 3105,
                                'endFilePos' => 24654,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 905,
                        'endLine' => 905,
                        'startColumn' => 62,
                        'endColumn' => 78,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new integer (4-byte) column on the table.
 * Range: -2,147,483,648 to 2,147,483,647 (signed) or 0 to 4,294,967,295 (unsigned).
 *
 * @param  string  $column
 * @param  bool  $autoIncrement
 * @param  bool  $unsigned
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 905,
                'endLine' => 908,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'tinyInteger' => [
                'name' => 'tinyInteger',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 919,
                        'endLine' => 919,
                        'startColumn' => 33,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'autoIncrement' => [
                        'name' => 'autoIncrement',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 919,
                                'endLine' => 919,
                                'startTokenPos' => 3149,
                                'startFilePos' => 25122,
                                'endTokenPos' => 3149,
                                'endFilePos' => 25126,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 919,
                        'endLine' => 919,
                        'startColumn' => 42,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'unsigned' => [
                        'name' => 'unsigned',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 919,
                                'endLine' => 919,
                                'startTokenPos' => 3156,
                                'startFilePos' => 25141,
                                'endTokenPos' => 3156,
                                'endFilePos' => 25145,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 919,
                        'endLine' => 919,
                        'startColumn' => 66,
                        'endColumn' => 82,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new tiny integer (1-byte) column on the table.
 * Range: -128 to 127 (signed) or 0 to 255 (unsigned).
 *
 * @param  string  $column
 * @param  bool  $autoIncrement
 * @param  bool  $unsigned
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 919,
                'endLine' => 922,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'smallInteger' => [
                'name' => 'smallInteger',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 933,
                        'endLine' => 933,
                        'startColumn' => 34,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'autoIncrement' => [
                        'name' => 'autoIncrement',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 933,
                                'endLine' => 933,
                                'startTokenPos' => 3200,
                                'startFilePos' => 25628,
                                'endTokenPos' => 3200,
                                'endFilePos' => 25632,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 933,
                        'endLine' => 933,
                        'startColumn' => 43,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'unsigned' => [
                        'name' => 'unsigned',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 933,
                                'endLine' => 933,
                                'startTokenPos' => 3207,
                                'startFilePos' => 25647,
                                'endTokenPos' => 3207,
                                'endFilePos' => 25651,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 933,
                        'endLine' => 933,
                        'startColumn' => 67,
                        'endColumn' => 83,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new small integer (2-byte) column on the table.
 * Range: -32,768 to 32,767 (signed) or 0 to 65,535 (unsigned).
 *
 * @param  string  $column
 * @param  bool  $autoIncrement
 * @param  bool  $unsigned
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 933,
                'endLine' => 936,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'mediumInteger' => [
                'name' => 'mediumInteger',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 947,
                        'endLine' => 947,
                        'startColumn' => 35,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'autoIncrement' => [
                        'name' => 'autoIncrement',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 947,
                                'endLine' => 947,
                                'startTokenPos' => 3251,
                                'startFilePos' => 26147,
                                'endTokenPos' => 3251,
                                'endFilePos' => 26151,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 947,
                        'endLine' => 947,
                        'startColumn' => 44,
                        'endColumn' => 65,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'unsigned' => [
                        'name' => 'unsigned',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 947,
                                'endLine' => 947,
                                'startTokenPos' => 3258,
                                'startFilePos' => 26166,
                                'endTokenPos' => 3258,
                                'endFilePos' => 26170,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 947,
                        'endLine' => 947,
                        'startColumn' => 68,
                        'endColumn' => 84,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new medium integer (3-byte) column on the table.
 * Range: -8,388,608 to 8,388,607 (signed) or 0 to 16,777,215 (unsigned).
 *
 * @param  string  $column
 * @param  bool  $autoIncrement
 * @param  bool  $unsigned
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 947,
                'endLine' => 950,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'bigInteger' => [
                'name' => 'bigInteger',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 961,
                        'endLine' => 961,
                        'startColumn' => 32,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'autoIncrement' => [
                        'name' => 'autoIncrement',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 961,
                                'endLine' => 961,
                                'startTokenPos' => 3302,
                                'startFilePos' => 26709,
                                'endTokenPos' => 3302,
                                'endFilePos' => 26713,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 961,
                        'endLine' => 961,
                        'startColumn' => 41,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'unsigned' => [
                        'name' => 'unsigned',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 961,
                                'endLine' => 961,
                                'startTokenPos' => 3309,
                                'startFilePos' => 26728,
                                'endTokenPos' => 3309,
                                'endFilePos' => 26732,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 961,
                        'endLine' => 961,
                        'startColumn' => 65,
                        'endColumn' => 81,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new big integer (8-byte) column on the table.
 * Range: -9,223,372,036,854,775,808 to 9,223,372,036,854,775,807 (signed) or 0 to 18,446,744,073,709,551,615 (unsigned).
 *
 * @param  string  $column
 * @param  bool  $autoIncrement
 * @param  bool  $unsigned
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 961,
                'endLine' => 964,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'unsignedInteger' => [
                'name' => 'unsignedInteger',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 973,
                        'endLine' => 973,
                        'startColumn' => 37,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'autoIncrement' => [
                        'name' => 'autoIncrement',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 973,
                                'endLine' => 973,
                                'startTokenPos' => 3353,
                                'startFilePos' => 27141,
                                'endTokenPos' => 3353,
                                'endFilePos' => 27145,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 973,
                        'endLine' => 973,
                        'startColumn' => 46,
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
 * Create a new unsigned integer column on the table (4-byte, 0 to 4,294,967,295).
 *
 * @param  string  $column
 * @param  bool  $autoIncrement
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 973,
                'endLine' => 976,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'unsignedTinyInteger' => [
                'name' => 'unsignedTinyInteger',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 985,
                        'endLine' => 985,
                        'startColumn' => 41,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'autoIncrement' => [
                        'name' => 'autoIncrement',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 985,
                                'endLine' => 985,
                                'startTokenPos' => 3391,
                                'startFilePos' => 27521,
                                'endTokenPos' => 3391,
                                'endFilePos' => 27525,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 985,
                        'endLine' => 985,
                        'startColumn' => 50,
                        'endColumn' => 71,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new unsigned tiny integer column on the table (1-byte, 0 to 255).
 *
 * @param  string  $column
 * @param  bool  $autoIncrement
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 985,
                'endLine' => 988,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'unsignedSmallInteger' => [
                'name' => 'unsignedSmallInteger',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 997,
                        'endLine' => 997,
                        'startColumn' => 42,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'autoIncrement' => [
                        'name' => 'autoIncrement',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 997,
                                'endLine' => 997,
                                'startTokenPos' => 3429,
                                'startFilePos' => 27910,
                                'endTokenPos' => 3429,
                                'endFilePos' => 27914,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 997,
                        'endLine' => 997,
                        'startColumn' => 51,
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
 * Create a new unsigned small integer column on the table (2-byte, 0 to 65,535).
 *
 * @param  string  $column
 * @param  bool  $autoIncrement
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 997,
                'endLine' => 1000,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'unsignedMediumInteger' => [
                'name' => 'unsignedMediumInteger',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1009,
                        'endLine' => 1009,
                        'startColumn' => 43,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'autoIncrement' => [
                        'name' => 'autoIncrement',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 1009,
                                'endLine' => 1009,
                                'startTokenPos' => 3467,
                                'startFilePos' => 28306,
                                'endTokenPos' => 3467,
                                'endFilePos' => 28310,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1009,
                        'endLine' => 1009,
                        'startColumn' => 52,
                        'endColumn' => 73,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new unsigned medium integer column on the table (3-byte, 0 to 16,777,215).
 *
 * @param  string  $column
 * @param  bool  $autoIncrement
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1009,
                'endLine' => 1012,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'unsignedBigInteger' => [
                'name' => 'unsignedBigInteger',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1021,
                        'endLine' => 1021,
                        'startColumn' => 40,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'autoIncrement' => [
                        'name' => 'autoIncrement',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 1021,
                                'endLine' => 1021,
                                'startTokenPos' => 3505,
                                'startFilePos' => 28713,
                                'endTokenPos' => 3505,
                                'endFilePos' => 28717,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1021,
                        'endLine' => 1021,
                        'startColumn' => 49,
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
 * Create a new unsigned big integer column on the table (8-byte, 0 to 18,446,744,073,709,551,615).
 *
 * @param  string  $column
 * @param  bool  $autoIncrement
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
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
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'foreignId' => [
                'name' => 'foreignId',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1032,
                        'endLine' => 1032,
                        'startColumn' => 31,
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
 * Create a new unsigned big integer column on the table (8-byte, 0 to 18,446,744,073,709,551,615).
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ForeignIdColumnDefinition
 */',
                'startLine' => 1032,
                'endLine' => 1040,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'foreignIdFor' => [
                'name' => 'foreignIdFor',
                'parameters' => [
                    'model' => [
                        'name' => 'model',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1049,
                        'endLine' => 1049,
                        'startColumn' => 34,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1049,
                                'endLine' => 1049,
                                'startTokenPos' => 3606,
                                'startFilePos' => 29608,
                                'endTokenPos' => 3606,
                                'endFilePos' => 29611,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1049,
                        'endLine' => 1049,
                        'startColumn' => 42,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a foreign ID column for the given model.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Model|string  $model
 * @param  string|null  $column
 * @return \\Illuminate\\Database\\Schema\\ForeignIdColumnDefinition
 */',
                'startLine' => 1049,
                'endLine' => 1074,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'float' => [
                'name' => 'float',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1083,
                        'endLine' => 1083,
                        'startColumn' => 27,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'precision' => [
                        'name' => 'precision',
                        'default' => [
                            'code' => '53',
                            'attributes' => [
                                'startLine' => 1083,
                                'endLine' => 1083,
                                'startTokenPos' => 3808,
                                'startFilePos' => 30634,
                                'endTokenPos' => 3808,
                                'endFilePos' => 30635,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1083,
                        'endLine' => 1083,
                        'startColumn' => 36,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new float column on the table.
 *
 * @param  string  $column
 * @param  int  $precision
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1083,
                'endLine' => 1086,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'double' => [
                'name' => 'double',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1094,
                        'endLine' => 1094,
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
 * Create a new double column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1094,
                'endLine' => 1097,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'decimal' => [
                'name' => 'decimal',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1107,
                        'endLine' => 1107,
                        'startColumn' => 29,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'total' => [
                        'name' => 'total',
                        'default' => [
                            'code' => '8',
                            'attributes' => [
                                'startLine' => 1107,
                                'endLine' => 1107,
                                'startTokenPos' => 3877,
                                'startFilePos' => 31251,
                                'endTokenPos' => 3877,
                                'endFilePos' => 31251,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1107,
                        'endLine' => 1107,
                        'startColumn' => 38,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'places' => [
                        'name' => 'places',
                        'default' => [
                            'code' => '2',
                            'attributes' => [
                                'startLine' => 1107,
                                'endLine' => 1107,
                                'startTokenPos' => 3884,
                                'startFilePos' => 31264,
                                'endTokenPos' => 3884,
                                'endFilePos' => 31264,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1107,
                        'endLine' => 1107,
                        'startColumn' => 50,
                        'endColumn' => 60,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new decimal column on the table.
 *
 * @param  string  $column
 * @param  int  $total
 * @param  int  $places
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1107,
                'endLine' => 1110,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'boolean' => [
                'name' => 'boolean',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1118,
                        'endLine' => 1118,
                        'startColumn' => 29,
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
 * Create a new boolean column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1118,
                'endLine' => 1121,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'enum' => [
                'name' => 'enum',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1130,
                        'endLine' => 1130,
                        'startColumn' => 26,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'allowed' => [
                        'name' => 'allowed',
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
                        'startLine' => 1130,
                        'endLine' => 1130,
                        'startColumn' => 35,
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
 * Create a new enum column on the table.
 *
 * @param  string  $column
 * @param  array  $allowed
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1130,
                'endLine' => 1135,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'set' => [
                'name' => 'set',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1144,
                        'endLine' => 1144,
                        'startColumn' => 25,
                        'endColumn' => 31,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'allowed' => [
                        'name' => 'allowed',
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
                        'startLine' => 1144,
                        'endLine' => 1144,
                        'startColumn' => 34,
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
 * Create a new set column on the table.
 *
 * @param  string  $column
 * @param  array  $allowed
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1144,
                'endLine' => 1147,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'json' => [
                'name' => 'json',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1155,
                        'endLine' => 1155,
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
 * Create a new json column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1155,
                'endLine' => 1158,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'jsonb' => [
                'name' => 'jsonb',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1166,
                        'endLine' => 1166,
                        'startColumn' => 27,
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
 * Create a new jsonb column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1166,
                'endLine' => 1169,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'date' => [
                'name' => 'date',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1177,
                        'endLine' => 1177,
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
 * Create a new date column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1177,
                'endLine' => 1180,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'dateTime' => [
                'name' => 'dateTime',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1189,
                        'endLine' => 1189,
                        'startColumn' => 30,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'precision' => [
                        'name' => 'precision',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1189,
                                'endLine' => 1189,
                                'startTokenPos' => 4142,
                                'startFilePos' => 33374,
                                'endTokenPos' => 4142,
                                'endFilePos' => 33377,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1189,
                        'endLine' => 1189,
                        'startColumn' => 39,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new date-time column on the table.
 *
 * @param  string  $column
 * @param  int|null  $precision
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1189,
                'endLine' => 1194,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'dateTimeTz' => [
                'name' => 'dateTimeTz',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1203,
                        'endLine' => 1203,
                        'startColumn' => 32,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'precision' => [
                        'name' => 'precision',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1203,
                                'endLine' => 1203,
                                'startTokenPos' => 4194,
                                'startFilePos' => 33795,
                                'endTokenPos' => 4194,
                                'endFilePos' => 33798,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1203,
                        'endLine' => 1203,
                        'startColumn' => 41,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new date-time column (with time zone) on the table.
 *
 * @param  string  $column
 * @param  int|null  $precision
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1203,
                'endLine' => 1208,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'time' => [
                'name' => 'time',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1217,
                        'endLine' => 1217,
                        'startColumn' => 26,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'precision' => [
                        'name' => 'precision',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1217,
                                'endLine' => 1217,
                                'startTokenPos' => 4246,
                                'startFilePos' => 34190,
                                'endTokenPos' => 4246,
                                'endFilePos' => 34193,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1217,
                        'endLine' => 1217,
                        'startColumn' => 35,
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
 * Create a new time column on the table.
 *
 * @param  string  $column
 * @param  int|null  $precision
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1217,
                'endLine' => 1222,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'timeTz' => [
                'name' => 'timeTz',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1231,
                        'endLine' => 1231,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'precision' => [
                        'name' => 'precision',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1231,
                                'endLine' => 1231,
                                'startTokenPos' => 4298,
                                'startFilePos' => 34598,
                                'endTokenPos' => 4298,
                                'endFilePos' => 34601,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1231,
                        'endLine' => 1231,
                        'startColumn' => 37,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new time column (with time zone) on the table.
 *
 * @param  string  $column
 * @param  int|null  $precision
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
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
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'timestamp' => [
                'name' => 'timestamp',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1245,
                        'endLine' => 1245,
                        'startColumn' => 31,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'precision' => [
                        'name' => 'precision',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1245,
                                'endLine' => 1245,
                                'startTokenPos' => 4350,
                                'startFilePos' => 34999,
                                'endTokenPos' => 4350,
                                'endFilePos' => 35002,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1245,
                        'endLine' => 1245,
                        'startColumn' => 40,
                        'endColumn' => 56,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new timestamp column on the table.
 *
 * @param  string  $column
 * @param  int|null  $precision
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1245,
                'endLine' => 1250,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'timestampTz' => [
                'name' => 'timestampTz',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1259,
                        'endLine' => 1259,
                        'startColumn' => 33,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'precision' => [
                        'name' => 'precision',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1259,
                                'endLine' => 1259,
                                'startTokenPos' => 4402,
                                'startFilePos' => 35422,
                                'endTokenPos' => 4402,
                                'endFilePos' => 35425,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1259,
                        'endLine' => 1259,
                        'startColumn' => 42,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new timestamp (with time zone) column on the table.
 *
 * @param  string  $column
 * @param  int|null  $precision
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1259,
                'endLine' => 1264,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'timestamps' => [
                'name' => 'timestamps',
                'parameters' => [
                    'precision' => [
                        'name' => 'precision',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1272,
                                'endLine' => 1272,
                                'startTokenPos' => 4451,
                                'startFilePos' => 35840,
                                'endTokenPos' => 4451,
                                'endFilePos' => 35843,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1272,
                        'endLine' => 1272,
                        'startColumn' => 32,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add nullable creation and update timestamps to the table.
 *
 * @param  int|null  $precision
 * @return \\Illuminate\\Support\\Collection<int, \\Illuminate\\Database\\Schema\\ColumnDefinition>
 */',
                'startLine' => 1272,
                'endLine' => 1278,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'nullableTimestamps' => [
                'name' => 'nullableTimestamps',
                'parameters' => [
                    'precision' => [
                        'name' => 'precision',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1288,
                                'endLine' => 1288,
                                'startTokenPos' => 4512,
                                'startFilePos' => 36356,
                                'endTokenPos' => 4512,
                                'endFilePos' => 36359,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1288,
                        'endLine' => 1288,
                        'startColumn' => 40,
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
 * Add nullable creation and update timestamps to the table.
 *
 * Alias for self::timestamps().
 *
 * @param  int|null  $precision
 * @return \\Illuminate\\Support\\Collection<int, \\Illuminate\\Database\\Schema\\ColumnDefinition>
 */',
                'startLine' => 1288,
                'endLine' => 1291,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'timestampsTz' => [
                'name' => 'timestampsTz',
                'parameters' => [
                    'precision' => [
                        'name' => 'precision',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1299,
                                'endLine' => 1299,
                                'startTokenPos' => 4541,
                                'startFilePos' => 36697,
                                'endTokenPos' => 4541,
                                'endFilePos' => 36700,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1299,
                        'endLine' => 1299,
                        'startColumn' => 34,
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
 * Add nullable creation and update timestampTz columns to the table.
 *
 * @param  int|null  $precision
 * @return \\Illuminate\\Support\\Collection<int, \\Illuminate\\Database\\Schema\\ColumnDefinition>
 */',
                'startLine' => 1299,
                'endLine' => 1305,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'nullableTimestampsTz' => [
                'name' => 'nullableTimestampsTz',
                'parameters' => [
                    'precision' => [
                        'name' => 'precision',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1315,
                                'endLine' => 1315,
                                'startTokenPos' => 4602,
                                'startFilePos' => 37230,
                                'endTokenPos' => 4602,
                                'endFilePos' => 37233,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1315,
                        'endLine' => 1315,
                        'startColumn' => 42,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add nullable creation and update timestampTz columns to the table.
 *
 * Alias for self::timestampsTz().
 *
 * @param  int|null  $precision
 * @return \\Illuminate\\Support\\Collection<int, \\Illuminate\\Database\\Schema\\ColumnDefinition>
 */',
                'startLine' => 1315,
                'endLine' => 1318,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'datetimes' => [
                'name' => 'datetimes',
                'parameters' => [
                    'precision' => [
                        'name' => 'precision',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1326,
                                'endLine' => 1326,
                                'startTokenPos' => 4631,
                                'startFilePos' => 37558,
                                'endTokenPos' => 4631,
                                'endFilePos' => 37561,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1326,
                        'endLine' => 1326,
                        'startColumn' => 31,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add creation and update datetime columns to the table.
 *
 * @param  int|null  $precision
 * @return \\Illuminate\\Support\\Collection<int, \\Illuminate\\Database\\Schema\\ColumnDefinition>
 */',
                'startLine' => 1326,
                'endLine' => 1332,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'softDeletes' => [
                'name' => 'softDeletes',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => '\'deleted_at\'',
                            'attributes' => [
                                'startLine' => 1341,
                                'endLine' => 1341,
                                'startTokenPos' => 4692,
                                'startFilePos' => 37998,
                                'endTokenPos' => 4692,
                                'endFilePos' => 38009,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1341,
                        'endLine' => 1341,
                        'startColumn' => 33,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'precision' => [
                        'name' => 'precision',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1341,
                                'endLine' => 1341,
                                'startTokenPos' => 4699,
                                'startFilePos' => 38025,
                                'endTokenPos' => 4699,
                                'endFilePos' => 38028,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1341,
                        'endLine' => 1341,
                        'startColumn' => 57,
                        'endColumn' => 73,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a "deleted at" timestamp for the table.
 *
 * @param  string  $column
 * @param  int|null  $precision
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1341,
                'endLine' => 1344,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'softDeletesTz' => [
                'name' => 'softDeletesTz',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => '\'deleted_at\'',
                            'attributes' => [
                                'startLine' => 1353,
                                'endLine' => 1353,
                                'startTokenPos' => 4735,
                                'startFilePos' => 38357,
                                'endTokenPos' => 4735,
                                'endFilePos' => 38368,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1353,
                        'endLine' => 1353,
                        'startColumn' => 35,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'precision' => [
                        'name' => 'precision',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1353,
                                'endLine' => 1353,
                                'startTokenPos' => 4742,
                                'startFilePos' => 38384,
                                'endTokenPos' => 4742,
                                'endFilePos' => 38387,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1353,
                        'endLine' => 1353,
                        'startColumn' => 59,
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
 * Add a "deleted at" timestampTz for the table.
 *
 * @param  string  $column
 * @param  int|null  $precision
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1353,
                'endLine' => 1356,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'softDeletesDatetime' => [
                'name' => 'softDeletesDatetime',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => '\'deleted_at\'',
                            'attributes' => [
                                'startLine' => 1365,
                                'endLine' => 1365,
                                'startTokenPos' => 4778,
                                'startFilePos' => 38727,
                                'endTokenPos' => 4778,
                                'endFilePos' => 38738,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1365,
                        'endLine' => 1365,
                        'startColumn' => 41,
                        'endColumn' => 62,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'precision' => [
                        'name' => 'precision',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1365,
                                'endLine' => 1365,
                                'startTokenPos' => 4785,
                                'startFilePos' => 38754,
                                'endTokenPos' => 4785,
                                'endFilePos' => 38757,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1365,
                        'endLine' => 1365,
                        'startColumn' => 65,
                        'endColumn' => 81,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a "deleted at" datetime column to the table.
 *
 * @param  string  $column
 * @param  int|null  $precision
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1365,
                'endLine' => 1368,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'year' => [
                'name' => 'year',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1376,
                        'endLine' => 1376,
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
 * Create a new year column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1376,
                'endLine' => 1379,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'binary' => [
                'name' => 'binary',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1389,
                        'endLine' => 1389,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'length' => [
                        'name' => 'length',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1389,
                                'endLine' => 1389,
                                'startTokenPos' => 4852,
                                'startFilePos' => 39364,
                                'endTokenPos' => 4852,
                                'endFilePos' => 39367,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1389,
                        'endLine' => 1389,
                        'startColumn' => 37,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'fixed' => [
                        'name' => 'fixed',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 1389,
                                'endLine' => 1389,
                                'startTokenPos' => 4859,
                                'startFilePos' => 39379,
                                'endTokenPos' => 4859,
                                'endFilePos' => 39383,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1389,
                        'endLine' => 1389,
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
 * Create a new binary column on the table.
 *
 * @param  string  $column
 * @param  int|null  $length
 * @param  bool  $fixed
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1389,
                'endLine' => 1392,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'uuid' => [
                'name' => 'uuid',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => '\'uuid\'',
                            'attributes' => [
                                'startLine' => 1400,
                                'endLine' => 1400,
                                'startTokenPos' => 4900,
                                'startFilePos' => 39674,
                                'endTokenPos' => 4900,
                                'endFilePos' => 39679,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1400,
                        'endLine' => 1400,
                        'startColumn' => 26,
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
 * Create a new UUID column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1400,
                'endLine' => 1403,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'foreignUuid' => [
                'name' => 'foreignUuid',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1411,
                        'endLine' => 1411,
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
 * Create a new UUID column on the table with a foreign key constraint.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ForeignIdColumnDefinition
 */',
                'startLine' => 1411,
                'endLine' => 1417,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'ulid' => [
                'name' => 'ulid',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => '\'ulid\'',
                            'attributes' => [
                                'startLine' => 1426,
                                'endLine' => 1426,
                                'startTokenPos' => 4981,
                                'startFilePos' => 40381,
                                'endTokenPos' => 4981,
                                'endFilePos' => 40386,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1426,
                        'endLine' => 1426,
                        'startColumn' => 26,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'length' => [
                        'name' => 'length',
                        'default' => [
                            'code' => '26',
                            'attributes' => [
                                'startLine' => 1426,
                                'endLine' => 1426,
                                'startTokenPos' => 4988,
                                'startFilePos' => 40399,
                                'endTokenPos' => 4988,
                                'endFilePos' => 40400,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1426,
                        'endLine' => 1426,
                        'startColumn' => 44,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new ULID column on the table.
 *
 * @param  string  $column
 * @param  int|null  $length
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1426,
                'endLine' => 1429,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'foreignUlid' => [
                'name' => 'foreignUlid',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1438,
                        'endLine' => 1438,
                        'startColumn' => 33,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'length' => [
                        'name' => 'length',
                        'default' => [
                            'code' => '26',
                            'attributes' => [
                                'startLine' => 1438,
                                'endLine' => 1438,
                                'startTokenPos' => 5023,
                                'startFilePos' => 40745,
                                'endTokenPos' => 5023,
                                'endFilePos' => 40746,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1438,
                        'endLine' => 1438,
                        'startColumn' => 42,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new ULID column on the table with a foreign key constraint.
 *
 * @param  string  $column
 * @param  int|null  $length
 * @return \\Illuminate\\Database\\Schema\\ForeignIdColumnDefinition
 */',
                'startLine' => 1438,
                'endLine' => 1445,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'ipAddress' => [
                'name' => 'ipAddress',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => '\'ip_address\'',
                            'attributes' => [
                                'startLine' => 1453,
                                'endLine' => 1453,
                                'startTokenPos' => 5083,
                                'startFilePos' => 41156,
                                'endTokenPos' => 5083,
                                'endFilePos' => 41167,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1453,
                        'endLine' => 1453,
                        'startColumn' => 31,
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
 * Create a new IP address column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1453,
                'endLine' => 1456,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'macAddress' => [
                'name' => 'macAddress',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => '\'mac_address\'',
                            'attributes' => [
                                'startLine' => 1464,
                                'endLine' => 1464,
                                'startTokenPos' => 5115,
                                'startFilePos' => 41446,
                                'endTokenPos' => 5115,
                                'endFilePos' => 41458,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1464,
                        'endLine' => 1464,
                        'startColumn' => 32,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new MAC address column on the table.
 *
 * @param  string  $column
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1464,
                'endLine' => 1467,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'geometry' => [
                'name' => 'geometry',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1477,
                        'endLine' => 1477,
                        'startColumn' => 30,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'subtype' => [
                        'name' => 'subtype',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1477,
                                'endLine' => 1477,
                                'startTokenPos' => 5150,
                                'startFilePos' => 41806,
                                'endTokenPos' => 5150,
                                'endFilePos' => 41809,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1477,
                        'endLine' => 1477,
                        'startColumn' => 39,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'srid' => [
                        'name' => 'srid',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 1477,
                                'endLine' => 1477,
                                'startTokenPos' => 5157,
                                'startFilePos' => 41820,
                                'endTokenPos' => 5157,
                                'endFilePos' => 41820,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1477,
                        'endLine' => 1477,
                        'startColumn' => 56,
                        'endColumn' => 64,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new geometry column on the table.
 *
 * @param  string  $column
 * @param  string|null  $subtype
 * @param  int  $srid
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1477,
                'endLine' => 1480,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'geography' => [
                'name' => 'geography',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1490,
                        'endLine' => 1490,
                        'startColumn' => 31,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'subtype' => [
                        'name' => 'subtype',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1490,
                                'endLine' => 1490,
                                'startTokenPos' => 5201,
                                'startFilePos' => 42196,
                                'endTokenPos' => 5201,
                                'endFilePos' => 42199,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1490,
                        'endLine' => 1490,
                        'startColumn' => 40,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'srid' => [
                        'name' => 'srid',
                        'default' => [
                            'code' => '4326',
                            'attributes' => [
                                'startLine' => 1490,
                                'endLine' => 1490,
                                'startTokenPos' => 5208,
                                'startFilePos' => 42210,
                                'endTokenPos' => 5208,
                                'endFilePos' => 42213,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1490,
                        'endLine' => 1490,
                        'startColumn' => 57,
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
 * Create a new geography column on the table.
 *
 * @param  string  $column
 * @param  string|null  $subtype
 * @param  int  $srid
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1490,
                'endLine' => 1493,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'computed' => [
                'name' => 'computed',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1502,
                        'endLine' => 1502,
                        'startColumn' => 30,
                        'endColumn' => 36,
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
                        'startLine' => 1502,
                        'endLine' => 1502,
                        'startColumn' => 39,
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
 * Create a new generated, computed column on the table.
 *
 * @param  string  $column
 * @param  string  $expression
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1502,
                'endLine' => 1505,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'vector' => [
                'name' => 'vector',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1514,
                        'endLine' => 1514,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'dimensions' => [
                        'name' => 'dimensions',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1514,
                                'endLine' => 1514,
                                'startTokenPos' => 5289,
                                'startFilePos' => 42912,
                                'endTokenPos' => 5289,
                                'endFilePos' => 42915,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1514,
                        'endLine' => 1514,
                        'startColumn' => 37,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new vector column on the table.
 *
 * @param  string  $column
 * @param  int|null  $dimensions
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1514,
                'endLine' => 1519,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'morphs' => [
                'name' => 'morphs',
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
                        'startLine' => 1529,
                        'endLine' => 1529,
                        'startColumn' => 28,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'indexName' => [
                        'name' => 'indexName',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1529,
                                'endLine' => 1529,
                                'startTokenPos' => 5346,
                                'startFilePos' => 43303,
                                'endTokenPos' => 5346,
                                'endFilePos' => 43306,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1529,
                        'endLine' => 1529,
                        'startColumn' => 35,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'after' => [
                        'name' => 'after',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1529,
                                'endLine' => 1529,
                                'startTokenPos' => 5353,
                                'startFilePos' => 43318,
                                'endTokenPos' => 5353,
                                'endFilePos' => 43321,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1529,
                        'endLine' => 1529,
                        'startColumn' => 54,
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
 * Add the proper columns for a polymorphic table.
 *
 * @param  string  $name
 * @param  string|null  $indexName
 * @param  string|null  $after
 * @return void
 */',
                'startLine' => 1529,
                'endLine' => 1538,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'nullableMorphs' => [
                'name' => 'nullableMorphs',
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
                        'startLine' => 1548,
                        'endLine' => 1548,
                        'startColumn' => 36,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'indexName' => [
                        'name' => 'indexName',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1548,
                                'endLine' => 1548,
                                'startTokenPos' => 5455,
                                'startFilePos' => 43913,
                                'endTokenPos' => 5455,
                                'endFilePos' => 43916,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1548,
                        'endLine' => 1548,
                        'startColumn' => 43,
                        'endColumn' => 59,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'after' => [
                        'name' => 'after',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1548,
                                'endLine' => 1548,
                                'startTokenPos' => 5462,
                                'startFilePos' => 43928,
                                'endTokenPos' => 5462,
                                'endFilePos' => 43931,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1548,
                        'endLine' => 1548,
                        'startColumn' => 62,
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
 * Add nullable columns for a polymorphic table.
 *
 * @param  string  $name
 * @param  string|null  $indexName
 * @param  string|null  $after
 * @return void
 */',
                'startLine' => 1548,
                'endLine' => 1557,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'numericMorphs' => [
                'name' => 'numericMorphs',
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
                        'startLine' => 1567,
                        'endLine' => 1567,
                        'startColumn' => 35,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'indexName' => [
                        'name' => 'indexName',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1567,
                                'endLine' => 1567,
                                'startTokenPos' => 5564,
                                'startFilePos' => 44580,
                                'endTokenPos' => 5564,
                                'endFilePos' => 44583,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1567,
                        'endLine' => 1567,
                        'startColumn' => 42,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'after' => [
                        'name' => 'after',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1567,
                                'endLine' => 1567,
                                'startTokenPos' => 5571,
                                'startFilePos' => 44595,
                                'endTokenPos' => 5571,
                                'endFilePos' => 44598,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1567,
                        'endLine' => 1567,
                        'startColumn' => 61,
                        'endColumn' => 73,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add the proper columns for a polymorphic table using numeric IDs (incremental).
 *
 * @param  string  $name
 * @param  string|null  $indexName
 * @param  string|null  $after
 * @return void
 */',
                'startLine' => 1567,
                'endLine' => 1576,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'nullableNumericMorphs' => [
                'name' => 'nullableNumericMorphs',
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
                        'startLine' => 1586,
                        'endLine' => 1586,
                        'startColumn' => 43,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'indexName' => [
                        'name' => 'indexName',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1586,
                                'endLine' => 1586,
                                'startTokenPos' => 5675,
                                'startFilePos' => 45154,
                                'endTokenPos' => 5675,
                                'endFilePos' => 45157,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1586,
                        'endLine' => 1586,
                        'startColumn' => 50,
                        'endColumn' => 66,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'after' => [
                        'name' => 'after',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1586,
                                'endLine' => 1586,
                                'startTokenPos' => 5682,
                                'startFilePos' => 45169,
                                'endTokenPos' => 5682,
                                'endFilePos' => 45172,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1586,
                        'endLine' => 1586,
                        'startColumn' => 69,
                        'endColumn' => 81,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add nullable columns for a polymorphic table using numeric IDs (incremental).
 *
 * @param  string  $name
 * @param  string|null  $indexName
 * @param  string|null  $after
 * @return void
 */',
                'startLine' => 1586,
                'endLine' => 1597,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'uuidMorphs' => [
                'name' => 'uuidMorphs',
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
                        'startLine' => 1607,
                        'endLine' => 1607,
                        'startColumn' => 32,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'indexName' => [
                        'name' => 'indexName',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1607,
                                'endLine' => 1607,
                                'startTokenPos' => 5796,
                                'startFilePos' => 45749,
                                'endTokenPos' => 5796,
                                'endFilePos' => 45752,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1607,
                        'endLine' => 1607,
                        'startColumn' => 39,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'after' => [
                        'name' => 'after',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1607,
                                'endLine' => 1607,
                                'startTokenPos' => 5803,
                                'startFilePos' => 45764,
                                'endTokenPos' => 5803,
                                'endFilePos' => 45767,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1607,
                        'endLine' => 1607,
                        'startColumn' => 58,
                        'endColumn' => 70,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add the proper columns for a polymorphic table using UUIDs.
 *
 * @param  string  $name
 * @param  string|null  $indexName
 * @param  string|null  $after
 * @return void
 */',
                'startLine' => 1607,
                'endLine' => 1616,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'nullableUuidMorphs' => [
                'name' => 'nullableUuidMorphs',
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
                        'startLine' => 1626,
                        'endLine' => 1626,
                        'startColumn' => 40,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'indexName' => [
                        'name' => 'indexName',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1626,
                                'endLine' => 1626,
                                'startTokenPos' => 5907,
                                'startFilePos' => 46286,
                                'endTokenPos' => 5907,
                                'endFilePos' => 46289,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1626,
                        'endLine' => 1626,
                        'startColumn' => 47,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'after' => [
                        'name' => 'after',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1626,
                                'endLine' => 1626,
                                'startTokenPos' => 5914,
                                'startFilePos' => 46301,
                                'endTokenPos' => 5914,
                                'endFilePos' => 46304,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1626,
                        'endLine' => 1626,
                        'startColumn' => 66,
                        'endColumn' => 78,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add nullable columns for a polymorphic table using UUIDs.
 *
 * @param  string  $name
 * @param  string|null  $indexName
 * @param  string|null  $after
 * @return void
 */',
                'startLine' => 1626,
                'endLine' => 1637,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'ulidMorphs' => [
                'name' => 'ulidMorphs',
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
                        'startLine' => 1647,
                        'endLine' => 1647,
                        'startColumn' => 32,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'indexName' => [
                        'name' => 'indexName',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1647,
                                'endLine' => 1647,
                                'startTokenPos' => 6028,
                                'startFilePos' => 46867,
                                'endTokenPos' => 6028,
                                'endFilePos' => 46870,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1647,
                        'endLine' => 1647,
                        'startColumn' => 39,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'after' => [
                        'name' => 'after',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1647,
                                'endLine' => 1647,
                                'startTokenPos' => 6035,
                                'startFilePos' => 46882,
                                'endTokenPos' => 6035,
                                'endFilePos' => 46885,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1647,
                        'endLine' => 1647,
                        'startColumn' => 58,
                        'endColumn' => 70,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add the proper columns for a polymorphic table using ULIDs.
 *
 * @param  string  $name
 * @param  string|null  $indexName
 * @param  string|null  $after
 * @return void
 */',
                'startLine' => 1647,
                'endLine' => 1656,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'nullableUlidMorphs' => [
                'name' => 'nullableUlidMorphs',
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
                        'startLine' => 1666,
                        'endLine' => 1666,
                        'startColumn' => 40,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'indexName' => [
                        'name' => 'indexName',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1666,
                                'endLine' => 1666,
                                'startTokenPos' => 6139,
                                'startFilePos' => 47404,
                                'endTokenPos' => 6139,
                                'endFilePos' => 47407,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1666,
                        'endLine' => 1666,
                        'startColumn' => 47,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'after' => [
                        'name' => 'after',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1666,
                                'endLine' => 1666,
                                'startTokenPos' => 6146,
                                'startFilePos' => 47419,
                                'endTokenPos' => 6146,
                                'endFilePos' => 47422,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1666,
                        'endLine' => 1666,
                        'startColumn' => 66,
                        'endColumn' => 78,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add nullable columns for a polymorphic table using ULIDs.
 *
 * @param  string  $name
 * @param  string|null  $indexName
 * @param  string|null  $after
 * @return void
 */',
                'startLine' => 1666,
                'endLine' => 1677,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'rememberToken' => [
                'name' => 'rememberToken',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add the `remember_token` column to the table.
 *
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1684,
                'endLine' => 1687,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'rawColumn' => [
                'name' => 'rawColumn',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1696,
                        'endLine' => 1696,
                        'startColumn' => 31,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'definition' => [
                        'name' => 'definition',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1696,
                        'endLine' => 1696,
                        'startColumn' => 40,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new custom column on the table.
 *
 * @param  string  $column
 * @param  string  $definition
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1696,
                'endLine' => 1699,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'comment' => [
                'name' => 'comment',
                'parameters' => [
                    'comment' => [
                        'name' => 'comment',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1707,
                        'endLine' => 1707,
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
 * Add a comment to the table.
 *
 * @param  string  $comment
 * @return \\Illuminate\\Support\\Fluent
 */',
                'startLine' => 1707,
                'endLine' => 1710,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'indexCommand' => [
                'name' => 'indexCommand',
                'parameters' => [
                    'type' => [
                        'name' => 'type',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1722,
                        'endLine' => 1722,
                        'startColumn' => 37,
                        'endColumn' => 41,
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
                        'startLine' => 1722,
                        'endLine' => 1722,
                        'startColumn' => 44,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
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
                        'startLine' => 1722,
                        'endLine' => 1722,
                        'startColumn' => 54,
                        'endColumn' => 59,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'algorithm' => [
                        'name' => 'algorithm',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1722,
                                'endLine' => 1722,
                                'startTokenPos' => 6365,
                                'startFilePos' => 48928,
                                'endTokenPos' => 6365,
                                'endFilePos' => 48931,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1722,
                        'endLine' => 1722,
                        'startColumn' => 62,
                        'endColumn' => 78,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'operatorClass' => [
                        'name' => 'operatorClass',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1722,
                                'endLine' => 1722,
                                'startTokenPos' => 6372,
                                'startFilePos' => 48951,
                                'endTokenPos' => 6372,
                                'endFilePos' => 48954,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1722,
                        'endLine' => 1722,
                        'startColumn' => 81,
                        'endColumn' => 101,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new index command on the blueprint.
 *
 * @param  string  $type
 * @param  string|array  $columns
 * @param  string  $index
 * @param  string|null  $algorithm
 * @param  string|null  $operatorClass
 * @return \\Illuminate\\Support\\Fluent
 */',
                'startLine' => 1722,
                'endLine' => 1734,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'dropIndexCommand' => [
                'name' => 'dropIndexCommand',
                'parameters' => [
                    'command' => [
                        'name' => 'command',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1744,
                        'endLine' => 1744,
                        'startColumn' => 41,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'type' => [
                        'name' => 'type',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1744,
                        'endLine' => 1744,
                        'startColumn' => 51,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
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
                        'startLine' => 1744,
                        'endLine' => 1744,
                        'startColumn' => 58,
                        'endColumn' => 63,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new drop index command on the blueprint.
 *
 * @param  string  $command
 * @param  string  $type
 * @param  string|array  $index
 * @return \\Illuminate\\Support\\Fluent
 */',
                'startLine' => 1744,
                'endLine' => 1756,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'createIndexName' => [
                'name' => 'createIndexName',
                'parameters' => [
                    'type' => [
                        'name' => 'type',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1765,
                        'endLine' => 1765,
                        'startColumn' => 40,
                        'endColumn' => 44,
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
                        'startLine' => 1765,
                        'endLine' => 1765,
                        'startColumn' => 47,
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
 * Create a default index name for the table.
 *
 * @param  string  $type
 * @param  array  $columns
 * @return string
 */',
                'startLine' => 1765,
                'endLine' => 1778,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'addColumn' => [
                'name' => 'addColumn',
                'parameters' => [
                    'type' => [
                        'name' => 'type',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1788,
                        'endLine' => 1788,
                        'startColumn' => 31,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1788,
                        'endLine' => 1788,
                        'startColumn' => 38,
                        'endColumn' => 42,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1788,
                                'endLine' => 1788,
                                'startTokenPos' => 6696,
                                'startFilePos' => 51174,
                                'endTokenPos' => 6697,
                                'endFilePos' => 51175,
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
                        'startLine' => 1788,
                        'endLine' => 1788,
                        'startColumn' => 45,
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
 * Add a new column to the blueprint.
 *
 * @param  string  $type
 * @param  string  $name
 * @param  array  $parameters
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1788,
                'endLine' => 1793,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'addColumnDefinition' => [
                'name' => 'addColumnDefinition',
                'parameters' => [
                    'definition' => [
                        'name' => 'definition',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1801,
                        'endLine' => 1801,
                        'startColumn' => 44,
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
 * Add a new column definition to the blueprint.
 *
 * @param  \\Illuminate\\Database\\Schema\\ColumnDefinition  $definition
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition
 */',
                'startLine' => 1801,
                'endLine' => 1816,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'after' => [
                'name' => 'after',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1825,
                        'endLine' => 1825,
                        'startColumn' => 27,
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
                        'startLine' => 1825,
                        'endLine' => 1825,
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
 * Add the columns from the callback after the given column.
 *
 * @param  string  $column
 * @param  (\\Closure(self): void)  $callback
 * @return void
 */',
                'startLine' => 1825,
                'endLine' => 1832,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'removeColumn' => [
                'name' => 'removeColumn',
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
                        'startLine' => 1840,
                        'endLine' => 1840,
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
 * Remove a column from the schema blueprint.
 *
 * @param  string  $name
 * @return $this
 */',
                'startLine' => 1840,
                'endLine' => 1851,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'addCommand' => [
                'name' => 'addCommand',
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
                        'startLine' => 1860,
                        'endLine' => 1860,
                        'startColumn' => 35,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1860,
                                'endLine' => 1860,
                                'startTokenPos' => 7007,
                                'startFilePos' => 53009,
                                'endTokenPos' => 7008,
                                'endFilePos' => 53010,
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
                        'startLine' => 1860,
                        'endLine' => 1860,
                        'startColumn' => 42,
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
 * Add a new command to the blueprint.
 *
 * @param  string  $name
 * @param  array  $parameters
 * @return \\Illuminate\\Support\\Fluent
 */',
                'startLine' => 1860,
                'endLine' => 1865,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'createCommand' => [
                'name' => 'createCommand',
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
                        'startLine' => 1874,
                        'endLine' => 1874,
                        'startColumn' => 38,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1874,
                                'endLine' => 1874,
                                'startTokenPos' => 7060,
                                'startFilePos' => 53361,
                                'endTokenPos' => 7061,
                                'endFilePos' => 53362,
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
                        'startLine' => 1874,
                        'endLine' => 1874,
                        'startColumn' => 45,
                        'endColumn' => 66,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new Fluent command.
 *
 * @param  string  $name
 * @param  array  $parameters
 * @return \\Illuminate\\Support\\Fluent
 */',
                'startLine' => 1874,
                'endLine' => 1877,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'getTable' => [
                'name' => 'getTable',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the table the blueprint describes.
 *
 * @return string
 */',
                'startLine' => 1884,
                'endLine' => 1887,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
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
 * Get the table prefix.
 *
 * @deprecated Use DB::getTablePrefix()
 *
 * @return string
 */',
                'startLine' => 1896,
                'endLine' => 1899,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'getColumns' => [
                'name' => 'getColumns',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the columns on the blueprint.
 *
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition[]
 */',
                'startLine' => 1906,
                'endLine' => 1909,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'getCommands' => [
                'name' => 'getCommands',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the commands on the blueprint.
 *
 * @return \\Illuminate\\Support\\Fluent[]
 */',
                'startLine' => 1916,
                'endLine' => 1919,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'hasState' => [
                'name' => 'hasState',
                'parameters' => [
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
 * Determine if the blueprint has state.
 *
 * @return bool
 */',
                'startLine' => 1926,
                'endLine' => 1929,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'getState' => [
                'name' => 'getState',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the state of the blueprint.
 *
 * @return \\Illuminate\\Database\\Schema\\BlueprintState
 */',
                'startLine' => 1936,
                'endLine' => 1939,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'getAddedColumns' => [
                'name' => 'getAddedColumns',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the columns on the blueprint that should be added.
 *
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition[]
 */',
                'startLine' => 1946,
                'endLine' => 1951,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'getChangedColumns' => [
                'name' => 'getChangedColumns',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the columns on the blueprint that should be changed.
 *
 * @deprecated Will be removed in a future Laravel version.
 *
 * @return \\Illuminate\\Database\\Schema\\ColumnDefinition[]
 */',
                'startLine' => 1960,
                'endLine' => 1965,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'aliasName' => null,
            ],
            'defaultTimePrecision' => [
                'name' => 'defaultTimePrecision',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the default time precision.
 */',
                'startLine' => 1970,
                'endLine' => 1973,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Schema',
                'declaringClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'implementingClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
                'currentClassName' => 'Illuminate\\Database\\Schema\\Blueprint',
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
