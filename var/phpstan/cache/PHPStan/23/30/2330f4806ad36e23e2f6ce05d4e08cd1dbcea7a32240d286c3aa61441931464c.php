<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../orchestra/testbench-core/src/Concerns/HandlesAnnotations.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Orchestra\Testbench\Concerns\HandlesAnnotations
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-0054ccaba642581801415dd3d02b609f609c74556759be54762ecb0c6498c821-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Orchestra\\Testbench\\Concerns\\HandlesAnnotations',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../orchestra/testbench-core/src/Concerns/HandlesAnnotations.php',
            ],
        ],
        'namespace' => 'Orchestra\\Testbench\\Concerns',
        'name' => 'Orchestra\\Testbench\\Concerns\\HandlesAnnotations',
        'shortName' => 'HandlesAnnotations',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @internal
 *
 * @deprecated
 *
 * @codeCoverageIgnore
 */',
        'attributes' => [
        ],
        'startLine' => 16,
        'endLine' => 56,
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
            'parseTestMethodAnnotations' => [
                'name' => 'parseTestMethodAnnotations',
                'parameters' => [
                    'app' => [
                        'name' => 'app',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 26,
                        'endLine' => 26,
                        'startColumn' => 51,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
                        'startLine' => 26,
                        'endLine' => 26,
                        'startColumn' => 57,
                        'endColumn' => 68,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 26,
                                'endLine' => 26,
                                'startTokenPos' => 53,
                                'startFilePos' => 486,
                                'endTokenPos' => 53,
                                'endFilePos' => 489,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Closure',
                                            'isIdentifier' => false,
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
                        'startLine' => 26,
                        'endLine' => 26,
                        'startColumn' => 71,
                        'endColumn' => 95,
                        'parameterIndex' => 2,
                        'isOptional' => true,
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
 * Parse test method annotations.
 *
 * @internal
 *
 * @param  \\Illuminate\\Foundation\\Application  $app
 * @param  string  $name
 */',
                'startLine' => 26,
                'endLine' => 46,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Orchestra\\Testbench\\Concerns',
                'declaringClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesAnnotations',
                'implementingClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesAnnotations',
                'currentClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesAnnotations',
                'aliasName' => null,
            ],
            'resolvePhpUnitAnnotations' => [
                'name' => 'resolvePhpUnitAnnotations',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Illuminate\\Support\\Collection',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Resolve PHPUnit method annotations.
 *
 * @phpunit-overrides
 *
 * @return \\Illuminate\\Support\\Collection<string, mixed>
 */',
                'startLine' => 55,
                'endLine' => 55,
                'startColumn' => 5,
                'endColumn' => 72,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 66,
                'namespace' => 'Orchestra\\Testbench\\Concerns',
                'declaringClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesAnnotations',
                'implementingClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesAnnotations',
                'currentClassName' => 'Orchestra\\Testbench\\Concerns\\HandlesAnnotations',
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
