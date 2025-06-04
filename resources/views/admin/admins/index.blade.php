@extends('admin.layouts.app')
@section('title') Admins @endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <a href="{{ route('admin.admins.create') }}" class="btn btn-primary mb-3" >Create new</a>
            <div class="table-responsive">
                <table class="table table-striped table-hover text-center w-100">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Permissions</th>
                        <th>Super Admin</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($admins as $admin)
                        <tr>
                            <td>{{ $admin->full_name }}</td>
                            <td>{{ $admin->email }}</td>
                            <td>{{ implode(', ',$admin->permissions ?: []) }}</td>
                            <td>{{ $admin->super_admin ? "Yes" : "No" }}</td>
                            <td>
                                <a href="{{ route('admin.admins.edit',$admin->id) }}" class="btn btn-primary btn-sm" >
                                    <i class="fa fa-edit" ></i>
                                </a>
                                <form action="{{ route('admin.admins.destroy',$admin->id) }}" method="post" class="d-inline" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"  >
                                        <i class="fa fa-trash" ></i>
                                    </button>
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
