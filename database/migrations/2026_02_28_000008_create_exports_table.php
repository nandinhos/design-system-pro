<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('exports', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('design_system_id')
                ->constrained('design_systems')
                ->cascadeOnDelete();
            $table->uuid('version_id')->nullable();
            $table->string('type', 50);
            $table->longText('content');
            $table->timestamps();

            $table->index('design_system_id');
            $table->index('version_id');
            $table->index('type');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('exports');
    }
};
