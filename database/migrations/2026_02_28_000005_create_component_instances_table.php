<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('component_instances', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('design_system_id')
                ->constrained('design_systems')
                ->cascadeOnDelete();
            $table->foreignUuid('component_id')
                ->constrained('components')
                ->cascadeOnDelete();
            $table->string('identifier', 255)->unique();
            $table->jsonb('config_json');
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->index('design_system_id');
            $table->index('component_id');
            $table->index('is_active');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('component_instances');
    }
};
