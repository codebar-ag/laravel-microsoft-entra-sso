<?php

use CodebarAg\MicrosoftEntraSSO\Contracts\Provider;
use CodebarAg\MicrosoftEntraSSO\Data\SSOToken;
use CodebarAg\MicrosoftEntraSSO\Exceptions\SSOException;
use CodebarAg\MicrosoftEntraSSO\Services\MicrosoftGraphService;
use CodebarAg\MicrosoftEntraSSO\Tests\TestUser;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

function createTestUserWithIdentity(bool $expired = false): TestUser
{
    $user = TestUser::create([
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => bcrypt('password'),
    ]);

    $user->microsoftIdentity()->create([
        'microsoft_id' => 'ms-id-123',
        'token' => 'valid-token',
        'refresh_token' => 'refresh-token',
        'token_expires_at' => $expired ? now()->subHour() : now()->addHour(),
        'linked_at' => now(),
    ]);

    return $user->refresh();
}

beforeEach(function () {
    $this->oauthService = Mockery::mock(Provider::class);
    $this->graphService = new MicrosoftGraphService($this->oauthService);
});

it('returns user profile data from graph api', function () {
    $user = createTestUserWithIdentity();

    Http::fake([
        'graph.microsoft.com/v1.0/me*' => Http::response([
            'id' => 'ms-id-123',
            'displayName' => 'John Doe',
            'mail' => 'john@example.com',
        ]),
    ]);

    $profile = $this->graphService->getUserProfile($user);

    expect($profile)
        ->toHaveKey('id', 'ms-id-123')
        ->toHaveKey('displayName', 'John Doe');
});

it('refreshes expired token before making profile request', function () {
    $user = createTestUserWithIdentity(expired: true);

    $this->oauthService
        ->shouldReceive('refreshAccessToken')
        ->once()
        ->with('refresh-token')
        ->andReturn(new SSOToken('new-token', 'new-refresh', 3600));

    Http::fake([
        'graph.microsoft.com/v1.0/me*' => Http::response([
            'id' => 'ms-id-123',
            'displayName' => 'John Doe',
        ]),
    ]);

    $profile = $this->graphService->getUserProfile($user);

    expect($profile)->toHaveKey('id', 'ms-id-123');
});

it('returns all groups across paginated responses', function () {
    $user = createTestUserWithIdentity();

    Http::fake([
        'graph.microsoft.com/v1.0/me/memberOf/microsoft.graph.group*' => Http::sequence()
            ->push([
                'value' => [['id' => 'group-1', 'displayName' => 'Admins']],
                '@odata.nextLink' => 'https://graph.microsoft.com/v1.0/me/memberOf/microsoft.graph.group?$skiptoken=page2',
            ])
            ->push([
                'value' => [['id' => 'group-2', 'displayName' => 'Users']],
            ]),
    ]);

    $groups = $this->graphService->getUserGroups($user);

    expect($groups)->toHaveCount(2);
    expect($groups[0]['id'])->toBe('group-1');
    expect($groups[1]['id'])->toBe('group-2');
});

it('returns single page of groups', function () {
    $user = createTestUserWithIdentity();

    Http::fake([
        'graph.microsoft.com/v1.0/me/memberOf/microsoft.graph.group*' => Http::response([
            'value' => [['id' => 'group-1', 'displayName' => 'Admins']],
        ]),
    ]);

    $groups = $this->graphService->getUserGroups($user);

    expect($groups)->toHaveCount(1);
});

it('returns true when user is in the specified group', function () {
    $user = createTestUserWithIdentity();

    Http::fake([
        'graph.microsoft.com/v1.0/me/checkMemberGroups' => Http::response([
            'value' => ['target-group-id'],
        ]),
    ]);

    $result = $this->graphService->isUserInGroup($user, 'target-group-id');

    expect($result)->toBeTrue();
});

it('returns false when user is not in the specified group', function () {
    $user = createTestUserWithIdentity();

    Http::fake([
        'graph.microsoft.com/v1.0/me/checkMemberGroups' => Http::response([
            'value' => [],
        ]),
    ]);

    $result = $this->graphService->isUserInGroup($user, 'target-group-id');

    expect($result)->toBeFalse();
});

it('throws on http error from graph api', function () {
    $user = createTestUserWithIdentity();

    Http::fake([
        'graph.microsoft.com/v1.0/me*' => Http::response(['error' => 'Unauthorized'], 401),
    ]);

    $this->graphService->getUserProfile($user);
})->throws(RequestException::class);

it('throws when profile endpoint returns success with non-array json', function () {
    $user = createTestUserWithIdentity();

    Http::fake([
        'graph.microsoft.com/v1.0/me*' => Http::response('42', 200, [
            'Content-Type' => 'application/json',
        ]),
    ]);

    $this->graphService->getUserProfile($user);
})->throws(SSOException::class);

it('uses fallback values when refresh response is partial', function () {
    $user = createTestUserWithIdentity(expired: true);

    $this->oauthService
        ->shouldReceive('refreshAccessToken')
        ->once()
        ->andReturn(new SSOToken('new-token', null, null));

    Http::fake([
        'graph.microsoft.com/v1.0/me*' => Http::response(['id' => 'ms-id-123']),
    ]);

    $profile = $this->graphService->getUserProfile($user);

    expect($profile)->toHaveKey('id', 'ms-id-123');

    $user->refresh();
    $identity = $user->microsoftIdentity;
    expect($identity->refresh_token)->toBe('refresh-token');
});

it('is registered as a singleton in the service provider', function () {
    $instance1 = app(MicrosoftGraphService::class);
    $instance2 = app(MicrosoftGraphService::class);

    expect($instance1)
        ->toBeInstanceOf(MicrosoftGraphService::class)
        ->toBe($instance2);
});

it('returns empty collection when group payload is malformed', function () {
    $user = createTestUserWithIdentity();

    Http::fake([
        'graph.microsoft.com/v1.0/me/memberOf/microsoft.graph.group*' => Http::response([
            '@odata.nextLink' => null,
        ]),
    ]);

    $groups = $this->graphService->getUserGroups($user);
    expect($groups)->toHaveCount(0);
});

it('throws when group endpoint returns success with non-array json', function () {
    $user = createTestUserWithIdentity();

    Http::fake([
        'graph.microsoft.com/v1.0/me/memberOf/microsoft.graph.group*' => Http::response('"just-a-string"', 200, [
            'Content-Type' => 'application/json',
        ]),
    ]);

    $this->graphService->getUserGroups($user);
})->throws(SSOException::class);
