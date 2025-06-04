@extends('admin.layouts.app')
@section('title') Payments @endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover text-center w-100">
                    <thead>
                    <tr>
                        <th>Payment Of</th>
                        <th>Payment Type</th>
                        <th>Payment Method</th>
                        <th>Payment Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($payments as $payment)
                        <tr>
                            <td>{{ $payment->paymentable_type === \App\Models\Booking::class ? 'Booking #'.$payment->paymentable_id : "N/A" }}</td>
                            <td>{{ $payment->payment_type }}</td>
                            <td>{{ $payment->payment_method }}</td>
                            <td>PKR {{ number_format($payment->amount,0) }}</td>
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
        $('table').DataTable();
    </script>
@endsection
