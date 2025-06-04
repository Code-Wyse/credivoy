<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hotel_id');
            $table->string('type');
            $table->decimal('price_per_night', 8, 2);
            $table->timestamps();
    
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('room_types');
    }
    
}
