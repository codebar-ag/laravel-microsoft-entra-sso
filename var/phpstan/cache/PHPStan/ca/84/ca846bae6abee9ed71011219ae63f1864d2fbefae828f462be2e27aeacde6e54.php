<?php

declare(strict_types=1);

// osfsl-/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/http-foundation/Request.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Symfony\Component\HttpFoundation\Request
return \PHPStan\Cache\CacheItem::__set_state([
    'variableKey' => 'v2-ba861b9ecdef0ee29398f8818dd85070e0f19ba4e01fc2acf5db609735be15e2-8.4.18-6.65.0.9',
    'data' => [
        'locatedSource' => [
            'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
            'data' => [
                'name' => 'Symfony\\Component\\HttpFoundation\\Request',
                'filename' => '/Users/sebastian/Projects/swiss-product-configurator-start/packages/codebar-ag/laravel-microsoft-entra-sso/vendor/composer/../symfony/http-foundation/Request.php',
            ],
        ],
        'namespace' => 'Symfony\\Component\\HttpFoundation',
        'name' => 'Symfony\\Component\\HttpFoundation\\Request',
        'shortName' => 'Request',
        'isInterface' => false,
        'isTrait' => false,
        'isEnum' => false,
        'isBackedEnum' => false,
        'modifiers' => 0,
        'docComment' => '/**
 * Request represents an HTTP request.
 *
 * The methods dealing with URL accept / return a raw path (% encoded):
 *   * getBasePath
 *   * getBaseUrl
 *   * getPathInfo
 *   * getRequestUri
 *   * getUri
 *   * getUriForPath
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
        'attributes' => [
        ],
        'startLine' => 43,
        'endLine' => 2263,
        'startColumn' => 1,
        'endColumn' => 1,
        'parentClassName' => null,
        'implementsClassNames' => [
        ],
        'traitClassNames' => [
        ],
        'immediateConstants' => [
            'HEADER_FORWARDED' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'HEADER_FORWARDED',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '0b1',
                    'attributes' => [
                        'startLine' => 45,
                        'endLine' => 45,
                        'startTokenPos' => 113,
                        'startFilePos' => 1326,
                        'endTokenPos' => 113,
                        'endFilePos' => 1333,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 45,
                'endLine' => 45,
                'startColumn' => 5,
                'endColumn' => 45,
            ],
            'HEADER_X_FORWARDED_FOR' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'HEADER_X_FORWARDED_FOR',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '0b10',
                    'attributes' => [
                        'startLine' => 46,
                        'endLine' => 46,
                        'startTokenPos' => 126,
                        'startFilePos' => 1401,
                        'endTokenPos' => 126,
                        'endFilePos' => 1408,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 46,
                'endLine' => 46,
                'startColumn' => 5,
                'endColumn' => 51,
            ],
            'HEADER_X_FORWARDED_HOST' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'HEADER_X_FORWARDED_HOST',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '0b100',
                    'attributes' => [
                        'startLine' => 47,
                        'endLine' => 47,
                        'startTokenPos' => 137,
                        'startFilePos' => 1454,
                        'endTokenPos' => 137,
                        'endFilePos' => 1461,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 47,
                'endLine' => 47,
                'startColumn' => 5,
                'endColumn' => 52,
            ],
            'HEADER_X_FORWARDED_PROTO' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'HEADER_X_FORWARDED_PROTO',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '0b1000',
                    'attributes' => [
                        'startLine' => 48,
                        'endLine' => 48,
                        'startTokenPos' => 148,
                        'startFilePos' => 1508,
                        'endTokenPos' => 148,
                        'endFilePos' => 1515,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 48,
                'endLine' => 48,
                'startColumn' => 5,
                'endColumn' => 53,
            ],
            'HEADER_X_FORWARDED_PORT' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'HEADER_X_FORWARDED_PORT',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '0b10000',
                    'attributes' => [
                        'startLine' => 49,
                        'endLine' => 49,
                        'startTokenPos' => 159,
                        'startFilePos' => 1561,
                        'endTokenPos' => 159,
                        'endFilePos' => 1568,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 49,
                'endLine' => 49,
                'startColumn' => 5,
                'endColumn' => 52,
            ],
            'HEADER_X_FORWARDED_PREFIX' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'HEADER_X_FORWARDED_PREFIX',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '0b100000',
                    'attributes' => [
                        'startLine' => 50,
                        'endLine' => 50,
                        'startTokenPos' => 170,
                        'startFilePos' => 1616,
                        'endTokenPos' => 170,
                        'endFilePos' => 1623,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 50,
                'endLine' => 50,
                'startColumn' => 5,
                'endColumn' => 54,
            ],
            'HEADER_X_FORWARDED_AWS_ELB' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'HEADER_X_FORWARDED_AWS_ELB',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '0b11010',
                    'attributes' => [
                        'startLine' => 52,
                        'endLine' => 52,
                        'startTokenPos' => 181,
                        'startFilePos' => 1673,
                        'endTokenPos' => 181,
                        'endFilePos' => 1681,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 52,
                'endLine' => 52,
                'startColumn' => 5,
                'endColumn' => 56,
            ],
            'HEADER_X_FORWARDED_TRAEFIK' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'HEADER_X_FORWARDED_TRAEFIK',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '0b111110',
                    'attributes' => [
                        'startLine' => 53,
                        'endLine' => 53,
                        'startTokenPos' => 194,
                        'startFilePos' => 1771,
                        'endTokenPos' => 194,
                        'endFilePos' => 1779,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 53,
                'endLine' => 53,
                'startColumn' => 5,
                'endColumn' => 56,
            ],
            'METHOD_HEAD' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'METHOD_HEAD',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'HEAD\'',
                    'attributes' => [
                        'startLine' => 55,
                        'endLine' => 55,
                        'startTokenPos' => 207,
                        'startFilePos' => 1875,
                        'endTokenPos' => 207,
                        'endFilePos' => 1880,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 55,
                'endLine' => 55,
                'startColumn' => 5,
                'endColumn' => 38,
            ],
            'METHOD_GET' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'METHOD_GET',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'GET\'',
                    'attributes' => [
                        'startLine' => 56,
                        'endLine' => 56,
                        'startTokenPos' => 218,
                        'startFilePos' => 1913,
                        'endTokenPos' => 218,
                        'endFilePos' => 1917,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 56,
                'endLine' => 56,
                'startColumn' => 5,
                'endColumn' => 36,
            ],
            'METHOD_POST' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'METHOD_POST',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'POST\'',
                    'attributes' => [
                        'startLine' => 57,
                        'endLine' => 57,
                        'startTokenPos' => 229,
                        'startFilePos' => 1951,
                        'endTokenPos' => 229,
                        'endFilePos' => 1956,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 57,
                'endLine' => 57,
                'startColumn' => 5,
                'endColumn' => 38,
            ],
            'METHOD_PUT' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'METHOD_PUT',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'PUT\'',
                    'attributes' => [
                        'startLine' => 58,
                        'endLine' => 58,
                        'startTokenPos' => 240,
                        'startFilePos' => 1989,
                        'endTokenPos' => 240,
                        'endFilePos' => 1993,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 58,
                'endLine' => 58,
                'startColumn' => 5,
                'endColumn' => 36,
            ],
            'METHOD_PATCH' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'METHOD_PATCH',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'PATCH\'',
                    'attributes' => [
                        'startLine' => 59,
                        'endLine' => 59,
                        'startTokenPos' => 251,
                        'startFilePos' => 2028,
                        'endTokenPos' => 251,
                        'endFilePos' => 2034,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 59,
                'endLine' => 59,
                'startColumn' => 5,
                'endColumn' => 40,
            ],
            'METHOD_DELETE' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'METHOD_DELETE',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'DELETE\'',
                    'attributes' => [
                        'startLine' => 60,
                        'endLine' => 60,
                        'startTokenPos' => 262,
                        'startFilePos' => 2070,
                        'endTokenPos' => 262,
                        'endFilePos' => 2077,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 60,
                'endLine' => 60,
                'startColumn' => 5,
                'endColumn' => 42,
            ],
            'METHOD_PURGE' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'METHOD_PURGE',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'PURGE\'',
                    'attributes' => [
                        'startLine' => 61,
                        'endLine' => 61,
                        'startTokenPos' => 273,
                        'startFilePos' => 2112,
                        'endTokenPos' => 273,
                        'endFilePos' => 2118,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 61,
                'endLine' => 61,
                'startColumn' => 5,
                'endColumn' => 40,
            ],
            'METHOD_OPTIONS' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'METHOD_OPTIONS',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'OPTIONS\'',
                    'attributes' => [
                        'startLine' => 62,
                        'endLine' => 62,
                        'startTokenPos' => 284,
                        'startFilePos' => 2155,
                        'endTokenPos' => 284,
                        'endFilePos' => 2163,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 62,
                'endLine' => 62,
                'startColumn' => 5,
                'endColumn' => 44,
            ],
            'METHOD_TRACE' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'METHOD_TRACE',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'TRACE\'',
                    'attributes' => [
                        'startLine' => 63,
                        'endLine' => 63,
                        'startTokenPos' => 295,
                        'startFilePos' => 2198,
                        'endTokenPos' => 295,
                        'endFilePos' => 2204,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 63,
                'endLine' => 63,
                'startColumn' => 5,
                'endColumn' => 40,
            ],
            'METHOD_CONNECT' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'METHOD_CONNECT',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'CONNECT\'',
                    'attributes' => [
                        'startLine' => 64,
                        'endLine' => 64,
                        'startTokenPos' => 306,
                        'startFilePos' => 2241,
                        'endTokenPos' => 306,
                        'endFilePos' => 2249,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 64,
                'endLine' => 64,
                'startColumn' => 5,
                'endColumn' => 44,
            ],
            'METHOD_QUERY' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'METHOD_QUERY',
                'modifiers' => 1,
                'type' => null,
                'value' => [
                    'code' => '\'QUERY\'',
                    'attributes' => [
                        'startLine' => 65,
                        'endLine' => 65,
                        'startTokenPos' => 317,
                        'startFilePos' => 2284,
                        'endTokenPos' => 317,
                        'endFilePos' => 2290,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 65,
                'endLine' => 65,
                'startColumn' => 5,
                'endColumn' => 40,
            ],
            'FORWARDED_PARAMS' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'FORWARDED_PARAMS',
                'modifiers' => 4,
                'type' => null,
                'value' => [
                    'code' => '[self::HEADER_X_FORWARDED_FOR => \'for\', self::HEADER_X_FORWARDED_HOST => \'host\', self::HEADER_X_FORWARDED_PROTO => \'proto\', self::HEADER_X_FORWARDED_PORT => \'host\']',
                    'attributes' => [
                        'startLine' => 184,
                        'endLine' => 189,
                        'startTokenPos' => 738,
                        'startFilePos' => 4805,
                        'endTokenPos' => 776,
                        'endFilePos' => 5007,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 184,
                'endLine' => 189,
                'startColumn' => 5,
                'endColumn' => 6,
            ],
            'TRUSTED_HEADERS' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'TRUSTED_HEADERS',
                'modifiers' => 4,
                'type' => null,
                'value' => [
                    'code' => '[self::HEADER_FORWARDED => \'FORWARDED\', self::HEADER_X_FORWARDED_FOR => \'X_FORWARDED_FOR\', self::HEADER_X_FORWARDED_HOST => \'X_FORWARDED_HOST\', self::HEADER_X_FORWARDED_PROTO => \'X_FORWARDED_PROTO\', self::HEADER_X_FORWARDED_PORT => \'X_FORWARDED_PORT\', self::HEADER_X_FORWARDED_PREFIX => \'X_FORWARDED_PREFIX\']',
                    'attributes' => [
                        'startLine' => 200,
                        'endLine' => 207,
                        'startTokenPos' => 789,
                        'startFilePos' => 5348,
                        'endTokenPos' => 845,
                        'endFilePos' => 5710,
                    ],
                ],
                'docComment' => '/**
 * Names for headers that can be trusted when
 * using trusted proxies.
 *
 * The FORWARDED header is the standard as of rfc7239.
 *
 * The other headers are non-standard, but widely used
 * by popular reverse proxies (like Apache mod_proxy or Amazon EC2).
 */',
                'attributes' => [
                ],
                'startLine' => 200,
                'endLine' => 207,
                'startColumn' => 5,
                'endColumn' => 6,
            ],
            'STRUCTURED_SUFFIX_FORMATS' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'STRUCTURED_SUFFIX_FORMATS',
                'modifiers' => 4,
                'type' => null,
                'value' => [
                    'code' => '[\'json\' => \'json\', \'xml\' => \'xml\', \'xhtml\' => \'html\', \'cbor\' => \'cbor\', \'zip\' => \'zip\', \'ber\' => \'asn1\', \'der\' => \'asn1\', \'tlv\' => \'tlv\', \'wbxml\' => \'xml\', \'yaml\' => \'yaml\']',
                    'attributes' => [
                        'startLine' => 218,
                        'endLine' => 229,
                        'startTokenPos' => 858,
                        'startFilePos' => 6117,
                        'endTokenPos' => 930,
                        'endFilePos' => 6376,
                    ],
                ],
                'docComment' => '/**
 * This mapping is used when no exact MIME match is found in $formats.
 *
 * It enables mappings like application/soap+xml -> xml.
 *
 * @see https://datatracker.ietf.org/doc/html/rfc6839
 * @see https://datatracker.ietf.org/doc/html/rfc7303
 * @see https://www.iana.org/assignments/media-types/media-types.xhtml
 */',
                'attributes' => [
                ],
                'startLine' => 218,
                'endLine' => 229,
                'startColumn' => 5,
                'endColumn' => 6,
            ],
        ],
        'immediateProperties' => [
            'trustedProxies' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'trustedProxies',
                'modifiers' => 18,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 70,
                        'endLine' => 70,
                        'startTokenPos' => 332,
                        'startFilePos' => 2376,
                        'endTokenPos' => 333,
                        'endFilePos' => 2377,
                    ],
                ],
                'docComment' => '/**
 * @var string[]
 */',
                'attributes' => [
                ],
                'startLine' => 70,
                'endLine' => 70,
                'startColumn' => 5,
                'endColumn' => 48,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'trustedHostPatterns' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'trustedHostPatterns',
                'modifiers' => 18,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 75,
                        'endLine' => 75,
                        'startTokenPos' => 348,
                        'startFilePos' => 2468,
                        'endTokenPos' => 349,
                        'endFilePos' => 2469,
                    ],
                ],
                'docComment' => '/**
 * @var string[]
 */',
                'attributes' => [
                ],
                'startLine' => 75,
                'endLine' => 75,
                'startColumn' => 5,
                'endColumn' => 53,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'trustedHosts' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'trustedHosts',
                'modifiers' => 18,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 80,
                        'endLine' => 80,
                        'startTokenPos' => 364,
                        'startFilePos' => 2553,
                        'endTokenPos' => 365,
                        'endFilePos' => 2554,
                    ],
                ],
                'docComment' => '/**
 * @var string[]
 */',
                'attributes' => [
                ],
                'startLine' => 80,
                'endLine' => 80,
                'startColumn' => 5,
                'endColumn' => 46,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'httpMethodParameterOverride' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'httpMethodParameterOverride',
                'modifiers' => 18,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 82,
                        'endLine' => 82,
                        'startTokenPos' => 378,
                        'startFilePos' => 2615,
                        'endTokenPos' => 378,
                        'endFilePos' => 2619,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 82,
                'endLine' => 82,
                'startColumn' => 5,
                'endColumn' => 63,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'allowedHttpMethodOverride' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'allowedHttpMethodOverride',
                'modifiers' => 18,
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 89,
                        'endLine' => 89,
                        'startTokenPos' => 394,
                        'startFilePos' => 2787,
                        'endTokenPos' => 394,
                        'endFilePos' => 2790,
                    ],
                ],
                'docComment' => '/**
 * The HTTP methods that can be overridden.
 *
 * @var uppercase-string[]|null
 */',
                'attributes' => [
                ],
                'startLine' => 89,
                'endLine' => 89,
                'startColumn' => 5,
                'endColumn' => 62,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'attributes' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'attributes',
                'modifiers' => 1,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Symfony\\Component\\HttpFoundation\\ParameterBag',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => '/**
 * Custom parameters.
 */',
                'attributes' => [
                ],
                'startLine' => 94,
                'endLine' => 94,
                'startColumn' => 5,
                'endColumn' => 36,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'request' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'request',
                'modifiers' => 1,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Symfony\\Component\\HttpFoundation\\InputBag',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => '/**
 * Request body parameters ($_POST).
 *
 * @see getPayload() for portability between content types
 */',
                'attributes' => [
                ],
                'startLine' => 101,
                'endLine' => 101,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'query' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'query',
                'modifiers' => 1,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Symfony\\Component\\HttpFoundation\\InputBag',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => '/**
 * Query string parameters ($_GET).
 *
 * @var InputBag<string>
 */',
                'attributes' => [
                ],
                'startLine' => 108,
                'endLine' => 108,
                'startColumn' => 5,
                'endColumn' => 27,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'server' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'server',
                'modifiers' => 1,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Symfony\\Component\\HttpFoundation\\ServerBag',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => '/**
 * Server and execution environment parameters ($_SERVER).
 */',
                'attributes' => [
                ],
                'startLine' => 113,
                'endLine' => 113,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'files' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'files',
                'modifiers' => 1,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Symfony\\Component\\HttpFoundation\\FileBag',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => '/**
 * Uploaded files ($_FILES).
 */',
                'attributes' => [
                ],
                'startLine' => 118,
                'endLine' => 118,
                'startColumn' => 5,
                'endColumn' => 26,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'cookies' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'cookies',
                'modifiers' => 1,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Symfony\\Component\\HttpFoundation\\InputBag',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => '/**
 * Cookies ($_COOKIE).
 *
 * @var InputBag<string>
 */',
                'attributes' => [
                ],
                'startLine' => 125,
                'endLine' => 125,
                'startColumn' => 5,
                'endColumn' => 29,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'headers' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'headers',
                'modifiers' => 1,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Symfony\\Component\\HttpFoundation\\HeaderBag',
                        'isIdentifier' => false,
                    ],
                ],
                'default' => null,
                'docComment' => '/**
 * Headers (taken from the $_SERVER).
 */',
                'attributes' => [
                ],
                'startLine' => 130,
                'endLine' => 130,
                'startColumn' => 5,
                'endColumn' => 30,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'content' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'content',
                'modifiers' => 2,
                'type' => null,
                'default' => null,
                'docComment' => '/**
 * @var string|resource|false|null
 */',
                'attributes' => [
                ],
                'startLine' => 135,
                'endLine' => 135,
                'startColumn' => 5,
                'endColumn' => 23,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'languages' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'languages',
                'modifiers' => 2,
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 140,
                        'endLine' => 140,
                        'startTokenPos' => 478,
                        'startFilePos' => 3696,
                        'endTokenPos' => 478,
                        'endFilePos' => 3699,
                    ],
                ],
                'docComment' => '/**
 * @var string[]|null
 */',
                'attributes' => [
                ],
                'startLine' => 140,
                'endLine' => 140,
                'startColumn' => 5,
                'endColumn' => 39,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'charsets' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'charsets',
                'modifiers' => 2,
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 145,
                        'endLine' => 145,
                        'startTokenPos' => 492,
                        'startFilePos' => 3778,
                        'endTokenPos' => 492,
                        'endFilePos' => 3781,
                    ],
                ],
                'docComment' => '/**
 * @var string[]|null
 */',
                'attributes' => [
                ],
                'startLine' => 145,
                'endLine' => 145,
                'startColumn' => 5,
                'endColumn' => 38,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'encodings' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'encodings',
                'modifiers' => 2,
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 150,
                        'endLine' => 150,
                        'startTokenPos' => 506,
                        'startFilePos' => 3861,
                        'endTokenPos' => 506,
                        'endFilePos' => 3864,
                    ],
                ],
                'docComment' => '/**
 * @var string[]|null
 */',
                'attributes' => [
                ],
                'startLine' => 150,
                'endLine' => 150,
                'startColumn' => 5,
                'endColumn' => 39,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'acceptableContentTypes' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'acceptableContentTypes',
                'modifiers' => 2,
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 155,
                        'endLine' => 155,
                        'startTokenPos' => 520,
                        'startFilePos' => 3957,
                        'endTokenPos' => 520,
                        'endFilePos' => 3960,
                    ],
                ],
                'docComment' => '/**
 * @var string[]|null
 */',
                'attributes' => [
                ],
                'startLine' => 155,
                'endLine' => 155,
                'startColumn' => 5,
                'endColumn' => 52,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'pathInfo' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'pathInfo',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 157,
                        'endLine' => 157,
                        'startTokenPos' => 532,
                        'startFilePos' => 3998,
                        'endTokenPos' => 532,
                        'endFilePos' => 4001,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 157,
                'endLine' => 157,
                'startColumn' => 5,
                'endColumn' => 39,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'requestUri' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'requestUri',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 158,
                        'endLine' => 158,
                        'startTokenPos' => 544,
                        'startFilePos' => 4040,
                        'endTokenPos' => 544,
                        'endFilePos' => 4043,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 158,
                'endLine' => 158,
                'startColumn' => 5,
                'endColumn' => 41,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'baseUrl' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'baseUrl',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 159,
                        'endLine' => 159,
                        'startTokenPos' => 556,
                        'startFilePos' => 4079,
                        'endTokenPos' => 556,
                        'endFilePos' => 4082,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 159,
                'endLine' => 159,
                'startColumn' => 5,
                'endColumn' => 38,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'basePath' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'basePath',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 160,
                        'endLine' => 160,
                        'startTokenPos' => 568,
                        'startFilePos' => 4119,
                        'endTokenPos' => 568,
                        'endFilePos' => 4122,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 160,
                'endLine' => 160,
                'startColumn' => 5,
                'endColumn' => 39,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'method' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'method',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 161,
                        'endLine' => 161,
                        'startTokenPos' => 580,
                        'startFilePos' => 4157,
                        'endTokenPos' => 580,
                        'endFilePos' => 4160,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 161,
                'endLine' => 161,
                'startColumn' => 5,
                'endColumn' => 37,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'format' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'format',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 162,
                        'endLine' => 162,
                        'startTokenPos' => 592,
                        'startFilePos' => 4195,
                        'endTokenPos' => 592,
                        'endFilePos' => 4198,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 162,
                'endLine' => 162,
                'startColumn' => 5,
                'endColumn' => 37,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'session' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'session',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
                                    'isIdentifier' => false,
                                ],
                            ],
                            1 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'Closure',
                                    'isIdentifier' => false,
                                ],
                            ],
                            2 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'null',
                                    'isIdentifier' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 163,
                        'endLine' => 163,
                        'startTokenPos' => 607,
                        'startFilePos' => 4257,
                        'endTokenPos' => 607,
                        'endFilePos' => 4260,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 163,
                'endLine' => 163,
                'startColumn' => 5,
                'endColumn' => 61,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'locale' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'locale',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 164,
                        'endLine' => 164,
                        'startTokenPos' => 619,
                        'startFilePos' => 4295,
                        'endTokenPos' => 619,
                        'endFilePos' => 4298,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 164,
                'endLine' => 164,
                'startColumn' => 5,
                'endColumn' => 37,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'defaultLocale' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'defaultLocale',
                'modifiers' => 2,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '\'en\'',
                    'attributes' => [
                        'startLine' => 165,
                        'endLine' => 165,
                        'startTokenPos' => 630,
                        'startFilePos' => 4339,
                        'endTokenPos' => 630,
                        'endFilePos' => 4342,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 165,
                'endLine' => 165,
                'startColumn' => 5,
                'endColumn' => 43,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'formats' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'formats',
                'modifiers' => 18,
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 170,
                        'endLine' => 170,
                        'startTokenPos' => 646,
                        'startFilePos' => 4442,
                        'endTokenPos' => 646,
                        'endFilePos' => 4445,
                    ],
                ],
                'docComment' => '/**
 * @var array<string, string[]>|null
 */',
                'attributes' => [
                ],
                'startLine' => 170,
                'endLine' => 170,
                'startColumn' => 5,
                'endColumn' => 44,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'requestFactory' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'requestFactory',
                'modifiers' => 18,
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 172,
                        'endLine' => 172,
                        'startTokenPos' => 660,
                        'startFilePos' => 4498,
                        'endTokenPos' => 660,
                        'endFilePos' => 4501,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 172,
                'endLine' => 172,
                'startColumn' => 5,
                'endColumn' => 54,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'preferredFormat' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'preferredFormat',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
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
                'default' => [
                    'code' => 'null',
                    'attributes' => [
                        'startLine' => 174,
                        'endLine' => 174,
                        'startTokenPos' => 672,
                        'startFilePos' => 4544,
                        'endTokenPos' => 672,
                        'endFilePos' => 4547,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 174,
                'endLine' => 174,
                'startColumn' => 5,
                'endColumn' => 44,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'isHostValid' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'isHostValid',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => 'true',
                    'attributes' => [
                        'startLine' => 176,
                        'endLine' => 176,
                        'startTokenPos' => 683,
                        'startFilePos' => 4583,
                        'endTokenPos' => 683,
                        'endFilePos' => 4586,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 176,
                'endLine' => 176,
                'startColumn' => 5,
                'endColumn' => 37,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'isForwardedValid' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'isForwardedValid',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => 'true',
                    'attributes' => [
                        'startLine' => 177,
                        'endLine' => 177,
                        'startTokenPos' => 694,
                        'startFilePos' => 4626,
                        'endTokenPos' => 694,
                        'endFilePos' => 4629,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 177,
                'endLine' => 177,
                'startColumn' => 5,
                'endColumn' => 42,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'isSafeContentPreferred' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'isSafeContentPreferred',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => null,
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 178,
                'endLine' => 178,
                'startColumn' => 5,
                'endColumn' => 41,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'trustedValuesCache' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'trustedValuesCache',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '[]',
                    'attributes' => [
                        'startLine' => 180,
                        'endLine' => 180,
                        'startTokenPos' => 712,
                        'startFilePos' => 4715,
                        'endTokenPos' => 713,
                        'endFilePos' => 4716,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 180,
                'endLine' => 180,
                'startColumn' => 5,
                'endColumn' => 43,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'trustedHeaderSet' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'trustedHeaderSet',
                'modifiers' => 20,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => '-1',
                    'attributes' => [
                        'startLine' => 182,
                        'endLine' => 182,
                        'startTokenPos' => 726,
                        'startFilePos' => 4763,
                        'endTokenPos' => 727,
                        'endFilePos' => 4764,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 182,
                'endLine' => 182,
                'startColumn' => 5,
                'endColumn' => 46,
                'isPromoted' => false,
                'declaredAtCompileTime' => true,
                'immediateVirtual' => false,
                'immediateHooks' => [
                ],
            ],
            'isIisRewrite' => [
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'name' => 'isIisRewrite',
                'modifiers' => 4,
                'type' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'bool',
                        'isIdentifier' => true,
                    ],
                ],
                'default' => [
                    'code' => 'false',
                    'attributes' => [
                        'startLine' => 231,
                        'endLine' => 231,
                        'startTokenPos' => 941,
                        'startFilePos' => 6413,
                        'endTokenPos' => 941,
                        'endFilePos' => 6417,
                    ],
                ],
                'docComment' => null,
                'attributes' => [
                ],
                'startLine' => 231,
                'endLine' => 231,
                'startColumn' => 5,
                'endColumn' => 39,
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
                    'query' => [
                        'name' => 'query',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 242,
                                'endLine' => 242,
                                'startTokenPos' => 958,
                                'startFilePos' => 7002,
                                'endTokenPos' => 959,
                                'endFilePos' => 7003,
                            ],
                        ],
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
                        'startLine' => 242,
                        'endLine' => 242,
                        'startColumn' => 33,
                        'endColumn' => 49,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'request' => [
                        'name' => 'request',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 242,
                                'endLine' => 242,
                                'startTokenPos' => 968,
                                'startFilePos' => 7023,
                                'endTokenPos' => 969,
                                'endFilePos' => 7024,
                            ],
                        ],
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
                        'startLine' => 242,
                        'endLine' => 242,
                        'startColumn' => 52,
                        'endColumn' => 70,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 242,
                                'endLine' => 242,
                                'startTokenPos' => 978,
                                'startFilePos' => 7047,
                                'endTokenPos' => 979,
                                'endFilePos' => 7048,
                            ],
                        ],
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
                        'startLine' => 242,
                        'endLine' => 242,
                        'startColumn' => 73,
                        'endColumn' => 94,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'cookies' => [
                        'name' => 'cookies',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 242,
                                'endLine' => 242,
                                'startTokenPos' => 988,
                                'startFilePos' => 7068,
                                'endTokenPos' => 989,
                                'endFilePos' => 7069,
                            ],
                        ],
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
                        'startLine' => 242,
                        'endLine' => 242,
                        'startColumn' => 97,
                        'endColumn' => 115,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'files' => [
                        'name' => 'files',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 242,
                                'endLine' => 242,
                                'startTokenPos' => 998,
                                'startFilePos' => 7087,
                                'endTokenPos' => 999,
                                'endFilePos' => 7088,
                            ],
                        ],
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
                        'startLine' => 242,
                        'endLine' => 242,
                        'startColumn' => 118,
                        'endColumn' => 134,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                    'server' => [
                        'name' => 'server',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 242,
                                'endLine' => 242,
                                'startTokenPos' => 1008,
                                'startFilePos' => 7107,
                                'endTokenPos' => 1009,
                                'endFilePos' => 7108,
                            ],
                        ],
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
                        'startLine' => 242,
                        'endLine' => 242,
                        'startColumn' => 137,
                        'endColumn' => 154,
                        'parameterIndex' => 5,
                        'isOptional' => true,
                    ],
                    'content' => [
                        'name' => 'content',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 242,
                                'endLine' => 242,
                                'startTokenPos' => 1016,
                                'startFilePos' => 7122,
                                'endTokenPos' => 1016,
                                'endFilePos' => 7125,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 242,
                        'endLine' => 242,
                        'startColumn' => 157,
                        'endColumn' => 171,
                        'parameterIndex' => 6,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * @param array                $query      The GET parameters
 * @param array                $request    The POST parameters
 * @param array                $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
 * @param array                $cookies    The COOKIE parameters
 * @param array                $files      The FILES parameters
 * @param array                $server     The SERVER parameters
 * @param string|resource|null $content    The raw body data
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
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'initialize' => [
                'name' => 'initialize',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 260,
                                'endLine' => 260,
                                'startTokenPos' => 1063,
                                'startFilePos' => 7930,
                                'endTokenPos' => 1064,
                                'endFilePos' => 7931,
                            ],
                        ],
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
                        'startLine' => 260,
                        'endLine' => 260,
                        'startColumn' => 32,
                        'endColumn' => 48,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'request' => [
                        'name' => 'request',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 260,
                                'endLine' => 260,
                                'startTokenPos' => 1073,
                                'startFilePos' => 7951,
                                'endTokenPos' => 1074,
                                'endFilePos' => 7952,
                            ],
                        ],
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
                        'startLine' => 260,
                        'endLine' => 260,
                        'startColumn' => 51,
                        'endColumn' => 69,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 260,
                                'endLine' => 260,
                                'startTokenPos' => 1083,
                                'startFilePos' => 7975,
                                'endTokenPos' => 1084,
                                'endFilePos' => 7976,
                            ],
                        ],
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
                        'startLine' => 260,
                        'endLine' => 260,
                        'startColumn' => 72,
                        'endColumn' => 93,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'cookies' => [
                        'name' => 'cookies',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 260,
                                'endLine' => 260,
                                'startTokenPos' => 1093,
                                'startFilePos' => 7996,
                                'endTokenPos' => 1094,
                                'endFilePos' => 7997,
                            ],
                        ],
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
                        'startLine' => 260,
                        'endLine' => 260,
                        'startColumn' => 96,
                        'endColumn' => 114,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'files' => [
                        'name' => 'files',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 260,
                                'endLine' => 260,
                                'startTokenPos' => 1103,
                                'startFilePos' => 8015,
                                'endTokenPos' => 1104,
                                'endFilePos' => 8016,
                            ],
                        ],
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
                        'startLine' => 260,
                        'endLine' => 260,
                        'startColumn' => 117,
                        'endColumn' => 133,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                    'server' => [
                        'name' => 'server',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 260,
                                'endLine' => 260,
                                'startTokenPos' => 1113,
                                'startFilePos' => 8035,
                                'endTokenPos' => 1114,
                                'endFilePos' => 8036,
                            ],
                        ],
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
                        'startLine' => 260,
                        'endLine' => 260,
                        'startColumn' => 136,
                        'endColumn' => 153,
                        'parameterIndex' => 5,
                        'isOptional' => true,
                    ],
                    'content' => [
                        'name' => 'content',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 260,
                                'endLine' => 260,
                                'startTokenPos' => 1121,
                                'startFilePos' => 8050,
                                'endTokenPos' => 1121,
                                'endFilePos' => 8053,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 260,
                        'endLine' => 260,
                        'startColumn' => 156,
                        'endColumn' => 170,
                        'parameterIndex' => 6,
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
 * Sets the parameters for this request.
 *
 * This method also re-initializes all properties.
 *
 * @param array                $query      The GET parameters
 * @param array                $request    The POST parameters
 * @param array                $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
 * @param array                $cookies    The COOKIE parameters
 * @param array                $files      The FILES parameters
 * @param array                $server     The SERVER parameters
 * @param string|resource|null $content    The raw body data
 */',
                'startLine' => 260,
                'endLine' => 281,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'createFromGlobals' => [
                'name' => 'createFromGlobals',
                'parameters' => [
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
 * Creates a new request with values from PHP\'s super globals.
 */',
                'startLine' => 286,
                'endLine' => 312,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'create' => [
                'name' => 'create',
                'parameters' => [
                    'uri' => [
                        'name' => 'uri',
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
                        'startLine' => 330,
                        'endLine' => 330,
                        'startColumn' => 35,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'method' => [
                        'name' => 'method',
                        'default' => [
                            'code' => '\'GET\'',
                            'attributes' => [
                                'startLine' => 330,
                                'endLine' => 330,
                                'startTokenPos' => 1620,
                                'startFilePos' => 10805,
                                'endTokenPos' => 1620,
                                'endFilePos' => 10809,
                            ],
                        ],
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
                        'startLine' => 330,
                        'endLine' => 330,
                        'startColumn' => 48,
                        'endColumn' => 69,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'parameters' => [
                        'name' => 'parameters',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 330,
                                'endLine' => 330,
                                'startTokenPos' => 1629,
                                'startFilePos' => 10832,
                                'endTokenPos' => 1630,
                                'endFilePos' => 10833,
                            ],
                        ],
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
                        'startLine' => 330,
                        'endLine' => 330,
                        'startColumn' => 72,
                        'endColumn' => 93,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'cookies' => [
                        'name' => 'cookies',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 330,
                                'endLine' => 330,
                                'startTokenPos' => 1639,
                                'startFilePos' => 10853,
                                'endTokenPos' => 1640,
                                'endFilePos' => 10854,
                            ],
                        ],
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
                        'startLine' => 330,
                        'endLine' => 330,
                        'startColumn' => 96,
                        'endColumn' => 114,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'files' => [
                        'name' => 'files',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 330,
                                'endLine' => 330,
                                'startTokenPos' => 1649,
                                'startFilePos' => 10872,
                                'endTokenPos' => 1650,
                                'endFilePos' => 10873,
                            ],
                        ],
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
                        'startLine' => 330,
                        'endLine' => 330,
                        'startColumn' => 117,
                        'endColumn' => 133,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                    'server' => [
                        'name' => 'server',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 330,
                                'endLine' => 330,
                                'startTokenPos' => 1659,
                                'startFilePos' => 10892,
                                'endTokenPos' => 1660,
                                'endFilePos' => 10893,
                            ],
                        ],
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
                        'startLine' => 330,
                        'endLine' => 330,
                        'startColumn' => 136,
                        'endColumn' => 153,
                        'parameterIndex' => 5,
                        'isOptional' => true,
                    ],
                    'content' => [
                        'name' => 'content',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 330,
                                'endLine' => 330,
                                'startTokenPos' => 1667,
                                'startFilePos' => 10907,
                                'endTokenPos' => 1667,
                                'endFilePos' => 10910,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 330,
                        'endLine' => 330,
                        'startColumn' => 156,
                        'endColumn' => 170,
                        'parameterIndex' => 6,
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
 * Creates a Request based on a given URI and configuration.
 *
 * The information contained in the URI always take precedence
 * over the other information (server and parameters).
 *
 * @param string               $uri        The URI
 * @param string               $method     The HTTP method
 * @param array                $parameters The query (GET) or request (POST) parameters
 * @param array                $cookies    The request cookies ($_COOKIE)
 * @param array                $files      The request files ($_FILES)
 * @param array                $server     The server parameters ($_SERVER)
 * @param string|resource|null $content    The raw body data
 *
 * @throws BadRequestException When the URI is invalid
 */',
                'startLine' => 330,
                'endLine' => 446,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'setFactory' => [
                'name' => 'setFactory',
                'parameters' => [
                    'callable' => [
                        'name' => 'callable',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'callable',
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
                        'startLine' => 455,
                        'endLine' => 455,
                        'startColumn' => 39,
                        'endColumn' => 57,
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
 * Sets a callable able to create a Request instance.
 *
 * This is mainly useful when you need to override the Request class
 * to keep BC with an existing system. It should not be used for any
 * other purpose.
 */',
                'startLine' => 455,
                'endLine' => 458,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'duplicate' => [
                'name' => 'duplicate',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 470,
                                'endLine' => 470,
                                'startTokenPos' => 2804,
                                'startFilePos' => 16423,
                                'endTokenPos' => 2804,
                                'endFilePos' => 16426,
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
                        'startLine' => 470,
                        'endLine' => 470,
                        'startColumn' => 31,
                        'endColumn' => 50,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'request' => [
                        'name' => 'request',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 470,
                                'endLine' => 470,
                                'startTokenPos' => 2814,
                                'startFilePos' => 16447,
                                'endTokenPos' => 2814,
                                'endFilePos' => 16450,
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
                        'startLine' => 470,
                        'endLine' => 470,
                        'startColumn' => 53,
                        'endColumn' => 74,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 470,
                                'endLine' => 470,
                                'startTokenPos' => 2824,
                                'startFilePos' => 16474,
                                'endTokenPos' => 2824,
                                'endFilePos' => 16477,
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
                        'startLine' => 470,
                        'endLine' => 470,
                        'startColumn' => 77,
                        'endColumn' => 101,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'cookies' => [
                        'name' => 'cookies',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 470,
                                'endLine' => 470,
                                'startTokenPos' => 2834,
                                'startFilePos' => 16498,
                                'endTokenPos' => 2834,
                                'endFilePos' => 16501,
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
                        'startLine' => 470,
                        'endLine' => 470,
                        'startColumn' => 104,
                        'endColumn' => 125,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'files' => [
                        'name' => 'files',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 470,
                                'endLine' => 470,
                                'startTokenPos' => 2844,
                                'startFilePos' => 16520,
                                'endTokenPos' => 2844,
                                'endFilePos' => 16523,
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
                        'startLine' => 470,
                        'endLine' => 470,
                        'startColumn' => 128,
                        'endColumn' => 147,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                    'server' => [
                        'name' => 'server',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 470,
                                'endLine' => 470,
                                'startTokenPos' => 2854,
                                'startFilePos' => 16543,
                                'endTokenPos' => 2854,
                                'endFilePos' => 16546,
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
                        'startLine' => 470,
                        'endLine' => 470,
                        'startColumn' => 150,
                        'endColumn' => 170,
                        'parameterIndex' => 5,
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
 * Clones a request and overrides some of its parameters.
 *
 * @param array|null $query      The GET parameters
 * @param array|null $request    The POST parameters
 * @param array|null $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
 * @param array|null $cookies    The COOKIE parameters
 * @param array|null $files      The FILES parameters
 * @param array|null $server     The SERVER parameters
 */',
                'startLine' => 470,
                'endLine' => 512,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            '__clone' => [
                'name' => '__clone',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Clones the current request.
 *
 * Note that the session is not cloned as duplicated requests
 * are most of the time sub-requests of the main one.
 */',
                'startLine' => 520,
                'endLine' => 529,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            '__toString' => [
                'name' => '__toString',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 531,
                'endLine' => 551,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'overrideGlobals' => [
                'name' => 'overrideGlobals',
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
 * Overrides the PHP global variables according to this request instance.
 *
 * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
 * $_FILES is never overridden, see rfc1867
 */',
                'startLine' => 559,
                'endLine' => 589,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'setTrustedProxies' => [
                'name' => 'setTrustedProxies',
                'parameters' => [
                    'proxies' => [
                        'name' => 'proxies',
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
                        'startLine' => 599,
                        'endLine' => 599,
                        'startColumn' => 46,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'trustedHeaderSet' => [
                        'name' => 'trustedHeaderSet',
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
                        'startLine' => 599,
                        'endLine' => 599,
                        'startColumn' => 62,
                        'endColumn' => 82,
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
 * Sets a list of trusted proxies.
 *
 * You should only list the reverse proxies that you manage directly.
 *
 * @param array                          $proxies          A list of trusted proxies, the string \'REMOTE_ADDR\' will be replaced with $_SERVER[\'REMOTE_ADDR\'] and \'PRIVATE_SUBNETS\' by IpUtils::PRIVATE_SUBNETS
 * @param int-mask-of<Request::HEADER_*> $trustedHeaderSet A bit field to set which headers to trust from your proxies
 */',
                'startLine' => 599,
                'endLine' => 617,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getTrustedProxies' => [
                'name' => 'getTrustedProxies',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the list of trusted proxies.
 *
 * @return string[]
 */',
                'startLine' => 624,
                'endLine' => 627,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getTrustedHeaderSet' => [
                'name' => 'getTrustedHeaderSet',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'int',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the set of trusted headers from trusted proxies.
 *
 * @return int A bit field of Request::HEADER_* that defines which headers are trusted from your proxies
 */',
                'startLine' => 634,
                'endLine' => 637,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'setTrustedHosts' => [
                'name' => 'setTrustedHosts',
                'parameters' => [
                    'hostPatterns' => [
                        'name' => 'hostPatterns',
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
                        'startLine' => 646,
                        'endLine' => 646,
                        'startColumn' => 44,
                        'endColumn' => 62,
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
 * Sets a list of trusted host patterns.
 *
 * You should only list the hosts you manage using regexs.
 *
 * @param array $hostPatterns A list of trusted host patterns
 */',
                'startLine' => 646,
                'endLine' => 651,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getTrustedHosts' => [
                'name' => 'getTrustedHosts',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the list of trusted host patterns.
 *
 * @return string[]
 */',
                'startLine' => 658,
                'endLine' => 661,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'normalizeQueryString' => [
                'name' => 'normalizeQueryString',
                'parameters' => [
                    'qs' => [
                        'name' => 'qs',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 669,
                        'endLine' => 669,
                        'startColumn' => 49,
                        'endColumn' => 59,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Normalizes a query string.
 *
 * It builds a normalized query string, where keys/value pairs are alphabetized,
 * have consistent escaping and unneeded delimiters are removed.
 */',
                'startLine' => 669,
                'endLine' => 679,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'enableHttpMethodParameterOverride' => [
                'name' => 'enableHttpMethodParameterOverride',
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
 * Enables support for the _method request parameter to determine the intended HTTP method.
 *
 * Be warned that enabling this feature might lead to CSRF issues in your code.
 * Check that you are using CSRF tokens when required.
 * If the HTTP method parameter override is enabled, an html-form with method "POST" can be altered
 * and used to send a "PUT" or "DELETE" request via the _method request parameter.
 * If these methods are not protected against CSRF, this presents a possible vulnerability.
 *
 * The HTTP method can only be overridden when the real HTTP method is POST.
 */',
                'startLine' => 692,
                'endLine' => 695,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getHttpMethodParameterOverride' => [
                'name' => 'getHttpMethodParameterOverride',
                'parameters' => [
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
 * Checks whether support for the _method request parameter is enabled.
 */',
                'startLine' => 700,
                'endLine' => 703,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'setAllowedHttpMethodOverride' => [
                'name' => 'setAllowedHttpMethodOverride',
                'parameters' => [
                    'methods' => [
                        'name' => 'methods',
                        'default' => null,
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
                        'startLine' => 714,
                        'endLine' => 714,
                        'startColumn' => 57,
                        'endColumn' => 71,
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
 * Sets the list of HTTP methods that can be overridden.
 *
 * Set to null to allow all methods to be overridden (default). Set to an
 * empty array to disallow overrides entirely. Otherwise, provide the list
 * of uppercased method names that are allowed.
 *
 * @param uppercase-string[]|null $methods
 */',
                'startLine' => 714,
                'endLine' => 721,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getAllowedHttpMethodOverride' => [
                'name' => 'getAllowedHttpMethodOverride',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the list of HTTP methods that can be overridden.
 *
 * @return uppercase-string[]|null
 */',
                'startLine' => 728,
                'endLine' => 731,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'get' => [
                'name' => 'get',
                'parameters' => [
                    'key' => [
                        'name' => 'key',
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
                        'startLine' => 744,
                        'endLine' => 744,
                        'startColumn' => 25,
                        'endColumn' => 35,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 744,
                                'endLine' => 744,
                                'startTokenPos' => 4447,
                                'startFilePos' => 25957,
                                'endTokenPos' => 4447,
                                'endFilePos' => 25960,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                            'data' => [
                                'name' => 'mixed',
                                'isIdentifier' => true,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 744,
                        'endLine' => 744,
                        'startColumn' => 38,
                        'endColumn' => 58,
                        'parameterIndex' => 1,
                        'isOptional' => true,
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
 * Gets a "parameter" value from any bag.
 *
 * This method is mainly useful for libraries that want to provide some flexibility. If you don\'t need the
 * flexibility in controllers, it is better to explicitly get request parameters from the appropriate
 * public property instead (attributes, query, request).
 *
 * Order of precedence: PATH (routing placeholders or custom attributes), GET, POST
 *
 * @deprecated since Symfony 7.4, use properties `->attributes`, `query` or `request` directly instead
 */',
                'startLine' => 744,
                'endLine' => 761,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getSession' => [
                'name' => 'getSession',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the Session.
 *
 * @throws SessionNotFoundException When session is not set properly
 */',
                'startLine' => 768,
                'endLine' => 780,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'hasPreviousSession' => [
                'name' => 'hasPreviousSession',
                'parameters' => [
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
 * Whether the request contains a Session which was started in one of the
 * previous requests.
 */',
                'startLine' => 786,
                'endLine' => 790,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'hasSession' => [
                'name' => 'hasSession',
                'parameters' => [
                    'skipIfUninitialized' => [
                        'name' => 'skipIfUninitialized',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 801,
                                'endLine' => 801,
                                'startTokenPos' => 4722,
                                'startFilePos' => 27834,
                                'endTokenPos' => 4722,
                                'endFilePos' => 27838,
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
                        'startLine' => 801,
                        'endLine' => 801,
                        'startColumn' => 32,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
                        'isOptional' => true,
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
 * Whether the request contains a Session object.
 *
 * This method does not give any information about the state of the session object,
 * like whether the session is started or not. It is just a way to check if this Request
 * is associated with a Session instance.
 *
 * @param bool $skipIfUninitialized When true, ignores factories injected by `setSessionFactory`
 */',
                'startLine' => 801,
                'endLine' => 804,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
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
                                'name' => 'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface',
                                'isIdentifier' => false,
                            ],
                        ],
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 806,
                        'endLine' => 806,
                        'startColumn' => 32,
                        'endColumn' => 56,
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
                'docComment' => null,
                'startLine' => 806,
                'endLine' => 809,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'setSessionFactory' => [
                'name' => 'setSessionFactory',
                'parameters' => [
                    'factory' => [
                        'name' => 'factory',
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
                        'startLine' => 816,
                        'endLine' => 816,
                        'startColumn' => 39,
                        'endColumn' => 55,
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
 * @internal
 *
 * @param callable(): SessionInterface $factory
 */',
                'startLine' => 816,
                'endLine' => 819,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getClientIps' => [
                'name' => 'getClientIps',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the client IP addresses.
 *
 * In the returned array the most trusted IP address is first, and the
 * least trusted one last. The "real" client IP address is the last one,
 * but this is also the least trusted one. Trusted proxies are stripped.
 *
 * Use this method carefully; you should use getClientIp() instead.
 *
 * @see getClientIp()
 */',
                'startLine' => 832,
                'endLine' => 841,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getClientIp' => [
                'name' => 'getClientIp',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the client IP address.
 *
 * This method can read the client IP address from the "X-Forwarded-For" header
 * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
 * header value is a comma+space separated list of IP addresses, the left-most
 * being the original client, and each successive proxy that passed the request
 * adding the IP address where it received the request from.
 *
 * If your reverse proxy uses a different header name than "X-Forwarded-For",
 * ("Client-Ip" for instance), configure it via the $trustedHeaderSet
 * argument of the Request::setTrustedProxies() method instead.
 *
 * @see getClientIps()
 * @see https://wikipedia.org/wiki/X-Forwarded-For
 */',
                'startLine' => 859,
                'endLine' => 862,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getScriptName' => [
                'name' => 'getScriptName',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns current script name.
 */',
                'startLine' => 867,
                'endLine' => 870,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getPathInfo' => [
                'name' => 'getPathInfo',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the path being requested relative to the executed script.
 *
 * The path info always starts with a /.
 *
 * Suppose this request is instantiated from /mysite on localhost:
 *
 *  * http://localhost/mysite              returns \'/\'
 *  * http://localhost/mysite/about        returns \'/about\'
 *  * http://localhost/mysite/enco%20ded   returns \'/enco%20ded\'
 *  * http://localhost/mysite/about?var=1  returns \'/about\'
 *
 * @return string The raw path (i.e. not urldecoded)
 */',
                'startLine' => 886,
                'endLine' => 889,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getBasePath' => [
                'name' => 'getBasePath',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the root path from which this request is executed.
 *
 * Suppose that an index.php file instantiates this request object:
 *
 *  * http://localhost/index.php         returns an empty string
 *  * http://localhost/index.php/page    returns an empty string
 *  * http://localhost/web/index.php     returns \'/web\'
 *  * http://localhost/we%20b/index.php  returns \'/we%20b\'
 *
 * @return string The raw path (i.e. not urldecoded)
 */',
                'startLine' => 903,
                'endLine' => 906,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getBaseUrl' => [
                'name' => 'getBaseUrl',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the root URL from which this request is executed.
 *
 * The base URL never ends with a /.
 *
 * This is similar to getBasePath(), except that it also includes the
 * script filename (e.g. index.php) if one exists.
 *
 * @return string The raw URL (i.e. not urldecoded)
 */',
                'startLine' => 918,
                'endLine' => 928,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getBaseUrlReal' => [
                'name' => 'getBaseUrlReal',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the real base URL received by the webserver from which this request is executed.
 * The URL does not include trusted reverse proxy prefix.
 *
 * @return string The raw URL (i.e. not urldecoded)
 */',
                'startLine' => 936,
                'endLine' => 939,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getScheme' => [
                'name' => 'getScheme',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the request\'s scheme.
 */',
                'startLine' => 944,
                'endLine' => 947,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getPort' => [
                'name' => 'getPort',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'int',
                                    'isIdentifier' => true,
                                ],
                            ],
                            1 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
                                    'isIdentifier' => true,
                                ],
                            ],
                            2 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'null',
                                    'isIdentifier' => true,
                                ],
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the port on which the request is made.
 *
 * This method can read the client port from the "X-Forwarded-Port" header
 * when trusted proxies were set via "setTrustedProxies()".
 *
 * The "X-Forwarded-Port" header must contain the client port.
 *
 * @return int|string|null Can be a string if fetched from the server bag
 */',
                'startLine' => 959,
                'endLine' => 980,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getUser' => [
                'name' => 'getUser',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the user.
 */',
                'startLine' => 985,
                'endLine' => 988,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getPassword' => [
                'name' => 'getPassword',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the password.
 */',
                'startLine' => 993,
                'endLine' => 996,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getUserInfo' => [
                'name' => 'getUserInfo',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the user info.
 *
 * @return string|null A user name if any and, optionally, scheme-specific information about how to gain authorization to access the server
 */',
                'startLine' => 1003,
                'endLine' => 1013,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getHttpHost' => [
                'name' => 'getHttpHost',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the HTTP host being requested.
 *
 * The port name will be appended to the host if it\'s non-standard.
 */',
                'startLine' => 1020,
                'endLine' => 1030,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getRequestUri' => [
                'name' => 'getRequestUri',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the requested URI (path and query string).
 *
 * @return string The raw URI (i.e. not URI decoded)
 */',
                'startLine' => 1037,
                'endLine' => 1040,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getSchemeAndHttpHost' => [
                'name' => 'getSchemeAndHttpHost',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the scheme and HTTP host.
 *
 * If the URL was called with basic authentication, the user
 * and the password are not added to the generated string.
 */',
                'startLine' => 1048,
                'endLine' => 1051,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getUri' => [
                'name' => 'getUri',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Generates a normalized URI (URL) for the Request.
 *
 * @see getQueryString()
 */',
                'startLine' => 1058,
                'endLine' => 1065,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getUriForPath' => [
                'name' => 'getUriForPath',
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
                        'startLine' => 1072,
                        'endLine' => 1072,
                        'startColumn' => 35,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Generates a normalized URI for the given path.
 *
 * @param string $path A path to use instead of the current one
 */',
                'startLine' => 1072,
                'endLine' => 1075,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getRelativeUriForPath' => [
                'name' => 'getRelativeUriForPath',
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
                        'startLine' => 1092,
                        'endLine' => 1092,
                        'startColumn' => 43,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the path as relative reference from the current Request path.
 *
 * Only the URIs path component (no schema, host etc.) is relevant and must be given.
 * Both paths must be absolute and not contain relative parts.
 * Relative URLs from one resource to another are useful when generating self-contained downloadable document archives.
 * Furthermore, they can be used to reduce the link size in documents.
 *
 * Example target paths, given a base path of "/a/b/c/d":
 * - "/a/b/c/d"     -> ""
 * - "/a/b/c/"      -> "./"
 * - "/a/b/"        -> "../"
 * - "/a/b/c/other" -> "other"
 * - "/a/x/y"       -> "../../x/y"
 */',
                'startLine' => 1092,
                'endLine' => 1126,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getQueryString' => [
                'name' => 'getQueryString',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Generates the normalized query string for the Request.
 *
 * It builds a normalized query string, where keys/value pairs are alphabetized
 * and have consistent escaping.
 */',
                'startLine' => 1134,
                'endLine' => 1139,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'isSecure' => [
                'name' => 'isSecure',
                'parameters' => [
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
 * Checks whether the request is secure or not.
 *
 * This method can read the client protocol from the "X-Forwarded-Proto" header
 * when trusted proxies were set via "setTrustedProxies()".
 *
 * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
 */',
                'startLine' => 1149,
                'endLine' => 1158,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getHost' => [
                'name' => 'getHost',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the host name.
 *
 * This method can read the client host name from the "X-Forwarded-Host" header
 * when trusted proxies were set via "setTrustedProxies()".
 *
 * The "X-Forwarded-Host" header must contain the client host name.
 *
 * @throws SuspiciousOperationException when the host name is invalid or not trusted
 */',
                'startLine' => 1170,
                'endLine' => 1216,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'setMethod' => [
                'name' => 'setMethod',
                'parameters' => [
                    'method' => [
                        'name' => 'method',
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
                        'startLine' => 1221,
                        'endLine' => 1221,
                        'startColumn' => 31,
                        'endColumn' => 44,
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
 * Sets the request method.
 */',
                'startLine' => 1221,
                'endLine' => 1225,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getMethod' => [
                'name' => 'getMethod',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the request "intended" method.
 *
 * If the X-HTTP-Method-Override header is set, and if the method is a POST,
 * then it is used to determine the "real" intended HTTP method.
 *
 * The _method request parameter can also be used to determine the HTTP method,
 * but only if enableHttpMethodParameterOverride() has been called.
 *
 * The method is always an uppercased string.
 *
 * @see getRealMethod()
 */',
                'startLine' => 1240,
                'endLine' => 1277,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getRealMethod' => [
                'name' => 'getRealMethod',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the "real" request method.
 *
 * @see getMethod()
 */',
                'startLine' => 1284,
                'endLine' => 1287,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getMimeType' => [
                'name' => 'getMimeType',
                'parameters' => [
                    'format' => [
                        'name' => 'format',
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
                        'startLine' => 1292,
                        'endLine' => 1292,
                        'startColumn' => 33,
                        'endColumn' => 46,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the mime type associated with the format.
 */',
                'startLine' => 1292,
                'endLine' => 1299,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getMimeTypes' => [
                'name' => 'getMimeTypes',
                'parameters' => [
                    'format' => [
                        'name' => 'format',
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
                        'startLine' => 1306,
                        'endLine' => 1306,
                        'startColumn' => 41,
                        'endColumn' => 54,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the mime types associated with the format.
 *
 * @return string[]
 */',
                'startLine' => 1306,
                'endLine' => 1313,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 17,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getFormat' => [
                'name' => 'getFormat',
                'parameters' => [
                    'mimeType' => [
                        'name' => 'mimeType',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 1330,
                        'endLine' => 1330,
                        'startColumn' => 31,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the format associated with the mime type.
 *
 *  Resolution order:
 *   1) Exact match on the full MIME type (e.g. "application/json").
 *   2) Match on the canonical MIME type (i.e. before the first ";" parameter).
 *   3) If the type is "application/*+suffix", use the structured syntax suffix
 *      mapping (e.g. "application/foo+json" → "json"), when available.
 *   4) If $subtypeFallback is true and no match was found:
 *      - return the MIME subtype (without "x-" prefix), provided it does not
 *        contain a "+" (e.g. "application/x-yaml" → "yaml", "text/csv" → "csv").
 *
 * @param string|null $mimeType        The mime type to check
 * @param bool        $subtypeFallback Whether to fall back to the subtype if no exact match is found
 */',
                'startLine' => 1330,
                'endLine' => 1380,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => true,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'setFormat' => [
                'name' => 'setFormat',
                'parameters' => [
                    'format' => [
                        'name' => 'format',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 1388,
                        'endLine' => 1388,
                        'startColumn' => 31,
                        'endColumn' => 45,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'mimeTypes' => [
                        'name' => 'mimeTypes',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
                                            'isIdentifier' => true,
                                        ],
                                    ],
                                    1 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'array',
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
                        'startLine' => 1388,
                        'endLine' => 1388,
                        'startColumn' => 48,
                        'endColumn' => 70,
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
 * Associates a format with mime types.
 *
 * @param string          $format    The format to set
 * @param string|string[] $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
 */',
                'startLine' => 1388,
                'endLine' => 1400,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getRequestFormat' => [
                'name' => 'getRequestFormat',
                'parameters' => [
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => '\'html\'',
                            'attributes' => [
                                'startLine' => 1413,
                                'endLine' => 1413,
                                'startTokenPos' => 7765,
                                'startFilePos' => 48064,
                                'endTokenPos' => 7765,
                                'endFilePos' => 48069,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 1413,
                        'endLine' => 1413,
                        'startColumn' => 38,
                        'endColumn' => 62,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the request format.
 *
 * Here is the process to determine the format:
 *
 *  * format defined by the user (with setRequestFormat())
 *  * _format request attribute
 *  * $default
 *
 * @see getPreferredFormat
 */',
                'startLine' => 1413,
                'endLine' => 1418,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'setRequestFormat' => [
                'name' => 'setRequestFormat',
                'parameters' => [
                    'format' => [
                        'name' => 'format',
                        'default' => null,
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 1423,
                        'endLine' => 1423,
                        'startColumn' => 38,
                        'endColumn' => 52,
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
 * Sets the request format.
 */',
                'startLine' => 1423,
                'endLine' => 1426,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getContentTypeFormat' => [
                'name' => 'getContentTypeFormat',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the usual name of the format associated with the request\'s media type (provided in the Content-Type header).
 *
 * @see Request::$formats
 */',
                'startLine' => 1433,
                'endLine' => 1436,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'setDefaultLocale' => [
                'name' => 'setDefaultLocale',
                'parameters' => [
                    'locale' => [
                        'name' => 'locale',
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
                        'startLine' => 1441,
                        'endLine' => 1441,
                        'startColumn' => 38,
                        'endColumn' => 51,
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
 * Sets the default locale.
 */',
                'startLine' => 1441,
                'endLine' => 1448,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getDefaultLocale' => [
                'name' => 'getDefaultLocale',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the default locale.
 */',
                'startLine' => 1453,
                'endLine' => 1456,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'setLocale' => [
                'name' => 'setLocale',
                'parameters' => [
                    'locale' => [
                        'name' => 'locale',
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
                        'startLine' => 1461,
                        'endLine' => 1461,
                        'startColumn' => 31,
                        'endColumn' => 44,
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
 * Sets the locale.
 */',
                'startLine' => 1461,
                'endLine' => 1464,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getLocale' => [
                'name' => 'getLocale',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Get the locale.
 */',
                'startLine' => 1469,
                'endLine' => 1472,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'isMethod' => [
                'name' => 'isMethod',
                'parameters' => [
                    'method' => [
                        'name' => 'method',
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
                        'startLine' => 1479,
                        'endLine' => 1479,
                        'startColumn' => 30,
                        'endColumn' => 43,
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
 * Checks if the request method is of specified type.
 *
 * @param string $method Uppercase request method (GET, POST etc)
 */',
                'startLine' => 1479,
                'endLine' => 1482,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'isMethodSafe' => [
                'name' => 'isMethodSafe',
                'parameters' => [
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
 * Checks whether or not the method is safe.
 *
 * @see https://tools.ietf.org/html/rfc7231#section-4.2.1
 */',
                'startLine' => 1489,
                'endLine' => 1492,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'isMethodIdempotent' => [
                'name' => 'isMethodIdempotent',
                'parameters' => [
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
 * Checks whether or not the method is idempotent.
 */',
                'startLine' => 1497,
                'endLine' => 1500,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'isMethodCacheable' => [
                'name' => 'isMethodCacheable',
                'parameters' => [
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
 * Checks whether the method is cacheable or not.
 *
 * @see https://tools.ietf.org/html/rfc7231#section-4.2.3
 */',
                'startLine' => 1507,
                'endLine' => 1510,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getProtocolVersion' => [
                'name' => 'getProtocolVersion',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the protocol version.
 *
 * If the application is behind a proxy, the protocol version used in the
 * requests between the client and the proxy and between the proxy and the
 * server might be different. This returns the former (from the "Via" header)
 * if the proxy is trusted (see "setTrustedProxies()"), otherwise it returns
 * the latter (from the "SERVER_PROTOCOL" server parameter).
 */',
                'startLine' => 1521,
                'endLine' => 1532,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getContent' => [
                'name' => 'getContent',
                'parameters' => [
                    'asResource' => [
                        'name' => 'asResource',
                        'default' => [
                            'code' => 'false',
                            'attributes' => [
                                'startLine' => 1543,
                                'endLine' => 1543,
                                'startTokenPos' => 8299,
                                'startFilePos' => 51562,
                                'endTokenPos' => 8299,
                                'endFilePos' => 51566,
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
                        'startLine' => 1543,
                        'endLine' => 1543,
                        'startColumn' => 32,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => null,
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the request body content.
 *
 * @param bool $asResource If true, a resource will be returned
 *
 * @return string|resource
 *
 * @psalm-return ($asResource is true ? resource : string)
 */',
                'startLine' => 1543,
                'endLine' => 1577,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getPayload' => [
                'name' => 'getPayload',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'Symfony\\Component\\HttpFoundation\\InputBag',
                        'isIdentifier' => false,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the decoded form or json request body.
 *
 * @throws JsonException When the body cannot be decoded to an array
 */',
                'startLine' => 1584,
                'endLine' => 1605,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'toArray' => [
                'name' => 'toArray',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the request body decoded as array, typically from a JSON payload.
 *
 * @see getPayload() for portability between content types
 *
 * @throws JsonException When the body cannot be decoded to an array
 */',
                'startLine' => 1614,
                'endLine' => 1631,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getETags' => [
                'name' => 'getETags',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the Etags.
 */',
                'startLine' => 1636,
                'endLine' => 1639,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'isNoCache' => [
                'name' => 'isNoCache',
                'parameters' => [
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
                'docComment' => null,
                'startLine' => 1641,
                'endLine' => 1644,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getPreferredFormat' => [
                'name' => 'getPreferredFormat',
                'parameters' => [
                    'default' => [
                        'name' => 'default',
                        'default' => [
                            'code' => '\'html\'',
                            'attributes' => [
                                'startLine' => 1654,
                                'endLine' => 1654,
                                'startTokenPos' => 8925,
                                'startFilePos' => 55022,
                                'endTokenPos' => 8925,
                                'endFilePos' => 55027,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 1654,
                        'endLine' => 1654,
                        'startColumn' => 40,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets the preferred format for the response by inspecting, in the following order:
 *   * the request format set using setRequestFormat;
 *   * the values of the Accept HTTP header.
 *
 * Note that if you use this method, you should send the "Vary: Accept" header
 * in the response to prevent any issues with intermediary HTTP caches.
 */',
                'startLine' => 1654,
                'endLine' => 1671,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getPreferredLanguage' => [
                'name' => 'getPreferredLanguage',
                'parameters' => [
                    'locales' => [
                        'name' => 'locales',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 1678,
                                'endLine' => 1678,
                                'startTokenPos' => 9067,
                                'startFilePos' => 55753,
                                'endTokenPos' => 9067,
                                'endFilePos' => 55756,
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
                        'startLine' => 1678,
                        'endLine' => 1678,
                        'startColumn' => 42,
                        'endColumn' => 63,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the preferred language.
 *
 * @param string[] $locales An array of ordered available locales
 */',
                'startLine' => 1678,
                'endLine' => 1701,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getLanguages' => [
                'name' => 'getLanguages',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets a list of languages acceptable by the client browser ordered in the user browser preferences.
 *
 * @return string[]
 */',
                'startLine' => 1708,
                'endLine' => 1723,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'formatLocale' => [
                'name' => 'formatLocale',
                'parameters' => [
                    'locale' => [
                        'name' => 'locale',
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
                        'startLine' => 1739,
                        'endLine' => 1739,
                        'startColumn' => 42,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Strips the locale to only keep the canonicalized language value.
 *
 * Depending on the $locale value, this method can return values like :
 * - language_Script_REGION: "fr_Latn_FR", "zh_Hans_TW"
 * - language_Script: "fr_Latn", "zh_Hans"
 * - language_REGION: "fr_FR", "zh_TW"
 * - language: "fr", "zh"
 *
 * Invalid locale values are returned as is.
 *
 * @see https://wikipedia.org/wiki/IETF_language_tag
 * @see https://datatracker.ietf.org/doc/html/rfc5646
 */',
                'startLine' => 1739,
                'endLine' => 1744,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getLanguageCombinations' => [
                'name' => 'getLanguageCombinations',
                'parameters' => [
                    'locale' => [
                        'name' => 'locale',
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
                        'startLine' => 1757,
                        'endLine' => 1757,
                        'startColumn' => 53,
                        'endColumn' => 66,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns an array of all possible combinations of the language components.
 *
 * For instance, if the locale is "fr_Latn_FR", this method will return:
 * - "fr_Latn_FR"
 * - "fr_Latn"
 * - "fr_FR"
 * - "fr"
 *
 * @return string[]
 */',
                'startLine' => 1757,
                'endLine' => 1767,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getLanguageComponents' => [
                'name' => 'getLanguageComponents',
                'parameters' => [
                    'locale' => [
                        'name' => 'locale',
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
                        'startLine' => 1782,
                        'endLine' => 1782,
                        'startColumn' => 51,
                        'endColumn' => 64,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns an array with the language components of the locale.
 *
 * For example:
 * - If the locale is "fr_Latn_FR", this method will return "fr", "Latn", "FR"
 * - If the locale is "fr_FR", this method will return "fr", null, "FR"
 * - If the locale is "zh_Hans", this method will return "zh", "Hans", null
 *
 * @see https://wikipedia.org/wiki/IETF_language_tag
 * @see https://datatracker.ietf.org/doc/html/rfc5646
 *
 * @return array{string, string|null, string|null}
 */',
                'startLine' => 1782,
                'endLine' => 1801,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getCharsets' => [
                'name' => 'getCharsets',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets a list of charsets acceptable by the client browser in preferable order.
 *
 * @return string[]
 */',
                'startLine' => 1808,
                'endLine' => 1811,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getEncodings' => [
                'name' => 'getEncodings',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets a list of encodings acceptable by the client browser in preferable order.
 *
 * @return string[]
 */',
                'startLine' => 1818,
                'endLine' => 1821,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getAcceptableContentTypes' => [
                'name' => 'getAcceptableContentTypes',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Gets a list of content types acceptable by the client browser in preferable order.
 *
 * @return string[]
 */',
                'startLine' => 1828,
                'endLine' => 1831,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'isXmlHttpRequest' => [
                'name' => 'isXmlHttpRequest',
                'parameters' => [
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
 * Returns true if the request is an XMLHttpRequest.
 *
 * It works if your JavaScript library sets an X-Requested-With HTTP header.
 * It is known to work with common JavaScript frameworks:
 *
 * @see https://wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
 */',
                'startLine' => 1841,
                'endLine' => 1844,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'preferSafeContent' => [
                'name' => 'preferSafeContent',
                'parameters' => [
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
 * Checks whether the client browser prefers safe content or not according to RFC8674.
 *
 * @see https://tools.ietf.org/html/rfc8674
 */',
                'startLine' => 1851,
                'endLine' => 1863,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'prepareRequestUri' => [
                'name' => 'prepareRequestUri',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 1873,
                'endLine' => 1915,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'prepareBaseUrl' => [
                'name' => 'prepareBaseUrl',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Prepares the base URL.
 */',
                'startLine' => 1920,
                'endLine' => 1982,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'prepareBasePath' => [
                'name' => 'prepareBasePath',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Prepares the base path.
 */',
                'startLine' => 1987,
                'endLine' => 2006,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'preparePathInfo' => [
                'name' => 'preparePathInfo',
                'parameters' => [
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'string',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * Prepares the path info.
 */',
                'startLine' => 2011,
                'endLine' => 2035,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 2,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'initializeFormats' => [
                'name' => 'initializeFormats',
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
 * Initializes HTTP request formats.
 */',
                'startLine' => 2040,
                'endLine' => 2063,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 18,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'setPhpDefaultLocale' => [
                'name' => 'setPhpDefaultLocale',
                'parameters' => [
                    'locale' => [
                        'name' => 'locale',
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
                        'startLine' => 2065,
                        'endLine' => 2065,
                        'startColumn' => 42,
                        'endColumn' => 55,
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
                'docComment' => null,
                'startLine' => 2065,
                'endLine' => 2076,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getUrlencodedPrefix' => [
                'name' => 'getUrlencodedPrefix',
                'parameters' => [
                    'string' => [
                        'name' => 'string',
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
                        'startLine' => 2082,
                        'endLine' => 2082,
                        'startColumn' => 42,
                        'endColumn' => 55,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'prefix' => [
                        'name' => 'prefix',
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
                        'startLine' => 2082,
                        'endLine' => 2082,
                        'startColumn' => 58,
                        'endColumn' => 71,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                    'data' => [
                        'types' => [
                            0 => [
                                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                'data' => [
                                    'name' => 'string',
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
                'attributes' => [
                ],
                'docComment' => '/**
 * Returns the prefix as encoded in the string when the string starts with
 * the given prefix, null otherwise.
 */',
                'startLine' => 2082,
                'endLine' => 2101,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'createRequestFromFactory' => [
                'name' => 'createRequestFromFactory',
                'parameters' => [
                    'query' => [
                        'name' => 'query',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 2103,
                                'endLine' => 2103,
                                'startTokenPos' => 11814,
                                'startFilePos' => 70892,
                                'endTokenPos' => 11815,
                                'endFilePos' => 70893,
                            ],
                        ],
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
                        'startLine' => 2103,
                        'endLine' => 2103,
                        'startColumn' => 54,
                        'endColumn' => 70,
                        'parameterIndex' => 0,
                        'isOptional' => true,
                    ],
                    'request' => [
                        'name' => 'request',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 2103,
                                'endLine' => 2103,
                                'startTokenPos' => 11824,
                                'startFilePos' => 70913,
                                'endTokenPos' => 11825,
                                'endFilePos' => 70914,
                            ],
                        ],
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
                        'startLine' => 2103,
                        'endLine' => 2103,
                        'startColumn' => 73,
                        'endColumn' => 91,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                    'attributes' => [
                        'name' => 'attributes',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 2103,
                                'endLine' => 2103,
                                'startTokenPos' => 11834,
                                'startFilePos' => 70937,
                                'endTokenPos' => 11835,
                                'endFilePos' => 70938,
                            ],
                        ],
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
                        'startLine' => 2103,
                        'endLine' => 2103,
                        'startColumn' => 94,
                        'endColumn' => 115,
                        'parameterIndex' => 2,
                        'isOptional' => true,
                    ],
                    'cookies' => [
                        'name' => 'cookies',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 2103,
                                'endLine' => 2103,
                                'startTokenPos' => 11844,
                                'startFilePos' => 70958,
                                'endTokenPos' => 11845,
                                'endFilePos' => 70959,
                            ],
                        ],
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
                        'startLine' => 2103,
                        'endLine' => 2103,
                        'startColumn' => 118,
                        'endColumn' => 136,
                        'parameterIndex' => 3,
                        'isOptional' => true,
                    ],
                    'files' => [
                        'name' => 'files',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 2103,
                                'endLine' => 2103,
                                'startTokenPos' => 11854,
                                'startFilePos' => 70977,
                                'endTokenPos' => 11855,
                                'endFilePos' => 70978,
                            ],
                        ],
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
                        'startLine' => 2103,
                        'endLine' => 2103,
                        'startColumn' => 139,
                        'endColumn' => 155,
                        'parameterIndex' => 4,
                        'isOptional' => true,
                    ],
                    'server' => [
                        'name' => 'server',
                        'default' => [
                            'code' => '[]',
                            'attributes' => [
                                'startLine' => 2103,
                                'endLine' => 2103,
                                'startTokenPos' => 11864,
                                'startFilePos' => 70997,
                                'endTokenPos' => 11865,
                                'endFilePos' => 70998,
                            ],
                        ],
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
                        'startLine' => 2103,
                        'endLine' => 2103,
                        'startColumn' => 158,
                        'endColumn' => 175,
                        'parameterIndex' => 5,
                        'isOptional' => true,
                    ],
                    'content' => [
                        'name' => 'content',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2103,
                                'endLine' => 2103,
                                'startTokenPos' => 11872,
                                'startFilePos' => 71012,
                                'endTokenPos' => 11872,
                                'endFilePos' => 71015,
                            ],
                        ],
                        'type' => null,
                        'isVariadic' => false,
                        'byRef' => false,
                        'isPromoted' => false,
                        'attributes' => [
                        ],
                        'startLine' => 2103,
                        'endLine' => 2103,
                        'startColumn' => 178,
                        'endColumn' => 192,
                        'parameterIndex' => 6,
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
                'docComment' => null,
                'startLine' => 2103,
                'endLine' => 2116,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'isFromTrustedProxy' => [
                'name' => 'isFromTrustedProxy',
                'parameters' => [
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
 * Indicates whether this request originated from a trusted proxy.
 *
 * This can be useful to determine whether or not to trust the
 * contents of a proxy-specific header.
 */',
                'startLine' => 2124,
                'endLine' => 2127,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 1,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'getTrustedValues' => [
                'name' => 'getTrustedValues',
                'parameters' => [
                    'type' => [
                        'name' => 'type',
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
                        'startLine' => 2134,
                        'endLine' => 2134,
                        'startColumn' => 39,
                        'endColumn' => 47,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'ip' => [
                        'name' => 'ip',
                        'default' => [
                            'code' => 'null',
                            'attributes' => [
                                'startLine' => 2134,
                                'endLine' => 2134,
                                'startTokenPos' => 12052,
                                'startFilePos' => 72244,
                                'endTokenPos' => 12052,
                                'endFilePos' => 72247,
                            ],
                        ],
                        'type' => [
                            'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
                            'data' => [
                                'types' => [
                                    0 => [
                                        'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                                        'data' => [
                                            'name' => 'string',
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
                        'startLine' => 2134,
                        'endLine' => 2134,
                        'startColumn' => 50,
                        'endColumn' => 67,
                        'parameterIndex' => 1,
                        'isOptional' => true,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => '/**
 * This method is rather heavy because it splits and merges headers, and it\'s called by many other methods such as
 * getPort(), isSecure(), getHost(), getClientIps(), getBaseUrl() etc. Thus, we try to cache the results for
 * best performance.
 */',
                'startLine' => 2134,
                'endLine' => 2189,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'normalizeAndFilterClientIps' => [
                'name' => 'normalizeAndFilterClientIps',
                'parameters' => [
                    'clientIps' => [
                        'name' => 'clientIps',
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
                        'startLine' => 2191,
                        'endLine' => 2191,
                        'startColumn' => 50,
                        'endColumn' => 65,
                        'parameterIndex' => 0,
                        'isOptional' => false,
                    ],
                    'ip' => [
                        'name' => 'ip',
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
                        'startLine' => 2191,
                        'endLine' => 2191,
                        'startColumn' => 68,
                        'endColumn' => 77,
                        'parameterIndex' => 1,
                        'isOptional' => false,
                    ],
                ],
                'returnsReference' => false,
                'returnType' => [
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => [
                        'name' => 'array',
                        'isIdentifier' => true,
                    ],
                ],
                'attributes' => [
                ],
                'docComment' => null,
                'startLine' => 2191,
                'endLine' => 2229,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'isIisRewrite' => [
                'name' => 'isIisRewrite',
                'parameters' => [
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
 * Is this IIS with UrlRewriteModule?
 *
 * This method consumes, caches and removed the IIS_WasUrlRewritten env var,
 * so we don\'t inherit it to sub-requests.
 */',
                'startLine' => 2237,
                'endLine' => 2245,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 4,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'aliasName' => null,
            ],
            'isHostValid' => [
                'name' => 'isHostValid',
                'parameters' => [
                    'host' => [
                        'name' => 'host',
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
                        'startLine' => 2250,
                        'endLine' => 2250,
                        'startColumn' => 41,
                        'endColumn' => 52,
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
 * See https://url.spec.whatwg.org/.
 */',
                'startLine' => 2250,
                'endLine' => 2262,
                'startColumn' => 5,
                'endColumn' => 5,
                'couldThrow' => false,
                'isClosure' => false,
                'isGenerator' => false,
                'isVariadic' => false,
                'modifiers' => 20,
                'namespace' => 'Symfony\\Component\\HttpFoundation',
                'declaringClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'implementingClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
                'currentClassName' => 'Symfony\\Component\\HttpFoundation\\Request',
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
