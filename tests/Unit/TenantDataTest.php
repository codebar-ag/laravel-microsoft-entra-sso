<?php

declare(strict_types=1);

use CodebarAg\MicrosoftEntraSSO\Data\SSOToken;
use CodebarAg\MicrosoftEntraSSO\Data\SSOUser;

it('keeps the old SSOUser constructor and array shape working', function () {
    $user = new SSOUser('id', 'Name', 'a@b.c', null, null, []);

    expect($user->tenantId)->toBeNull()
        ->and($user->objectId)->toBeNull()
        ->and($user->toArray())->toHaveKeys(['id', 'name', 'email', 'job_title', 'department', 'raw', 'token', 'refresh_token', 'expires_in', 'approved_scopes'])
        ->and($user->toArray()['tenant_id'])->toBeNull()
        ->and($user->toArray()['object_id'])->toBeNull();
});

it('carries tenant and object id through withToken, withTenant and withoutTokens', function () {
    $user = (new SSOUser('id', 'Name', 'a@b.c', null, null, []))->withTenant('tid', 'oid');
    $withToken = $user->withToken(new SSOToken('access', 'refresh', 60, ['openid']));

    expect($withToken->tenantId)->toBe('tid')
        ->and($withToken->objectId)->toBe('oid')
        ->and($withToken->token)->toBe('access')
        ->and($withToken->toArray()['tenant_id'])->toBe('tid')
        ->and($withToken->toArray()['object_id'])->toBe('oid');

    $stripped = $withToken->withoutTokens();
    expect($stripped->token)->toBeNull()
        ->and($stripped->refreshToken)->toBeNull()
        ->and($stripped->tenantId)->toBe('tid');

    $retenanted = $withToken->withTenant('t2', null);
    expect($retenanted->token)->toBe('access')->and($retenanted->tenantId)->toBe('t2')->and($retenanted->objectId)->toBeNull();
});

it('captures the id token in SSOToken', function () {
    $token = SSOToken::fromArray(['access_token' => 'a', 'id_token' => 'jwt']);

    expect($token->idToken)->toBe('jwt')
        ->and($token->toArray()['id_token'])->toBe('jwt')
        ->and(SSOToken::fromArray(['access_token' => 'a'])->idToken)->toBeNull()
        ->and((new SSOToken('a', null, null))->idToken)->toBeNull();
});
