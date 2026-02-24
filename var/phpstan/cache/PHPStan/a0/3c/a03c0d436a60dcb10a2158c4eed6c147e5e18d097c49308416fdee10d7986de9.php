<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Support/NamespacedItemResolver.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\NamespacedItemResolver
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-58dde602b81c74f178865a56f919d9758fb0bb686753f16023ba8b628b94c564-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Support\\NamespacedItemResolver',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Support/NamespacedItemResolver.php',
            ],
        ],
        'namespace' => 'Illuminate\\Support',
        'name' => 'Illuminate\\Support\\NamespacedItemResolver',
        'shortName' => 'NamespacedItemResolver',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 5,
        'endLine' => 112,
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
            'parsed' => [
                'declaringClassName' => 'Illuminate\\Support\\NamespacedItemResolver',
                'implementingClassName' => 'Illuminate\\Support\\NamespacedItemResolver',
                'name' => 'parsed',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 12,
                        'endLine' => 12,
                        'startTokenPos' => 21,
                        'startFilePos' => 170,
                        'endTokenPos' => 22,
                        'endFilePos' => 171,
                    ],
                ],
                'docComment' => '/**
 * A cache of the parsed items.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 12,
                'endLine' => 12,
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
            'parseKey' => [
                'name' => 'parseKey',
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
                        'startLine' => 20,
                        'endLine' => 20,
                        'startColumn' => 30,
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
 * Parse a key into namespace, group, and item.
 *
 * @param  string  $key
 * @return array
 */',
                'startLine' => 20,
                'endLine' => 44,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\NamespacedItemResolver',
                'implementingClassName' => 'Illuminate\\Support\\NamespacedItemResolver',
                'currentClassName' => 'Illuminate\\Support\\NamespacedItemResolver',
                'aliasName' => null,
            ],
            'parseBasicSegments' => [
                'name' => 'parseBasicSegments',
                'parameters' => [
                    'segments' => [
                        'name' => 'segments',
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
                        'startLine' => 52,
                        'endLine' => 52,
                        'startColumn' => 43,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Parse an array of basic segments.
 *
 * @param  array  $segments
 * @return array
 */',
                'startLine' => 52,
                'endLine' => 67,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\NamespacedItemResolver',
                'implementingClassName' => 'Illuminate\\Support\\NamespacedItemResolver',
                'currentClassName' => 'Illuminate\\Support\\NamespacedItemResolver',
                'aliasName' => null,
            ],
            'parseNamespacedSegments' => [
                'name' => 'parseNamespacedSegments',
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
                        'startLine' => 75,
                        'endLine' => 75,
                        'startColumn' => 48,
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
 * Parse an array of namespaced segments.
 *
 * @param  string  $key
 * @return array
 */',
                'startLine' => 75,
                'endLine' => 89,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\NamespacedItemResolver',
                'implementingClassName' => 'Illuminate\\Support\\NamespacedItemResolver',
                'currentClassName' => 'Illuminate\\Support\\NamespacedItemResolver',
                'aliasName' => null,
            ],
            'setParsedKey' => [
                'name' => 'setParsedKey',
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
                        'startLine' => 98,
                        'endLine' => 98,
                        'startColumn' => 34,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parsed' => [
                        'name' => 'parsed',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 98,
                        'endLine' => 98,
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
 * Set the parsed value of a key.
 *
 * @param  string  $key
 * @param  array  $parsed
 * @return void
 */',
                'startLine' => 98,
                'endLine' => 101,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\NamespacedItemResolver',
                'implementingClassName' => 'Illuminate\\Support\\NamespacedItemResolver',
                'currentClassName' => 'Illuminate\\Support\\NamespacedItemResolver',
                'aliasName' => null,
            ],
            'flushParsedKeys' => [
                'name' => 'flushParsedKeys',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Flush the cache of parsed keys.
 *
 * @return void
 */',
                'startLine' => 108,
                'endLine' => 111,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support',
                'declaringClassName' => 'Illuminate\\Support\\NamespacedItemResolver',
                'implementingClassName' => 'Illuminate\\Support\\NamespacedItemResolver',
                'currentClassName' => 'Illuminate\\Support\\NamespacedItemResolver',
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
