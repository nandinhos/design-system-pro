<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('components', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', 255);
            $table->string('slug', 255);
            $table->string('category', 100);
            $table->text('description')->nullable();
            $table->jsonb('base_schema');
            $table->text('preview_template')->nullable();
            $table->string('blade_path', 255)->nullable();
            $table->string('version', 50);
            $table->boolean('is_core')->default(false);
            $table->timestamps();

            $table->unique(['slug', 'category']);
            $table->index('category');
            $table->index('is_core');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('components');
    }
};
