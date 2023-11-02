<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarModelsTable extends Migration
{
    public function up()
    {
        Schema::create('car_models', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('brand_id'); // Foreign key to reference the brand
            $table->unsignedBigInteger('cars_sections_id'); // Foreign key to reference the car section

            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('cars_sections_id')->references('id')->on('cars_sections');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('car_models');
    }
}
