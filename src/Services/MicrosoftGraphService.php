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

    /**
     * @param  array<string, mixed>  $http
     */
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
     *     businessPhones: array<int, mixed>,
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

        $data = $response->json();
        if (! is_array($data)) {
            throw SSOException::userNotFound('invalid-graph-profile');
        }

        return $this->normalizeUserProfile(self::jsonAsAssoc($data));
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
            if (! is_array($data)) {
                break;
            }
            $value = $data['value'] ?? [];
            $chunk = [];
            if (is_array($value)) {
                foreach ($value as $item) {
                    if (is_array($item)) {
                        $chunk[] = $item;
                    }
                }
            }
            $groups = $groups->concat($chunk);
            $next = $data['@odata.nextLink'] ?? null;
            $url = is_string($next) && $next !== '' ? $next : null;
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
            self::stringifyAuthId($user),
            $groupId
        );

        $ttlRaw = config('microsoft-entra-sso.group_membership_cache_ttl', 60);
        $ttl = is_int($ttlRaw) ? $ttlRaw : (is_numeric($ttlRaw) ? (int) $ttlRaw : 60);

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

        $raw = $response->json('value', []);
        if (! is_array($raw)) {
            return false;
        }
        $matchedIds = [];
        foreach ($raw as $id) {
            if (is_string($id)) {
                $matchedIds[] = $id;
            }
        }

        return in_array($groupId, $matchedIds, true);
    }

    protected function authenticatedRequest(SSOAuthenticatable $user): PendingRequest
    {
        $identity = $user->microsoftIdentity()->first();
        if (! $identity instanceof MicrosoftSSOIdentity) {
            throw SSOException::userNotFound('missing-identity');
        }

        if ($user->isMicrosoftTokenExpired() || ! is_string($identity->token) || $identity->token === '') {
            $identity = $this->refreshToken($user);
        }

        $timeout = $this->intHttpValue('timeout', 10);
        $connectTimeout = $this->intHttpValue('connect_timeout', 5);
        $retryTimes = max(1, $this->intHttpValue('retry_times', 1));
        $retrySleep = $this->intHttpValue('retry_sleep_ms', 200);

        $token = $identity->token;
        if (! is_string($token) || $token === '') {
            throw SSOException::userNotFound('missing-token');
        }

        return Http::withToken($token)
            ->timeout($timeout)
            ->connectTimeout($connectTimeout)
            ->retry($retryTimes, $retrySleep)
            ->acceptJson();
    }

    protected function refreshToken(SSOAuthenticatable $user): MicrosoftSSOIdentity
    {
        $identity = $user->microsoftIdentity()->first();
        if (! $identity instanceof MicrosoftSSOIdentity) {
            throw SSOException::userNotFound('missing-identity');
        }

        if (! is_string($identity->refresh_token) || $identity->refresh_token === '') {
            throw SSOException::userNotFound('missing-refresh-token');
        }

        $lockKey = sprintf('microsoft-entra-sso:refresh:%s', self::stringifyKey($identity->getKey()));
        $lockTtlRaw = config('microsoft-entra-sso.refresh_lock_seconds', 10);
        $lockTtl = is_int($lockTtlRaw) ? $lockTtlRaw : (is_numeric($lockTtlRaw) ? (int) $lockTtlRaw : 10);
        $waitRaw = config('microsoft-entra-sso.refresh_lock_wait_seconds', 5);
        $waitSeconds = max(1, is_int($waitRaw) ? $waitRaw : (is_numeric($waitRaw) ? (int) $waitRaw : 5));

        /** @var MicrosoftSSOIdentity $refreshedIdentity */
        $refreshedIdentity = Cache::lock($lockKey, $lockTtl)->block($waitSeconds, function () use ($user, $identity) {
            /** @var MicrosoftSSOIdentity|null $freshIdentity */
            $freshIdentity = $user->microsoftIdentity()->first();
            if ($freshIdentity && ! $freshIdentity->isTokenExpired() && is_string($freshIdentity->token) && $freshIdentity->token !== '') {
                return $freshIdentity;
            }

            $refresh = $identity->refresh_token;
            if (! is_string($refresh) || $refresh === '') {
                throw SSOException::userNotFound('missing-refresh-token');
            }

            $tokens = $this->oauthService->refreshAccessToken($refresh);
            $user->updateMicrosoftTokens([
                'token' => $tokens->accessToken,
                'refresh_token' => $tokens->refreshToken ?? $refresh,
                'expires_in' => $tokens->expiresIn,
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

    private function intHttpValue(string $key, int $default): int
    {
        $v = $this->http[$key] ?? config("microsoft-entra-sso.http.{$key}", $default);
        if (is_int($v)) {
            return $v;
        }
        if (is_numeric($v)) {
            return (int) $v;
        }

        return $default;
    }

    /**
     * @param  array<string, mixed>  $data
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
     *     businessPhones: array<int, mixed>,
     *     city: ?string,
     *     state: ?string,
     *     country: ?string,
     *     postalCode: ?string,
     *     companyName: ?string,
     *     employeeId: ?string,
     * }
     */
    private function normalizeUserProfile(array $data): array
    {
        $id = $data['id'] ?? null;
        if (! is_string($id) || $id === '') {
            throw SSOException::userNotFound('invalid-graph-profile');
        }

        $phones = $data['businessPhones'] ?? [];
        if (! is_array($phones)) {
            $phones = [];
        }

        return [
            'id' => $id,
            'displayName' => self::optionalString($data['displayName'] ?? null),
            'givenName' => self::optionalString($data['givenName'] ?? null),
            'surname' => self::optionalString($data['surname'] ?? null),
            'mail' => self::optionalString($data['mail'] ?? null),
            'userPrincipalName' => self::optionalString($data['userPrincipalName'] ?? null),
            'jobTitle' => self::optionalString($data['jobTitle'] ?? null),
            'department' => self::optionalString($data['department'] ?? null),
            'officeLocation' => self::optionalString($data['officeLocation'] ?? null),
            'mobilePhone' => self::optionalString($data['mobilePhone'] ?? null),
            'businessPhones' => $phones,
            'city' => self::optionalString($data['city'] ?? null),
            'state' => self::optionalString($data['state'] ?? null),
            'country' => self::optionalString($data['country'] ?? null),
            'postalCode' => self::optionalString($data['postalCode'] ?? null),
            'companyName' => self::optionalString($data['companyName'] ?? null),
            'employeeId' => self::optionalString($data['employeeId'] ?? null),
        ];
    }

    private static function optionalString(mixed $value): ?string
    {
        return is_string($value) ? $value : null;
    }

    /**
     * @return array<string, mixed>
     */
    private static function jsonAsAssoc(mixed $data): array
    {
        if (! is_array($data)) {
            return [];
        }
        $out = [];
        foreach ($data as $key => $value) {
            if (is_string($key)) {
                $out[$key] = $value;
            }
        }

        return $out;
    }

    private static function stringifyAuthId(SSOAuthenticatable $user): string
    {
        $id = $user->getAuthIdentifier();
        if (is_string($id)) {
            return $id;
        }
        if (is_int($id) || is_float($id)) {
            return (string) $id;
        }

        return '';
    }

    private static function stringifyKey(mixed $key): string
    {
        if (is_string($key)) {
            return $key;
        }
        if (is_int($key) || is_float($key)) {
            return (string) $key;
        }

        return '0';
    }
}
