<?php

namespace Database\Seeders;

use App\Models\Maintenance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class MaintenanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Maintenance::factory()->create([
            'user_id' => 1,
            'status_id' => 1,
            'vehicle_id' => 1,
            'date' => Carbon::now()->addDays(3),
            'description' => 'Test Maintenance',
        ]);

        Maintenance::factory()->create([
            'user_id' => 1,
            'status_id' => 1,
            'vehicle_id' => 1,
            'date' => Carbon::now()->addDays(3),
            'description' => 'Test Maintenance',
        ]);

        Maintenance::factory()->create([
            'user_id' => 1,
            'status_id' => 1,
            'vehicle_id' => 1,
            'date' => Carbon::now()->addDays(3),
            'description' => 'Test Maintenance',
        ]);
    }
}
