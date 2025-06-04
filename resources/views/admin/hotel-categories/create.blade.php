@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <h1>Add New Hotel Category</h1>
        <form action="{{ route('admin.hotel-categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Category</button>
        </form>
    </div>
@endsection
