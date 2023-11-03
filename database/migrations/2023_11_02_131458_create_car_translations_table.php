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
        Schema::create('car_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('locale')->index();

            $table->unsignedBigInteger('car_id');
            $table->unique(['car_id', 'locale']);
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');

            $table->string('name');
            $table->string('color');
            $table->enum('fuel_type', ['Gasoline', 'Diesel', 'Electric', 'Hybrid'])->default('Gasoline');
            $table->text('description')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_translations');
    }
};
