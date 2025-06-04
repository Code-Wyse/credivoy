@extends('admin.layouts.app')
@section('title') Users @endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover text-center w-100">
                    <thead>
                    <tr>
                        <th>Full name</th>
                        <th>Is Admin</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>CNIC</th>
{{--                        <th>Action</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->full_name}}</td>
                            <td>{{$user->hasRole('Admin') ? "Yes" : "No"}}</td>
                            <td><a href="mailto:{{$user->email}}">{{$user->email}}</a></td>
                            <td><a href="tel:{{$user->phone}}">{{$user->phone}}</a></td>
                            <td>{{$user->cnic}}</td>
{{--                            <td>{{$user->cnic}}</td>--}}
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
