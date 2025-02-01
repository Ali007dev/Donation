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
        Schema::create('sub_category_branches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sub_category_id')->constraint('sub_categories')->cascadeOnDelete();
            $table->string('name');
            $table->string('description');
            $table->decimal('needed_amount', 10, 2);
            $table->decimal('paid_amount', 10, 2)->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_category_branches');
    }
};
