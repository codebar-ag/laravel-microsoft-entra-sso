<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Unit\Clients;

use Carbon\Carbon;
use CodebarAg\MicrosoftEntraSSO\Clients\TokenClient;
use CodebarAg\MicrosoftEntraSSO\Exceptions\TokenException;
use CodebarAg\MicrosoftEntraSSO\Tests\Support\FakeEntra;
use CodebarAg\MicrosoftEntraSSO\Tests\TestCase;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\Factory;
use Illuminate\Http\Client\Request;
use PHPUnit\Framework\Attributes\Test;

final class TokenClientTest extends TestCase
{
    private function client(): TokenClient
    {
        return $this->container()->make(TokenClient::class);
    }

    #[Test]
    public function it_exchanges_a_code_with_the_pkce_verifier(): void
    {
        Carbon::setTestNow('2026-01-01 12:00:00');
        $this->entra()->fake();

        $tokens = $this->client()->exchangeCode('the-code', 'the-verifier', 'https://app.test/cb');

        self::assertSame('fake-access-token', $tokens->accessToken);
        self::assertSame('fake-refresh-token', $tokens->refreshToken);
        self::assertSame(['openid', 'profile', 'email', 'User.Read'], $tokens->scopes);
        self::assertNotNull($tokens->idToken);
        self::assertSame('2026-01-01 13:00:00', $tokens->expiresAt?->toDateTimeString());
        $this->http()->assertSent(function (Request $request): bool {
            $data = $request->data();

            return $request->url() === 'https://login.microsoftonline.com/'.FakeEntra::TENANT.'/oauth2/v2.0/token'
                && $data['grant_type'] === 'authorization_code'
                && $data['code'] === 'the-code'
                && $data['code_verifier'] === 'the-verifier'
                && $data['redirect_uri'] === 'https://app.test/cb'
                && $data['client_id'] === FakeEntra::CLIENT_ID
                && $data['client_secret'] === 'test-client-secret';
        });
        Carbon::setTestNow();
    }

    #[Test]
    public function it_refreshes_and_keeps_the_refresh_token_when_none_is_returned(): void
    {
        $this->http()->fake(['*' => Factory::response(['access_token' => 'new-access', 'expires_in' => '60'])]);

        $tokens = $this->client()->refresh('old-refresh');

        self::assertSame('new-access', $tokens->accessToken);
        self::assertSame('old-refresh', $tokens->refreshToken);
        self::assertNull($tokens->idToken);
        self::assertSame([], $tokens->scopes);
        $this->http()->assertSent(fn (Request $r): bool => $r->data()['grant_type'] === 'refresh_token' && $r->data()['refresh_token'] === 'old-refresh');
    }

    #[Test]
    public function it_maps_an_oauth_error(): void
    {
        $this->http()->fake(['*' => Factory::response(['error' => 'invalid_grant', 'error_description' => 'expired'], 400)]);

        try {
            $this->client()->exchangeCode('c', 'v', 'u');
            self::fail('Expected a TokenException.');
        } catch (TokenException $e) {
            self::assertStringContainsString('invalid_grant - expired', $e->getMessage());
            self::assertSame('microsoft-entra-sso.error.token_failed', $e->translationKey());
        }
    }

    #[Test]
    public function it_maps_an_error_without_a_body(): void
    {
        $this->http()->fake(['*' => Factory::response('oops', 502)]);

        $this->expectExceptionMessage('unknown_error');

        $this->client()->refresh('r');
    }

    #[Test]
    public function it_rejects_a_response_without_an_access_token(): void
    {
        $this->http()->fake(['*' => Factory::response(['token_type' => 'Bearer'])]);

        $this->expectException(TokenException::class);
        $this->expectExceptionMessage('no access token');

        $this->client()->refresh('r');
    }

    #[Test]
    public function it_retries_transient_failures_only(): void
    {
        $this->settings()->set('microsoft-entra-sso.http.retry_times', 3);
        $this->http()->fake(['*' => $this->http()->sequence()
            ->pushStatus(503)
            ->pushResponse(Factory::response(['access_token' => 'ok']))]);

        self::assertSame('ok', $this->client()->refresh('r')->accessToken);
        $this->http()->assertSentCount(2);
    }

    #[Test]
    public function it_retries_connection_errors(): void
    {
        $this->settings()->set('microsoft-entra-sso.http.retry_times', 2);
        $calls = 0;
        $this->http()->fake(function () use (&$calls) {
            if (++$calls === 1) {
                throw new ConnectionException('down');
            }

            return Factory::response(['access_token' => 'ok']);
        });

        self::assertSame('ok', $this->client()->refresh('r')->accessToken);
        self::assertSame(2, $calls);
    }

    #[Test]
    public function it_never_replays_a_client_error(): void
    {
        $this->settings()->set('microsoft-entra-sso.http.retry_times', 3);
        $this->http()->fake(['*' => Factory::response(['error' => 'invalid_grant'], 400)]);

        try {
            $this->client()->exchangeCode('c', 'v', 'u');
        } catch (TokenException) {
        }

        $this->http()->assertSentCount(1);
    }

    #[Test]
    public function it_reports_a_missing_authorization_code(): void
    {
        self::assertSame('microsoft-entra-sso.error.missing_authorization_code', TokenException::missingAuthorizationCode()->translationKey());
    }
}
