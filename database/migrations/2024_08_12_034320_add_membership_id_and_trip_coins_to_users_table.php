<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('membership_id')->default(1); // Add column
            $table->integer('trip_coins')->default(0); // Add column

       
        });
    }

    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // $table->dropForeign(['membership_id']);
            $table->dropColumn('membership_id');
            $table->dropColumn('trip_coins');
        });
    }
};
