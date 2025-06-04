@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Vehicle Bookings</h1>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Vehicle</th>
                        <th>User</th>
                        <th>From Date</th>
                        <th>To Date</th>
                        <th>Total Amount</th>
                        {{-- <th>Created At</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->id }}</td>
                        <td>{{ $booking->vehicle->make }} {{ $booking->vehicle->model }}</td>
                        <td>{{ $booking->user->name }}</td>
                        <td>{{ $booking->from_date }}</td>
                        <td>{{ $booking->to_date }}</td>
                        <td>${{ number_format($booking->total_amount, 2) }}</td>
                        {{-- <td>{{ $booking->created_at->format('Y-m-d H:i:s') }}</td> --}}
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
