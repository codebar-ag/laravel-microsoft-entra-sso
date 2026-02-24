<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Routing/UrlGenerator.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Contracts\Routing\UrlGenerator
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-0aa3131d4e2823520d7832c7d6d875efefd9de6ce9789e0c1306059f99c14465-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Contracts/Routing/UrlGenerator.php',
            ],
        ],
        'namespace' => 'Illuminate\\Contracts\\Routing',
        'name' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
        'shortName' => 'UrlGenerator',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 5,
        'endLine' => 121,
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
            'current' => [
                'name' => 'current',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the current URL for the request.
 *
 * @return string
 */',
                'startLine' => 12,
                'endLine' => 12,
                'startColumn' => 5,
                'endColumn' => 30,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Routing',
                'declaringClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'implementingClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'currentClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'aliasName' => null,
            ],
            'previous' => [
                'name' => 'previous',
                'parameters' => [
                    'fallback' => [
                        'name' => 'fallback',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 20,
                                'endLine' => 20,
                                'startTokenPos' => 36,
                                'startFilePos' => 357,
                                'endTokenPos' => 36,
                                'endFilePos' => 361,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 20,
                        'endLine' => 20,
                        'startColumn' => 30,
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
 * Get the URL for the previous request.
 *
 * @param  mixed  $fallback
 * @return string
 */',
                'startLine' => 20,
                'endLine' => 20,
                'startColumn' => 5,
                'endColumn' => 48,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Routing',
                'declaringClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'implementingClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'currentClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'aliasName' => null,
            ],
            'to' => [
                'name' => 'to',
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
                        'startLine' => 30,
                        'endLine' => 30,
                        'startColumn' => 24,
                        'endColumn' => 28,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'extra' => [
                        'name' => 'extra',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 30,
                                'endLine' => 30,
                                'startTokenPos' => 55,
                                'startFilePos' => 593,
                                'endTokenPos' => 56,
                                'endFilePos' => 594,
                            ],
                        ],
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
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'secure' => [
                        'name' => 'secure',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 30,
                                'endLine' => 30,
                                'startTokenPos' => 63,
                                'startFilePos' => 607,
                                'endTokenPos' => 63,
                                'endFilePos' => 610,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 30,
                        'endLine' => 30,
                        'startColumn' => 44,
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
 * Generate an absolute URL to the given path.
 *
 * @param  string  $path
 * @param  mixed  $extra
 * @param  bool|null  $secure
 * @return string
 */',
                'startLine' => 30,
                'endLine' => 30,
                'startColumn' => 5,
                'endColumn' => 59,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Routing',
                'declaringClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'implementingClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'currentClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'aliasName' => null,
            ],
            'secure' => [
                'name' => 'secure',
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
                        'startLine' => 39,
                        'endLine' => 39,
                        'startColumn' => 28,
                        'endColumn' => 32,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 39,
                                'endLine' => 39,
                                'startTokenPos' => 82,
                                'startFilePos' => 829,
                                'endTokenPos' => 83,
                                'endFilePos' => 830,
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
                        'endColumn' => 50,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Generate a secure, absolute URL to the given path.
 *
 * @param  string  $path
 * @param  array  $parameters
 * @return string
 */',
                'startLine' => 39,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 52,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Routing',
                'declaringClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'implementingClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'currentClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'aliasName' => null,
            ],
            'asset' => [
                'name' => 'asset',
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
                        'startLine' => 48,
                        'endLine' => 48,
                        'startColumn' => 27,
                        'endColumn' => 31,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'secure' => [
                        'name' => 'secure',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 48,
                                'endLine' => 48,
                                'startTokenPos' => 102,
                                'startFilePos' => 1035,
                                'endTokenPos' => 102,
                                'endFilePos' => 1038,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 48,
                        'endLine' => 48,
                        'startColumn' => 34,
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
 * Generate the URL to an application asset.
 *
 * @param  string  $path
 * @param  bool|null  $secure
 * @return string
 */',
                'startLine' => 48,
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 49,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Routing',
                'declaringClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'implementingClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'currentClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'aliasName' => null,
            ],
            'route' => [
                'name' => 'route',
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
                        'startLine' => 60,
                        'endLine' => 60,
                        'startColumn' => 27,
                        'endColumn' => 31,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 60,
                                'endLine' => 60,
                                'startTokenPos' => 121,
                                'startFilePos' => 1314,
                                'endTokenPos' => 122,
                                'endFilePos' => 1315,
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
                        'startColumn' => 34,
                        'endColumn' => 49,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 60,
                                'endLine' => 60,
                                'startTokenPos' => 129,
                                'startFilePos' => 1330,
                                'endTokenPos' => 129,
                                'endFilePos' => 1333,
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
                        'startColumn' => 52,
                        'endColumn' => 67,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the URL to a named route.
 *
 * @param  string  $name
 * @param  mixed  $parameters
 * @param  bool  $absolute
 * @return string
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 60,
                'endLine' => 60,
                'startColumn' => 5,
                'endColumn' => 69,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Routing',
                'declaringClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'implementingClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'currentClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'aliasName' => null,
            ],
            'signedRoute' => [
                'name' => 'signedRoute',
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
                        'startLine' => 73,
                        'endLine' => 73,
                        'startColumn' => 33,
                        'endColumn' => 37,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 73,
                                'endLine' => 73,
                                'startTokenPos' => 148,
                                'startFilePos' => 1700,
                                'endTokenPos' => 149,
                                'endFilePos' => 1701,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 73,
                        'endLine' => 73,
                        'startColumn' => 40,
                        'endColumn' => 55,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'expiration' => [
                        'name' => 'expiration',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 73,
                                'endLine' => 73,
                                'startTokenPos' => 156,
                                'startFilePos' => 1718,
                                'endTokenPos' => 156,
                                'endFilePos' => 1721,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 73,
                        'endLine' => 73,
                        'startColumn' => 58,
                        'endColumn' => 75,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 73,
                                'endLine' => 73,
                                'startTokenPos' => 163,
                                'startFilePos' => 1736,
                                'endTokenPos' => 163,
                                'endFilePos' => 1739,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 73,
                        'endLine' => 73,
                        'startColumn' => 78,
                        'endColumn' => 93,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a signed route URL for a named route.
 *
 * @param  string  $name
 * @param  mixed  $parameters
 * @param  \\DateTimeInterface|\\DateInterval|int|null  $expiration
 * @param  bool  $absolute
 * @return string
 *
 * @throws \\InvalidArgumentException
 */',
                'startLine' => 73,
                'endLine' => 73,
                'startColumn' => 5,
                'endColumn' => 95,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Routing',
                'declaringClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'implementingClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'currentClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'aliasName' => null,
            ],
            'temporarySignedRoute' => [
                'name' => 'temporarySignedRoute',
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
                        'startLine' => 84,
                        'endLine' => 84,
                        'startColumn' => 42,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'expiration' => [
                        'name' => 'expiration',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 84,
                        'endLine' => 84,
                        'startColumn' => 49,
                        'endColumn' => 59,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 84,
                                'endLine' => 84,
                                'startTokenPos' => 185,
                                'startFilePos' => 2085,
                                'endTokenPos' => 186,
                                'endFilePos' => 2086,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 84,
                        'endLine' => 84,
                        'startColumn' => 62,
                        'endColumn' => 77,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 84,
                                'endLine' => 84,
                                'startTokenPos' => 193,
                                'startFilePos' => 2101,
                                'endTokenPos' => 193,
                                'endFilePos' => 2104,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 84,
                        'endLine' => 84,
                        'startColumn' => 80,
                        'endColumn' => 95,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Create a temporary signed route URL for a named route.
 *
 * @param  string  $name
 * @param  \\DateTimeInterface|\\DateInterval|int  $expiration
 * @param  array  $parameters
 * @param  bool  $absolute
 * @return string
 */',
                'startLine' => 84,
                'endLine' => 84,
                'startColumn' => 5,
                'endColumn' => 97,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Routing',
                'declaringClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'implementingClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'currentClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'aliasName' => null,
            ],
            'query' => [
                'name' => 'query',
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
                        'startLine' => 95,
                        'endLine' => 95,
                        'startColumn' => 27,
                        'endColumn' => 31,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'query' => [
                        'name' => 'query',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 95,
                                'endLine' => 95,
                                'startTokenPos' => 212,
                                'startFilePos' => 2382,
                                'endTokenPos' => 213,
                                'endFilePos' => 2383,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 95,
                        'endLine' => 95,
                        'startColumn' => 34,
                        'endColumn' => 44,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'extra' => [
                        'name' => 'extra',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 95,
                                'endLine' => 95,
                                'startTokenPos' => 220,
                                'startFilePos' => 2395,
                                'endTokenPos' => 221,
                                'endFilePos' => 2396,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 95,
                        'endLine' => 95,
                        'startColumn' => 47,
                        'endColumn' => 57,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'secure' => [
                        'name' => 'secure',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 95,
                                'endLine' => 95,
                                'startTokenPos' => 228,
                                'startFilePos' => 2409,
                                'endTokenPos' => 228,
                                'endFilePos' => 2412,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 95,
                        'endLine' => 95,
                        'startColumn' => 60,
                        'endColumn' => 73,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Generate an absolute URL with the given query parameters.
 *
 * @param  string  $path
 * @param  array  $query
 * @param  mixed  $extra
 * @param  bool|null  $secure
 * @return string
 */',
                'startLine' => 95,
                'endLine' => 95,
                'startColumn' => 5,
                'endColumn' => 75,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Routing',
                'declaringClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'implementingClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'currentClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'aliasName' => null,
            ],
            'action' => [
                'name' => 'action',
                'parameters' => [
                    'action' => [
                        'name' => 'action',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 105,
                        'endLine' => 105,
                        'startColumn' => 28,
                        'endColumn' => 34,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 105,
                                'endLine' => 105,
                                'startTokenPos' => 247,
                                'startFilePos' => 2657,
                                'endTokenPos' => 248,
                                'endFilePos' => 2658,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 105,
                        'endLine' => 105,
                        'startColumn' => 37,
                        'endColumn' => 52,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'absolute' => [
                        'name' => 'absolute',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 105,
                                'endLine' => 105,
                                'startTokenPos' => 255,
                                'startFilePos' => 2673,
                                'endTokenPos' => 255,
                                'endFilePos' => 2676,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 105,
                        'endLine' => 105,
                        'startColumn' => 55,
                        'endColumn' => 70,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the URL to a controller action.
 *
 * @param  string|array  $action
 * @param  mixed  $parameters
 * @param  bool  $absolute
 * @return string
 */',
                'startLine' => 105,
                'endLine' => 105,
                'startColumn' => 5,
                'endColumn' => 72,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Routing',
                'declaringClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'implementingClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'currentClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'aliasName' => null,
            ],
            'getRootControllerNamespace' => [
                'name' => 'getRootControllerNamespace',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the root controller namespace.
 *
 * @return string
 */',
                'startLine' => 112,
                'endLine' => 112,
                'startColumn' => 5,
                'endColumn' => 49,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Routing',
                'declaringClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'implementingClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'currentClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'aliasName' => null,
            ],
            'setRootControllerNamespace' => [
                'name' => 'setRootControllerNamespace',
                'parameters' => [
                    'rootNamespace' => [
                        'name' => 'rootNamespace',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 120,
                        'endLine' => 120,
                        'startColumn' => 48,
                        'endColumn' => 61,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Set the root controller namespace.
 *
 * @param  string  $rootNamespace
 * @return $this
 */',
                'startLine' => 120,
                'endLine' => 120,
                'startColumn' => 5,
                'endColumn' => 63,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Contracts\\Routing',
                'declaringClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'implementingClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
                'currentClassName' => 'Illuminate\\Contracts\\Routing\\UrlGenerator',
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
