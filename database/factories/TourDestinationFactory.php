<?php

namespace Database\Factories;

use App\Models\Destination;
use App\Models\TourDestination;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TourDestination>
 */
class TourDestinationFactory extends Factory
{
    protected $model = TourDestination::class;

    public function definition(): array
    {
        return [
            'destination_id' => Destination::inRandomOrder()->first()->id,
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime,
        ];
    }
}
