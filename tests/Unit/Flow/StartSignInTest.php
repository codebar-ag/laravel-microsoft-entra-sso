<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Unit\Flow;

use CodebarAg\MicrosoftEntraSSO\Exceptions\ConfigurationException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\InvalidRedirectUriException;
use CodebarAg\MicrosoftEntraSSO\Flow\CallbackUrl;
use CodebarAg\MicrosoftEntraSSO\Flow\FlowStateStore;
use CodebarAg\MicrosoftEntraSSO\Flow\StartSignIn;
use CodebarAg\MicrosoftEntraSSO\Tests\Support\FakeEntra;
use CodebarAg\MicrosoftEntraSSO\Tests\TestCase;
use Illuminate\Session\ArraySessionHandler;
use Illuminate\Session\Store;
use PHPUnit\Framework\Attributes\Test;

final class StartSignInTest extends TestCase
{
    #[Test]
    public function it_builds_a_pkce_authorization_url_and_stores_the_flow(): void
    {
        $session = new Store('test', new ArraySessionHandler(120));

        $request = $this->container()->make(StartSignIn::class)->handle($session, 'web');

        parse_str((string) parse_url($request->url, PHP_URL_QUERY), $query);
        self::assertStringStartsWith('https://login.microsoftonline.com/'.FakeEntra::TENANT.'/oauth2/v2.0/authorize?', $request->url);
        self::assertSame(FakeEntra::CLIENT_ID, $query['client_id']);
        self::assertSame('code', $query['response_type']);
        self::assertSame('http://localhost/sso/microsoft/web/callback', $query['redirect_uri']);
        self::assertSame('openid profile email User.Read', $query['scope']);
        self::assertSame($request->flow->state, $query['state']);
        self::assertSame($request->flow->nonce, $query['nonce']);
        self::assertSame($request->flow->codeChallenge(), $query['code_challenge']);
        self::assertSame('S256', $query['code_challenge_method']);
        self::assertSame('select_account', $query['prompt']);
        self::assertIsArray($session->get(FlowStateStore::KEY));
        self::assertStringNotContainsString($request->flow->codeVerifier, $request->url);
    }

    #[Test]
    public function it_rejects_an_unconfigured_guard(): void
    {
        $this->expectException(ConfigurationException::class);

        $this->container()->make(StartSignIn::class)->handle(new Store('t', new ArraySessionHandler(1)), 'admin');
    }

    #[Test]
    public function it_restricts_the_redirect_host(): void
    {
        $this->settings()->set('microsoft-entra-sso.allowed_redirect_hosts', ['app.example.com']);

        $this->expectException(InvalidRedirectUriException::class);

        $this->container()->make(StartSignIn::class)->handle(new Store('t', new ArraySessionHandler(1)), 'web');
    }

    #[Test]
    public function it_allows_a_listed_redirect_host(): void
    {
        $this->settings()->set('microsoft-entra-sso.allowed_redirect_hosts', ['localhost']);

        self::assertSame('http://localhost/sso/microsoft/web/callback', $this->container()->make(CallbackUrl::class)->for('web'));
        self::assertSame('microsoft-entra-sso.error.invalid_redirect_uri', InvalidRedirectUriException::hostNotAllowed('x')->translationKey());
    }
}
