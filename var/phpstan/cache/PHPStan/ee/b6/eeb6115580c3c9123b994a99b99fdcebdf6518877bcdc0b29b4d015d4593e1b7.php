<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/Concerns/SupportsDefaultModels.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Relations\Concerns\SupportsDefaultModels
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-1e6a9ceb6e4a621e3292d7b027f4949182c1649b54a5beb20aae7c23feb069c9-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsDefaultModels',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Relations/Concerns/SupportsDefaultModels.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
        'name' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsDefaultModels',
        'shortName' => 'SupportsDefaultModels',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 7,
        'endLine' => 63,
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
            'withDefault' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsDefaultModels',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsDefaultModels',
                'name' => 'withDefault',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * Indicates if a default model instance should be used.
 *
 * Alternatively, may be a Closure or array.
 *
 * @var \\Closure|array|bool
 */',
                'attributes' => [
                ],
                'startLine' => 16,
                'endLine' => 16,
                'startColumn' => 5,
                'endColumn' => 27,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'newRelatedInstanceFor' => [
                'name' => 'newRelatedInstanceFor',
                'parameters' => [
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
                        'startLine' => 24,
                        'endLine' => 24,
                        'startColumn' => 55,
                        'endColumn' => 67,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Make a new related instance for the given model.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $parent
 * @return \\Illuminate\\Database\\Eloquent\\Model
 */',
                'startLine' => 24,
                'endLine' => 24,
                'startColumn' => 5,
                'endColumn' => 69,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 66,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsDefaultModels',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsDefaultModels',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsDefaultModels',
                'aliasName' => null,
            ],
            'withDefault' => [
                'name' => 'withDefault',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 32,
                                'endLine' => 32,
                                'startTokenPos' => 53,
                                'startFilePos' => 810,
                                'endTokenPos' => 53,
                                'endFilePos' => 813,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 32,
                        'endLine' => 32,
                        'startColumn' => 33,
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
 * Return a new model instance in case the relationship does not exist.
 *
 * @param  \\Closure|array|bool  $callback
 * @return $this
 */',
                'startLine' => 32,
                'endLine' => 37,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsDefaultModels',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsDefaultModels',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsDefaultModels',
                'aliasName' => null,
            ],
            'getDefaultFor' => [
                'name' => 'getDefaultFor',
                'parameters' => [
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
                        'startLine' => 45,
                        'endLine' => 45,
                        'startColumn' => 38,
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
 * Get the default value for this relation.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $parent
 * @return \\Illuminate\\Database\\Eloquent\\Model|null
 */',
                'startLine' => 45,
                'endLine' => 62,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsDefaultModels',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsDefaultModels',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Relations\\Concerns\\SupportsDefaultModels',
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
