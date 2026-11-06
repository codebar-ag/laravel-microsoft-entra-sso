<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Unit\Clients;

use CodebarAg\MicrosoftEntraSSO\Clients\GraphClient;
use CodebarAg\MicrosoftEntraSSO\Exceptions\GraphException;
use CodebarAg\MicrosoftEntraSSO\Tests\TestCase;
use Illuminate\Http\Client\Factory;
use Illuminate\Http\Client\Request;
use PHPUnit\Framework\Attributes\Test;

final class GraphClientTest extends TestCase
{
    private function client(): GraphClient
    {
        return $this->container()->make(GraphClient::class);
    }

    #[Test]
    public function it_loads_the_sign_in_profile(): void
    {
        $this->entra()->fake(graph: ['jobTitle' => 'Dev', 'department' => 'Eng']);

        $profile = $this->client()->me('tok');

        self::assertSame('John Doe', $profile->name);
        self::assertSame('john@example.com', $profile->email);
        self::assertSame('Dev', $profile->jobTitle);
        self::assertSame('Eng', $profile->department);
        $this->http()->assertSent(fn (Request $r): bool => $r->hasHeader('Authorization', 'Bearer tok'));
    }

    #[Test]
    public function it_falls_back_to_the_user_principal_name(): void
    {
        $this->http()->fake(['*' => Factory::response(['id' => 'x', 'userPrincipalName' => 'upn@example.com'])]);

        $profile = $this->client()->me('tok');

        self::assertSame('upn@example.com', $profile->email);
        self::assertSame('', $profile->name);
    }

    #[Test]
    public function it_rejects_profiles_without_id_or_email(): void
    {
        $this->http()->fake(['*' => Factory::response(['mail' => 'a@b.c'])]);

        $this->expectExceptionMessage('user id');

        $this->client()->me('tok');
    }

    #[Test]
    public function it_rejects_profiles_without_email(): void
    {
        $this->http()->fake(['*' => Factory::response(['id' => 'x'])]);

        $this->expectExceptionMessage('email address');

        $this->client()->me('tok');
    }

    #[Test]
    public function it_maps_failed_and_empty_responses(): void
    {
        $this->http()->fake(['*' => Factory::response([], 401)]);

        try {
            $this->client()->me('tok');
            self::fail('401');
        } catch (GraphException $e) {
            self::assertStringContainsString('status 401', $e->getMessage());
            self::assertSame('microsoft-entra-sso.error.graph_failed', $e->translationKey());
        }
    }

    #[Test]
    public function it_rejects_a_response_that_is_not_a_json_object(): void
    {
        $this->http()->fake(['*' => Factory::response('not json')]);

        $this->expectExceptionMessage('invalid response');

        $this->client()->me('tok');
    }

    #[Test]
    public function it_loads_the_extended_profile(): void
    {
        $this->entra()->fake(graph: ['givenName' => 'John', 'businessPhones' => ['123', 5], 'city' => 'Bern', 'employeeId' => 'E1']);

        $profile = $this->client()->profile('tok');

        self::assertSame('John', $profile->givenName);
        self::assertSame(['123'], $profile->businessPhones);
        self::assertSame('Bern', $profile->city);
        self::assertSame('E1', $profile->employeeId);
        self::assertNull($profile->surname);
    }

    #[Test]
    public function it_rejects_an_extended_profile_without_id(): void
    {
        $this->http()->fake(['*' => Factory::response(['displayName' => 'x'])]);

        $this->expectException(GraphException::class);

        $this->client()->profile('tok');
    }

    #[Test]
    public function it_follows_pagination_on_graph_only(): void
    {
        $this->http()->fake([
            'graph.microsoft.com/v1.0/me/memberOf/microsoft.graph.group?$select=id,displayName,description' => Factory::response([
                'value' => [['id' => 'g1', 'displayName' => 'One'], 'junk'],
                '@odata.nextLink' => 'https://graph.microsoft.com/v1.0/me/memberOf/page2',
            ]),
            'graph.microsoft.com/v1.0/me/memberOf/page2' => Factory::response(['value' => [['id' => 'g2', 'description' => 'Two']]]),
        ]);

        $groups = $this->client()->groups('tok');

        self::assertSame(['g1', 'g2'], array_map(fn ($g) => $g->id, $groups));
        self::assertSame('One', $groups[0]->displayName);
        self::assertSame('Two', $groups[1]->description);
    }

    #[Test]
    public function it_refuses_pagination_links_to_other_hosts(): void
    {
        $this->http()->fake([
            'graph.microsoft.com/*' => Factory::response(['value' => [], '@odata.nextLink' => 'https://attacker.example.com/steal']),
        ]);

        try {
            $this->client()->groups('tok');
            self::fail('Followed a foreign link.');
        } catch (GraphException $e) {
            self::assertStringContainsString('outside of Microsoft Graph', $e->getMessage());
        }

        $this->http()->assertNotSent(fn (Request $r): bool => str_contains($r->url(), 'attacker.example.com'));
    }

    #[Test]
    public function it_rejects_a_group_without_id(): void
    {
        $this->http()->fake(['*' => Factory::response(['value' => [['displayName' => 'x']]])]);

        $this->expectExceptionMessage('group id');

        $this->client()->groups('tok');
    }

    #[Test]
    public function it_checks_group_membership(): void
    {
        $this->http()->fake(['*' => Factory::response(['value' => ['g1']])]);

        self::assertTrue($this->client()->isMemberOf('tok', 'g1'));
        self::assertFalse($this->client()->isMemberOf('tok', 'g2'));
        $this->http()->assertSent(fn (Request $r): bool => $r->method() === 'POST' && $r->data() === ['groupIds' => ['g2']]);
    }

    #[Test]
    public function it_returns_the_photo_as_data_uri(): void
    {
        $this->http()->fake(['*' => Factory::response('IMG', 200, ['Content-Type' => 'image/png'])]);

        self::assertSame('data:image/png;base64,'.base64_encode('IMG'), $this->client()->photo('tok'));
    }

    #[Test]
    public function it_returns_null_without_a_photo(): void
    {
        $this->http()->fake(['*' => $this->http()->sequence()->pushStatus(404)->pushResponse(Factory::response('', 200))]);

        self::assertNull($this->client()->photo('tok'));
        self::assertNull($this->client()->photo('tok'));
    }

    #[Test]
    public function it_defaults_the_photo_content_type_and_fails_on_errors(): void
    {
        $this->http()->fake(['*' => $this->http()->sequence()
            ->pushResponse(Factory::response('IMG', 200, ['Content-Type' => '']))
            ->pushStatus(500)]);

        self::assertSame('data:image/jpeg;base64,'.base64_encode('IMG'), $this->client()->photo('tok'));

        $this->expectException(GraphException::class);
        $this->client()->photo('tok');
    }

    #[Test]
    public function it_describes_identity_and_token_failures(): void
    {
        self::assertStringContainsString('identity', GraphException::missingIdentity()->getMessage());
        self::assertStringContainsString('token', GraphException::missingToken()->getMessage());
    }
}
