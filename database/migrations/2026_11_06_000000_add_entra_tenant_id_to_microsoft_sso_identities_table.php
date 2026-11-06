<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('microsoft_sso_identities', function (Blueprint $table) {
            $table->string('entra_tenant_id', 36)->nullable()->after('microsoft_id');
            $table->index('entra_tenant_id', 'microsoft_sso_identities_entra_tenant_id_index');
            $table->index(['entra_tenant_id', 'microsoft_id'], 'microsoft_sso_identities_tenant_microsoft_id_index');
        });
    }

    public function down(): void
    {
        Schema::table('microsoft_sso_identities', function (Blueprint $table) {
            $table->dropIndex('microsoft_sso_identities_tenant_microsoft_id_index');
            $table->dropIndex('microsoft_sso_identities_entra_tenant_id_index');
            $table->dropColumn('entra_tenant_id');
        });
    }
};
