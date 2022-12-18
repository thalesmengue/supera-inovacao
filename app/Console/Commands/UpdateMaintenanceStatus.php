<?php

namespace App\Console\Commands;

use App\Models\Maintenance;
use Carbon\Carbon;
use Illuminate\Console\Command;

class UpdateMaintenanceStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:maintenance-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'See if the maintenance date is today and update the status to Completed';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $maintenances = Maintenance::all();
        foreach ($maintenances as $maintenance) {
            if ($maintenance->date === Carbon::now() || $maintenance->date < Carbon::now()) {
                $maintenance->update(['status_id' => 2]);
            }
        }
    }
}
