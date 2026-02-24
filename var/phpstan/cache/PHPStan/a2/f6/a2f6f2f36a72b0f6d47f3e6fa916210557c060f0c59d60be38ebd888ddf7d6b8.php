<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Http/Client/Response.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Http\Client\Response
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-86423053bd449cbe4e0bfcb202bc844e3a16ef27f3be9193b0b1926aa3185cfd-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Http\\Client\\Response',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Http/Client/Response.php',
            ],
        ],
        'namespace' => 'Illuminate\\Http\\Client',
        'name' => 'Illuminate\\Http\\Client\\Response',
        'shortName' => 'Response',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * @mixin \\Psr\\Http\\Message\\ResponseInterface
 */',
        'attributes' => [
        ],
        'startLine' => 17,
        'endLine' => 610,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
            0 => 'ArrayAccess',
            1 => 'Stringable',
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Http\\Client\\Concerns\\DeterminesStatusCode',
            1 => 'Illuminate\\Support\\Traits\\Tappable',
            2 => 'Illuminate\\Support\\Traits\\Macroable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'response' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'name' => 'response',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The underlying PSR response.
 *
 * @var \\Psr\\Http\\Message\\ResponseInterface
 */',
                'attributes' => [
                ],
                'startLine' => 28,
                'endLine' => 28,
                'startColumn' => 5,
                'endColumn' => 24,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'decoded' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'name' => 'decoded',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The decoded JSON response.
 *
 * @var array
 */',
                'attributes' => [
                ],
                'startLine' => 35,
                'endLine' => 35,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'decodingFlags' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'name' => 'decodingFlags',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => '/**
 * The flags that were used when decoding the JSON response.
 *
 * @var int-mask<JSON_BIGINT_AS_STRING, JSON_INVALID_UTF8_IGNORE, JSON_INVALID_UTF8_SUBSTITUTE, JSON_OBJECT_AS_ARRAY, JSON_THROW_ON_ERROR>
 */',
                'attributes' => [
                ],
                'startLine' => 42,
                'endLine' => 42,
                'startColumn' => 5,
                'endColumn' => 33,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'cookies' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'name' => 'cookies',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The request cookies.
 *
 * @var \\GuzzleHttp\\Cookie\\CookieJar
 */',
                'attributes' => [
                ],
                'startLine' => 49,
                'endLine' => 49,
                'startColumn' => 5,
                'endColumn' => 20,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'transferStats' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'name' => 'transferStats',
                'modifiers' => 1,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The transfer stats for the request.
 *
 * @var \\GuzzleHttp\\TransferStats|null
 */',
                'attributes' => [
                ],
                'startLine' => 56,
                'endLine' => 56,
                'startColumn' => 5,
                'endColumn' => 26,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'truncateExceptionsAt' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'name' => 'truncateExceptionsAt',
                'modifiers' => 2,
                'type' => null,
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 63,
                        'endLine' => 63,
                        'startTokenPos' => 128,
                        'startFilePos' => 1392,
                        'endTokenPos' => 128,
                        'endFilePos' => 1395,
                    ],
                ],
                'docComment' => '/**
 * The length at which request exceptions will be truncated.
 *
 * @var int<1, max>|false|null
 */',
                'attributes' => [
                ],
                'startLine' => 63,
                'endLine' => 63,
                'startColumn' => 5,
                'endColumn' => 43,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'defaultJsonDecodingFlags' => [
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'name' => 'defaultJsonDecodingFlags',
                'modifiers' => 17,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '0',
                    'attributes' => [
                        'startLine' => 70,
                        'endLine' => 70,
                        'startTokenPos' => 143,
                        'startFilePos' => 1668,
                        'endTokenPos' => 143,
                        'endFilePos' => 1668,
                    ],
                ],
                'docComment' => '/**
 * The flags passed to `json_decode` by default.
 *
 * @var int-mask<JSON_BIGINT_AS_STRING, JSON_INVALID_UTF8_IGNORE, JSON_INVALID_UTF8_SUBSTITUTE, JSON_OBJECT_AS_ARRAY, JSON_THROW_ON_ERROR>
 */',
                'attributes' => [
                ],
                'startLine' => 70,
                'endLine' => 70,
                'startColumn' => 5,
                'endColumn' => 52,
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
                        'startLine' => 77,
                        'endLine' => 77,
                        'startColumn' => 33,
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
 * Create a new response instance.
 *
 * @param  \\Psr\\Http\\Message\\MessageInterface  $response
 */',
                'startLine' => 77,
                'endLine' => 80,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'body' => [
                'name' => 'body',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the body of the response.
 *
 * @return string
 */',
                'startLine' => 87,
                'endLine' => 90,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
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
                                'startLine' => 100,
                                'endLine' => 100,
                                'startTokenPos' => 209,
                                'startFilePos' => 2439,
                                'endTokenPos' => 209,
                                'endFilePos' => 2442,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 100,
                        'endLine' => 100,
                        'startColumn' => 26,
                        'endColumn' => 36,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 100,
                                'endLine' => 100,
                                'startTokenPos' => 216,
                                'startFilePos' => 2456,
                                'endTokenPos' => 216,
                                'endFilePos' => 2459,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 100,
                        'endLine' => 100,
                        'startColumn' => 39,
                        'endColumn' => 53,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'flags' => [
                        'name' => 'flags',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 100,
                                'endLine' => 100,
                                'startTokenPos' => 223,
                                'startFilePos' => 2471,
                                'endTokenPos' => 223,
                                'endFilePos' => 2474,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 100,
                        'endLine' => 100,
                        'startColumn' => 56,
                        'endColumn' => 68,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the decoded JSON body of the response as an array or scalar value.
 *
 * @param  string|null  $key
 * @param  mixed  $default
 * @param  int-mask<JSON_BIGINT_AS_STRING, JSON_INVALID_UTF8_IGNORE, JSON_INVALID_UTF8_SUBSTITUTE, JSON_OBJECT_AS_ARRAY, JSON_THROW_ON_ERROR>|null  $flags
 * @return mixed
 */',
                'startLine' => 100,
                'endLine' => 117,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'object' => [
                'name' => 'object',
                'parameters' => [
                    'flags' => [
                        'name' => 'flags',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 125,
                                'endLine' => 125,
                                'startTokenPos' => 362,
                                'startFilePos' => 3254,
                                'endTokenPos' => 362,
                                'endFilePos' => 3257,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 125,
                        'endLine' => 125,
                        'startColumn' => 28,
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
 * Get the decoded JSON body of the response as an object.
 *
 * @param  int-mask<JSON_BIGINT_AS_STRING, JSON_INVALID_UTF8_IGNORE, JSON_INVALID_UTF8_SUBSTITUTE, JSON_OBJECT_AS_ARRAY, JSON_THROW_ON_ERROR>|null  $flags
 * @return object|null
 */',
                'startLine' => 125,
                'endLine' => 128,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
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
                                'startLine' => 137,
                                'endLine' => 137,
                                'startTokenPos' => 408,
                                'startFilePos' => 3735,
                                'endTokenPos' => 408,
                                'endFilePos' => 3738,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 137,
                        'endLine' => 137,
                        'startColumn' => 29,
                        'endColumn' => 39,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'flags' => [
                        'name' => 'flags',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 137,
                                'endLine' => 137,
                                'startTokenPos' => 415,
                                'startFilePos' => 3750,
                                'endTokenPos' => 415,
                                'endFilePos' => 3753,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 137,
                        'endLine' => 137,
                        'startColumn' => 42,
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
 * Get the decoded JSON body of the response as a collection.
 *
 * @param  string|null  $key
 * @param  int-mask<JSON_BIGINT_AS_STRING, JSON_INVALID_UTF8_IGNORE, JSON_INVALID_UTF8_SUBSTITUTE, JSON_OBJECT_AS_ARRAY, JSON_THROW_ON_ERROR>|null  $flags
 * @return \\Illuminate\\Support\\Collection
 */',
                'startLine' => 137,
                'endLine' => 140,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'fluent' => [
                'name' => 'fluent',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 149,
                                'endLine' => 149,
                                'startTokenPos' => 455,
                                'startFilePos' => 4194,
                                'endTokenPos' => 455,
                                'endFilePos' => 4197,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 149,
                        'endLine' => 149,
                        'startColumn' => 28,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'flags' => [
                        'name' => 'flags',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 149,
                                'endLine' => 149,
                                'startTokenPos' => 462,
                                'startFilePos' => 4209,
                                'endTokenPos' => 462,
                                'endFilePos' => 4212,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 149,
                        'endLine' => 149,
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
 * Get the decoded JSON body of the response as a fluent object.
 *
 * @param  string|null  $key
 * @param  int-mask<JSON_BIGINT_AS_STRING, JSON_INVALID_UTF8_IGNORE, JSON_INVALID_UTF8_SUBSTITUTE, JSON_OBJECT_AS_ARRAY, JSON_THROW_ON_ERROR>|null  $flags
 * @return \\Illuminate\\Support\\Fluent
 */',
                'startLine' => 149,
                'endLine' => 152,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'resource' => [
                'name' => 'resource',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the body of the response as a PHP resource.
 *
 * @return resource
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 161,
                'endLine' => 164,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'header' => [
                'name' => 'header',
                'parameters' => [
                    'header' => [
                        'name' => 'header',
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
                        'startLine' => 172,
                        'endLine' => 172,
                        'startColumn' => 28,
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
 * Get a header from the response.
 *
 * @param  string  $header
 * @return string
 */',
                'startLine' => 172,
                'endLine' => 175,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'headers' => [
                'name' => 'headers',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the headers from the response.
 *
 * @return array
 */',
                'startLine' => 182,
                'endLine' => 185,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'status' => [
                'name' => 'status',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the status code of the response.
 *
 * @return int
 */',
                'startLine' => 192,
                'endLine' => 195,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'reason' => [
                'name' => 'reason',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the reason phrase of the response.
 *
 * @return string
 */',
                'startLine' => 202,
                'endLine' => 205,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'effectiveUri' => [
                'name' => 'effectiveUri',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the effective URI of the response.
 *
 * @return \\Psr\\Http\\Message\\UriInterface|null
 */',
                'startLine' => 212,
                'endLine' => 215,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'successful' => [
                'name' => 'successful',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the request was successful.
 *
 * @return bool
 */',
                'startLine' => 222,
                'endLine' => 225,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'redirect' => [
                'name' => 'redirect',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the response was a redirect.
 *
 * @return bool
 */',
                'startLine' => 232,
                'endLine' => 235,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'failed' => [
                'name' => 'failed',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the response indicates a client or server error occurred.
 *
 * @return bool
 */',
                'startLine' => 242,
                'endLine' => 245,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'clientError' => [
                'name' => 'clientError',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the response indicates a client error occurred.
 *
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
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'serverError' => [
                'name' => 'serverError',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Determine if the response indicates a server error occurred.
 *
 * @return bool
 */',
                'startLine' => 262,
                'endLine' => 265,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'onError' => [
                'name' => 'onError',
                'parameters' => [
                    'callback' => [
                        'name' => 'callback',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'callable',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 273,
                        'endLine' => 273,
                        'startColumn' => 29,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Execute the given callback if there was a server or client error.
 *
 * @param  callable|(\\Closure(\\Illuminate\\Http\\Client\\Response): mixed)  $callback
 * @return $this
 */',
                'startLine' => 273,
                'endLine' => 280,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'cookies' => [
                'name' => 'cookies',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the response cookies.
 *
 * @return \\GuzzleHttp\\Cookie\\CookieJar
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
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'handlerStats' => [
                'name' => 'handlerStats',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the handler stats of the response.
 *
 * @return array
 */',
                'startLine' => 297,
                'endLine' => 300,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'close' => [
                'name' => 'close',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Close the stream and any underlying resources.
 *
 * @return $this
 */',
                'startLine' => 307,
                'endLine' => 312,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'toPsrResponse' => [
                'name' => 'toPsrResponse',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the underlying PSR response for the response.
 *
 * @return \\Psr\\Http\\Message\\ResponseInterface
 */',
                'startLine' => 319,
                'endLine' => 322,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'toException' => [
                'name' => 'toException',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create an exception if a server or client error occurred.
 *
 * @return \\Illuminate\\Http\\Client\\RequestException|null
 */',
                'startLine' => 329,
                'endLine' => 334,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'throw' => [
                'name' => 'throw',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Throw an exception if a server or client error occurred.
 *
 * @return $this
 *
 * @throws \\Illuminate\\Http\\Client\\RequestException
 */',
                'startLine' => 343,
                'endLine' => 356,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'throwIf' => [
                'name' => 'throwIf',
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
                        'startLine' => 366,
                        'endLine' => 366,
                        'startColumn' => 29,
                        'endColumn' => 38,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Throw an exception if a server or client error occurred and the given condition evaluates to true.
 *
 * @param  \\Closure|bool  $condition
 * @return $this
 *
 * @throws \\Illuminate\\Http\\Client\\RequestException
 */',
                'startLine' => 366,
                'endLine' => 369,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'throwUnless' => [
                'name' => 'throwUnless',
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
                        'startLine' => 379,
                        'endLine' => 379,
                        'startColumn' => 33,
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
 * Throw an exception if a server or client error occurred and the given condition evaluates to false.
 *
 * @param  \\Closure|bool  $condition
 * @return $this
 *
 * @throws \\Illuminate\\Http\\Client\\RequestException
 */',
                'startLine' => 379,
                'endLine' => 382,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'throwIfStatus' => [
                'name' => 'throwIfStatus',
                'parameters' => [
                    'statusCode' => [
                        'name' => 'statusCode',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 392,
                        'endLine' => 392,
                        'startColumn' => 35,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Throw an exception if the response status code matches the given code.
 *
 * @param  int|(\\Closure(int, \\Illuminate\\Http\\Client\\Response): bool)|callable  $statusCode
 * @return $this
 *
 * @throws \\Illuminate\\Http\\Client\\RequestException
 */',
                'startLine' => 392,
                'endLine' => 400,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'throwUnlessStatus' => [
                'name' => 'throwUnlessStatus',
                'parameters' => [
                    'statusCode' => [
                        'name' => 'statusCode',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 410,
                        'endLine' => 410,
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
 * Throw an exception unless the response status code matches the given code.
 *
 * @param  int|(\\Closure(int, \\Illuminate\\Http\\Client\\Response): bool)|callable  $statusCode
 * @return $this
 *
 * @throws \\Illuminate\\Http\\Client\\RequestException
 */',
                'startLine' => 410,
                'endLine' => 417,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'throwIfClientError' => [
                'name' => 'throwIfClientError',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Throw an exception if the response status code is a 4xx level code.
 *
 * @return $this
 *
 * @throws \\Illuminate\\Http\\Client\\RequestException
 */',
                'startLine' => 426,
                'endLine' => 429,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'throwIfServerError' => [
                'name' => 'throwIfServerError',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Throw an exception if the response status code is a 5xx level code.
 *
 * @return $this
 *
 * @throws \\Illuminate\\Http\\Client\\RequestException
 */',
                'startLine' => 438,
                'endLine' => 441,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'truncateExceptionsAt' => [
                'name' => 'truncateExceptionsAt',
                'parameters' => [
                    'length' => [
                        'name' => 'length',
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
                        'startLine' => 449,
                        'endLine' => 449,
                        'startColumn' => 42,
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
 * Indicate that request exceptions should be truncated to the given length.
 *
 * @param  int<1, max>  $length
 * @return $this
 */',
                'startLine' => 449,
                'endLine' => 454,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'dontTruncateExceptions' => [
                'name' => 'dontTruncateExceptions',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Indicate that request exceptions should not be truncated.
 *
 * @return $this
 */',
                'startLine' => 461,
                'endLine' => 466,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
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
                                'startLine' => 474,
                                'endLine' => 474,
                                'startTokenPos' => 1523,
                                'startFilePos' => 11948,
                                'endTokenPos' => 1523,
                                'endFilePos' => 11951,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 474,
                        'endLine' => 474,
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
                'startLine' => 474,
                'endLine' => 491,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'dd' => [
                'name' => 'dd',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 499,
                                'endLine' => 499,
                                'startTokenPos' => 1630,
                                'startFilePos' => 12458,
                                'endTokenPos' => 1630,
                                'endFilePos' => 12461,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 499,
                        'endLine' => 499,
                        'startColumn' => 24,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Dump the content from the response and end the script.
 *
 * @param  string|null  $key
 * @return never
 */',
                'startLine' => 499,
                'endLine' => 504,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
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
                'startLine' => 511,
                'endLine' => 516,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
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
                'startLine' => 523,
                'endLine' => 528,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
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
                        'startLine' => 536,
                        'endLine' => 536,
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
                'startLine' => 536,
                'endLine' => 539,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
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
                        'startLine' => 547,
                        'endLine' => 547,
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
                'startLine' => 547,
                'endLine' => 550,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
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
                        'startLine' => 561,
                        'endLine' => 561,
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
                        'startLine' => 561,
                        'endLine' => 561,
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
                'startLine' => 561,
                'endLine' => 564,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
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
                        'startLine' => 574,
                        'endLine' => 574,
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
                'startLine' => 574,
                'endLine' => 577,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            '__toString' => [
                'name' => '__toString',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the body of the response.
 *
 * @return string
 */',
                'startLine' => 584,
                'endLine' => 587,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
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
                        'startLine' => 596,
                        'endLine' => 596,
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
                        'startLine' => 596,
                        'endLine' => 596,
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
 * Dynamically proxy other methods to the underlying response.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */',
                'startLine' => 596,
                'endLine' => 601,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
            'flushState' => [
                'name' => 'flushState',
                'parameters' => [
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
 * Flush the global state of the Response.
 */',
                'startLine' => 606,
                'endLine' => 609,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Illuminate\\Http\\Client',
                'declaringClassName' => 'Illuminate\\Http\\Client\\Response',
                'implementingClassName' => 'Illuminate\\Http\\Client\\Response',
                'currentClassName' => 'Illuminate\\Http\\Client\\Response',
                'aliasName' => null,
            ],
        ],
        'traitsData' => [
            'aliases' => [
                'Illuminate\\Http\\Client\\Concerns\\DeterminesStatusCode' => [
                    0 => [
                        'alias' => 'macroCall',
                        'method' => '__call',
                        'hash' => 'illuminate\\http\\client\\concerns\\determinesstatuscode::__call',
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
                'illuminate\\http\\client\\concerns\\determinesstatuscode::__call' => 'Illuminate\\Http\\Client\\Concerns\\DeterminesStatusCode::__call',
                'illuminate\\support\\traits\\tappable::__call' => 'Illuminate\\Support\\Traits\\Tappable::__call',
                'illuminate\\support\\traits\\macroable::__call' => 'Illuminate\\Support\\Traits\\Macroable::__call',
            ],
        ],
    ],
]);
