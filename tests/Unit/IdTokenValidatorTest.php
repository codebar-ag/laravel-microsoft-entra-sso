<?php

declare(strict_types=1);

use CodebarAg\MicrosoftEntraSSO\Exceptions\TokenExchangeException;
use CodebarAg\MicrosoftEntraSSO\Services\IdTokenValidator;
use CodebarAg\MicrosoftEntraSSO\Tests\Support\EntraFake;
use Firebase\JWT\JWT;
use Illuminate\Http\Client\Factory;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

function idValidator(?string $tenant = 'organizations'): IdTokenValidator
{
    return new IdTokenValidator($tenant, 'test-client-id');
}

function jwksRequests(): int
{
    return Http::recorded(fn (Request $r) => str_contains($r->url(), '/discovery/v2.0/keys'))->count();
}

beforeEach(fn () => Cache::flush());

it('accepts a valid id token and returns tid and oid', function () {
    EntraFake::http();

    $claims = idValidator()->validate(EntraFake::idToken());

    expect($claims->tenantId)->toBe(EntraFake::TENANT)
        ->and($claims->objectId)->toBe(EntraFake::OID)
        ->and($claims->subject)->toBe('subject-abc');
});

it('discovers the jwks through the configured authority', function () {
    EntraFake::http();

    idValidator('organizations')->validate(EntraFake::idToken());

    Http::assertSent(fn (Request $r) => $r->url() === 'https://login.microsoftonline.com/organizations/v2.0/.well-known/openid-configuration');
});

it('falls back to the common authority when no tenant is configured', function () {
    EntraFake::http();

    idValidator(null)->validate(EntraFake::idToken());

    Http::assertSent(fn (Request $r) => $r->url() === 'https://login.microsoftonline.com/common/v2.0/.well-known/openid-configuration');
});

it('caches the signing keys', function () {
    EntraFake::http();

    idValidator()->validate(EntraFake::idToken());
    idValidator()->validate(EntraFake::idToken());

    expect(jwksRequests())->toBe(1);
});

it('rejects a wrong audience', function () {
    EntraFake::http();

    idValidator()->validate(EntraFake::idToken(['aud' => 'someone-else']));
})->throws(TokenExchangeException::class, 'audience');

it('accepts an audience list containing the client id', function () {
    EntraFake::http();

    expect(idValidator()->validate(EntraFake::idToken(['aud' => ['x', 'test-client-id']]))->tenantId)->toBe(EntraFake::TENANT);
});

it('rejects an issuer that does not match the tid', function () {
    EntraFake::http();

    idValidator()->validate(EntraFake::idToken(['iss' => 'https://login.microsoftonline.com/'.EntraFake::OTHER_TENANT.'/v2.0']));
})->throws(TokenExchangeException::class, 'issuer');

it('rejects a foreign issuer host', function () {
    EntraFake::http();

    idValidator()->validate(EntraFake::idToken(['iss' => 'https://evil.example/'.EntraFake::TENANT.'/v2.0']));
})->throws(TokenExchangeException::class, 'issuer');

it('rejects a v1 issuer', function () {
    EntraFake::http();

    idValidator()->validate(EntraFake::idToken(['iss' => 'https://sts.windows.net/'.EntraFake::TENANT.'/']));
})->throws(TokenExchangeException::class, 'issuer');

it('rejects a missing or malformed tid', function (?string $tid) {
    EntraFake::http();

    idValidator()->validate(EntraFake::idToken(['tid' => $tid, 'iss' => 'https://login.microsoftonline.com/x/v2.0']));
})->with([[null], ['not-a-guid']])->throws(TokenExchangeException::class, 'tenant');

it('rejects a signature made with another key', function () {
    EntraFake::http();

    idValidator()->validate(EntraFake::idToken(key: 'attacker'));
})->throws(TokenExchangeException::class, 'invalid_id_token');

it('rejects a tampered payload', function () {
    EntraFake::http();
    [$h, , $s] = explode('.', EntraFake::idToken());
    $payload = rtrim(strtr(base64_encode((string) json_encode(['tid' => EntraFake::OTHER_TENANT])), '+/', '-_'), '=');

    idValidator()->validate("{$h}.{$payload}.{$s}");
})->throws(TokenExchangeException::class);

it('rejects an expired token', function () {
    EntraFake::http();

    idValidator()->validate(EntraFake::idToken(['exp' => time() - 3600]));
})->throws(TokenExchangeException::class, 'xpired');

it('tolerates small clock skew on exp', function () {
    EntraFake::http();

    expect(idValidator()->validate(EntraFake::idToken(['exp' => time() - 30])))->not->toBeNull();
});

it('rejects a token that is not yet valid', function () {
    EntraFake::http();

    idValidator()->validate(EntraFake::idToken(['nbf' => time() + 3600, 'iat' => time() + 3600]));
})->throws(TokenExchangeException::class);

it('rejects a token without exp', function () {
    EntraFake::http();

    idValidator()->validate(EntraFake::idToken(['exp' => null]));
})->throws(TokenExchangeException::class);

it('rejects a token without subject', function () {
    EntraFake::http();

    idValidator()->validate(EntraFake::idToken(['sub' => null]));
})->throws(TokenExchangeException::class, 'subject');

it('does not restore leeway changes globally', function () {
    EntraFake::http();
    $before = JWT::$leeway;

    idValidator()->validate(EntraFake::idToken());

    expect(JWT::$leeway)->toBe($before);
});

