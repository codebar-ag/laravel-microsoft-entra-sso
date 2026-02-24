<?php

namespace CodebarAg\MicrosoftEntraSSO\Services;

use CodebarAg\MicrosoftEntraSSO\Contracts\SSOAuthenticatable;
use CodebarAg\MicrosoftEntraSSO\Exceptions\SSOException;

class GuardConfigValidator
{
    /**
     * @return array{model: class-string<SSOAuthenticatable>, redirect_after_login?: string}
     */
    public function guardConfig(string $guard): array
    {
        $guards = config('microsoft-entra-sso.guards', []);

        if (! isset($guards[$guard]) || ! is_array($guards[$guard])) {
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

        if (! in_array(SSOAuthenticatable::class, class_implements($modelClass) ?: [], true)) {
            throw SSOException::modelMissingTrait($modelClass);
        }

        /** @var class-string<SSOAuthenticatable> $modelClass */
        $guardConfig['model'] = $modelClass;

        return $guardConfig;
    }
}
