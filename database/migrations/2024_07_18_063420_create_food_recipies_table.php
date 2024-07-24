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
        Schema::create('food_recipes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('recipe');
            $table->unsignedBigInteger('food');
            $table->float('quantity', 4, 3);

            $table->foreign('recipe')
                ->references('id')->on('recipes');

            $table->foreign('food')
                ->references('id')->on('food');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_recipies');
    }
};
