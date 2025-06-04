@extends('admin.layouts.app')
@section('title') Tour Bookings @endsection
@section('content')
    <div class="card shadow" >
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover text-center w-100">
                    <thead>
                    <tr>
                        <th>User</th>
                        <th>Tour</th>
                        <th>Tour Departure</th>
                        <th>Payment Type</th>
                        <th>Payment Status</th>
                        <th>Total Amount</th>
                        <th>Remaining Amount</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bookings as $booking)
                        <tr>
                            <td>{{ $booking->user->full_name }}</td>
                            <td>{{ $booking->tour->title }}</td>
                            <td>{{ $booking->departure->departure_date->format('d F, Y') }}</td>
                            <td>{{ $booking->payment_type }}</td>
                            <td>{{ $booking->payment_status }}</td>
                            <td>PKR {{ number_format($booking->total_amount,0) }}</td>
                            <td>PKR {{ number_format($booking->remaining_amount,0) }}</td>
                            <td>
                                <button onclick="editBooking({{$booking->id}})" type="button" class="btn btn-primary btn-sm" data-toggle="tooltip" data-title="Change Status" ><i class="fa fa-edit" ></i></button>
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
            $('table').DataTable();
        }
        function editBooking(bookingId){
            $.get("{{url('admin/bookings')}}/"+bookingId+"/edit",{},function(e){
                $(".conf").html(e);
                $("#edit_booking_modal").modal();
            })
        }

    </script>
@endsection
