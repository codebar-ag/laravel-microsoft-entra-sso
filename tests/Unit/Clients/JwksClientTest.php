<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Unit\Clients;

use CodebarAg\MicrosoftEntraSSO\Clients\JwksClient;
use CodebarAg\MicrosoftEntraSSO\Exceptions\InvalidIdTokenException;
use CodebarAg\MicrosoftEntraSSO\Tests\Support\FakeEntra;
use CodebarAg\MicrosoftEntraSSO\Tests\TestCase;
use Illuminate\Http\Client\Factory;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;

final class JwksClientTest extends TestCase
{
    #[Test]
    public function it_caches_the_keys(): void
    {
        $this->entra()->fake();
        $client = $this->container()->make(JwksClient::class);

        $client->key(FakeEntra::KID);
        $client->key(FakeEntra::KID);

        $this->http()->assertSentCount(2); // discovery + keys, once
    }

    /**
     * @return array<string, array{array<string, mixed>}>
     */
    public static function brokenDiscovery(): array
    {
        return [
            'no jwks_uri' => [[]],
            'foreign host' => [['jwks_uri' => 'https://evil.example/keys']],
            'plain http' => [['jwks_uri' => 'http://login.microsoftonline.com/keys']],
        ];
    }

    /**
     * @param  array<string, mixed>  $discovery
     */
    #[Test]
    #[DataProvider('brokenDiscovery')]
    public function it_only_trusts_the_microsoft_discovery_document(array $discovery): void
    {
        $this->http()->fake(['*' => Factory::response($discovery)]);

        $this->expectException(InvalidIdTokenException::class);
        $this->expectExceptionMessage('discovery document');

        $this->container()->make(JwksClient::class)->key(FakeEntra::KID);
    }

    #[Test]
    public function it_fails_when_no_keys_are_published(): void
    {
        $this->http()->fake([
            '*/.well-known/openid-configuration' => Factory::response(['jwks_uri' => 'https://login.microsoftonline.com/common/discovery/v2.0/keys']),
            '*/keys' => Factory::response(['keys' => []]),
        ]);

        $this->expectExceptionMessage('could not be loaded');

        $this->container()->make(JwksClient::class)->key(FakeEntra::KID);
    }

    #[Test]
    public function it_fails_when_the_published_keys_are_unreadable(): void
    {
        $this->http()->fake([
            '*/.well-known/openid-configuration' => Factory::response(['jwks_uri' => 'https://login.microsoftonline.com/common/discovery/v2.0/keys']),
            '*/keys' => Factory::response(['keys' => [['kid' => 'x', 'kty' => 'RSA']]]),
        ]);

        $this->expectExceptionMessage('could not be read');

        $this->container()->make(JwksClient::class)->key('x');
    }
}
