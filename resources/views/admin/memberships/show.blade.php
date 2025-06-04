@extends('admin.layouts.app')

@section('content')
    <h1>Membership Details</h1>

    <table class="table">
        <tr>
            <th>Name</th>
            <td>{{ $membership->type }}</td>
        </tr>
        <tr>
            <th>Trip Coins Multiplier (%)</th>
            <td>{{ $membership->trip_coins_percentage }}</td>
        </tr>
        <tr>
            <th>Hotel Discount (%)</th>
            <td>{{ $membership->hotel_discount }}</td>
        </tr>
        <tr>
            <th>Trip Discount (%)</th>
            <td>{{ $membership->trip_discount }}</td>
        </tr>
        <tr>
            <th>VIP Lounge Access</th>
            <td>{{ $membership->free_vip_lounge ? 'Yes' : 'No' }}</td>
        </tr>
        <tr>
            <th>Train Refund Exemptions</th>
            <td>{{ $membership->no_refund_handling_fees }}</td>
        </tr>
        <tr>
            <th>Priority Assistance</th>
            <td>{{ $membership->priority_assistance ? 'Yes' : 'No' }}</td>
        </tr>
        <!-- New fields -->
        <tr>
            <th>Price</th>
            <td>${{ number_format($membership->price, 2) }}</td>
        </tr>
        <tr>
            <th>Next Tier</th>
            <td>{{ $membership->next_tier ? $membership->next_tier : 'N/A' }}</td>
        </tr>
        <tr>
            <th>Bookings Required</th>
            <td>{{ $membership->bookings_required !== null ? $membership->bookings_required : 'N/A' }}</td>
        </tr>
    </table>

    <a href="{{ route('admin.memberships.index') }}" class="btn btn-secondary mt-3">Back to Memberships</a>
@endsection
