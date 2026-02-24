<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/http-kernel/HttpKernelInterface.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Component\HttpKernel\HttpKernelInterface
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-6653c14a3a32da7f1c21c0e8692e367d8a2e947b30b3f0006386673381e0038b-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/http-kernel/HttpKernelInterface.php',
            ],
        ],
        'namespace' => 'Symfony\\Component\\HttpKernel',
        'name' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        'shortName' => 'HttpKernelInterface',
        'isInterface' => true,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * HttpKernelInterface handles a Request to convert it to a Response.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
        'attributes' => [
        ],
        'startLine' => 22,
        'endLine' => 40,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
            'MAIN_REQUEST' => [
                'declaringClassName' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
                'implementingClassName' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
                'name' => 'MAIN_REQUEST',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '1',
                    'attributes' => [
                        'startLine' => 24,
                        'endLine' => 24,
                        'startTokenPos' => 35,
                        'startFilePos' => 567,
                        'endTokenPos' => 35,
                        'endFilePos' => 567,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 24,
                'endLine' => 24,
                'startColumn' => 5,
                'endColumn' => 34,
            ],
            'SUB_REQUEST' => [
                'declaringClassName' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
                'implementingClassName' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
                'name' => 'SUB_REQUEST',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '2',
                    'attributes' => [
                        'startLine' => 25,
                        'endLine' => 25,
                        'startTokenPos' => 46,
                        'startFilePos' => 601,
                        'endTokenPos' => 46,
                        'endFilePos' => 601,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 25,
                'endLine' => 25,
                'startColumn' => 5,
                'endColumn' => 33,
            ],
        ],
        'immediateProperties' => [
        ],
        'immediateMethods' => [
            'handle' => [
                'name' => 'handle',
                'parameters' => [
                    'request' => [
                        'name' => 'request',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'Symfony\\Component\\HttpFoundation\\Request',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 39,
                        'endLine' => 39,
                        'startColumn' => 28,
                        'endColumn' => 43,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'type' => [
                        'name' => 'type',
                        'default' => [
                            'code' => 'self::MAIN_REQUEST',
                            'attributes' => [
                                'startLine' => 39,
                                'endLine' => 39,
                                'startTokenPos' => 68,
                                'startFilePos' => 1174,
                                'endTokenPos' => 70,
                                'endFilePos' => 1191,
                            ],
                        ],
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
                        'startLine' => 39,
                        'endLine' => 39,
                        'startColumn' => 46,
                        'endColumn' => 75,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'catch' => [
                        'name' => 'catch',
                        'default' => [
                            'code' => 'true',
                            'attributes' => [
                                'startLine' => 39,
                                'endLine' => 39,
                                'startTokenPos' => 79,
                                'startFilePos' => 1208,
                                'endTokenPos' => 79,
                                'endFilePos' => 1211,
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
                        'startLine' => 39,
                        'endLine' => 39,
                        'startColumn' => 78,
                        'endColumn' => 95,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Symfony\\Component\\HttpFoundation\\Response',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Handles a Request to convert it to a Response.
 *
 * When $catch is true, the implementation must catch all exceptions
 * and do its best to convert them to a Response instance.
 *
 * @param int  $type  The type of the request
 *                    (one of HttpKernelInterface::MAIN_REQUEST or HttpKernelInterface::SUB_REQUEST)
 * @param bool $catch Whether to catch exceptions or not
 *
 * @throws \\Exception When an Exception occurs during processing
 */',
                'startLine' => 39,
                'endLine' => 39,
                'startColumn' => 5,
                'endColumn' => 107,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpKernel',
                'declaringClassName' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
                'implementingClassName' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
                'currentClassName' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
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
