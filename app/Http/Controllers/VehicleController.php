<?php

namespace App\Http\Controllers;

use App\Http\Requests\VehicleStoreRequest;
use App\Http\Requests\VehicleUpdateRequest;
use App\Models\Vehicle;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VehicleController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Vehicle::class, 'vehicle');
    }

    public function index(): View
    {
        $vehicles = Vehicle::query()->where('user_id', auth()->id())->get();

        return view('vehicles.index', ['vehicles' => $vehicles]);
    }

    public function create(): View
    {
        return view('vehicles.create');
    }

    public function show(Vehicle $vehicle): View
    {
        return view('vehicles.show', ['vehicle' => $vehicle]);
    }

    public function store(VehicleStoreRequest $request): RedirectResponse
    {
        Vehicle::query()->create($request->merge([
            'user_id' => auth()->id()
        ])->all());

        return redirect()->to('/vehicles');
    }

    public function edit(Vehicle $vehicle): View
    {
        return view('vehicles.edit', ['vehicle' => $vehicle]);
    }

    public function update(VehicleUpdateRequest $request, Vehicle $vehicle): RedirectResponse
    {
        $vehicle->update($request->all());

        return redirect()->to('/vehicles');
    }

    public function destroy(Vehicle $vehicle): RedirectResponse
    {
        $vehicle->delete();

        return redirect()->to('/vehicles');
    }
}
