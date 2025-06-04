<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->float('rating');
            $table->float('guest_rating');
            $table->integer('number_of_rooms');
            $table->integer('number_of_floors');
            $table->year('year_of_construction');
            $table->text('description');
            $table->string('type'); // e.g., 4-star
            $table->text('location');
            $table->text('nearby_locations'); // storing multi-line text data
            $table->text('facilities'); //php storing multi-line text data
            $table->text('policy'); // storing multi-line text data
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
