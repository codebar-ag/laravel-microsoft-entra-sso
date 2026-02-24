<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../mockery/mockery/library/Mockery/LegacyMockInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Mockery\LegacyMockInterface
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-149e162b72d540cf6b2704858f58f46c692b08a483152d29b7251b4fa0a231a1-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Mockery\\LegacyMockInterface',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../mockery/mockery/library/Mockery/LegacyMockInterface.php',
            ],
        ],
        'namespace' => 'Mockery',
        'name' => 'Mockery\\LegacyMockInterface',
        'shortName' => 'LegacyMockInterface',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 16,
        'endLine' => 258,
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
            'byDefault' => [
                'name' => 'byDefault',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * In the event shouldReceive() accepting an array of methods/returns
 * this method will switch them from normal expectations to default
 * expectations
 *
 * @return self
 */',
                'startLine' => 25,
                'endLine' => 25,
                'startColumn' => 5,
                'endColumn' => 32,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'makePartial' => [
                'name' => 'makePartial',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set mock to defer unexpected methods to its parent if possible
 *
 * @return self
 */',
                'startLine' => 32,
                'endLine' => 32,
                'startColumn' => 5,
                'endColumn' => 34,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'mockery_allocateOrder' => [
                'name' => 'mockery_allocateOrder',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Fetch the next available allocation order number
 *
 * @return int
 */',
                'startLine' => 39,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 44,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'mockery_findExpectation' => [
                'name' => 'mockery_findExpectation',
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
                        'startLine' => 51,
                        'endLine' => 51,
                        'startColumn' => 45,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'args' => [
                        'name' => 'args',
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
                        'startLine' => 51,
                        'endLine' => 51,
                        'startColumn' => 54,
                        'endColumn' => 64,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Find an expectation matching the given method and arguments
 *
 * @template TMixed
 *
 * @param string        $method
 * @param array<TMixed> $args
 *
 * @return null|Expectation
 */',
                'startLine' => 51,
                'endLine' => 51,
                'startColumn' => 5,
                'endColumn' => 66,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'mockery_getContainer' => [
                'name' => 'mockery_getContainer',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Return the container for this mock
 *
 * @return Container
 */',
                'startLine' => 58,
                'endLine' => 58,
                'startColumn' => 5,
                'endColumn' => 43,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'mockery_getCurrentOrder' => [
                'name' => 'mockery_getCurrentOrder',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get current ordered number
 *
 * @return int
 */',
                'startLine' => 65,
                'endLine' => 65,
                'startColumn' => 5,
                'endColumn' => 46,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'mockery_getExpectationCount' => [
                'name' => 'mockery_getExpectationCount',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the count of expectations for this mock
 *
 * @return int
 */',
                'startLine' => 72,
                'endLine' => 72,
                'startColumn' => 5,
                'endColumn' => 50,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'mockery_getExpectationsFor' => [
                'name' => 'mockery_getExpectationsFor',
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
                        'startLine' => 81,
                        'endLine' => 81,
                        'startColumn' => 48,
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
 * Return the expectations director for the given method
 *
 * @param string $method
 *
 * @return null|ExpectationDirector
 */',
                'startLine' => 81,
                'endLine' => 81,
                'startColumn' => 5,
                'endColumn' => 56,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'mockery_getGroups' => [
                'name' => 'mockery_getGroups',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Fetch array of ordered groups
 *
 * @return array<string,int>
 */',
                'startLine' => 88,
                'endLine' => 88,
                'startColumn' => 5,
                'endColumn' => 40,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'mockery_getMockableMethods' => [
                'name' => 'mockery_getMockableMethods',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @return string[]
 */',
                'startLine' => 93,
                'endLine' => 93,
                'startColumn' => 5,
                'endColumn' => 49,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'mockery_getMockableProperties' => [
                'name' => 'mockery_getMockableProperties',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @return array
 */',
                'startLine' => 98,
                'endLine' => 98,
                'startColumn' => 5,
                'endColumn' => 52,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'mockery_getName' => [
                'name' => 'mockery_getName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Return the name for this mock
 *
 * @return string
 */',
                'startLine' => 105,
                'endLine' => 105,
                'startColumn' => 5,
                'endColumn' => 38,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'mockery_init' => [
                'name' => 'mockery_init',
                'parameters' => [
                    'container' => [
                        'name' => 'container',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 114,
                                'endLine' => 114,
                                'startTokenPos' => 179,
                                'startFilePos' => 2462,
                                'endTokenPos' => 179,
                                'endFilePos' => 2465,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'Mockery\\Container',
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
                        'startLine' => 114,
                        'endLine' => 114,
                        'startColumn' => 34,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'partialObject' => [
                        'name' => 'partialObject',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 114,
                                'endLine' => 114,
                                'startTokenPos' => 186,
                                'startFilePos' => 2485,
                                'endTokenPos' => 186,
                                'endFilePos' => 2488,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 114,
                        'endLine' => 114,
                        'startColumn' => 64,
                        'endColumn' => 84,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Alternative setup method to constructor
 *
 * @param object $partialObject
 *
 * @return void
 */',
                'startLine' => 114,
                'endLine' => 114,
                'startColumn' => 5,
                'endColumn' => 86,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'mockery_isAnonymous' => [
                'name' => 'mockery_isAnonymous',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @return bool
 */',
                'startLine' => 119,
                'endLine' => 119,
                'startColumn' => 5,
                'endColumn' => 42,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'mockery_setCurrentOrder' => [
                'name' => 'mockery_setCurrentOrder',
                'parameters' => [
                    'order' => [
                        'name' => 'order',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 128,
                        'endLine' => 128,
                        'startColumn' => 45,
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
 * Set current ordered number
 *
 * @param int $order
 *
 * @return int
 */',
                'startLine' => 128,
                'endLine' => 128,
                'startColumn' => 5,
                'endColumn' => 52,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'mockery_setExpectationsFor' => [
                'name' => 'mockery_setExpectationsFor',
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
                        'startLine' => 137,
                        'endLine' => 137,
                        'startColumn' => 48,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'director' => [
                        'name' => 'director',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Mockery\\ExpectationDirector',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 137,
                        'endLine' => 137,
                        'startColumn' => 57,
                        'endColumn' => 85,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Return the expectations director for the given method
 *
 * @param string $method
 *
 * @return null|ExpectationDirector
 */',
                'startLine' => 137,
                'endLine' => 137,
                'startColumn' => 5,
                'endColumn' => 87,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'mockery_setGroup' => [
                'name' => 'mockery_setGroup',
                'parameters' => [
                    'group' => [
                        'name' => 'group',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 147,
                        'endLine' => 147,
                        'startColumn' => 38,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'order' => [
                        'name' => 'order',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 147,
                        'endLine' => 147,
                        'startColumn' => 46,
                        'endColumn' => 51,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set ordering for a group
 *
 * @param string $group
 * @param int    $order
 *
 * @return void
 */',
                'startLine' => 147,
                'endLine' => 147,
                'startColumn' => 5,
                'endColumn' => 53,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'mockery_teardown' => [
                'name' => 'mockery_teardown',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Tear down tasks for this mock
 *
 * @return void
 */',
                'startLine' => 154,
                'endLine' => 154,
                'startColumn' => 5,
                'endColumn' => 39,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'mockery_validateOrder' => [
                'name' => 'mockery_validateOrder',
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
                        'startLine' => 166,
                        'endLine' => 166,
                        'startColumn' => 43,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'order' => [
                        'name' => 'order',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 166,
                        'endLine' => 166,
                        'startColumn' => 52,
                        'endColumn' => 57,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Validate the current mock\'s ordering
 *
 * @param string $method
 * @param int    $order
 *
 * @throws Exception
 *
 * @return void
 */',
                'startLine' => 166,
                'endLine' => 166,
                'startColumn' => 5,
                'endColumn' => 59,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'mockery_verify' => [
                'name' => 'mockery_verify',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Iterate across all expectation directors and validate each
 *
 * @throws Throwable
 *
 * @return void
 */',
                'startLine' => 175,
                'endLine' => 175,
                'startColumn' => 5,
                'endColumn' => 37,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'shouldAllowMockingMethod' => [
                'name' => 'shouldAllowMockingMethod',
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
                        'startLine' => 183,
                        'endLine' => 183,
                        'startColumn' => 46,
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
 * Allows additional methods to be mocked that do not explicitly exist on mocked class
 *
 * @param  string $method the method name to be mocked
 * @return self
 */',
                'startLine' => 183,
                'endLine' => 183,
                'startColumn' => 5,
                'endColumn' => 54,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'shouldAllowMockingProtectedMethods' => [
                'name' => 'shouldAllowMockingProtectedMethods',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @return self
 */',
                'startLine' => 188,
                'endLine' => 188,
                'startColumn' => 5,
                'endColumn' => 57,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'shouldDeferMissing' => [
                'name' => 'shouldDeferMissing',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set mock to defer unexpected methods to its parent if possible
 *
 * @deprecated since 1.4.0. Please use makePartial() instead.
 *
 * @return self
 */',
                'startLine' => 197,
                'endLine' => 197,
                'startColumn' => 5,
                'endColumn' => 41,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'shouldHaveBeenCalled' => [
                'name' => 'shouldHaveBeenCalled',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @return self
 */',
                'startLine' => 202,
                'endLine' => 202,
                'startColumn' => 5,
                'endColumn' => 43,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'shouldHaveReceived' => [
                'name' => 'shouldHaveReceived',
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
                        'startLine' => 211,
                        'endLine' => 211,
                        'startColumn' => 40,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'args' => [
                        'name' => 'args',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 211,
                                'endLine' => 211,
                                'startTokenPos' => 342,
                                'startFilePos' => 4595,
                                'endTokenPos' => 342,
                                'endFilePos' => 4598,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 211,
                        'endLine' => 211,
                        'startColumn' => 49,
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
 * @template TMixed
 * @param string                     $method
 * @param null|array<TMixed>|Closure $args
 *
 * @return self
 */',
                'startLine' => 211,
                'endLine' => 211,
                'startColumn' => 5,
                'endColumn' => 62,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'shouldIgnoreMissing' => [
                'name' => 'shouldIgnoreMissing',
                'parameters' => [
                    'returnValue' => [
                        'name' => 'returnValue',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 222,
                                'endLine' => 222,
                                'startTokenPos' => 358,
                                'startFilePos' => 4931,
                                'endTokenPos' => 358,
                                'endFilePos' => 4934,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 222,
                        'endLine' => 222,
                        'startColumn' => 41,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set mock to ignore unexpected methods and return Undefined class
 *
 * @template TReturnValue
 *
 * @param null|TReturnValue $returnValue the default return value for calls to missing functions on this mock
 *
 * @return self
 */',
                'startLine' => 222,
                'endLine' => 222,
                'startColumn' => 5,
                'endColumn' => 61,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'shouldNotHaveBeenCalled' => [
                'name' => 'shouldNotHaveBeenCalled',
                'parameters' => [
                    'args' => [
                        'name' => 'args',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 230,
                                'endLine' => 230,
                                'startTokenPos' => 377,
                                'startFilePos' => 5115,
                                'endTokenPos' => 377,
                                'endFilePos' => 5118,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'array',
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
                        'startLine' => 230,
                        'endLine' => 230,
                        'startColumn' => 45,
                        'endColumn' => 63,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @template TMixed
 * @param null|array<TMixed> $args (optional)
 *
 * @return self
 */',
                'startLine' => 230,
                'endLine' => 230,
                'startColumn' => 5,
                'endColumn' => 65,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'shouldNotHaveReceived' => [
                'name' => 'shouldNotHaveReceived',
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
                        'startLine' => 239,
                        'endLine' => 239,
                        'startColumn' => 43,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'args' => [
                        'name' => 'args',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 239,
                                'endLine' => 239,
                                'startTokenPos' => 396,
                                'startFilePos' => 5345,
                                'endTokenPos' => 396,
                                'endFilePos' => 5348,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 239,
                        'endLine' => 239,
                        'startColumn' => 52,
                        'endColumn' => 63,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @template TMixed
 * @param string                     $method
 * @param null|array<TMixed>|Closure $args
 *
 * @return self
 */',
                'startLine' => 239,
                'endLine' => 239,
                'startColumn' => 5,
                'endColumn' => 65,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'shouldNotReceive' => [
                'name' => 'shouldNotReceive',
                'parameters' => [
                    'methodNames' => [
                        'name' => 'methodNames',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 248,
                        'endLine' => 248,
                        'startColumn' => 38,
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
 * Shortcut method for setting an expectation that a method should not be called.
 *
 * @param string ...$methodNames one or many methods that are expected not to be called in this mock
 *
 * @return Expectation|ExpectationInterface|HigherOrderMessage
 */',
                'startLine' => 248,
                'endLine' => 248,
                'startColumn' => 5,
                'endColumn' => 54,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
                'aliasName' => null,
            ],
            'shouldReceive' => [
                'name' => 'shouldReceive',
                'parameters' => [
                    'methodNames' => [
                        'name' => 'methodNames',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => true,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 257,
                        'endLine' => 257,
                        'startColumn' => 35,
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
 * Set expected method calls
 *
 * @param string ...$methodNames one or many methods that are expected to be called in this mock
 *
 * @return Expectation|ExpectationInterface|HigherOrderMessage
 */',
                'startLine' => 257,
                'endLine' => 257,
                'startColumn' => 5,
                'endColumn' => 51,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Mockery',
                'declaringClassName' => 'Mockery\\LegacyMockInterface',
                'implementingClassName' => 'Mockery\\LegacyMockInterface',
                'currentClassName' => 'Mockery\\LegacyMockInterface',
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
