<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->words(3, true),
            "singer" => $this->faker->name(),
            "length" => rand(60,500),
        ];
    }
}
