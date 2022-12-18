<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vehicle::factory([
            'owner' => fake()->name,
            'brand' => fake()->name,
            'model' => fake()->name,
            'version' => fake()->name,
            'plate' => fake()->name,
            'user_id' => '1',
        ])->create();
    }
}
