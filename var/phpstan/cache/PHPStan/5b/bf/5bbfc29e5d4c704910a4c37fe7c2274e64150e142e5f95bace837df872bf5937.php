<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Testing/Concerns/InteractsWithTime.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Foundation\Testing\Concerns\InteractsWithTime
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-d126c91dd2b8a0cc1d8231741340c74e3017b193043c9d0b1f4d1aa860c41d56-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Foundation/Testing/Concerns/InteractsWithTime.php',
            ],
        ],
        'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
        'name' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
        'shortName' => 'InteractsWithTime',
        'isInterface' => false,
        'isTrait' => true,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 8,
        'endLine' => 80,
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
            'freezeTime' => [
                'name' => 'freezeTime',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 18,
                                'endLine' => 18,
                                'startTokenPos' => 35,
                                'startFilePos' => 414,
                                'endTokenPos' => 35,
                                'endFilePos' => 417,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 18,
                        'endLine' => 18,
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
 * @template TReturn of mixed
 *
 * Freeze time.
 *
 * @param  (callable(): TReturn)|null  $callback
 * @return ($callback is null ? \\Illuminate\\Support\\Carbon : TReturn)
 */',
                'startLine' => 18,
                'endLine' => 23,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
                'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
                'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
                'currentClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
                'aliasName' => null,
            ],
            'freezeSecond' => [
                'name' => 'freezeSecond',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 33,
                                'endLine' => 33,
                                'startTokenPos' => 93,
                                'startFilePos' => 849,
                                'endTokenPos' => 93,
                                'endFilePos' => 852,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 33,
                        'endLine' => 33,
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
 * @template TReturn of mixed
 *
 * Freeze time at the beginning of the current second.
 *
 * @param  (callable(): TReturn)|null  $callback
 * @return ($callback is null ? \\Illuminate\\Support\\Carbon : TReturn)
 */',
                'startLine' => 33,
                'endLine' => 38,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
                'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
                'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
                'currentClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
                'aliasName' => null,
            ],
            'travel' => [
                'name' => 'travel',
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
                        'startLine' => 46,
                        'endLine' => 46,
                        'startColumn' => 28,
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
 * Begin travelling to another time.
 *
 * @param  int  $value
 * @return \\Illuminate\\Foundation\\Testing\\Wormhole
 */',
                'startLine' => 46,
                'endLine' => 49,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
                'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
                'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
                'currentClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
                'aliasName' => null,
            ],
            'travelTo' => [
                'name' => 'travelTo',
                'parameters' => [
                    'date' => [
                        'name' => 'date',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 60,
                        'endLine' => 60,
                        'startColumn' => 30,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 60,
                                'endLine' => 60,
                                'startTokenPos' => 183,
                                'startFilePos' => 1579,
                                'endTokenPos' => 183,
                                'endFilePos' => 1582,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 60,
                        'endLine' => 60,
                        'startColumn' => 37,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @template TReturn of mixed
 *
 * Travel to another time.
 *
 * @param  \\DateTimeInterface|\\Closure|\\Illuminate\\Support\\Carbon|string|bool|null  $date
 * @param  (callable(): TReturn)|null  $callback
 * @return ($callback is null ? void : TReturn)
 */',
                'startLine' => 60,
                'endLine' => 69,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
                'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
                'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
                'currentClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
                'aliasName' => null,
            ],
            'travelBack' => [
                'name' => 'travelBack',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Travel back to the current time.
 *
 * @return \\DateTimeInterface
 */',
                'startLine' => 76,
                'endLine' => 79,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Foundation\\Testing\\Concerns',
                'declaringClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
                'implementingClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
                'currentClassName' => 'Illuminate\\Foundation\\Testing\\Concerns\\InteractsWithTime',
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
