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
        Schema::create('cars_sections_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('locale')->index();

        // Foreign key to the main model
        $table->unsignedBigInteger('cars_sections_id');
        $table->unique(['cars_sections_id', 'locale']);
        $table->foreign('cars_sections_id')->references('id')->on('cars_sections')->onDelete('cascade');

        // Actual fields you want to translate
        $table->string('type');
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
        Schema::dropIfExists('cars_sections_translations');
    }
};
