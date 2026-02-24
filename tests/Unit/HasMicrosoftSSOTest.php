<?php

use CodebarAg\MicrosoftEntraSSO\Models\MicrosoftSSOIdentity;
use CodebarAg\MicrosoftEntraSSO\Tests\TestUser;

it('finds user by microsoft id', function () {
    $user = TestUser::create([
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => bcrypt('password'),
    ]);

    $user->microsoftIdentity()->create([
        'microsoft_id' => 'ms-123',
        'linked_at' => now(),
    ]);

    $found = TestUser::findByMicrosoftId('ms-123');

    expect($found)->not->toBeNull();
    expect($found->email)->toBe('test@example.com');
});

it('returns null when microsoft id not found', function () {
    $found = TestUser::findByMicrosoftId('nonexistent');

    expect($found)->toBeNull();
});

it('creates new user from microsoft data', function () {
    $user = TestUser::findOrCreateFromMicrosoft([
        'id' => 'ms-new-user',
        'name' => 'New User',
        'email' => 'new@example.com',
        'token' => 'access-token',
        'refresh_token' => 'refresh-token',
        'expires_in' => 3600,
    ]);

    expect($user)->toBeInstanceOf(TestUser::class);
    expect($user->email)->toBe('new@example.com');
    expect($user->name)->toBe('New User');
    expect($user->email_verified_at)->not->toBeNull();
    expect($user->microsoftIdentity)->not->toBeNull();
    expect($user->microsoftIdentity->microsoft_id)->toBe('ms-new-user');
});

it('returns existing user when microsoft id matches', function () {
    $user = TestUser::create([
        'name' => 'Existing',
        'email' => 'existing@example.com',
        'password' => bcrypt('password'),
    ]);

    $user->microsoftIdentity()->create([
        'microsoft_id' => 'ms-existing',
        'linked_at' => now(),
    ]);

    $result = TestUser::findOrCreateFromMicrosoft([
        'id' => 'ms-existing',
        'name' => 'Existing',
        'email' => 'existing@example.com',
        'token' => 'new-token',
    ]);

    expect(TestUser::count())->toBe(1);
    expect($result->email)->toBe('existing@example.com');
});

it('links microsoft account to existing user by email', function () {
    $user = TestUser::create([
        'name' => 'Email User',
        'email' => 'email@example.com',
        'password' => bcrypt('password'),
    ]);

    $result = TestUser::findOrCreateFromMicrosoft([
        'id' => 'ms-link',
        'name' => 'Email User',
        'email' => 'email@example.com',
        'token' => 'token-123',
    ]);

    expect(TestUser::count())->toBe(1);
    expect($result->microsoftIdentity->microsoft_id)->toBe('ms-link');
});

it('links microsoft account to user instance', function () {
    $user = TestUser::create([
        'name' => 'Link User',
        'email' => 'link@example.com',
        'password' => bcrypt('password'),
    ]);

    $user->linkMicrosoftAccount([
        'id' => 'ms-linked',
        'token' => 'some-token',
        'refresh_token' => 'some-refresh',
        'expires_in' => 7200,
    ]);

    $identity = $user->microsoftIdentity()->first();

    expect($identity->microsoft_id)->toBe('ms-linked');
    expect($identity->linked_at)->not->toBeNull();
    expect($identity->token_expires_at)->not->toBeNull();
});

it('checks if microsoft sso is linked', function () {
    $linked = TestUser::create([
        'name' => 'Linked',
        'email' => 'linked@example.com',
        'password' => bcrypt('password'),
    ]);

    $linked->microsoftIdentity()->create([
        'microsoft_id' => 'ms-abc',
        'linked_at' => now(),
    ]);

    $unlinked = TestUser::create([
        'name' => 'Unlinked',
        'email' => 'unlinked@example.com',
        'password' => bcrypt('password'),
    ]);

    expect($linked->hasMicrosoftSSOLinked())->toBeTrue();
    expect($unlinked->hasMicrosoftSSOLinked())->toBeFalse();
});

it('unlinks microsoft account', function () {
    $user = TestUser::create([
        'name' => 'Unlink Me',
        'email' => 'unlink@example.com',
        'password' => bcrypt('password'),
    ]);

    $user->microsoftIdentity()->create([
        'microsoft_id' => 'ms-remove',
        'token' => encrypt('token'),
        'refresh_token' => encrypt('refresh'),
        'linked_at' => now(),
    ]);

    $user->unlinkMicrosoftAccount();

    expect($user->hasMicrosoftSSOLinked())->toBeFalse();
    expect(MicrosoftSSOIdentity::count())->toBe(0);
});

