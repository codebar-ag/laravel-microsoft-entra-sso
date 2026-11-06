<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('microsoft_sso_identities', function (Blueprint $table): void {
            $table->id();
            $table->morphs('authenticatable');
            $table->string('microsoft_id')->unique();
            $table->string('entra_tenant_id', 36)->nullable();
            $table->text('token')->nullable();
            $table->text('refresh_token')->nullable();
            $table->timestamp('token_expires_at')->nullable();
            $table->timestamp('linked_at')->nullable();
            $table->timestamps();

            $table->index('entra_tenant_id', 'microsoft_sso_identities_entra_tenant_id_index');
            $table->index(['entra_tenant_id', 'microsoft_id'], 'microsoft_sso_identities_tenant_microsoft_id_index');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('microsoft_sso_identities');
    }
};
