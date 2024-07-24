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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('food');
            $table->string('name');
            $table->float('proteins', 3, 3);
            $table->float('fats', 3, 3);
            $table->float('carbohydrates', 3, 3);
            $table->integer('calories');
            
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
        Schema::dropIfExists('recipes');
    }
};
