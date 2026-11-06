<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Arch;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use ReflectionClass;
use SplFileInfo;

/**
 * Architecture rules, checked over the source tree. Legacy v13 paths are listed in LEGACY and
 * removed as they are replaced; the list is empty after PR 5.
 */
final class ArchitectureTest extends TestCase
{
    private const array LEGACY = [
        'Services/',
        'Http/Controllers/',
        'Traits/',
        'Models/',
        'Support/UsesHasMicrosoftSSOTraitForStaticAnalysis.php',
        'MicrosoftEntraSSOManager.php',
        'Exceptions/SSOException.php',
    ];

    /**
     * @return array<string, string> relative path => contents
     */
    private static function sources(bool $includeLegacy = false): array
    {
        $root = dirname(__DIR__, 2).'/src/';
        $files = [];

        foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root, RecursiveDirectoryIterator::SKIP_DOTS)) as $file) {
            if (! $file instanceof SplFileInfo) {
                continue;
            }
            $path = $file->getPathname();
            if (! str_ends_with($path, '.php')) {
                continue;
            }
            $relative = substr($path, strlen($root));
            if (! $includeLegacy && self::isLegacy($relative)) {
                continue;
            }
            $files[$relative] = (string) file_get_contents($path);
        }

        return $files;
    }

    private static function isLegacy(string $relative): bool
    {
        foreach (self::LEGACY as $prefix) {
            if (str_starts_with($relative, $prefix)) {
                return true;
            }
        }

        return false;
    }

    #[Test]
    public function every_source_file_declares_strict_types(): void
    {
        foreach (self::sources(true) as $path => $code) {
            self::assertStringContainsString('declare(strict_types=1);', $code, $path);
        }
    }

    #[Test]
    public function every_class_is_final(): void
    {
        foreach (self::sources() as $path => $code) {
            if (preg_match('/^(?:abstract |final |readonly )*(class|trait|interface|enum) /m', $code, $m) !== 1 || $m[1] !== 'class') {
                continue;
            }
            $class = 'CodebarAg\\MicrosoftEntraSSO\\'.str_replace(['/', '.php'], ['\\', ''], $path);
            self::assertTrue(class_exists($class), $class);
            self::assertTrue((new ReflectionClass($class))->isFinal(), $class.' must be final');
        }
    }

    #[Test]
    public function config_is_only_read_by_the_service_provider(): void
    {
        foreach (self::sources() as $path => $code) {
            if ($path === 'EntraSsoServiceProvider.php') {
                continue;
            }
            self::assertSame(0, preg_match('/(?<![\w>:$])config\(/', $code), $path.' must not call config()');
        }
    }

    #[Test]
    public function facades_are_only_used_by_the_facade_itself(): void
    {
        foreach (self::sources() as $path => $code) {
            if (str_starts_with($path, 'Facades/')) {
                continue;
            }
            self::assertStringNotContainsString('Illuminate\\Support\\Facades', $code, $path);
        }
    }

    #[Test]
    public function clients_never_touch_the_session_and_flow_never_touches_http(): void
    {
        foreach (self::sources() as $path => $code) {
            if (str_starts_with($path, 'Clients/')) {
                self::assertStringNotContainsStringIgnoringCase('session', $code, $path);
            }
            if (str_starts_with($path, 'Flow/')) {
                self::assertStringNotContainsString('Illuminate\\Http\\Client', $code, $path);
            }
        }
    }

    #[Test]
    public function there_is_no_debugging_leftover(): void
    {
        foreach (self::sources(true) as $path => $code) {
            self::assertSame(0, preg_match('/\b(dd|dump|var_dump|ray)\(/', $code), $path);
        }
    }
}
