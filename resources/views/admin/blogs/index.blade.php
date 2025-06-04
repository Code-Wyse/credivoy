@extends('admin.layouts.app')
@section('title') Blogs @endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary mb-3" >Create Blog</a>
            <div class="table-responsive">
                <table class="table table-striped table-hover text-center w-100">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Content</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $blog)
                        <tr>
                            <td>{{ $blog->title }}</td>
                            <td>{!! substr(strip_tags($blog->content),0,50) !!}...</td>
                            <td>
                                <a href="{{ route('admin.blogs.edit',$blog->id) }}" class="btn btn-primary btn-sm" ><i class="fa fa-edit" ></i></a>
                                <form action="{{ route('admin.blogs.destroy',$blog->id) }}" method="post" class="d-inline" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" ><i class="fa fa-trash" ></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
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
