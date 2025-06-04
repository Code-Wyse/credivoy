<?php

namespace App\Http\Controllers\Admin;

use App\Models\Vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('admin.vehicles.index', compact('vehicles'));
    }

    public function create()
    {
        return view('admin.vehicles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer',
            'type' => 'required|string|max:255',
            'license_plate' => 'required|string|unique:vehicles,license_plate',
            'color' => 'required|string|max:255',
            'capacity' => 'required|integer',
            'fuel_type' => 'required|string|max:255',
            'transmission' => 'required|string|max:255',
            'price_per_day' => 'required|numeric',
            'features' => 'nullable|string',
            'image' => 'nullable|string',
            'status' => 'required|string',
        ]);

        Vehicle::create($request->all());

        return redirect()->route('admin.vehicles.index')->with('success', 'Vehicle added successfully!');
    }

    public function show(Vehicle $vehicle)
    {
        return view('admin.vehicles.show', compact('vehicle'));
    }

    public function edit(Vehicle $vehicle)
    {
        return view('admin.vehicles.edit', compact('vehicle'));
    }

    public function update(Request $request, Vehicle $vehicle)
    {
        $request->validate([
            'make' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer',
            'type' => 'required|string|max:255',
            'license_plate' => 'required|string|unique:vehicles,license_plate,' . $vehicle->id,
            'color' => 'required|string|max:255',
            'capacity' => 'required|integer',
            'fuel_type' => 'required|string|max:255',
            'transmission' => 'required|string|max:255',
            'price_per_day' => 'required|numeric',
            'features' => 'nullable|string',
            'image' => 'nullable|string',
            'status' => 'required|string',
        ]);

        $vehicle->update($request->all());

        return redirect()->route('admin.vehicles.index')->with('success', 'Vehicle updated successfully!');
    }

    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();

        return redirect()->route('admin.vehicles.index')->with('success', 'Vehicle deleted successfully!');
    }
}
