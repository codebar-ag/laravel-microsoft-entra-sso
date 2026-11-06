<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Unit\Support;

use CodebarAg\MicrosoftEntraSSO\Config\Tenant;
use CodebarAg\MicrosoftEntraSSO\Support\Guid;
use CodebarAg\MicrosoftEntraSSO\Support\Payload;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class PayloadTest extends TestCase
{
    #[Test]
    public function it_narrows_json_shapes(): void
    {
        self::assertSame(['a' => 1], Payload::assoc(['a' => 1, 0 => 'x']));
        self::assertSame([], Payload::assoc('x'));
        self::assertSame([['a' => 1]], Payload::objects([['a' => 1], 'x']));
        self::assertSame([], Payload::objects(null));
        self::assertSame(['a', 'b'], Payload::strings(['a', 1, '', 'b']));
        self::assertSame([], Payload::strings('a'));
        self::assertSame('a', Payload::string('a'));
        self::assertNull(Payload::string(''));
        self::assertNull(Payload::string(1));
    }

    #[Test]
    public function it_validates_and_normalizes_guids(): void
    {
        self::assertTrue(Guid::isValid('11111111-1111-4111-8111-111111111111'));
        self::assertFalse(Guid::isValid('nope'));
        self::assertSame('abc', Guid::normalize('ABC'));
    }

    #[Test]
    public function it_parses_tenants(): void
    {
        self::assertTrue(Tenant::tryFrom('11111111-1111-4111-8111-111111111111')?->isSingleDirectory());
        self::assertSame('common', Tenant::tryFrom('COMMON')?->value);
        self::assertNull(Tenant::tryFrom('contoso.com'));
    }
}
