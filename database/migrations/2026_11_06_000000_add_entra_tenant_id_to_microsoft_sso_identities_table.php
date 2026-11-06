<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Upgrade path for databases created by v13: adds the tenant column. New installs get the column
 * from the create migration, so this migration skips itself when the column already exists.
 */
return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasColumn('microsoft_sso_identities', 'entra_tenant_id')) {
            return;
        }

        Schema::table('microsoft_sso_identities', function (Blueprint $table): void {
            $table->string('entra_tenant_id', 36)->nullable()->after('microsoft_id');
            $table->index('entra_tenant_id', 'microsoft_sso_identities_entra_tenant_id_index');
            $table->index(['entra_tenant_id', 'microsoft_id'], 'microsoft_sso_identities_tenant_microsoft_id_index');
        });
    }

    public function down(): void
    {
        if (! Schema::hasColumn('microsoft_sso_identities', 'entra_tenant_id')) {
            return;
        }

        Schema::table('microsoft_sso_identities', function (Blueprint $table): void {
            $table->dropIndex('microsoft_sso_identities_tenant_microsoft_id_index');
            $table->dropIndex('microsoft_sso_identities_entra_tenant_id_index');
            $table->dropColumn('entra_tenant_id');
        });
    }
};
