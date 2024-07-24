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
        Schema::create('food', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category');
            $table->unsignedBigInteger('type-portion');
            $table->string('name');
            $table->float('proteins', 3, 3);
            $table->float('fats', 3, 3);
            $table->float('carbohydrates', 3, 3);
            $table->integer('calories');

            $table->foreign('category')
                ->references('id')->on('categories');
            
            $table->foreign('type-portion')
                ->references('id')->on('portion_types');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food');
    }
};
