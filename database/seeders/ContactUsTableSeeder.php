<?php

namespace Database\Seeders;

use App\Models\ContactUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactUsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ContactUs::firstOrCreate([
            'name' => 'Akash Ahmed',
            'email' => "akashrajput9@hotmail.com",
            'phone' => '823975328709',
            'message' => 'test message',
            'ip_address' => "127.0.0.1",
            'user_agent' => "chrome/mozala",
        ]);
    }
}
