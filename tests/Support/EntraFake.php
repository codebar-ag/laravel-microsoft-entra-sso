<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Support;

use Firebase\JWT\JWT;
use Illuminate\Support\Facades\Http;

/**
 * Locally generated RSA keys, signed id tokens and a faked Entra HTTP surface.
 */
final class EntraFake
{
    public const TENANT = '11111111-1111-4111-8111-111111111111';

    public const OTHER_TENANT = '22222222-2222-4222-8222-222222222222';

    public const OID = 'ms-user-123';

    public const KID = 'kid-1';

    /** @var array<string, array{private: string, jwk: array<string, string>}> */
    private static array $keys = [];

    /**
     * @return array{private: string, jwk: array<string, string>}
     */
    public static function key(string $name): array
    {
        if (isset(self::$keys[$name])) {
            return self::$keys[$name];
        }

        $resource = openssl_pkey_new(['private_key_bits' => 2048, 'private_key_type' => OPENSSL_KEYTYPE_RSA]);
        openssl_pkey_export($resource, $private);
        $details = openssl_pkey_get_details($resource);

        $b64 = fn (string $bin) => rtrim(strtr(base64_encode($bin), '+/', '-_'), '=');

        return self::$keys[$name] = [
            'private' => $private,
            'jwk' => [
                'kty' => 'RSA',
                'use' => 'sig',
                'n' => $b64($details['rsa']['n']),
                'e' => $b64($details['rsa']['e']),
            ],
        ];
    }

    /**
     * @param  array<string, mixed>  $overrides  null values remove a claim
     */
    public static function idToken(array $overrides = [], string $key = 'primary', string $kid = self::KID, string $alg = 'RS256'): string
    {
        $tid = $overrides['tid'] ?? self::TENANT;
        $claims = array_merge([
            'iss' => "https://login.microsoftonline.com/{$tid}/v2.0",
            'aud' => 'test-client-id',
            'tid' => $tid,
            'oid' => self::OID,
            'sub' => 'subject-abc',
            'iat' => time() - 10,
            'nbf' => time() - 10,
            'exp' => time() + 3600,
        ], $overrides);

        $claims = array_filter($claims, fn ($v) => $v !== null);

        return JWT::encode($claims, self::key($key)['private'], $alg, $kid);
    }

    /**
     * @param  array<string, string>  $kids  kid => key name
     * @return array{keys: array<int, array<string, string>>}
     */
    public static function jwks(array $kids = [self::KID => 'primary']): array
    {
        $keys = [];
        foreach ($kids as $kid => $name) {
            $keys[] = ['kid' => $kid] + self::key($name)['jwk'];
        }

        return ['keys' => $keys];
    }

    /**
     * @param  array<string, mixed>  $tokenResponse
     * @param  array<string, mixed>  $graph
     * @param  array<string, string>  $kids
     */
    public static function http(array $tokenResponse = [], array $graph = [], array $kids = [self::KID => 'primary']): void
    {
        Http::fake([
            'login.microsoftonline.com/*/v2.0/.well-known/openid-configuration' => Http::response([
                'jwks_uri' => 'https://login.microsoftonline.com/common/discovery/v2.0/keys',
            ]),
            'login.microsoftonline.com/common/discovery/v2.0/keys' => Http::response(self::jwks($kids)),
            'login.microsoftonline.com/*' => Http::response(array_merge([
                'access_token' => 'fake-access-token',
                'refresh_token' => 'fake-refresh-token',
                'expires_in' => 3600,
                'token_type' => 'Bearer',
                'id_token' => self::idToken(),
            ], $tokenResponse)),
            'graph.microsoft.com/*' => Http::response(array_merge([
                'id' => self::OID,
                'displayName' => 'John Doe',
                'mail' => 'john@example.com',
                'userPrincipalName' => 'john@example.com',
            ], $graph)),
        ]);
    }

    /**
     * @return array<string, mixed>
     */
    public static function session(?string $nonce = null): array
    {
        return array_filter([
            'microsoft_entra_sso_state' => 'test-state',
            'microsoft_entra_sso_code_verifier' => 'test-verifier',
            'microsoft_entra_sso_guard' => 'web',
            'microsoft_entra_sso_issued_at' => time(),
            'microsoft_entra_sso_nonce' => $nonce,
        ]);
    }
}
