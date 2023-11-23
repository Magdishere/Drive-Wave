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
        Schema::create('locations_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('locale')->index();

            // Foreign key to the main model
            $table->unsignedBigInteger('locations_id');
            $table->unique(['locations_id', 'locale']);
            $table->foreign('locations_id')->references('id')->on('locations')->onDelete('cascade');


            $table->string('country'); // Add country column
            $table->string('state'); // Add state column
            $table->string('city'); // Add state column
            $table->string('street_address'); // Add street address column
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
        Schema::dropIfExists('locations_translations');
    }
};
