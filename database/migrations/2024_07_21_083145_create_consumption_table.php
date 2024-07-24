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
        Schema::create('consumption', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gymbro');
            $table->unsignedBigInteger('food');
            $table->unsignedBigInteger('recipe');
            $table->float('quantity', 4, 2);
            $table->date('date');
            $table->float('proteins', 4, 2);
            $table->float('fats', 4, 2);
            $table->float('carbohydrates');
            $table->integer('calories');

            $table->foreign('gymbro')
                ->references('id')->on('gymbros');

            $table->foreign('food')
                ->references('id')->on('food');

            $table->foreign('recipe')
                ->references('id')->on('recipes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consumption');
    }
};
