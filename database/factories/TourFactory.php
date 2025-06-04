<?php

namespace Database\Factories;

use App\Models\Tour;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tour>
 */
class TourFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tour::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = $this->faker;
        return [
            "title" => $faker->sentence(3),
            "overview" => $faker->paragraph,
            "duration" => $faker->numberBetween(1, 20),
            "group_size" => $faker->numberBetween(5, 100),
            "age" => $faker->numberBetween(18, 65),
            "location" => $faker->city . ', ' . $faker->state . ', ' . $faker->country,
            "price" => $faker->numberBetween(10000, 50000),
            "original_price" => $faker->numberBetween(20000, 60000),
            "inclusion" => "<ul><li>" . implode("</li><li>", $faker->words(5)) . "</li></ul>",
            "is_featured" => $faker->boolean,
            "created_at" => $faker->dateTime,
            "updated_at" => $faker->dateTime,
            "slug" => $faker->slug,
        ];
    }
}
