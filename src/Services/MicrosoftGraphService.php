<?php

namespace CodebarAg\MicrosoftEntraSSO\Services;

use CodebarAg\MicrosoftEntraSSO\Contracts\SSOAuthenticatable;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class MicrosoftGraphService
{
    protected const GRAPH_BASE = 'https://graph.microsoft.com/v1.0';

    public function __construct(
        protected MicrosoftOAuthService $oauthService,
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
     * Efficiently check if the user is a member of a specific AD group.
     */
    public function isUserInGroup(SSOAuthenticatable $user, string $groupId): bool
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
        if ($user->isMicrosoftTokenExpired()) {
            $this->refreshToken($user);
        }

        $identity = $user->microsoftIdentity()->first();

        return Http::withToken($identity->token)
            ->acceptJson();
    }

    protected function refreshToken(SSOAuthenticatable $user): void
    {
        $identity = $user->microsoftIdentity()->first();

        $tokens = $this->oauthService->refreshAccessToken($identity->refresh_token);

        $user->updateMicrosoftTokens([
            'token' => $tokens['access_token'] ?? null,
            'refresh_token' => $tokens['refresh_token'] ?? $identity->refresh_token,
            'expires_in' => $tokens['expires_in'] ?? null,
        ]);
    }
}
