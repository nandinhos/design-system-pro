<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('design_system_versions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('design_system_id')
                ->constrained('design_systems')
                ->cascadeOnDelete();
            $table->string('version', 50);
            $table->text('changelog')->nullable();
            $table->jsonb('snapshot');
            $table->boolean('is_published')->default(false);
            $table->timestamps();

            $table->index('design_system_id');
            $table->index('version');
            $table->index('is_published');
        });

        Schema::table('design_systems', function (Blueprint $table) {
            $table->foreign('current_version_id')
                ->references('id')
                ->on('design_system_versions')
                ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('design_systems', function (Blueprint $table) {
            $table->dropForeign(['current_version_id']);
        });

        Schema::dropIfExists('design_system_versions');
    }
};
