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
        Schema::create('about_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('locale')->index();

            $table->unsignedBigInteger('abouts_id');
            $table->unique(['abouts_id', 'locale']);
            $table->foreign('abouts_id')->references('id')->on('abouts')->onDelete('cascade');

            $table->string('title');
            $table->text('paragraph');

            $table->string('info');

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
        Schema::dropIfExists('about_translations');
    }
};
