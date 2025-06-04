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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('overview');
            $table->unsignedInteger('duration');
            $table->unsignedInteger('group_size');
            $table->unsignedInteger('age');
            $table->string('location');
            $table->unsignedFloat('price');
            $table->unsignedFloat('original_price')->nullable();
            $table->date('tour_date');
            $table->text('inclusion')->nullable();
            $table->boolean('is_featured')->default(0);
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
        Schema::dropIfExists('tours');
    }
};
