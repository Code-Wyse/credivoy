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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreignId('tour_id')->references('id')->on('tours')->cascadeOnDelete();
            $table->foreignId('tour_departure_id')->references('id')->on('tour_departures')->cascadeOnDelete();
            $table->string('payment_type')->nullable();
            $table->string('payment_status')->default('pending');
            $table->unsignedDouble('total_amount')->nullable();
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
        Schema::dropIfExists('bookings');
    }
};
