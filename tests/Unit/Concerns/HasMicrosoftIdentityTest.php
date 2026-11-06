<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Unit\Concerns;

use CodebarAg\MicrosoftEntraSSO\Models\MicrosoftIdentity;
use CodebarAg\MicrosoftEntraSSO\Tests\TestCase;
use CodebarAg\MicrosoftEntraSSO\Tests\TestUser;
use PHPUnit\Framework\Attributes\Test;

final class HasMicrosoftIdentityTest extends TestCase
{
    #[Test]
    public function a_user_without_identity_is_not_linked_and_has_an_expired_token(): void
    {
        $user = TestUser::create(['name' => 'N', 'email' => 'n@example.com', 'password' => 'x']);

        self::assertFalse($user->isMicrosoftLinked());
        self::assertTrue($user->isMicrosoftTokenExpired());
    }

    #[Test]
    public function a_linked_user_reports_the_token_state_and_can_be_unlinked(): void
    {
        $user = $this->userWithIdentity(identity: ['token_expires_at' => now()->addHour()]);

        self::assertTrue($user->isMicrosoftLinked());
        self::assertFalse($user->isMicrosoftTokenExpired());

        $user->unlinkMicrosoft();

        self::assertFalse($user->isMicrosoftLinked());
        self::assertSame(0, MicrosoftIdentity::count());
        self::assertTrue($user->isMicrosoftTokenExpired());
    }
}
