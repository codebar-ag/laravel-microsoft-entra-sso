<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Clients;

use CodebarAg\MicrosoftEntraSSO\Config\EntraConfig;
use CodebarAg\MicrosoftEntraSSO\Exceptions\InvalidIdTokenException;
use CodebarAg\MicrosoftEntraSSO\Support\Payload;
use Firebase\JWT\JWK;
use Firebase\JWT\Key;
use Illuminate\Contracts\Cache\Factory as CacheFactory;
use Illuminate\Contracts\Cache\Repository;
use Throwable;

/**
 * Fetches and caches the keys Entra signs id tokens with. An unknown key id triggers one
 * re-fetch, at most once per cooldown.
 */
final readonly class JwksClient
{
    private const string AUTHORITY_HOST = 'login.microsoftonline.com';

    public function __construct(
        private HttpClient $http,
        private CacheFactory $caches,
        private EntraConfig $config,
    ) {}

    /**
     * @throws InvalidIdTokenException
     */
    public function key(string $kid): Key
    {
        $keys = $this->keys(refresh: false);

        if (! isset($keys[$kid])) {
            $keys = $this->keys(refresh: true);
        }

        return $keys[$kid] ?? throw InvalidIdTokenException::because('it was signed with an unknown key.');
    }

    /**
     * @return array<string, Key>
     */
    private function keys(bool $refresh): array
    {
        $cache = $this->cache();
        $cacheKey = $this->cacheKey('jwks');
        $cooldownKey = $this->cacheKey('refreshed');
        $cached = $cache->get($cacheKey);

        if (! $refresh && is_array($cached) && $cached !== []) {
            return $this->parse($cached);
        }

        if ($refresh && $cache->has($cooldownKey)) {
            return is_array($cached) ? $this->parse($cached) : [];
        }

        $jwks = $this->fetch();

        $cache->put($cacheKey, $jwks, $this->config->idToken->jwksCacheTtl);
        if ($this->config->idToken->jwksRefreshCooldown > 0) {
            $cache->put($cooldownKey, true, $this->config->idToken->jwksRefreshCooldown);
        }

        return $this->parse($jwks);
    }

    /**
     * @param  array<mixed>  $jwks
     * @return array<string, Key>
     */
    private function parse(array $jwks): array
    {
        try {
            return JWK::parseKeySet(['keys' => $jwks], 'RS256');
        } catch (Throwable $e) {
            throw InvalidIdTokenException::because('the signing keys could not be read: '.$e->getMessage());
        }
    }

    /**
     * @return list<array<string, mixed>>
     */
    private function fetch(): array
    {
        $discovery = $this->http->request()->get(
            'https://'.self::AUTHORITY_HOST."/{$this->config->tenant->value}/v2.0/.well-known/openid-configuration",
        );
        $jwksUri = $discovery->successful() ? Payload::string($discovery->json('jwks_uri')) : null;

        if ($jwksUri === null
            || parse_url($jwksUri, PHP_URL_SCHEME) !== 'https'
            || parse_url($jwksUri, PHP_URL_HOST) !== self::AUTHORITY_HOST) {
            throw InvalidIdTokenException::because('the OpenID discovery document could not be loaded.');
        }

        $response = $this->http->request()->get($jwksUri);
        $keys = $response->successful() ? Payload::objects($response->json('keys')) : [];

        if ($keys === []) {
            throw InvalidIdTokenException::because('the signing keys could not be loaded.');
        }

        return $keys;
    }

    private function cache(): Repository
    {
        return $this->caches->store($this->config->idToken->cacheStore);
    }

    private function cacheKey(string $part): string
    {
        return 'microsoft-entra-sso:'.sha1($this->config->tenant->value.'|'.$part);
    }
}
