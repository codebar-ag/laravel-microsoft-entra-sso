<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Support;

use Firebase\JWT\JWT;
use Illuminate\Http\Client\Factory;
use RuntimeException;

/**
 * Locally generated RSA keys, signed id tokens and a faked Entra/Graph HTTP surface.
 */
final class FakeEntra
{
    public const string TENANT = '11111111-1111-4111-8111-111111111111';

    public const string OTHER_TENANT = '22222222-2222-4222-8222-222222222222';

    public const string OID = 'aaaaaaaa-aaaa-4aaa-8aaa-aaaaaaaaaaaa';

    public const string CLIENT_ID = 'test-client-id';

    public const string KID = 'kid-1';

    public const string NONCE = 'test-nonce';

    /** @var array<string, array{private: string, jwk: array<string, string>}> */
    private array $keys = [];

    public function __construct(private readonly Factory $http) {}

    /**
     * @return array{private: string, jwk: array<string, string>}
     */
    public function key(string $name): array
    {
        if (isset($this->keys[$name])) {
            return $this->keys[$name];
        }

        $resource = openssl_pkey_new(['private_key_bits' => 2048, 'private_key_type' => OPENSSL_KEYTYPE_RSA]);
        if ($resource === false || ! openssl_pkey_export($resource, $private)) {
            throw new RuntimeException('Could not generate an RSA key.');
        }
        $details = openssl_pkey_get_details($resource);
        if ($details === false || ! is_array($details['rsa'])) {
            throw new RuntimeException('Could not read the RSA key.');
        }

        $b64 = static fn (mixed $bin): string => rtrim(strtr(base64_encode(is_string($bin) ? $bin : ''), '+/', '-_'), '=');

        return $this->keys[$name] = [
            'private' => $private,
            'jwk' => ['kty' => 'RSA', 'use' => 'sig', 'n' => $b64($details['rsa']['n'] ?? null), 'e' => $b64($details['rsa']['e'] ?? null)],
        ];
    }

    /**
     * @param  array<string, mixed>  $overrides  null values remove a claim
     */
    public function idToken(array $overrides = [], string $key = 'primary', string $kid = self::KID, string $alg = 'RS256'): string
    {
        $tid = $overrides['tid'] ?? self::TENANT;
        $tid = is_string($tid) ? $tid : self::TENANT;

        $claims = array_filter(array_merge([
            'iss' => "https://login.microsoftonline.com/{$tid}/v2.0",
            'aud' => self::CLIENT_ID,
            'tid' => $tid,
            'oid' => self::OID,
            'sub' => 'subject-abc',
            'nonce' => self::NONCE,
            'iat' => time() - 10,
            'nbf' => time() - 10,
            'exp' => time() + 3600,
        ], $overrides), static fn (mixed $v): bool => $v !== null);

        return JWT::encode($claims, $this->key($key)['private'], $alg, $kid);
    }

    /**
     * @param  array<string, string>  $kids  kid => key name
     * @return array{keys: list<array<string, string>>}
     */
    public function jwks(array $kids = [self::KID => 'primary']): array
    {
        $keys = [];
        foreach ($kids as $kid => $name) {
            $keys[] = ['kid' => $kid] + $this->key($name)['jwk'];
        }

        return ['keys' => $keys];
    }

    /**
     * @param  array<string, mixed>  $tokenResponse
     * @param  array<string, mixed>  $graph
     * @param  array<string, string>  $kids
     */
    public function fake(array $tokenResponse = [], array $graph = [], array $kids = [self::KID => 'primary']): void
    {
        $this->http->fake([
            'login.microsoftonline.com/*/v2.0/.well-known/openid-configuration' => Factory::response([
                'jwks_uri' => 'https://login.microsoftonline.com/common/discovery/v2.0/keys',
            ]),
            'login.microsoftonline.com/common/discovery/v2.0/keys' => Factory::response($this->jwks($kids)),
            'login.microsoftonline.com/*/oauth2/v2.0/token' => Factory::response(array_merge([
                'access_token' => 'fake-access-token',
                'refresh_token' => 'fake-refresh-token',
                'expires_in' => 3600,
                'scope' => 'openid profile email User.Read',
                'token_type' => 'Bearer',
                'id_token' => $this->idToken(),
            ], $tokenResponse)),
            'graph.microsoft.com/*' => Factory::response(array_merge([
                'id' => self::OID,
                'displayName' => 'John Doe',
                'mail' => 'john@example.com',
                'userPrincipalName' => 'john@example.com',
            ], $graph)),
        ]);
    }
}
