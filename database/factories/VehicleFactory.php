<?php

namespace Database\Factories;

use App\Models\Vehicle;
use Faker\Provider\Fakecar;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

/**
 * @extends Factory<Vehicle>
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
        $faker = (new \Faker\Factory())::create();
        $faker->addProvider(new Fakecar($faker));

        return [
            'owner' => fake()->firstName(),
            'brand' => $faker->vehicleBrand,
            'model' => $faker->vehicleModel,
            'model_year' => fake()->numberBetween(2000, 2022),
            'version' => '1.0 Hatch',
            'plate' => $faker->vehicleRegistration,
            'user_id' => '1',
        ];
    }
}
