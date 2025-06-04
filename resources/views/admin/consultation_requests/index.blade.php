@extends('admin.layouts.app')
@section('title') Consultation @endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover text-center w-100">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Requirement</th>
                        <th>Trip Title</th>
                                        </tr>
                    </thead>
                    <tbody>
                    @foreach($consultationRequests  as $request)
                        <tr>
                            <td>{{ $request->id }}</td>
                        <td>{{ $request->name }}</td>
                        <td>{{ $request->lname }}</td>
                        <td>{{ $request->email }}</td>
                        <td>{{ $request->phone }}</td>
                        <td>{{ $request->datepicker }}</td>
                        <td>{{ $request->requirement }}</td>
                        <td>{{ $request->trip_title }}</td>
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
