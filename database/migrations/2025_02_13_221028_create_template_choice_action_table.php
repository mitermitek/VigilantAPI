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
        Schema::create('template_choice_action', function (Blueprint $table) {
            $table->foreignId('template_id')->constrained();
            $table->foreignId('choice_id')->constrained();
            $table->foreignId('action_id')->constrained();
            $table->primary(['template_id', 'choice_id', 'action_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_choice_action');
    }
};
