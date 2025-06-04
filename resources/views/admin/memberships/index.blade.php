@extends('admin.layouts.app')

@section('content')
    <div class="card shadow">
        <div class="card-body">
            <h1>Memberships</h1>
            <a href="{{ route('admin.memberships.create') }}" class="btn btn-primary mb-3">Add Membership</a>
            <table class="table">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Trip Coins Percentage</th>
                    <th>Hotel Discount</th>
                    <th>Trip Discount</th>
                    <th>Train Refund Exemptions</th>
                    <th>VIP Lounge Access</th>
                    <th>Priority Assistance</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($memberships as $membership)
                    <tr>
                        <td>{{ $membership->type }}</td>
                        <td>{{ $membership->trip_coins_percentage }}%</td>
                        <td>{{ $membership->hotel_discount }}%</td>
                        <td>{{ $membership->trip_discount }}%</td>
                        <td>{{ $membership->no_refund_handling_fees }}</td>
                        <td>{{ $membership->free_vip_lounge ? 'Yes' : 'No' }}</td>
                        <td>{{ $membership->priority_assistance ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="{{ route('admin.memberships.show', $membership->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('admin.memberships.edit', $membership->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.memberships.destroy', $membership->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
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
