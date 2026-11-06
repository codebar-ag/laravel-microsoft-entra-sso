<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Config;

use CodebarAg\MicrosoftEntraSSO\Contracts\LoginGate;
use CodebarAg\MicrosoftEntraSSO\Contracts\SSOAuthenticatable;
use CodebarAg\MicrosoftEntraSSO\Enums\EmailLinkingMode;
use CodebarAg\MicrosoftEntraSSO\Exceptions\ConfigurationException;
use Illuminate\Database\Eloquent\Model;
use SensitiveParameter;

/**
 * The validated package configuration. Built once from the config array; an invalid value
 * throws a ConfigurationException that names the key. Nothing else in the package reads config().
 */
final readonly class EntraConfig
{
    /**
     * @param  list<string>  $scopes
     * @param  class-string<LoginGate>|null  $loginGate
     * @param  list<string>  $allowedRedirectHosts
     * @param  array<string, GuardConfig>  $guards
     */
    public function __construct(
        public Tenant $tenant,
        public string $clientId,
        #[SensitiveParameter] public string $clientSecret,
        public array $scopes,
        public bool $autoRegister,
        public EmailLinkingMode $emailLinking,
        public ?string $loginGate,
        public int $stateTtlSeconds,
        public array $allowedRedirectHosts,
        public string $errorFlashKey,
        public string $loginRoute,
        public IdTokenOptions $idToken,
        public HttpOptions $http,
        public GraphOptions $graph,
        public array $guards,
    ) {}

    /**
     * @param  array<mixed>  $config  the `microsoft-entra-sso` config array
     */
    public static function fromArray(array $config): self
    {
        $reader = new ConfigReader($config);

        $tenantValue = $reader->string('tenant_id');
        $tenant = Tenant::tryFrom($tenantValue)
            ?? throw ConfigurationException::invalid('tenant_id', 'must be a directory GUID, "organizations", "common" or "consumers".');

        $scopes = $reader->stringList('scopes');
        if (! in_array('openid', $scopes, true)) {
            throw ConfigurationException::invalid('scopes', 'must contain "openid", the id token is required to identify the user.');
        }

        $emailLinking = EmailLinkingMode::tryFrom($reader->string('email_linking'))
            ?? throw ConfigurationException::invalid('email_linking', 'must be one of: always, same_tenant_only, never.');
        if ($emailLinking === EmailLinkingMode::Always && ! $tenant->isSingleDirectory()) {
            throw ConfigurationException::invalid('email_linking', '"always" is only allowed when tenant_id is a single directory GUID (nOAuth), use "same_tenant_only" or "never".');
        }

        $idToken = $reader->section('id_token');
        $http = $reader->section('http');
        $graph = $reader->section('graph');

        return new self(
            tenant: $tenant,
            clientId: $reader->string('client_id'),
            clientSecret: $reader->string('client_secret'),
            scopes: $scopes,
            autoRegister: $reader->bool('auto_register'),
            emailLinking: $emailLinking,
            loginGate: self::loginGate($reader),
            stateTtlSeconds: $reader->int('state_ttl_seconds', 1),
            allowedRedirectHosts: $reader->stringList('allowed_redirect_hosts'),
            errorFlashKey: $reader->string('error_flash_key'),
            loginRoute: $reader->string('login_route'),
            idToken: new IdTokenOptions(
                leewaySeconds: $idToken->int('leeway_seconds', 0),
                jwksCacheTtl: $idToken->int('jwks_cache_ttl', 1),
                jwksRefreshCooldown: $idToken->int('jwks_refresh_cooldown', 0),
                cacheStore: $idToken->optionalString('cache_store'),
            ),
            http: new HttpOptions(
                timeout: $http->int('timeout', 1),
                connectTimeout: $http->int('connect_timeout', 1),
                retryTimes: $http->int('retry_times', 1),
                retrySleepMs: $http->int('retry_sleep_ms', 0),
            ),
            graph: new GraphOptions(
                groupMembershipCacheTtl: $graph->int('group_membership_cache_ttl', 0),
                refreshLockSeconds: $graph->int('refresh_lock_seconds', 1),
                refreshLockWaitSeconds: $graph->int('refresh_lock_wait_seconds', 1),
            ),
            guards: self::guards($reader),
        );
    }

    public function findGuard(string $name): ?GuardConfig
    {
        return $this->guards[$name] ?? null;
    }

    public function guard(string $name): GuardConfig
    {
        return $this->findGuard($name)
            ?? throw ConfigurationException::invalid("guards.{$name}", 'this guard is not configured.');
    }

    /**
     * @return class-string<LoginGate>|null
     */
    private static function loginGate(ConfigReader $reader): ?string
    {
        $class = $reader->optionalString('login_gate');

        if ($class === null) {
            return null;
        }

        if (! is_a($class, LoginGate::class, true)) {
            throw ConfigurationException::invalid('login_gate', "[{$class}] must be a class implementing ".LoginGate::class.'.');
        }

        return $class;
    }

    /**
     * @return array<string, GuardConfig>
     */
    private static function guards(ConfigReader $reader): array
    {
        $guards = [];

        foreach ($reader->sections('guards') as $name => $section) {
            $model = $section->string('model');

            if (! is_a($model, Model::class, true) || ! is_a($model, SSOAuthenticatable::class, true)) {
                throw ConfigurationException::invalid(
                    $section->path('model'),
                    "[{$model}] must be an Eloquent model implementing ".SSOAuthenticatable::class.'.',
                );
            }

            $guards[$name] = new GuardConfig(
                name: $name,
                model: $model,
                redirectAfterLogin: $section->string('redirect_after_login'),
            );
        }

        if ($guards === []) {
            throw ConfigurationException::invalid('guards', 'at least one guard is required.');
        }

        return $guards;
    }
}
