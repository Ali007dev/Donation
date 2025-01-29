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
        Schema::create('user_donations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constraint('users')->cascadeOnDelete();
            $table->decimal('amount', 10, 2);
            $table->morphs('donatable');
            $table->enum('type',['monthly','weekly','once']);
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_donations');
    }
};
