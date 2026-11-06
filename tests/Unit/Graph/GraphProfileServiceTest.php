<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Unit\Graph;

use CodebarAg\MicrosoftEntraSSO\Exceptions\ConfigurationException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\GraphException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\TokenException;
use CodebarAg\MicrosoftEntraSSO\Facades\MicrosoftEntraSSO;
use CodebarAg\MicrosoftEntraSSO\Graph\GraphProfileService;
use CodebarAg\MicrosoftEntraSSO\Models\MicrosoftIdentity;
use CodebarAg\MicrosoftEntraSSO\Tests\Support\FakeEntra;
use CodebarAg\MicrosoftEntraSSO\Tests\Support\NoLockStore;
use CodebarAg\MicrosoftEntraSSO\Tests\Support\OtherUser;
use CodebarAg\MicrosoftEntraSSO\Tests\TestCase;
use CodebarAg\MicrosoftEntraSSO\Tests\TestUser;
use Illuminate\Cache\CacheManager;
use Illuminate\Cache\Repository;
use Illuminate\Http\Client\Factory;
use Illuminate\Http\Client\Request;
use PHPUnit\Framework\Attributes\Test;

final class GraphProfileServiceTest extends TestCase
{
    private function service(): GraphProfileService
    {
        return $this->container()->make(GraphProfileService::class);
    }

    private function linked(?string $token = 'stored-token', bool $expired = false, ?string $refresh = 'stored-refresh'): TestUser
    {
        return $this->userWithIdentity(identity: [
            'token' => $token,
            'refresh_token' => $refresh,
            'token_expires_at' => $expired ? now()->subMinute() : now()->addHour(),
        ]);
    }

    protected function tearDown(): void
    {
        MicrosoftIdentity::flushEventListeners();
        parent::tearDown();
    }

    #[Test]
    public function it_uses_the_stored_token_while_it_is_valid(): void
    {
        $this->entra()->fake(graph: ['givenName' => 'John']);

        $profile = $this->service()->profile($this->linked());

        self::assertSame('John', $profile->givenName);
        $this->http()->assertSent(fn (Request $r): bool => $r->hasHeader('Authorization', 'Bearer stored-token'));
        $this->http()->assertSentCount(1);
    }

    #[Test]
    public function it_refreshes_an_expired_token_and_stores_the_result(): void
    {
        $this->entra()->fake(['access_token' => 'refreshed-token', 'refresh_token' => 'rotated-refresh']);
        $user = $this->linked(expired: true);

        $this->service()->profile($user);

        $identity = $user->microsoftIdentity()->firstOrFail();
        self::assertSame('refreshed-token', $identity->token);
        self::assertSame('rotated-refresh', $identity->refresh_token);
        self::assertFalse($identity->isTokenExpired());
        $this->http()->assertSent(fn (Request $r): bool => $r->hasHeader('Authorization', 'Bearer refreshed-token'));
    }

    #[Test]
    public function it_refreshes_when_the_stored_token_is_empty_and_keeps_the_refresh_token_if_none_is_returned(): void
    {
        $this->entra()->fake(['refresh_token' => null]);
        $user = $this->linked(token: '');

        $this->service()->profile($user);

        self::assertSame('stored-refresh', $user->microsoftIdentity()->firstOrFail()->refresh_token);
    }

    #[Test]
    public function it_does_not_refresh_twice_when_another_request_already_did(): void
    {
        $this->entra()->fake();
        $user = $this->linked();
        $seen = 0;
        MicrosoftIdentity::retrieved(function (MicrosoftIdentity $identity) use (&$seen): void {
            if (++$seen === 1) {
                $identity->token_expires_at = now()->subMinute(); // stale copy, the database row is still valid
            }
        });

        $this->service()->profile($user);

        $this->http()->assertNotSent(fn (Request $r): bool => str_contains($r->url(), '/oauth2/v2.0/token'));
    }

    #[Test]
    public function it_fails_without_a_linked_identity(): void
    {
        $this->expectExceptionObject(GraphException::missingIdentity());

        $this->service()->profile(TestUser::create(['name' => 'N', 'email' => 'n@example.com', 'password' => 'x']));
    }

    #[Test]
    public function it_fails_when_the_token_expired_and_there_is_no_refresh_token(): void
    {
        $this->expectExceptionObject(GraphException::missingToken());

        $this->service()->profile($this->linked(expired: true, refresh: null));
    }

    #[Test]
    public function it_propagates_a_rejected_refresh(): void
    {
        $this->http()->fake(['*' => Factory::response(['error' => 'invalid_grant'], 400)]);

        $this->expectException(TokenException::class);

        $this->service()->profile($this->linked(expired: true));
    }

    #[Test]
    public function it_needs_a_cache_store_with_locks_to_refresh(): void
    {
        $cache = $this->container()->make(CacheManager::class);
        $cache->extend('nolock', fn (): Repository => new Repository(new NoLockStore));
        $this->settings()->set('cache.stores.nolock', ['driver' => 'nolock']);
        $this->settings()->set('cache.default', 'nolock');

        $this->expectException(ConfigurationException::class);
        $this->expectExceptionMessage('locks');

        $this->service()->profile($this->linked(expired: true));
    }

    #[Test]
    public function it_loads_groups_and_the_photo(): void
    {
        $this->http()->fake([
            '*/me/photo/$value' => Factory::response('IMG', 200, ['Content-Type' => 'image/png']),
            '*/me/memberOf*' => Factory::response(['value' => [['id' => 'g1']]]),
        ]);
        $user = $this->linked();

        self::assertSame('g1', $this->service()->groups($user)[0]->id);
        self::assertSame('data:image/png;base64,'.base64_encode('IMG'), $this->service()->photo($user));
    }

    #[Test]
    public function group_membership_is_cached_per_model_user_and_group(): void
    {
        $this->settings()->set('microsoft-entra-sso.graph.group_membership_cache_ttl', 60);
        $this->http()->fake(['*/checkMemberGroups' => Factory::response(['value' => ['g1']])]);
        $user = $this->linked();

        self::assertTrue($this->service()->isMemberOf($user, 'g1'));
        self::assertTrue($this->service()->isMemberOf($user, 'g1'));
        $this->http()->assertSentCount(1);

        // Same primary key, different model: must not reuse the cached result.
        $other = OtherUser::create(['name' => 'O', 'email' => 'o@example.com', 'password' => 'x']);
        $other->microsoftIdentity()->create(['microsoft_id' => 'dddddddd-dddd-4ddd-8ddd-dddddddddddd', 'token' => 't', 'token_expires_at' => now()->addHour()]);
        $this->service()->isMemberOf($other, 'g1');
        $this->http()->assertSentCount(2);
    }

    #[Test]
    public function group_membership_is_not_cached_when_the_ttl_is_zero(): void
    {
        $this->http()->fake(['*/checkMemberGroups' => Factory::response(['value' => []])]);
        $user = $this->linked();

        self::assertFalse($this->service()->isMemberOf($user, 'g1'));
        self::assertFalse($this->service()->isMemberOf($user, 'g1'));
        $this->http()->assertSentCount(2);
    }

    #[Test]
    public function the_facade_resolves_the_service(): void
    {
        $this->http()->fake(['*/me*' => Factory::response(['id' => FakeEntra::OID])]);

        self::assertSame(FakeEntra::OID, MicrosoftEntraSSO::profile($this->linked())->id);
    }
}
