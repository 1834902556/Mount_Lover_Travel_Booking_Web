<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tour>
 */
class TourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'place_id' => $this->faker->randomNumber(2),
            'spot_id' => $this->faker->randomNumber(2),
            'title'   => $this->faker->title(),
            'code'   => $this->faker->randomNumber(5),
            'category'   => $this->faker->text(),
            'person'   => $this->faker->randomNumber(2),
            'duration'   => $this->faker->randomNumber(2),
            'total_cost'   => $this->faker->randomNumber(4),
            'sort_description'   => $this->faker->paragraph(),
            'long_description'   => $this->faker->paragraph(),
            'image'   => $this->faker->imageUrl(),
            'status'   => $this->faker->randomNumber(1),
        ];
    }
}
