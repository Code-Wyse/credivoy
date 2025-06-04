<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('make');
            $table->string('model');
            $table->year('year');
            $table->string('type');
            $table->string('license_plate')->unique();
            $table->string('color');
            $table->integer('capacity');
            $table->string('fuel_type');
            $table->string('transmission');
            $table->decimal('price_per_day', 8, 2);
            $table->text('features')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->default('Available');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
