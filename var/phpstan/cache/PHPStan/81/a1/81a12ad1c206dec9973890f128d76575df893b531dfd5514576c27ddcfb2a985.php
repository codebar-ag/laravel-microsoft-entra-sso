<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Model.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Database\Eloquent\Model
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-19680451c06eeae0182a0a7eec60ddca810c3f91e23ec7dd795d048cc73cd22f-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Database\\Eloquent\\Model',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Database/Eloquent/Model.php',
            ],
        ],
        'namespace' => 'Illuminate\\Database\\Eloquent',
        'name' => 'Illuminate\\Database\\Eloquent\\Model',
        'shortName' => 'Model',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 64,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 38,
        'endLine' => 2626,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Support\\Arrayable',
            1 => 'ArrayAccess',
            2 => 'Illuminate\\Contracts\\Support\\CanBeEscapedWhenCastToString',
            3 => 'Illuminate\\Contracts\\Broadcasting\\HasBroadcastChannel',
            4 => 'Illuminate\\Contracts\\Support\\Jsonable',
            5 => 'JsonSerializable',
            6 => 'Illuminate\\Contracts\\Queue\\QueueableEntity',
            7 => 'Stringable',
            8 => 'Illuminate\\Contracts\\Routing\\UrlRoutable',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasAttributes',
            1 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasEvents',
            2 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasGlobalScopes',
            3 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasRelationships',
            4 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasTimestamps',
            5 => 'Illuminate\\Database\\Eloquent\\Concerns\\HasUniqueIds',
            6 => 'Illuminate\\Database\\Eloquent\\Concerns\\HidesAttributes',
            7 => 'Illuminate\\Database\\Eloquent\\Concerns\\GuardsAttributes',
            8 => 'Illuminate\\Database\\Eloquent\\Concerns\\PreventsCircularRecursion',
            9 => 'Illuminate\\Database\\Eloquent\\Concerns\\TransformsToResource',
            10 => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            11 => 'Illuminate\\Database\\Eloquent\\HasCollection',
        ],
        'immediateConstants' => [
            'CREATED_AT' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'CREATED_AT',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'created_at\'',
                    'attributes' => [
                        'startLine' => 283,
                        'endLine' => 283,
                        'startTokenPos' => 643,
                        'startFilePos' => 7305,
                        'endTokenPos' => 643,
                        'endFilePos' => 7316,
                    ],
                ],
                'docComment' => '/**
 * The name of the "created at" column.
 *
 * @var string|null
 */',
                'attributes' => [
                ],
                'startLine' => 283,
                'endLine' => 283,
                'startColumn' => 5,
                'endColumn' => 36,
            ],
            'UPDATED_AT' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'UPDATED_AT',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'updated_at\'',
                    'attributes' => [
                        'startLine' => 290,
                        'endLine' => 290,
                        'startTokenPos' => 654,
                        'startFilePos' => 7434,
                        'endTokenPos' => 654,
                        'endFilePos' => 7445,
                    ],
                ],
                'docComment' => '/**
 * The name of the "updated at" column.
 *
 * @var string|null
 */',
                'attributes' => [
                ],
                'startLine' => 290,
                'endLine' => 290,
                'startColumn' => 5,
                'endColumn' => 36,
            ],
        ],
        'immediateProperties' => [
            'connection' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'connection',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The connection name for the model.
 *
 * @var \\UnitEnum|string|null
 */',
                'attributes' => [
                ],
                'startLine' => 59,
                'endLine' => 59,
                'startColumn' => 5,
                'endColumn' => 26,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'table' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'table',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The table associated with the model.
 *
 * @var string|null
 */',
                'attributes' => [
                ],
                'startLine' => 66,
                'endLine' => 66,
                'startColumn' => 5,
                'endColumn' => 21,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'primaryKey' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'primaryKey',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'id\'',
                    'attributes' => [
                        'startLine' => 73,
                        'endLine' => 73,
                        'startTokenPos' => 284,
                        'startFilePos' => 2420,
                        'endTokenPos' => 284,
                        'endFilePos' => 2423,
                    ],
                ],
                'docComment' => '/**
 * The primary key for the model.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 73,
                'endLine' => 73,
                'startColumn' => 5,
                'endColumn' => 33,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'keyType' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'keyType',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '\'int\'',
                    'attributes' => [
                        'startLine' => 80,
                        'endLine' => 80,
                        'startTokenPos' => 295,
                        'startFilePos' => 2535,
                        'endTokenPos' => 295,
                        'endFilePos' => 2539,
                    ],
                ],
                'docComment' => '/**
 * The "type" of the primary key ID.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 80,
                'endLine' => 80,
                'startColumn' => 5,
                'endColumn' => 31,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'incrementing' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'incrementing',
                'modifiers' => 1,
                'type' => null,
                'default' => [
                    'code' => 'true',
                    'attributes' => [
                        'startLine' => 87,
                        'endLine' => 87,
                        'startTokenPos' => 306,
                        'startFilePos' => 2661,
                        'endTokenPos' => 306,
                        'endFilePos' => 2664,
                    ],
                ],
                'docComment' => '/**
 * Indicates if the IDs are auto-incrementing.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 87,
                'endLine' => 87,
                'startColumn' => 5,
                'endColumn' => 32,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'with' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'with',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 94,
                        'endLine' => 94,
                        'startTokenPos' => 317,
                        'startFilePos' => 2782,
                        'endTokenPos' => 318,
                        'endFilePos' => 2783,
                    ],
                ],
                'docComment' => '/**
 * The relations to eager load on every query.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 94,
                'endLine' => 94,
                'startColumn' => 5,
                'endColumn' => 25,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'withCount' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'withCount',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 101,
                        'endLine' => 101,
                        'startTokenPos' => 329,
                        'startFilePos' => 2930,
                        'endTokenPos' => 330,
                        'endFilePos' => 2931,
                    ],
                ],
                'docComment' => '/**
 * The relationship counts that should be eager loaded on every query.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 101,
                'endLine' => 101,
                'startColumn' => 5,
                'endColumn' => 30,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'preventsLazyLoading' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'preventsLazyLoading',
                'modifiers' => 1,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 108,
                        'endLine' => 108,
                        'startTokenPos' => 341,
                        'startFilePos' => 3080,
                        'endTokenPos' => 341,
                        'endFilePos' => 3084,
                    ],
                ],
                'docComment' => '/**
 * Indicates whether lazy loading will be prevented on this model.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 108,
                'endLine' => 108,
                'startColumn' => 5,
                'endColumn' => 40,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'perPage' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'perPage',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '15',
                    'attributes' => [
                        'startLine' => 115,
                        'endLine' => 115,
                        'startTokenPos' => 352,
                        'startFilePos' => 3206,
                        'endTokenPos' => 352,
                        'endFilePos' => 3207,
                    ],
                ],
                'docComment' => '/**
 * The number of models to return for pagination.
 *
 * @var int
 */',
                'attributes' => [
                ],
                'startLine' => 115,
                'endLine' => 115,
                'startColumn' => 5,
                'endColumn' => 28,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'exists' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'exists',
                'modifiers' => 1,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 122,
                        'endLine' => 122,
                        'startTokenPos' => 363,
                        'startFilePos' => 3310,
                        'endTokenPos' => 363,
                        'endFilePos' => 3314,
                    ],
                ],
                'docComment' => '/**
 * Indicates if the model exists.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 122,
                'endLine' => 122,
                'startColumn' => 5,
                'endColumn' => 27,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'wasRecentlyCreated' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'wasRecentlyCreated',
                'modifiers' => 1,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 129,
                        'endLine' => 129,
                        'startTokenPos' => 374,
                        'startFilePos' => 3465,
                        'endTokenPos' => 374,
                        'endFilePos' => 3469,
                    ],
                ],
                'docComment' => '/**
 * Indicates if the model was inserted during the object\'s lifecycle.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 129,
                'endLine' => 129,
                'startColumn' => 5,
                'endColumn' => 39,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'escapeWhenCastingToString' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'escapeWhenCastingToString',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 136,
                        'endLine' => 136,
                        'startTokenPos' => 385,
                        'startFilePos' => 3659,
                        'endTokenPos' => 385,
                        'endFilePos' => 3663,
                    ],
                ],
                'docComment' => '/**
 * Indicates that the object\'s string representation should be escaped when __toString is invoked.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 136,
                'endLine' => 136,
                'startColumn' => 5,
                'endColumn' => 49,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'resolver' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'resolver',
                'modifiers' => 18,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The connection resolver instance.
 *
 * @var \\Illuminate\\Database\\ConnectionResolverInterface
 */',
                'attributes' => [
                ],
                'startLine' => 143,
                'endLine' => 143,
                'startColumn' => 5,
                'endColumn' => 31,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'dispatcher' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'dispatcher',
                'modifiers' => 18,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The event dispatcher instance.
 *
 * @var \\Illuminate\\Contracts\\Events\\Dispatcher|null
 */',
                'attributes' => [
                ],
                'startLine' => 150,
                'endLine' => 150,
                'startColumn' => 5,
                'endColumn' => 33,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'booted' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'booted',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 157,
                        'endLine' => 157,
                        'startTokenPos' => 416,
                        'startFilePos' => 4085,
                        'endTokenPos' => 417,
                        'endFilePos' => 4086,
                    ],
                ],
                'docComment' => '/**
 * The array of booted models.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 157,
                'endLine' => 157,
                'startColumn' => 5,
                'endColumn' => 34,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'bootedCallbacks' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'bootedCallbacks',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 164,
                        'endLine' => 164,
                        'startTokenPos' => 430,
                        'startFilePos' => 4244,
                        'endTokenPos' => 431,
                        'endFilePos' => 4245,
                    ],
                ],
                'docComment' => '/**
 * The callbacks that should be executed after the model has booted.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 164,
                'endLine' => 164,
                'startColumn' => 5,
                'endColumn' => 43,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'traitInitializers' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'traitInitializers',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 171,
                        'endLine' => 171,
                        'startTokenPos' => 444,
                        'startFilePos' => 4413,
                        'endTokenPos' => 445,
                        'endFilePos' => 4414,
                    ],
                ],
                'docComment' => '/**
 * The array of trait initializers that will be called on each new instance.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 171,
                'endLine' => 171,
                'startColumn' => 5,
                'endColumn' => 45,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'globalScopes' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'globalScopes',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 178,
                        'endLine' => 178,
                        'startTokenPos' => 458,
                        'startFilePos' => 4544,
                        'endTokenPos' => 459,
                        'endFilePos' => 4545,
                    ],
                ],
                'docComment' => '/**
 * The array of global scopes on the model.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 178,
                'endLine' => 178,
                'startColumn' => 5,
                'endColumn' => 40,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'ignoreOnTouch' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'ignoreOnTouch',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 185,
                        'endLine' => 185,
                        'startTokenPos' => 472,
                        'startFilePos' => 4702,
                        'endTokenPos' => 473,
                        'endFilePos' => 4703,
                    ],
                ],
                'docComment' => '/**
 * The list of models classes that should not be affected with touch.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 185,
                'endLine' => 185,
                'startColumn' => 5,
                'endColumn' => 41,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'modelsShouldPreventLazyLoading' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'modelsShouldPreventLazyLoading',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 192,
                        'endLine' => 192,
                        'startTokenPos' => 486,
                        'startFilePos' => 4876,
                        'endTokenPos' => 486,
                        'endFilePos' => 4880,
                    ],
                ],
                'docComment' => '/**
 * Indicates whether lazy loading should be restricted on all models.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 192,
                'endLine' => 192,
                'startColumn' => 5,
                'endColumn' => 61,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'modelsShouldAutomaticallyEagerLoadRelationships' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'modelsShouldAutomaticallyEagerLoadRelationships',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 199,
                        'endLine' => 199,
                        'startTokenPos' => 499,
                        'startFilePos' => 5100,
                        'endTokenPos' => 499,
                        'endFilePos' => 5104,
                    ],
                ],
                'docComment' => '/**
 * Indicates whether relations should be automatically loaded on all models when they are accessed.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 199,
                'endLine' => 199,
                'startColumn' => 5,
                'endColumn' => 78,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'lazyLoadingViolationCallback' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'lazyLoadingViolationCallback',
                'modifiers' => 18,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The callback that is responsible for handling lazy loading violations.
 *
 * @var (callable(self, string))|null
 */',
                'attributes' => [
                ],
                'startLine' => 206,
                'endLine' => 206,
                'startColumn' => 5,
                'endColumn' => 51,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'modelsShouldPreventSilentlyDiscardingAttributes' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'modelsShouldPreventSilentlyDiscardingAttributes',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 213,
                        'endLine' => 213,
                        'startTokenPos' => 521,
                        'startFilePos' => 5522,
                        'endTokenPos' => 521,
                        'endFilePos' => 5526,
                    ],
                ],
                'docComment' => '/**
 * Indicates if an exception should be thrown instead of silently discarding non-fillable attributes.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 213,
                'endLine' => 213,
                'startColumn' => 5,
                'endColumn' => 78,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'discardedAttributeViolationCallback' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'discardedAttributeViolationCallback',
                'modifiers' => 18,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The callback that is responsible for handling discarded attribute violations.
 *
 * @var (callable(self, array))|null
 */',
                'attributes' => [
                ],
                'startLine' => 220,
                'endLine' => 220,
                'startColumn' => 5,
                'endColumn' => 58,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'modelsShouldPreventAccessingMissingAttributes' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'modelsShouldPreventAccessingMissingAttributes',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 227,
                        'endLine' => 227,
                        'startTokenPos' => 543,
                        'startFilePos' => 5963,
                        'endTokenPos' => 543,
                        'endFilePos' => 5967,
                    ],
                ],
                'docComment' => '/**
 * Indicates if an exception should be thrown when trying to access a missing attribute on a retrieved model.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 227,
                'endLine' => 227,
                'startColumn' => 5,
                'endColumn' => 76,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'missingAttributeViolationCallback' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'missingAttributeViolationCallback',
                'modifiers' => 18,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The callback that is responsible for handling missing attribute violations.
 *
 * @var (callable(self, string))|null
 */',
                'attributes' => [
                ],
                'startLine' => 234,
                'endLine' => 234,
                'startColumn' => 5,
                'endColumn' => 56,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'isBroadcasting' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'isBroadcasting',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => 'true',
                    'attributes' => [
                        'startLine' => 241,
                        'endLine' => 241,
                        'startTokenPos' => 565,
                        'startFilePos' => 6311,
                        'endTokenPos' => 565,
                        'endFilePos' => 6314,
                    ],
                ],
                'docComment' => '/**
 * Indicates if broadcasting is currently enabled.
 *
 * @var bool
 */',
                'attributes' => [
                ],
                'startLine' => 241,
                'endLine' => 241,
                'startColumn' => 5,
                'endColumn' => 44,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'builder' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'builder',
                'modifiers' => 18,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '\\Illuminate\\Database\\Eloquent\\Builder::class',
                    'attributes' => [
                        'startLine' => 248,
                        'endLine' => 248,
                        'startTokenPos' => 580,
                        'startFilePos' => 6509,
                        'endTokenPos' => 582,
                        'endFilePos' => 6522,
                    ],
                ],
                'docComment' => '/**
 * The Eloquent query builder class to use for the model.
 *
 * @var class-string<\\Illuminate\\Database\\Eloquent\\Builder<*>>
 */',
                'attributes' => [
                ],
                'startLine' => 248,
                'endLine' => 248,
                'startColumn' => 5,
                'endColumn' => 54,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'collectionClass' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'collectionClass',
                'modifiers' => 18,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '\\Illuminate\\Database\\Eloquent\\Collection::class',
                    'attributes' => [
                        'startLine' => 255,
                        'endLine' => 255,
                        'startTokenPos' => 597,
                        'startFilePos' => 6728,
                        'endTokenPos' => 599,
                        'endFilePos' => 6744,
                    ],
                ],
                'docComment' => '/**
 * The Eloquent collection class to use for the model.
 *
 * @var class-string<\\Illuminate\\Database\\Eloquent\\Collection<*, *>>
 */',
                'attributes' => [
                ],
                'startLine' => 255,
                'endLine' => 255,
                'startColumn' => 5,
                'endColumn' => 65,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'isSoftDeletable' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'isSoftDeletable',
                'modifiers' => 18,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => '/**
 * Cache of soft deletable models.
 *
 * @var array<class-string<self>, bool>
 */',
                'attributes' => [
                ],
                'startLine' => 262,
                'endLine' => 262,
                'startColumn' => 5,
                'endColumn' => 44,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'isPrunable' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'isPrunable',
                'modifiers' => 18,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => '/**
 * Cache of prunable models.
 *
 * @var array<class-string<self>, bool>
 */',
                'attributes' => [
                ],
                'startLine' => 269,
                'endLine' => 269,
                'startColumn' => 5,
                'endColumn' => 39,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'isMassPrunable' => [
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'name' => 'isMassPrunable',
                'modifiers' => 18,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => '/**
 * Cache of mass prunable models.
 *
 * @var array<class-string<self>, bool>
 */',
                'attributes' => [
                ],
                'startLine' => 276,
                'endLine' => 276,
                'startColumn' => 5,
                'endColumn' => 43,
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
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 297,
                                'endLine' => 297,
                                'startTokenPos' => 671,
                                'startFilePos' => 7618,
                                'endTokenPos' => 672,
                                'endFilePos' => 7619,
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
                        'startLine' => 297,
                        'endLine' => 297,
                        'startColumn' => 33,
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
 * Create a new Eloquent model instance.
 *
 * @param  array<string, mixed>  $attributes
 */',
                'startLine' => 297,
                'endLine' => 306,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'bootIfNotBooted' => [
                'name' => 'bootIfNotBooted',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Check if the model needs to be booted and if so, do it.
 *
 * @return void
 */',
                'startLine' => 313,
                'endLine' => 332,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'booting' => [
                'name' => 'booting',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Perform any actions required before the model boots.
 *
 * @return void
 */',
                'startLine' => 339,
                'endLine' => 342,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 18,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'boot' => [
                'name' => 'boot',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Bootstrap the model and its traits.
 *
 * @return void
 */',
                'startLine' => 349,
                'endLine' => 352,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 18,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'bootTraits' => [
                'name' => 'bootTraits',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Boot all of the bootable traits on the model.
 *
 * @return void
 */',
                'startLine' => 359,
                'endLine' => 389,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 18,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'initializeTraits' => [
                'name' => 'initializeTraits',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Initialize any initializable traits on the model.
 *
 * @return void
 */',
                'startLine' => 396,
                'endLine' => 401,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'booted' => [
                'name' => 'booted',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Perform any actions required after the model boots.
 *
 * @return void
 */',
                'startLine' => 408,
                'endLine' => 411,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 18,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'whenBooted' => [
                'name' => 'whenBooted',
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
                        'startLine' => 419,
                        'endLine' => 419,
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
 * Register a closure to be executed after the model has booted.
 *
 * @param  \\Closure  $callback
 * @return void
 */',
                'startLine' => 419,
                'endLine' => 424,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 18,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'clearBootedModels' => [
                'name' => 'clearBootedModels',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Clear the list of booted models so they will be re-booted.
 *
 * @return void
 */',
                'startLine' => 431,
                'endLine' => 437,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'withoutTouching' => [
                'name' => 'withoutTouching',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'callable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 445,
                        'endLine' => 445,
                        'startColumn' => 44,
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
 * Disables relationship model touching for the current class during given callback scope.
 *
 * @param  callable  $callback
 * @return void
 */',
                'startLine' => 445,
                'endLine' => 448,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'withoutTouchingOn' => [
                'name' => 'withoutTouchingOn',
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
                        'startLine' => 457,
                        'endLine' => 457,
                        'startColumn' => 46,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'callable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 457,
                        'endLine' => 457,
                        'startColumn' => 61,
                        'endColumn' => 78,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Disables relationship model touching for the given model classes during given callback scope.
 *
 * @param  array  $models
 * @param  callable  $callback
 * @return void
 */',
                'startLine' => 457,
                'endLine' => 466,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'isIgnoringTouch' => [
                'name' => 'isIgnoringTouch',
                'parameters' => [
                    'class' => [
                        'name' => 'class',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 474,
                                'endLine' => 474,
                                'startTokenPos' => 1464,
                                'startFilePos' => 12145,
                                'endTokenPos' => 1464,
                                'endFilePos' => 12148,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 474,
                        'endLine' => 474,
                        'startColumn' => 44,
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
 * Determine if the given model is ignoring touches.
 *
 * @param  string|null  $class
 * @return bool
 */',
                'startLine' => 474,
                'endLine' => 489,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'shouldBeStrict' => [
                'name' => 'shouldBeStrict',
                'parameters' => [
                    'shouldBeStrict' => [
                        'name' => 'shouldBeStrict',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 497,
                                'endLine' => 497,
                                'startTokenPos' => 1582,
                                'startFilePos' => 12810,
                                'endTokenPos' => 1582,
                                'endFilePos' => 12813,
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
                        'startLine' => 497,
                        'endLine' => 497,
                        'startColumn' => 43,
                        'endColumn' => 69,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that models should prevent lazy loading, silently discarding attributes, and accessing missing attributes.
 *
 * @param  bool  $shouldBeStrict
 * @return void
 */',
                'startLine' => 497,
                'endLine' => 502,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'preventLazyLoading' => [
                'name' => 'preventLazyLoading',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 510,
                                'endLine' => 510,
                                'startTokenPos' => 1627,
                                'startFilePos' => 13205,
                                'endTokenPos' => 1627,
                                'endFilePos' => 13208,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 510,
                        'endLine' => 510,
                        'startColumn' => 47,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prevent model relationships from being lazy loaded.
 *
 * @param  bool  $value
 * @return void
 */',
                'startLine' => 510,
                'endLine' => 513,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'automaticallyEagerLoadRelationships' => [
                'name' => 'automaticallyEagerLoadRelationships',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 521,
                                'endLine' => 521,
                                'startTokenPos' => 1657,
                                'startFilePos' => 13517,
                                'endTokenPos' => 1657,
                                'endFilePos' => 13520,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 521,
                        'endLine' => 521,
                        'startColumn' => 64,
                        'endColumn' => 76,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if model relationships should be automatically eager loaded when accessed.
 *
 * @param  bool  $value
 * @return void
 */',
                'startLine' => 521,
                'endLine' => 524,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'handleLazyLoadingViolationUsing' => [
                'name' => 'handleLazyLoadingViolationUsing',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'callable',
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
                        'startLine' => 532,
                        'endLine' => 532,
                        'startColumn' => 60,
                        'endColumn' => 78,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a callback that is responsible for handling lazy loading violations.
 *
 * @param  (callable(self, string))|null  $callback
 * @return void
 */',
                'startLine' => 532,
                'endLine' => 535,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'preventSilentlyDiscardingAttributes' => [
                'name' => 'preventSilentlyDiscardingAttributes',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 543,
                                'endLine' => 543,
                                'startTokenPos' => 1716,
                                'startFilePos' => 14160,
                                'endTokenPos' => 1716,
                                'endFilePos' => 14163,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 543,
                        'endLine' => 543,
                        'startColumn' => 64,
                        'endColumn' => 76,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prevent non-fillable attributes from being silently discarded.
 *
 * @param  bool  $value
 * @return void
 */',
                'startLine' => 543,
                'endLine' => 546,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'handleDiscardedAttributeViolationUsing' => [
                'name' => 'handleDiscardedAttributeViolationUsing',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'callable',
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
                        'startLine' => 554,
                        'endLine' => 554,
                        'startColumn' => 67,
                        'endColumn' => 85,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a callback that is responsible for handling discarded attribute violations.
 *
 * @param  (callable(self, array))|null  $callback
 * @return void
 */',
                'startLine' => 554,
                'endLine' => 557,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'preventAccessingMissingAttributes' => [
                'name' => 'preventAccessingMissingAttributes',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 565,
                                'endLine' => 565,
                                'startTokenPos' => 1775,
                                'startFilePos' => 14816,
                                'endTokenPos' => 1775,
                                'endFilePos' => 14819,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 565,
                        'endLine' => 565,
                        'startColumn' => 62,
                        'endColumn' => 74,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prevent accessing missing attributes on retrieved models.
 *
 * @param  bool  $value
 * @return void
 */',
                'startLine' => 565,
                'endLine' => 568,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'handleMissingAttributeViolationUsing' => [
                'name' => 'handleMissingAttributeViolationUsing',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'callable',
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
                        'startLine' => 576,
                        'endLine' => 576,
                        'startColumn' => 65,
                        'endColumn' => 83,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register a callback that is responsible for handling missing attribute violations.
 *
 * @param  (callable(self, string))|null  $callback
 * @return void
 */',
                'startLine' => 576,
                'endLine' => 579,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'withoutBroadcasting' => [
                'name' => 'withoutBroadcasting',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'callable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 587,
                        'endLine' => 587,
                        'startColumn' => 48,
                        'endColumn' => 65,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute a callback without broadcasting any model events for all model types.
 *
 * @param  callable  $callback
 * @return mixed
 */',
                'startLine' => 587,
                'endLine' => 598,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'fill' => [
                'name' => 'fill',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
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
                        'startLine' => 608,
                        'endLine' => 608,
                        'startColumn' => 26,
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
 * Fill the model with an array of attributes.
 *
 * @param  array<string, mixed>  $attributes
 * @return $this
 *
 * @throws \\Illuminate\\Database\\Eloquent\\MassAssignmentException
 */',
                'startLine' => 608,
                'endLine' => 648,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'forceFill' => [
                'name' => 'forceFill',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
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
                        'startLine' => 656,
                        'endLine' => 656,
                        'startColumn' => 31,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Fill the model with an array of attributes. Force mass assignment.
 *
 * @param  array<string, mixed>  $attributes
 * @return $this
 */',
                'startLine' => 656,
                'endLine' => 659,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'qualifyColumn' => [
                'name' => 'qualifyColumn',
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
                        'startLine' => 667,
                        'endLine' => 667,
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
 * Qualify the given column name by the model\'s table.
 *
 * @param  string  $column
 * @return string
 */',
                'startLine' => 667,
                'endLine' => 674,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'qualifyColumns' => [
                'name' => 'qualifyColumns',
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
                        'startLine' => 682,
                        'endLine' => 682,
                        'startColumn' => 36,
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
 * Qualify the given columns with the model\'s table.
 *
 * @param  array  $columns
 * @return array
 */',
                'startLine' => 682,
                'endLine' => 687,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'newInstance' => [
                'name' => 'newInstance',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 696,
                                'endLine' => 696,
                                'startTokenPos' => 2322,
                                'startFilePos' => 18904,
                                'endTokenPos' => 2323,
                                'endFilePos' => 18905,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 696,
                        'endLine' => 696,
                        'startColumn' => 33,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'exists' => [
                        'name' => 'exists',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 696,
                                'endLine' => 696,
                                'startTokenPos' => 2330,
                                'startFilePos' => 18918,
                                'endTokenPos' => 2330,
                                'endFilePos' => 18922,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 696,
                        'endLine' => 696,
                        'startColumn' => 51,
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
 * Create a new instance of the given model.
 *
 * @param  array<string, mixed>  $attributes
 * @param  bool  $exists
 * @return static
 */',
                'startLine' => 696,
                'endLine' => 716,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'newFromBuilder' => [
                'name' => 'newFromBuilder',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 725,
                                'endLine' => 725,
                                'startTokenPos' => 2424,
                                'startFilePos' => 19731,
                                'endTokenPos' => 2425,
                                'endFilePos' => 19732,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 725,
                        'endLine' => 725,
                        'startColumn' => 36,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'connection' => [
                        'name' => 'connection',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 725,
                                'endLine' => 725,
                                'startTokenPos' => 2432,
                                'startFilePos' => 19749,
                                'endTokenPos' => 2432,
                                'endFilePos' => 19752,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 725,
                        'endLine' => 725,
                        'startColumn' => 54,
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
 * Create a new model instance that is existing.
 *
 * @param  array<string, mixed>  $attributes
 * @param  \\UnitEnum|string|null  $connection
 * @return static
 */',
                'startLine' => 725,
                'endLine' => 736,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'on' => [
                'name' => 'on',
                'parameters' => [
                    'connection' => [
                        'name' => 'connection',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 744,
                                'endLine' => 744,
                                'startTokenPos' => 2514,
                                'startFilePos' => 20262,
                                'endTokenPos' => 2514,
                                'endFilePos' => 20265,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 744,
                        'endLine' => 744,
                        'startColumn' => 31,
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
 * Begin querying the model on a given connection.
 *
 * @param  \\UnitEnum|string|null  $connection
 * @return \\Illuminate\\Database\\Eloquent\\Builder<static>
 */',
                'startLine' => 744,
                'endLine' => 750,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'onWriteConnection' => [
                'name' => 'onWriteConnection',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Begin querying the model on the write connection.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Builder<static>
 */',
                'startLine' => 757,
                'endLine' => 760,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'all' => [
                'name' => 'all',
                'parameters' => [
                    'columns' => [
                        'name' => 'columns',
                        'default' => [
                            'code' => '[\'*\']',
                            'attributes' => [
                                'startLine' => 768,
                                'endLine' => 768,
                                'startTokenPos' => 2588,
                                'startFilePos' => 21089,
                                'endTokenPos' => 2590,
                                'endFilePos' => 21093,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 768,
                        'endLine' => 768,
                        'startColumn' => 32,
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
 * Get all of the models from the database.
 *
 * @param  array|string  $columns
 * @return \\Illuminate\\Database\\Eloquent\\Collection<int, static>
 */',
                'startLine' => 768,
                'endLine' => 773,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'with' => [
                'name' => 'with',
                'parameters' => [
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 781,
                        'endLine' => 781,
                        'startColumn' => 33,
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
 * Begin querying a model with eager loading.
 *
 * @param  array|string  $relations
 * @return \\Illuminate\\Database\\Eloquent\\Builder<static>
 */',
                'startLine' => 781,
                'endLine' => 786,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'load' => [
                'name' => 'load',
                'parameters' => [
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 794,
                        'endLine' => 794,
                        'startColumn' => 26,
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
 * Eager load relations on the model.
 *
 * @param  array|string  $relations
 * @return $this
 */',
                'startLine' => 794,
                'endLine' => 803,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'loadMorph' => [
                'name' => 'loadMorph',
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
                        'startLine' => 812,
                        'endLine' => 812,
                        'startColumn' => 31,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 812,
                        'endLine' => 812,
                        'startColumn' => 42,
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
 * Eager load relationships on the polymorphic relation of a model.
 *
 * @param  string  $relation
 * @param  array  $relations
 * @return $this
 */',
                'startLine' => 812,
                'endLine' => 823,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'loadMissing' => [
                'name' => 'loadMissing',
                'parameters' => [
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 831,
                        'endLine' => 831,
                        'startColumn' => 33,
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
 * Eager load relations on the model if they are not already eager loaded.
 *
 * @param  array|string  $relations
 * @return $this
 */',
                'startLine' => 831,
                'endLine' => 838,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'loadAggregate' => [
                'name' => 'loadAggregate',
                'parameters' => [
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 848,
                        'endLine' => 848,
                        'startColumn' => 35,
                        'endColumn' => 44,
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
                        'startLine' => 848,
                        'endLine' => 848,
                        'startColumn' => 47,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'function' => [
                        'name' => 'function',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 848,
                                'endLine' => 848,
                                'startTokenPos' => 2884,
                                'startFilePos' => 23072,
                                'endTokenPos' => 2884,
                                'endFilePos' => 23075,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 848,
                        'endLine' => 848,
                        'startColumn' => 56,
                        'endColumn' => 71,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Eager load relation\'s column aggregations on the model.
 *
 * @param  array|string  $relations
 * @param  string  $column
 * @param  string|null  $function
 * @return $this
 */',
                'startLine' => 848,
                'endLine' => 853,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'loadCount' => [
                'name' => 'loadCount',
                'parameters' => [
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 861,
                        'endLine' => 861,
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
 * Eager load relation counts on the model.
 *
 * @param  array|string  $relations
 * @return $this
 */',
                'startLine' => 861,
                'endLine' => 866,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'loadMax' => [
                'name' => 'loadMax',
                'parameters' => [
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 875,
                        'endLine' => 875,
                        'startColumn' => 29,
                        'endColumn' => 38,
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
                        'startLine' => 875,
                        'endLine' => 875,
                        'startColumn' => 41,
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
 * Eager load relation max column values on the model.
 *
 * @param  array|string  $relations
 * @param  string  $column
 * @return $this
 */',
                'startLine' => 875,
                'endLine' => 878,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'loadMin' => [
                'name' => 'loadMin',
                'parameters' => [
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 887,
                        'endLine' => 887,
                        'startColumn' => 29,
                        'endColumn' => 38,
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
                        'startLine' => 887,
                        'endLine' => 887,
                        'startColumn' => 41,
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
 * Eager load relation min column values on the model.
 *
 * @param  array|string  $relations
 * @param  string  $column
 * @return $this
 */',
                'startLine' => 887,
                'endLine' => 890,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'loadSum' => [
                'name' => 'loadSum',
                'parameters' => [
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 899,
                        'endLine' => 899,
                        'startColumn' => 29,
                        'endColumn' => 38,
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
                        'startLine' => 899,
                        'endLine' => 899,
                        'startColumn' => 41,
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
 * Eager load relation\'s column summations on the model.
 *
 * @param  array|string  $relations
 * @param  string  $column
 * @return $this
 */',
                'startLine' => 899,
                'endLine' => 902,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'loadAvg' => [
                'name' => 'loadAvg',
                'parameters' => [
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 911,
                        'endLine' => 911,
                        'startColumn' => 29,
                        'endColumn' => 38,
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
                        'startLine' => 911,
                        'endLine' => 911,
                        'startColumn' => 41,
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
 * Eager load relation average column values on the model.
 *
 * @param  array|string  $relations
 * @param  string  $column
 * @return $this
 */',
                'startLine' => 911,
                'endLine' => 914,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'loadExists' => [
                'name' => 'loadExists',
                'parameters' => [
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 922,
                        'endLine' => 922,
                        'startColumn' => 32,
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
 * Eager load related model existence values on the model.
 *
 * @param  array|string  $relations
 * @return $this
 */',
                'startLine' => 922,
                'endLine' => 925,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'loadMorphAggregate' => [
                'name' => 'loadMorphAggregate',
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
                        'startLine' => 936,
                        'endLine' => 936,
                        'startColumn' => 40,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 936,
                        'endLine' => 936,
                        'startColumn' => 51,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
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
                        'startLine' => 936,
                        'endLine' => 936,
                        'startColumn' => 63,
                        'endColumn' => 69,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'function' => [
                        'name' => 'function',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 936,
                                'endLine' => 936,
                                'startTokenPos' => 3156,
                                'startFilePos' => 25355,
                                'endTokenPos' => 3156,
                                'endFilePos' => 25358,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 936,
                        'endLine' => 936,
                        'startColumn' => 72,
                        'endColumn' => 87,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Eager load relationship column aggregation on the polymorphic relation of a model.
 *
 * @param  string  $relation
 * @param  array  $relations
 * @param  string  $column
 * @param  string|null  $function
 * @return $this
 */',
                'startLine' => 936,
                'endLine' => 947,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'loadMorphCount' => [
                'name' => 'loadMorphCount',
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
                        'startLine' => 956,
                        'endLine' => 956,
                        'startColumn' => 36,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 956,
                        'endLine' => 956,
                        'startColumn' => 47,
                        'endColumn' => 56,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Eager load relationship counts on the polymorphic relation of a model.
 *
 * @param  string  $relation
 * @param  array  $relations
 * @return $this
 */',
                'startLine' => 956,
                'endLine' => 959,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'loadMorphMax' => [
                'name' => 'loadMorphMax',
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
                        'startLine' => 969,
                        'endLine' => 969,
                        'startColumn' => 34,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 969,
                        'endLine' => 969,
                        'startColumn' => 45,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
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
                        'startLine' => 969,
                        'endLine' => 969,
                        'startColumn' => 57,
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
 * Eager load relationship max column values on the polymorphic relation of a model.
 *
 * @param  string  $relation
 * @param  array  $relations
 * @param  string  $column
 * @return $this
 */',
                'startLine' => 969,
                'endLine' => 972,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'loadMorphMin' => [
                'name' => 'loadMorphMin',
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
                        'startLine' => 982,
                        'endLine' => 982,
                        'startColumn' => 34,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 982,
                        'endLine' => 982,
                        'startColumn' => 45,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
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
                        'startLine' => 982,
                        'endLine' => 982,
                        'startColumn' => 57,
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
 * Eager load relationship min column values on the polymorphic relation of a model.
 *
 * @param  string  $relation
 * @param  array  $relations
 * @param  string  $column
 * @return $this
 */',
                'startLine' => 982,
                'endLine' => 985,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'loadMorphSum' => [
                'name' => 'loadMorphSum',
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
                        'startLine' => 995,
                        'endLine' => 995,
                        'startColumn' => 34,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 995,
                        'endLine' => 995,
                        'startColumn' => 45,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
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
                        'startLine' => 995,
                        'endLine' => 995,
                        'startColumn' => 57,
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
 * Eager load relationship column summations on the polymorphic relation of a model.
 *
 * @param  string  $relation
 * @param  array  $relations
 * @param  string  $column
 * @return $this
 */',
                'startLine' => 995,
                'endLine' => 998,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'loadMorphAvg' => [
                'name' => 'loadMorphAvg',
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
                        'startLine' => 1008,
                        'endLine' => 1008,
                        'startColumn' => 34,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'relations' => [
                        'name' => 'relations',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1008,
                        'endLine' => 1008,
                        'startColumn' => 45,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
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
                        'startLine' => 1008,
                        'endLine' => 1008,
                        'startColumn' => 57,
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
 * Eager load relationship average column values on the polymorphic relation of a model.
 *
 * @param  string  $relation
 * @param  array  $relations
 * @param  string  $column
 * @return $this
 */',
                'startLine' => 1008,
                'endLine' => 1011,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'increment' => [
                'name' => 'increment',
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
                        'startColumn' => 34,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'amount' => [
                        'name' => 'amount',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 1021,
                                'endLine' => 1021,
                                'startTokenPos' => 3441,
                                'startFilePos' => 27755,
                                'endTokenPos' => 3441,
                                'endFilePos' => 27755,
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
                        'startColumn' => 43,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'extra' => [
                        'name' => 'extra',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1021,
                                'endLine' => 1021,
                                'startTokenPos' => 3450,
                                'startFilePos' => 27773,
                                'endTokenPos' => 3451,
                                'endFilePos' => 27774,
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
                        'startLine' => 1021,
                        'endLine' => 1021,
                        'startColumn' => 56,
                        'endColumn' => 72,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Increment a column\'s value by a given amount.
 *
 * @param  string  $column
 * @param  float|int  $amount
 * @param  array  $extra
 * @return int
 */',
                'startLine' => 1021,
                'endLine' => 1024,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'decrement' => [
                'name' => 'decrement',
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
                        'startLine' => 1034,
                        'endLine' => 1034,
                        'startColumn' => 34,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'amount' => [
                        'name' => 'amount',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 1034,
                                'endLine' => 1034,
                                'startTokenPos' => 3492,
                                'startFilePos' => 28114,
                                'endTokenPos' => 3492,
                                'endFilePos' => 28114,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1034,
                        'endLine' => 1034,
                        'startColumn' => 43,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'extra' => [
                        'name' => 'extra',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1034,
                                'endLine' => 1034,
                                'startTokenPos' => 3501,
                                'startFilePos' => 28132,
                                'endTokenPos' => 3502,
                                'endFilePos' => 28133,
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
                        'startLine' => 1034,
                        'endLine' => 1034,
                        'startColumn' => 56,
                        'endColumn' => 72,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Decrement a column\'s value by a given amount.
 *
 * @param  string  $column
 * @param  float|int  $amount
 * @param  array  $extra
 * @return int
 */',
                'startLine' => 1034,
                'endLine' => 1037,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'incrementOrDecrement' => [
                'name' => 'incrementOrDecrement',
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
                        'startLine' => 1048,
                        'endLine' => 1048,
                        'startColumn' => 45,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'amount' => [
                        'name' => 'amount',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1048,
                        'endLine' => 1048,
                        'startColumn' => 54,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'extra' => [
                        'name' => 'extra',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1048,
                        'endLine' => 1048,
                        'startColumn' => 63,
                        'endColumn' => 68,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'method' => [
                        'name' => 'method',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1048,
                        'endLine' => 1048,
                        'startColumn' => 71,
                        'endColumn' => 77,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run the increment or decrement method on the model.
 *
 * @param  string  $column
 * @param  float|int  $amount
 * @param  array  $extra
 * @param  string  $method
 * @return int
 */',
                'startLine' => 1048,
                'endLine' => 1075,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'update' => [
                'name' => 'update',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1084,
                                'endLine' => 1084,
                                'startTokenPos' => 3807,
                                'startFilePos' => 29722,
                                'endTokenPos' => 3808,
                                'endFilePos' => 29723,
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
                        'startLine' => 1084,
                        'endLine' => 1084,
                        'startColumn' => 28,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1084,
                                'endLine' => 1084,
                                'startTokenPos' => 3817,
                                'startFilePos' => 29743,
                                'endTokenPos' => 3818,
                                'endFilePos' => 29744,
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
                        'startLine' => 1084,
                        'endLine' => 1084,
                        'startColumn' => 52,
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
 * Update the model in the database.
 *
 * @param  array<string, mixed>  $attributes
 * @param  array<string, mixed>  $options
 * @return bool
 */',
                'startLine' => 1084,
                'endLine' => 1091,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'updateOrFail' => [
                'name' => 'updateOrFail',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1102,
                                'endLine' => 1102,
                                'startTokenPos' => 3873,
                                'startFilePos' => 30171,
                                'endTokenPos' => 3874,
                                'endFilePos' => 30172,
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
                        'startLine' => 1102,
                        'endLine' => 1102,
                        'startColumn' => 34,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1102,
                                'endLine' => 1102,
                                'startTokenPos' => 3883,
                                'startFilePos' => 30192,
                                'endTokenPos' => 3884,
                                'endFilePos' => 30193,
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
                        'startLine' => 1102,
                        'endLine' => 1102,
                        'startColumn' => 58,
                        'endColumn' => 76,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Update the model in the database within a transaction.
 *
 * @param  array<string, mixed>  $attributes
 * @param  array<string, mixed>  $options
 * @return bool
 *
 * @throws \\Throwable
 */',
                'startLine' => 1102,
                'endLine' => 1109,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'updateQuietly' => [
                'name' => 'updateQuietly',
                'parameters' => [
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1118,
                                'endLine' => 1118,
                                'startTokenPos' => 3939,
                                'startFilePos' => 30600,
                                'endTokenPos' => 3940,
                                'endFilePos' => 30601,
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
                        'startLine' => 1118,
                        'endLine' => 1118,
                        'startColumn' => 35,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1118,
                                'endLine' => 1118,
                                'startTokenPos' => 3949,
                                'startFilePos' => 30621,
                                'endTokenPos' => 3950,
                                'endFilePos' => 30622,
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
                        'startLine' => 1118,
                        'endLine' => 1118,
                        'startColumn' => 59,
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
 * Update the model in the database without raising any events.
 *
 * @param  array<string, mixed>  $attributes
 * @param  array<string, mixed>  $options
 * @return bool
 */',
                'startLine' => 1118,
                'endLine' => 1125,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'incrementQuietly' => [
                'name' => 'incrementQuietly',
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
                        'startLine' => 1135,
                        'endLine' => 1135,
                        'startColumn' => 41,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'amount' => [
                        'name' => 'amount',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 1135,
                                'endLine' => 1135,
                                'startTokenPos' => 4006,
                                'startFilePos' => 31045,
                                'endTokenPos' => 4006,
                                'endFilePos' => 31045,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1135,
                        'endLine' => 1135,
                        'startColumn' => 50,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'extra' => [
                        'name' => 'extra',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1135,
                                'endLine' => 1135,
                                'startTokenPos' => 4015,
                                'startFilePos' => 31063,
                                'endTokenPos' => 4016,
                                'endFilePos' => 31064,
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
                        'startLine' => 1135,
                        'endLine' => 1135,
                        'startColumn' => 63,
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
 * Increment a column\'s value by a given amount without raising any events.
 *
 * @param  string  $column
 * @param  float|int  $amount
 * @param  array  $extra
 * @return int
 */',
                'startLine' => 1135,
                'endLine' => 1140,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'decrementQuietly' => [
                'name' => 'decrementQuietly',
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
                        'startLine' => 1150,
                        'endLine' => 1150,
                        'startColumn' => 41,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'amount' => [
                        'name' => 'amount',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 1150,
                                'endLine' => 1150,
                                'startTokenPos' => 4071,
                                'startFilePos' => 31492,
                                'endTokenPos' => 4071,
                                'endFilePos' => 31492,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1150,
                        'endLine' => 1150,
                        'startColumn' => 50,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'extra' => [
                        'name' => 'extra',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1150,
                                'endLine' => 1150,
                                'startTokenPos' => 4080,
                                'startFilePos' => 31510,
                                'endTokenPos' => 4081,
                                'endFilePos' => 31511,
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
                        'startLine' => 1150,
                        'endLine' => 1150,
                        'startColumn' => 63,
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
 * Decrement a column\'s value by a given amount without raising any events.
 *
 * @param  string  $column
 * @param  float|int  $amount
 * @param  array  $extra
 * @return int
 */',
                'startLine' => 1150,
                'endLine' => 1155,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'push' => [
                'name' => 'push',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Save the model and all of its relationships.
 *
 * @return bool
 */',
                'startLine' => 1162,
                'endLine' => 1186,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'pushQuietly' => [
                'name' => 'pushQuietly',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Save the model and all of its relationships without raising any events to the parent model.
 *
 * @return bool
 */',
                'startLine' => 1193,
                'endLine' => 1196,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'saveQuietly' => [
                'name' => 'saveQuietly',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1204,
                                'endLine' => 1204,
                                'startTokenPos' => 4315,
                                'startFilePos' => 33062,
                                'endTokenPos' => 4316,
                                'endFilePos' => 33063,
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
                        'startLine' => 1204,
                        'endLine' => 1204,
                        'startColumn' => 33,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Save the model to the database without raising any events.
 *
 * @param  array  $options
 * @return bool
 */',
                'startLine' => 1204,
                'endLine' => 1207,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'save' => [
                'name' => 'save',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1215,
                                'endLine' => 1215,
                                'startTokenPos' => 4359,
                                'startFilePos' => 33304,
                                'endTokenPos' => 4360,
                                'endFilePos' => 33305,
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
                        'startLine' => 1215,
                        'endLine' => 1215,
                        'startColumn' => 26,
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
 * Save the model to the database.
 *
 * @param  array  $options
 * @return bool
 */',
                'startLine' => 1215,
                'endLine' => 1256,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'saveOrFail' => [
                'name' => 'saveOrFail',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1266,
                                'endLine' => 1266,
                                'startTokenPos' => 4564,
                                'startFilePos' => 35193,
                                'endTokenPos' => 4565,
                                'endFilePos' => 35194,
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
                        'startLine' => 1266,
                        'endLine' => 1266,
                        'startColumn' => 32,
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
 * Save the model to the database within a transaction.
 *
 * @param  array  $options
 * @return bool
 *
 * @throws \\Throwable
 */',
                'startLine' => 1266,
                'endLine' => 1269,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'finishSave' => [
                'name' => 'finishSave',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
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
                        'startLine' => 1277,
                        'endLine' => 1277,
                        'startColumn' => 35,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Perform any actions that are necessary after the model is saved.
 *
 * @param  array  $options
 * @return void
 */',
                'startLine' => 1277,
                'endLine' => 1286,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'performUpdate' => [
                'name' => 'performUpdate',
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
                        'startLine' => 1294,
                        'endLine' => 1294,
                        'startColumn' => 38,
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
 * Perform a model update operation.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<static>  $query
 * @return bool
 */',
                'startLine' => 1294,
                'endLine' => 1324,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'setKeysForSelectQuery' => [
                'name' => 'setKeysForSelectQuery',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1332,
                        'endLine' => 1332,
                        'startColumn' => 46,
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
 * Set the keys for a select query.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<static>  $query
 * @return \\Illuminate\\Database\\Eloquent\\Builder<static>
 */',
                'startLine' => 1332,
                'endLine' => 1337,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'getKeyForSelectQuery' => [
                'name' => 'getKeyForSelectQuery',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the primary key value for a select query.
 *
 * @return mixed
 */',
                'startLine' => 1344,
                'endLine' => 1347,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'setKeysForSaveQuery' => [
                'name' => 'setKeysForSaveQuery',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1355,
                        'endLine' => 1355,
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
 * Set the keys for a save update query.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<static>  $query
 * @return \\Illuminate\\Database\\Eloquent\\Builder<static>
 */',
                'startLine' => 1355,
                'endLine' => 1360,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'getKeyForSaveQuery' => [
                'name' => 'getKeyForSaveQuery',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the primary key value for a save query.
 *
 * @return mixed
 */',
                'startLine' => 1367,
                'endLine' => 1370,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'performInsert' => [
                'name' => 'performInsert',
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
                        'startLine' => 1378,
                        'endLine' => 1378,
                        'startColumn' => 38,
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
 * Perform a model insert operation.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<static>  $query
 * @return bool
 */',
                'startLine' => 1378,
                'endLine' => 1425,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'insertAndSetId' => [
                'name' => 'insertAndSetId',
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
                        'startLine' => 1434,
                        'endLine' => 1434,
                        'startColumn' => 39,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1434,
                        'endLine' => 1434,
                        'startColumn' => 55,
                        'endColumn' => 65,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Insert the given attributes and set the ID on the model.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<static>  $query
 * @param  array<string, mixed>  $attributes
 * @return void
 */',
                'startLine' => 1434,
                'endLine' => 1439,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'destroy' => [
                'name' => 'destroy',
                'parameters' => [
                    'ids' => [
                        'name' => 'ids',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1447,
                        'endLine' => 1447,
                        'startColumn' => 36,
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
 * Destroy the models for the given IDs.
 *
 * @param  \\Illuminate\\Support\\Collection|array|int|string  $ids
 * @return int
 */',
                'startLine' => 1447,
                'endLine' => 1477,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'delete' => [
                'name' => 'delete',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Delete the model from the database.
 *
 * @return bool|null
 *
 * @throws \\LogicException
 */',
                'startLine' => 1486,
                'endLine' => 1518,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'deleteQuietly' => [
                'name' => 'deleteQuietly',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Delete the model from the database without raising any events.
 *
 * @return bool
 */',
                'startLine' => 1525,
                'endLine' => 1528,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'deleteOrFail' => [
                'name' => 'deleteOrFail',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Delete the model from the database within a transaction.
 *
 * @return bool|null
 *
 * @throws \\Throwable
 */',
                'startLine' => 1537,
                'endLine' => 1544,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'forceDelete' => [
                'name' => 'forceDelete',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Force a hard delete on a soft deleted model.
 *
 * This method protects developers from running forceDelete when the trait is missing.
 *
 * @return bool|null
 */',
                'startLine' => 1553,
                'endLine' => 1556,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'forceDestroy' => [
                'name' => 'forceDestroy',
                'parameters' => [
                    'ids' => [
                        'name' => 'ids',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1566,
                        'endLine' => 1566,
                        'startColumn' => 41,
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
 * Force a hard destroy on a soft deleted model.
 *
 * This method protects developers from running forceDestroy when the trait is missing.
 *
 * @param  \\Illuminate\\Support\\Collection|array|int|string  $ids
 * @return bool|null
 */',
                'startLine' => 1566,
                'endLine' => 1569,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'performDeleteOnModel' => [
                'name' => 'performDeleteOnModel',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Perform the actual delete query on this model instance.
 *
 * @return void
 */',
                'startLine' => 1576,
                'endLine' => 1581,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'query' => [
                'name' => 'query',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Begin querying the model.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Builder<static>
 */',
                'startLine' => 1588,
                'endLine' => 1591,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'newQuery' => [
                'name' => 'newQuery',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a new query builder for the model\'s table.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Builder<static>
 */',
                'startLine' => 1598,
                'endLine' => 1601,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'newModelQuery' => [
                'name' => 'newModelQuery',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a new query builder that doesn\'t have any global scopes or eager loading.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Builder<static>
 */',
                'startLine' => 1608,
                'endLine' => 1613,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'newQueryWithoutRelationships' => [
                'name' => 'newQueryWithoutRelationships',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a new query builder with no relationships loaded.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Builder<static>
 */',
                'startLine' => 1620,
                'endLine' => 1623,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'registerGlobalScopes' => [
                'name' => 'registerGlobalScopes',
                'parameters' => [
                    'builder' => [
                        'name' => 'builder',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1631,
                        'endLine' => 1631,
                        'startColumn' => 42,
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
 * Register the global scopes for this builder instance.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Builder<static>  $builder
 * @return \\Illuminate\\Database\\Eloquent\\Builder<static>
 */',
                'startLine' => 1631,
                'endLine' => 1638,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'newQueryWithoutScopes' => [
                'name' => 'newQueryWithoutScopes',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a new query builder that doesn\'t have any global scopes.
 *
 * @return \\Illuminate\\Database\\Eloquent\\Builder<static>
 */',
                'startLine' => 1645,
                'endLine' => 1650,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'newQueryWithoutScope' => [
                'name' => 'newQueryWithoutScope',
                'parameters' => [
                    'scope' => [
                        'name' => 'scope',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1658,
                        'endLine' => 1658,
                        'startColumn' => 42,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a new query instance without a given scope.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Scope|string  $scope
 * @return \\Illuminate\\Database\\Eloquent\\Builder<static>
 */',
                'startLine' => 1658,
                'endLine' => 1661,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'newQueryForRestoration' => [
                'name' => 'newQueryForRestoration',
                'parameters' => [
                    'ids' => [
                        'name' => 'ids',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1669,
                        'endLine' => 1669,
                        'startColumn' => 44,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a new query to restore one or more models by their queueable IDs.
 *
 * @param  array|int  $ids
 * @return \\Illuminate\\Database\\Eloquent\\Builder<static>
 */',
                'startLine' => 1669,
                'endLine' => 1672,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'newEloquentBuilder' => [
                'name' => 'newEloquentBuilder',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1680,
                        'endLine' => 1680,
                        'startColumn' => 40,
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
 * Create a new Eloquent query builder for the model.
 *
 * @param  \\Illuminate\\Database\\Query\\Builder  $query
 * @return \\Illuminate\\Database\\Eloquent\\Builder<*>
 */',
                'startLine' => 1680,
                'endLine' => 1689,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'resolveCustomBuilderClass' => [
                'name' => 'resolveCustomBuilderClass',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Resolve the custom Eloquent builder class from the model attributes.
 *
 * @return class-string<\\Illuminate\\Database\\Eloquent\\Builder>|false
 */',
                'startLine' => 1696,
                'endLine' => 1704,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'newBaseQueryBuilder' => [
                'name' => 'newBaseQueryBuilder',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a new query builder instance for the connection.
 *
 * @return \\Illuminate\\Database\\Query\\Builder
 */',
                'startLine' => 1711,
                'endLine' => 1714,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'newPivot' => [
                'name' => 'newPivot',
                'parameters' => [
                    'parent' => [
                        'name' => 'parent',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'self',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1726,
                        'endLine' => 1726,
                        'startColumn' => 30,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'attributes' => [
                        'name' => 'attributes',
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
                        'startLine' => 1726,
                        'endLine' => 1726,
                        'startColumn' => 44,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
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
                        'startLine' => 1726,
                        'endLine' => 1726,
                        'startColumn' => 63,
                        'endColumn' => 68,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                    'exists' => [
                        'name' => 'exists',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1726,
                        'endLine' => 1726,
                        'startColumn' => 71,
                        'endColumn' => 77,
                        'parameterIndex' => 3,
                        'isOptional' => false,
                    ],
                    'using' => [
                        'name' => 'using',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1726,
                                'endLine' => 1726,
                                'startTokenPos' => 6197,
                                'startFilePos' => 48696,
                                'endTokenPos' => 6197,
                                'endFilePos' => 48699,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1726,
                        'endLine' => 1726,
                        'startColumn' => 80,
                        'endColumn' => 92,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new pivot model instance.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Model  $parent
 * @param  array<string, mixed>  $attributes
 * @param  string  $table
 * @param  bool  $exists
 * @param  string|null  $using
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\Pivot
 */',
                'startLine' => 1726,
                'endLine' => 1730,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'hasNamedScope' => [
                'name' => 'hasNamedScope',
                'parameters' => [
                    'scope' => [
                        'name' => 'scope',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1738,
                        'endLine' => 1738,
                        'startColumn' => 35,
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
 * Determine if the model has a given scope.
 *
 * @param  string  $scope
 * @return bool
 */',
                'startLine' => 1738,
                'endLine' => 1742,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'callNamedScope' => [
                'name' => 'callNamedScope',
                'parameters' => [
                    'scope' => [
                        'name' => 'scope',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1751,
                        'endLine' => 1751,
                        'startColumn' => 36,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1751,
                                'endLine' => 1751,
                                'startTokenPos' => 6302,
                                'startFilePos' => 49396,
                                'endTokenPos' => 6303,
                                'endFilePos' => 49397,
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
                        'startLine' => 1751,
                        'endLine' => 1751,
                        'startColumn' => 44,
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
 * Apply the given named scope if possible.
 *
 * @param  string  $scope
 * @param  array  $parameters
 * @return mixed
 */',
                'startLine' => 1751,
                'endLine' => 1758,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'isScopeMethodWithAttribute' => [
                'name' => 'isScopeMethodWithAttribute',
                'parameters' => [
                    'method' => [
                        'name' => 'method',
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
                        'startLine' => 1766,
                        'endLine' => 1766,
                        'startColumn' => 58,
                        'endColumn' => 71,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the given method has a scope attribute.
 *
 * @param  string  $method
 * @return bool
 */',
                'startLine' => 1766,
                'endLine' => 1771,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 18,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'toArray' => [
                'name' => 'toArray',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert the model instance to an array.
 *
 * @return array
 */',
                'startLine' => 1778,
                'endLine' => 1784,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'toJson' => [
                'name' => 'toJson',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 1794,
                                'endLine' => 1794,
                                'startTokenPos' => 6491,
                                'startFilePos' => 50544,
                                'endTokenPos' => 6491,
                                'endFilePos' => 50544,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1794,
                        'endLine' => 1794,
                        'startColumn' => 28,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert the model instance to JSON.
 *
 * @param  int  $options
 * @return string
 *
 * @throws \\Illuminate\\Database\\Eloquent\\JsonEncodingException
 */',
                'startLine' => 1794,
                'endLine' => 1803,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'toPrettyJson' => [
                'name' => 'toPrettyJson',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 1813,
                                'endLine' => 1813,
                                'startTokenPos' => 6573,
                                'startFilePos' => 51071,
                                'endTokenPos' => 6573,
                                'endFilePos' => 51071,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1813,
                        'endLine' => 1813,
                        'startColumn' => 34,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert the model instance to pretty print formatted JSON.
 *
 * @param  int  $options
 * @return string
 *
 * @throws \\Illuminate\\Database\\Eloquent\\JsonEncodingException
 */',
                'startLine' => 1813,
                'endLine' => 1816,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'jsonSerialize' => [
                'name' => 'jsonSerialize',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'mixed',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert the object into something JSON serializable.
 *
 * @return mixed
 */',
                'startLine' => 1823,
                'endLine' => 1826,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'fresh' => [
                'name' => 'fresh',
                'parameters' => [
                    'with' => [
                        'name' => 'with',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1834,
                                'endLine' => 1834,
                                'startTokenPos' => 6632,
                                'startFilePos' => 51515,
                                'endTokenPos' => 6633,
                                'endFilePos' => 51516,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1834,
                        'endLine' => 1834,
                        'startColumn' => 27,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Reload a fresh model instance from the database.
 *
 * @param  array|string  $with
 * @return static|null
 */',
                'startLine' => 1834,
                'endLine' => 1844,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'refresh' => [
                'name' => 'refresh',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Reload the current model instance with fresh attributes from the database.
 *
 * @return $this
 */',
                'startLine' => 1851,
                'endLine' => 1872,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'replicate' => [
                'name' => 'replicate',
                'parameters' => [
                    'except' => [
                        'name' => 'except',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1880,
                                'endLine' => 1880,
                                'startTokenPos' => 6863,
                                'startFilePos' => 52733,
                                'endTokenPos' => 6863,
                                'endFilePos' => 52736,
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
                        'startLine' => 1880,
                        'endLine' => 1880,
                        'startColumn' => 31,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Clone the model into a new, non-existing instance.
 *
 * @param  array|null  $except
 * @return static
 */',
                'startLine' => 1880,
                'endLine' => 1901,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'replicateQuietly' => [
                'name' => 'replicateQuietly',
                'parameters' => [
                    'except' => [
                        'name' => 'except',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1909,
                                'endLine' => 1909,
                                'startTokenPos' => 7026,
                                'startFilePos' => 53625,
                                'endTokenPos' => 7026,
                                'endFilePos' => 53628,
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
                        'startLine' => 1909,
                        'endLine' => 1909,
                        'startColumn' => 38,
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
 * Clone the model into a new, non-existing instance without raising any events.
 *
 * @param  array|null  $except
 * @return static
 */',
                'startLine' => 1909,
                'endLine' => 1912,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'is' => [
                'name' => 'is',
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
                        'startLine' => 1920,
                        'endLine' => 1920,
                        'startColumn' => 24,
                        'endColumn' => 29,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if two models have the same ID and belong to the same table.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Model|null  $model
 * @return bool
 */',
                'startLine' => 1920,
                'endLine' => 1926,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'isNot' => [
                'name' => 'isNot',
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
                        'startLine' => 1934,
                        'endLine' => 1934,
                        'startColumn' => 27,
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
 * Determine if two models are not the same.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Model|null  $model
 * @return bool
 */',
                'startLine' => 1934,
                'endLine' => 1937,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
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
 * Get the database connection for the model.
 *
 * @return \\Illuminate\\Database\\Connection
 */',
                'startLine' => 1944,
                'endLine' => 1947,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'getConnectionName' => [
                'name' => 'getConnectionName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the current connection name for the model.
 *
 * @return string|null
 */',
                'startLine' => 1954,
                'endLine' => 1957,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'setConnection' => [
                'name' => 'setConnection',
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
                        'startLine' => 1965,
                        'endLine' => 1965,
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
 * Set the connection associated with the model.
 *
 * @param  \\UnitEnum|string|null  $name
 * @return $this
 */',
                'startLine' => 1965,
                'endLine' => 1970,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'resolveConnection' => [
                'name' => 'resolveConnection',
                'parameters' => [
                    'connection' => [
                        'name' => 'connection',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1978,
                                'endLine' => 1978,
                                'startTokenPos' => 7250,
                                'startFilePos' => 55314,
                                'endTokenPos' => 7250,
                                'endFilePos' => 55317,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1978,
                        'endLine' => 1978,
                        'startColumn' => 46,
                        'endColumn' => 63,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Resolve a connection instance.
 *
 * @param  \\UnitEnum|string|null  $connection
 * @return \\Illuminate\\Database\\Connection
 */',
                'startLine' => 1978,
                'endLine' => 1981,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'getConnectionResolver' => [
                'name' => 'getConnectionResolver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the connection resolver instance.
 *
 * @return \\Illuminate\\Database\\ConnectionResolverInterface|null
 */',
                'startLine' => 1988,
                'endLine' => 1991,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'setConnectionResolver' => [
                'name' => 'setConnectionResolver',
                'parameters' => [
                    'resolver' => [
                        'name' => 'resolver',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Database\\ConnectionResolverInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1999,
                        'endLine' => 1999,
                        'startColumn' => 50,
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
 * Set the connection resolver instance.
 *
 * @param  \\Illuminate\\Database\\ConnectionResolverInterface  $resolver
 * @return void
 */',
                'startLine' => 1999,
                'endLine' => 2002,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'unsetConnectionResolver' => [
                'name' => 'unsetConnectionResolver',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Unset the connection resolver for models.
 *
 * @return void
 */',
                'startLine' => 2009,
                'endLine' => 2012,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
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
 * Get the table associated with the model.
 *
 * @return string
 */',
                'startLine' => 2019,
                'endLine' => 2022,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'setTable' => [
                'name' => 'setTable',
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
                        'startLine' => 2030,
                        'endLine' => 2030,
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
 * Set the table associated with the model.
 *
 * @param  string  $table
 * @return $this
 */',
                'startLine' => 2030,
                'endLine' => 2035,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'getKeyName' => [
                'name' => 'getKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the primary key for the model.
 *
 * @return string
 */',
                'startLine' => 2042,
                'endLine' => 2045,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'setKeyName' => [
                'name' => 'setKeyName',
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
                        'startLine' => 2053,
                        'endLine' => 2053,
                        'startColumn' => 32,
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
 * Set the primary key for the model.
 *
 * @param  string  $key
 * @return $this
 */',
                'startLine' => 2053,
                'endLine' => 2058,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'getQualifiedKeyName' => [
                'name' => 'getQualifiedKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the table qualified key name.
 *
 * @return string
 */',
                'startLine' => 2065,
                'endLine' => 2068,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'getKeyType' => [
                'name' => 'getKeyType',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the auto-incrementing key type.
 *
 * @return string
 */',
                'startLine' => 2075,
                'endLine' => 2078,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'setKeyType' => [
                'name' => 'setKeyType',
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
                        'startLine' => 2086,
                        'endLine' => 2086,
                        'startColumn' => 32,
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
 * Set the data type for the primary key.
 *
 * @param  string  $type
 * @return $this
 */',
                'startLine' => 2086,
                'endLine' => 2091,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'getIncrementing' => [
                'name' => 'getIncrementing',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the value indicating whether the IDs are incrementing.
 *
 * @return bool
 */',
                'startLine' => 2098,
                'endLine' => 2101,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'setIncrementing' => [
                'name' => 'setIncrementing',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2109,
                        'endLine' => 2109,
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
 * Set whether IDs are incrementing.
 *
 * @param  bool  $value
 * @return $this
 */',
                'startLine' => 2109,
                'endLine' => 2114,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'getKey' => [
                'name' => 'getKey',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the value of the model\'s primary key.
 *
 * @return mixed
 */',
                'startLine' => 2121,
                'endLine' => 2124,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'getQueueableId' => [
                'name' => 'getQueueableId',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the queueable identity for the entity.
 *
 * @return mixed
 */',
                'startLine' => 2131,
                'endLine' => 2134,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'getQueueableRelations' => [
                'name' => 'getQueueableRelations',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the queueable relationships for the entity.
 *
 * @return array
 */',
                'startLine' => 2141,
                'endLine' => 2168,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'getQueueableConnection' => [
                'name' => 'getQueueableConnection',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the queueable connection for the entity.
 *
 * @return string|null
 */',
                'startLine' => 2175,
                'endLine' => 2178,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'getRouteKey' => [
                'name' => 'getRouteKey',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the value of the model\'s route key.
 *
 * @return mixed
 */',
                'startLine' => 2185,
                'endLine' => 2188,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'getRouteKeyName' => [
                'name' => 'getRouteKeyName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the route key for the model.
 *
 * @return string
 */',
                'startLine' => 2195,
                'endLine' => 2198,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'resolveRouteBinding' => [
                'name' => 'resolveRouteBinding',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2207,
                        'endLine' => 2207,
                        'startColumn' => 41,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'field' => [
                        'name' => 'field',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2207,
                                'endLine' => 2207,
                                'startTokenPos' => 7923,
                                'startFilePos' => 60167,
                                'endTokenPos' => 7923,
                                'endFilePos' => 60170,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2207,
                        'endLine' => 2207,
                        'startColumn' => 49,
                        'endColumn' => 61,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve the model for a bound value.
 *
 * @param  mixed  $value
 * @param  string|null  $field
 * @return \\Illuminate\\Database\\Eloquent\\Model|null
 */',
                'startLine' => 2207,
                'endLine' => 2210,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'resolveSoftDeletableRouteBinding' => [
                'name' => 'resolveSoftDeletableRouteBinding',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2219,
                        'endLine' => 2219,
                        'startColumn' => 54,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'field' => [
                        'name' => 'field',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2219,
                                'endLine' => 2219,
                                'startTokenPos' => 7965,
                                'startFilePos' => 60524,
                                'endTokenPos' => 7965,
                                'endFilePos' => 60527,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2219,
                        'endLine' => 2219,
                        'startColumn' => 62,
                        'endColumn' => 74,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve the model for a bound value.
 *
 * @param  mixed  $value
 * @param  string|null  $field
 * @return \\Illuminate\\Database\\Eloquent\\Model|null
 */',
                'startLine' => 2219,
                'endLine' => 2222,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'resolveChildRouteBinding' => [
                'name' => 'resolveChildRouteBinding',
                'parameters' => [
                    'childType' => [
                        'name' => 'childType',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2232,
                        'endLine' => 2232,
                        'startColumn' => 46,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2232,
                        'endLine' => 2232,
                        'startColumn' => 58,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'field' => [
                        'name' => 'field',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2232,
                        'endLine' => 2232,
                        'startColumn' => 66,
                        'endColumn' => 71,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve the child model for a bound value.
 *
 * @param  string  $childType
 * @param  mixed  $value
 * @param  string|null  $field
 * @return \\Illuminate\\Database\\Eloquent\\Model|null
 */',
                'startLine' => 2232,
                'endLine' => 2235,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'resolveSoftDeletableChildRouteBinding' => [
                'name' => 'resolveSoftDeletableChildRouteBinding',
                'parameters' => [
                    'childType' => [
                        'name' => 'childType',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2245,
                        'endLine' => 2245,
                        'startColumn' => 59,
                        'endColumn' => 68,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2245,
                        'endLine' => 2245,
                        'startColumn' => 71,
                        'endColumn' => 76,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'field' => [
                        'name' => 'field',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2245,
                        'endLine' => 2245,
                        'startColumn' => 79,
                        'endColumn' => 84,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve the child model for a bound value.
 *
 * @param  string  $childType
 * @param  mixed  $value
 * @param  string|null  $field
 * @return \\Illuminate\\Database\\Eloquent\\Model|null
 */',
                'startLine' => 2245,
                'endLine' => 2248,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'resolveChildRouteBindingQuery' => [
                'name' => 'resolveChildRouteBindingQuery',
                'parameters' => [
                    'childType' => [
                        'name' => 'childType',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2258,
                        'endLine' => 2258,
                        'startColumn' => 54,
                        'endColumn' => 63,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2258,
                        'endLine' => 2258,
                        'startColumn' => 66,
                        'endColumn' => 71,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'field' => [
                        'name' => 'field',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2258,
                        'endLine' => 2258,
                        'startColumn' => 74,
                        'endColumn' => 79,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve the child model query for a bound value.
 *
 * @param  string  $childType
 * @param  mixed  $value
 * @param  string|null  $field
 * @return \\Illuminate\\Database\\Eloquent\\Relations\\Relation<\\Illuminate\\Database\\Eloquent\\Model, $this, *>
 */',
                'startLine' => 2258,
                'endLine' => 2272,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'childRouteBindingRelationshipName' => [
                'name' => 'childRouteBindingRelationshipName',
                'parameters' => [
                    'childType' => [
                        'name' => 'childType',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2280,
                        'endLine' => 2280,
                        'startColumn' => 58,
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
 * Retrieve the child route model binding relationship name for the given child type.
 *
 * @param  string  $childType
 * @return string
 */',
                'startLine' => 2280,
                'endLine' => 2283,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'resolveRouteBindingQuery' => [
                'name' => 'resolveRouteBindingQuery',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2293,
                        'endLine' => 2293,
                        'startColumn' => 46,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2293,
                        'endLine' => 2293,
                        'startColumn' => 54,
                        'endColumn' => 59,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'field' => [
                        'name' => 'field',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2293,
                                'endLine' => 2293,
                                'startTokenPos' => 8270,
                                'startFilePos' => 63171,
                                'endTokenPos' => 8270,
                                'endFilePos' => 63174,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2293,
                        'endLine' => 2293,
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
 * Retrieve the model for a bound value.
 *
 * @param  \\Illuminate\\Database\\Eloquent\\Model|\\Illuminate\\Contracts\\Database\\Eloquent\\Builder|\\Illuminate\\Database\\Eloquent\\Relations\\Relation  $query
 * @param  mixed  $value
 * @param  string|null  $field
 * @return \\Illuminate\\Contracts\\Database\\Eloquent\\Builder
 */',
                'startLine' => 2293,
                'endLine' => 2296,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'getForeignKey' => [
                'name' => 'getForeignKey',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the default foreign key name for the model.
 *
 * @return string
 */',
                'startLine' => 2303,
                'endLine' => 2306,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'getPerPage' => [
                'name' => 'getPerPage',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the number of models to return per page.
 *
 * @return int
 */',
                'startLine' => 2313,
                'endLine' => 2316,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'setPerPage' => [
                'name' => 'setPerPage',
                'parameters' => [
                    'perPage' => [
                        'name' => 'perPage',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2324,
                        'endLine' => 2324,
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
 * Set the number of models to return per page.
 *
 * @param  int  $perPage
 * @return $this
 */',
                'startLine' => 2324,
                'endLine' => 2329,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'isSoftDeletable' => [
                'name' => 'isSoftDeletable',
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
 * Determine if the model is soft deletable.
 */',
                'startLine' => 2334,
                'endLine' => 2337,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'isPrunable' => [
                'name' => 'isPrunable',
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
 * Determine if the model is prunable.
 */',
                'startLine' => 2342,
                'endLine' => 2345,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'isMassPrunable' => [
                'name' => 'isMassPrunable',
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
 * Determine if the model is mass prunable.
 */',
                'startLine' => 2350,
                'endLine' => 2353,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'preventsLazyLoading' => [
                'name' => 'preventsLazyLoading',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if lazy loading is disabled.
 *
 * @return bool
 */',
                'startLine' => 2360,
                'endLine' => 2363,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'isAutomaticallyEagerLoadingRelationships' => [
                'name' => 'isAutomaticallyEagerLoadingRelationships',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if relationships are being automatically eager loaded when accessed.
 *
 * @return bool
 */',
                'startLine' => 2370,
                'endLine' => 2373,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'preventsSilentlyDiscardingAttributes' => [
                'name' => 'preventsSilentlyDiscardingAttributes',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if discarding guarded attribute fills is disabled.
 *
 * @return bool
 */',
                'startLine' => 2380,
                'endLine' => 2383,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'preventsAccessingMissingAttributes' => [
                'name' => 'preventsAccessingMissingAttributes',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if accessing missing attributes is disabled.
 *
 * @return bool
 */',
                'startLine' => 2390,
                'endLine' => 2393,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'broadcastChannelRoute' => [
                'name' => 'broadcastChannelRoute',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the broadcast channel route definition that is associated with the given entity.
 *
 * @return string
 */',
                'startLine' => 2400,
                'endLine' => 2403,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'broadcastChannel' => [
                'name' => 'broadcastChannel',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the broadcast channel name that is associated with the given entity.
 *
 * @return string
 */',
                'startLine' => 2410,
                'endLine' => 2413,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            '__get' => [
                'name' => '__get',
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
                        'startLine' => 2421,
                        'endLine' => 2421,
                        'startColumn' => 27,
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
 * Dynamically retrieve attributes on the model.
 *
 * @param  string  $key
 * @return mixed
 */',
                'startLine' => 2421,
                'endLine' => 2424,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            '__set' => [
                'name' => '__set',
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
                        'startLine' => 2433,
                        'endLine' => 2433,
                        'startColumn' => 27,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2433,
                        'endLine' => 2433,
                        'startColumn' => 33,
                        'endColumn' => 38,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dynamically set attributes on the model.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @return void
 */',
                'startLine' => 2433,
                'endLine' => 2436,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'offsetExists' => [
                'name' => 'offsetExists',
                'parameters' => [
                    'offset' => [
                        'name' => 'offset',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2444,
                        'endLine' => 2444,
                        'startColumn' => 34,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
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
 * Determine if the given attribute exists.
 *
 * @param  mixed  $offset
 * @return bool
 */',
                'startLine' => 2444,
                'endLine' => 2455,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'offsetGet' => [
                'name' => 'offsetGet',
                'parameters' => [
                    'offset' => [
                        'name' => 'offset',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2463,
                        'endLine' => 2463,
                        'startColumn' => 31,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'mixed',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the value for a given offset.
 *
 * @param  mixed  $offset
 * @return mixed
 */',
                'startLine' => 2463,
                'endLine' => 2466,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'offsetSet' => [
                'name' => 'offsetSet',
                'parameters' => [
                    'offset' => [
                        'name' => 'offset',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2475,
                        'endLine' => 2475,
                        'startColumn' => 31,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2475,
                        'endLine' => 2475,
                        'startColumn' => 40,
                        'endColumn' => 45,
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
 * Set the value for a given offset.
 *
 * @param  mixed  $offset
 * @param  mixed  $value
 * @return void
 */',
                'startLine' => 2475,
                'endLine' => 2478,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'offsetUnset' => [
                'name' => 'offsetUnset',
                'parameters' => [
                    'offset' => [
                        'name' => 'offset',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2486,
                        'endLine' => 2486,
                        'startColumn' => 33,
                        'endColumn' => 39,
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
 * Unset the value for a given offset.
 *
 * @param  mixed  $offset
 * @return void
 */',
                'startLine' => 2486,
                'endLine' => 2494,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            '__isset' => [
                'name' => '__isset',
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
                        'startLine' => 2502,
                        'endLine' => 2502,
                        'startColumn' => 29,
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
 * Determine if an attribute or relation exists on the model.
 *
 * @param  string  $key
 * @return bool
 */',
                'startLine' => 2502,
                'endLine' => 2505,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            '__unset' => [
                'name' => '__unset',
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
                        'startLine' => 2513,
                        'endLine' => 2513,
                        'startColumn' => 29,
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
 * Unset an attribute on the model.
 *
 * @param  string  $key
 * @return void
 */',
                'startLine' => 2513,
                'endLine' => 2516,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
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
                        'startLine' => 2525,
                        'endLine' => 2525,
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
                        'startLine' => 2525,
                        'endLine' => 2525,
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
 * Handle dynamic method calls into the model.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */',
                'startLine' => 2525,
                'endLine' => 2541,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            '__callStatic' => [
                'name' => '__callStatic',
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
                        'startLine' => 2550,
                        'endLine' => 2550,
                        'startColumn' => 41,
                        'endColumn' => 47,
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
                        'startLine' => 2550,
                        'endLine' => 2550,
                        'startColumn' => 50,
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
 * Handle dynamic static method calls into the model.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */',
                'startLine' => 2550,
                'endLine' => 2557,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            '__toString' => [
                'name' => '__toString',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert the model to its string representation.
 *
 * @return string
 */',
                'startLine' => 2564,
                'endLine' => 2569,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            'escapeWhenCastingToString' => [
                'name' => 'escapeWhenCastingToString',
                'parameters' => [
                    'escape' => [
                        'name' => 'escape',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 2577,
                                'endLine' => 2577,
                                'startTokenPos' => 9283,
                                'startFilePos' => 70202,
                                'endTokenPos' => 9283,
                                'endFilePos' => 70205,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2577,
                        'endLine' => 2577,
                        'startColumn' => 47,
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
 * Indicate that the object\'s string representation should be escaped when __toString is invoked.
 *
 * @param  bool  $escape
 * @return $this
 */',
                'startLine' => 2577,
                'endLine' => 2582,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            '__sleep' => [
                'name' => '__sleep',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Prepare the object for serialization.
 *
 * @return array
 */',
                'startLine' => 2589,
                'endLine' => 2609,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'aliasName' => null,
            ],
            '__wakeup' => [
                'name' => '__wakeup',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * When a model is being unserialized, check if it needs to be booted.
 *
 * @return void
 */',
                'startLine' => 2616,
                'endLine' => 2625,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Database\\Eloquent',
                'declaringClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'implementingClassName' => 'Illuminate\\Database\\Eloquent\\Model',
                'currentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
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
