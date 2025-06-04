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
        if (Schema::hasColumn('tours', 'destination_id'))
        {
            Schema::table('tours', function (Blueprint $table)
            {
                $table->dropForeign("tours_destination_id_foreign");
                $table->dropColumn('destination_id');
            });
        }
        if (Schema::hasColumn('tours', 'category_id'))
        {
            Schema::table('tours', function (Blueprint $table)
            {
                $table->dropForeign("tours_category_id_foreign");
                $table->dropColumn('category_id');
            });
        }

        if (!Schema::hasColumn('tours', 'slug')){
            Schema::table('tours', function (Blueprint $table) {
                //
                $table->string("slug")->unique();
            });

        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('tours', 'slug'))
        {
            Schema::table('tours', function (Blueprint $table)
            {
                $table->dropColumn('slug');
            });
        }
    }
};
