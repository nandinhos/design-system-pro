<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('themes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('design_system_id')
                ->constrained('design_systems')
                ->cascadeOnDelete();
            $table->string('name', 255);
            $table->jsonb('config_json');
            $table->boolean('is_default')->default(false);
            $table->timestamps();

            $table->index('design_system_id');
            $table->index('is_default');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('themes');
    }
};
