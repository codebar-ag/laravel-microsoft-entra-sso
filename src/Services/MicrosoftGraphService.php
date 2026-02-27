<?php

namespace CodebarAg\MicrosoftEntraSSO\Services;

use CodebarAg\MicrosoftEntraSSO\Contracts\Provider;
use CodebarAg\MicrosoftEntraSSO\Contracts\SSOAuthenticatable;
use CodebarAg\MicrosoftEntraSSO\Exceptions\SSOException;
use CodebarAg\MicrosoftEntraSSO\Models\MicrosoftSSOIdentity;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class MicrosoftGraphService
{
    protected const GRAPH_BASE = 'https://graph.microsoft.com/v1.0';

    public function __construct(
        protected Provider $oauthService,
        protected array $http = [],
    ) {}

    /**
     * Fetch extended profile information from Microsoft Graph /me endpoint.
     *
     * @return array{
     *     id: string,
     *     displayName: ?string,
     *     givenName: ?string,
     *     surname: ?string,
     *     mail: ?string,
     *     userPrincipalName: ?string,
     *     jobTitle: ?string,
     *     department: ?string,
     *     officeLocation: ?string,
     *     mobilePhone: ?string,
     *     businessPhones: array,
     *     city: ?string,
     *     state: ?string,
     *     country: ?string,
     *     postalCode: ?string,
     *     companyName: ?string,
     *     employeeId: ?string,
     * }
     */
    public function getUserProfile(SSOAuthenticatable $user): array
    {
        $select = implode(',', [
            'id', 'displayName', 'givenName', 'surname',
            'mail', 'userPrincipalName',
            'jobTitle', 'department', 'officeLocation',
            'mobilePhone', 'businessPhones',
            'city', 'state', 'country', 'postalCode',
            'companyName', 'employeeId',
        ]);

        $response = $this->authenticatedRequest($user)
            ->get(self::GRAPH_BASE.'/me', ['$select' => $select]);

        $response->throw();

        return $response->json();
    }

    /**
     * Fetch all AD security groups the user belongs to.
     *
     * @return Collection<int, array{id: string, displayName: ?string, description: ?string}>
     */
    public function getUserGroups(SSOAuthenticatable $user): Collection
    {
        $groups = collect();
        $url = self::GRAPH_BASE.'/me/memberOf/microsoft.graph.group?$select=id,displayName,description';

        do {
            $response = $this->authenticatedRequest($user)->get($url);
            $response->throw();

            $data = $response->json();
            $groups = $groups->concat($data['value'] ?? []);
            $url = $data['@odata.nextLink'] ?? null;
        } while ($url);

        return $groups;
    }

    /**
     * Fetch the current user's Microsoft profile photo as a data URI.
     */
    public function getUserPhotoDataUri(SSOAuthenticatable $user): ?string
    {
        $response = $this->authenticatedRequest($user)
            ->accept('*/*')
            ->get(self::GRAPH_BASE.'/me/photo/$value');

        if ($response->status() === 404) {
            return null;
        }

        $response->throw();

        $body = $response->body();
        if ($body === '') {
            return null;
        }

        $contentType = $response->header('Content-Type');
        if (! is_string($contentType) || $contentType === '') {
            $contentType = 'image/jpeg';
        }

        return sprintf('data:%s;base64,%s', $contentType, base64_encode($body));
    }

    /**
     * Efficiently check if the user is a member of a specific AD group.
     */
    public function isUserInGroup(SSOAuthenticatable $user, string $groupId): bool
    {
        $cacheKey = sprintf(
            'microsoft-entra-sso:group-membership:%s:%s',
            $user->getAuthIdentifier(),
            $groupId
        );

        $ttl = (int) config('microsoft-entra-sso.group_membership_cache_ttl', 60);

        if ($ttl > 0) {
            return Cache::remember($cacheKey, $ttl, fn () => $this->resolveGroupMembership($user, $groupId));
        }

        return $this->resolveGroupMembership($user, $groupId);
    }

    protected function resolveGroupMembership(SSOAuthenticatable $user, string $groupId): bool
    {
        $response = $this->authenticatedRequest($user)
            ->post(self::GRAPH_BASE.'/me/checkMemberGroups', [
                'groupIds' => [$groupId],
            ]);

        $response->throw();

        $matchedIds = $response->json('value', []);

        return in_array($groupId, $matchedIds, true);
    }

    protected function authenticatedRequest(SSOAuthenticatable $user): PendingRequest
    {
        /** @var MicrosoftSSOIdentity|null $identity */
        $identity = $user->microsoftIdentity()->first();
        if (! $identity) {
            throw SSOException::userNotFound('missing-identity');
        }

        if ($user->isMicrosoftTokenExpired() || ! is_string($identity->token) || $identity->token === '') {
            $identity = $this->refreshToken($user);
        }

        $timeout = (int) ($this->http['timeout'] ?? config('microsoft-entra-sso.http.timeout', 10));
        $connectTimeout = (int) ($this->http['connect_timeout'] ?? config('microsoft-entra-sso.http.connect_timeout', 5));
        $retryTimes = max(1, (int) ($this->http['retry_times'] ?? config('microsoft-entra-sso.http.retry_times', 1)));
        $retrySleep = (int) ($this->http['retry_sleep_ms'] ?? config('microsoft-entra-sso.http.retry_sleep_ms', 200));

        return Http::withToken($identity->token)
            ->timeout($timeout)
            ->connectTimeout($connectTimeout)
            ->retry($retryTimes, $retrySleep)
            ->acceptJson();
    }

    protected function refreshToken(SSOAuthenticatable $user): MicrosoftSSOIdentity
    {
        $identity = $user->microsoftIdentity()->first();
        if (! $identity) {
            throw SSOException::userNotFound('missing-identity');
        }

        $lockKey = sprintf('microsoft-entra-sso:refresh:%s', $identity->id);
        $lockTtl = (int) config('microsoft-entra-sso.refresh_lock_seconds', 10);
        $waitSeconds = max(1, (int) config('microsoft-entra-sso.refresh_lock_wait_seconds', 5));

        /** @var MicrosoftSSOIdentity $refreshedIdentity */
        $refreshedIdentity = Cache::lock($lockKey, $lockTtl)->block($waitSeconds, function () use ($user, $identity) {
            /** @var MicrosoftSSOIdentity|null $freshIdentity */
            $freshIdentity = $user->microsoftIdentity()->first();
            if ($freshIdentity && ! $freshIdentity->isTokenExpired() && is_string($freshIdentity->token) && $freshIdentity->token !== '') {
                return $freshIdentity;
            }

            $tokens = $this->oauthService->refreshAccessToken((string) $identity->refresh_token);
            $user->updateMicrosoftTokens([
                'token' => $tokens->accessToken,
                'refresh_token' => $tokens->refreshToken ?? $identity->refresh_token,
                'expires_in' => $tokens->expiresIn,
                'refresh_token_expires_in' => $tokens->refreshTokenExpiresIn,
            ]);

            /** @var MicrosoftSSOIdentity|null $updatedIdentity */
            $updatedIdentity = $user->microsoftIdentity()->first();
            if (! $updatedIdentity) {
                throw SSOException::userNotFound('missing-identity');
            }

            return $updatedIdentity;
        });

        return $refreshedIdentity;
    }
}