it('rejects the none and hmac algorithms', function () {
    EntraFake::http();
    $none = rtrim(strtr(base64_encode('{"alg":"none","typ":"JWT","kid":"kid-1"}'), '+/', '-_'), '=').'.'
        .rtrim(strtr(base64_encode('{"tid":"'.EntraFake::TENANT.'"}'), '+/', '-_'), '=').'.';

    expect(fn () => idValidator()->validate($none))->toThrow(TokenExchangeException::class, 'RS256');

    $hs = JWT::encode(['tid' => EntraFake::TENANT, 'exp' => time() + 60], str_repeat('k', 64), 'HS256', 'kid-1');
    expect(fn () => idValidator()->validate($hs))->toThrow(TokenExchangeException::class, 'RS256');
});

it('rejects malformed tokens', function (string $token) {
    EntraFake::http();

    idValidator()->validate($token);
})->with(['garbage', 'a.b.c', 'a.b'])->throws(TokenExchangeException::class);

it('rejects a token without kid', function () {
    EntraFake::http();
    $token = JWT::encode(['tid' => EntraFake::TENANT], EntraFake::key('primary')['private'], 'RS256');

    idValidator()->validate($token);
})->throws(TokenExchangeException::class, 'key id');

it('refreshes the keys once when the kid is unknown (key rotation)', function () {
    EntraFake::http();
    idValidator()->validate(EntraFake::idToken());
    expect(jwksRequests())->toBe(1);

    Http::swap(new Factory);
    EntraFake::http(kids: ['kid-1' => 'primary', 'kid-2' => 'rotated']);

    $claims = idValidator()->validate(EntraFake::idToken(key: 'rotated', kid: 'kid-2'));

    expect($claims->tenantId)->toBe(EntraFake::TENANT)
        ->and(jwksRequests())->toBe(1);
});

it('rejects an unknown kid after one refresh', function () {
    EntraFake::http();

    idValidator()->validate(EntraFake::idToken(key: 'attacker', kid: 'never-published'));
})->throws(TokenExchangeException::class, 'unknown key');

it('does not refresh more often than the cooldown', function () {
    config()->set('microsoft-entra-sso.id_token.jwks_refresh_cooldown', 60);
    EntraFake::http();
    idValidator()->validate(EntraFake::idToken());

    foreach (range(1, 3) as $i) {
        expect(fn () => idValidator()->validate(EntraFake::idToken(key: 'attacker', kid: "bogus-{$i}")))
            ->toThrow(TokenExchangeException::class);
    }

    expect(jwksRequests())->toBe(1);
});

it('checks the nonce when one is expected', function () {
    EntraFake::http();

    expect(idValidator()->validate(EntraFake::idToken(['nonce' => 'abc']), 'abc')->nonce)->toBe('abc');
    expect(fn () => idValidator()->validate(EntraFake::idToken(['nonce' => 'abc']), 'other'))->toThrow(TokenExchangeException::class, 'nonce');
    expect(fn () => idValidator()->validate(EntraFake::idToken(), 'abc'))->toThrow(TokenExchangeException::class, 'nonce');
});

it('skips the nonce when none is expected', function () {
    EntraFake::http();

    expect(idValidator()->validate(EntraFake::idToken(['nonce' => 'abc'])))->not->toBeNull();
});

it('pins a single-tenant app to its configured tenant guid', function () {
    EntraFake::http();

    expect(idValidator(EntraFake::TENANT)->validate(EntraFake::idToken())->tenantId)->toBe(EntraFake::TENANT);
    expect(fn () => idValidator(EntraFake::OTHER_TENANT)->validate(EntraFake::idToken()))->toThrow(TokenExchangeException::class, 'different tenant');
});

it('fails closed when discovery fails', function () {
    Http::fake(['*' => Http::response('nope', 500)]);

    idValidator()->validate(EntraFake::idToken());
})->throws(TokenExchangeException::class, 'discovery');

it('refuses a jwks uri on a foreign host', function () {
    Http::fake([
        '*openid-configuration' => Http::response(['jwks_uri' => 'https://evil.example/keys']),
        '*' => Http::response(EntraFake::jwks()),
    ]);

    idValidator()->validate(EntraFake::idToken());
})->throws(TokenExchangeException::class, 'discovery');

it('fails closed when the jwks is empty or unavailable', function (mixed $response) {
    Http::fake([
        '*openid-configuration' => Http::response(['jwks_uri' => 'https://login.microsoftonline.com/common/discovery/v2.0/keys']),
        '*/keys' => $response,
    ]);

    idValidator()->validate(EntraFake::idToken());
})->with([
    'empty' => fn () => Http::response(['keys' => []]),
    'error' => fn () => Http::response('x', 503),
])->throws(TokenExchangeException::class, 'signing keys');

it('fails closed when a key cannot be parsed', function () {
    Http::fake([
        '*openid-configuration' => Http::response(['jwks_uri' => 'https://login.microsoftonline.com/common/discovery/v2.0/keys']),
        '*/keys' => Http::response(['keys' => [['kid' => 'kid-1', 'kty' => 'RSA']]]),
    ]);

    idValidator()->validate(EntraFake::idToken());
})->throws(TokenExchangeException::class, 'signing keys');

it('fails closed without a client id', function () {
    EntraFake::http();

    (new IdTokenValidator('organizations', null))->validate(EntraFake::idToken());
})->throws(TokenExchangeException::class, 'client id');

it('uses the configured cache store', function () {
    config()->set('cache.stores.other', ['driver' => 'array']);
    config()->set('microsoft-entra-sso.id_token.cache_store', 'other');
    EntraFake::http();

    idValidator()->validate(EntraFake::idToken());

    expect(Cache::store('other')->get('microsoft-entra-sso:'.sha1('organizations|jwks')))->toBeArray()
        ->and(Cache::store('array')->get('microsoft-entra-sso:'.sha1('organizations|jwks')))->toBeNull();
});
