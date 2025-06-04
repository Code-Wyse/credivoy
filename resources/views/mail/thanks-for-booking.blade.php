@component('mail::message')
# Thanks for Booking

Dear {{$booking->user->full_name}}
Thanks for booking your tour of {{ $booking->tour->title }} on {{ $booking->departure->departure_date->format('d F, Y') }} with {{config('app.name')}}. One of our agents will contact you for payment confirmation.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
