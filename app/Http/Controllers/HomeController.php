<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $startDate = Carbon::now();
        $endDate = Carbon::now()->addDays(7);
        $maintenances = Maintenance::query()
            ->where('user_id', auth()->id())
            ->whereBetween('date', [$startDate, $endDate])
            ->get();

        return view('index', ['maintenances' => $maintenances]);
    }

    public function logout(): RedirectResponse
    {
        auth()->logout();

        return redirect()->to('/');
    }
}
