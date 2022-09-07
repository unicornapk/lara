<?php

namespace Database\Factories;

use App\Models\Video;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     *
     * @return array<string, mixed>
     */
    protected $model = Video::class;
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'length' => $this->faker->randomNumber(3),
            'url' => 'http://techslides.com/demos/sample-videos/small.mp4 type=video/mp4',
            'thumbnail' => 'https://loremflickr.com/366/209?random='.rand(1,999),
            'slug' => $this->faker->slug,
            'description' => $this->faker->realText,
        ];
    }
}
