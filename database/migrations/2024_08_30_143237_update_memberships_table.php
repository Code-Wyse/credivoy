<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMembershipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('memberships', function (Blueprint $table) {
            // Add the price column
            $table->decimal('price', 8, 2)->after('type')->nullable();

            // Add next_tier and bookings_required columns
            $table->string('next_tier')->nullable()->after('price');
            $table->integer('bookings_required')->nullable()->after('next_tier');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('memberships', function (Blueprint $table) {
            // Drop the columns added in the up() method
            $table->dropColumn('price');
            $table->dropColumn('next_tier');
            $table->dropColumn('bookings_required');
        });
    }
}

