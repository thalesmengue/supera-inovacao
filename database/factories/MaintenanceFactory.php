<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Maintenance>
 */
class MaintenanceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'status_id' => 1,
            'vehicle_id' => rand(1, 25),
            'date' => Carbon::now()->addDays(rand(1, 12)),
            'description' => 'Test Maintenance',
        ];
    }
}
