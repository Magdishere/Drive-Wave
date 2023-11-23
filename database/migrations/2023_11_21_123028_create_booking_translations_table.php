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
        Schema::create('booking_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('locale')->index();

            // Foreign key to the main model
            $table->unsignedBigInteger('bookings_id');
            $table->unique(['bookings_id', 'locale']);
            $table->foreign('bookings_id')->references('id')->on('bookings')->onDelete('cascade');

            $table->enum('status', ['pending', 'confirmed', 'canceled'])->default('pending');
            $table->enum('payment_status', ['paid', 'partially', 'unpaid'])->default('unpaid');
            $table->string('pickup_location');
            $table->string('drop_off_location');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('booking_translations');
    }
};
