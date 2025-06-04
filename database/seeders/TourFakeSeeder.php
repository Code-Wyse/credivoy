<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Destination;
use App\Models\Itinerary;
use App\Models\Media;
use App\Models\Tour;
use App\Models\TourCategory;
use App\Models\TourDestination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourFakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::factory()->count(50)->create();
        Destination::factory()->count(20)->create();
        //
        Tour::factory()
            ->count(10000)
            ->create()
            ->each(function ($tour) {
                // Create media for each tour
                Media::factory()->create([
                    'media_of_type' => 'App\\Models\\Tour',
                    'media_of_id' => $tour->id,
                    'alt_text' => $tour->title,
                ]);

                // Create itineraries for each tour
                Itinerary::factory()->count(2)->create([
                    'tour_id' => $tour->id,
                ]);

                // Create tour category for each tour
                TourCategory::factory()->create([
                    'tour_id' => $tour->id,
                ]);

                // Create tour destination for each tour
                TourDestination::factory()->create([
                    'tour_id' => $tour->id,
                ]);

                // Create departure date for each tour
                $tour->departures()->create([
                    'departure_date' => now(),
                ]);
            });

    }
}
