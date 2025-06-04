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
        Schema::create('ambassadors', function (Blueprint $table) {
            $table->id();
            $table->string("full_name");
            $table->string("email")->nullable()->unique();
            $table->string("phone")->nullable();
            $table->string("university")->nullable();
            $table->string("campus")->nullable();
            $table->timestamp("dob")->nullable();
            $table->string("cnic")->nullable();
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
        Schema::dropIfExists('ambassadors');
    }
};
