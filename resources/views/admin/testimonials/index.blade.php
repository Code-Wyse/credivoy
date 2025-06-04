@extends('admin.layouts.app')
@section('content')
<div class="card shadow">
    <div class="card-body">
        <h1>Testimonials</h1>
        <a href="{{ route('admin.testimonials.create') }}" class="btn btn-primary m-2">Add Testimonial</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Content</th>
                    {{-- <th>Image</th> --}}
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($testimonials as $testimonial)
                    <tr>
                        <td>{{ $testimonial->name }}</td>
                        <td>{{ $testimonial->content }}</td>
                        {{-- <td><img src="{{ asset('storage/'.$testimonial->image) }}" width="100"></td> --}}
                        <td>
                            <a href="{{ route('admin.testimonials.edit', $testimonial) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.testimonials.destroy', $testimonial) }}" method="POST" style="display:inline;">
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
@endsection
@section('script')
    <script>
        window.onload = function(){
            $("table").DataTable();
        }
    </script>
@endsection
