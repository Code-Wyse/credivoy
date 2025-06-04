@extends('admin.layouts.app')
@section('title') Testimonials @endsection


@section('content')
<div class="card shadow">
    <div class="card-body">
        <h1>Edit Testimonial</h1>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.testimonials.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $testimonial->name }}" required>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="content" class="form-control" required>{{ $testimonial->content }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
                @if($testimonial->image)
                    <img src="{{ asset('storage/'.$testimonial->image) }}" width="100">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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
