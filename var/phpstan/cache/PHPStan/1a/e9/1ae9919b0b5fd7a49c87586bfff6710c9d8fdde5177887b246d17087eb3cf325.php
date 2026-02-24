<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../orchestra/testbench-core/src/Concerns/WithLaravelBootstrapFile.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Orchestra\Testbench\Concerns\WithLaravelBootstrapFile
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-617fe90b117036b3536acfcff35048633b55f3c555d4008e8cdc533e8e63a9c7-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Orchestra\\Testbench\\Concerns\\WithLaravelBootstrapFile',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../orchestra/testbench-core/src/Concerns/WithLaravelBootstrapFile.php',
            ],
        ],
        'namespace' => 'Orchestra\\Testbench\\Concerns',
        'name' => 'Orchestra\\Testbench\\Concerns\\WithLaravelBootstrapFile',
        'shortName' => 'WithLaravelBootstrapFile',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 11,
        'endLine' => 69,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Orchestra\\Testbench\\Concerns\\InteractsWithTestCase',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'getApplicationBootstrapFile' => [
                'name' => 'getApplicationBootstrapFile',
                'parameters' => [
                    'filename' => [
                        'name' => 'filename',
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
                        'startLine' => 23,
                        'endLine' => 23,
                        'startColumn' => 52,
                        'endColumn' => 67,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
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
                                    'name' => 'false',
                                    'isIdentifier' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get application bootstrap file path (if exists).
 *
 * @internal
 *
 * @param  string  $filename
 * @return string|false
 */',
                'startLine' => 23,
                'endLine' => 36,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Orchestra\\Testbench\\Concerns',
                'declaringClassName' => 'Orchestra\\Testbench\\Concerns\\WithLaravelBootstrapFile',
                'implementingClassName' => 'Orchestra\\Testbench\\Concerns\\WithLaravelBootstrapFile',
                'currentClassName' => 'Orchestra\\Testbench\\Concerns\\WithLaravelBootstrapFile',
                'aliasName' => null,
            ],
            'hasCustomApplicationKernels' => [
                'name' => 'hasCustomApplicationKernels',
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
 * Determine if application is using a custom application kernels.
 *
 * @internal
 *
 * @return bool
 */',
                'startLine' => 45,
                'endLine' => 49,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Orchestra\\Testbench\\Concerns',
                'declaringClassName' => 'Orchestra\\Testbench\\Concerns\\WithLaravelBootstrapFile',
                'implementingClassName' => 'Orchestra\\Testbench\\Concerns\\WithLaravelBootstrapFile',
                'currentClassName' => 'Orchestra\\Testbench\\Concerns\\WithLaravelBootstrapFile',
                'aliasName' => null,
            ],
            'usesTestbenchDefaultSkeleton' => [
                'name' => 'usesTestbenchDefaultSkeleton',
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
 * Determine if application is bootstrapped using Testbench\'s default skeleton.
 *
 * @return bool
 */',
                'startLine' => 56,
                'endLine' => 59,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Orchestra\\Testbench\\Concerns',
                'declaringClassName' => 'Orchestra\\Testbench\\Concerns\\WithLaravelBootstrapFile',
                'implementingClassName' => 'Orchestra\\Testbench\\Concerns\\WithLaravelBootstrapFile',
                'currentClassName' => 'Orchestra\\Testbench\\Concerns\\WithLaravelBootstrapFile',
                'aliasName' => null,
            ],
            'getApplicationBasePath' => [
                'name' => 'getApplicationBasePath',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the application\'s base path.
 *
 * @api
 *
 * @return string
 */',
                'startLine' => 68,
                'endLine' => 68,
                'startColumn' => 5,
                'endColumn' => 57,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 66,
                'namespace' => 'Orchestra\\Testbench\\Concerns',
                'declaringClassName' => 'Orchestra\\Testbench\\Concerns\\WithLaravelBootstrapFile',
                'implementingClassName' => 'Orchestra\\Testbench\\Concerns\\WithLaravelBootstrapFile',
                'currentClassName' => 'Orchestra\\Testbench\\Concerns\\WithLaravelBootstrapFile',
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
