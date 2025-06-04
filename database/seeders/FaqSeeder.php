<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faqs = [
            ['question' => 'Does the trip cost include the entry tickets?','answer' => 'No, Entry tickets are not included in the cost.','created_at' => now(),'updated_at' => now()],
            ['question' => 'Does the trip cost include the activities expense?','answer' => 'No, activities expense are not included in the cost.','created_at' => now(),'updated_at' => now()],
            ['question' => 'Does the trip cost include the local jeeps expense?','answer' => 'Yes, Jeep rides are not included in the cost.','created_at' => now(),'updated_at' => now()]
        ];
        DB::table('faqs')->insert($faqs);
    }
}
