<?php

namespace CodebarAg\MicrosoftEntraSSO\Services;

use CodebarAg\MicrosoftEntraSSO\Data\IdTokenClaims;
use CodebarAg\MicrosoftEntraSSO\Exceptions\TokenExchangeException;
use Firebase\JWT\JWK;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Illuminate\Contracts\Cache\Repository;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Throwable;

/**
 * Validates Microsoft Entra v2.0 id tokens (RS256 only).
 *
 * The signature is checked against the keys published in the JWKS found via
 * OpenID discovery. Keys are cached and re-fetched (at most once per
 * cooldown) when a token references an unknown `kid`.
 */
class IdTokenValidator
{
    public const MSA_TENANT_ID = '9188040d-6c67-4c5b-b112-36a304b66dad';

    private const AUTHORITY_HOST = 'login.microsoftonline.com';

    private const GUID_PATTERN = '/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/i';

    public function __construct(
        protected ?string $tenantId,
        protected ?string $clientId,
    ) {}

    public function validate(string $idToken, ?string $expectedNonce = null): IdTokenClaims
    {
        if ($this->clientId === null || $this->clientId === '') {
            throw $this->invalid('No client id is configured.');
        }

        $header = $this->decodeHeader($idToken);
        $kid = Arr::get($header, 'kid');

        if (Arr::get($header, 'alg') !== 'RS256') {
            throw $this->invalid('The id token must be signed with RS256.');
        }
        if (! is_string($kid) || $kid === '') {
            throw $this->invalid('The id token header has no key id.');
        }

        $keys = $this->keys(refresh: false);
        if (! isset($keys[$kid])) {
            $keys = $this->keys(refresh: true);
        }
        if (! isset($keys[$kid])) {
            throw $this->invalid('The id token was signed with an unknown key.');
        }

        $claims = $this->decode($idToken, $keys[$kid]);

        return $this->checkClaims($claims, $expectedNonce);
    }

    /**
     * @return array<string, mixed>
     */
    protected function decodeHeader(string $idToken): array
    {
        $parts = explode('.', $idToken);
        if (count($parts) !== 3) {
            throw $this->invalid('The id token is malformed.');
        }

        $json = base64_decode(strtr($parts[0], '-_', '+/'), true);
        $header = $json === false ? null : json_decode($json, true);

        if (! is_array($header)) {
            throw $this->invalid('The id token header is malformed.');
        }

        return collect($header)->filter(fn ($v, $k) => is_string($k))->all();
    }

    /**
     * @return array<string, mixed>
     */
    protected function decode(string $idToken, Key $key): array
    {
        $previousLeeway = JWT::$leeway;
        JWT::$leeway = $this->intConfig('leeway_seconds', 60);

        try {
            $decoded = JWT::decode($idToken, $key);
        } catch (Throwable $e) {
            throw $this->invalid($e->getMessage());
        } finally {
            JWT::$leeway = $previousLeeway;
        }

        $claims = json_decode((string) json_encode($decoded), true);

        return is_array($claims) ? collect($claims)->filter(fn ($v, $k) => is_string($k))->all() : [];
    }

    /**
     * @param  array<string, mixed>  $claims
     */
    protected function checkClaims(array $claims, ?string $expectedNonce): IdTokenClaims
    {
        $tid = Arr::get($claims, 'tid');
        if (! is_string($tid) || preg_match(self::GUID_PATTERN, $tid) !== 1) {
            throw $this->invalid('The id token has no valid tenant id.');
        }

        if (Arr::get($claims, 'iss') !== 'https://'.self::AUTHORITY_HOST."/{$tid}/v2.0") {
            throw $this->invalid('The id token issuer does not match its tenant.');
        }

        $aud = Arr::get($claims, 'aud');
        $audiences = is_array($aud) ? $aud : [$aud];
        if (! in_array($this->clientId, $audiences, true)) {
            throw $this->invalid('The id token audience does not match the client id.');
        }

        if (! is_numeric(Arr::get($claims, 'exp'))) {
            throw $this->invalid('The id token has no expiry.');
        }

        $this->assertConfiguredTenant($tid);

        $nonce = Arr::get($claims, 'nonce');
        $nonce = is_string($nonce) ? $nonce : null;
        if ($expectedNonce !== null && ($nonce === null || ! hash_equals($expectedNonce, $nonce))) {
            throw $this->invalid('The id token nonce does not match.');
        }

        $sub = Arr::get($claims, 'sub');
        if (! is_string($sub) || $sub === '') {
            throw $this->invalid('The id token has no subject.');
        }

        $oid = Arr::get($claims, 'oid');

        return new IdTokenClaims(
            tenantId: strtolower($tid),
            objectId: is_string($oid) && $oid !== '' ? $oid : null,
            subject: $sub,
            nonce: $nonce,
            raw: $claims,
        );
    }

