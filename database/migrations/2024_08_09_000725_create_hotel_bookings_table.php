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
    Schema::create('hotel_bookings', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('hotel_id');
        $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
        $table->date('from_date');
        $table->date('to_date');
        $table->string('room_type');
        $table->decimal('total_amount', 10, 2);
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
        Schema::dropIfExists('hotel_bookings');
    }
};
