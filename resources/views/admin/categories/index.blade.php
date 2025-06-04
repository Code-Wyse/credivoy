@extends('admin.layouts.app')
@section('title') Categories @endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <a href="{{ route('admin.categories.create') }}"  class="btn btn-primary mb-3" >Create New</a>
            <div class="table-responsive">
                <table class="table table-striped table-hover text-center w-100">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>{{$category->description}}</td>
                            <td>
                                <a href="{{ route('admin.categories.edit',$category->id) }}" class="btn btn-primary btn-sm" ><i class="fa fa-edit" ></i></a>
                                <button type="button" class="btn btn-danger btn-sm" onclick="deleteConf('{{route('admin.categories.destroy',$category->id)}}')" ><i class="fa fa-trash" ></i></button>
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
