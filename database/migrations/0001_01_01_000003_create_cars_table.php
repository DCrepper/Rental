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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('model');
            $table->string('slug')->unique(); // Slug for brand-model
            $table->string('transmission'); // Pl. "Automata"
            $table->integer('horsepower');
            $table->integer('mileage');
            $table->integer('year');
            $table->string('fuel');
            $table->string('color');
            $table->integer('doors');
            $table->json('images')->nullable(true); // Opcióként leírás
            $table->longText('description')->nullable(true); // Opcióként leírás
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
