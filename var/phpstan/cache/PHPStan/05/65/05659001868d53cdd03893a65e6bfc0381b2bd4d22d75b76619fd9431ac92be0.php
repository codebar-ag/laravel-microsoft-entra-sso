<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/Concerns/CanBeOneOfMany.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Relations\Concerns\CanBeOneOfMany
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-38bc5d2eb7c99bc89747c75f7d17e019e2ccec21afb3441a35136977b66681bc-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/Concerns/CanBeOneOfMany.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
        'name' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
        'shortName' => 'CanBeOneOfMany',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 12,
        'endLine' => 332,
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
            'isOneOfMany' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'name' => 'isOneOfMany',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 19,
                        'endLine' => 19,
                        'startTokenPos' => 51,
                        'startFilePos' => 409,
                        'endTokenPos' => 51,
                        'endFilePos' => 413,
                    ],
                ],
                'docComment' => '/**
 * Determines whether the relationship is one-of-many.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 19,
                'endLine' => 19,
                'startColumn' => 5,
                'endColumn' => 35,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'relationName' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'name' => 'relationName',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The name of the relationship.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 26,
                'endLine' => 26,
                'startColumn' => 5,
                'endColumn' => 28,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'oneOfManySubQuery' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'name' => 'oneOfManySubQuery',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The one of many inner join subselect query builder instance.
 *
 * @var \\Illuminate\\Database\\Eloquent\\Builder<*>|null
 */',
                'attributes' => [
                ],
                'startLine' => 33,
                'endLine' => 33,
                'startColumn' => 5,
                'endColumn' => 33,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'addOneOfManySubQueryConstraints' => [
                'name' => 'addOneOfManySubQueryConstraints',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Eloquent\\Builder',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 43,
                        'endLine' => 43,
                        'startColumn' => 62,
                        'endColumn' => 75,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 43,
                                'endLine' => 43,
                                'startTokenPos' => 87,
                                'startFilePos' => 1058,
                                'endTokenPos' => 87,
                                'endFilePos' => 1061,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 43,
                        'endLine' => 43,
                        'startColumn' => 78,
                        'endColumn' => 91,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'aggregate' => [
                        'name' => 'aggregate',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 43,
                                'endLine' => 43,
                                'startTokenPos' => 94,
                                'startFilePos' => 1077,
                                'endTokenPos' => 94,
                                'endFilePos' => 1080,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 43,
                        'endLine' => 43,
                        'startColumn' => 94,
                        'endColumn' => 110,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add constraints for inner join subselect for one of many relationships.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<*>  $query
 * @param  string|null  $column
 * @param  string|null  $aggregate
 * @return void
 */',
                'startLine' => 43,
                'endLine' => 43,
                'startColumn' => 5,
                'endColumn' => 112,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 65,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'aliasName' => null,
            ],
            'getOneOfManySubQuerySelectColumns' => [
                'name' => 'getOneOfManySubQuerySelectColumns',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the columns the determine the relationship groups.
 *
 * @return array|string
 */',
                'startLine' => 50,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 65,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 65,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'aliasName' => null,
            ],
            'addOneOfManyJoinSubQueryConstraints' => [
                'name' => 'addOneOfManyJoinSubQueryConstraints',
                'parameters' => [
                    'join' => [
                        'name' => 'join',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Query\\JoinClause',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 58,
                        'endLine' => 58,
                        'startColumn' => 66,
                        'endColumn' => 81,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add join query constraints for one of many relationships.
 *
 * @param  \\Illuminate\\Database\\Query\\JoinClause  $join
 * @return void
 */',
                'startLine' => 58,
                'endLine' => 58,
                'startColumn' => 5,
                'endColumn' => 83,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 65,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'aliasName' => null,
            ],
            'ofMany' => [
                'name' => 'ofMany',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => '\'id\'',
                            'attributes' => [
                                'startLine' => 70,
                                'endLine' => 70,
                                'startTokenPos' => 139,
                                'startFilePos' => 1866,
                                'endTokenPos' => 139,
                                'endFilePos' => 1869,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 70,
                        'endLine' => 70,
                        'startColumn' => 28,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'aggregate' => [
                        'name' => 'aggregate',
                        'default' => [
                            'code' => '\'MAX\'',
                            'attributes' => [
                                'startLine' => 70,
                                'endLine' => 70,
                                'startTokenPos' => 146,
                                'startFilePos' => 1885,
                                'endTokenPos' => 146,
                                'endFilePos' => 1889,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 70,
                        'endLine' => 70,
                        'startColumn' => 44,
                        'endColumn' => 61,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'relation' => [
                        'name' => 'relation',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 70,
                                'endLine' => 70,
                                'startTokenPos' => 153,
                                'startFilePos' => 1904,
                                'endTokenPos' => 153,
                                'endFilePos' => 1907,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 70,
                        'endLine' => 70,
                        'startColumn' => 64,
                        'endColumn' => 79,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that the relation is a single result of a larger one-to-many relationship.
 *
 * @param  string|array|null  $column
 * @param  string|\\Closure|null  $aggregate
 * @param  string|null  $relation
 * @return $this
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 70,
                'endLine' => 143,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'aliasName' => null,
            ],
            'latestOfMany' => [
                'name' => 'latestOfMany',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => '\'id\'',
                            'attributes' => [
                                'startLine' => 152,
                                'endLine' => 152,
                                'startTokenPos' => 646,
                                'startFilePos' => 4382,
                                'endTokenPos' => 646,
                                'endFilePos' => 4385,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 152,
                        'endLine' => 152,
                        'startColumn' => 34,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'relation' => [
                        'name' => 'relation',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 152,
                                'endLine' => 152,
                                'startTokenPos' => 653,
                                'startFilePos' => 4400,
                                'endTokenPos' => 653,
                                'endFilePos' => 4403,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 152,
                        'endLine' => 152,
                        'startColumn' => 50,
                        'endColumn' => 65,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that the relation is the latest single result of a larger one-to-many relationship.
 *
 * @param  string|array|null  $column
 * @param  string|null  $relation
 * @return $this
 */',
                'startLine' => 152,
                'endLine' => 157,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'aliasName' => null,
            ],
            'oldestOfMany' => [
                'name' => 'oldestOfMany',
                'parameters' => [
                    'column' => [
                        'name' => 'column',
                        'default' => [
                            'code' => '\'id\'',
                            'attributes' => [
                                'startLine' => 166,
                                'endLine' => 166,
                                'startTokenPos' => 721,
                                'startFilePos' => 4852,
                                'endTokenPos' => 721,
                                'endFilePos' => 4855,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 166,
                        'endLine' => 166,
                        'startColumn' => 34,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'relation' => [
                        'name' => 'relation',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 166,
                                'endLine' => 166,
                                'startTokenPos' => 728,
                                'startFilePos' => 4870,
                                'endTokenPos' => 728,
                                'endFilePos' => 4873,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 166,
                        'endLine' => 166,
                        'startColumn' => 50,
                        'endColumn' => 65,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that the relation is the oldest single result of a larger one-to-many relationship.
 *
 * @param  string|array|null  $column
 * @param  string|null  $relation
 * @return $this
 */',
                'startLine' => 166,
                'endLine' => 171,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'aliasName' => null,
            ],
            'getDefaultOneOfManyJoinAlias' => [
                'name' => 'getDefaultOneOfManyJoinAlias',
                'parameters' => [
                    'relation' => [
                        'name' => 'relation',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 179,
                        'endLine' => 179,
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
 * Get the default alias for the one of many inner join clause.
 *
 * @param  string  $relation
 * @return string
 */',
                'startLine' => 179,
                'endLine' => 184,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'aliasName' => null,
            ],
            'newOneOfManySubQuery' => [
                'name' => 'newOneOfManySubQuery',
                'parameters' => [
                    'groupBy' => [
                        'name' => 'groupBy',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 194,
                        'endLine' => 194,
                        'startColumn' => 45,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 194,
                                'endLine' => 194,
                                'startTokenPos' => 843,
                                'startFilePos' => 5796,
                                'endTokenPos' => 843,
                                'endFilePos' => 5799,
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
                        'startColumn' => 55,
                        'endColumn' => 69,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'aggregate' => [
                        'name' => 'aggregate',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 194,
                                'endLine' => 194,
                                'startTokenPos' => 850,
                                'startFilePos' => 5815,
                                'endTokenPos' => 850,
                                'endFilePos' => 5818,
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
                        'startColumn' => 72,
                        'endColumn' => 88,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a new query for the related model, grouping the query by the given column, often the foreign key of the relationship.
 *
 * @param  string|array  $groupBy
 * @param  array<string>|null  $columns
 * @param  string|null  $aggregate
 * @return \\Illuminate\\Database\\Eloquent\\Builder<*>
 */',
                'startLine' => 194,
                'endLine' => 221,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'aliasName' => null,
            ],
            'addOneOfManyJoinSubQuery' => [
                'name' => 'addOneOfManyJoinSubQuery',
                'parameters' => [
                    'parent' => [
                        'name' => 'parent',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Eloquent\\Builder',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 231,
                        'endLine' => 231,
                        'startColumn' => 49,
                        'endColumn' => 63,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'subQuery' => [
                        'name' => 'subQuery',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Eloquent\\Builder',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 231,
                        'endLine' => 231,
                        'startColumn' => 66,
                        'endColumn' => 82,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'on' => [
                        'name' => 'on',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 231,
                        'endLine' => 231,
                        'startColumn' => 85,
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
 * Add the join subquery to the given query on the given column and the relationship\'s foreign key.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<*>  $parent
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<*>  $subQuery
 * @param  array<string>  $on
 * @return void
 */',
                'startLine' => 231,
                'endLine' => 244,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'aliasName' => null,
            ],
            'mergeOneOfManyJoinsTo' => [
                'name' => 'mergeOneOfManyJoinsTo',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Eloquent\\Builder',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 252,
                        'endLine' => 252,
                        'startColumn' => 46,
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
 * Merge the relationship query joins to the given query builder.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<*>  $query
 * @return void
 */',
                'startLine' => 252,
                'endLine' => 257,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'aliasName' => null,
            ],
            'getRelationQuery' => [
                'name' => 'getRelationQuery',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the query builder that will contain the relationship constraints.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Builder<*>
 */',
                'startLine' => 264,
                'endLine' => 269,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'aliasName' => null,
            ],
            'getOneOfManySubQuery' => [
                'name' => 'getOneOfManySubQuery',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the one of many inner join subselect builder instance.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Builder<*>|void
 */',
                'startLine' => 276,
                'endLine' => 279,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'aliasName' => null,
            ],
            'qualifySubSelectColumn' => [
                'name' => 'qualifySubSelectColumn',
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
                        'startLine' => 287,
                        'endLine' => 287,
                        'startColumn' => 44,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the qualified column name for the one-of-many relationship using the subselect join query\'s alias.
 *
 * @param  string  $column
 * @return string
 */',
                'startLine' => 287,
                'endLine' => 290,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'aliasName' => null,
            ],
            'qualifyRelatedColumn' => [
                'name' => 'qualifyRelatedColumn',
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
                        'startLine' => 298,
                        'endLine' => 298,
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
 * Qualify related column using the related table name if it is not already qualified.
 *
 * @param  string  $column
 * @return string
 */',
                'startLine' => 298,
                'endLine' => 301,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'aliasName' => null,
            ],
            'guessRelationship' => [
                'name' => 'guessRelationship',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Guess the "hasOne" relationship\'s name via backtrace.
 *
 * @return string
 */',
                'startLine' => 308,
                'endLine' => 311,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'aliasName' => null,
            ],
            'isOneOfMany' => [
                'name' => 'isOneOfMany',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine whether the relationship is a one-of-many relationship.
 *
 * @return bool
 */',
                'startLine' => 318,
                'endLine' => 321,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'aliasName' => null,
            ],
            'getRelationName' => [
                'name' => 'getRelationName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the name of the relationship.
 *
 * @return string
 */',
                'startLine' => 328,
                'endLine' => 331,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\CanBeOneOfMany',
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
