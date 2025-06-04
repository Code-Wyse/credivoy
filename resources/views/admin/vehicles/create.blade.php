@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Add Vehicle</h1>
    <form action="{{ route('admin.vehicles.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="make" class="form-label">Make:</label>
            <input type="text" id="make" name="make" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="model" class="form-label">Model:</label>
            <input type="text" id="model" name="model" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="year" class="form-label">Year:</label>
            <input type="number" id="year" name="year" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="type" class="form-label">Type:</label>
            <input type="text" id="type" name="type" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="license_plate" class="form-label">License Plate:</label>
            <input type="text" id="license_plate" name="license_plate" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="color" class="form-label">Color:</label>
            <input type="text" id="color" name="color" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="capacity" class="form-label">Capacity:</label>
            <input type="number" id="capacity" name="capacity" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="fuel_type" class="form-label">Fuel Type:</label>
            <input type="text" id="fuel_type" name="fuel_type" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="transmission" class="form-label">Transmission:</label>
            <input type="text" id="transmission" name="transmission" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="price_per_day" class="form-label">Price Per Day:</label>
            <input type="number" step="0.01" id="price_per_day" name="price_per_day" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="features" class="form-label">Features:</label>
            <textarea id="features" name="features" class="form-control"></textarea>
        </div>
        <div class="form-group mb-3">
            <label for="image" class="form-label">Image URL:</label>
            <input type="text" id="image" name="image" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label for="status" class="form-label">Status:</label>
            <input type="text" id="status" name="status" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Vehicle</button>
    </form>
</div>
@endsection
