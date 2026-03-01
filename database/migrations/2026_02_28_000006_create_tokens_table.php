<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tokens', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('design_system_id')
                ->constrained('design_systems')
                ->cascadeOnDelete();
            $table->string('category', 100);
            $table->string('path', 255);
            $table->text('value');
            $table->string('type', 50);
            $table->boolean('is_global')->default(false);
            $table->timestamps();

            $table->index('design_system_id');
            $table->index('category');
            $table->index('path');
            $table->index('type');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tokens');
    }
};
