<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Http/RedirectResponse.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Http\RedirectResponse
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-60da77a690d405b0370a70a6b475aa9d0b552492c9f0a223c5f5e257c8ddd185-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Illuminate\\Http\\RedirectResponse',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../laravel/framework/src/Illuminate/Http/RedirectResponse.php',
            ],
        ],
        'namespace' => 'Illuminate\\Http',
        'name' => 'Illuminate\\Http\\RedirectResponse',
        'shortName' => 'RedirectResponse',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => null,
        'attributes' => [
        ],
        'startLine' => 16,
        'endLine' => 283,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => 'Symfony\\Component\\HttpFoundation\\RedirectResponse',
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
            0 => 'Illuminate\\Support\\Traits\\ForwardsCalls',
            1 => 'Illuminate\\Http\\ResponseTrait',
            2 => 'Illuminate\\Support\\Traits\\Macroable',
        ],
        'immediateConstants' => [
        ],
        'immediateProperties' => [
            'request' => [
                'declaringClassName' => 'Illuminate\\Http\\RedirectResponse',
                'implementingClassName' => 'Illuminate\\Http\\RedirectResponse',
                'name' => 'request',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The request instance.
 *
 * @var \\Illuminate\\Http\\Request
 */',
                'attributes' => [
                ],
                'startLine' => 27,
                'endLine' => 27,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'session' => [
                'declaringClassName' => 'Illuminate\\Http\\RedirectResponse',
                'implementingClassName' => 'Illuminate\\Http\\RedirectResponse',
                'name' => 'session',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * The session store instance.
 *
 * @var \\Illuminate\\Session\\Store
 */',
                'attributes' => [
                ],
                'startLine' => 34,
                'endLine' => 34,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
        ],
        'immediateMethods' => [
            'with' => [
                'name' => 'with',
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
                        'startLine' => 43,
                        'endLine' => 43,
                        'startColumn' => 26,
                        'endColumn' => 29,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'value' => [
                        'name' => 'value',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 43,
                                'endLine' => 43,
                                'startTokenPos' => 131,
                                'startFilePos' => 1082,
                                'endTokenPos' => 131,
                                'endFilePos' => 1085,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 43,
                        'endLine' => 43,
                        'startColumn' => 32,
                        'endColumn' => 44,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Flash a piece of data to the session.
 *
 * @param  string|array  $key
 * @param  mixed  $value
 * @return $this
 */',
                'startLine' => 43,
                'endLine' => 52,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\RedirectResponse',
                'implementingClassName' => 'Illuminate\\Http\\RedirectResponse',
                'currentClassName' => 'Illuminate\\Http\\RedirectResponse',
                'aliasName' => null,
            ],
            'withCookies' => [
                'name' => 'withCookies',
                'parameters' => [
                    'cookies' => [
                        'name' => 'cookies',
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
                        'startLine' => 60,
                        'endLine' => 60,
                        'startColumn' => 33,
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
 * Add multiple cookies to the response.
 *
 * @param  array  $cookies
 * @return $this
 */',
                'startLine' => 60,
                'endLine' => 67,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\RedirectResponse',
                'implementingClassName' => 'Illuminate\\Http\\RedirectResponse',
                'currentClassName' => 'Illuminate\\Http\\RedirectResponse',
                'aliasName' => null,
            ],
            'withInput' => [
                'name' => 'withInput',
                'parameters' => [
                    'input' => [
                        'name' => 'input',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 75,
                                'endLine' => 75,
                                'startTokenPos' => 259,
                                'startFilePos' => 1745,
                                'endTokenPos' => 259,
                                'endFilePos' => 1748,
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
                        'startLine' => 75,
                        'endLine' => 75,
                        'startColumn' => 31,
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
 * Flash an array of input to the session.
 *
 * @param  array|null  $input
 * @return $this
 */',
                'startLine' => 75,
                'endLine' => 82,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\RedirectResponse',
                'implementingClassName' => 'Illuminate\\Http\\RedirectResponse',
                'currentClassName' => 'Illuminate\\Http\\RedirectResponse',
                'aliasName' => null,
            ],
            'removeFilesFromInput' => [
                'name' => 'removeFilesFromInput',
                'parameters' => [
                    'input' => [
                        'name' => 'input',
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
                        'startLine' => 90,
                        'endLine' => 90,
                        'startColumn' => 45,
                        'endColumn' => 56,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove all uploaded files form the given input array.
 *
 * @param  array  $input
 * @return array
 */',
                'startLine' => 90,
                'endLine' => 103,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\RedirectResponse',
                'implementingClassName' => 'Illuminate\\Http\\RedirectResponse',
                'currentClassName' => 'Illuminate\\Http\\RedirectResponse',
                'aliasName' => null,
            ],
            'onlyInput' => [
                'name' => 'onlyInput',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Flash an array of input to the session.
 *
 * @return $this
 */',
                'startLine' => 110,
                'endLine' => 113,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\RedirectResponse',
                'implementingClassName' => 'Illuminate\\Http\\RedirectResponse',
                'currentClassName' => 'Illuminate\\Http\\RedirectResponse',
                'aliasName' => null,
            ],
            'exceptInput' => [
                'name' => 'exceptInput',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Flash an array of input to the session.
 *
 * @return $this
 */',
                'startLine' => 120,
                'endLine' => 123,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\RedirectResponse',
                'implementingClassName' => 'Illuminate\\Http\\RedirectResponse',
                'currentClassName' => 'Illuminate\\Http\\RedirectResponse',
                'aliasName' => null,
            ],
            'withErrors' => [
                'name' => 'withErrors',
                'parameters' => [
                    'provider' => [
                        'name' => 'provider',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 132,
                        'endLine' => 132,
                        'startColumn' => 32,
                        'endColumn' => 40,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'key' => [
                        'name' => 'key',
                        'default' => [
                            'code' => '\'default\'',
                            'attributes' => [
                                'startLine' => 132,
                                'endLine' => 132,
                                'startTokenPos' => 479,
                                'startFilePos' => 3116,
                                'endTokenPos' => 479,
                                'endFilePos' => 3124,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 132,
                        'endLine' => 132,
                        'startColumn' => 43,
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
 * Flash a container of errors to the session.
 *
 * @param  \\Illuminate\\Contracts\\Support\\MessageProvider|array|string  $provider
 * @param  string  $key
 * @return $this
 */',
                'startLine' => 132,
                'endLine' => 147,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\RedirectResponse',
                'implementingClassName' => 'Illuminate\\Http\\RedirectResponse',
                'currentClassName' => 'Illuminate\\Http\\RedirectResponse',
                'aliasName' => null,
            ],
            'parseErrors' => [
                'name' => 'parseErrors',
                'parameters' => [
                    'provider' => [
                        'name' => 'provider',
                        'default' => null,
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 155,
                        'endLine' => 155,
                        'startColumn' => 36,
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
 * Parse the given errors into an appropriate value.
 *
 * @param  \\Illuminate\\Contracts\\Support\\MessageProvider|array|string  $provider
 * @return \\Illuminate\\Support\\MessageBag
 */',
                'startLine' => 155,
                'endLine' => 162,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\RedirectResponse',
                'implementingClassName' => 'Illuminate\\Http\\RedirectResponse',
                'currentClassName' => 'Illuminate\\Http\\RedirectResponse',
                'aliasName' => null,
            ],
            'withFragment' => [
                'name' => 'withFragment',
                'parameters' => [
                    'fragment' => [
                        'name' => 'fragment',
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
 * Add a fragment identifier to the URL.
 *
 * @param  string  $fragment
 * @return $this
 */',
                'startLine' => 170,
                'endLine' => 174,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\RedirectResponse',
                'implementingClassName' => 'Illuminate\\Http\\RedirectResponse',
                'currentClassName' => 'Illuminate\\Http\\RedirectResponse',
                'aliasName' => null,
            ],
            'withoutFragment' => [
                'name' => 'withoutFragment',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Remove any fragment identifier from the response URL.
 *
 * @return $this
 */',
                'startLine' => 181,
                'endLine' => 184,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\RedirectResponse',
                'implementingClassName' => 'Illuminate\\Http\\RedirectResponse',
                'currentClassName' => 'Illuminate\\Http\\RedirectResponse',
                'aliasName' => null,
            ],
            'enforceSameOrigin' => [
                'name' => 'enforceSameOrigin',
                'parameters' => [
                    'fallback' => [
                        'name' => 'fallback',
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
                        'startLine' => 190,
                        'endLine' => 190,
                        'startColumn' => 9,
                        'endColumn' => 24,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'validateScheme' => [
                        'name' => 'validateScheme',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 191,
                                'endLine' => 191,
                                'startTokenPos' => 722,
                                'startFilePos' => 4635,
                                'endTokenPos' => 722,
                                'endFilePos' => 4638,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'bool',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 191,
                        'endLine' => 191,
                        'startColumn' => 9,
                        'endColumn' => 35,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'validatePort' => [
                        'name' => 'validatePort',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 192,
                                'endLine' => 192,
                                'startTokenPos' => 731,
                                'startFilePos' => 4670,
                                'endTokenPos' => 731,
                                'endFilePos' => 4673,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'bool',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 192,
                        'endLine' => 192,
                        'startColumn' => 9,
                        'endColumn' => 33,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'static',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Enforce that the redirect target must have the same host as the current request.
 */',
                'startLine' => 189,
                'endLine' => 204,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\RedirectResponse',
                'implementingClassName' => 'Illuminate\\Http\\RedirectResponse',
                'currentClassName' => 'Illuminate\\Http\\RedirectResponse',
                'aliasName' => null,
            ],
            'getOriginalContent' => [
                'name' => 'getOriginalContent',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the original response content.
 *
 * @return null
 */',
                'startLine' => 211,
                'endLine' => 214,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\RedirectResponse',
                'implementingClassName' => 'Illuminate\\Http\\RedirectResponse',
                'currentClassName' => 'Illuminate\\Http\\RedirectResponse',
                'aliasName' => null,
            ],
            'getRequest' => [
                'name' => 'getRequest',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the request instance.
 *
 * @return \\Illuminate\\Http\\Request|null
 */',
                'startLine' => 221,
                'endLine' => 224,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\RedirectResponse',
                'implementingClassName' => 'Illuminate\\Http\\RedirectResponse',
                'currentClassName' => 'Illuminate\\Http\\RedirectResponse',
                'aliasName' => null,
            ],
            'setRequest' => [
                'name' => 'setRequest',
                'parameters' => [
                    'request' => [
                        'name' => 'request',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Http\\Request',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 232,
                        'endLine' => 232,
                        'startColumn' => 32,
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
 * Set the request instance.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @return $this
 */',
                'startLine' => 232,
                'endLine' => 237,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\RedirectResponse',
                'implementingClassName' => 'Illuminate\\Http\\RedirectResponse',
                'currentClassName' => 'Illuminate\\Http\\RedirectResponse',
                'aliasName' => null,
            ],
            'getSession' => [
                'name' => 'getSession',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the session store instance.
 *
 * @return \\Illuminate\\Session\\Store|null
 */',
                'startLine' => 244,
                'endLine' => 247,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\RedirectResponse',
                'implementingClassName' => 'Illuminate\\Http\\RedirectResponse',
                'currentClassName' => 'Illuminate\\Http\\RedirectResponse',
                'aliasName' => null,
            ],
            'setSession' => [
                'name' => 'setSession',
                'parameters' => [
                    'session' => [
                        'name' => 'session',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Illuminate\\Session\\Store',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 255,
                        'endLine' => 255,
                        'startColumn' => 32,
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
 * Set the session store instance.
 *
 * @param  \\Illuminate\\Session\\Store  $session
 * @return $this
 */',
                'startLine' => 255,
                'endLine' => 260,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\RedirectResponse',
                'implementingClassName' => 'Illuminate\\Http\\RedirectResponse',
                'currentClassName' => 'Illuminate\\Http\\RedirectResponse',
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
                        'startLine' => 271,
                        'endLine' => 271,
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
                        'startLine' => 271,
                        'endLine' => 271,
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
 * Dynamically bind flash data in the session.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \\BadMethodCallException
 */',
                'startLine' => 271,
                'endLine' => 282,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Illuminate\\Http',
                'declaringClassName' => 'Illuminate\\Http\\RedirectResponse',
                'implementingClassName' => 'Illuminate\\Http\\RedirectResponse',
                'currentClassName' => 'Illuminate\\Http\\RedirectResponse',
                'aliasName' => null,
            ],
        ],
        'traitsData' => [
            'aliases' => [
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
                'illuminate\\support\\traits\\macroable::__call' => 'Illuminate\\Support\\Traits\\Macroable::__call',
            ],
        ],
    ],
]);
