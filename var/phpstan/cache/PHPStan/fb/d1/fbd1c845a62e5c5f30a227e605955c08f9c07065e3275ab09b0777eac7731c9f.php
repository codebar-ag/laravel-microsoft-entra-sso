<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Collections/Enumerable.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\Enumerable
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-14dc76e6dfc3e24e817554e3e35166c932a9254d137c392732e6a959b8796069-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Support\\Enumerable',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Collections/Enumerable.php',
            ],
        ],
        'namespace' => 'Illuminate\\Support',
        'name' => 'Illuminate\\Support\\Enumerable',
        'shortName' => 'Enumerable',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @template TKey of array-key
 *
 * @template-covariant TValue
 *
 * @extends \\Illuminate\\Contracts\\Support\\Arrayable<TKey, TValue>
 * @extends \\IteratorAggregate<TKey, TValue>
 */',
        'attributes' => [
        ],
        'startLine' => 21,
        'endLine' => 1330,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Support\\Arrayable',
            1 => 'Countable',
            2 => 'IteratorAggregate',
            3 => 'Illuminate\\Contracts\\Support\\Jsonable',
            4 => 'JsonSerializable',
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'make' => [
                'name' => 'make',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 32,
                                'endLine' => 32,
                                'startTokenPos' => 80,
                                'startFilePos' => 884,
                                'endTokenPos' => 81,
                                'endFilePos' => 885,
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
 * Create a new collection instance if the value isn\'t one already.
 *
 * @template TMakeKey of array-key
 * @template TMakeValue
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TMakeKey, TMakeValue>|iterable<TMakeKey, TMakeValue>|null  $items
 * @return static<TMakeKey, TMakeValue>
 */',
                'startLine' => 32,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 45,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'times' => [
                'name' => 'times',
                'parameters' => [
                    'number' => [
                        'name' => 'number',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 41,
                        'endLine' => 41,
                        'startColumn' => 34,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 41,
                                'endLine' => 41,
                                'startTokenPos' => 105,
                                'startFilePos' => 1146,
                                'endTokenPos' => 105,
                                'endFilePos' => 1149,
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
                        'startLine' => 41,
                        'endLine' => 41,
                        'startColumn' => 43,
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
 * Create a new instance by invoking the callback a given amount of times.
 *
 * @param  int  $number
 * @param  callable|null  $callback
 * @return static
 */',
                'startLine' => 41,
                'endLine' => 41,
                'startColumn' => 5,
                'endColumn' => 70,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'range' => [
                'name' => 'range',
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
                        'startLine' => 51,
                        'endLine' => 51,
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
                        'startLine' => 51,
                        'endLine' => 51,
                        'startColumn' => 41,
                        'endColumn' => 43,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'step' => [
                        'name' => 'step',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 51,
                                'endLine' => 51,
                                'startTokenPos' => 129,
                                'startFilePos' => 1377,
                                'endTokenPos' => 129,
                                'endFilePos' => 1377,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 51,
                        'endLine' => 51,
                        'startColumn' => 46,
                        'endColumn' => 54,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a collection with the given range.
 *
 * @param  int  $from
 * @param  int  $to
 * @param  int  $step
 * @return static
 */',
                'startLine' => 51,
                'endLine' => 51,
                'startColumn' => 5,
                'endColumn' => 56,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'wrap' => [
                'name' => 'wrap',
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
                        'startLine' => 61,
                        'endLine' => 61,
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
 * Wrap the given value in a collection if applicable.
 *
 * @template TWrapValue
 *
 * @param  iterable<array-key, TWrapValue>|TWrapValue  $value
 * @return static<array-key, TWrapValue>
 */',
                'startLine' => 61,
                'endLine' => 61,
                'startColumn' => 5,
                'endColumn' => 40,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'unwrap' => [
                'name' => 'unwrap',
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
                        'startLine' => 72,
                        'endLine' => 72,
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
 * Get the underlying items from the given collection if applicable.
 *
 * @template TUnwrapKey of array-key
 * @template TUnwrapValue
 *
 * @param  array<TUnwrapKey, TUnwrapValue>|static<TUnwrapKey, TUnwrapValue>  $value
 * @return array<TUnwrapKey, TUnwrapValue>
 */',
                'startLine' => 72,
                'endLine' => 72,
                'startColumn' => 5,
                'endColumn' => 42,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'empty' => [
                'name' => 'empty',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new instance with no items.
 *
 * @return static
 */',
                'startLine' => 79,
                'endLine' => 79,
                'startColumn' => 5,
                'endColumn' => 35,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'all' => [
                'name' => 'all',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get all items in the enumerable.
 *
 * @return array
 */',
                'startLine' => 86,
                'endLine' => 86,
                'startColumn' => 5,
                'endColumn' => 26,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'average' => [
                'name' => 'average',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 94,
                                'endLine' => 94,
                                'startTokenPos' => 197,
                                'startFilePos' => 2439,
                                'endTokenPos' => 197,
                                'endFilePos' => 2442,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 94,
                        'endLine' => 94,
                        'startColumn' => 29,
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
 * Alias for the "avg" method.
 *
 * @param  (callable(TValue): float|int)|string|null  $callback
 * @return float|int|null
 */',
                'startLine' => 94,
                'endLine' => 94,
                'startColumn' => 5,
                'endColumn' => 46,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'median' => [
                'name' => 'median',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 102,
                                'endLine' => 102,
                                'startTokenPos' => 213,
                                'startFilePos' => 2630,
                                'endTokenPos' => 213,
                                'endFilePos' => 2633,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 102,
                        'endLine' => 102,
                        'startColumn' => 28,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the median of a given key.
 *
 * @param  string|array<array-key, string>|null  $key
 * @return float|int|null
 */',
                'startLine' => 102,
                'endLine' => 102,
                'startColumn' => 5,
                'endColumn' => 40,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'mode' => [
                'name' => 'mode',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 110,
                                'endLine' => 110,
                                'startTokenPos' => 229,
                                'startFilePos' => 2829,
                                'endTokenPos' => 229,
                                'endFilePos' => 2832,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 110,
                        'endLine' => 110,
                        'startColumn' => 26,
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
 * Get the mode of a given key.
 *
 * @param  string|array<array-key, string>|null  $key
 * @return array<int, float|int>|null
 */',
                'startLine' => 110,
                'endLine' => 110,
                'startColumn' => 5,
                'endColumn' => 38,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'collapse' => [
                'name' => 'collapse',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Collapse the items into a single enumerable.
 *
 * @return static<int, mixed>
 */',
                'startLine' => 117,
                'endLine' => 117,
                'startColumn' => 5,
                'endColumn' => 31,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'some' => [
                'name' => 'some',
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
                        'startLine' => 127,
                        'endLine' => 127,
                        'startColumn' => 26,
                        'endColumn' => 29,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'operator' => [
                        'name' => 'operator',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 127,
                                'endLine' => 127,
                                'startTokenPos' => 259,
                                'startFilePos' => 3232,
                                'endTokenPos' => 259,
                                'endFilePos' => 3235,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 127,
                        'endLine' => 127,
                        'startColumn' => 32,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 127,
                                'endLine' => 127,
                                'startTokenPos' => 266,
                                'startFilePos' => 3247,
                                'endTokenPos' => 266,
                                'endFilePos' => 3250,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 127,
                        'endLine' => 127,
                        'startColumn' => 50,
                        'endColumn' => 62,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Alias for the "contains" method.
 *
 * @param  (callable(TValue, TKey): bool)|TValue|string  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return bool
 */',
                'startLine' => 127,
                'endLine' => 127,
                'startColumn' => 5,
                'endColumn' => 64,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'containsStrict' => [
                'name' => 'containsStrict',
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
                        'startLine' => 136,
                        'endLine' => 136,
                        'startColumn' => 36,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 136,
                                'endLine' => 136,
                                'startTokenPos' => 285,
                                'startFilePos' => 3507,
                                'endTokenPos' => 285,
                                'endFilePos' => 3510,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 136,
                        'endLine' => 136,
                        'startColumn' => 42,
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
 * Determine if an item exists, using strict comparison.
 *
 * @param  (callable(TValue): bool)|TValue|array-key  $key
 * @param  TValue|null  $value
 * @return bool
 */',
                'startLine' => 136,
                'endLine' => 136,
                'startColumn' => 5,
                'endColumn' => 56,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'avg' => [
                'name' => 'avg',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 144,
                                'endLine' => 144,
                                'startTokenPos' => 301,
                                'startFilePos' => 3717,
                                'endTokenPos' => 301,
                                'endFilePos' => 3720,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 144,
                        'endLine' => 144,
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
 * Get the average value of a given key.
 *
 * @param  (callable(TValue): float|int)|string|null  $callback
 * @return float|int|null
 */',
                'startLine' => 144,
                'endLine' => 144,
                'startColumn' => 5,
                'endColumn' => 42,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'contains' => [
                'name' => 'contains',
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
                        'startLine' => 154,
                        'endLine' => 154,
                        'startColumn' => 30,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'operator' => [
                        'name' => 'operator',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 154,
                                'endLine' => 154,
                                'startTokenPos' => 320,
                                'startFilePos' => 3996,
                                'endTokenPos' => 320,
                                'endFilePos' => 3999,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 154,
                        'endLine' => 154,
                        'startColumn' => 36,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 154,
                                'endLine' => 154,
                                'startTokenPos' => 327,
                                'startFilePos' => 4011,
                                'endTokenPos' => 327,
                                'endFilePos' => 4014,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 154,
                        'endLine' => 154,
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
 * Determine if an item exists in the enumerable.
 *
 * @param  (callable(TValue, TKey): bool)|TValue|string  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return bool
 */',
                'startLine' => 154,
                'endLine' => 154,
                'startColumn' => 5,
                'endColumn' => 68,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'doesntContain' => [
                'name' => 'doesntContain',
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
                        'startLine' => 164,
                        'endLine' => 164,
                        'startColumn' => 35,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'operator' => [
                        'name' => 'operator',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 164,
                                'endLine' => 164,
                                'startTokenPos' => 346,
                                'startFilePos' => 4266,
                                'endTokenPos' => 346,
                                'endFilePos' => 4269,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 164,
                        'endLine' => 164,
                        'startColumn' => 41,
                        'endColumn' => 56,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 164,
                                'endLine' => 164,
                                'startTokenPos' => 353,
                                'startFilePos' => 4281,
                                'endTokenPos' => 353,
                                'endFilePos' => 4284,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 164,
                        'endLine' => 164,
                        'startColumn' => 59,
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
 * Determine if an item is not contained in the collection.
 *
 * @param  mixed  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return bool
 */',
                'startLine' => 164,
                'endLine' => 164,
                'startColumn' => 5,
                'endColumn' => 73,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'crossJoin' => [
                'name' => 'crossJoin',
                'parameters' => [
                    'lists' => [
                        'name' => 'lists',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 175,
                        'endLine' => 175,
                        'startColumn' => 31,
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
 * Cross join with the given lists, returning all possible permutations.
 *
 * @template TCrossJoinKey
 * @template TCrossJoinValue
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TCrossJoinKey, TCrossJoinValue>|iterable<TCrossJoinKey, TCrossJoinValue>  ...$lists
 * @return static<int, array<int, TValue|TCrossJoinValue>>
 */',
                'startLine' => 175,
                'endLine' => 175,
                'startColumn' => 5,
                'endColumn' => 41,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'dd' => [
                'name' => 'dd',
                'parameters' => [
                    'args' => [
                        'name' => 'args',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 183,
                        'endLine' => 183,
                        'startColumn' => 24,
                        'endColumn' => 31,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dump the collection and end the script.
 *
 * @param  mixed  ...$args
 * @return never
 */',
                'startLine' => 183,
                'endLine' => 183,
                'startColumn' => 5,
                'endColumn' => 33,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'dump' => [
                'name' => 'dump',
                'parameters' => [
                    'args' => [
                        'name' => 'args',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 191,
                        'endLine' => 191,
                        'startColumn' => 26,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dump the collection.
 *
 * @param  mixed  ...$args
 * @return $this
 */',
                'startLine' => 191,
                'endLine' => 191,
                'startColumn' => 5,
                'endColumn' => 35,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'diff' => [
                'name' => 'diff',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 199,
                        'endLine' => 199,
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
 * Get the items that are not present in the given items.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<array-key, TValue>|iterable<array-key, TValue>  $items
 * @return static
 */',
                'startLine' => 199,
                'endLine' => 199,
                'startColumn' => 5,
                'endColumn' => 33,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'diffUsing' => [
                'name' => 'diffUsing',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 208,
                        'endLine' => 208,
                        'startColumn' => 31,
                        'endColumn' => 36,
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
                        'startLine' => 208,
                        'endLine' => 208,
                        'startColumn' => 39,
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
 * Get the items that are not present in the given items, using the callback.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<array-key, TValue>|iterable<array-key, TValue>  $items
 * @param  callable(TValue, TValue): int  $callback
 * @return static
 */',
                'startLine' => 208,
                'endLine' => 208,
                'startColumn' => 5,
                'endColumn' => 58,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'diffAssoc' => [
                'name' => 'diffAssoc',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 216,
                        'endLine' => 216,
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
 * Get the items whose keys and values are not present in the given items.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, TValue>|iterable<TKey, TValue>  $items
 * @return static
 */',
                'startLine' => 216,
                'endLine' => 216,
                'startColumn' => 5,
                'endColumn' => 38,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'diffAssocUsing' => [
                'name' => 'diffAssocUsing',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 225,
                        'endLine' => 225,
                        'startColumn' => 36,
                        'endColumn' => 41,
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
                        'startLine' => 225,
                        'endLine' => 225,
                        'startColumn' => 44,
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
 * Get the items whose keys and values are not present in the given items, using the callback.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, TValue>|iterable<TKey, TValue>  $items
 * @param  callable(TKey, TKey): int  $callback
 * @return static
 */',
                'startLine' => 225,
                'endLine' => 225,
                'startColumn' => 5,
                'endColumn' => 63,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'diffKeys' => [
                'name' => 'diffKeys',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 233,
                        'endLine' => 233,
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
 * Get the items whose keys are not present in the given items.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, mixed>|iterable<TKey, mixed>  $items
 * @return static
 */',
                'startLine' => 233,
                'endLine' => 233,
                'startColumn' => 5,
                'endColumn' => 37,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'diffKeysUsing' => [
                'name' => 'diffKeysUsing',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 242,
                        'endLine' => 242,
                        'startColumn' => 35,
                        'endColumn' => 40,
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
                        'startLine' => 242,
                        'endLine' => 242,
                        'startColumn' => 43,
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
 * Get the items whose keys are not present in the given items, using the callback.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, mixed>|iterable<TKey, mixed>  $items
 * @param  callable(TKey, TKey): int  $callback
 * @return static
 */',
                'startLine' => 242,
                'endLine' => 242,
                'startColumn' => 5,
                'endColumn' => 62,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'duplicates' => [
                'name' => 'duplicates',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 251,
                                'endLine' => 251,
                                'startTokenPos' => 495,
                                'startFilePos' => 7042,
                                'endTokenPos' => 495,
                                'endFilePos' => 7045,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 251,
                        'endLine' => 251,
                        'startColumn' => 32,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'strict' => [
                        'name' => 'strict',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 251,
                                'endLine' => 251,
                                'startTokenPos' => 502,
                                'startFilePos' => 7058,
                                'endTokenPos' => 502,
                                'endFilePos' => 7062,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 251,
                        'endLine' => 251,
                        'startColumn' => 50,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve duplicate items.
 *
 * @param  (callable(TValue): bool)|string|null  $callback
 * @param  bool  $strict
 * @return static
 */',
                'startLine' => 251,
                'endLine' => 251,
                'startColumn' => 5,
                'endColumn' => 66,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'duplicatesStrict' => [
                'name' => 'duplicatesStrict',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 259,
                                'endLine' => 259,
                                'startTokenPos' => 518,
                                'startFilePos' => 7281,
                                'endTokenPos' => 518,
                                'endFilePos' => 7284,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 259,
                        'endLine' => 259,
                        'startColumn' => 38,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Retrieve duplicate items using strict comparison.
 *
 * @param  (callable(TValue): bool)|string|null  $callback
 * @return static
 */',
                'startLine' => 259,
                'endLine' => 259,
                'startColumn' => 5,
                'endColumn' => 55,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'each' => [
                'name' => 'each',
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
                        'startLine' => 267,
                        'endLine' => 267,
                        'startColumn' => 26,
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
 * Execute a callback over each item.
 *
 * @param  callable(TValue, TKey): mixed  $callback
 * @return $this
 */',
                'startLine' => 267,
                'endLine' => 267,
                'startColumn' => 5,
                'endColumn' => 45,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'eachSpread' => [
                'name' => 'eachSpread',
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
                        'startLine' => 275,
                        'endLine' => 275,
                        'startColumn' => 32,
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
 * Execute a callback over each nested chunk of items.
 *
 * @param  callable  $callback
 * @return static
 */',
                'startLine' => 275,
                'endLine' => 275,
                'startColumn' => 5,
                'endColumn' => 51,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'every' => [
                'name' => 'every',
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
                        'startLine' => 285,
                        'endLine' => 285,
                        'startColumn' => 27,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'operator' => [
                        'name' => 'operator',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 285,
                                'endLine' => 285,
                                'startTokenPos' => 565,
                                'startFilePos' => 7941,
                                'endTokenPos' => 565,
                                'endFilePos' => 7944,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 285,
                        'endLine' => 285,
                        'startColumn' => 33,
                        'endColumn' => 48,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 285,
                                'endLine' => 285,
                                'startTokenPos' => 572,
                                'startFilePos' => 7956,
                                'endTokenPos' => 572,
                                'endFilePos' => 7959,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 285,
                        'endLine' => 285,
                        'startColumn' => 51,
                        'endColumn' => 63,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if all items pass the given truth test.
 *
 * @param  (callable(TValue, TKey): bool)|TValue|string  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return bool
 */',
                'startLine' => 285,
                'endLine' => 285,
                'startColumn' => 5,
                'endColumn' => 65,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'except' => [
                'name' => 'except',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 293,
                        'endLine' => 293,
                        'startColumn' => 28,
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
 * Get all items except for those with the specified keys.
 *
 * @param  \\Illuminate\\Support\\Enumerable<array-key, TKey>|array<array-key, TKey>  $keys
 * @return static
 */',
                'startLine' => 293,
                'endLine' => 293,
                'startColumn' => 5,
                'endColumn' => 34,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'filter' => [
                'name' => 'filter',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 301,
                                'endLine' => 301,
                                'startTokenPos' => 603,
                                'startFilePos' => 8395,
                                'endTokenPos' => 603,
                                'endFilePos' => 8398,
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
                        'startLine' => 301,
                        'endLine' => 301,
                        'startColumn' => 28,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Run a filter over each of the items.
 *
 * @param  (callable(TValue): bool)|null  $callback
 * @return static
 */',
                'startLine' => 301,
                'endLine' => 301,
                'startColumn' => 5,
                'endColumn' => 55,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'when' => [
                'name' => 'when',
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
                        'startLine' => 313,
                        'endLine' => 313,
                        'startColumn' => 26,
                        'endColumn' => 31,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 313,
                                'endLine' => 313,
                                'startTokenPos' => 625,
                                'startFilePos' => 8800,
                                'endTokenPos' => 625,
                                'endFilePos' => 8803,
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
                        'startLine' => 313,
                        'endLine' => 313,
                        'startColumn' => 34,
                        'endColumn' => 59,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 313,
                                'endLine' => 313,
                                'startTokenPos' => 635,
                                'startFilePos' => 8827,
                                'endTokenPos' => 635,
                                'endFilePos' => 8830,
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
                        'startLine' => 313,
                        'endLine' => 313,
                        'startColumn' => 62,
                        'endColumn' => 86,
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
 * @template TWhenReturnType as null
 *
 * @param  bool  $value
 * @param  (callable($this): TWhenReturnType)|null  $callback
 * @param  (callable($this): TWhenReturnType)|null  $default
 * @return $this|TWhenReturnType
 */',
                'startLine' => 313,
                'endLine' => 313,
                'startColumn' => 5,
                'endColumn' => 88,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'whenEmpty' => [
                'name' => 'whenEmpty',
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
                        'startLine' => 324,
                        'endLine' => 324,
                        'startColumn' => 31,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 324,
                                'endLine' => 324,
                                'startTokenPos' => 659,
                                'startFilePos' => 9206,
                                'endTokenPos' => 659,
                                'endFilePos' => 9209,
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
                        'startLine' => 324,
                        'endLine' => 324,
                        'startColumn' => 51,
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
 * Apply the callback if the collection is empty.
 *
 * @template TWhenEmptyReturnType
 *
 * @param  (callable($this): TWhenEmptyReturnType)  $callback
 * @param  (callable($this): TWhenEmptyReturnType)|null  $default
 * @return $this|TWhenEmptyReturnType
 */',
                'startLine' => 324,
                'endLine' => 324,
                'startColumn' => 5,
                'endColumn' => 77,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'whenNotEmpty' => [
                'name' => 'whenNotEmpty',
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
                        'startLine' => 335,
                        'endLine' => 335,
                        'startColumn' => 34,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 335,
                                'endLine' => 335,
                                'startTokenPos' => 683,
                                'startFilePos' => 9602,
                                'endTokenPos' => 683,
                                'endFilePos' => 9605,
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
                        'startLine' => 335,
                        'endLine' => 335,
                        'startColumn' => 54,
                        'endColumn' => 78,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Apply the callback if the collection is not empty.
 *
 * @template TWhenNotEmptyReturnType
 *
 * @param  callable($this): TWhenNotEmptyReturnType  $callback
 * @param  (callable($this): TWhenNotEmptyReturnType)|null  $default
 * @return $this|TWhenNotEmptyReturnType
 */',
                'startLine' => 335,
                'endLine' => 335,
                'startColumn' => 5,
                'endColumn' => 80,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'unless' => [
                'name' => 'unless',
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
                        'startLine' => 347,
                        'endLine' => 347,
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
                                'name' => 'callable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 347,
                        'endLine' => 347,
                        'startColumn' => 36,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 347,
                                'endLine' => 347,
                                'startTokenPos' => 710,
                                'startFilePos' => 10022,
                                'endTokenPos' => 710,
                                'endFilePos' => 10025,
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
                        'startLine' => 347,
                        'endLine' => 347,
                        'startColumn' => 56,
                        'endColumn' => 80,
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
 * @template TUnlessReturnType
 *
 * @param  bool  $value
 * @param  (callable($this): TUnlessReturnType)  $callback
 * @param  (callable($this): TUnlessReturnType)|null  $default
 * @return $this|TUnlessReturnType
 */',
                'startLine' => 347,
                'endLine' => 347,
                'startColumn' => 5,
                'endColumn' => 82,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'unlessEmpty' => [
                'name' => 'unlessEmpty',
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
                        'startLine' => 358,
                        'endLine' => 358,
                        'startColumn' => 33,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 358,
                                'endLine' => 358,
                                'startTokenPos' => 734,
                                'startFilePos' => 10413,
                                'endTokenPos' => 734,
                                'endFilePos' => 10416,
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
                        'startLine' => 358,
                        'endLine' => 358,
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
 * Apply the callback unless the collection is empty.
 *
 * @template TUnlessEmptyReturnType
 *
 * @param  callable($this): TUnlessEmptyReturnType  $callback
 * @param  (callable($this): TUnlessEmptyReturnType)|null  $default
 * @return $this|TUnlessEmptyReturnType
 */',
                'startLine' => 358,
                'endLine' => 358,
                'startColumn' => 5,
                'endColumn' => 79,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'unlessNotEmpty' => [
                'name' => 'unlessNotEmpty',
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
                        'startLine' => 369,
                        'endLine' => 369,
                        'startColumn' => 36,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 369,
                                'endLine' => 369,
                                'startTokenPos' => 758,
                                'startFilePos' => 10823,
                                'endTokenPos' => 758,
                                'endFilePos' => 10826,
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
                        'startLine' => 369,
                        'endLine' => 369,
                        'startColumn' => 56,
                        'endColumn' => 80,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Apply the callback unless the collection is not empty.
 *
 * @template TUnlessNotEmptyReturnType
 *
 * @param  callable($this): TUnlessNotEmptyReturnType  $callback
 * @param  (callable($this): TUnlessNotEmptyReturnType)|null  $default
 * @return $this|TUnlessNotEmptyReturnType
 */',
                'startLine' => 369,
                'endLine' => 369,
                'startColumn' => 5,
                'endColumn' => 82,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'where' => [
                'name' => 'where',
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
                        'startLine' => 379,
                        'endLine' => 379,
                        'startColumn' => 27,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'operator' => [
                        'name' => 'operator',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 379,
                                'endLine' => 379,
                                'startTokenPos' => 777,
                                'startFilePos' => 11058,
                                'endTokenPos' => 777,
                                'endFilePos' => 11061,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 379,
                        'endLine' => 379,
                        'startColumn' => 33,
                        'endColumn' => 48,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 379,
                                'endLine' => 379,
                                'startTokenPos' => 784,
                                'startFilePos' => 11073,
                                'endTokenPos' => 784,
                                'endFilePos' => 11076,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 379,
                        'endLine' => 379,
                        'startColumn' => 51,
                        'endColumn' => 63,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Filter items by the given key value pair.
 *
 * @param  string  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return static
 */',
                'startLine' => 379,
                'endLine' => 379,
                'startColumn' => 5,
                'endColumn' => 65,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'whereNull' => [
                'name' => 'whereNull',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 387,
                                'endLine' => 387,
                                'startTokenPos' => 800,
                                'startFilePos' => 11259,
                                'endTokenPos' => 800,
                                'endFilePos' => 11262,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 387,
                        'endLine' => 387,
                        'startColumn' => 31,
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
 * Filter items where the value for the given key is null.
 *
 * @param  string|null  $key
 * @return static
 */',
                'startLine' => 387,
                'endLine' => 387,
                'startColumn' => 5,
                'endColumn' => 43,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'whereNotNull' => [
                'name' => 'whereNotNull',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 395,
                                'endLine' => 395,
                                'startTokenPos' => 816,
                                'startFilePos' => 11452,
                                'endTokenPos' => 816,
                                'endFilePos' => 11455,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 395,
                        'endLine' => 395,
                        'startColumn' => 34,
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
 * Filter items where the value for the given key is not null.
 *
 * @param  string|null  $key
 * @return static
 */',
                'startLine' => 395,
                'endLine' => 395,
                'startColumn' => 5,
                'endColumn' => 46,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'whereStrict' => [
                'name' => 'whereStrict',
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
                        'startLine' => 404,
                        'endLine' => 404,
                        'startColumn' => 33,
                        'endColumn' => 36,
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
                        'startLine' => 404,
                        'endLine' => 404,
                        'startColumn' => 39,
                        'endColumn' => 44,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Filter items by the given key value pair using strict comparison.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @return static
 */',
                'startLine' => 404,
                'endLine' => 404,
                'startColumn' => 5,
                'endColumn' => 46,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'whereIn' => [
                'name' => 'whereIn',
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
                        'startLine' => 414,
                        'endLine' => 414,
                        'startColumn' => 29,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'values' => [
                        'name' => 'values',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 414,
                        'endLine' => 414,
                        'startColumn' => 35,
                        'endColumn' => 41,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'strict' => [
                        'name' => 'strict',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 414,
                                'endLine' => 414,
                                'startTokenPos' => 853,
                                'startFilePos' => 11960,
                                'endTokenPos' => 853,
                                'endFilePos' => 11964,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 414,
                        'endLine' => 414,
                        'startColumn' => 44,
                        'endColumn' => 58,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Filter items by the given key value pair.
 *
 * @param  string  $key
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|iterable  $values
 * @param  bool  $strict
 * @return static
 */',
                'startLine' => 414,
                'endLine' => 414,
                'startColumn' => 5,
                'endColumn' => 60,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'whereInStrict' => [
                'name' => 'whereInStrict',
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
                        'startLine' => 423,
                        'endLine' => 423,
                        'startColumn' => 35,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'values' => [
                        'name' => 'values',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 423,
                        'endLine' => 423,
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
 * Filter items by the given key value pair using strict comparison.
 *
 * @param  string  $key
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|iterable  $values
 * @return static
 */',
                'startLine' => 423,
                'endLine' => 423,
                'startColumn' => 5,
                'endColumn' => 49,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'whereBetween' => [
                'name' => 'whereBetween',
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
                        'startLine' => 432,
                        'endLine' => 432,
                        'startColumn' => 34,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'values' => [
                        'name' => 'values',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 432,
                        'endLine' => 432,
                        'startColumn' => 40,
                        'endColumn' => 46,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Filter items such that the value of the given key is between the given values.
 *
 * @param  string  $key
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|iterable  $values
 * @return static
 */',
                'startLine' => 432,
                'endLine' => 432,
                'startColumn' => 5,
                'endColumn' => 48,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'whereNotBetween' => [
                'name' => 'whereNotBetween',
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
                        'startLine' => 441,
                        'endLine' => 441,
                        'startColumn' => 37,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'values' => [
                        'name' => 'values',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 441,
                        'endLine' => 441,
                        'startColumn' => 43,
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
 * Filter items such that the value of the given key is not between the given values.
 *
 * @param  string  $key
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|iterable  $values
 * @return static
 */',
                'startLine' => 441,
                'endLine' => 441,
                'startColumn' => 5,
                'endColumn' => 51,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'whereNotIn' => [
                'name' => 'whereNotIn',
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
                        'startLine' => 451,
                        'endLine' => 451,
                        'startColumn' => 32,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'values' => [
                        'name' => 'values',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 451,
                        'endLine' => 451,
                        'startColumn' => 38,
                        'endColumn' => 44,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'strict' => [
                        'name' => 'strict',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 451,
                                'endLine' => 451,
                                'startTokenPos' => 920,
                                'startFilePos' => 13090,
                                'endTokenPos' => 920,
                                'endFilePos' => 13094,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 451,
                        'endLine' => 451,
                        'startColumn' => 47,
                        'endColumn' => 61,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Filter items by the given key value pair.
 *
 * @param  string  $key
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|iterable  $values
 * @param  bool  $strict
 * @return static
 */',
                'startLine' => 451,
                'endLine' => 451,
                'startColumn' => 5,
                'endColumn' => 63,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'whereNotInStrict' => [
                'name' => 'whereNotInStrict',
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
                        'startLine' => 460,
                        'endLine' => 460,
                        'startColumn' => 38,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'values' => [
                        'name' => 'values',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 460,
                        'endLine' => 460,
                        'startColumn' => 44,
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
 * Filter items by the given key value pair using strict comparison.
 *
 * @param  string  $key
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|iterable  $values
 * @return static
 */',
                'startLine' => 460,
                'endLine' => 460,
                'startColumn' => 5,
                'endColumn' => 52,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'whereInstanceOf' => [
                'name' => 'whereInstanceOf',
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
                        'startLine' => 470,
                        'endLine' => 470,
                        'startColumn' => 37,
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
 * Filter the items, removing any items that don\'t match the given type(s).
 *
 * @template TWhereInstanceOf
 *
 * @param  class-string<TWhereInstanceOf>|array<array-key, class-string<TWhereInstanceOf>>  $type
 * @return static<TKey, TWhereInstanceOf>
 */',
                'startLine' => 470,
                'endLine' => 470,
                'startColumn' => 5,
                'endColumn' => 43,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'first' => [
                'name' => 'first',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 481,
                                'endLine' => 481,
                                'startTokenPos' => 966,
                                'startFilePos' => 14058,
                                'endTokenPos' => 966,
                                'endFilePos' => 14061,
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
                        'startLine' => 481,
                        'endLine' => 481,
                        'startColumn' => 27,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 481,
                                'endLine' => 481,
                                'startTokenPos' => 973,
                                'startFilePos' => 14075,
                                'endTokenPos' => 973,
                                'endFilePos' => 14078,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 481,
                        'endLine' => 481,
                        'startColumn' => 55,
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
 * Get the first item from the enumerable passing the given truth test.
 *
 * @template TFirstDefault
 *
 * @param  (callable(TValue,TKey): bool)|null  $callback
 * @param  TFirstDefault|(\\Closure(): TFirstDefault)  $default
 * @return TValue|TFirstDefault
 */',
                'startLine' => 481,
                'endLine' => 481,
                'startColumn' => 5,
                'endColumn' => 71,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'firstWhere' => [
                'name' => 'firstWhere',
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
                        'startLine' => 491,
                        'endLine' => 491,
                        'startColumn' => 32,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'operator' => [
                        'name' => 'operator',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 491,
                                'endLine' => 491,
                                'startTokenPos' => 992,
                                'startFilePos' => 14326,
                                'endTokenPos' => 992,
                                'endFilePos' => 14329,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 491,
                        'endLine' => 491,
                        'startColumn' => 38,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 491,
                                'endLine' => 491,
                                'startTokenPos' => 999,
                                'startFilePos' => 14341,
                                'endTokenPos' => 999,
                                'endFilePos' => 14344,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 491,
                        'endLine' => 491,
                        'startColumn' => 56,
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
 * Get the first item by the given key value pair.
 *
 * @param  string  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return TValue|null
 */',
                'startLine' => 491,
                'endLine' => 491,
                'startColumn' => 5,
                'endColumn' => 70,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'flatten' => [
                'name' => 'flatten',
                'parameters' => [
                    'depth' => [
                        'name' => 'depth',
                        'default' => [
                            'code' => 'INF',
                            'attributes' => [
                                'startLine' => 499,
                                'endLine' => 499,
                                'startTokenPos' => 1015,
                                'startFilePos' => 14519,
                                'endTokenPos' => 1015,
                                'endFilePos' => 14521,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 499,
                        'endLine' => 499,
                        'startColumn' => 29,
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
 * Get a flattened array of the items in the collection.
 *
 * @param  int  $depth
 * @return static
 */',
                'startLine' => 499,
                'endLine' => 499,
                'startColumn' => 5,
                'endColumn' => 42,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'flip' => [
                'name' => 'flip',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Flip the values with their keys.
 *
 * @return static<TValue, TKey>
 */',
                'startLine' => 506,
                'endLine' => 506,
                'startColumn' => 5,
                'endColumn' => 27,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'get' => [
                'name' => 'get',
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
                        'startLine' => 517,
                        'endLine' => 517,
                        'startColumn' => 25,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 517,
                                'endLine' => 517,
                                'startTokenPos' => 1045,
                                'startFilePos' => 14924,
                                'endTokenPos' => 1045,
                                'endFilePos' => 14927,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 517,
                        'endLine' => 517,
                        'startColumn' => 31,
                        'endColumn' => 45,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get an item from the collection by key.
 *
 * @template TGetDefault
 *
 * @param  TKey  $key
 * @param  TGetDefault|(\\Closure(): TGetDefault)  $default
 * @return TValue|TGetDefault
 */',
                'startLine' => 517,
                'endLine' => 517,
                'startColumn' => 5,
                'endColumn' => 47,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'groupBy' => [
                'name' => 'groupBy',
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
                        'startLine' => 528,
                        'endLine' => 528,
                        'startColumn' => 29,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'preserveKeys' => [
                        'name' => 'preserveKeys',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 528,
                                'endLine' => 528,
                                'startTokenPos' => 1064,
                                'startFilePos' => 15417,
                                'endTokenPos' => 1064,
                                'endFilePos' => 15421,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 528,
                        'endLine' => 528,
                        'startColumn' => 39,
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
 * Group an associative array by a field or using a callback.
 *
 * @template TGroupKey of array-key
 *
 * @param  (callable(TValue, TKey): TGroupKey)|array|string  $groupBy
 * @param  bool  $preserveKeys
 * @return static<($groupBy is string ? array-key : ($groupBy is array ? array-key : TGroupKey)), static<($preserveKeys is true ? TKey : int), ($groupBy is array ? mixed : TValue)>>
 */',
                'startLine' => 528,
                'endLine' => 528,
                'startColumn' => 5,
                'endColumn' => 61,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'keyBy' => [
                'name' => 'keyBy',
                'parameters' => [
                    'keyBy' => [
                        'name' => 'keyBy',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 538,
                        'endLine' => 538,
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
 * Key an associative array by a field or using a callback.
 *
 * @template TNewKey of array-key
 *
 * @param  (callable(TValue, TKey): TNewKey)|array|string  $keyBy
 * @return static<($keyBy is string ? array-key : ($keyBy is array ? array-key : TNewKey)), TValue>
 */',
                'startLine' => 538,
                'endLine' => 538,
                'startColumn' => 5,
                'endColumn' => 34,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'has' => [
                'name' => 'has',
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
                        'startLine' => 546,
                        'endLine' => 546,
                        'startColumn' => 25,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if an item exists in the collection by key.
 *
 * @param  TKey|array<array-key, TKey>  $key
 * @return bool
 */',
                'startLine' => 546,
                'endLine' => 546,
                'startColumn' => 5,
                'endColumn' => 30,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'hasAny' => [
                'name' => 'hasAny',
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
                        'startLine' => 554,
                        'endLine' => 554,
                        'startColumn' => 28,
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
 * Determine if any of the keys exist in the collection.
 *
 * @param  mixed  $key
 * @return bool
 */',
                'startLine' => 554,
                'endLine' => 554,
                'startColumn' => 5,
                'endColumn' => 33,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'implode' => [
                'name' => 'implode',
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
                        'startLine' => 563,
                        'endLine' => 563,
                        'startColumn' => 29,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'glue' => [
                        'name' => 'glue',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 563,
                                'endLine' => 563,
                                'startTokenPos' => 1119,
                                'startFilePos' => 16358,
                                'endTokenPos' => 1119,
                                'endFilePos' => 16361,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 563,
                        'endLine' => 563,
                        'startColumn' => 37,
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
 * Concatenate values of a given key as a string.
 *
 * @param  (callable(TValue, TKey): mixed)|string  $value
 * @param  string|null  $glue
 * @return string
 */',
                'startLine' => 563,
                'endLine' => 563,
                'startColumn' => 5,
                'endColumn' => 50,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'intersect' => [
                'name' => 'intersect',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 571,
                        'endLine' => 571,
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
 * Intersect the collection with the given items.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, TValue>|iterable<TKey, TValue>  $items
 * @return static
 */',
                'startLine' => 571,
                'endLine' => 571,
                'startColumn' => 5,
                'endColumn' => 38,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'intersectUsing' => [
                'name' => 'intersectUsing',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 580,
                        'endLine' => 580,
                        'startColumn' => 36,
                        'endColumn' => 41,
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
                        'startLine' => 580,
                        'endLine' => 580,
                        'startColumn' => 44,
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
 * Intersect the collection with the given items, using the callback.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<array-key, TValue>|iterable<array-key, TValue>  $items
 * @param  callable(TValue, TValue): int  $callback
 * @return static
 */',
                'startLine' => 580,
                'endLine' => 580,
                'startColumn' => 5,
                'endColumn' => 63,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'intersectAssoc' => [
                'name' => 'intersectAssoc',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 588,
                        'endLine' => 588,
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
 * Intersect the collection with the given items with additional index check.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, TValue>|iterable<TKey, TValue>  $items
 * @return static
 */',
                'startLine' => 588,
                'endLine' => 588,
                'startColumn' => 5,
                'endColumn' => 43,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'intersectAssocUsing' => [
                'name' => 'intersectAssocUsing',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 597,
                        'endLine' => 597,
                        'startColumn' => 41,
                        'endColumn' => 46,
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
                        'startLine' => 597,
                        'endLine' => 597,
                        'startColumn' => 49,
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
 * Intersect the collection with the given items with additional index check, using the callback.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<array-key, TValue>|iterable<array-key, TValue>  $items
 * @param  callable(TValue, TValue): int  $callback
 * @return static
 */',
                'startLine' => 597,
                'endLine' => 597,
                'startColumn' => 5,
                'endColumn' => 68,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'intersectByKeys' => [
                'name' => 'intersectByKeys',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 605,
                        'endLine' => 605,
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
 * Intersect the collection with the given items by key.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, mixed>|iterable<TKey, mixed>  $items
 * @return static
 */',
                'startLine' => 605,
                'endLine' => 605,
                'startColumn' => 5,
                'endColumn' => 44,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'isEmpty' => [
                'name' => 'isEmpty',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the collection is empty or not.
 *
 * @return bool
 */',
                'startLine' => 612,
                'endLine' => 612,
                'startColumn' => 5,
                'endColumn' => 30,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'isNotEmpty' => [
                'name' => 'isNotEmpty',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the collection is not empty.
 *
 * @return bool
 */',
                'startLine' => 619,
                'endLine' => 619,
                'startColumn' => 5,
                'endColumn' => 33,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'containsOneItem' => [
                'name' => 'containsOneItem',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the collection contains a single item.
 *
 * @return bool
 */',
                'startLine' => 626,
                'endLine' => 626,
                'startColumn' => 5,
                'endColumn' => 38,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'containsManyItems' => [
                'name' => 'containsManyItems',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the collection contains multiple items.
 *
 * @return bool
 */',
                'startLine' => 633,
                'endLine' => 633,
                'startColumn' => 5,
                'endColumn' => 40,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'join' => [
                'name' => 'join',
                'parameters' => [
                    'glue' => [
                        'name' => 'glue',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 642,
                        'endLine' => 642,
                        'startColumn' => 26,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'finalGlue' => [
                        'name' => 'finalGlue',
                        'default' => [
                            'code' => '\'\'',
                            'attributes' => [
                                'startLine' => 642,
                                'endLine' => 642,
                                'startTokenPos' => 1252,
                                'startFilePos' => 18660,
                                'endTokenPos' => 1252,
                                'endFilePos' => 18661,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 642,
                        'endLine' => 642,
                        'startColumn' => 33,
                        'endColumn' => 47,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Join all items from the collection using a string. The final items can use a separate glue string.
 *
 * @param  string  $glue
 * @param  string  $finalGlue
 * @return string
 */',
                'startLine' => 642,
                'endLine' => 642,
                'startColumn' => 5,
                'endColumn' => 49,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'keys' => [
                'name' => 'keys',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the keys of the collection items.
 *
 * @return static<int, TKey>
 */',
                'startLine' => 649,
                'endLine' => 649,
                'startColumn' => 5,
                'endColumn' => 27,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'last' => [
                'name' => 'last',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 660,
                                'endLine' => 660,
                                'startTokenPos' => 1282,
                                'startFilePos' => 19111,
                                'endTokenPos' => 1282,
                                'endFilePos' => 19114,
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
                        'startLine' => 660,
                        'endLine' => 660,
                        'startColumn' => 26,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 660,
                                'endLine' => 660,
                                'startTokenPos' => 1289,
                                'startFilePos' => 19128,
                                'endTokenPos' => 1289,
                                'endFilePos' => 19131,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 660,
                        'endLine' => 660,
                        'startColumn' => 54,
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
 * Get the last item from the collection.
 *
 * @template TLastDefault
 *
 * @param  (callable(TValue, TKey): bool)|null  $callback
 * @param  TLastDefault|(\\Closure(): TLastDefault)  $default
 * @return TValue|TLastDefault
 */',
                'startLine' => 660,
                'endLine' => 660,
                'startColumn' => 5,
                'endColumn' => 70,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'map' => [
                'name' => 'map',
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
                        'startLine' => 670,
                        'endLine' => 670,
                        'startColumn' => 25,
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
 * Run a map over each of the items.
 *
 * @template TMapValue
 *
 * @param  callable(TValue, TKey): TMapValue  $callback
 * @return static<TKey, TMapValue>
 */',
                'startLine' => 670,
                'endLine' => 670,
                'startColumn' => 5,
                'endColumn' => 44,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'mapSpread' => [
                'name' => 'mapSpread',
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
                        'startLine' => 678,
                        'endLine' => 678,
                        'startColumn' => 31,
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
 * Run a map over each nested chunk of items.
 *
 * @param  callable  $callback
 * @return static
 */',
                'startLine' => 678,
                'endLine' => 678,
                'startColumn' => 5,
                'endColumn' => 50,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'mapToDictionary' => [
                'name' => 'mapToDictionary',
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
                        'startLine' => 691,
                        'endLine' => 691,
                        'startColumn' => 37,
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
 * Run a dictionary map over the items.
 *
 * The callback should return an associative array with a single key/value pair.
 *
 * @template TMapToDictionaryKey of array-key
 * @template TMapToDictionaryValue
 *
 * @param  callable(TValue, TKey): array<TMapToDictionaryKey, TMapToDictionaryValue>  $callback
 * @return static<TMapToDictionaryKey, array<int, TMapToDictionaryValue>>
 */',
                'startLine' => 691,
                'endLine' => 691,
                'startColumn' => 5,
                'endColumn' => 56,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'mapToGroups' => [
                'name' => 'mapToGroups',
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
                        'startLine' => 704,
                        'endLine' => 704,
                        'startColumn' => 33,
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
 * Run a grouping map over the items.
 *
 * The callback should return an associative array with a single key/value pair.
 *
 * @template TMapToGroupsKey of array-key
 * @template TMapToGroupsValue
 *
 * @param  callable(TValue, TKey): array<TMapToGroupsKey, TMapToGroupsValue>  $callback
 * @return static<TMapToGroupsKey, static<int, TMapToGroupsValue>>
 */',
                'startLine' => 704,
                'endLine' => 704,
                'startColumn' => 5,
                'endColumn' => 52,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'mapWithKeys' => [
                'name' => 'mapWithKeys',
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
                        'startLine' => 717,
                        'endLine' => 717,
                        'startColumn' => 33,
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
 * Run an associative map over each of the items.
 *
 * The callback should return an associative array with a single key/value pair.
 *
 * @template TMapWithKeysKey of array-key
 * @template TMapWithKeysValue
 *
 * @param  callable(TValue, TKey): array<TMapWithKeysKey, TMapWithKeysValue>  $callback
 * @return static<TMapWithKeysKey, TMapWithKeysValue>
 */',
                'startLine' => 717,
                'endLine' => 717,
                'startColumn' => 5,
                'endColumn' => 52,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'flatMap' => [
                'name' => 'flatMap',
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
                        'startLine' => 728,
                        'endLine' => 728,
                        'startColumn' => 29,
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
 * Map a collection and flatten the result by a single level.
 *
 * @template TFlatMapKey of array-key
 * @template TFlatMapValue
 *
 * @param  callable(TValue, TKey): (\\Illuminate\\Support\\Collection<TFlatMapKey, TFlatMapValue>|array<TFlatMapKey, TFlatMapValue>)  $callback
 * @return static<TFlatMapKey, TFlatMapValue>
 */',
                'startLine' => 728,
                'endLine' => 728,
                'startColumn' => 5,
                'endColumn' => 48,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'mapInto' => [
                'name' => 'mapInto',
                'parameters' => [
                    'class' => [
                        'name' => 'class',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 738,
                        'endLine' => 738,
                        'startColumn' => 29,
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
 * Map the values into a new class.
 *
 * @template TMapIntoValue
 *
 * @param  class-string<TMapIntoValue>  $class
 * @return static<TKey, TMapIntoValue>
 */',
                'startLine' => 738,
                'endLine' => 738,
                'startColumn' => 5,
                'endColumn' => 36,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'merge' => [
                'name' => 'merge',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 748,
                        'endLine' => 748,
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
 * Merge the collection with the given items.
 *
 * @template TMergeValue
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, TMergeValue>|iterable<TKey, TMergeValue>  $items
 * @return static<TKey, TValue|TMergeValue>
 */',
                'startLine' => 748,
                'endLine' => 748,
                'startColumn' => 5,
                'endColumn' => 34,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'mergeRecursive' => [
                'name' => 'mergeRecursive',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 758,
                        'endLine' => 758,
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
 * Recursively merge the collection with the given items.
 *
 * @template TMergeRecursiveValue
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, TMergeRecursiveValue>|iterable<TKey, TMergeRecursiveValue>  $items
 * @return static<TKey, TValue|TMergeRecursiveValue>
 */',
                'startLine' => 758,
                'endLine' => 758,
                'startColumn' => 5,
                'endColumn' => 43,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'combine' => [
                'name' => 'combine',
                'parameters' => [
                    'values' => [
                        'name' => 'values',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 768,
                        'endLine' => 768,
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
 * Create a collection by using this collection for keys and another for its values.
 *
 * @template TCombineValue
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<array-key, TCombineValue>|iterable<array-key, TCombineValue>  $values
 * @return static<TValue, TCombineValue>
 */',
                'startLine' => 768,
                'endLine' => 768,
                'startColumn' => 5,
                'endColumn' => 37,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'union' => [
                'name' => 'union',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 776,
                        'endLine' => 776,
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
 * Union the collection with the given items.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, TValue>|iterable<TKey, TValue>  $items
 * @return static
 */',
                'startLine' => 776,
                'endLine' => 776,
                'startColumn' => 5,
                'endColumn' => 34,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'min' => [
                'name' => 'min',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 784,
                                'endLine' => 784,
                                'startTokenPos' => 1449,
                                'startFilePos' => 23059,
                                'endTokenPos' => 1449,
                                'endFilePos' => 23062,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 784,
                        'endLine' => 784,
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
 * Get the min value of a given key.
 *
 * @param  (callable(TValue):mixed)|string|null  $callback
 * @return mixed
 */',
                'startLine' => 784,
                'endLine' => 784,
                'startColumn' => 5,
                'endColumn' => 42,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'max' => [
                'name' => 'max',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 792,
                                'endLine' => 792,
                                'startTokenPos' => 1465,
                                'startFilePos' => 23251,
                                'endTokenPos' => 1465,
                                'endFilePos' => 23254,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 792,
                        'endLine' => 792,
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
 * Get the max value of a given key.
 *
 * @param  (callable(TValue):mixed)|string|null  $callback
 * @return mixed
 */',
                'startLine' => 792,
                'endLine' => 792,
                'startColumn' => 5,
                'endColumn' => 42,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'nth' => [
                'name' => 'nth',
                'parameters' => [
                    'step' => [
                        'name' => 'step',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 801,
                        'endLine' => 801,
                        'startColumn' => 25,
                        'endColumn' => 29,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'offset' => [
                        'name' => 'offset',
                        'default' => [
                            'code' => '0',
                            'attributes' => [
                                'startLine' => 801,
                                'endLine' => 801,
                                'startTokenPos' => 1484,
                                'startFilePos' => 23464,
                                'endTokenPos' => 1484,
                                'endFilePos' => 23464,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 801,
                        'endLine' => 801,
                        'startColumn' => 32,
                        'endColumn' => 42,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new collection consisting of every n-th element.
 *
 * @param  int  $step
 * @param  int  $offset
 * @return static
 */',
                'startLine' => 801,
                'endLine' => 801,
                'startColumn' => 5,
                'endColumn' => 44,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'only' => [
                'name' => 'only',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 809,
                        'endLine' => 809,
                        'startColumn' => 26,
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
 * Get the items with the specified keys.
 *
 * @param  \\Illuminate\\Support\\Enumerable<array-key, TKey>|array<array-key, TKey>|string  $keys
 * @return static
 */',
                'startLine' => 809,
                'endLine' => 809,
                'startColumn' => 5,
                'endColumn' => 32,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'forPage' => [
                'name' => 'forPage',
                'parameters' => [
                    'page' => [
                        'name' => 'page',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 818,
                        'endLine' => 818,
                        'startColumn' => 29,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'perPage' => [
                        'name' => 'perPage',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 818,
                        'endLine' => 818,
                        'startColumn' => 36,
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
 * "Paginate" the collection by slicing it into a smaller collection.
 *
 * @param  int  $page
 * @param  int  $perPage
 * @return static
 */',
                'startLine' => 818,
                'endLine' => 818,
                'startColumn' => 5,
                'endColumn' => 45,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'partition' => [
                'name' => 'partition',
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
                        'startLine' => 828,
                        'endLine' => 828,
                        'startColumn' => 31,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'operator' => [
                        'name' => 'operator',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 828,
                                'endLine' => 828,
                                'startTokenPos' => 1530,
                                'startFilePos' => 24249,
                                'endTokenPos' => 1530,
                                'endFilePos' => 24252,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 828,
                        'endLine' => 828,
                        'startColumn' => 37,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 828,
                                'endLine' => 828,
                                'startTokenPos' => 1537,
                                'startFilePos' => 24264,
                                'endTokenPos' => 1537,
                                'endFilePos' => 24267,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 828,
                        'endLine' => 828,
                        'startColumn' => 55,
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
 * Partition the collection into two arrays using the given callback or key.
 *
 * @param  (callable(TValue, TKey): bool)|TValue|string  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return static<int<0, 1>, static<TKey, TValue>>
 */',
                'startLine' => 828,
                'endLine' => 828,
                'startColumn' => 5,
                'endColumn' => 69,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'concat' => [
                'name' => 'concat',
                'parameters' => [
                    'source' => [
                        'name' => 'source',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 839,
                        'endLine' => 839,
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
 * Push all of the given items onto the collection.
 *
 * @template TConcatKey of array-key
 * @template TConcatValue
 *
 * @param  iterable<TConcatKey, TConcatValue>  $source
 * @return static<TKey|TConcatKey, TValue|TConcatValue>
 */',
                'startLine' => 839,
                'endLine' => 839,
                'startColumn' => 5,
                'endColumn' => 36,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'random' => [
                'name' => 'random',
                'parameters' => [
                    'number' => [
                        'name' => 'number',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 849,
                                'endLine' => 849,
                                'startTokenPos' => 1565,
                                'startFilePos' => 24845,
                                'endTokenPos' => 1565,
                                'endFilePos' => 24848,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 849,
                        'endLine' => 849,
                        'startColumn' => 28,
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
 * Get one or a specified number of items randomly from the collection.
 *
 * @param  int|null  $number
 * @return static<int, TValue>|TValue
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 849,
                'endLine' => 849,
                'startColumn' => 5,
                'endColumn' => 43,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'reduce' => [
                'name' => 'reduce',
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
                        'startLine' => 861,
                        'endLine' => 861,
                        'startColumn' => 28,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'initial' => [
                        'name' => 'initial',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 861,
                                'endLine' => 861,
                                'startTokenPos' => 1586,
                                'startFilePos' => 25246,
                                'endTokenPos' => 1586,
                                'endFilePos' => 25249,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 861,
                        'endLine' => 861,
                        'startColumn' => 48,
                        'endColumn' => 62,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Reduce the collection to a single value.
 *
 * @template TReduceInitial
 * @template TReduceReturnType
 *
 * @param  callable(TReduceInitial|TReduceReturnType, TValue, TKey): TReduceReturnType  $callback
 * @param  TReduceInitial  $initial
 * @return TReduceInitial|TReduceReturnType
 */',
                'startLine' => 861,
                'endLine' => 861,
                'startColumn' => 5,
                'endColumn' => 64,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'reduceSpread' => [
                'name' => 'reduceSpread',
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
                        'startLine' => 872,
                        'endLine' => 872,
                        'startColumn' => 34,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'initial' => [
                        'name' => 'initial',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 872,
                        'endLine' => 872,
                        'startColumn' => 54,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Reduce the collection to multiple aggregate values.
 *
 * @param  callable  $callback
 * @param  mixed  ...$initial
 * @return array
 *
 * @throws \\UnexpectedValueException
 */',
                'startLine' => 872,
                'endLine' => 872,
                'startColumn' => 5,
                'endColumn' => 66,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'replace' => [
                'name' => 'replace',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 880,
                        'endLine' => 880,
                        'startColumn' => 29,
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
 * Replace the collection items with the given items.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, TValue>|iterable<TKey, TValue>  $items
 * @return static
 */',
                'startLine' => 880,
                'endLine' => 880,
                'startColumn' => 5,
                'endColumn' => 36,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'replaceRecursive' => [
                'name' => 'replaceRecursive',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 888,
                        'endLine' => 888,
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
 * Recursively replace the collection items with the given items.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, TValue>|iterable<TKey, TValue>  $items
 * @return static
 */',
                'startLine' => 888,
                'endLine' => 888,
                'startColumn' => 5,
                'endColumn' => 45,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'reverse' => [
                'name' => 'reverse',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Reverse items order.
 *
 * @return static
 */',
                'startLine' => 895,
                'endLine' => 895,
                'startColumn' => 5,
                'endColumn' => 30,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'search' => [
                'name' => 'search',
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
                        'startLine' => 904,
                        'endLine' => 904,
                        'startColumn' => 28,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'strict' => [
                        'name' => 'strict',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 904,
                                'endLine' => 904,
                                'startTokenPos' => 1658,
                                'startFilePos' => 26425,
                                'endTokenPos' => 1658,
                                'endFilePos' => 26429,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 904,
                        'endLine' => 904,
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
 * Search the collection for a given value and return the corresponding key if successful.
 *
 * @param  TValue|callable(TValue,TKey): bool  $value
 * @param  bool  $strict
 * @return TKey|bool
 */',
                'startLine' => 904,
                'endLine' => 904,
                'startColumn' => 5,
                'endColumn' => 52,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'before' => [
                'name' => 'before',
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
                        'startLine' => 913,
                        'endLine' => 913,
                        'startColumn' => 28,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'strict' => [
                        'name' => 'strict',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 913,
                                'endLine' => 913,
                                'startTokenPos' => 1677,
                                'startFilePos' => 26661,
                                'endTokenPos' => 1677,
                                'endFilePos' => 26665,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 913,
                        'endLine' => 913,
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
 * Get the item before the given item.
 *
 * @param  TValue|(callable(TValue,TKey): bool)  $value
 * @param  bool  $strict
 * @return TValue|null
 */',
                'startLine' => 913,
                'endLine' => 913,
                'startColumn' => 5,
                'endColumn' => 52,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'after' => [
                'name' => 'after',
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
                        'startLine' => 922,
                        'endLine' => 922,
                        'startColumn' => 27,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'strict' => [
                        'name' => 'strict',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 922,
                                'endLine' => 922,
                                'startTokenPos' => 1696,
                                'startFilePos' => 26895,
                                'endTokenPos' => 1696,
                                'endFilePos' => 26899,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 922,
                        'endLine' => 922,
                        'startColumn' => 35,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the item after the given item.
 *
 * @param  TValue|(callable(TValue,TKey): bool)  $value
 * @param  bool  $strict
 * @return TValue|null
 */',
                'startLine' => 922,
                'endLine' => 922,
                'startColumn' => 5,
                'endColumn' => 51,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'shuffle' => [
                'name' => 'shuffle',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Shuffle the items in the collection.
 *
 * @return static
 */',
                'startLine' => 929,
                'endLine' => 929,
                'startColumn' => 5,
                'endColumn' => 30,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'sliding' => [
                'name' => 'sliding',
                'parameters' => [
                    'size' => [
                        'name' => 'size',
                        'default' => [
                            'code' => '2',
                            'attributes' => [
                                'startLine' => 938,
                                'endLine' => 938,
                                'startTokenPos' => 1723,
                                'startFilePos' => 27261,
                                'endTokenPos' => 1723,
                                'endFilePos' => 27261,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 938,
                        'endLine' => 938,
                        'startColumn' => 29,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'step' => [
                        'name' => 'step',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 938,
                                'endLine' => 938,
                                'startTokenPos' => 1730,
                                'startFilePos' => 27272,
                                'endTokenPos' => 1730,
                                'endFilePos' => 27272,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 938,
                        'endLine' => 938,
                        'startColumn' => 40,
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
 * Create chunks representing a "sliding window" view of the items in the collection.
 *
 * @param  int  $size
 * @param  int  $step
 * @return static<int, static>
 */',
                'startLine' => 938,
                'endLine' => 938,
                'startColumn' => 5,
                'endColumn' => 50,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'skip' => [
                'name' => 'skip',
                'parameters' => [
                    'count' => [
                        'name' => 'count',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 946,
                        'endLine' => 946,
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
 * Skip the first {$count} items.
 *
 * @param  int  $count
 * @return static
 */',
                'startLine' => 946,
                'endLine' => 946,
                'startColumn' => 5,
                'endColumn' => 33,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'skipUntil' => [
                'name' => 'skipUntil',
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
                        'startLine' => 954,
                        'endLine' => 954,
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
 * Skip items in the collection until the given condition is met.
 *
 * @param  TValue|callable(TValue,TKey): bool  $value
 * @return static
 */',
                'startLine' => 954,
                'endLine' => 954,
                'startColumn' => 5,
                'endColumn' => 38,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'skipWhile' => [
                'name' => 'skipWhile',
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
                        'startLine' => 962,
                        'endLine' => 962,
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
 * Skip items in the collection while the given condition is met.
 *
 * @param  TValue|callable(TValue,TKey): bool  $value
 * @return static
 */',
                'startLine' => 962,
                'endLine' => 962,
                'startColumn' => 5,
                'endColumn' => 38,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'slice' => [
                'name' => 'slice',
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
                        'startLine' => 971,
                        'endLine' => 971,
                        'startColumn' => 27,
                        'endColumn' => 33,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'length' => [
                        'name' => 'length',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 971,
                                'endLine' => 971,
                                'startTokenPos' => 1785,
                                'startFilePos' => 28048,
                                'endTokenPos' => 1785,
                                'endFilePos' => 28051,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 971,
                        'endLine' => 971,
                        'startColumn' => 36,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a slice of items from the enumerable.
 *
 * @param  int  $offset
 * @param  int|null  $length
 * @return static
 */',
                'startLine' => 971,
                'endLine' => 971,
                'startColumn' => 5,
                'endColumn' => 51,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'split' => [
                'name' => 'split',
                'parameters' => [
                    'numberOfGroups' => [
                        'name' => 'numberOfGroups',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 979,
                        'endLine' => 979,
                        'startColumn' => 27,
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
 * Split a collection into a certain number of groups.
 *
 * @param  int  $numberOfGroups
 * @return static<int, static>
 */',
                'startLine' => 979,
                'endLine' => 979,
                'startColumn' => 5,
                'endColumn' => 43,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'sole' => [
                'name' => 'sole',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 992,
                                'endLine' => 992,
                                'startTokenPos' => 1813,
                                'startFilePos' => 28691,
                                'endTokenPos' => 1813,
                                'endFilePos' => 28694,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 992,
                        'endLine' => 992,
                        'startColumn' => 26,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'operator' => [
                        'name' => 'operator',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 992,
                                'endLine' => 992,
                                'startTokenPos' => 1820,
                                'startFilePos' => 28709,
                                'endTokenPos' => 1820,
                                'endFilePos' => 28712,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 992,
                        'endLine' => 992,
                        'startColumn' => 39,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 992,
                                'endLine' => 992,
                                'startTokenPos' => 1827,
                                'startFilePos' => 28724,
                                'endTokenPos' => 1827,
                                'endFilePos' => 28727,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 992,
                        'endLine' => 992,
                        'startColumn' => 57,
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
 * Get the first item in the collection, but only if exactly one item exists. Otherwise, throw an exception.
 *
 * @param  (callable(TValue, TKey): bool)|string  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return TValue
 *
 * @throws \\Illuminate\\Support\\ItemNotFoundException
 * @throws \\Illuminate\\Support\\MultipleItemsFoundException
 */',
                'startLine' => 992,
                'endLine' => 992,
                'startColumn' => 5,
                'endColumn' => 71,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'firstOrFail' => [
                'name' => 'firstOrFail',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1004,
                                'endLine' => 1004,
                                'startTokenPos' => 1843,
                                'startFilePos' => 29100,
                                'endTokenPos' => 1843,
                                'endFilePos' => 29103,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1004,
                        'endLine' => 1004,
                        'startColumn' => 33,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'operator' => [
                        'name' => 'operator',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1004,
                                'endLine' => 1004,
                                'startTokenPos' => 1850,
                                'startFilePos' => 29118,
                                'endTokenPos' => 1850,
                                'endFilePos' => 29121,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1004,
                        'endLine' => 1004,
                        'startColumn' => 46,
                        'endColumn' => 61,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1004,
                                'endLine' => 1004,
                                'startTokenPos' => 1857,
                                'startFilePos' => 29133,
                                'endTokenPos' => 1857,
                                'endFilePos' => 29136,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1004,
                        'endLine' => 1004,
                        'startColumn' => 64,
                        'endColumn' => 76,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the first item in the collection but throw an exception if no matching items exist.
 *
 * @param  (callable(TValue, TKey): bool)|string|null  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return TValue
 *
 * @throws \\Illuminate\\Support\\ItemNotFoundException
 */',
                'startLine' => 1004,
                'endLine' => 1004,
                'startColumn' => 5,
                'endColumn' => 78,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'chunk' => [
                'name' => 'chunk',
                'parameters' => [
                    'size' => [
                        'name' => 'size',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1012,
                        'endLine' => 1012,
                        'startColumn' => 27,
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
 * Chunk the collection into chunks of the given size.
 *
 * @param  int  $size
 * @return static<int, static>
 */',
                'startLine' => 1012,
                'endLine' => 1012,
                'startColumn' => 5,
                'endColumn' => 33,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'chunkWhile' => [
                'name' => 'chunkWhile',
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
                        'startLine' => 1020,
                        'endLine' => 1020,
                        'startColumn' => 32,
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
 * Chunk the collection into chunks with a callback.
 *
 * @param  callable(TValue, TKey, static<int, TValue>): bool  $callback
 * @return static<int, static<int, TValue>>
 */',
                'startLine' => 1020,
                'endLine' => 1020,
                'startColumn' => 5,
                'endColumn' => 51,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'splitIn' => [
                'name' => 'splitIn',
                'parameters' => [
                    'numberOfGroups' => [
                        'name' => 'numberOfGroups',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1028,
                        'endLine' => 1028,
                        'startColumn' => 29,
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
 * Split a collection into a certain number of groups, and fill the first groups completely.
 *
 * @param  int  $numberOfGroups
 * @return static<int, static>
 */',
                'startLine' => 1028,
                'endLine' => 1028,
                'startColumn' => 5,
                'endColumn' => 45,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'sort' => [
                'name' => 'sort',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1036,
                                'endLine' => 1036,
                                'startTokenPos' => 1911,
                                'startFilePos' => 30010,
                                'endTokenPos' => 1911,
                                'endFilePos' => 30013,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1036,
                        'endLine' => 1036,
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
 * Sort through each item with a callback.
 *
 * @param  (callable(TValue, TValue): int)|null|int  $callback
 * @return static
 */',
                'startLine' => 1036,
                'endLine' => 1036,
                'startColumn' => 5,
                'endColumn' => 43,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'sortDesc' => [
                'name' => 'sortDesc',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => 'SORT_REGULAR',
                            'attributes' => [
                                'startLine' => 1044,
                                'endLine' => 1044,
                                'startTokenPos' => 1927,
                                'startFilePos' => 30171,
                                'endTokenPos' => 1927,
                                'endFilePos' => 30182,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1044,
                        'endLine' => 1044,
                        'startColumn' => 30,
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
 * Sort items in descending order.
 *
 * @param  int  $options
 * @return static
 */',
                'startLine' => 1044,
                'endLine' => 1044,
                'startColumn' => 5,
                'endColumn' => 54,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'sortBy' => [
                'name' => 'sortBy',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1054,
                        'endLine' => 1054,
                        'startColumn' => 28,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => 'SORT_REGULAR',
                            'attributes' => [
                                'startLine' => 1054,
                                'endLine' => 1054,
                                'startTokenPos' => 1946,
                                'startFilePos' => 30574,
                                'endTokenPos' => 1946,
                                'endFilePos' => 30585,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1054,
                        'endLine' => 1054,
                        'startColumn' => 39,
                        'endColumn' => 61,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'descending' => [
                        'name' => 'descending',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 1054,
                                'endLine' => 1054,
                                'startTokenPos' => 1953,
                                'startFilePos' => 30602,
                                'endTokenPos' => 1953,
                                'endFilePos' => 30606,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1054,
                        'endLine' => 1054,
                        'startColumn' => 64,
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
 * Sort the collection using the given callback.
 *
 * @param  array<array-key, (callable(TValue, TValue): mixed)|(callable(TValue, TKey): mixed)|string|array{string, string}>|(callable(TValue, TKey): mixed)|string  $callback
 * @param  int  $options
 * @param  bool  $descending
 * @return static
 */',
                'startLine' => 1054,
                'endLine' => 1054,
                'startColumn' => 5,
                'endColumn' => 84,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'sortByDesc' => [
                'name' => 'sortByDesc',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1063,
                        'endLine' => 1063,
                        'startColumn' => 32,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => 'SORT_REGULAR',
                            'attributes' => [
                                'startLine' => 1063,
                                'endLine' => 1063,
                                'startTokenPos' => 1972,
                                'startFilePos' => 30989,
                                'endTokenPos' => 1972,
                                'endFilePos' => 31000,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1063,
                        'endLine' => 1063,
                        'startColumn' => 43,
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
 * Sort the collection in descending order using the given callback.
 *
 * @param  array<array-key, (callable(TValue, TValue): mixed)|(callable(TValue, TKey): mixed)|string|array{string, string}>|(callable(TValue, TKey): mixed)|string  $callback
 * @param  int  $options
 * @return static
 */',
                'startLine' => 1063,
                'endLine' => 1063,
                'startColumn' => 5,
                'endColumn' => 67,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'sortKeys' => [
                'name' => 'sortKeys',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => 'SORT_REGULAR',
                            'attributes' => [
                                'startLine' => 1072,
                                'endLine' => 1072,
                                'startTokenPos' => 1988,
                                'startFilePos' => 31185,
                                'endTokenPos' => 1988,
                                'endFilePos' => 31196,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1072,
                        'endLine' => 1072,
                        'startColumn' => 30,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'descending' => [
                        'name' => 'descending',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 1072,
                                'endLine' => 1072,
                                'startTokenPos' => 1995,
                                'startFilePos' => 31213,
                                'endTokenPos' => 1995,
                                'endFilePos' => 31217,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1072,
                        'endLine' => 1072,
                        'startColumn' => 55,
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
 * Sort the collection keys.
 *
 * @param  int  $options
 * @param  bool  $descending
 * @return static
 */',
                'startLine' => 1072,
                'endLine' => 1072,
                'startColumn' => 5,
                'endColumn' => 75,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'sortKeysDesc' => [
                'name' => 'sortKeysDesc',
                'parameters' => [
                    'options' => [
                        'name' => 'options',
                        'default' => [
                            'code' => 'SORT_REGULAR',
                            'attributes' => [
                                'startLine' => 1080,
                                'endLine' => 1080,
                                'startTokenPos' => 2011,
                                'startFilePos' => 31393,
                                'endTokenPos' => 2011,
                                'endFilePos' => 31404,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1080,
                        'endLine' => 1080,
                        'startColumn' => 34,
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
 * Sort the collection keys in descending order.
 *
 * @param  int  $options
 * @return static
 */',
                'startLine' => 1080,
                'endLine' => 1080,
                'startColumn' => 5,
                'endColumn' => 58,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'sortKeysUsing' => [
                'name' => 'sortKeysUsing',
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
                        'startLine' => 1088,
                        'endLine' => 1088,
                        'startColumn' => 35,
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
 * Sort the collection keys using a callback.
 *
 * @param  callable(TKey, TKey): int  $callback
 * @return static
 */',
                'startLine' => 1088,
                'endLine' => 1088,
                'startColumn' => 5,
                'endColumn' => 54,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'sum' => [
                'name' => 'sum',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1096,
                                'endLine' => 1096,
                                'startTokenPos' => 2041,
                                'startFilePos' => 31796,
                                'endTokenPos' => 2041,
                                'endFilePos' => 31799,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1096,
                        'endLine' => 1096,
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
 * Get the sum of the given values.
 *
 * @param  (callable(TValue): mixed)|string|null  $callback
 * @return mixed
 */',
                'startLine' => 1096,
                'endLine' => 1096,
                'startColumn' => 5,
                'endColumn' => 42,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'take' => [
                'name' => 'take',
                'parameters' => [
                    'limit' => [
                        'name' => 'limit',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1104,
                        'endLine' => 1104,
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
 * Take the first or last {$limit} items.
 *
 * @param  int  $limit
 * @return static
 */',
                'startLine' => 1104,
                'endLine' => 1104,
                'startColumn' => 5,
                'endColumn' => 33,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'takeUntil' => [
                'name' => 'takeUntil',
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
                        'startLine' => 1112,
                        'endLine' => 1112,
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
 * Take items in the collection until the given condition is met.
 *
 * @param  TValue|callable(TValue,TKey): bool  $value
 * @return static
 */',
                'startLine' => 1112,
                'endLine' => 1112,
                'startColumn' => 5,
                'endColumn' => 38,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'takeWhile' => [
                'name' => 'takeWhile',
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
                        'startLine' => 1120,
                        'endLine' => 1120,
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
 * Take items in the collection while the given condition is met.
 *
 * @param  TValue|callable(TValue,TKey): bool  $value
 * @return static
 */',
                'startLine' => 1120,
                'endLine' => 1120,
                'startColumn' => 5,
                'endColumn' => 38,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'tap' => [
                'name' => 'tap',
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
                        'startLine' => 1128,
                        'endLine' => 1128,
                        'startColumn' => 25,
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
 * Pass the collection to the given callback and then return it.
 *
 * @param  callable(TValue): mixed  $callback
 * @return $this
 */',
                'startLine' => 1128,
                'endLine' => 1128,
                'startColumn' => 5,
                'endColumn' => 44,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'pipe' => [
                'name' => 'pipe',
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
                        'startLine' => 1138,
                        'endLine' => 1138,
                        'startColumn' => 26,
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
 * Pass the enumerable to the given callback and return the result.
 *
 * @template TPipeReturnType
 *
 * @param  callable($this): TPipeReturnType  $callback
 * @return TPipeReturnType
 */',
                'startLine' => 1138,
                'endLine' => 1138,
                'startColumn' => 5,
                'endColumn' => 45,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'pipeInto' => [
                'name' => 'pipeInto',
                'parameters' => [
                    'class' => [
                        'name' => 'class',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1148,
                        'endLine' => 1148,
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
 * Pass the collection into a new class.
 *
 * @template TPipeIntoValue
 *
 * @param  class-string<TPipeIntoValue>  $class
 * @return TPipeIntoValue
 */',
                'startLine' => 1148,
                'endLine' => 1148,
                'startColumn' => 5,
                'endColumn' => 37,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'pipeThrough' => [
                'name' => 'pipeThrough',
                'parameters' => [
                    'pipes' => [
                        'name' => 'pipes',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1156,
                        'endLine' => 1156,
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
 * Pass the collection through a series of callable pipes and return the result.
 *
 * @param  array<callable>  $pipes
 * @return mixed
 */',
                'startLine' => 1156,
                'endLine' => 1156,
                'startColumn' => 5,
                'endColumn' => 40,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'pluck' => [
                'name' => 'pluck',
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
                        'startLine' => 1165,
                        'endLine' => 1165,
                        'startColumn' => 27,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1165,
                                'endLine' => 1165,
                                'startTokenPos' => 2148,
                                'startFilePos' => 33532,
                                'endTokenPos' => 2148,
                                'endFilePos' => 33535,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1165,
                        'endLine' => 1165,
                        'startColumn' => 35,
                        'endColumn' => 45,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the values of a given key.
 *
 * @param  string|array<array-key, string>  $value
 * @param  string|null  $key
 * @return static<array-key, mixed>
 */',
                'startLine' => 1165,
                'endLine' => 1165,
                'startColumn' => 5,
                'endColumn' => 47,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'reject' => [
                'name' => 'reject',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 1173,
                                'endLine' => 1173,
                                'startTokenPos' => 2164,
                                'startFilePos' => 33773,
                                'endTokenPos' => 2164,
                                'endFilePos' => 33776,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1173,
                        'endLine' => 1173,
                        'startColumn' => 28,
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
 * Create a collection of all elements that do not pass a given truth test.
 *
 * @param  (callable(TValue, TKey): bool)|bool|TValue  $callback
 * @return static
 */',
                'startLine' => 1173,
                'endLine' => 1173,
                'startColumn' => 5,
                'endColumn' => 45,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'undot' => [
                'name' => 'undot',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Convert a flatten "dot" notation array into an expanded array.
 *
 * @return static
 */',
                'startLine' => 1180,
                'endLine' => 1180,
                'startColumn' => 5,
                'endColumn' => 28,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'unique' => [
                'name' => 'unique',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1189,
                                'endLine' => 1189,
                                'startTokenPos' => 2191,
                                'startFilePos' => 34158,
                                'endTokenPos' => 2191,
                                'endFilePos' => 34161,
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
                        'startColumn' => 28,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'strict' => [
                        'name' => 'strict',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 1189,
                                'endLine' => 1189,
                                'startTokenPos' => 2198,
                                'startFilePos' => 34174,
                                'endTokenPos' => 2198,
                                'endFilePos' => 34178,
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
                        'startColumn' => 41,
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
 * Return only unique items from the collection array.
 *
 * @param  (callable(TValue, TKey): mixed)|string|null  $key
 * @param  bool  $strict
 * @return static
 */',
                'startLine' => 1189,
                'endLine' => 1189,
                'startColumn' => 5,
                'endColumn' => 57,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'uniqueStrict' => [
                'name' => 'uniqueStrict',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1197,
                                'endLine' => 1197,
                                'startTokenPos' => 2214,
                                'startFilePos' => 34416,
                                'endTokenPos' => 2214,
                                'endFilePos' => 34419,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1197,
                        'endLine' => 1197,
                        'startColumn' => 34,
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
 * Return only unique items from the collection array using strict comparison.
 *
 * @param  (callable(TValue, TKey): mixed)|string|null  $key
 * @return static
 */',
                'startLine' => 1197,
                'endLine' => 1197,
                'startColumn' => 5,
                'endColumn' => 46,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'values' => [
                'name' => 'values',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Reset the keys on the underlying array.
 *
 * @return static<int, TValue>
 */',
                'startLine' => 1204,
                'endLine' => 1204,
                'startColumn' => 5,
                'endColumn' => 29,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'pad' => [
                'name' => 'pad',
                'parameters' => [
                    'size' => [
                        'name' => 'size',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1215,
                        'endLine' => 1215,
                        'startColumn' => 25,
                        'endColumn' => 29,
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
                        'startLine' => 1215,
                        'endLine' => 1215,
                        'startColumn' => 32,
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
 * Pad collection to the specified length with a value.
 *
 * @template TPadValue
 *
 * @param  int  $size
 * @param  TPadValue  $value
 * @return static<int, TValue|TPadValue>
 */',
                'startLine' => 1215,
                'endLine' => 1215,
                'startColumn' => 5,
                'endColumn' => 39,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'getIterator' => [
                'name' => 'getIterator',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Traversable',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the values iterator.
 *
 * @return \\Traversable<TKey, TValue>
 */',
                'startLine' => 1222,
                'endLine' => 1222,
                'startColumn' => 5,
                'endColumn' => 47,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'count' => [
                'name' => 'count',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Count the number of items in the collection.
 *
 * @return int
 */',
                'startLine' => 1229,
                'endLine' => 1229,
                'startColumn' => 5,
                'endColumn' => 33,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'countBy' => [
                'name' => 'countBy',
                'parameters' => [
                    'countBy' => [
                        'name' => 'countBy',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1237,
                                'endLine' => 1237,
                                'startTokenPos' => 2284,
                                'startFilePos' => 35353,
                                'endTokenPos' => 2284,
                                'endFilePos' => 35356,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1237,
                        'endLine' => 1237,
                        'startColumn' => 29,
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
 * Count the number of items in the collection by a field or using a callback.
 *
 * @param  (callable(TValue, TKey): array-key)|string|null  $countBy
 * @return static<array-key, int>
 */',
                'startLine' => 1237,
                'endLine' => 1237,
                'startColumn' => 5,
                'endColumn' => 45,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'zip' => [
                'name' => 'zip',
                'parameters' => [
                    'items' => [
                        'name' => 'items',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1250,
                        'endLine' => 1250,
                        'startColumn' => 25,
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
 * Zip the collection together with one or more arrays.
 *
 * e.g. new Collection([1, 2, 3])->zip([4, 5, 6]);
 *      => [[1, 4], [2, 5], [3, 6]]
 *
 * @template TZipValue
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<array-key, TZipValue>|iterable<array-key, TZipValue>  ...$items
 * @return static<int, static<int, TValue|TZipValue>>
 */',
                'startLine' => 1250,
                'endLine' => 1250,
                'startColumn' => 5,
                'endColumn' => 32,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'collect' => [
                'name' => 'collect',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Collect the values into a collection.
 *
 * @return \\Illuminate\\Support\\Collection<TKey, TValue>
 */',
                'startLine' => 1257,
                'endLine' => 1257,
                'startColumn' => 5,
                'endColumn' => 30,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
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
 * Get the collection of items as a plain array.
 *
 * @return array<TKey, mixed>
 */',
                'startLine' => 1264,
                'endLine' => 1264,
                'startColumn' => 5,
                'endColumn' => 30,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
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
                'startLine' => 1271,
                'endLine' => 1271,
                'startColumn' => 5,
                'endColumn' => 43,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
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
                                'startLine' => 1279,
                                'endLine' => 1279,
                                'startTokenPos' => 2348,
                                'startFilePos' => 36398,
                                'endTokenPos' => 2348,
                                'endFilePos' => 36398,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1279,
                        'endLine' => 1279,
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
 * Get the collection of items as JSON.
 *
 * @param  int  $options
 * @return string
 */',
                'startLine' => 1279,
                'endLine' => 1279,
                'startColumn' => 5,
                'endColumn' => 41,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
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
                                'startLine' => 1288,
                                'endLine' => 1288,
                                'startTokenPos' => 2366,
                                'startFilePos' => 36599,
                                'endTokenPos' => 2366,
                                'endFilePos' => 36599,
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
                        'startLine' => 1288,
                        'endLine' => 1288,
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
 * Get the collection of items as pretty print formatted JSON.
 *
 *
 * @param  int  $options
 * @return string
 */',
                'startLine' => 1288,
                'endLine' => 1288,
                'startColumn' => 5,
                'endColumn' => 51,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'getCachingIterator' => [
                'name' => 'getCachingIterator',
                'parameters' => [
                    'flags' => [
                        'name' => 'flags',
                        'default' => [
                            'code' => '\\CachingIterator::CALL_TOSTRING',
                            'attributes' => [
                                'startLine' => 1296,
                                'endLine' => 1296,
                                'startTokenPos' => 2382,
                                'startFilePos' => 36773,
                                'endTokenPos' => 2384,
                                'endFilePos' => 36802,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1296,
                        'endLine' => 1296,
                        'startColumn' => 40,
                        'endColumn' => 78,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a CachingIterator instance.
 *
 * @param  int  $flags
 * @return \\CachingIterator
 */',
                'startLine' => 1296,
                'endLine' => 1296,
                'startColumn' => 5,
                'endColumn' => 80,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
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
 * Convert the collection to its string representation.
 *
 * @return string
 */',
                'startLine' => 1303,
                'endLine' => 1303,
                'startColumn' => 5,
                'endColumn' => 33,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
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
                                'startLine' => 1311,
                                'endLine' => 1311,
                                'startTokenPos' => 2411,
                                'startFilePos' => 37177,
                                'endTokenPos' => 2411,
                                'endFilePos' => 37180,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1311,
                        'endLine' => 1311,
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
 * Indicate that the model\'s string representation should be escaped when __toString is invoked.
 *
 * @param  bool  $escape
 * @return $this
 */',
                'startLine' => 1311,
                'endLine' => 1311,
                'startColumn' => 5,
                'endColumn' => 62,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
                'aliasName' => null,
            ],
            'proxy' => [
                'name' => 'proxy',
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
                        'startLine' => 1319,
                        'endLine' => 1319,
                        'startColumn' => 34,
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
 * Add a method to the list of proxied methods.
 *
 * @param  string  $method
 * @return void
 */',
                'startLine' => 1319,
                'endLine' => 1319,
                'startColumn' => 5,
                'endColumn' => 42,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
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
                        'startLine' => 1329,
                        'endLine' => 1329,
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
 * Dynamically access collection proxies.
 *
 * @param  string  $key
 * @return mixed
 *
 * @throws \\Exception
 */',
                'startLine' => 1329,
                'endLine' => 1329,
                'startColumn' => 5,
                'endColumn' => 32,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\Enumerable',
                'implementingClassName' => 'Illuminate\\Support\\Enumerable',
                'currentClassName' => 'Illuminate\\Support\\Enumerable',
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
