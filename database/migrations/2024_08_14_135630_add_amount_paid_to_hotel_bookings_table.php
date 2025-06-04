<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAmountPaidToHotelBookingsTable extends Migration
{
    public function up()
    {
        Schema::table('hotel_bookings', function (Blueprint $table) {
            $table->decimal('amount_paid', 10, 2)->default(0);
        });
    }

    public function down()
    {
        Schema::table('hotel_bookings', function (Blueprint $table) {
            $table->dropColumn('amount_paid');
        });
    }
}
