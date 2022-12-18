<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaintenanceStoreRequest;
use App\Http\Requests\MaintenanceUpdateRequest;
use App\Models\Maintenance;
use App\Models\Status;
use App\Models\Vehicle;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MaintenanceController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Maintenance::class, 'maintenance');
    }

    public function index(): View
    {
        $maintenances = Maintenance::query()
            ->where('user_id', auth()->id())
            ->orderBy('date')
            ->get();

        return view('maintenances.index', ['maintenances' => $maintenances]);
    }

    public function create(): View
    {
        return view('maintenances.create', [
            'vehicles' => Vehicle::query()->where('user_id', auth()->id())->get(),
            'statuses' => Status::all()
        ]);
    }

    public function store(MaintenanceStoreRequest $request): RedirectResponse
    {
        Maintenance::query()->create($request->merge([
            'user_id' => auth()->id(),
            'status_id' => $request->statuses
        ])->all());

        return redirect()->to('/maintenances');
    }

    public function show(Maintenance $maintenance): View
    {
        return view('maintenances.show', ['maintenance' => $maintenance]);
    }

    public function edit(Maintenance $maintenance): View
    {
        return view('maintenances.edit', [
            'maintenance' => $maintenance,
            'vehicles' => Vehicle::query()->where('user_id', auth()->id())->get(),
            'statuses' => Status::all()
        ]);
    }

    public function update(MaintenanceUpdateRequest $request, Maintenance $maintenance): RedirectResponse
    {
        $maintenance->update($request->all());

        return redirect()->to('/');
    }

    public function destroy(Maintenance $maintenance): RedirectResponse
    {
        $maintenance->delete();

        return redirect()->to('/maintenances');
    }
}