it('encrypts tokens on the identity model', function () {
    $user = TestUser::create([
        'name' => 'Token User',
        'email' => 'token@example.com',
        'password' => bcrypt('password'),
    ]);

    $user->linkMicrosoftAccount([
        'id' => 'ms-token',
        'token' => 'plain-token',
        'refresh_token' => 'plain-refresh',
    ]);

    $identity = $user->microsoftIdentity()->first();
    $raw = $identity->getRawOriginal('token');

    expect($raw)->not->toBe('plain-token');
    expect($identity->token)->toBe('plain-token');
    expect($identity->refresh_token)->toBe('plain-refresh');
});

it('reports token as expired when no expiration is set', function () {
    $user = TestUser::create([
        'name' => 'No Expiry',
        'email' => 'noexpiry@example.com',
        'password' => bcrypt('password'),
    ]);

    $user->microsoftIdentity()->create([
        'microsoft_id' => 'ms-noexpiry',
        'token_expires_at' => null,
        'linked_at' => now(),
    ]);

    expect($user->isMicrosoftTokenExpired())->toBeTrue();
});

it('reports token as expired when expiration is in the past', function () {
    $user = TestUser::create([
        'name' => 'Expired Token',
        'email' => 'expired@example.com',
        'password' => bcrypt('password'),
    ]);

    $user->microsoftIdentity()->create([
        'microsoft_id' => 'ms-expired',
        'token_expires_at' => now()->subHour(),
        'linked_at' => now(),
    ]);

    expect($user->isMicrosoftTokenExpired())->toBeTrue();
});

it('reports token as not expired when expiration is in the future', function () {
    $user = TestUser::create([
        'name' => 'Valid Token',
        'email' => 'valid@example.com',
        'password' => bcrypt('password'),
    ]);

    $user->microsoftIdentity()->create([
        'microsoft_id' => 'ms-valid',
        'token_expires_at' => now()->addHour(),
        'linked_at' => now(),
    ]);

    expect($user->isMicrosoftTokenExpired())->toBeFalse();
});

it('reports token as expired when no identity exists', function () {
    $user = TestUser::create([
        'name' => 'No Identity',
        'email' => 'noidentity@example.com',
        'password' => bcrypt('password'),
    ]);

    expect($user->isMicrosoftTokenExpired())->toBeTrue();
});

it('updates microsoft tokens', function () {
    $user = TestUser::create([
        'name' => 'Update Tokens',
        'email' => 'update@example.com',
        'password' => bcrypt('password'),
    ]);

    $user->microsoftIdentity()->create([
        'microsoft_id' => 'ms-update',
        'linked_at' => now(),
    ]);

    $user->updateMicrosoftTokens([
        'token' => 'new-token',
        'refresh_token' => 'new-refresh',
        'expires_in' => 3600,
    ]);

    $identity = $user->microsoftIdentity()->first();

    expect($identity->token)->toBe('new-token');
    expect($identity->refresh_token)->toBe('new-refresh');
    expect($identity->token_expires_at)->not->toBeNull();
});

it('hides tokens from identity serialization', function () {
    $user = TestUser::create([
        'name' => 'Hidden User',
        'email' => 'hidden@example.com',
        'password' => bcrypt('password'),
    ]);

    $user->linkMicrosoftAccount([
        'id' => 'ms-hidden',
        'token' => 'secret-token',
        'refresh_token' => 'secret-refresh',
    ]);

    $identity = $user->microsoftIdentity()->first();
    $array = $identity->toArray();

    expect($array)->not->toHaveKey('token');
    expect($array)->not->toHaveKey('refresh_token');
});

it('morphs back to the authenticatable model', function () {
    $user = TestUser::create([
        'name' => 'Morph User',
        'email' => 'morph@example.com',
        'password' => bcrypt('password'),
    ]);

    $user->microsoftIdentity()->create([
        'microsoft_id' => 'ms-morph',
        'linked_at' => now(),
    ]);

    $identity = MicrosoftSSOIdentity::first();

    expect($identity->authenticatable)->toBeInstanceOf(TestUser::class);
    expect($identity->authenticatable->id)->toBe($user->id);
});
