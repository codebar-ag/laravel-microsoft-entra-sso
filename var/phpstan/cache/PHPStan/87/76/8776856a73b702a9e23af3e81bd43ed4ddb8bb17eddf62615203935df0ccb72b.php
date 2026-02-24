<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Conditionable/Traits/Conditionable.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\Traits\Conditionable
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-5697fdba0acb78ca0b4e122e5c459cd5d97d000ed9b14fed31271cb7ffd44225-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Support\\Traits\\Conditionable',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Conditionable/Traits/Conditionable.php',
            ],
        ],
        'namespace' => 'Illuminate\\Support\\Traits',
        'name' => 'Illuminate\\Support\\Traits\\Conditionable',
        'shortName' => 'Conditionable',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 8,
        'endLine' => 73,
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
            'when' => [
                'name' => 'when',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 21,
                                'endLine' => 21,
                                'startTokenPos' => 35,
                                'startFilePos' => 607,
                                'endTokenPos' => 35,
                                'endFilePos' => 610,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 21,
                        'endLine' => 21,
                        'startColumn' => 26,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 21,
                                'endLine' => 21,
                                'startTokenPos' => 45,
                                'startFilePos' => 635,
                                'endTokenPos' => 45,
                                'endFilePos' => 638,
                            ],
                        ],
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
                        'startLine' => 21,
                        'endLine' => 21,
                        'startColumn' => 41,
                        'endColumn' => 66,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 21,
                                'endLine' => 21,
                                'startTokenPos' => 55,
                                'startFilePos' => 662,
                                'endTokenPos' => 55,
                                'endFilePos' => 665,
                            ],
                        ],
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
                        'startLine' => 21,
                        'endLine' => 21,
                        'startColumn' => 69,
                        'endColumn' => 93,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Apply the callback if the given "value" is (or resolves to) truthy.
 *
 * @template TWhenParameter
 * @template TWhenReturnType
 *
 * @param  (\\Closure($this): TWhenParameter)|TWhenParameter|null  $value
 * @param  (callable($this, TWhenParameter): TWhenReturnType)|null  $callback
 * @param  (callable($this, TWhenParameter): TWhenReturnType)|null  $default
 * @return $this|TWhenReturnType
 */',
                'startLine' => 21,
                'endLine' => 40,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Traits',
                'declaringClassName' => 'Illuminate\\Support\\Traits\\Conditionable',
                'implementingClassName' => 'Illuminate\\Support\\Traits\\Conditionable',
                'currentClassName' => 'Illuminate\\Support\\Traits\\Conditionable',
                'aliasName' => null,
            ],
            'unless' => [
                'name' => 'unless',
                'parameters' => [
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 53,
                                'endLine' => 53,
                                'startTokenPos' => 210,
                                'startFilePos' => 1664,
                                'endTokenPos' => 210,
                                'endFilePos' => 1667,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 53,
                        'endLine' => 53,
                        'startColumn' => 28,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 53,
                                'endLine' => 53,
                                'startTokenPos' => 220,
                                'startFilePos' => 1692,
                                'endTokenPos' => 220,
                                'endFilePos' => 1695,
                            ],
                        ],
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
                        'startLine' => 53,
                        'endLine' => 53,
                        'startColumn' => 43,
                        'endColumn' => 68,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 53,
                                'endLine' => 53,
                                'startTokenPos' => 230,
                                'startFilePos' => 1719,
                                'endTokenPos' => 230,
                                'endFilePos' => 1722,
                            ],
                        ],
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
                        'startLine' => 53,
                        'endLine' => 53,
                        'startColumn' => 71,
                        'endColumn' => 95,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Apply the callback if the given "value" is (or resolves to) falsy.
 *
 * @template TUnlessParameter
 * @template TUnlessReturnType
 *
 * @param  (\\Closure($this): TUnlessParameter)|TUnlessParameter|null  $value
 * @param  (callable($this, TUnlessParameter): TUnlessReturnType)|null  $callback
 * @param  (callable($this, TUnlessParameter): TUnlessReturnType)|null  $default
 * @return $this|TUnlessReturnType
 */',
                'startLine' => 53,
                'endLine' => 72,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Traits',
                'declaringClassName' => 'Illuminate\\Support\\Traits\\Conditionable',
                'implementingClassName' => 'Illuminate\\Support\\Traits\\Conditionable',
                'currentClassName' => 'Illuminate\\Support\\Traits\\Conditionable',
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
