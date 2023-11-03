<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand'); // Foreign key to reference the brand
            $table->unsignedBigInteger('cars_section'); // Foreign key to reference the car section
            $table->foreign('brand')->references('id')->on('brands');
            $table->foreign('cars_section')->references('id')->on('cars_sections');
            $table->integer('year');
            $table->string('license_plate')->unique();
            $table->decimal('price_per_day', 10, 2);
            $table->integer('mileage');
            $table->enum('transmission', ['Automatic', 'Manual'])->default('Automatic');
            $table->integer('seating_capacity');
            $table->string('engine_capacity');
            $table->enum('availability', ['available', 'reserved', 'rented'])->default('available');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
