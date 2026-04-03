<?php

use CodebarAg\MicrosoftEntraSSO\Exceptions\InvalidStateException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\SSOException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\TokenExchangeException;

it('creates configuration missing exception', function () {
    $exception = SSOException::configurationMissing('client_id');

    expect($exception)->toBeInstanceOf(SSOException::class);
    expect($exception->getMessage())->toContain('client_id');
});

it('creates guard not configured exception', function () {
    $exception = SSOException::guardNotConfigured('admin');

    expect($exception)->toBeInstanceOf(SSOException::class);
    expect($exception->getMessage())->toContain('admin');
});

it('creates guard mismatch exception', function () {
    $exception = SSOException::guardMismatch('web', 'admin');

    expect($exception->getMessage())->toContain('Expected [web]');
});

it('creates model missing trait exception', function () {
    $exception = SSOException::modelMissingTrait('App\\Models\\User');

    expect($exception)->toBeInstanceOf(SSOException::class);
    expect($exception->getMessage())->toContain('App\\Models\\User');
});

it('creates guard model must be eloquent exception', function () {
    $exception = SSOException::guardModelMustBeEloquent('SomeClass');

    expect($exception)->toBeInstanceOf(SSOException::class);
    expect($exception->getMessage())->toContain('SomeClass');
});

it('creates invalid graph response exceptions', function () {
    $profile = SSOException::invalidGraphResponse('profile');
    $groups = SSOException::invalidGraphResponse('groups');

    expect($profile)->toBeInstanceOf(SSOException::class);
    expect($groups)->toBeInstanceOf(SSOException::class);
    expect($profile->getMessage())->not->toBe($groups->getMessage());
});

it('creates user not found exception', function () {
    $exception = SSOException::userNotFound('ms-123');

    expect($exception)->toBeInstanceOf(SSOException::class);
    expect($exception->getMessage())->toContain('ms-123');
});

it('creates invalid redirect uri exception', function () {
    $exception = SSOException::invalidRedirectUri('http://evil.test/callback');

    expect($exception->getMessage())->toContain('invalid');
});

it('creates invalid state exception', function () {
    $exception = InvalidStateException::make();

    expect($exception)->toBeInstanceOf(InvalidStateException::class);
    expect($exception)->toBeInstanceOf(SSOException::class);
    expect($exception->getMessage())->toContain('state');
});

it('creates token exchange failed exception', function () {
    $exception = TokenExchangeException::failed('invalid_grant', 'Code expired.');

    expect($exception)->toBeInstanceOf(TokenExchangeException::class);
    expect($exception)->toBeInstanceOf(SSOException::class);
    expect($exception->getMessage())->toContain('invalid_grant');
});

it('creates missing authorization code exception', function () {
    $exception = TokenExchangeException::missingAuthorizationCode();

    expect($exception)->toBeInstanceOf(TokenExchangeException::class);
});

it('creates missing code verifier exception', function () {
    $exception = TokenExchangeException::missingCodeVerifier();

    expect($exception)->toBeInstanceOf(TokenExchangeException::class);
    expect($exception->getMessage())->toContain('code verifier');
});
