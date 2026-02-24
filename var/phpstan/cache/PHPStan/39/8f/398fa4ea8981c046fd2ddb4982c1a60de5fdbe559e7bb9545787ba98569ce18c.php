<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Events/Dispatcher.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Contracts\Events\Dispatcher
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-b6c15aa4eb94cfb3e3857422f02f0d1dacdb1dbed98aceda17fd89f83222f20c-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Events/Dispatcher.php',
            ],
        ],
        'namespace' => 'Illuminate\\Contracts\\Events',
        'name' => 'Illuminate\\Contracts\\Events\\Dispatcher',
        'shortName' => 'Dispatcher',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 5,
        'endLine' => 82,
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
                        'startLine' => 14,
                        'endLine' => 14,
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
                                'startLine' => 14,
                                'endLine' => 14,
                                'startTokenPos' => 28,
                                'startFilePos' => 315,
                                'endTokenPos' => 28,
                                'endFilePos' => 318,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 14,
                        'endLine' => 14,
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
 * @param  \\Closure|string|array|null  $listener
 * @return void
 */',
                'startLine' => 14,
                'endLine' => 14,
                'startColumn' => 5,
                'endColumn' => 54,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Events',
                'declaringClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'implementingClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'currentClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
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
                        'startLine' => 22,
                        'endLine' => 22,
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
                'startLine' => 22,
                'endLine' => 22,
                'startColumn' => 5,
                'endColumn' => 45,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Events',
                'declaringClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'implementingClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'currentClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
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
                        'startLine' => 30,
                        'endLine' => 30,
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
                'startLine' => 30,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 43,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Events',
                'declaringClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'implementingClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'currentClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
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
                        'startLine' => 39,
                        'endLine' => 39,
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
                                'startLine' => 39,
                                'endLine' => 39,
                                'startTokenPos' => 71,
                                'startFilePos' => 912,
                                'endTokenPos' => 72,
                                'endFilePos' => 913,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 39,
                        'endLine' => 39,
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
 * Dispatch an event until the first non-null response is returned.
 *
 * @param  string|object  $event
 * @param  mixed  $payload
 * @return mixed
 */',
                'startLine' => 39,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 49,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Events',
                'declaringClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'implementingClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'currentClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
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
                        'startLine' => 49,
                        'endLine' => 49,
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
                                'startLine' => 49,
                                'endLine' => 49,
                                'startTokenPos' => 91,
                                'startFilePos' => 1159,
                                'endTokenPos' => 92,
                                'endFilePos' => 1160,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 49,
                        'endLine' => 49,
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
                                'startLine' => 49,
                                'endLine' => 49,
                                'startTokenPos' => 99,
                                'startFilePos' => 1171,
                                'endTokenPos' => 99,
                                'endFilePos' => 1175,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 49,
                        'endLine' => 49,
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
 * Dispatch an event and call the listeners.
 *
 * @param  string|object  $event
 * @param  mixed  $payload
 * @param  bool  $halt
 * @return array|null
 */',
                'startLine' => 49,
                'endLine' => 49,
                'startColumn' => 5,
                'endColumn' => 67,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Events',
                'declaringClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'implementingClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'currentClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
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
                        'startLine' => 58,
                        'endLine' => 58,
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
                                'startLine' => 58,
                                'endLine' => 58,
                                'startTokenPos' => 118,
                                'startFilePos' => 1384,
                                'endTokenPos' => 119,
                                'endFilePos' => 1385,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 58,
                        'endLine' => 58,
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
 * Register an event and payload to be fired later.
 *
 * @param  string  $event
 * @param  array  $payload
 * @return void
 */',
                'startLine' => 58,
                'endLine' => 58,
                'startColumn' => 5,
                'endColumn' => 48,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Events',
                'declaringClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'implementingClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'currentClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
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
                        'startLine' => 66,
                        'endLine' => 66,
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
                'startLine' => 66,
                'endLine' => 66,
                'startColumn' => 5,
                'endColumn' => 34,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Events',
                'declaringClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'implementingClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'currentClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
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
                        'startLine' => 74,
                        'endLine' => 74,
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
                'startLine' => 74,
                'endLine' => 74,
                'startColumn' => 5,
                'endColumn' => 35,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Events',
                'declaringClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'implementingClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'currentClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
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
                'startLine' => 81,
                'endLine' => 81,
                'startColumn' => 5,
                'endColumn' => 35,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Events',
                'declaringClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'implementingClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
                'currentClassName' => 'Illuminate\\Contracts\\Events\\Dispatcher',
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
