<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Unit\Clients;

use CodebarAg\MicrosoftEntraSSO\Clients\IdTokenValidator;
use CodebarAg\MicrosoftEntraSSO\Exceptions\InvalidIdTokenException;
use CodebarAg\MicrosoftEntraSSO\Tests\Support\FakeEntra;
use CodebarAg\MicrosoftEntraSSO\Tests\TestCase;
use Illuminate\Http\Client\Factory;
use Illuminate\Http\Client\Request;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

final class IdTokenValidatorTest extends TestCase
{
    private function validate(string $token, string $nonce = FakeEntra::NONCE): void
    {
        $this->container()->make(IdTokenValidator::class)->validate($token, $nonce);
    }

    #[Test]
    public function it_accepts_a_valid_token_and_returns_the_identity(): void
    {
        $entra = $this->entra();
        $entra->fake();

        $claims = $this->container()->make(IdTokenValidator::class)->validate($entra->idToken(), FakeEntra::NONCE);

        self::assertSame(FakeEntra::TENANT, $claims->identity->tenantId);
        self::assertSame(FakeEntra::OID, $claims->identity->objectId);
        self::assertSame('subject-abc', $claims->subject);
        self::assertSame(FakeEntra::NONCE, $claims->nonce);
    }

    /**
     * @return array<string, array{array<string, mixed>, string}>
     */
    public static function invalidClaims(): array
    {
        return [
            'wrong audience' => [['aud' => 'someone-else'], 'audience'],
            'audience list without us' => [['aud' => ['a', 'b']], 'audience'],
            'wrong issuer' => [['iss' => 'https://evil.example/v2.0'], 'issuer'],
            'no tenant' => [['tid' => null], 'tenant id'],
            'tenant not a guid' => [['tid' => 'contoso'], 'tenant id'],
            'expired' => [['exp' => 1, 'iat' => 0, 'nbf' => 0], 'Expired'],
            'not yet valid' => [['nbf' => 4102444800, 'iat' => 4102444800, 'exp' => 4102448400], 'nbf'],
            'no expiry' => [['exp' => null], 'expiry'],
            'other directory' => [['tid' => FakeEntra::OTHER_TENANT], 'different tenant'],
            'wrong nonce' => [['nonce' => 'attacker'], 'nonce'],
            'no nonce' => [['nonce' => null], 'nonce'],
            'no subject' => [['sub' => null], 'subject'],
            'no object id' => [['oid' => null], 'object id'],
            'object id not a guid' => [['oid' => 'ms-user-123'], 'object id'],
        ];
    }

    /**
     * @param  array<string, mixed>  $overrides
     */
    #[Test]
    #[DataProvider('invalidClaims')]
    public function it_rejects_invalid_claims(array $overrides, string $message): void
    {
        $entra = $this->entra();
        $entra->fake();

        $this->expectException(InvalidIdTokenException::class);
        $this->expectExceptionMessage($message);

        $this->validate($entra->idToken($overrides));
    }

    #[Test]
    public function it_accepts_an_audience_list_containing_the_client(): void
    {
        $entra = $this->entra();
        $entra->fake();

        $this->validate($entra->idToken(['aud' => ['x', FakeEntra::CLIENT_ID]]));

        $this->addToAssertionCount(1);
    }

    #[Test]
    public function it_accepts_any_directory_for_multi_directory_authorities(): void
    {
        $this->settings()->set('microsoft-entra-sso.tenant_id', 'organizations');
        $this->settings()->set('microsoft-entra-sso.email_linking', 'never');
        $entra = $this->entra();
        $entra->fake();

        $this->validate($entra->idToken(['tid' => FakeEntra::OTHER_TENANT]));

        $this->addToAssertionCount(1);
    }

    #[Test]
    public function it_rejects_a_forged_signature(): void
    {
        $entra = $this->entra();
        $entra->fake();

        $this->expectException(InvalidIdTokenException::class);
        $this->expectExceptionMessage('Signature');

        $this->validate($entra->idToken(key: 'attacker'));
    }

    #[Test]
    public function it_rejects_other_algorithms(): void
    {
        $entra = $this->entra();
        $entra->fake();

        $this->expectExceptionMessage('RS256');

        $this->validate($entra->idToken(alg: 'RS512'));
    }

    #[Test]
    public function it_rejects_a_token_without_key_id(): void
    {
        $entra = $this->entra();
        $entra->fake();
        [$header, $payload, $signature] = explode('.', $entra->idToken());
        $noKid = rtrim(strtr(base64_encode('{"alg":"RS256","typ":"JWT"}'), '+/', '-_'), '=');

        $this->expectExceptionMessage('key id');

        $this->validate("{$noKid}.{$payload}.{$signature}");
    }

    #[Test]
    public function it_rejects_malformed_tokens(): void
    {
        $this->entra()->fake();

        foreach (['nope', 'a.b.c', '!!!.b.c'] as $token) {
            try {
                $this->validate($token);
                self::fail("Accepted {$token}");
            } catch (InvalidIdTokenException $e) {
                self::assertStringContainsString('malformed', $e->getMessage());
            }
        }
    }

    #[Test]
    public function it_survives_a_key_rotation_by_refetching_once(): void
    {
        $entra = $this->entra();
        $this->http()->fake([
            'login.microsoftonline.com/*/v2.0/.well-known/openid-configuration' => Factory::response(['jwks_uri' => 'https://login.microsoftonline.com/common/discovery/v2.0/keys']),
            'login.microsoftonline.com/common/discovery/v2.0/keys' => $this->http()->sequence()
                ->pushResponse(Factory::response($entra->jwks([FakeEntra::KID => 'primary'])))
                ->pushResponse(Factory::response($entra->jwks([FakeEntra::KID => 'primary', 'kid-2' => 'rotated']))),
        ]);

        $this->validate($entra->idToken());
        $this->validate($entra->idToken(key: 'rotated', kid: 'kid-2'));
        $this->validate($entra->idToken());

        $this->http()->assertSent(fn (Request $r): bool => str_ends_with($r->url(), '/keys'));
        $this->addToAssertionCount(1);
    }

    #[Test]
    public function it_rejects_an_unknown_key_after_refetching(): void
    {
        $entra = $this->entra();
        $entra->fake();

        $this->expectExceptionMessage('unknown key');

        $this->validate($entra->idToken(kid: 'kid-unknown'));
    }

    #[Test]
    public function it_does_not_refetch_during_the_cooldown(): void
    {
        $this->settings()->set('microsoft-entra-sso.id_token.jwks_refresh_cooldown', 60);
        $entra = $this->entra();
        $entra->fake();

        foreach (['kid-x', 'kid-y'] as $kid) {
            try {
                $this->validate($entra->idToken(kid: $kid));
            } catch (InvalidIdTokenException) {
            }
        }

        $keyFetches = $this->http()->recorded(fn (Request $r): bool => str_ends_with($r->url(), '/keys'));
        self::assertCount(1, $keyFetches);
    }
}
