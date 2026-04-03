<?php

namespace CodebarAg\MicrosoftEntraSSO\Services;

use CodebarAg\MicrosoftEntraSSO\Contracts\SSOAuthenticatable;
use CodebarAg\MicrosoftEntraSSO\Exceptions\SSOException;
use Illuminate\Database\Eloquent\Model;

class GuardConfigValidator
{
    /**
     * @return array{model: class-string<Model&SSOAuthenticatable>, redirect_after_login?: string}
     */
    public function guardConfig(string $guard): array
    {
        $guards = config('microsoft-entra-sso.guards', []);

        if (! is_array($guards) || ! isset($guards[$guard]) || ! is_array($guards[$guard])) {
            throw SSOException::guardNotConfigured($guard);
        }

        $guardConfig = $guards[$guard];
        $modelClass = $guardConfig['model'] ?? null;
        if (! is_string($modelClass) || $modelClass === '') {
            throw SSOException::guardModelNotConfigured($guard);
        }

        if (! class_exists($modelClass)) {
            throw SSOException::modelClassNotFound($modelClass);
        }

        if (! is_subclass_of($modelClass, Model::class)) {
            throw SSOException::modelMissingTrait($modelClass);
        }

        if (! in_array(SSOAuthenticatable::class, class_implements($modelClass) ?: [], true)) {
            throw SSOException::modelMissingTrait($modelClass);
        }

        /** @var class-string<Model&SSOAuthenticatable> $modelClass */
        $out = ['model' => $modelClass];
        if (isset($guardConfig['redirect_after_login']) && is_string($guardConfig['redirect_after_login'])) {
            $out['redirect_after_login'] = $guardConfig['redirect_after_login'];
        }

        return $out;
    }
}
