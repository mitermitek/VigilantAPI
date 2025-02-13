<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('template_criterion', function (Blueprint $table) {
            $table->foreignId('template_id')->constrained();
            $table->foreignId('criterion_id')->constrained();
            $table->primary(['template_id', 'criterion_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_criterion');
    }
};
