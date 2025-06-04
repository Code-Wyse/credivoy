<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Hiking','description' => 'Hiking abcd','created_at' => now(),'updated_at' => now()],
            ['name' => 'City Tours','description' => 'City Tours abcd','created_at' => now(),'updated_at' => now()],
            ['name' => 'Jungle Safari','description' => 'Jungle Safari abcd','created_at' => now(),'updated_at' => now()],
            ['name' => 'Beach Activity','description' => 'Beach Activity abcd','created_at' => now(),'updated_at' => now()],
        ]);
    }
}
