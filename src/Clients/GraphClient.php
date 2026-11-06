<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Clients;

use CodebarAg\MicrosoftEntraSSO\Exceptions\GraphException;
use CodebarAg\MicrosoftEntraSSO\Graph\GraphProfile;
use CodebarAg\MicrosoftEntraSSO\Graph\Group;
use CodebarAg\MicrosoftEntraSSO\Identity\Profile;
use CodebarAg\MicrosoftEntraSSO\Support\Payload;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use SensitiveParameter;

/**
 * Typed calls to Microsoft Graph. Stateless: the caller supplies the access token.
 */
final readonly class GraphClient
{
    private const string BASE = 'https://graph.microsoft.com/v1.0';

    private const string PROFILE_FIELDS = 'id,displayName,givenName,surname,mail,userPrincipalName,jobTitle,department,officeLocation,mobilePhone,businessPhones,city,state,country,postalCode,companyName,employeeId';

    public function __construct(private HttpClient $http) {}

    /**
     * The profile used to sign a person in.
     *
     * @throws GraphException
     */
    public function me(#[SensitiveParameter] string $accessToken): Profile
    {
        $data = $this->object(
            $this->request($accessToken)->get(self::BASE.'/me', ['$select' => 'id,displayName,mail,userPrincipalName,jobTitle,department']),
            '/me',
        );

        $id = Payload::string($data['id'] ?? null) ?? throw GraphException::invalidResponse('the user id');
        $email = Payload::string($data['mail'] ?? null) ?? Payload::string($data['userPrincipalName'] ?? null)
            ?? throw GraphException::invalidResponse('the email address');

        return new Profile(
            graphId: $id,
            name: Payload::string($data['displayName'] ?? null) ?? '',
            email: $email,
            jobTitle: Payload::string($data['jobTitle'] ?? null),
            department: Payload::string($data['department'] ?? null),
        );
    }

    /**
     * @throws GraphException
     */
    public function profile(#[SensitiveParameter] string $accessToken): GraphProfile
    {
        $data = $this->object(
            $this->request($accessToken)->get(self::BASE.'/me', ['$select' => self::PROFILE_FIELDS]),
            '/me',
        );

        return new GraphProfile(
            id: Payload::string($data['id'] ?? null) ?? throw GraphException::invalidResponse('the user id'),
            displayName: Payload::string($data['displayName'] ?? null),
            givenName: Payload::string($data['givenName'] ?? null),
            surname: Payload::string($data['surname'] ?? null),
            mail: Payload::string($data['mail'] ?? null),
            userPrincipalName: Payload::string($data['userPrincipalName'] ?? null),
            jobTitle: Payload::string($data['jobTitle'] ?? null),
            department: Payload::string($data['department'] ?? null),
            officeLocation: Payload::string($data['officeLocation'] ?? null),
            mobilePhone: Payload::string($data['mobilePhone'] ?? null),
            businessPhones: Payload::strings($data['businessPhones'] ?? null),
            city: Payload::string($data['city'] ?? null),
            state: Payload::string($data['state'] ?? null),
            country: Payload::string($data['country'] ?? null),
            postalCode: Payload::string($data['postalCode'] ?? null),
            companyName: Payload::string($data['companyName'] ?? null),
            employeeId: Payload::string($data['employeeId'] ?? null),
        );
    }

    /**
     * All groups the user is a member of. Pagination links must stay on Microsoft Graph because
     * the bearer token is sent with every page.
     *
     * @return list<Group>
     *
     * @throws GraphException
     */
    public function groups(#[SensitiveParameter] string $accessToken): array
    {
        $groups = [];
        $url = self::BASE.'/me/memberOf/microsoft.graph.group?$select=id,displayName,description';

        while ($url !== null) {
            $data = $this->object($this->request($accessToken)->get($url), '/me/memberOf');

            foreach (Payload::objects($data['value'] ?? null) as $group) {
                $groups[] = new Group(
                    id: Payload::string($group['id'] ?? null) ?? throw GraphException::invalidResponse('a group id'),
                    displayName: Payload::string($group['displayName'] ?? null),
                    description: Payload::string($group['description'] ?? null),
                );
            }

            $url = Payload::string($data['@odata.nextLink'] ?? null);
            if ($url !== null && ! str_starts_with($url, self::BASE.'/')) {
                throw GraphException::untrustedLink();
            }
        }

        return $groups;
    }

    /**
     * @throws GraphException
     */
    public function isMemberOf(#[SensitiveParameter] string $accessToken, string $groupId): bool
    {
        $data = $this->object(
            $this->request($accessToken)->post(self::BASE.'/me/checkMemberGroups', ['groupIds' => [$groupId]]),
            '/me/checkMemberGroups',
        );

        return in_array($groupId, Payload::strings($data['value'] ?? null), true);
    }

    /**
     * The profile photo as a data URI, null when the user has none.
     *
     * @throws GraphException
     */
    public function photo(#[SensitiveParameter] string $accessToken): ?string
    {
        $response = $this->request($accessToken)->accept('*/*')->get(self::BASE.'/me/photo/$value');

        if ($response->status() === 404) {
            return null;
        }
        if ($response->failed()) {
            throw GraphException::requestFailed('/me/photo', $response->status());
        }
        if ($response->body() === '') {
            return null;
        }

        $contentType = $response->header('Content-Type');

        return sprintf('data:%s;base64,%s', $contentType !== '' ? $contentType : 'image/jpeg', base64_encode($response->body()));
    }

    private function request(#[SensitiveParameter] string $accessToken): PendingRequest
    {
        return $this->http->request()->withToken($accessToken);
    }

    /**
     * @return array<string, mixed>
     *
     * @throws GraphException
     */
    private function object(Response $response, string $endpoint): array
    {
        if ($response->failed()) {
            throw GraphException::requestFailed($endpoint, $response->status());
        }

        $data = Payload::assoc($response->json());

        if ($data === []) {
            throw GraphException::invalidResponse($endpoint);
        }

        return $data;
    }
}
