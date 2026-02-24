<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Macroable/Traits/Macroable.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\Traits\Macroable
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-50fa4e0aa4e5c0b0e7fb6566fb3fc991808681fba5c81db09e0f8641c7e9d524-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Support\\Traits\\Macroable',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Macroable/Traits/Macroable.php',
            ],
        ],
        'namespace' => 'Illuminate\\Support\\Traits',
        'name' => 'Illuminate\\Support\\Traits\\Macroable',
        'shortName' => 'Macroable',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 10,
        'endLine' => 128,
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
            'macros' => [
                'declaringClassName' => 'Illuminate\\Support\\Traits\\Macroable',
                'implementingClassName' => 'Illuminate\\Support\\Traits\\Macroable',
                'name' => 'macros',
                'modifiers' => 18,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 17,
                        'endLine' => 17,
                        'startTokenPos' => 43,
                        'startFilePos' => 257,
                        'endTokenPos' => 44,
                        'endFilePos' => 258,
                    ],
                ],
                'docComment' => '/**
 * The registered string macros.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 17,
                'endLine' => 17,
                'startColumn' => 5,
                'endColumn' => 34,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'macro' => [
                'name' => 'macro',
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
                        'startLine' => 29,
                        'endLine' => 29,
                        'startColumn' => 34,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'macro' => [
                        'name' => 'macro',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 29,
                        'endLine' => 29,
                        'startColumn' => 41,
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
 * Register a custom macro.
 *
 * @param  string  $name
 * @param  object|callable  $macro
 *
 * @param-closure-this static  $macro
 *
 * @return void
 */',
                'startLine' => 29,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support\\Traits',
                'declaringClassName' => 'Illuminate\\Support\\Traits\\Macroable',
                'implementingClassName' => 'Illuminate\\Support\\Traits\\Macroable',
                'currentClassName' => 'Illuminate\\Support\\Traits\\Macroable',
                'aliasName' => null,
            ],
            'mixin' => [
                'name' => 'mixin',
                'parameters' => [
                    'mixin' => [
                        'name' => 'mixin',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 43,
                        'endLine' => 43,
                        'startColumn' => 34,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'replace' => [
                        'name' => 'replace',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 43,
                                'endLine' => 43,
                                'startTokenPos' => 96,
                                'startFilePos' => 803,
                                'endTokenPos' => 96,
                                'endFilePos' => 806,
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
                        'startColumn' => 42,
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
 * Mix another object into the class.
 *
 * @param  object  $mixin
 * @param  bool  $replace
 * @return void
 *
 * @throws \\ReflectionException
 */',
                'startLine' => 43,
                'endLine' => 54,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support\\Traits',
                'declaringClassName' => 'Illuminate\\Support\\Traits\\Macroable',
                'implementingClassName' => 'Illuminate\\Support\\Traits\\Macroable',
                'currentClassName' => 'Illuminate\\Support\\Traits\\Macroable',
                'aliasName' => null,
            ],
            'hasMacro' => [
                'name' => 'hasMacro',
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
                        'startLine' => 62,
                        'endLine' => 62,
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
 * Checks if macro is registered.
 *
 * @param  string  $name
 * @return bool
 */',
                'startLine' => 62,
                'endLine' => 65,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support\\Traits',
                'declaringClassName' => 'Illuminate\\Support\\Traits\\Macroable',
                'implementingClassName' => 'Illuminate\\Support\\Traits\\Macroable',
                'currentClassName' => 'Illuminate\\Support\\Traits\\Macroable',
                'aliasName' => null,
            ],
            'flushMacros' => [
                'name' => 'flushMacros',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Flush the existing macros.
 *
 * @return void
 */',
                'startLine' => 72,
                'endLine' => 75,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support\\Traits',
                'declaringClassName' => 'Illuminate\\Support\\Traits\\Macroable',
                'implementingClassName' => 'Illuminate\\Support\\Traits\\Macroable',
                'currentClassName' => 'Illuminate\\Support\\Traits\\Macroable',
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
                        'startLine' => 86,
                        'endLine' => 86,
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
                        'startLine' => 86,
                        'endLine' => 86,
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
 * Dynamically handle calls to the class.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \\BadMethodCallException
 */',
                'startLine' => 86,
                'endLine' => 101,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Support\\Traits',
                'declaringClassName' => 'Illuminate\\Support\\Traits\\Macroable',
                'implementingClassName' => 'Illuminate\\Support\\Traits\\Macroable',
                'currentClassName' => 'Illuminate\\Support\\Traits\\Macroable',
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
                        'startLine' => 112,
                        'endLine' => 112,
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
                        'startLine' => 112,
                        'endLine' => 112,
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
 * Dynamically handle calls to the class.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \\BadMethodCallException
 */',
                'startLine' => 112,
                'endLine' => 127,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Traits',
                'declaringClassName' => 'Illuminate\\Support\\Traits\\Macroable',
                'implementingClassName' => 'Illuminate\\Support\\Traits\\Macroable',
                'currentClassName' => 'Illuminate\\Support\\Traits\\Macroable',
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