    /**
     * A single-tenant app (configured with a tenant GUID) only accepts that tenant.
     * "common", "organizations", "consumers" and domain names accept any tenant.
     */
    protected function assertConfiguredTenant(string $tid): void
    {
        if ($this->tenantId === null || preg_match(self::GUID_PATTERN, $this->tenantId) !== 1) {
            return;
        }

        if (strtolower($this->tenantId) !== strtolower($tid)) {
            throw $this->invalid('The id token was issued by a different tenant than the configured one.');
        }
    }

    /**
     * @return array<string, Key>
     */
    protected function keys(bool $refresh): array
    {
        $cache = $this->cache();
        $cacheKey = $this->cacheKey('jwks');
        $cooldownKey = $this->cacheKey('refreshed');

        if (! $refresh) {
            $cached = $cache->get($cacheKey);
            if (is_array($cached) && $cached !== []) {
                return $this->parseKeys($cached);
            }
        } elseif ($cache->has($cooldownKey)) {
            $cached = $cache->get($cacheKey);

            return is_array($cached) ? $this->parseKeys($cached) : [];
        }

        $jwks = $this->fetchJwks();

        $cache->put($cacheKey, $jwks, $this->intConfig('jwks_cache_ttl', 86400));
        $cooldown = $this->intConfig('jwks_refresh_cooldown', 60);
        if ($cooldown > 0) {
            $cache->put($cooldownKey, true, $cooldown);
        }

        return $this->parseKeys($jwks);
    }

    /**
     * @param  array<mixed>  $jwks
     * @return array<string, Key>
     */
    protected function parseKeys(array $jwks): array
    {
        try {
            return JWK::parseKeySet(['keys' => $jwks], 'RS256');
        } catch (Throwable $e) {
            throw $this->invalid('The signing keys could not be read: '.$e->getMessage());
        }
    }

    /**
     * @return array<int, array<string, mixed>>
     */
    protected function fetchJwks(): array
    {
        $tenant = ($this->tenantId !== null && $this->tenantId !== '') ? $this->tenantId : 'common';

        $discovery = $this->http()->get('https://'.self::AUTHORITY_HOST."/{$tenant}/v2.0/.well-known/openid-configuration");
        $jwksUri = $discovery->successful() ? Arr::get((array) $discovery->json(), 'jwks_uri') : null;

        if (! is_string($jwksUri) || parse_url($jwksUri, PHP_URL_SCHEME) !== 'https' || parse_url($jwksUri, PHP_URL_HOST) !== self::AUTHORITY_HOST) {
            throw $this->invalid('The OpenID discovery document could not be loaded.');
        }

        $response = $this->http()->get($jwksUri);
        $keys = $response->successful() ? Arr::get((array) $response->json(), 'keys') : null;

        if (! is_array($keys) || $keys === []) {
            throw $this->invalid('The signing keys could not be loaded.');
        }

        return collect($keys)
            ->filter(fn ($key) => is_array($key))
            ->map(fn (array $key) => collect($key)->filter(fn ($v, $k) => is_string($k))->all())
            ->values()
            ->all();
    }

    protected function http(): PendingRequest
    {
        return Http::timeout($this->intConfig('timeout', 10, 'http'))
            ->connectTimeout($this->intConfig('connect_timeout', 5, 'http'))
            ->retry($this->intConfig('retry_times', 1, 'http'), $this->intConfig('retry_sleep_ms', 200, 'http'))
            ->acceptJson();
    }

    protected function cache(): Repository
    {
        $store = config('microsoft-entra-sso.id_token.cache_store');

        return Cache::store(is_string($store) && $store !== '' ? $store : null);
    }

    protected function cacheKey(string $part): string
    {
        return 'microsoft-entra-sso:'.sha1(($this->tenantId ?: 'common').'|'.$part);
    }

    private function intConfig(string $key, int $default, string $section = 'id_token'): int
    {
        $value = config("microsoft-entra-sso.{$section}.{$key}", $default);

        return is_numeric($value) ? (int) $value : $default;
    }

    private function invalid(string $reason): TokenExchangeException
    {
        return TokenExchangeException::failed('invalid_id_token', $reason);
    }
}
