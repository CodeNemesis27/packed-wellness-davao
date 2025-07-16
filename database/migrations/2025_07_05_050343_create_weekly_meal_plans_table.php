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
        Schema::create('weekly_meal_plans', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->enum('category', ['Breakfast', 'Lunch', 'Dinner', 'Snack']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weekly_meal_plans');
    }
};
