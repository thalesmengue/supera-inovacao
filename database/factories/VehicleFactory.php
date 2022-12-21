<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vehicle>
 */
class VehicleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'owner' => fake()->firstName(),
            'brand' => fake()->company(),
            'model' => fake()->word,
            'model_year' => fake()->numberBetween(2000, 2022),
            'version' => fake()->word,
            'plate' => fake()->randomNumber(7),
            'user_id' => '1',
        ];
    }
}
