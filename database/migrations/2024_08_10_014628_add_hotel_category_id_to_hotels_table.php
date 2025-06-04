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
        Schema::table('hotels', function (Blueprint $table) {
            $table->foreignId('hotel_category_id')->nullable()->after('destination_id')->references('id')->on('hotel_categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->dropForeign(['hotel_category_id']);
            $table->dropColumn('hotel_category_id');
        });
    }

};
