<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Testing/TestResponse.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Testing\TestResponse
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-713657a846269312d527eeae872668dc0c5b3b347a07f72744035371188e39ea-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Testing\\TestResponse',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Testing/TestResponse.php',
            ],
        ],
        'namespace' => 'Illuminate\\Testing',
        'name' => 'Illuminate\\Testing\\TestResponse',
        'shortName' => 'TestResponse',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @template TResponse of \\Symfony\\Component\\HttpFoundation\\Response
 *
 * @mixin \\Illuminate\\Http\\Response
 */',
        'attributes' => [
        ],
        'startLine' => 35,
        'endLine' => 2018,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'ArrayAccess',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Testing\\Concerns\\AssertsStatusCodes',
            1 => 'Illuminate\\Support\\Traits\\Conditionable',
            2 => 'Illuminate\\Support\\Traits\\Dumpable',
            3 => 'Illuminate\\Support\\Traits\\Tappable',
            4 => 'Illuminate\\Support\\Traits\\Macroable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'baseRequest' => [
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'name' => 'baseRequest',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The original request.
 *
 * @var \\Illuminate\\Http\\Request|null
 */',
                'attributes' => [
                ],
                'startLine' => 46,
                'endLine' => 46,
                'startColumn' => 5,
                'endColumn' => 24,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'baseResponse' => [
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'name' => 'baseResponse',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The response to delegate to.
 *
 * @var TResponse
 */',
                'attributes' => [
                ],
                'startLine' => 53,
                'endLine' => 53,
                'startColumn' => 5,
                'endColumn' => 25,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'exceptions' => [
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'name' => 'exceptions',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The collection of logged exceptions for the request.
 *
 * @var \\Illuminate\\Support\\Collection
 */',
                'attributes' => [
                ],
                'startLine' => 60,
                'endLine' => 60,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'streamedContent' => [
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'name' => 'streamedContent',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The streamed content of the response.
 *
 * @var string
 */',
                'attributes' => [
                ],
                'startLine' => 67,
                'endLine' => 67,
                'startColumn' => 5,
                'endColumn' => 31,
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
                    'response' => [
                        'name' => 'response',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 75,
                        'endLine' => 75,
                        'startColumn' => 33,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'request' => [
                        'name' => 'request',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 75,
                                'endLine' => 75,
                                'startTokenPos' => 217,
                                'startFilePos' => 1969,
                                'endTokenPos' => 217,
                                'endFilePos' => 1972,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 75,
                        'endLine' => 75,
                        'startColumn' => 44,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new test response instance.
 *
 * @param  TResponse  $response
 * @param  \\Illuminate\\Http\\Request|null  $request
 */',
                'startLine' => 75,
                'endLine' => 80,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'fromBaseResponse' => [
                'name' => 'fromBaseResponse',
                'parameters' => [
                    'response' => [
                        'name' => 'response',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 91,
                        'endLine' => 91,
                        'startColumn' => 45,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'request' => [
                        'name' => 'request',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 91,
                                'endLine' => 91,
                                'startTokenPos' => 270,
                                'startFilePos' => 2404,
                                'endTokenPos' => 270,
                                'endFilePos' => 2407,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 91,
                        'endLine' => 91,
                        'startColumn' => 56,
                        'endColumn' => 70,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a new TestResponse from another response.
 *
 * @template R of TResponse
 *
 * @param  R  $response
 * @param  \\Illuminate\\Http\\Request|null  $request
 * @return static<R>
 */',
                'startLine' => 91,
                'endLine' => 94,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertSuccessful' => [
                'name' => 'assertSuccessful',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the response has a successful status code.
 *
 * @return $this
 */',
                'startLine' => 101,
                'endLine' => 109,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertSuccessfulPrecognition' => [
                'name' => 'assertSuccessfulPrecognition',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the Precognition request was successful.
 *
 * @return $this
 */',
                'startLine' => 116,
                'endLine' => 132,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertClientError' => [
                'name' => 'assertClientError',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the response is a client error.
 *
 * @return $this
 */',
                'startLine' => 139,
                'endLine' => 147,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertServerError' => [
                'name' => 'assertServerError',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the response is a server error.
 *
 * @return $this
 */',
                'startLine' => 154,
                'endLine' => 162,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertStatus' => [
                'name' => 'assertStatus',
                'parameters' => [
                    'status' => [
                        'name' => 'status',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 170,
                        'endLine' => 170,
                        'startColumn' => 34,
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
 * Assert that the response has the given status code.
 *
 * @param  int  $status
 * @return $this
 */',
                'startLine' => 170,
                'endLine' => 177,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'statusMessageWithDetails' => [
                'name' => 'statusMessageWithDetails',
                'parameters' => [
                    'expected' => [
                        'name' => 'expected',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 186,
                        'endLine' => 186,
                        'startColumn' => 49,
                        'endColumn' => 57,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'actual' => [
                        'name' => 'actual',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 186,
                        'endLine' => 186,
                        'startColumn' => 60,
                        'endColumn' => 66,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get an assertion message for a status assertion containing extra details when available.
 *
 * @param  string|int  $expected
 * @param  string|int  $actual
 * @return string
 */',
                'startLine' => 186,
                'endLine' => 189,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertRedirect' => [
                'name' => 'assertRedirect',
                'parameters' => [
                    'uri' => [
                        'name' => 'uri',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 197,
                                'endLine' => 197,
                                'startTokenPos' => 635,
                                'startFilePos' => 5121,
                                'endTokenPos' => 635,
                                'endFilePos' => 5124,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 197,
                        'endLine' => 197,
                        'startColumn' => 36,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert whether the response is redirecting to a given URI.
 *
 * @param  string|null  $uri
 * @return $this
 */',
                'startLine' => 197,
                'endLine' => 209,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertRedirectContains' => [
                'name' => 'assertRedirectContains',
                'parameters' => [
                    'uri' => [
                        'name' => 'uri',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 217,
                        'endLine' => 217,
                        'startColumn' => 44,
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
 * Assert whether the response is redirecting to a URI that contains the given URI.
 *
 * @param  string  $uri
 * @return $this
 */',
                'startLine' => 217,
                'endLine' => 229,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertRedirectBack' => [
                'name' => 'assertRedirectBack',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert whether the response is redirecting back to the previous location.
 *
 * @return $this
 */',
                'startLine' => 236,
                'endLine' => 246,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertRedirectBackWithErrors' => [
                'name' => 'assertRedirectBackWithErrors',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 256,
                                'endLine' => 256,
                                'startTokenPos' => 889,
                                'startFilePos' => 6866,
                                'endTokenPos' => 890,
                                'endFilePos' => 6867,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 256,
                        'endLine' => 256,
                        'startColumn' => 50,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'format' => [
                        'name' => 'format',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 256,
                                'endLine' => 256,
                                'startTokenPos' => 897,
                                'startFilePos' => 6880,
                                'endTokenPos' => 897,
                                'endFilePos' => 6883,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 256,
                        'endLine' => 256,
                        'startColumn' => 62,
                        'endColumn' => 75,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'errorBag' => [
                        'name' => 'errorBag',
                        'default' => [
                            'code' => '\'default\'',
                            'attributes' => [
                                'startLine' => 256,
                                'endLine' => 256,
                                'startTokenPos' => 904,
                                'startFilePos' => 6898,
                                'endTokenPos' => 904,
                                'endFilePos' => 6906,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 256,
                        'endLine' => 256,
                        'startColumn' => 78,
                        'endColumn' => 98,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert whether the response is redirecting back to the previous location with the given errors in the session.
 *
 * @param  string|array  $keys
 * @param  mixed  $format
 * @param  string  $errorBag
 * @return $this
 */',
                'startLine' => 256,
                'endLine' => 263,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertRedirectBackWithoutErrors' => [
                'name' => 'assertRedirectBackWithoutErrors',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert whether the response is redirecting back to the previous location with no errors in the session.
 *
 * @return $this
 */',
                'startLine' => 270,
                'endLine' => 277,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertRedirectToRoute' => [
                'name' => 'assertRedirectToRoute',
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
                        'startLine' => 286,
                        'endLine' => 286,
                        'startColumn' => 43,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 286,
                                'endLine' => 286,
                                'startTokenPos' => 985,
                                'startFilePos' => 7625,
                                'endTokenPos' => 986,
                                'endFilePos' => 7626,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 286,
                        'endLine' => 286,
                        'startColumn' => 50,
                        'endColumn' => 65,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert whether the response is redirecting to a given route.
 *
 * @param  \\BackedEnum|string  $name
 * @param  mixed  $parameters
 * @return $this
 */',
                'startLine' => 286,
                'endLine' => 298,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertRedirectToSignedRoute' => [
                'name' => 'assertRedirectToSignedRoute',
                'parameters' => [
                    'name' => [
                        'name' => 'name',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 308,
                                'endLine' => 308,
                                'startTokenPos' => 1066,
                                'startFilePos' => 8227,
                                'endTokenPos' => 1066,
                                'endFilePos' => 8230,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 308,
                        'endLine' => 308,
                        'startColumn' => 49,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 308,
                                'endLine' => 308,
                                'startTokenPos' => 1073,
                                'startFilePos' => 8247,
                                'endTokenPos' => 1074,
                                'endFilePos' => 8248,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 308,
                        'endLine' => 308,
                        'startColumn' => 63,
                        'endColumn' => 78,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 308,
                                'endLine' => 308,
                                'startTokenPos' => 1081,
                                'startFilePos' => 8263,
                                'endTokenPos' => 1081,
                                'endFilePos' => 8266,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 308,
                        'endLine' => 308,
                        'startColumn' => 81,
                        'endColumn' => 96,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert whether the response is redirecting to a given signed route.
 *
 * @param  \\BackedEnum|string|null  $name
 * @param  mixed  $parameters
 * @param  bool  $absolute
 * @return $this
 */',
                'startLine' => 308,
                'endLine' => 337,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertRedirectToAction' => [
                'name' => 'assertRedirectToAction',
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
                        'startLine' => 346,
                        'endLine' => 346,
                        'startColumn' => 44,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 346,
                                'endLine' => 346,
                                'startTokenPos' => 1288,
                                'startFilePos' => 9404,
                                'endTokenPos' => 1289,
                                'endFilePos' => 9405,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 346,
                        'endLine' => 346,
                        'startColumn' => 51,
                        'endColumn' => 66,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert whether the response is redirecting to a given controller action.
 *
 * @param  string|array  $name
 * @param  array  $parameters
 * @return $this
 */',
                'startLine' => 346,
                'endLine' => 358,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertHeader' => [
                'name' => 'assertHeader',
                'parameters' => [
                    'headerName' => [
                        'name' => 'headerName',
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
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 367,
                                'endLine' => 367,
                                'startTokenPos' => 1372,
                                'startFilePos' => 9974,
                                'endTokenPos' => 1372,
                                'endFilePos' => 9977,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 367,
                        'endLine' => 367,
                        'startColumn' => 47,
                        'endColumn' => 59,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the response contains the given header and equals the optional value.
 *
 * @param  string  $headerName
 * @param  mixed  $value
 * @return $this
 */',
                'startLine' => 367,
                'endLine' => 383,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertHeaderContains' => [
                'name' => 'assertHeaderContains',
                'parameters' => [
                    'headerName' => [
                        'name' => 'headerName',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 392,
                        'endLine' => 392,
                        'startColumn' => 42,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 392,
                        'endLine' => 392,
                        'startColumn' => 55,
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
 * Asserts that the response contains the given header and that its value contains the given string.
 *
 * @param  string  $headerName
 * @param  string  $value
 * @return $this
 */',
                'startLine' => 392,
                'endLine' => 406,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertHeaderMissing' => [
                'name' => 'assertHeaderMissing',
                'parameters' => [
                    'headerName' => [
                        'name' => 'headerName',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 414,
                        'endLine' => 414,
                        'startColumn' => 41,
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
 * Asserts that the response does not contain the given header.
 *
 * @param  string  $headerName
 * @return $this
 */',
                'startLine' => 414,
                'endLine' => 421,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertLocation' => [
                'name' => 'assertLocation',
                'parameters' => [
                    'uri' => [
                        'name' => 'uri',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 429,
                        'endLine' => 429,
                        'startColumn' => 36,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the current location header matches the given URI.
 *
 * @param  string  $uri
 * @return $this
 */',
                'startLine' => 429,
                'endLine' => 436,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertDownload' => [
                'name' => 'assertDownload',
                'parameters' => [
                    'filename' => [
                        'name' => 'filename',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 444,
                                'endLine' => 444,
                                'startTokenPos' => 1724,
                                'startFilePos' => 12194,
                                'endTokenPos' => 1724,
                                'endFilePos' => 12197,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 444,
                        'endLine' => 444,
                        'startColumn' => 36,
                        'endColumn' => 51,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the response offers a file download.
 *
 * @param  string|null  $filename
 * @return $this
 */',
                'startLine' => 444,
                'endLine' => 484,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertPlainCookie' => [
                'name' => 'assertPlainCookie',
                'parameters' => [
                    'cookieName' => [
                        'name' => 'cookieName',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 493,
                        'endLine' => 493,
                        'startColumn' => 39,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 493,
                                'endLine' => 493,
                                'startTokenPos' => 2053,
                                'startFilePos' => 14035,
                                'endTokenPos' => 2053,
                                'endFilePos' => 14038,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 493,
                        'endLine' => 493,
                        'startColumn' => 52,
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
 * Asserts that the response contains the given cookie and equals the optional value.
 *
 * @param  string  $cookieName
 * @param  mixed  $value
 * @return $this
 */',
                'startLine' => 493,
                'endLine' => 498,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertCookie' => [
                'name' => 'assertCookie',
                'parameters' => [
                    'cookieName' => [
                        'name' => 'cookieName',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 509,
                        'endLine' => 509,
                        'startColumn' => 34,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 509,
                                'endLine' => 509,
                                'startTokenPos' => 2094,
                                'startFilePos' => 14453,
                                'endTokenPos' => 2094,
                                'endFilePos' => 14456,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 509,
                        'endLine' => 509,
                        'startColumn' => 47,
                        'endColumn' => 59,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'encrypted' => [
                        'name' => 'encrypted',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 509,
                                'endLine' => 509,
                                'startTokenPos' => 2101,
                                'startFilePos' => 14472,
                                'endTokenPos' => 2101,
                                'endFilePos' => 14475,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 509,
                        'endLine' => 509,
                        'startColumn' => 62,
                        'endColumn' => 78,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'unserialize' => [
                        'name' => 'unserialize',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 509,
                                'endLine' => 509,
                                'startTokenPos' => 2108,
                                'startFilePos' => 14493,
                                'endTokenPos' => 2108,
                                'endFilePos' => 14497,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 509,
                        'endLine' => 509,
                        'startColumn' => 81,
                        'endColumn' => 100,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Asserts that the response contains the given cookie and equals the optional value.
 *
 * @param  string  $cookieName
 * @param  mixed  $value
 * @param  bool  $encrypted
 * @param  bool  $unserialize
 * @return $this
 */',
                'startLine' => 509,
                'endLine' => 528,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertCookieExpired' => [
                'name' => 'assertCookieExpired',
                'parameters' => [
                    'cookieName' => [
                        'name' => 'cookieName',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 536,
                        'endLine' => 536,
                        'startColumn' => 41,
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
 * Asserts that the response contains the given cookie and is expired.
 *
 * @param  string  $cookieName
 * @return $this
 */',
                'startLine' => 536,
                'endLine' => 551,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertCookieNotExpired' => [
                'name' => 'assertCookieNotExpired',
                'parameters' => [
                    'cookieName' => [
                        'name' => 'cookieName',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 559,
                        'endLine' => 559,
                        'startColumn' => 44,
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
 * Asserts that the response contains the given cookie and is not expired.
 *
 * @param  string  $cookieName
 * @return $this
 */',
                'startLine' => 559,
                'endLine' => 574,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertCookieMissing' => [
                'name' => 'assertCookieMissing',
                'parameters' => [
                    'cookieName' => [
                        'name' => 'cookieName',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 582,
                        'endLine' => 582,
                        'startColumn' => 41,
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
 * Asserts that the response does not contain the given cookie.
 *
 * @param  string  $cookieName
 * @return $this
 */',
                'startLine' => 582,
                'endLine' => 590,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'getCookie' => [
                'name' => 'getCookie',
                'parameters' => [
                    'cookieName' => [
                        'name' => 'cookieName',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 600,
                        'endLine' => 600,
                        'startColumn' => 31,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'decrypt' => [
                        'name' => 'decrypt',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 600,
                                'endLine' => 600,
                                'startTokenPos' => 2557,
                                'startFilePos' => 17316,
                                'endTokenPos' => 2557,
                                'endFilePos' => 17319,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 600,
                        'endLine' => 600,
                        'startColumn' => 44,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'unserialize' => [
                        'name' => 'unserialize',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 600,
                                'endLine' => 600,
                                'startTokenPos' => 2564,
                                'startFilePos' => 17337,
                                'endTokenPos' => 2564,
                                'endFilePos' => 17341,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 600,
                        'endLine' => 600,
                        'startColumn' => 61,
                        'endColumn' => 80,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the given cookie from the response.
 *
 * @param  string  $cookieName
 * @param  bool  $decrypt
 * @param  bool  $unserialize
 * @return \\Symfony\\Component\\HttpFoundation\\Cookie|null
 */',
                'startLine' => 600,
                'endLine' => 626,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertContent' => [
                'name' => 'assertContent',
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
                        'startLine' => 634,
                        'endLine' => 634,
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
 * Assert that the given string matches the response content.
 *
 * @param  string  $value
 * @return $this
 */',
                'startLine' => 634,
                'endLine' => 639,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertStreamed' => [
                'name' => 'assertStreamed',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the response was streamed.
 *
 * @return $this
 */',
                'startLine' => 646,
                'endLine' => 654,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertNotStreamed' => [
                'name' => 'assertNotStreamed',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the response was not streamed.
 *
 * @return $this
 */',
                'startLine' => 661,
                'endLine' => 669,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertStreamedContent' => [
                'name' => 'assertStreamedContent',
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
                        'startLine' => 677,
                        'endLine' => 677,
                        'startColumn' => 43,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the given string matches the streamed response content.
 *
 * @param  string  $value
 * @return $this
 */',
                'startLine' => 677,
                'endLine' => 682,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertStreamedJsonContent' => [
                'name' => 'assertStreamedJsonContent',
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
                        'startLine' => 690,
                        'endLine' => 690,
                        'startColumn' => 47,
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
 * Assert that the given array matches the streamed JSON response content.
 *
 * @param  array  $value
 * @return $this
 */',
                'startLine' => 690,
                'endLine' => 693,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertSee' => [
                'name' => 'assertSee',
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
                        'startLine' => 702,
                        'endLine' => 702,
                        'startColumn' => 31,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'escape' => [
                        'name' => 'escape',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 702,
                                'endLine' => 702,
                                'startTokenPos' => 2966,
                                'startFilePos' => 20196,
                                'endTokenPos' => 2966,
                                'endFilePos' => 20199,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 702,
                        'endLine' => 702,
                        'startColumn' => 39,
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
 * Assert that the given string or array of strings are contained within the response.
 *
 * @param  string|array  $value
 * @param  bool  $escape
 * @return $this
 */',
                'startLine' => 702,
                'endLine' => 713,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertSeeHtml' => [
                'name' => 'assertSeeHtml',
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
                        'startLine' => 721,
                        'endLine' => 721,
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
 * Assert that the given HTML string or array of HTML strings are contained within the response.
 *
 * @param  array|string  $value
 * @return $this
 */',
                'startLine' => 721,
                'endLine' => 724,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertSeeInOrder' => [
                'name' => 'assertSeeInOrder',
                'parameters' => [
                    'values' => [
                        'name' => 'values',
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
                        'startLine' => 733,
                        'endLine' => 733,
                        'startColumn' => 38,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'escape' => [
                        'name' => 'escape',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 733,
                                'endLine' => 733,
                                'startTokenPos' => 3095,
                                'startFilePos' => 21026,
                                'endTokenPos' => 3095,
                                'endFilePos' => 21029,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 733,
                        'endLine' => 733,
                        'startColumn' => 53,
                        'endColumn' => 66,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the given strings are contained in order within the response.
 *
 * @param  array  $values
 * @param  bool  $escape
 * @return $this
 */',
                'startLine' => 733,
                'endLine' => 740,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertSeeHtmlInOrder' => [
                'name' => 'assertSeeHtmlInOrder',
                'parameters' => [
                    'values' => [
                        'name' => 'values',
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
                        'startLine' => 748,
                        'endLine' => 748,
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
 * Assert that the given HTML strings are contained in order within the response.
 *
 * @param  array  $values
 * @return $this
 */',
                'startLine' => 748,
                'endLine' => 751,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertSeeText' => [
                'name' => 'assertSeeText',
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
                        'startLine' => 760,
                        'endLine' => 760,
                        'startColumn' => 35,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'escape' => [
                        'name' => 'escape',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 760,
                                'endLine' => 760,
                                'startTokenPos' => 3201,
                                'startFilePos' => 21773,
                                'endTokenPos' => 3201,
                                'endFilePos' => 21776,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 760,
                        'endLine' => 760,
                        'startColumn' => 43,
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
 * Assert that the given string or array of strings are contained within the response text.
 *
 * @param  string|array  $value
 * @param  bool  $escape
 * @return $this
 */',
                'startLine' => 760,
                'endLine' => 773,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertSeeTextInOrder' => [
                'name' => 'assertSeeTextInOrder',
                'parameters' => [
                    'values' => [
                        'name' => 'values',
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
                        'startLine' => 782,
                        'endLine' => 782,
                        'startColumn' => 42,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'escape' => [
                        'name' => 'escape',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 782,
                                'endLine' => 782,
                                'startTokenPos' => 3312,
                                'startFilePos' => 22370,
                                'endTokenPos' => 3312,
                                'endFilePos' => 22373,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 782,
                        'endLine' => 782,
                        'startColumn' => 57,
                        'endColumn' => 70,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the given strings are contained in order within the response text.
 *
 * @param  array  $values
 * @param  bool  $escape
 * @return $this
 */',
                'startLine' => 782,
                'endLine' => 789,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertDontSee' => [
                'name' => 'assertDontSee',
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
                        'startLine' => 798,
                        'endLine' => 798,
                        'startColumn' => 35,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'escape' => [
                        'name' => 'escape',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 798,
                                'endLine' => 798,
                                'startTokenPos' => 3391,
                                'startFilePos' => 22843,
                                'endTokenPos' => 3391,
                                'endFilePos' => 22846,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 798,
                        'endLine' => 798,
                        'startColumn' => 43,
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
 * Assert that the given string or array of strings are not contained within the response.
 *
 * @param  string|array  $value
 * @param  bool  $escape
 * @return $this
 */',
                'startLine' => 798,
                'endLine' => 809,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertDontSeeHtml' => [
                'name' => 'assertDontSeeHtml',
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
                        'startLine' => 817,
                        'endLine' => 817,
                        'startColumn' => 39,
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
 * Assert that the given HTML string or array of HTML strings are not contained within the response.
 *
 * @param  array|string  $value
 * @return $this
 */',
                'startLine' => 817,
                'endLine' => 820,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertDontSeeText' => [
                'name' => 'assertDontSeeText',
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
                        'startLine' => 829,
                        'endLine' => 829,
                        'startColumn' => 39,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'escape' => [
                        'name' => 'escape',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 829,
                                'endLine' => 829,
                                'startTokenPos' => 3518,
                                'startFilePos' => 23707,
                                'endTokenPos' => 3518,
                                'endFilePos' => 23710,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 829,
                        'endLine' => 829,
                        'startColumn' => 47,
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
 * Assert that the given string or array of strings are not contained within the response text.
 *
 * @param  string|array  $value
 * @param  bool  $escape
 * @return $this
 */',
                'startLine' => 829,
                'endLine' => 842,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertJson' => [
                'name' => 'assertJson',
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
                        'startLine' => 851,
                        'endLine' => 851,
                        'startColumn' => 32,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'strict' => [
                        'name' => 'strict',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 851,
                                'endLine' => 851,
                                'startTokenPos' => 3627,
                                'startFilePos' => 24277,
                                'endTokenPos' => 3627,
                                'endFilePos' => 24281,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 851,
                        'endLine' => 851,
                        'startColumn' => 40,
                        'endColumn' => 54,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the response is a superset of the given JSON.
 *
 * @param  array|callable  $value
 * @param  bool  $strict
 * @return $this
 */',
                'startLine' => 851,
                'endLine' => 868,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertJsonPath' => [
                'name' => 'assertJsonPath',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 877,
                        'endLine' => 877,
                        'startColumn' => 36,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'expect' => [
                        'name' => 'expect',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 877,
                        'endLine' => 877,
                        'startColumn' => 43,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the expected value and type exists at the given path in the response.
 *
 * @param  string  $path
 * @param  mixed  $expect
 * @return $this
 */',
                'startLine' => 877,
                'endLine' => 882,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertJsonPathCanonicalizing' => [
                'name' => 'assertJsonPathCanonicalizing',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 891,
                        'endLine' => 891,
                        'startColumn' => 50,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'expect' => [
                        'name' => 'expect',
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
                        'startLine' => 891,
                        'endLine' => 891,
                        'startColumn' => 57,
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
 * Assert that the given path in the response contains all of the expected values without looking at the order.
 *
 * @param  string  $path
 * @param  array  $expect
 * @return $this
 */',
                'startLine' => 891,
                'endLine' => 896,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertExactJson' => [
                'name' => 'assertExactJson',
                'parameters' => [
                    'data' => [
                        'name' => 'data',
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
                        'startLine' => 904,
                        'endLine' => 904,
                        'startColumn' => 37,
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
 * Assert that the response has the exact given JSON.
 *
 * @param  array  $data
 * @return $this
 */',
                'startLine' => 904,
                'endLine' => 909,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertSimilarJson' => [
                'name' => 'assertSimilarJson',
                'parameters' => [
                    'data' => [
                        'name' => 'data',
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
                        'startLine' => 917,
                        'endLine' => 917,
                        'startColumn' => 39,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the response has the similar JSON as given.
 *
 * @param  array  $data
 * @return $this
 */',
                'startLine' => 917,
                'endLine' => 922,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertJsonFragments' => [
                'name' => 'assertJsonFragments',
                'parameters' => [
                    'data' => [
                        'name' => 'data',
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
                        'startLine' => 930,
                        'endLine' => 930,
                        'startColumn' => 41,
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
 * Assert that the response contains the given JSON fragments.
 *
 * @param  array  $data
 * @return $this
 */',
                'startLine' => 930,
                'endLine' => 937,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertJsonFragment' => [
                'name' => 'assertJsonFragment',
                'parameters' => [
                    'data' => [
                        'name' => 'data',
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
                        'startLine' => 945,
                        'endLine' => 945,
                        'startColumn' => 40,
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
 * Assert that the response contains the given JSON fragment.
 *
 * @param  array  $data
 * @return $this
 */',
                'startLine' => 945,
                'endLine' => 950,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertJsonMissing' => [
                'name' => 'assertJsonMissing',
                'parameters' => [
                    'data' => [
                        'name' => 'data',
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
                        'startLine' => 959,
                        'endLine' => 959,
                        'startColumn' => 39,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'exact' => [
                        'name' => 'exact',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 959,
                                'endLine' => 959,
                                'startTokenPos' => 3965,
                                'startFilePos' => 26831,
                                'endTokenPos' => 3965,
                                'endFilePos' => 26835,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 959,
                        'endLine' => 959,
                        'startColumn' => 52,
                        'endColumn' => 65,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the response does not contain the given JSON fragment.
 *
 * @param  array  $data
 * @param  bool  $exact
 * @return $this
 */',
                'startLine' => 959,
                'endLine' => 964,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertJsonMissingExact' => [
                'name' => 'assertJsonMissingExact',
                'parameters' => [
                    'data' => [
                        'name' => 'data',
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
                        'startLine' => 972,
                        'endLine' => 972,
                        'startColumn' => 44,
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
 * Assert that the response does not contain the exact JSON fragment.
 *
 * @param  array  $data
 * @return $this
 */',
                'startLine' => 972,
                'endLine' => 977,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertJsonMissingPath' => [
                'name' => 'assertJsonMissingPath',
                'parameters' => [
                    'path' => [
                        'name' => 'path',
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
                        'startLine' => 985,
                        'endLine' => 985,
                        'startColumn' => 43,
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
 * Assert that the response does not contain the given path.
 *
 * @param  string  $path
 * @return $this
 */',
                'startLine' => 985,
                'endLine' => 990,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertJsonStructure' => [
                'name' => 'assertJsonStructure',
                'parameters' => [
                    'structure' => [
                        'name' => 'structure',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 999,
                                'endLine' => 999,
                                'startTokenPos' => 4075,
                                'startFilePos' => 27779,
                                'endTokenPos' => 4075,
                                'endFilePos' => 27782,
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
                        'startLine' => 999,
                        'endLine' => 999,
                        'startColumn' => 41,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'responseData' => [
                        'name' => 'responseData',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 999,
                                'endLine' => 999,
                                'startTokenPos' => 4085,
                                'startFilePos' => 27808,
                                'endTokenPos' => 4085,
                                'endFilePos' => 27811,
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
                        'startLine' => 999,
                        'endLine' => 999,
                        'startColumn' => 67,
                        'endColumn' => 93,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the response has a given JSON structure.
 *
 * @param  array|null  $structure
 * @param  array|null  $responseData
 * @return $this
 */',
                'startLine' => 999,
                'endLine' => 1004,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertExactJsonStructure' => [
                'name' => 'assertExactJsonStructure',
                'parameters' => [
                    'structure' => [
                        'name' => 'structure',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1013,
                                'endLine' => 1013,
                                'startTokenPos' => 4127,
                                'startFilePos' => 28181,
                                'endTokenPos' => 4127,
                                'endFilePos' => 28184,
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
                        'startLine' => 1013,
                        'endLine' => 1013,
                        'startColumn' => 46,
                        'endColumn' => 69,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'responseData' => [
                        'name' => 'responseData',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1013,
                                'endLine' => 1013,
                                'startTokenPos' => 4137,
                                'startFilePos' => 28210,
                                'endTokenPos' => 4137,
                                'endFilePos' => 28213,
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
                        'startLine' => 1013,
                        'endLine' => 1013,
                        'startColumn' => 72,
                        'endColumn' => 98,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the response has the exact JSON structure.
 *
 * @param  array|null  $structure
 * @param  array|null  $responseData
 * @return $this
 */',
                'startLine' => 1013,
                'endLine' => 1018,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertJsonCount' => [
                'name' => 'assertJsonCount',
                'parameters' => [
                    'count' => [
                        'name' => 'count',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'int',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1027,
                        'endLine' => 1027,
                        'startColumn' => 37,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1027,
                                'endLine' => 1027,
                                'startTokenPos' => 4184,
                                'startFilePos' => 28585,
                                'endTokenPos' => 4184,
                                'endFilePos' => 28588,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1027,
                        'endLine' => 1027,
                        'startColumn' => 49,
                        'endColumn' => 59,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the response JSON has the expected count of items at the given key.
 *
 * @param  int  $count
 * @param  string|null  $key
 * @return $this
 */',
                'startLine' => 1027,
                'endLine' => 1032,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertJsonValidationErrors' => [
                'name' => 'assertJsonValidationErrors',
                'parameters' => [
                    'errors' => [
                        'name' => 'errors',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1041,
                        'endLine' => 1041,
                        'startColumn' => 48,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'responseKey' => [
                        'name' => 'responseKey',
                        'default' => [
                            'code' => '\'errors\'',
                            'attributes' => [
                                'startLine' => 1041,
                                'endLine' => 1041,
                                'startTokenPos' => 4226,
                                'startFilePos' => 28949,
                                'endTokenPos' => 4226,
                                'endFilePos' => 28956,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1041,
                        'endLine' => 1041,
                        'startColumn' => 57,
                        'endColumn' => 79,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the response has the given JSON validation errors.
 *
 * @param  string|array  $errors
 * @param  string  $responseKey
 * @return $this
 */',
                'startLine' => 1041,
                'endLine' => 1083,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertOnlyJsonValidationErrors' => [
                'name' => 'assertOnlyJsonValidationErrors',
                'parameters' => [
                    'errors' => [
                        'name' => 'errors',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1092,
                        'endLine' => 1092,
                        'startColumn' => 52,
                        'endColumn' => 58,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'responseKey' => [
                        'name' => 'responseKey',
                        'default' => [
                            'code' => '\'errors\'',
                            'attributes' => [
                                'startLine' => 1092,
                                'endLine' => 1092,
                                'startTokenPos' => 4512,
                                'startFilePos' => 30781,
                                'endTokenPos' => 4512,
                                'endFilePos' => 30788,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1092,
                        'endLine' => 1092,
                        'startColumn' => 61,
                        'endColumn' => 83,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the response has the given JSON validation errors but does not have any other JSON validation errors.
 *
 * @param  string|array  $errors
 * @param  string  $responseKey
 * @return $this
 */',
                'startLine' => 1092,
                'endLine' => 1110,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertJsonValidationErrorFor' => [
                'name' => 'assertJsonValidationErrorFor',
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
                        'startLine' => 1119,
                        'endLine' => 1119,
                        'startColumn' => 50,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'responseKey' => [
                        'name' => 'responseKey',
                        'default' => [
                            'code' => '\'errors\'',
                            'attributes' => [
                                'startLine' => 1119,
                                'endLine' => 1119,
                                'startTokenPos' => 4698,
                                'startFilePos' => 31696,
                                'endTokenPos' => 4698,
                                'endFilePos' => 31703,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1119,
                        'endLine' => 1119,
                        'startColumn' => 56,
                        'endColumn' => 78,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert the response has any JSON validation errors for the given key.
 *
 * @param  string  $key
 * @param  string  $responseKey
 * @return $this
 */',
                'startLine' => 1119,
                'endLine' => 1135,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertJsonMissingValidationErrors' => [
                'name' => 'assertJsonMissingValidationErrors',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1144,
                                'endLine' => 1144,
                                'startTokenPos' => 4817,
                                'startFilePos' => 32596,
                                'endTokenPos' => 4817,
                                'endFilePos' => 32599,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1144,
                        'endLine' => 1144,
                        'startColumn' => 55,
                        'endColumn' => 66,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'responseKey' => [
                        'name' => 'responseKey',
                        'default' => [
                            'code' => '\'errors\'',
                            'attributes' => [
                                'startLine' => 1144,
                                'endLine' => 1144,
                                'startTokenPos' => 4824,
                                'startFilePos' => 32617,
                                'endTokenPos' => 4824,
                                'endFilePos' => 32624,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1144,
                        'endLine' => 1144,
                        'startColumn' => 69,
                        'endColumn' => 91,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the response has no JSON validation errors for the given keys.
 *
 * @param  string|array|null  $keys
 * @param  string  $responseKey
 * @return $this
 */',
                'startLine' => 1144,
                'endLine' => 1177,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertJsonIsArray' => [
                'name' => 'assertJsonIsArray',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1185,
                                'endLine' => 1185,
                                'startTokenPos' => 5061,
                                'startFilePos' => 33750,
                                'endTokenPos' => 5061,
                                'endFilePos' => 33753,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1185,
                        'endLine' => 1185,
                        'startColumn' => 39,
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
 * Assert that the given key is a JSON array.
 *
 * @param  string|null  $key
 * @return $this
 */',
                'startLine' => 1185,
                'endLine' => 1198,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertJsonIsObject' => [
                'name' => 'assertJsonIsObject',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1206,
                                'endLine' => 1206,
                                'startTokenPos' => 5145,
                                'startFilePos' => 34233,
                                'endTokenPos' => 5145,
                                'endFilePos' => 34236,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1206,
                        'endLine' => 1206,
                        'startColumn' => 40,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the given key is a JSON object.
 *
 * @param  string|null  $key
 * @return $this
 */',
                'startLine' => 1206,
                'endLine' => 1219,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'decodeResponseJson' => [
                'name' => 'decodeResponseJson',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Validate the decoded response JSON.
 *
 * @return \\Illuminate\\Testing\\AssertableJsonString
 *
 * @throws \\Throwable
 */',
                'startLine' => 1228,
                'endLine' => 1248,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'json' => [
                'name' => 'json',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1256,
                                'endLine' => 1256,
                                'startTokenPos' => 5382,
                                'startFilePos' => 35569,
                                'endTokenPos' => 5382,
                                'endFilePos' => 35572,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1256,
                        'endLine' => 1256,
                        'startColumn' => 26,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Return the decoded response JSON.
 *
 * @param  string|null  $key
 * @return mixed
 */',
                'startLine' => 1256,
                'endLine' => 1259,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'collect' => [
                'name' => 'collect',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1267,
                                'endLine' => 1267,
                                'startTokenPos' => 5415,
                                'startFilePos' => 35847,
                                'endTokenPos' => 5415,
                                'endFilePos' => 35850,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1267,
                        'endLine' => 1267,
                        'startColumn' => 29,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the decoded JSON body of the response as a collection.
 *
 * @param  string|null  $key
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 1267,
                'endLine' => 1270,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertViewIs' => [
                'name' => 'assertViewIs',
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
                        'startLine' => 1278,
                        'endLine' => 1278,
                        'startColumn' => 34,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the response view equals the given value.
 *
 * @param  string  $value
 * @return $this
 */',
                'startLine' => 1278,
                'endLine' => 1285,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertViewHas' => [
                'name' => 'assertViewHas',
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
                        'startLine' => 1294,
                        'endLine' => 1294,
                        'startColumn' => 35,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1294,
                                'endLine' => 1294,
                                'startTokenPos' => 5501,
                                'startFilePos' => 36480,
                                'endTokenPos' => 5501,
                                'endFilePos' => 36483,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1294,
                        'endLine' => 1294,
                        'startColumn' => 41,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the response view has a given piece of bound data.
 *
 * @param  string|array  $key
 * @param  mixed  $value
 * @return $this
 */',
                'startLine' => 1294,
                'endLine' => 1320,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertViewHasAll' => [
                'name' => 'assertViewHasAll',
                'parameters' => [
                    'bindings' => [
                        'name' => 'bindings',
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
                        'startLine' => 1328,
                        'endLine' => 1328,
                        'startColumn' => 38,
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
 * Assert that the response view has a given list of bound data.
 *
 * @param  array  $bindings
 * @return $this
 */',
                'startLine' => 1328,
                'endLine' => 1339,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'viewData' => [
                'name' => 'viewData',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1347,
                                'endLine' => 1347,
                                'startTokenPos' => 5914,
                                'startFilePos' => 38551,
                                'endTokenPos' => 5914,
                                'endFilePos' => 38554,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1347,
                        'endLine' => 1347,
                        'startColumn' => 30,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get a piece of data from the original view.
 *
 * @param  string|null  $key
 * @return mixed
 */',
                'startLine' => 1347,
                'endLine' => 1358,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertViewMissing' => [
                'name' => 'assertViewMissing',
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
                        'startLine' => 1366,
                        'endLine' => 1366,
                        'startColumn' => 39,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the response view is missing a piece of bound data.
 *
 * @param  string  $key
 * @return $this
 */',
                'startLine' => 1366,
                'endLine' => 1373,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'ensureResponseHasView' => [
                'name' => 'ensureResponseHasView',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Ensure that the response has a view as its original content.
 *
 * @return $this
 */',
                'startLine' => 1380,
                'endLine' => 1387,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'responseHasView' => [
                'name' => 'responseHasView',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the original response is a view.
 *
 * @return bool
 */',
                'startLine' => 1394,
                'endLine' => 1397,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertValid' => [
                'name' => 'assertValid',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1407,
                                'endLine' => 1407,
                                'startTokenPos' => 6117,
                                'startFilePos' => 39930,
                                'endTokenPos' => 6117,
                                'endFilePos' => 39933,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1407,
                        'endLine' => 1407,
                        'startColumn' => 33,
                        'endColumn' => 44,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'errorBag' => [
                        'name' => 'errorBag',
                        'default' => [
                            'code' => '\'default\'',
                            'attributes' => [
                                'startLine' => 1407,
                                'endLine' => 1407,
                                'startTokenPos' => 6124,
                                'startFilePos' => 39948,
                                'endTokenPos' => 6124,
                                'endFilePos' => 39956,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1407,
                        'endLine' => 1407,
                        'startColumn' => 47,
                        'endColumn' => 67,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'responseKey' => [
                        'name' => 'responseKey',
                        'default' => [
                            'code' => '\'errors\'',
                            'attributes' => [
                                'startLine' => 1407,
                                'endLine' => 1407,
                                'startTokenPos' => 6131,
                                'startFilePos' => 39974,
                                'endTokenPos' => 6131,
                                'endFilePos' => 39981,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1407,
                        'endLine' => 1407,
                        'startColumn' => 70,
                        'endColumn' => 92,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the given keys do not have validation errors.
 *
 * @param  string|array|null  $keys
 * @param  string  $errorBag
 * @param  string  $responseKey
 * @return $this
 */',
                'startLine' => 1407,
                'endLine' => 1440,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertInvalid' => [
                'name' => 'assertInvalid',
                'parameters' => [
                    'errors' => [
                        'name' => 'errors',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1450,
                                'endLine' => 1450,
                                'startTokenPos' => 6389,
                                'startFilePos' => 41327,
                                'endTokenPos' => 6389,
                                'endFilePos' => 41330,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1450,
                        'endLine' => 1450,
                        'startColumn' => 35,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'errorBag' => [
                        'name' => 'errorBag',
                        'default' => [
                            'code' => '\'default\'',
                            'attributes' => [
                                'startLine' => 1451,
                                'endLine' => 1451,
                                'startTokenPos' => 6396,
                                'startFilePos' => 41379,
                                'endTokenPos' => 6396,
                                'endFilePos' => 41387,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1451,
                        'endLine' => 1451,
                        'startColumn' => 35,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'responseKey' => [
                        'name' => 'responseKey',
                        'default' => [
                            'code' => '\'errors\'',
                            'attributes' => [
                                'startLine' => 1452,
                                'endLine' => 1452,
                                'startTokenPos' => 6403,
                                'startFilePos' => 41439,
                                'endTokenPos' => 6403,
                                'endFilePos' => 41446,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1452,
                        'endLine' => 1452,
                        'startColumn' => 35,
                        'endColumn' => 57,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the response has the given validation errors.
 *
 * @param  string|array|null  $errors
 * @param  string  $errorBag
 * @param  string  $responseKey
 * @return $this
 */',
                'startLine' => 1450,
                'endLine' => 1496,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertOnlyInvalid' => [
                'name' => 'assertOnlyInvalid',
                'parameters' => [
                    'errors' => [
                        'name' => 'errors',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1506,
                                'endLine' => 1506,
                                'startTokenPos' => 6737,
                                'startFilePos' => 43547,
                                'endTokenPos' => 6737,
                                'endFilePos' => 43550,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1506,
                        'endLine' => 1506,
                        'startColumn' => 39,
                        'endColumn' => 52,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'errorBag' => [
                        'name' => 'errorBag',
                        'default' => [
                            'code' => '\'default\'',
                            'attributes' => [
                                'startLine' => 1506,
                                'endLine' => 1506,
                                'startTokenPos' => 6744,
                                'startFilePos' => 43565,
                                'endTokenPos' => 6744,
                                'endFilePos' => 43573,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1506,
                        'endLine' => 1506,
                        'startColumn' => 55,
                        'endColumn' => 75,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'responseKey' => [
                        'name' => 'responseKey',
                        'default' => [
                            'code' => '\'errors\'',
                            'attributes' => [
                                'startLine' => 1506,
                                'endLine' => 1506,
                                'startTokenPos' => 6751,
                                'startFilePos' => 43591,
                                'endTokenPos' => 6751,
                                'endFilePos' => 43598,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1506,
                        'endLine' => 1506,
                        'startColumn' => 78,
                        'endColumn' => 100,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the response has the given validation errors but does not have any other validation errors.
 *
 * @param  string|array|null  $errors
 * @param  string  $errorBag
 * @param  string  $responseKey
 * @return $this
 */',
                'startLine' => 1506,
                'endLine' => 1530,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertSessionHas' => [
                'name' => 'assertSessionHas',
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
                        'startLine' => 1539,
                        'endLine' => 1539,
                        'startColumn' => 38,
                        'endColumn' => 41,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1539,
                                'endLine' => 1539,
                                'startTokenPos' => 6973,
                                'startFilePos' => 44671,
                                'endTokenPos' => 6973,
                                'endFilePos' => 44674,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1539,
                        'endLine' => 1539,
                        'startColumn' => 44,
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
 * Assert that the session has a given value.
 *
 * @param  string|array  $key
 * @param  mixed  $value
 * @return $this
 */',
                'startLine' => 1539,
                'endLine' => 1557,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertSessionHasAll' => [
                'name' => 'assertSessionHasAll',
                'parameters' => [
                    'bindings' => [
                        'name' => 'bindings',
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
                        'startLine' => 1565,
                        'endLine' => 1565,
                        'startColumn' => 41,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the session has a given list of values.
 *
 * @param  array  $bindings
 * @return $this
 */',
                'startLine' => 1565,
                'endLine' => 1586,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertSessionHasInput' => [
                'name' => 'assertSessionHasInput',
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
                        'startLine' => 1595,
                        'endLine' => 1595,
                        'startColumn' => 43,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1595,
                                'endLine' => 1595,
                                'startTokenPos' => 7307,
                                'startFilePos' => 46290,
                                'endTokenPos' => 7307,
                                'endFilePos' => 46293,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1595,
                        'endLine' => 1595,
                        'startColumn' => 49,
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
 * Assert that the session has a given value in the flashed input array.
 *
 * @param  string|array  $key
 * @param  mixed  $value
 * @return $this
 */',
                'startLine' => 1595,
                'endLine' => 1621,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertSessionHasErrors' => [
                'name' => 'assertSessionHasErrors',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1631,
                                'endLine' => 1631,
                                'startTokenPos' => 7521,
                                'startFilePos' => 47377,
                                'endTokenPos' => 7522,
                                'endFilePos' => 47378,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1631,
                        'endLine' => 1631,
                        'startColumn' => 44,
                        'endColumn' => 53,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'format' => [
                        'name' => 'format',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1631,
                                'endLine' => 1631,
                                'startTokenPos' => 7529,
                                'startFilePos' => 47391,
                                'endTokenPos' => 7529,
                                'endFilePos' => 47394,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1631,
                        'endLine' => 1631,
                        'startColumn' => 56,
                        'endColumn' => 69,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'errorBag' => [
                        'name' => 'errorBag',
                        'default' => [
                            'code' => '\'default\'',
                            'attributes' => [
                                'startLine' => 1631,
                                'endLine' => 1631,
                                'startTokenPos' => 7536,
                                'startFilePos' => 47409,
                                'endTokenPos' => 7536,
                                'endFilePos' => 47417,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1631,
                        'endLine' => 1631,
                        'startColumn' => 72,
                        'endColumn' => 92,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the session has the given errors.
 *
 * @param  string|array  $keys
 * @param  mixed  $format
 * @param  string  $errorBag
 * @return $this
 */',
                'startLine' => 1631,
                'endLine' => 1648,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertSessionDoesntHaveErrors' => [
                'name' => 'assertSessionDoesntHaveErrors',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1658,
                                'endLine' => 1658,
                                'startTokenPos' => 7696,
                                'startFilePos' => 48238,
                                'endTokenPos' => 7697,
                                'endFilePos' => 48239,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1658,
                        'endLine' => 1658,
                        'startColumn' => 51,
                        'endColumn' => 60,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'format' => [
                        'name' => 'format',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1658,
                                'endLine' => 1658,
                                'startTokenPos' => 7704,
                                'startFilePos' => 48252,
                                'endTokenPos' => 7704,
                                'endFilePos' => 48255,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1658,
                        'endLine' => 1658,
                        'startColumn' => 63,
                        'endColumn' => 76,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'errorBag' => [
                        'name' => 'errorBag',
                        'default' => [
                            'code' => '\'default\'',
                            'attributes' => [
                                'startLine' => 1658,
                                'endLine' => 1658,
                                'startTokenPos' => 7711,
                                'startFilePos' => 48270,
                                'endTokenPos' => 7711,
                                'endFilePos' => 48278,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1658,
                        'endLine' => 1658,
                        'startColumn' => 79,
                        'endColumn' => 99,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the session is missing the given errors.
 *
 * @param  string|array  $keys
 * @param  string|null  $format
 * @param  string  $errorBag
 * @return $this
 */',
                'startLine' => 1658,
                'endLine' => 1683,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertSessionHasNoErrors' => [
                'name' => 'assertSessionHasNoErrors',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the session has no errors.
 *
 * @return $this
 */',
                'startLine' => 1690,
                'endLine' => 1715,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertSessionHasErrorsIn' => [
                'name' => 'assertSessionHasErrorsIn',
                'parameters' => [
                    'errorBag' => [
                        'name' => 'errorBag',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1725,
                        'endLine' => 1725,
                        'startColumn' => 46,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'keys' => [
                        'name' => 'keys',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1725,
                                'endLine' => 1725,
                                'startTokenPos' => 8116,
                                'startFilePos' => 50296,
                                'endTokenPos' => 8117,
                                'endFilePos' => 50297,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1725,
                        'endLine' => 1725,
                        'startColumn' => 57,
                        'endColumn' => 66,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'format' => [
                        'name' => 'format',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1725,
                                'endLine' => 1725,
                                'startTokenPos' => 8124,
                                'startFilePos' => 50310,
                                'endTokenPos' => 8124,
                                'endFilePos' => 50313,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1725,
                        'endLine' => 1725,
                        'startColumn' => 69,
                        'endColumn' => 82,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Assert that the session has the given errors.
 *
 * @param  string  $errorBag
 * @param  string|array  $keys
 * @param  mixed  $format
 * @return $this
 */',
                'startLine' => 1725,
                'endLine' => 1728,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'assertSessionMissing' => [
                'name' => 'assertSessionMissing',
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
                        'startLine' => 1737,
                        'endLine' => 1737,
                        'startColumn' => 42,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1737,
                                'endLine' => 1737,
                                'startTokenPos' => 8162,
                                'startFilePos' => 50623,
                                'endTokenPos' => 8162,
                                'endFilePos' => 50626,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1737,
                        'endLine' => 1737,
                        'startColumn' => 48,
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
 * Assert that the session does not have a given key.
 *
 * @param  string|array  $key
 * @param  mixed  $value
 * @return $this
 */',
                'startLine' => 1737,
                'endLine' => 1759,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'session' => [
                'name' => 'session',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the current session store.
 *
 * @return \\Illuminate\\Session\\Store
 */',
                'startLine' => 1766,
                'endLine' => 1775,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'ddHeaders' => [
                'name' => 'ddHeaders',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dump the headers from the response and end the script.
 *
 * @return never
 */',
                'startLine' => 1782,
                'endLine' => 1787,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'ddBody' => [
                'name' => 'ddBody',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1795,
                                'endLine' => 1795,
                                'startTokenPos' => 8421,
                                'startFilePos' => 51965,
                                'endTokenPos' => 8421,
                                'endFilePos' => 51968,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1795,
                        'endLine' => 1795,
                        'startColumn' => 28,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dump the body of the response and end the script.
 *
 * @param  string|null  $key
 * @return never
 */',
                'startLine' => 1795,
                'endLine' => 1804,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'ddJson' => [
                'name' => 'ddJson',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1812,
                                'endLine' => 1812,
                                'startTokenPos' => 8478,
                                'startFilePos' => 52305,
                                'endTokenPos' => 8478,
                                'endFilePos' => 52308,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1812,
                        'endLine' => 1812,
                        'startColumn' => 28,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dump the JSON payload from the response and end the script.
 *
 * @param  string|null  $key
 * @return never
 */',
                'startLine' => 1812,
                'endLine' => 1815,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'ddSession' => [
                'name' => 'ddSession',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1823,
                                'endLine' => 1823,
                                'startTokenPos' => 8508,
                                'startFilePos' => 52534,
                                'endTokenPos' => 8509,
                                'endFilePos' => 52535,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1823,
                        'endLine' => 1823,
                        'startColumn' => 31,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dump the session from the response and end the script.
 *
 * @param  string|array  $keys
 * @return never
 */',
                'startLine' => 1823,
                'endLine' => 1828,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'dump' => [
                'name' => 'dump',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1836,
                                'endLine' => 1836,
                                'startTokenPos' => 8542,
                                'startFilePos' => 52756,
                                'endTokenPos' => 8542,
                                'endFilePos' => 52759,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1836,
                        'endLine' => 1836,
                        'startColumn' => 26,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dump the content from the response.
 *
 * @param  string|null  $key
 * @return $this
 */',
                'startLine' => 1836,
                'endLine' => 1853,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'dumpHeaders' => [
                'name' => 'dumpHeaders',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dump the headers from the response.
 *
 * @return $this
 */',
                'startLine' => 1860,
                'endLine' => 1865,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'dumpSession' => [
                'name' => 'dumpSession',
                'parameters' => [
                    'keys' => [
                        'name' => 'keys',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 1873,
                                'endLine' => 1873,
                                'startTokenPos' => 8680,
                                'startFilePos' => 53459,
                                'endTokenPos' => 8681,
                                'endFilePos' => 53460,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1873,
                        'endLine' => 1873,
                        'startColumn' => 33,
                        'endColumn' => 42,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dump the session from the response.
 *
 * @param  string|array  $keys
 * @return $this
 */',
                'startLine' => 1873,
                'endLine' => 1884,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'streamedContent' => [
                'name' => 'streamedContent',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the streamed content from the response.
 *
 * @return string
 */',
                'startLine' => 1891,
                'endLine' => 1913,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'withExceptions' => [
                'name' => 'withExceptions',
                'parameters' => [
                    'exceptions' => [
                        'name' => 'exceptions',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Support\\Collection',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1921,
                        'endLine' => 1921,
                        'startColumn' => 36,
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
 * Set the previous exceptions on the response.
 *
 * @param  \\Illuminate\\Support\\Collection  $exceptions
 * @return $this
 */',
                'startLine' => 1921,
                'endLine' => 1926,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            '__get' => [
                'name' => '__get',
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
                        'startLine' => 1934,
                        'endLine' => 1934,
                        'startColumn' => 27,
                        'endColumn' => 30,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dynamically access base response parameters.
 *
 * @param  string  $key
 * @return mixed
 */',
                'startLine' => 1934,
                'endLine' => 1937,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            '__isset' => [
                'name' => '__isset',
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
                        'startLine' => 1945,
                        'endLine' => 1945,
                        'startColumn' => 29,
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
 * Proxy isset() checks to the underlying base response.
 *
 * @param  string  $key
 * @return bool
 */',
                'startLine' => 1945,
                'endLine' => 1948,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'offsetExists' => [
                'name' => 'offsetExists',
                'parameters' => [
                    'offset' => [
                        'name' => 'offset',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1956,
                        'endLine' => 1956,
                        'startColumn' => 34,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
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
 * Determine if the given offset exists.
 *
 * @param  string  $offset
 * @return bool
 */',
                'startLine' => 1956,
                'endLine' => 1961,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'offsetGet' => [
                'name' => 'offsetGet',
                'parameters' => [
                    'offset' => [
                        'name' => 'offset',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1969,
                        'endLine' => 1969,
                        'startColumn' => 31,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'mixed',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the value for a given offset.
 *
 * @param  string  $offset
 * @return mixed
 */',
                'startLine' => 1969,
                'endLine' => 1974,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'offsetSet' => [
                'name' => 'offsetSet',
                'parameters' => [
                    'offset' => [
                        'name' => 'offset',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1985,
                        'endLine' => 1985,
                        'startColumn' => 31,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1985,
                        'endLine' => 1985,
                        'startColumn' => 40,
                        'endColumn' => 45,
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
 * Set the value at the given offset.
 *
 * @param  string  $offset
 * @param  mixed  $value
 * @return void
 *
 * @throws \\LogicException
 */',
                'startLine' => 1985,
                'endLine' => 1988,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
            'offsetUnset' => [
                'name' => 'offsetUnset',
                'parameters' => [
                    'offset' => [
                        'name' => 'offset',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 1998,
                        'endLine' => 1998,
                        'startColumn' => 33,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
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
 * Unset the value at the given offset.
 *
 * @param  string  $offset
 * @return void
 *
 * @throws \\LogicException
 */',
                'startLine' => 1998,
                'endLine' => 2001,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
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
                        'startLine' => 2010,
                        'endLine' => 2010,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'args' => [
                        'name' => 'args',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2010,
                        'endLine' => 2010,
                        'startColumn' => 37,
                        'endColumn' => 41,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Handle dynamic calls into macros or pass missing methods to the base response.
 *
 * @param  string  $method
 * @param  array  $args
 * @return mixed
 */',
                'startLine' => 2010,
                'endLine' => 2017,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Testing',
                'declaringClassName' => 'Illuminate\\Testing\\TestResponse',
                'implementingClassName' => 'Illuminate\\Testing\\TestResponse',
                'currentClassName' => 'Illuminate\\Testing\\TestResponse',
                'aliasName' => null,
            ],
        ],
        'traitsData' => [
            'aliases' => [
                'Illuminate\\Testing\\Concerns\\AssertsStatusCodes' => [
                    0 => [
                        'alias' => 'macroCall',
                        'method' => '__call',
                        'hash' => 'illuminate\\testing\\concerns\\assertsstatuscodes::__call',
                    ],
                ],
                'Illuminate\\Support\\Traits\\Conditionable' => [
                    0 => [
                        'alias' => 'macroCall',
                        'method' => '__call',
                        'hash' => 'illuminate\\support\\traits\\conditionable::__call',
                    ],
                ],
                'Illuminate\\Support\\Traits\\Dumpable' => [
                    0 => [
                        'alias' => 'macroCall',
                        'method' => '__call',
                        'hash' => 'illuminate\\support\\traits\\dumpable::__call',
                    ],
                ],
                'Illuminate\\Support\\Traits\\Tappable' => [
                    0 => [
                        'alias' => 'macroCall',
                        'method' => '__call',
                        'hash' => 'illuminate\\support\\traits\\tappable::__call',
                    ],
                ],
                'Illuminate\\Support\\Traits\\Macroable' => [
                    0 => [
                        'alias' => 'macroCall',
                        'method' => '__call',
                        'hash' => 'illuminate\\support\\traits\\macroable::__call',
                    ],
                ],
            ],
            'modifiers' => [
            ],
            'precedences' => [
            ],
            'hashes' => [
                'illuminate\\testing\\concerns\\assertsstatuscodes::__call' => 'Illuminate\\Testing\\Concerns\\AssertsStatusCodes::__call',
                'illuminate\\support\\traits\\conditionable::__call' => 'Illuminate\\Support\\Traits\\Conditionable::__call',
                'illuminate\\support\\traits\\dumpable::__call' => 'Illuminate\\Support\\Traits\\Dumpable::__call',
                'illuminate\\support\\traits\\tappable::__call' => 'Illuminate\\Support\\Traits\\Tappable::__call',
                'illuminate\\support\\traits\\macroable::__call' => 'Illuminate\\Support\\Traits\\Macroable::__call',
            ],
        ],
    ],
]);
