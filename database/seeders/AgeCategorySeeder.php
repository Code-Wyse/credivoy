<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AgeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('age_categories')->truncate();
        DB::table('age_categories')->insert([
            ['name' => 'Infant','age_from' => 0,'age_to' => 5,'created_at' => now(),'updated_at' => now()],
            ['name' => 'Children','age_from' => 6,'age_to' => 12,'created_at' => now(),'updated_at' => now()],
            ['name' => 'Adult','age_from' => 13,'age_to' => 100,'created_at' => now(),'updated_at' => now()],
        ]);
        Schema::enableForeignKeyConstraints();
    }
}
