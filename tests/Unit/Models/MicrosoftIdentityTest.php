<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Unit\Models;

use CodebarAg\MicrosoftEntraSSO\Tests\TestCase;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\Attributes\Test;

final class MicrosoftIdentityTest extends TestCase
{
    #[Test]
    public function it_encrypts_tokens_at_rest_and_hides_them_when_serialized(): void
    {
        $user = $this->userWithIdentity(identity: ['token' => 'secret-access', 'refresh_token' => 'secret-refresh']);

        $raw = (array) DB::table('microsoft_sso_identities')->first();
        self::assertIsString($raw['token']);
        self::assertStringNotContainsString('secret-access', $raw['token']);
        $identity = $user->microsoftIdentity()->firstOrFail();
        self::assertSame('secret-access', $identity->token);
        self::assertArrayNotHasKey('token', $identity->toArray());
        self::assertArrayNotHasKey('refresh_token', $identity->toArray());
        self::assertSame($user->id, $identity->authenticatable?->getKey());
    }

    #[Test]
    public function it_knows_whether_the_token_is_expired(): void
    {
        $user = $this->userWithIdentity(identity: ['token_expires_at' => now()->addHour()]);
        $identity = $user->microsoftIdentity()->firstOrFail();

        self::assertFalse($identity->isTokenExpired());
        $identity->token_expires_at = now()->subMinute();
        self::assertTrue($identity->isTokenExpired());
        $identity->token_expires_at = null;
        self::assertTrue($identity->isTokenExpired());
    }
}
