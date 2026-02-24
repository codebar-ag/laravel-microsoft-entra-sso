<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/Relation.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Relations\Relation
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-a3a7c7dc5d8bcfd4861a9b2621c9c1087af16a7341a73b70208a704727d38134-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/Relation.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
        'name' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
        'shortName' => 'Relation',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 64,
        'docComment' => '/**
 * @template TRelatedModel of \\Illuminate\\Database\\Eloquent\\Model
 * @template TDeclaringModel of \\Illuminate\\Database\\Eloquent\\Model
 * @template TResult
 *
 * @mixin \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>
 */',
        'attributes' => [
        ],
        'startLine' => 24,
        'endLine' => 550,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Database\\Eloquent\\Builder',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            1 => 'Illuminate\\Support\\Traits\\Macroable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'query' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'name' => 'query',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The Eloquent query builder instance.
 *
 * @var \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>
 */',
                'attributes' => [
                ],
                'startLine' => 35,
                'endLine' => 35,
                'startColumn' => 5,
                'endColumn' => 21,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'parent' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'name' => 'parent',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The parent model instance.
 *
 * @var TDeclaringModel
 */',
                'attributes' => [
                ],
                'startLine' => 42,
                'endLine' => 42,
                'startColumn' => 5,
                'endColumn' => 22,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'related' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'name' => 'related',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The related model instance.
 *
 * @var TRelatedModel
 */',
                'attributes' => [
                ],
                'startLine' => 49,
                'endLine' => 49,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'eagerKeysWereEmpty' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'name' => 'eagerKeysWereEmpty',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 56,
                        'endLine' => 56,
                        'startTokenPos' => 137,
                        'startFilePos' => 1497,
                        'endTokenPos' => 137,
                        'endFilePos' => 1501,
                    ],
                ],
                'docComment' => '/**
 * Indicates whether the eagerly loaded relation should implicitly return an empty collection.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 56,
                'endLine' => 56,
                'startColumn' => 5,
                'endColumn' => 42,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'constraints' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'name' => 'constraints',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => 'true',
                    'attributes' => [
                        'startLine' => 63,
                        'endLine' => 63,
                        'startTokenPos' => 150,
                        'startFilePos' => 1637,
                        'endTokenPos' => 150,
                        'endFilePos' => 1640,
                    ],
                ],
                'docComment' => '/**
 * Indicates if the relation is adding constraints.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 63,
                'endLine' => 63,
                'startColumn' => 5,
                'endColumn' => 41,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'morphMap' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'name' => 'morphMap',
                'modifiers' => 17,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 70,
                        'endLine' => 70,
                        'startTokenPos' => 163,
                        'startFilePos' => 1847,
                        'endTokenPos' => 164,
                        'endFilePos' => 1848,
                    ],
                ],
                'docComment' => '/**
 * An array to map morph names to their class names in the database.
 *
 * @var array<string, class-string<\\Illuminate\\Database\\Eloquent\\Model>>
 */',
                'attributes' => [
                ],
                'startLine' => 70,
                'endLine' => 70,
                'startColumn' => 5,
                'endColumn' => 33,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'requireMorphMap' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'name' => 'requireMorphMap',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 77,
                        'endLine' => 77,
                        'startTokenPos' => 177,
                        'startFilePos' => 1989,
                        'endTokenPos' => 177,
                        'endFilePos' => 1993,
                    ],
                ],
                'docComment' => '/**
 * Prevents morph relationships without a morph map.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 77,
                'endLine' => 77,
                'startColumn' => 5,
                'endColumn' => 46,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'selfJoinCount' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'name' => 'selfJoinCount',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => '0',
                    'attributes' => [
                        'startLine' => 84,
                        'endLine' => 84,
                        'startTokenPos' => 190,
                        'startFilePos' => 2106,
                        'endTokenPos' => 190,
                        'endFilePos' => 2106,
                    ],
                ],
                'docComment' => '/**
 * The count of self joins.
 *
 * @var int
 */',
                'attributes' => [
                ],
                'startLine' => 84,
                'endLine' => 84,
                'startColumn' => 5,
                'endColumn' => 40,
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
                        'startLine' => 92,
                        'endLine' => 92,
                        'startColumn' => 33,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parent' => [
                        'name' => 'parent',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Eloquent\\Model',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 92,
                        'endLine' => 92,
                        'startColumn' => 49,
                        'endColumn' => 61,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new relation instance.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>  $query
 * @param  TDeclaringModel  $parent
 */',
                'startLine' => 92,
                'endLine' => 99,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'noConstraints' => [
                'name' => 'noConstraints',
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
                        'startLine' => 109,
                        'endLine' => 109,
                        'startColumn' => 42,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run a callback with constraints disabled on the relation.
 *
 * @template TReturn of mixed
 *
 * @param  Closure(): TReturn  $callback
 * @return TReturn
 */',
                'startLine' => 109,
                'endLine' => 123,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'addConstraints' => [
                'name' => 'addConstraints',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the base constraints on the relation query.
 *
 * @return void
 */',
                'startLine' => 130,
                'endLine' => 130,
                'startColumn' => 5,
                'endColumn' => 46,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 65,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'addEagerConstraints' => [
                'name' => 'addEagerConstraints',
                'parameters' => [
                    'models' => [
                        'name' => 'models',
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
                        'startLine' => 138,
                        'endLine' => 138,
                        'startColumn' => 50,
                        'endColumn' => 62,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the constraints for an eager load of the relation.
 *
 * @param  array<int, TDeclaringModel>  $models
 * @return void
 */',
                'startLine' => 138,
                'endLine' => 138,
                'startColumn' => 5,
                'endColumn' => 64,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 65,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'initRelation' => [
                'name' => 'initRelation',
                'parameters' => [
                    'models' => [
                        'name' => 'models',
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
                        'startLine' => 147,
                        'endLine' => 147,
                        'startColumn' => 43,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'relation' => [
                        'name' => 'relation',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 147,
                        'endLine' => 147,
                        'startColumn' => 58,
                        'endColumn' => 66,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Initialize the relation on a set of models.
 *
 * @param  array<int, TDeclaringModel>  $models
 * @param  string  $relation
 * @return array<int, TDeclaringModel>
 */',
                'startLine' => 147,
                'endLine' => 147,
                'startColumn' => 5,
                'endColumn' => 68,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 65,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'match' => [
                'name' => 'match',
                'parameters' => [
                    'models' => [
                        'name' => 'models',
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
                        'startLine' => 157,
                        'endLine' => 157,
                        'startColumn' => 36,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'results' => [
                        'name' => 'results',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Eloquent\\Collection',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 157,
                        'endLine' => 157,
                        'startColumn' => 51,
                        'endColumn' => 77,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'relation' => [
                        'name' => 'relation',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 157,
                        'endLine' => 157,
                        'startColumn' => 80,
                        'endColumn' => 88,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Match the eagerly loaded results to their parents.
 *
 * @param  array<int, TDeclaringModel>  $models
 * @param  \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel>  $results
 * @param  string  $relation
 * @return array<int, TDeclaringModel>
 */',
                'startLine' => 157,
                'endLine' => 157,
                'startColumn' => 5,
                'endColumn' => 90,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 65,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'getResults' => [
                'name' => 'getResults',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the results of the relationship.
 *
 * @return TResult
 */',
                'startLine' => 164,
                'endLine' => 164,
                'startColumn' => 5,
                'endColumn' => 42,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 65,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'getEager' => [
                'name' => 'getEager',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the relationship for eager loading.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel>
 */',
                'startLine' => 171,
                'endLine' => 176,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'sole' => [
                'name' => 'sole',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 187,
                                'endLine' => 187,
                                'startTokenPos' => 460,
                                'startFilePos' => 5070,
                                'endTokenPos' => 462,
                                'endFilePos' => 5074,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 187,
                        'endLine' => 187,
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
 * Execute the query and get the first result if it\'s the sole matching record.
 *
 * @param  array|string  $columns
 * @return TRelatedModel
 *
 * @throws \\Illuminate\\Database\\Eloquent\\ModelNotFoundException<TRelatedModel>
 * @throws \\Illuminate\\Database\\MultipleRecordsFoundException
 */',
                'startLine' => 187,
                'endLine' => 202,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'get' => [
                'name' => 'get',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 210,
                                'endLine' => 210,
                                'startTokenPos' => 575,
                                'startFilePos' => 5647,
                                'endTokenPos' => 577,
                                'endFilePos' => 5651,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 210,
                        'endLine' => 210,
                        'startColumn' => 25,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the query as a "select" statement.
 *
 * @param  array  $columns
 * @return \\Illuminate\\Database\\Eloquent\\Collection<int, TRelatedModel>
 */',
                'startLine' => 210,
                'endLine' => 213,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'touch' => [
                'name' => 'touch',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Touch all of the related models for the relationship.
 *
 * @return void
 */',
                'startLine' => 220,
                'endLine' => 229,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'rawUpdate' => [
                'name' => 'rawUpdate',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 237,
                                'endLine' => 237,
                                'startTokenPos' => 676,
                                'startFilePos' => 6249,
                                'endTokenPos' => 677,
                                'endFilePos' => 6250,
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
                        'startLine' => 237,
                        'endLine' => 237,
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
 * Run a raw update against the base query.
 *
 * @param  array  $attributes
 * @return int
 */',
                'startLine' => 237,
                'endLine' => 240,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'getRelationExistenceCountQuery' => [
                'name' => 'getRelationExistenceCountQuery',
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
                        'startLine' => 249,
                        'endLine' => 249,
                        'startColumn' => 52,
                        'endColumn' => 65,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parentQuery' => [
                        'name' => 'parentQuery',
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
                        'startLine' => 249,
                        'endLine' => 249,
                        'startColumn' => 68,
                        'endColumn' => 87,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add the constraints for a relationship count query.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>  $query
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<TDeclaringModel>  $parentQuery
 * @return \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>
 */',
                'startLine' => 249,
                'endLine' => 254,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'getRelationExistenceQuery' => [
                'name' => 'getRelationExistenceQuery',
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
                        'startLine' => 266,
                        'endLine' => 266,
                        'startColumn' => 47,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parentQuery' => [
                        'name' => 'parentQuery',
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
                        'startLine' => 266,
                        'endLine' => 266,
                        'startColumn' => 63,
                        'endColumn' => 82,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 266,
                                'endLine' => 266,
                                'startTokenPos' => 776,
                                'startFilePos' => 7432,
                                'endTokenPos' => 778,
                                'endFilePos' => 7436,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 266,
                        'endLine' => 266,
                        'startColumn' => 85,
                        'endColumn' => 100,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add the constraints for an internal relationship existence query.
 *
 * Essentially, these queries compare on column names like whereColumn.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>  $query
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<TDeclaringModel>  $parentQuery
 * @param  mixed  $columns
 * @return \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>
 */',
                'startLine' => 266,
                'endLine' => 271,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'getRelationCountHash' => [
                'name' => 'getRelationCountHash',
                'parameters' => [
                    'incrementJoinCount' => [
                        'name' => 'incrementJoinCount',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 279,
                                'endLine' => 279,
                                'startTokenPos' => 828,
                                'startFilePos' => 7794,
                                'endTokenPos' => 828,
                                'endFilePos' => 7797,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 279,
                        'endLine' => 279,
                        'startColumn' => 42,
                        'endColumn' => 67,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a relationship join table hash.
 *
 * @param  bool  $incrementJoinCount
 * @return string
 */',
                'startLine' => 279,
                'endLine' => 282,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'getKeys' => [
                'name' => 'getKeys',
                'parameters' => [
                    'models' => [
                        'name' => 'models',
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
                        'startLine' => 291,
                        'endLine' => 291,
                        'startColumn' => 32,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 291,
                                'endLine' => 291,
                                'startTokenPos' => 874,
                                'startFilePos' => 8186,
                                'endTokenPos' => 874,
                                'endFilePos' => 8189,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 291,
                        'endLine' => 291,
                        'startColumn' => 47,
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
 * Get all of the primary keys for an array of models.
 *
 * @param  array<int, TDeclaringModel>  $models
 * @param  string|null  $key
 * @return array<int, int|string|null>
 */',
                'startLine' => 291,
                'endLine' => 296,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
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
 * @return \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>
 */',
                'startLine' => 303,
                'endLine' => 306,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'getQuery' => [
                'name' => 'getQuery',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the underlying query for the relation.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>
 */',
                'startLine' => 313,
                'endLine' => 316,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'getBaseQuery' => [
                'name' => 'getBaseQuery',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the base query builder driving the Eloquent builder.
 *
 * @return \\Illuminate\\Database\\Query\\Builder
 */',
                'startLine' => 323,
                'endLine' => 326,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'toBase' => [
                'name' => 'toBase',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a base query builder instance.
 *
 * @return \\Illuminate\\Database\\Query\\Builder
 */',
                'startLine' => 333,
                'endLine' => 336,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'getParent' => [
                'name' => 'getParent',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the parent model of the relation.
 *
 * @return TDeclaringModel
 */',
                'startLine' => 343,
                'endLine' => 346,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'getQualifiedParentKeyName' => [
                'name' => 'getQualifiedParentKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the fully-qualified parent key name.
 *
 * @return string
 */',
                'startLine' => 353,
                'endLine' => 356,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'getRelated' => [
                'name' => 'getRelated',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the related model of the relation.
 *
 * @return TRelatedModel
 */',
                'startLine' => 363,
                'endLine' => 366,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'createdAt' => [
                'name' => 'createdAt',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the name of the "created at" column.
 *
 * @return string
 */',
                'startLine' => 373,
                'endLine' => 376,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'updatedAt' => [
                'name' => 'updatedAt',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the name of the "updated at" column.
 *
 * @return string
 */',
                'startLine' => 383,
                'endLine' => 386,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'relatedUpdatedAt' => [
                'name' => 'relatedUpdatedAt',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the name of the related model\'s "updated at" column.
 *
 * @return string
 */',
                'startLine' => 393,
                'endLine' => 396,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'whereInEager' => [
                'name' => 'whereInEager',
                'parameters' => [
                    'whereIn' => [
                        'name' => 'whereIn',
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
                        'startLine' => 407,
                        'endLine' => 407,
                        'startColumn' => 37,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'key' => [
                        'name' => 'key',
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
                        'startLine' => 407,
                        'endLine' => 407,
                        'startColumn' => 54,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'modelKeys' => [
                        'name' => 'modelKeys',
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
                        'startLine' => 407,
                        'endLine' => 407,
                        'startColumn' => 67,
                        'endColumn' => 82,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'query' => [
                        'name' => 'query',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 407,
                                'endLine' => 407,
                                'startTokenPos' => 1218,
                                'startFilePos' => 10857,
                                'endTokenPos' => 1218,
                                'endFilePos' => 10860,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Illuminate\\Database\\Eloquent\\Builder',
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
                        'startLine' => 407,
                        'endLine' => 407,
                        'startColumn' => 85,
                        'endColumn' => 106,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Add a whereIn eager constraint for the given set of model keys to be loaded.
 *
 * @param  string  $whereIn
 * @param  string  $key
 * @param  array  $modelKeys
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<TRelatedModel>|null  $query
 * @return void
 */',
                'startLine' => 407,
                'endLine' => 414,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'whereInMethod' => [
                'name' => 'whereInMethod',
                'parameters' => [
                    'model' => [
                        'name' => 'model',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\Eloquent\\Model',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 423,
                        'endLine' => 423,
                        'startColumn' => 38,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'key' => [
                        'name' => 'key',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 423,
                        'endLine' => 423,
                        'startColumn' => 52,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the name of the "where in" method for eager loading.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $model
 * @param  string  $key
 * @return string
 */',
                'startLine' => 423,
                'endLine' => 429,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'requireMorphMap' => [
                'name' => 'requireMorphMap',
                'parameters' => [
                    'requireMorphMap' => [
                        'name' => 'requireMorphMap',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 437,
                                'endLine' => 437,
                                'startTokenPos' => 1353,
                                'startFilePos' => 11718,
                                'endTokenPos' => 1353,
                                'endFilePos' => 11721,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 437,
                        'endLine' => 437,
                        'startColumn' => 44,
                        'endColumn' => 66,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prevent polymorphic relationships from being used without model mappings.
 *
 * @param  bool  $requireMorphMap
 * @return void
 */',
                'startLine' => 437,
                'endLine' => 440,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'requiresMorphMap' => [
                'name' => 'requiresMorphMap',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if polymorphic relationships require explicit model mapping.
 *
 * @return bool
 */',
                'startLine' => 447,
                'endLine' => 450,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'enforceMorphMap' => [
                'name' => 'enforceMorphMap',
                'parameters' => [
                    'map' => [
                        'name' => 'map',
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
                        'startLine' => 459,
                        'endLine' => 459,
                        'startColumn' => 44,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'merge' => [
                        'name' => 'merge',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 459,
                                'endLine' => 459,
                                'startTokenPos' => 1411,
                                'startFilePos' => 12346,
                                'endTokenPos' => 1411,
                                'endFilePos' => 12349,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 459,
                        'endLine' => 459,
                        'startColumn' => 56,
                        'endColumn' => 68,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Define the morph map for polymorphic relations and require all morphed models to be explicitly mapped.
 *
 * @param  array<array-key, class-string<\\Illuminate\\Database\\Eloquent\\Model>>  $map
 * @param  bool  $merge
 * @return array
 */',
                'startLine' => 459,
                'endLine' => 464,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'morphMap' => [
                'name' => 'morphMap',
                'parameters' => [
                    'map' => [
                        'name' => 'map',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 473,
                                'endLine' => 473,
                                'startTokenPos' => 1455,
                                'startFilePos' => 12782,
                                'endTokenPos' => 1455,
                                'endFilePos' => 12785,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'array',
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
                        'startLine' => 473,
                        'endLine' => 473,
                        'startColumn' => 37,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'merge' => [
                        'name' => 'merge',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 473,
                                'endLine' => 473,
                                'startTokenPos' => 1462,
                                'startFilePos' => 12797,
                                'endTokenPos' => 1462,
                                'endFilePos' => 12800,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 473,
                        'endLine' => 473,
                        'startColumn' => 57,
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
 * Set or get the morph map for polymorphic relations.
 *
 * @param  array<array-key, class-string<\\Illuminate\\Database\\Eloquent\\Model>>|null  $map
 * @param  bool  $merge
 * @return array<string, class-string<\\Illuminate\\Database\\Eloquent\\Model>>
 */',
                'startLine' => 473,
                'endLine' => 484,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'buildMorphMapFromModels' => [
                'name' => 'buildMorphMapFromModels',
                'parameters' => [
                    'models' => [
                        'name' => 'models',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 492,
                                'endLine' => 492,
                                'startTokenPos' => 1547,
                                'startFilePos' => 13407,
                                'endTokenPos' => 1547,
                                'endFilePos' => 13410,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'array',
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
                        'startLine' => 492,
                        'endLine' => 492,
                        'startColumn' => 55,
                        'endColumn' => 75,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Builds a table-keyed array from model class names.
 *
 * @param  array<array-key, class-string<\\Illuminate\\Database\\Eloquent\\Model>>|null  $models
 * @return array<string, class-string<\\Illuminate\\Database\\Eloquent\\Model>>|null
 */',
                'startLine' => 492,
                'endLine' => 501,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 18,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'getMorphedModel' => [
                'name' => 'getMorphedModel',
                'parameters' => [
                    'alias' => [
                        'name' => 'alias',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 509,
                        'endLine' => 509,
                        'startColumn' => 44,
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
 * Get the model associated with a custom polymorphic type.
 *
 * @param  string  $alias
 * @return class-string<\\Illuminate\\Database\\Eloquent\\Model>|null
 */',
                'startLine' => 509,
                'endLine' => 512,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            'getMorphAlias' => [
                'name' => 'getMorphAlias',
                'parameters' => [
                    'className' => [
                        'name' => 'className',
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
                        'startLine' => 520,
                        'endLine' => 520,
                        'startColumn' => 42,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the alias associated with a custom polymorphic class.
 *
 * @param  class-string<\\Illuminate\\Database\\Eloquent\\Model>  $className
 * @return int|string
 */',
                'startLine' => 520,
                'endLine' => 523,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
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
                        'startLine' => 532,
                        'endLine' => 532,
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
                        'startLine' => 532,
                        'endLine' => 532,
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
 * Handle dynamic method calls to the relationship.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */',
                'startLine' => 532,
                'endLine' => 539,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'aliasName' => null,
            ],
            '__clone' => [
                'name' => '__clone',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Force a clone of the underlying query builder when cloning.
 *
 * @return void
 */',
                'startLine' => 546,
                'endLine' => 549,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Relation',
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
