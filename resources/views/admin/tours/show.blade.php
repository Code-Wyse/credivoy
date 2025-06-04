@extends('admin.layouts.app')
@section('title') Tour Departures @endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover text-center w-100">
                    <thead>
                    <tr>
                        <th>Departure Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tour->departures as $departure)
                        <tr>
                            <td>{{ $departure->departure_date->format('d F, Y') }}</td>
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
        window.onload = function(){}
    </script>
@endsection
