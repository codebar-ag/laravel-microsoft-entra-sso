<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Support/Testing/Fakes/EventFake.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\Testing\Fakes\EventFake
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-5bf03a0ca129e5e91734f5e2e839d726cd0c8235489a757d6b4e303b914ecb8c-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Support/Testing/Fakes/EventFake.php',
            ],
        ],
        'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
        'name' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
        'shortName' => 'EventFake',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 17,
        'endLine' => 453,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'Illuminate\\Contracts\\Events\\Dispatcher',
            1 => 'Illuminate\\Support\\Testing\\Fakes\\Fake',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            1 => 'Illuminate\\Support\\Traits\\ReflectsClosures',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'dispatcher' => [
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'name' => 'dispatcher',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The original event dispatcher.
 *
 * @var \\Illuminate\\Contracts\\Events\\Dispatcher
 */',
                'attributes' => [
                ],
                'startLine' => 26,
                'endLine' => 26,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'eventsToFake' => [
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'name' => 'eventsToFake',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 33,
                        'endLine' => 33,
                        'startTokenPos' => 102,
                        'startFilePos' => 824,
                        'endTokenPos' => 103,
                        'endFilePos' => 825,
                    ],
                ],
                'docComment' => '/**
 * The event types that should be intercepted instead of dispatched.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 33,
                'endLine' => 33,
                'startColumn' => 5,
                'endColumn' => 33,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'eventsToDispatch' => [
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'name' => 'eventsToDispatch',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 40,
                        'endLine' => 40,
                        'startTokenPos' => 114,
                        'startFilePos' => 977,
                        'endTokenPos' => 115,
                        'endFilePos' => 978,
                    ],
                ],
                'docComment' => '/**
 * The event types that should be dispatched instead of intercepted.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 40,
                'endLine' => 40,
                'startColumn' => 5,
                'endColumn' => 37,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'events' => [
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'name' => 'events',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 47,
                        'endLine' => 47,
                        'startTokenPos' => 126,
                        'startFilePos' => 1114,
                        'endTokenPos' => 127,
                        'endFilePos' => 1115,
                    ],
                ],
                'docComment' => '/**
 * All of the events that have been intercepted keyed by type.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 47,
                'endLine' => 47,
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
            '__construct' => [
                'name' => '__construct',
                'parameters' => [
                    'dispatcher' => [
                        'name' => 'dispatcher',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 55,
                        'endLine' => 55,
                        'startColumn' => 33,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'eventsToFake' => [
                        'name' => 'eventsToFake',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 55,
                                'endLine' => 55,
                                'startTokenPos' => 147,
                                'startFilePos' => 1366,
                                'endTokenPos' => 148,
                                'endFilePos' => 1367,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 55,
                        'endLine' => 55,
                        'startColumn' => 57,
                        'endColumn' => 74,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new event fake instance.
 *
 * @param  \\Illuminate\\Contracts\\Events\\Dispatcher  $dispatcher
 * @param  array|string  $eventsToFake
 */',
                'startLine' => 55,
                'endLine' => 60,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'aliasName' => null,
            ],
            'except' => [
                'name' => 'except',
                'parameters' => [
                    'eventsToDispatch' => [
                        'name' => 'eventsToDispatch',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 68,
                        'endLine' => 68,
                        'startColumn' => 28,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Specify the events that should be dispatched instead of faked.
 *
 * @param  array|string  $eventsToDispatch
 * @return $this
 */',
                'startLine' => 68,
                'endLine' => 76,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'aliasName' => null,
            ],
            'assertListening' => [
                'name' => 'assertListening',
                'parameters' => [
                    'expectedEvent' => [
                        'name' => 'expectedEvent',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 85,
                        'endLine' => 85,
                        'startColumn' => 37,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'expectedListener' => [
                        'name' => 'expectedListener',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 85,
                        'endLine' => 85,
                        'startColumn' => 53,
                        'endColumn' => 69,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert if an event has a listener attached to it.
 *
 * @param  string  $expectedEvent
 * @param  string|array  $expectedListener
 * @return void
 */',
                'startLine' => 85,
                'endLine' => 125,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'aliasName' => null,
            ],
            'assertDispatched' => [
                'name' => 'assertDispatched',
                'parameters' => [
                    'event' => [
                        'name' => 'event',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 134,
                        'endLine' => 134,
                        'startColumn' => 38,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 134,
                                'endLine' => 134,
                                'startTokenPos' => 495,
                                'startFilePos' => 3832,
                                'endTokenPos' => 495,
                                'endFilePos' => 3835,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 134,
                        'endLine' => 134,
                        'startColumn' => 46,
                        'endColumn' => 61,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert if an event was dispatched based on a truth-test callback.
 *
 * @param  string|\\Closure  $event
 * @param  callable|int|null  $callback
 * @return void
 */',
                'startLine' => 134,
                'endLine' => 148,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'aliasName' => null,
            ],
            'assertDispatchedOnce' => [
                'name' => 'assertDispatchedOnce',
                'parameters' => [
                    'event' => [
                        'name' => 'event',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 157,
                        'endLine' => 157,
                        'startColumn' => 42,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert if an event was dispatched exactly once.
 *
 * @param  string  $event
 * @param  int  $times
 * @return void
 */',
                'startLine' => 157,
                'endLine' => 160,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'aliasName' => null,
            ],
            'assertDispatchedTimes' => [
                'name' => 'assertDispatchedTimes',
                'parameters' => [
                    'event' => [
                        'name' => 'event',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 169,
                        'endLine' => 169,
                        'startColumn' => 43,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'times' => [
                        'name' => 'times',
                        'default' => [
                            'code' => '1',
                            'attributes' => [
                                'startLine' => 169,
                                'endLine' => 169,
                                'startTokenPos' => 640,
                                'startFilePos' => 4753,
                                'endTokenPos' => 640,
                                'endFilePos' => 4753,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 169,
                        'endLine' => 169,
                        'startColumn' => 51,
                        'endColumn' => 60,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert if an event was dispatched a number of times.
 *
 * @param  string  $event
 * @param  int  $times
 * @return void
 */',
                'startLine' => 169,
                'endLine' => 181,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'aliasName' => null,
            ],
            'assertNotDispatched' => [
                'name' => 'assertNotDispatched',
                'parameters' => [
                    'event' => [
                        'name' => 'event',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 190,
                        'endLine' => 190,
                        'startColumn' => 41,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 190,
                                'endLine' => 190,
                                'startTokenPos' => 735,
                                'startFilePos' => 5373,
                                'endTokenPos' => 735,
                                'endFilePos' => 5376,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 190,
                        'endLine' => 190,
                        'startColumn' => 49,
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
 * Determine if an event was dispatched based on a truth-test callback.
 *
 * @param  string|\\Closure  $event
 * @param  callable|null  $callback
 * @return void
 */',
                'startLine' => 190,
                'endLine' => 200,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'aliasName' => null,
            ],
            'assertNothingDispatched' => [
                'name' => 'assertNothingDispatched',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that no events were dispatched.
 *
 * @return void
 */',
                'startLine' => 207,
                'endLine' => 224,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'aliasName' => null,
            ],
            'dispatched' => [
                'name' => 'dispatched',
                'parameters' => [
                    'event' => [
                        'name' => 'event',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 233,
                        'endLine' => 233,
                        'startColumn' => 32,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'callback' => [
                        'name' => 'callback',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 233,
                                'endLine' => 233,
                                'startTokenPos' => 945,
                                'startFilePos' => 6584,
                                'endTokenPos' => 945,
                                'endFilePos' => 6587,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 233,
                        'endLine' => 233,
                        'startColumn' => 40,
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
 * Get all of the events matching a truth-test callback.
 *
 * @param  string  $event
 * @param  callable|null  $callback
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 233,
                'endLine' => 244,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'aliasName' => null,
            ],
            'hasDispatched' => [
                'name' => 'hasDispatched',
                'parameters' => [
                    'event' => [
                        'name' => 'event',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 252,
                        'endLine' => 252,
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
 * Determine if the given event has been dispatched.
 *
 * @param  string  $event
 * @return bool
 */',
                'startLine' => 252,
                'endLine' => 255,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'aliasName' => null,
            ],
            'listen' => [
                'name' => 'listen',
                'parameters' => [
                    'events' => [
                        'name' => 'events',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 264,
                        'endLine' => 264,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'listener' => [
                        'name' => 'listener',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 264,
                                'endLine' => 264,
                                'startTokenPos' => 1088,
                                'startFilePos' => 7363,
                                'endTokenPos' => 1088,
                                'endFilePos' => 7366,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 264,
                        'endLine' => 264,
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
 * Register an event listener with the dispatcher.
 *
 * @param  \\Closure|string|array  $events
 * @param  mixed  $listener
 * @return void
 */',
                'startLine' => 264,
                'endLine' => 267,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'aliasName' => null,
            ],
            'hasListeners' => [
                'name' => 'hasListeners',
                'parameters' => [
                    'eventName' => [
                        'name' => 'eventName',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 275,
                        'endLine' => 275,
                        'startColumn' => 34,
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
 * Determine if a given event has listeners.
 *
 * @param  string  $eventName
 * @return bool
 */',
                'startLine' => 275,
                'endLine' => 278,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'aliasName' => null,
            ],
            'push' => [
                'name' => 'push',
                'parameters' => [
                    'event' => [
                        'name' => 'event',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 287,
                        'endLine' => 287,
                        'startColumn' => 26,
                        'endColumn' => 31,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'payload' => [
                        'name' => 'payload',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 287,
                                'endLine' => 287,
                                'startTokenPos' => 1150,
                                'startFilePos' => 7890,
                                'endTokenPos' => 1151,
                                'endFilePos' => 7891,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 287,
                        'endLine' => 287,
                        'startColumn' => 34,
                        'endColumn' => 46,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Register an event and payload to be dispatched later.
 *
 * @param  string  $event
 * @param  array  $payload
 * @return void
 */',
                'startLine' => 287,
                'endLine' => 290,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'aliasName' => null,
            ],
            'subscribe' => [
                'name' => 'subscribe',
                'parameters' => [
                    'subscriber' => [
                        'name' => 'subscriber',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 298,
                        'endLine' => 298,
                        'startColumn' => 31,
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
 * Register an event subscriber with the dispatcher.
 *
 * @param  object|string  $subscriber
 * @return void
 */',
                'startLine' => 298,
                'endLine' => 301,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'aliasName' => null,
            ],
            'flush' => [
                'name' => 'flush',
                'parameters' => [
                    'event' => [
                        'name' => 'event',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 309,
                        'endLine' => 309,
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
 * Flush a set of pushed events.
 *
 * @param  string  $event
 * @return void
 */',
                'startLine' => 309,
                'endLine' => 312,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'aliasName' => null,
            ],
            'dispatch' => [
                'name' => 'dispatch',
                'parameters' => [
                    'event' => [
                        'name' => 'event',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 322,
                        'endLine' => 322,
                        'startColumn' => 30,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'payload' => [
                        'name' => 'payload',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 322,
                                'endLine' => 322,
                                'startTokenPos' => 1217,
                                'startFilePos' => 8572,
                                'endTokenPos' => 1218,
                                'endFilePos' => 8573,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 322,
                        'endLine' => 322,
                        'startColumn' => 38,
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'halt' => [
                        'name' => 'halt',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 322,
                                'endLine' => 322,
                                'startTokenPos' => 1225,
                                'startFilePos' => 8584,
                                'endTokenPos' => 1225,
                                'endFilePos' => 8588,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 322,
                        'endLine' => 322,
                        'startColumn' => 53,
                        'endColumn' => 65,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Fire an event and call the listeners.
 *
 * @param  string|object  $event
 * @param  mixed  $payload
 * @param  bool  $halt
 * @return array|null
 */',
                'startLine' => 322,
                'endLine' => 331,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'aliasName' => null,
            ],
            'shouldFakeEvent' => [
                'name' => 'shouldFakeEvent',
                'parameters' => [
                    'eventName' => [
                        'name' => 'eventName',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 340,
                        'endLine' => 340,
                        'startColumn' => 40,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'payload' => [
                        'name' => 'payload',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 340,
                        'endLine' => 340,
                        'startColumn' => 52,
                        'endColumn' => 59,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if an event should be faked or actually dispatched.
 *
 * @param  string  $eventName
 * @param  mixed  $payload
 * @return bool
 */',
                'startLine' => 340,
                'endLine' => 357,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'aliasName' => null,
            ],
            'fakeEvent' => [
                'name' => 'fakeEvent',
                'parameters' => [
                    'event' => [
                        'name' => 'event',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 367,
                        'endLine' => 367,
                        'startColumn' => 34,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'name' => [
                        'name' => 'name',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 367,
                        'endLine' => 367,
                        'startColumn' => 42,
                        'endColumn' => 46,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'arguments' => [
                        'name' => 'arguments',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 367,
                        'endLine' => 367,
                        'startColumn' => 49,
                        'endColumn' => 58,
                        'parameterIndex' => 2,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Push the event onto the fake events array immediately or after the next database transaction.
 *
 * @param  string|object  $event
 * @param  string  $name
 * @param  array  $arguments
 * @return void
 */',
                'startLine' => 367,
                'endLine' => 375,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'aliasName' => null,
            ],
            'shouldDispatchEvent' => [
                'name' => 'shouldDispatchEvent',
                'parameters' => [
                    'eventName' => [
                        'name' => 'eventName',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 384,
                        'endLine' => 384,
                        'startColumn' => 44,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'payload' => [
                        'name' => 'payload',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 384,
                        'endLine' => 384,
                        'startColumn' => 56,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine whether an event should be dispatched or not.
 *
 * @param  string  $eventName
 * @param  mixed  $payload
 * @return bool
 */',
                'startLine' => 384,
                'endLine' => 397,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'aliasName' => null,
            ],
            'forget' => [
                'name' => 'forget',
                'parameters' => [
                    'event' => [
                        'name' => 'event',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 405,
                        'endLine' => 405,
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
 * Remove a set of listeners from the dispatcher.
 *
 * @param  string  $event
 * @return void
 */',
                'startLine' => 405,
                'endLine' => 408,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'aliasName' => null,
            ],
            'forgetPushed' => [
                'name' => 'forgetPushed',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Forget all of the queued listeners.
 *
 * @return void
 */',
                'startLine' => 415,
                'endLine' => 418,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'aliasName' => null,
            ],
            'until' => [
                'name' => 'until',
                'parameters' => [
                    'event' => [
                        'name' => 'event',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 427,
                        'endLine' => 427,
                        'startColumn' => 27,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'payload' => [
                        'name' => 'payload',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 427,
                                'endLine' => 427,
                                'startTokenPos' => 1698,
                                'startFilePos' => 11447,
                                'endTokenPos' => 1699,
                                'endFilePos' => 11448,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 427,
                        'endLine' => 427,
                        'startColumn' => 35,
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
 * Dispatch an event and call the listeners.
 *
 * @param  string|object  $event
 * @param  mixed  $payload
 * @return mixed
 */',
                'startLine' => 427,
                'endLine' => 430,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'aliasName' => null,
            ],
            'dispatchedEvents' => [
                'name' => 'dispatchedEvents',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the events that have been dispatched.
 *
 * @return array
 */',
                'startLine' => 437,
                'endLine' => 440,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
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
                        'startLine' => 449,
                        'endLine' => 449,
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
                        'startLine' => 449,
                        'endLine' => 449,
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
 * Handle dynamic method calls to the dispatcher.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */',
                'startLine' => 449,
                'endLine' => 452,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Support\\Testing\\Fakes',
                'declaringClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'implementingClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
                'currentClassName' => 'Illuminate\\Support\\Testing\\Fakes\\EventFake',
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
