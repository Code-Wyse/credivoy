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
        Schema::create('tour_destinations', function (Blueprint $table) {
            $table->id();
            $table->foreignId("tour_id")->references("id")->on("tours")->cascadeOnDelete();
            $table->foreignId("destination_id")->references("id")->on("destinations")->cascadeOnDelete();
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
        Schema::dropIfExists('tour_destinations');
    }
};
