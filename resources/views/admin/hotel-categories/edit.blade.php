@extends('admin.layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-body">
        <h1>Edit Hotel Category</h1>
        <form action="{{ route('admin.hotel-categories.update', $hotelCategory->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $hotelCategory->name) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Category</button>
        </form>
    </div>
</div>
<script>
    window.onload = function(){
        $("table").DataTable();
    }
</script>    
@endsection
