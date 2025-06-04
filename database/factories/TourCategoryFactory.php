<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\TourCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TourCategory>
 */
class TourCategoryFactory extends Factory
{
    protected $model = TourCategory::class;

    public function definition(): array
    {
        return [
            'category_id' => Category::inRandomOrder()->first()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
