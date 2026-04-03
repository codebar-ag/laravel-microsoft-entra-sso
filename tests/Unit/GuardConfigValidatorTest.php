<?php

use CodebarAg\MicrosoftEntraSSO\Exceptions\SSOException;
use CodebarAg\MicrosoftEntraSSO\Services\GuardConfigValidator;
use CodebarAg\MicrosoftEntraSSO\Tests\TestUser;
use Illuminate\Database\Eloquent\Model;

it('throws when guard model is not an eloquent model', function () {
    config(['microsoft-entra-sso.guards' => [
        'web' => ['model' => stdClass::class],
    ]]);

    app(GuardConfigValidator::class)->guardConfig('web');
})->throws(SSOException::class);

it('throws when guard model does not implement sso contract', function () {
    config(['microsoft-entra-sso.guards' => [
        'web' => ['model' => Model::class],
    ]]);

    app(GuardConfigValidator::class)->guardConfig('web');
})->throws(SSOException::class);

it('returns config when guard model is valid', function () {
    config(['microsoft-entra-sso.guards' => [
        'web' => ['model' => TestUser::class],
    ]]);

    $config = app(GuardConfigValidator::class)->guardConfig('web');

    expect($config['model'])->toBe(TestUser::class);
});
