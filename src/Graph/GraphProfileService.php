<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Graph;

use CodebarAg\MicrosoftEntraSSO\Clients\GraphClient;
use CodebarAg\MicrosoftEntraSSO\Clients\TokenClient;
use CodebarAg\MicrosoftEntraSSO\Config\EntraConfig;
use CodebarAg\MicrosoftEntraSSO\Contracts\SsoUser;
use CodebarAg\MicrosoftEntraSSO\Exceptions\ConfigurationException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\GraphException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\TokenException;
use CodebarAg\MicrosoftEntraSSO\Models\MicrosoftIdentity;
use Illuminate\Contracts\Cache\Factory as CacheFactory;
use Illuminate\Contracts\Cache\LockProvider;

/**
 * Microsoft Graph on behalf of a signed-in user: loads the user's stored access token and
 * refreshes it (serialised by a cache lock, refresh tokens are single use) when it expired.
 */
final readonly class GraphProfileService
{
    public function __construct(
        private GraphClient $graph,
        private TokenClient $tokens,
        private CacheFactory $caches,
        private EntraConfig $config,
    ) {}

    /**
     * @throws GraphException
     * @throws TokenException
     */
    public function profile(SsoUser $user): GraphProfile
    {
        return $this->graph->profile($this->accessToken($user));
    }

    /**
     * @return list<Group>
     *
     * @throws GraphException
     * @throws TokenException
     */
    public function groups(SsoUser $user): array
    {
        return $this->graph->groups($this->accessToken($user));
    }

    /**
     * The profile photo as a data URI, null when there is none.
     *
     * @throws GraphException
     * @throws TokenException
     */
    public function photo(SsoUser $user): ?string
    {
        return $this->graph->photo($this->accessToken($user));
    }

    /**
     * Whether the user is a member of the group. Cached per user model, user and group, so users
     * of different models that share a primary key never share a result.
     *
     * @throws GraphException
     * @throws TokenException
     */
    public function isMemberOf(SsoUser $user, string $groupId): bool
    {
        $ttl = $this->config->graph->groupMembershipCacheTtl;
        $resolve = fn (): bool => $this->graph->isMemberOf($this->accessToken($user), $groupId);

        if ($ttl === 0) {
            return $resolve();
        }

        $key = sprintf('microsoft-entra-sso:group-membership:%s:%s:%s', $user::class, $this->identifier($user), $groupId);

        return $this->caches->store()->remember($key, $ttl, $resolve);
    }

    /**
     * @throws GraphException
     * @throws TokenException
     */
    private function accessToken(SsoUser $user): string
    {
        $identity = $user->microsoftIdentity()->first() ?? throw GraphException::missingIdentity();

        if ($identity->token !== null && $identity->token !== '' && ! $identity->isTokenExpired()) {
            return $identity->token;
        }

        return $this->refresh($user, $identity);
    }

    /**
     * @throws GraphException
     * @throws TokenException
     */
    private function refresh(SsoUser $user, MicrosoftIdentity $stale): string
    {
        $store = $this->caches->store()->getStore();
        if (! $store instanceof LockProvider) {
            throw ConfigurationException::invalid('cache', 'the default cache store must support atomic locks to refresh Microsoft tokens.');
        }

        $lock = $store->lock('microsoft-entra-sso:refresh:'.$stale->microsoft_id, $this->config->graph->refreshLockSeconds);

        $token = $lock->block($this->config->graph->refreshLockWaitSeconds, function () use ($user, $stale): string {
            // Another request may have refreshed while this one waited for the lock.
            $fresh = $user->microsoftIdentity()->first() ?? throw GraphException::missingIdentity();
            if ($fresh->token !== null && $fresh->token !== '' && ! $fresh->isTokenExpired()) {
                return $fresh->token;
            }

            $refreshToken = $stale->refresh_token;
            if ($refreshToken === null || $refreshToken === '') {
                throw GraphException::missingToken();
            }

            $tokens = $this->tokens->refresh($refreshToken);

            $fresh->forceFill([
                'token' => $tokens->accessToken,
                'refresh_token' => $tokens->refreshToken,
                'token_expires_at' => $tokens->expiresAt,
            ])->save();

            return $tokens->accessToken;
        });

        return is_string($token) ? $token : throw GraphException::missingToken();
    }

    private function identifier(SsoUser $user): string
    {
        $id = $user->getAuthIdentifier();

        return is_int($id) || is_string($id) ? (string) $id : '';
    }
}
