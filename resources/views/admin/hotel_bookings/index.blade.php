@extends('admin.layouts.app')

@section('content')
<div class="card shadow">
    <div class="card-body">
    <h1>Hotel Bookings</h1>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Booking ID</th>
                <th>Customer Name</th> <!-- Added column for user name -->
                <th>Hotel Name</th>
                <th>Room Type</th>
                <th>From Date</th>
                <th>To Date</th>
                <th>Total Amount</th>
                <th>Amount Paid</th>
                <th>Payment Type</th>
                <th>Payment Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bookings as $booking)
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>{{ $booking->user ? $booking->user->first_name . ' ' . $booking->user->last_name : 'N/A' }}</td> <!-- Display user name -->
                    <td>{{ $booking->hotel->name }}</td>
                    <td>{{ $booking->roomType->type }}</td>
                    <td>{{ $booking->from_date }}</td>
                    <td>{{ $booking->to_date }}</td>
                    <td>{{ number_format($booking->total_amount, 2) }}</td>
                    <td>{{ number_format($booking->amount_paid, 2) }}</td>
                    <td>{{ $booking->payment_type}}</td>
                    <td>{{ $booking->payment_status}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</div>
<script>
    window.onload = function(){
        $("table").DataTable();
    }
</script>     
@endsection
