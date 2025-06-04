@extends('admin.layouts.app')
@section('title') Contact Us Form @endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover text-center w-100">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        
                        
                                        </tr>
                    </thead>
                    <tbody>
                    @foreach($Form  as $request)
                        <tr>
                            <td>{{ $request->id }}</td>
                        <td>{{ $request->name }}</td>
                        <td>{{ $request->email }}</td>
                        <td>{{ $request->message  }}</td>
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
