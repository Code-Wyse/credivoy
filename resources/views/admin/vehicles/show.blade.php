@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Vehicle Details</h1>

    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ $vehicle->image }}" alt="{{ $vehicle->make }} {{ $vehicle->model }}" class="img-fluid rounded">
                </div>
                <div class="col-md-8">
                    <p><strong>Make:</strong> {{ $vehicle->make }}</p>
                    <p><strong>Model:</strong> {{ $vehicle->model }}</p>
                    <p><strong>Year:</strong> {{ $vehicle->year }}</p>
                    <p><strong>Type:</strong> {{ $vehicle->type }}</p>
                    <p><strong>License Plate:</strong> {{ $vehicle->license_plate }}</p>
                    <p><strong>Color:</strong> {{ $vehicle->color }}</p>
                    <p><strong>Capacity:</strong> {{ $vehicle->capacity }}</p>
                    <p><strong>Fuel Type:</strong> {{ $vehicle->fuel_type }}</p>
                    <p><strong>Transmission:</strong> {{ $vehicle->transmission }}</p>
                    <p><strong>Price Per Day:</strong> ${{ number_format($vehicle->price_per_day, 2) }}</p>
                    <p><strong>Features:</strong> {{ $vehicle->features }}</p>
                    <p><strong>Status:</strong> {{ $vehicle->status }}</p>

                    <div class="mt-4">
                        <a href="{{ route('admin.vehicles.edit', $vehicle->id) }}" class="btn btn-primary">Edit</a>

                        <form action="{{ route('admin.vehicles.destroy', $vehicle->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                        <a href="{{ route('admin.vehicles.index') }}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
