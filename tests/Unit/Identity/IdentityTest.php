<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Unit\Identity;

use Carbon\CarbonImmutable;
use CodebarAg\MicrosoftEntraSSO\Identity\EntraIdentity;
use CodebarAg\MicrosoftEntraSSO\Identity\Profile;
use CodebarAg\MicrosoftEntraSSO\Identity\SignIn;
use CodebarAg\MicrosoftEntraSSO\Identity\Tokens;
use InvalidArgumentException;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class IdentityTest extends TestCase
{
    private const string TID = '11111111-1111-4111-8111-111111111111';

    private const string OID = 'AAAAAAAA-AAAA-4AAA-8AAA-AAAAAAAAAAAA';

    #[Test]
    public function the_identity_is_lowercased_and_compared_by_value(): void
    {
        $a = new EntraIdentity(strtoupper(self::TID), self::OID);
        $b = new EntraIdentity(self::TID, strtolower(self::OID));

        self::assertSame(self::TID, $a->tenantId);
        self::assertSame(strtolower(self::OID), $a->objectId);
        self::assertTrue($a->equals($b));
        self::assertFalse($a->equals(new EntraIdentity('22222222-2222-4222-8222-222222222222', self::OID)));
        self::assertFalse($a->isPersonalAccount());
        self::assertTrue((new EntraIdentity(EntraIdentity::PERSONAL_ACCOUNT_TENANT, self::OID))->isPersonalAccount());
    }

    #[Test]
    public function the_identity_rejects_values_that_are_not_guids(): void
    {
        $this->expectException(InvalidArgumentException::class);

        new EntraIdentity(self::TID, 'ms-user-123');
    }

    #[Test]
    public function tokens_know_when_they_expired(): void
    {
        self::assertTrue((new Tokens('a', null, null))->isExpired());
        self::assertTrue((new Tokens('a', null, CarbonImmutable::now()->subMinute()))->isExpired());
        self::assertFalse((new Tokens('a', null, CarbonImmutable::now()->addMinute()))->isExpired());
    }

    #[Test]
    public function tokens_keep_the_previous_refresh_token_when_none_was_issued(): void
    {
        $tokens = new Tokens('a', null, null, ['openid']);

        self::assertSame('old', $tokens->keepingRefreshToken('old')->refreshToken);
        self::assertSame('new', (new Tokens('a', 'new', null))->keepingRefreshToken('old')->refreshToken);
        self::assertSame(['openid'], $tokens->keepingRefreshToken('old')->scopes);
    }

    #[Test]
    public function a_sign_in_bundles_identity_profile_and_tokens(): void
    {
        $signIn = new SignIn(new EntraIdentity(self::TID, self::OID), new Profile('g', 'Jo', 'jo@example.com'), new Tokens('t', null, null));

        self::assertSame('jo@example.com', $signIn->profile->email);
        self::assertNull($signIn->profile->jobTitle);
        self::assertSame('t', $signIn->tokens->accessToken);
    }
}
