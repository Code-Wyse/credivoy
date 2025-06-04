@extends('admin.layouts.app')
@section('title') Destinations @endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <a href="{{ route('admin.destinations.create') }}"  class="btn btn-primary mb-3" >Create New</a>
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
                    @foreach($destinations as $destination)
                        <tr>
                            <td>{{$destination->name}}</td>
                            <td>{{$destination->description}}</td>
                            <td>
                                <a href="{{ route('admin.destinations.edit',$destination->id) }}" class="btn btn-primary btn-sm" ><i class="fa fa-edit" ></i></a>
                                <button type="button" class="btn btn-danger btn-sm" onclick="deleteConf('{{route('admin.destinations.destroy',$destination->id)}}')" ><i class="fa fa-trash" ></i></button>
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
