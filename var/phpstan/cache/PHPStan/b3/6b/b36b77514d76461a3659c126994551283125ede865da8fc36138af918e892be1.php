<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../orchestra/testbench-core/src/Concerns/HandlesAssertions.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Orchestra\Testbench\Concerns\HandlesAssertions
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-c443f846e8c6a1e08c347ac76ccb201894e922e41b0aac2b301a9d6d331b56b4-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Orchestra\\Testbench\\Concerns\\HandlesAssertions',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../orchestra/testbench-core/src/Concerns/HandlesAssertions.php',
            ],
        ],
        'namespace' => 'Orchestra\\Testbench\\Concerns',
        'name' => 'Orchestra\\Testbench\\Concerns\\HandlesAssertions',
        'shortName' => 'HandlesAssertions',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 5,
        'endLine' => 40,
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
            'markTestSkippedUnless' => [
                'name' => 'markTestSkippedUnless',
                'parameters' => [
                    'condition' => [
                        'name' => 'condition',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 16,
                        'endLine' => 16,
                        'startColumn' => 46,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
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
                        'startLine' => 16,
                        'endLine' => 16,
                        'startColumn' => 58,
                        'endColumn' => 72,
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
 * Mark the test as skipped when condition is not equivalent to true.
 *
 * @param  (\\Closure($this): bool)|bool|null  $condition
 * @param  string  $message
 * @return void
 *
 * @codeCoverageIgnore
 */',
                'startLine' => 16,
                'endLine' => 22,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Orchestra\\Testbench\\Concerns',
                'declaringClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesAssertions',
                'implementingClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesAssertions',
                'currentClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesAssertions',
                'aliasName' => null,
            ],
            'markTestSkippedWhen' => [
                'name' => 'markTestSkippedWhen',
                'parameters' => [
                    'condition' => [
                        'name' => 'condition',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 33,
                        'endLine' => 33,
                        'startColumn' => 44,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'message' => [
                        'name' => 'message',
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
                        'startLine' => 33,
                        'endLine' => 33,
                        'startColumn' => 56,
                        'endColumn' => 70,
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
 * Mark the test as skipped when condition is equivalent to true.
 *
 * @param  (\\Closure($this): bool)|bool|null  $condition
 * @param  string  $message
 * @return void
 *
 * @codeCoverageIgnore
 */',
                'startLine' => 33,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Orchestra\\Testbench\\Concerns',
                'declaringClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesAssertions',
                'implementingClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesAssertions',
                'currentClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesAssertions',
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
