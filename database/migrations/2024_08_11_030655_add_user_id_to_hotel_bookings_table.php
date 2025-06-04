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
    Schema::table('hotel_bookings', function (Blueprint $table) {
        $table->unsignedBigInteger('user_id')->nullable()->after('total_amount');
        $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
    });
}

public function down()
{
    Schema::table('hotel_bookings', function (Blueprint $table) {
        $table->dropForeign(['user_id']);
        $table->dropColumn('user_id');
    });
}

};
