@extends('admin.layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-body">
        <h1>Hotels</h1>
        <a href="{{ route('admin.hotels.create') }}" class="btn btn-primary mb-3">Add Hotel</a>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    {{-- <th>Rating</th> --}}
                    {{-- <th>Guest Rating</th> --}}
                    {{-- <th>Number of Rooms</th> --}}
                    {{-- <th>Number of Floors</th> --}}
                    {{-- <th>Year of Construction</th> --}}
                    {{-- <th>Type</th> --}}
                    {{-- <th>Location</th> --}}
                    {{-- <th>Image</th> --}}
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hotels as $hotel)
                    <tr>
                        <td>{{ $hotel->name }}</td>
                        <td>{{ $hotel->address }}</td>
                        {{-- <td>{{ $hotel->rating }}</td>
                        <td>{{ $hotel->guest_rating }}</td>
                        <td>{{ $hotel->number_of_rooms }}</td>
                        <td>{{ $hotel->number_of_floors }}</td>
                        <td>{{ $hotel->year_of_construction }}</td>
                        <td>{{ $hotel->type }}</td>
                        <td>{{ $hotel->location }}</td>
                        <td>
                            @if ($hotel->image)
                                <img src="{{ asset('images/' . $hotel->image) }}" alt="{{ $hotel->name }}" style="width: 100px; height: auto;">
                            @else
                                No image
                            @endif
                        </td> --}}
                        <td>
                            <a href="{{ route('admin.hotels.edit', $hotel) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.hotels.destroy', $hotel->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this hotel?');">
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
