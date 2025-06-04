@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Edit Vehicle</h1>
    <form action="{{ route('admin.vehicles.update', $vehicle->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group mb-3">
            <label for="make" class="form-label">Make:</label>
            <input type="text" id="make" name="make" class="form-control" value="{{ old('make', $vehicle->make) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="model" class="form-label">Model:</label>
            <input type="text" id="model" name="model" class="form-control" value="{{ old('model', $vehicle->model) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="year" class="form-label">Year:</label>
            <input type="number" id="year" name="year" class="form-control" value="{{ old('year', $vehicle->year) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="type" class="form-label">Type:</label>
            <input type="text" id="type" name="type" class="form-control" value="{{ old('type', $vehicle->type) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="license_plate" class="form-label">License Plate:</label>
            <input type="text" id="license_plate" name="license_plate" class="form-control" value="{{ old('license_plate', $vehicle->license_plate) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="color" class="form-label">Color:</label>
            <input type="text" id="color" name="color" class="form-control" value="{{ old('color', $vehicle->color) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="capacity" class="form-label">Capacity:</label>
            <input type="number" id="capacity" name="capacity" class="form-control" value="{{ old('capacity', $vehicle->capacity) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="fuel_type" class="form-label">Fuel Type:</label>
            <input type="text" id="fuel_type" name="fuel_type" class="form-control" value="{{ old('fuel_type', $vehicle->fuel_type) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="transmission" class="form-label">Transmission:</label>
            <input type="text" id="transmission" name="transmission" class="form-control" value="{{ old('transmission', $vehicle->transmission) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="price_per_day" class="form-label">Price Per Day:</label>
            <input type="number" step="0.01" id="price_per_day" name="price_per_day" class="form-control" value="{{ old('price_per_day', $vehicle->price_per_day) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="features" class="form-label">Features:</label>
            <textarea id="features" name="features" class="form-control">{{ old('features', $vehicle->features) }}</textarea>
        </div>

        <div class="form-group mb-3">
            <label for="image" class="form-label">Image URL:</label>
            <input type="text" id="image" name="image" class="form-control" value="{{ old('image', $vehicle->image) }}">
        </div>

        <div class="form-group mb-3">
            <label for="status" class="form-label">Status:</label>
            <input type="text" id="status" name="status" class="form-control" value="{{ old('status', $vehicle->status) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Vehicle</button>
    </form>
</div>
@endsection
