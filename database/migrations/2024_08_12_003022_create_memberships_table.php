<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipsTable extends Migration
{
    public function up()
    {
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->string('type')->unique(); // Silver, Gold, Platinum, Diamond
            $table->integer('trip_coins_percentage'); // Percentage of trip coins earned
            $table->integer('hotel_discount'); // Percentage discount on hotels
            $table->integer('trip_discount'); // Percentage discount on trips
            $table->boolean('free_vip_lounge')->default(false); // Free VIP lounge access
            $table->integer('no_refund_handling_fees')->default(0); // Number of times no refund handling fees
            $table->boolean('priority_assistance')->default(false); // Priority assistance
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('memberships');
    }
}
