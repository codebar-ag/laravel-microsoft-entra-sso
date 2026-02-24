<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Testing/Concerns/InteractsWithExceptionHandling.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Testing\Concerns\InteractsWithExceptionHandling
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-5787a2d514acafcbe14a6bbeeb899f3a6a3ec39be4a29c380d9971d4bb3b79f9-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Testing/Concerns/InteractsWithExceptionHandling.php',
            ],
        ],
        'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
        'name' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
        'shortName' => 'InteractsWithExceptionHandling',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 15,
        'endLine' => 243,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Support\\Traits\\ReflectsClosures',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'originalExceptionHandler' => [
                'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
                'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
                'name' => 'originalExceptionHandler',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The original exception handler.
 *
 * @var \\Illuminate\\Contracts\\Debug\\ExceptionHandler|null
 */',
                'attributes' => [
                ],
                'startLine' => 24,
                'endLine' => 24,
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
            'withExceptionHandling' => [
                'name' => 'withExceptionHandling',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Restore exception handling.
 *
 * @return $this
 */',
                'startLine' => 31,
                'endLine' => 42,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
                'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
                'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
                'currentClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
                'aliasName' => null,
            ],
            'handleExceptions' => [
                'name' => 'handleExceptions',
                'parameters' => [
                    'exceptions' => [
                        'name' => 'exceptions',
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
                        'startLine' => 50,
                        'endLine' => 50,
                        'startColumn' => 41,
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
 * Only handle the given exceptions via the exception handler.
 *
 * @param  list<class-string<\\Throwable>>  $exceptions
 * @return $this
 */',
                'startLine' => 50,
                'endLine' => 53,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
                'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
                'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
                'currentClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
                'aliasName' => null,
            ],
            'handleValidationExceptions' => [
                'name' => 'handleValidationExceptions',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Only handle validation exceptions via the exception handler.
 *
 * @return $this
 */',
                'startLine' => 60,
                'endLine' => 63,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
                'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
                'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
                'currentClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
                'aliasName' => null,
            ],
            'withoutExceptionHandling' => [
                'name' => 'withoutExceptionHandling',
                'parameters' => [
                    'except' => [
                        'name' => 'except',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 71,
                                'endLine' => 71,
                                'startTokenPos' => 222,
                                'startFilePos' => 1989,
                                'endTokenPos' => 223,
                                'endFilePos' => 1990,
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
                        'startLine' => 71,
                        'endLine' => 71,
                        'startColumn' => 49,
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
 * Disable exception handling for the test.
 *
 * @param  list<class-string<\\Throwable>>  $except
 * @return $this
 */',
                'startLine' => 71,
                'endLine' => 169,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
                'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
                'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
                'currentClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
                'aliasName' => null,
            ],
            'assertThrows' => [
                'name' => 'assertThrows',
                'parameters' => [
                    'test' => [
                        'name' => 'test',
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
                        'startLine' => 179,
                        'endLine' => 179,
                        'startColumn' => 37,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'expectedClass' => [
                        'name' => 'expectedClass',
                        'default' => [
                            'code' => '\\Throwable::class',
                            'attributes' => [
                                'startLine' => 179,
                                'endLine' => 179,
                                'startTokenPos' => 645,
                                'startFilePos' => 5654,
                                'endTokenPos' => 647,
                                'endFilePos' => 5669,
                            ],
                        ],
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
                        'startLine' => 179,
                        'endLine' => 179,
                        'startColumn' => 52,
                        'endColumn' => 99,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'expectedMessage' => [
                        'name' => 'expectedMessage',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 179,
                                'endLine' => 179,
                                'startTokenPos' => 657,
                                'startFilePos' => 5699,
                                'endTokenPos' => 657,
                                'endFilePos' => 5702,
                            ],
                        ],
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
                        'startLine' => 179,
                        'endLine' => 179,
                        'startColumn' => 102,
                        'endColumn' => 132,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the given callback throws an exception with the given message when invoked.
 *
 * @param  \\Closure  $test
 * @param  (\\Closure(\\Throwable): bool)|class-string<\\Throwable>  $expectedClass
 * @param  string|null  $expectedMessage
 * @return $this
 */',
                'startLine' => 179,
                'endLine' => 215,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
                'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
                'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
                'currentClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
                'aliasName' => null,
            ],
            'assertDoesntThrow' => [
                'name' => 'assertDoesntThrow',
                'parameters' => [
                    'test' => [
                        'name' => 'test',
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
                        'startLine' => 223,
                        'endLine' => 223,
                        'startColumn' => 42,
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
 * Assert that the given callback does not throw an exception.
 *
 * @param  \\Closure  $test
 * @return $this
 */',
                'startLine' => 223,
                'endLine' => 242,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
                'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
                'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
                'currentClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithExceptionHandling',
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
