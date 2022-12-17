<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\VehicleController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->get('/', [HomeController::class, 'index'])->name('index');
Route::middleware('auth')->get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware('auth')->resource('vehicles', VehicleController::class);
Route::middleware('auth')->resource('maintenances', MaintenanceController::class);

require __DIR__.'/auth.php';
