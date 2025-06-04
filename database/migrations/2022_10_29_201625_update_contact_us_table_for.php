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
        Schema::table('contact_us', function (Blueprint $table) {
            //
            $table->string("type")->default("contact_us");
            $table->string("no_of_days")->nullable();
            $table->foreignId("destination_id")->nullable()->references("id")->on("destinations")->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact_us', function (Blueprint $table) {
            //

            Schema::disableForeignKeyConstraints();
            $table->dropColumn("type");
            $table->dropColumn("destination_id");
            $table->dropColumn("no_of_days");
            Schema::enableForeignKeyConstraints();
        });
    }
};
