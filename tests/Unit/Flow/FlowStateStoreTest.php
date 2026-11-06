<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Unit\Flow;

use Carbon\Carbon;
use CodebarAg\MicrosoftEntraSSO\Exceptions\InvalidStateException;
use CodebarAg\MicrosoftEntraSSO\Flow\FlowState;
use CodebarAg\MicrosoftEntraSSO\Flow\FlowStateStore;
use CodebarAg\MicrosoftEntraSSO\Tests\TestCase;
use Illuminate\Session\ArraySessionHandler;
use Illuminate\Session\Store;
use PHPUnit\Framework\Attributes\Test;

final class FlowStateStoreTest extends TestCase
{
    private function newSession(): Store
    {
        return new Store('test', new ArraySessionHandler(120));
    }

    private function store(): FlowStateStore
    {
        return $this->container()->make(FlowStateStore::class);
    }

    protected function tearDown(): void
    {
        Carbon::setTestNow();
        parent::tearDown();
    }

    #[Test]
    public function it_stores_one_key_and_consumes_it_on_pull(): void
    {
        $session = $this->newSession();
        $flow = FlowState::begin('web');
        $this->store()->put($session, $flow);

        self::assertSame([FlowStateStore::KEY], array_keys($session->all()));
        self::assertEquals($flow, $this->store()->pull($session, 'web', $flow->state));
        self::assertNull($session->get(FlowStateStore::KEY));

        $this->expectException(InvalidStateException::class);
        $this->store()->pull($session, 'web', $flow->state);
    }

    #[Test]
    public function it_generates_unpredictable_state_and_a_pkce_challenge(): void
    {
        $a = FlowState::begin('web');
        $b = FlowState::begin('web');

        self::assertNotSame($a->state, $b->state);
        self::assertSame(128, strlen($a->codeVerifier));
        self::assertSame(rtrim(strtr(base64_encode(hash('sha256', $a->codeVerifier, true)), '+/', '-_'), '='), $a->codeChallenge());
    }

    #[Test]
    public function it_rejects_a_wrong_state(): void
    {
        $session = $this->newSession();
        $this->store()->put($session, FlowState::begin('web'));

        $this->expectExceptionMessage('does not match');

        $this->store()->pull($session, 'web', 'forged');
    }

    #[Test]
    public function it_rejects_a_missing_returned_state(): void
    {
        $session = $this->newSession();
        $this->store()->put($session, FlowState::begin('web'));

        $this->expectException(InvalidStateException::class);

        $this->store()->pull($session, 'web', null);
    }

    #[Test]
    public function it_rejects_another_guard(): void
    {
        $session = $this->newSession();
        $flow = FlowState::begin('web');
        $this->store()->put($session, $flow);

        $this->expectExceptionMessage('[web] but the callback used [admin]');

        $this->store()->pull($session, 'admin', $flow->state);
    }

    #[Test]
    public function it_rejects_an_expired_state(): void
    {
        $session = $this->newSession();
        $flow = FlowState::begin('web');
        $this->store()->put($session, $flow);
        Carbon::setTestNow(Carbon::now()->addSeconds(301));

        try {
            $this->store()->pull($session, 'web', $flow->state);
            self::fail('Expected expiry.');
        } catch (InvalidStateException $e) {
            self::assertSame('microsoft-entra-sso.error.state_expired', $e->translationKey());
        }
    }

    #[Test]
    public function it_accepts_a_state_just_inside_the_ttl(): void
    {
        $session = $this->newSession();
        $flow = FlowState::begin('web');
        $this->store()->put($session, $flow);
        Carbon::setTestNow(Carbon::now()->addSeconds(300));

        self::assertSame($flow->state, $this->store()->pull($session, 'web', $flow->state)->state);
    }

    #[Test]
    public function it_rejects_a_tampered_session_value(): void
    {
        $session = $this->newSession();
        $session->put(FlowStateStore::KEY, ['state' => 'x']);

        try {
            $this->store()->pull($session, 'web', 'x');
            self::fail('Expected missing state.');
        } catch (InvalidStateException $e) {
            self::assertSame('microsoft-entra-sso.error.state_invalid', $e->translationKey());
        }

        self::assertNull(FlowState::fromSession('nope'));
        self::assertNull(FlowState::fromSession(['state' => '', 'code_verifier' => 'v', 'nonce' => 'n', 'guard' => 'web', 'issued_at' => 1]));
    }
}
