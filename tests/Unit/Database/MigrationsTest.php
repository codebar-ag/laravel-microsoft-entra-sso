<?php

declare(strict_types=1);

namespace CodebarAg\MicrosoftEntraSSO\Tests\Unit\Database;

use CodebarAg\MicrosoftEntraSSO\Flow\CompleteSignIn;
use CodebarAg\MicrosoftEntraSSO\Tests\Support\FakeEntra;
use CodebarAg\MicrosoftEntraSSO\Tests\TestCase;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use PHPUnit\Framework\Attributes\Test;

final class MigrationsTest extends TestCase
{
    private const string UPGRADE = __DIR__.'/../../../database/migrations/2026_11_06_000000_add_entra_tenant_id_to_microsoft_sso_identities_table.php';

    /**
     * Recreates the table exactly as v13 created it.
     */
    private function v13Database(): void
    {
        Schema::dropIfExists('microsoft_sso_identities');
        DB::table('migrations')->delete();
        Schema::create('microsoft_sso_identities', function (Blueprint $table): void {
            $table->id();
            $table->morphs('authenticatable');
            $table->string('microsoft_id')->unique();
            $table->text('token')->nullable();
            $table->text('refresh_token')->nullable();
            $table->timestamp('token_expires_at')->nullable();
            $table->timestamp('linked_at')->nullable();
            $table->timestamps();
        });
    }

    private function upgrade(): void
    {
        DB::table('migrations')->delete();
        self::assertSame(0, $this->command('migrate', ['--path' => self::UPGRADE, '--realpath' => true]));
    }

    #[Test]
    public function a_fresh_install_gets_the_tenant_column_and_indexes_from_the_create_migration(): void
    {
        self::assertTrue(Schema::hasColumn('microsoft_sso_identities', 'entra_tenant_id'));
        self::assertTrue(Schema::hasIndex('microsoft_sso_identities', 'microsoft_sso_identities_tenant_microsoft_id_index'));
        self::assertTrue(Schema::hasIndex('microsoft_sso_identities', 'microsoft_sso_identities_entra_tenant_id_index'));
    }

    #[Test]
    public function the_upgrade_migration_skips_itself_on_a_fresh_install(): void
    {
        $this->upgrade();

        self::assertTrue(Schema::hasColumn('microsoft_sso_identities', 'entra_tenant_id'));
    }

    #[Test]
    public function a_v13_database_is_upgraded_in_place_and_keeps_its_rows(): void
    {
        $this->v13Database();
        DB::table('microsoft_sso_identities')->insert([
            'authenticatable_type' => 'user', 'authenticatable_id' => 1, 'microsoft_id' => FakeEntra::OID,
        ]);

        $this->upgrade();

        self::assertTrue(Schema::hasColumn('microsoft_sso_identities', 'entra_tenant_id'));
        self::assertTrue(Schema::hasIndex('microsoft_sso_identities', 'microsoft_sso_identities_entra_tenant_id_index'));
        $row = DB::table('microsoft_sso_identities')->first();
        self::assertSame(FakeEntra::OID, $row?->microsoft_id);
        self::assertNull($row->entra_tenant_id);
    }

    #[Test]
    public function the_upgrade_can_run_twice_and_be_rolled_back(): void
    {
        $this->v13Database();
        $this->upgrade();
        $this->upgrade();

        self::assertSame(0, $this->command('migrate:rollback', ['--path' => self::UPGRADE, '--realpath' => true]));

        self::assertFalse(Schema::hasColumn('microsoft_sso_identities', 'entra_tenant_id'));

        DB::table('migrations')->delete();
        self::assertSame(0, $this->command('migrate:rollback', ['--path' => self::UPGRADE, '--realpath' => true]));
    }

    #[Test]
    public function a_v13_database_signs_in_after_the_upgrade(): void
    {
        $this->v13Database();
        $this->upgrade();
        $user = $this->userWithIdentity(tenant: null);

        [$session, $params] = $this->begin();
        $this->container()->make(CompleteSignIn::class)->handle($session, 'web', $params);

        self::assertSame(FakeEntra::TENANT, $user->microsoftIdentity()->firstOrFail()->entra_tenant_id);
    }
}
