@extends('front.layouts.app')


@section('contents')
    <section class="booking-details">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
     <div class="main_booking-table">
    <h2>Booking Details</h2>
    <div class="tables">
        <table>
            <tr>
                <th>Booking ID</th>
                <td>{{ $booking->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $booking->user->full_name }}</td>
            </tr>
            <tr>
                <th>Amount Paid</th>
                <td>PKR {{number_format($booking->total_amount - $booking->remaining_amount)}}</td>
            </tr>
            <tr>
                <th>Amount Remaining</th>
                <td>PKR {{number_format($booking->remaining_amount)}}</td>
            </tr>
            <tr>
                <th>Payment Status</th>
                <td>{{ $booking->payment_status }}</td>
            </tr>
{{--            <tr>--}}
{{--                <th>Payment Method</th>--}}
{{--                <td>Credit Card</td>--}}
{{--            </tr>--}}
            <tr>
                <th>Number of Persons</th>
                <td>{{ $booking->persons()->sum('number_of_persons') }}</td>
            </tr>
            <tr>
                <th>Adult Count</th>
                <td>{{ $booking->persons()->where('age_category','=','Adult')->sum('number_of_persons') }}</td>
            </tr>
            <tr>
                <th>Children Count</th>
                <td>{{ $booking->persons()->where('age_category','=','Child')->sum('number_of_persons') }}</td>
            </tr>
        </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>

@endsection
