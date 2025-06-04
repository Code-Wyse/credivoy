<?php

namespace Database\Seeders;

use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $destinations = [
            ['name' => 'Hunza Valley','description' => 'abcd','picture' => 'assets/images/destinations/Hunza2.jpg'],
            ['name' => 'Skardu Valley','description' => 'abcd','picture' => 'assets/images/destinations/Skardu 3.jpg'],
            ['name' => 'Swat Valley','description' => 'abcd','picture' => 'assets/images/destinations/Sawat.jpg'],
            ['name' => 'Kumrat Valley','description' => 'abcd','picture' => 'assets/images/destinations/Kumrat-Valley.jpg'],
            ['name' => 'Neelum Valley','description' => 'abcd','picture' => 'assets/images/destinations/Neelum Valley 2.jpg'],
            ['name' => 'Fairy Meadows','description' => 'abcd','picture' => 'assets/images/destinations/Fairy-Meadows.jpg'],
            ['name' => 'Kalash Valley','description' => 'abcd','picture' => 'assets/images/destinations/Kalash Valley.jpg'],
        ];
        foreach($destinations as $destination){
            $newDestination = Destination::create(['name' => $destination['name'],'description' => $destination['description']]);
            $newDestination->picture()->create([
                'media_file' => $destination['picture'],
                'mime' => 'image/jpg'
            ]);
        }
    }
}
