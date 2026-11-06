<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Unit\Exceptions;

use CodebarAg\MicrosoftEntraSSO\Enums\DenialReason;
use CodebarAg\MicrosoftEntraSSO\Exceptions\ConfigurationException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\InvalidIdTokenException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\SignInDeniedException;
use CodebarAg\MicrosoftEntraSSO\Exceptions\SignInFailure;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class ExceptionsTest extends TestCase
{
    #[Test]
    public function every_denial_reason_has_a_translation_key_in_the_language_files(): void
    {
        $en = json_decode((string) file_get_contents(__DIR__.'/../../../lang/en.json'), true);
        self::assertIsArray($en);

        foreach (DenialReason::cases() as $reason) {
            $exception = new SignInDeniedException($reason);

            self::assertInstanceOf(SignInFailure::class, $exception);
            self::assertSame($reason, $exception->reason);
            self::assertArrayHasKey($exception->translationKey(), $en);
        }
    }

    #[Test]
    public function configuration_errors_name_the_key(): void
    {
        self::assertStringContainsString('[a.b]', ConfigurationException::missing('a.b')->getMessage());
        self::assertSame('microsoft-entra-sso.error.invalid_id_token', InvalidIdTokenException::because('x')->translationKey());
    }
}
