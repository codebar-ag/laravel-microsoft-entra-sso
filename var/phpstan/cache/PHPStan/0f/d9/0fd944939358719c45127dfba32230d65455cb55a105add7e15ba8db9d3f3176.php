<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../pestphp/pest/src/Concerns/Pipeable.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pest\Concerns\Pipeable
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-b1f4c9fe64e5eb7f3211cf6e3170eb32a079ae304d44beaa988ba6ab67376b50-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Pest\\Concerns\\Pipeable',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../pestphp/pest/src/Concerns/Pipeable.php',
            ],
        ],
        'namespace' => 'Pest\\Concerns',
        'name' => 'Pest\\Concerns\\Pipeable',
        'shortName' => 'Pipeable',
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
        'startLine' => 12,
        'endLine' => 71,
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
            'pipes' => [
                'declaringClassName' => 'Pest\\Concerns\\Pipeable',
                'implementingClassName' => 'Pest\\Concerns\\Pipeable',
                'name' => 'pipes',
                'modifiers' => 20,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 19,
                        'endLine' => 19,
                        'startTokenPos' => 40,
                        'startFilePos' => 272,
                        'endTokenPos' => 41,
                        'endFilePos' => 273,
                    ],
                ],
                'docComment' => '/**
 * The list of pipes.
 *
 * @var array<string, array<Closure(Closure, mixed ...$arguments): void>>
 */',
                'attributes' => [
                ],
                'startLine' => 19,
                'endLine' => 19,
                'startColumn' => 5,
                'endColumn' => 37,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'interceptors' => [
                'declaringClassName' => 'Pest\\Concerns\\Pipeable',
                'implementingClassName' => 'Pest\\Concerns\\Pipeable',
                'name' => 'interceptors',
                'modifiers' => 20,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 26,
                        'endLine' => 26,
                        'startTokenPos' => 56,
                        'startFilePos' => 452,
                        'endTokenPos' => 57,
                        'endFilePos' => 453,
                    ],
                ],
                'docComment' => '/**
 * The list of interceptors.
 *
 * @var array<string, array<Closure(Closure, mixed ...$arguments): void>>
 */',
                'attributes' => [
                ],
                'startLine' => 26,
                'endLine' => 26,
                'startColumn' => 5,
                'endColumn' => 44,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'pipe' => [
                'name' => 'pipe',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
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
                        'startLine' => 31,
                        'endLine' => 31,
                        'startColumn' => 26,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'pipe' => [
                        'name' => 'pipe',
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
                        'startLine' => 31,
                        'endLine' => 31,
                        'startColumn' => 40,
                        'endColumn' => 52,
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
 * Register a pipe to be applied before an expectation is checked.
 */',
                'startLine' => 31,
                'endLine' => 34,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Concerns',
                'declaringClassName' => 'Pest\\Concerns\\Pipeable',
                'implementingClassName' => 'Pest\\Concerns\\Pipeable',
                'currentClassName' => 'Pest\\Concerns\\Pipeable',
                'aliasName' => null,
            ],
            'intercept' => [
                'name' => 'intercept',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
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
                        'startLine' => 41,
                        'endLine' => 41,
                        'startColumn' => 31,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'filter' => [
                        'name' => 'filter',
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
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
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
                        'startLine' => 41,
                        'endLine' => 41,
                        'startColumn' => 45,
                        'endColumn' => 66,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'handler' => [
                        'name' => 'handler',
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
                        'startLine' => 41,
                        'endLine' => 41,
                        'startColumn' => 69,
                        'endColumn' => 84,
                        'parameterIndex' => 2,
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
 * Register an interceptor that should replace an existing expectation.
 *
 * @param  string|Closure(mixed $value, mixed ...$arguments):bool  $filter
 */',
                'startLine' => 41,
                'endLine' => 60,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Pest\\Concerns',
                'declaringClassName' => 'Pest\\Concerns\\Pipeable',
                'implementingClassName' => 'Pest\\Concerns\\Pipeable',
                'currentClassName' => 'Pest\\Concerns\\Pipeable',
                'aliasName' => null,
            ],
            'pipes' => [
                'name' => 'pipes',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
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
                        'startLine' => 67,
                        'endLine' => 67,
                        'startColumn' => 28,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'context' => [
                        'name' => 'context',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'object',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 67,
                        'endLine' => 67,
                        'startColumn' => 42,
                        'endColumn' => 56,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'scope' => [
                        'name' => 'scope',
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
                        'startLine' => 67,
                        'endLine' => 67,
                        'startColumn' => 59,
                        'endColumn' => 71,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the list of pipes by the given name.
 *
 * @return array<int, Closure>
 */',
                'startLine' => 67,
                'endLine' => 70,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Pest\\Concerns',
                'declaringClassName' => 'Pest\\Concerns\\Pipeable',
                'implementingClassName' => 'Pest\\Concerns\\Pipeable',
                'currentClassName' => 'Pest\\Concerns\\Pipeable',
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
