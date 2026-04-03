<?php

namespace CodebarAg\MicrosoftEntraSSO\Services;

use CodebarAg\MicrosoftEntraSSO\Contracts\SSOAuthenticatable;
use CodebarAg\MicrosoftEntraSSO\Exceptions\SSOException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class GuardConfigValidator
{
    /**
     * @return array{model: class-string<Model&SSOAuthenticatable>, redirect_after_login?: string}
     */
    public function guardConfig(string $guard): array
    {
        $guards = config('microsoft-entra-sso.guards', []);
        $guards = is_array($guards) ? $guards : [];

        $guardConfig = Arr::get($guards, $guard);
        if (! is_array($guardConfig)) {
            throw SSOException::guardNotConfigured($guard);
        }

        $modelClass = Arr::get($guardConfig, 'model');
        if (! is_string($modelClass) || $modelClass === '') {
            throw SSOException::guardModelNotConfigured($guard);
        }

        if (! class_exists($modelClass)) {
            throw SSOException::modelClassNotFound($modelClass);
        }

        if (! is_subclass_of($modelClass, Model::class)) {
            throw SSOException::guardModelMustBeEloquent($modelClass);
        }

        if (! in_array(SSOAuthenticatable::class, class_implements($modelClass) ?: [], true)) {
            throw SSOException::modelMissingTrait($modelClass);
        }

        /** @var class-string<Model&SSOAuthenticatable> $modelClass */
        $out = ['model' => $modelClass];
        $redirectAfterLogin = Arr::get($guardConfig, 'redirect_after_login');
        if (is_string($redirectAfterLogin) && $redirectAfterLogin !== '') {
            $out['redirect_after_login'] = $redirectAfterLogin;
        }

        return $out;
    }
}
