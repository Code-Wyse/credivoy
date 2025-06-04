<?php

namespace Database\Seeders;

use App\Models\Tour;
use App\Models\TourCategory;
use App\Models\TourDeparture;
use App\Models\TourDestination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $itinaries = [
            ['day' => 1,'title' => 'abcd','description' => 'efgh','created_at' => now(),'updated_at' => now()],
            ['day' => 2,'title' => 'abcd','description' => 'efgh','created_at' => now(),'updated_at' => now()],
        ];
        $tours = [
            ['category_id' => 2,'destination_id' => 1,'title' => 'Signature Hunza Plans','slug' => Str::slug('Signature Hunza Plans'),'overview' => 'abcd','duration' => 11,'group_size' => 60,'age' => 10,'location' => 'Hunza, GB, Pakistan','price' => 45000,'original_price' => 47000,'tour_date' => date('Y-m-d'),'inclusion' => '<ul><li>Accommodation</li><li>Meals</li></ul>','is_featured' => 1,'created_at' => now(),'updated_at' => now(),'media' => 'assets/images/tours/hunza/hunza1.jpg','media_thumb' => 'assets/images/tours/thumb/hunza/hunza1.jpg'],
            ['category_id' => 2,'destination_id' => 2,'title' => 'Signature Skardu Plans','slug' => Str::slug('Signature Skardu Plans'),'overview' => 'abcd','duration' => 11,'group_size' => 60,'age' => 10,'location' => 'Skardu, GB, Pakistan','price' => 45000,'original_price' => 47000,'tour_date' => date('Y-m-d'),'inclusion' => '<ul><li>Accommodation</li><li>Meals</li></ul>','is_featured' => 0,'created_at' => now(),'updated_at' => now(),'media' => 'assets/images/tours/skardu/skardu1.jpg','media_thumb' => 'assets/images/tours/thumb/skardu/skardu1.jpg'],
        ];
        foreach ($tours as $tour){
            $createdTour = Tour::create(Arr::except($tour,['media','category_id','destination_id','tour_date']));
            $createdTour->media()->create([
                'mime' => 'image/jpg',
                'media_file' => $tour['media'],
                'alt_text' => $createdTour->title,
                'thumbnail' => $tour['media_thumb'],
            ]);
            foreach ($itinaries as $itinary) {
                $createdTour->itineraries()->create($itinary);
            }
            TourCategory::create([
                'tour_id' => $createdTour->id,
                'category_id' => $tour['category_id']
            ]);
            TourDestination::create([
                'tour_id' => $createdTour->id,
                'destination_id' => $tour['destination_id']
            ]);
            $createdTour->departures()->create([
                'departure_date' => date('Y-m-d')
            ]);
        }
    }
}
