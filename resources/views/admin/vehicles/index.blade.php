@extends('admin.layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-body">
    <h1>Vehicles</h1>
    <a href="{{ route('admin.vehicles.create') }}" class="btn btn-primary mb-3">Add New Vehicle</a>
    <table class="table">
        <thead>
            <tr>
                <th>Make</th>
                <th>Model</th>
                <th>Year</th>
                <th>Type</th>
                <th>Price Per Day</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($vehicles as $vehicle)
                <tr>
                    <td>{{ $vehicle->make }}</td>
                    <td>{{ $vehicle->model }}</td>
                    <td>{{ $vehicle->year }}</td>
                    <td>{{ $vehicle->type }}</td>
                    <td>{{ $vehicle->price_per_day }}</td>
                    <td>
                        <a href="{{ route('admin.vehicles.show', $vehicle->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('admin.vehicles.edit', $vehicle->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('admin.vehicles.destroy', $vehicle->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
<script>
    window.onload = function(){
        $("table").DataTable();
    }
</script>
@endsection
