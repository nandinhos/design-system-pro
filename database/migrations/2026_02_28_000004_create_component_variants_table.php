<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('component_variants', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('component_id')
                ->constrained('components')
                ->cascadeOnDelete();
            $table->string('name', 255);
            $table->jsonb('schema');
            $table->timestamps();

            $table->index('component_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('component_variants');
    }
};
