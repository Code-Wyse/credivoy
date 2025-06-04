<?php

namespace Database\Factories;

use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    protected $model = Media::class;

    public function definition(): array
    {
        $naturalSceneries = [
            'nature', 'waterfall', 'mountain', 'forest', 'lake', 'landscape', 'sunset', 'beach', 'ocean', 'river'
        ];
        $response = Http::head('https://picsum.photos/1080/768');


        return [
            'media_of_type' => 'App\\Models\\Tour',
            'mime' => 'image/jpg',
            'media_file' => 'https://picsum.photos/1080/768',
            'thumbnail' => 'https://picsum.photos/600',
            'alt_text' => $this->faker->sentence(3),
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime,
        ];
    }
}
