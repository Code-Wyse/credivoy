
@component('mail::message')
# Newsletter Subscription

From Email: {{$newsletter->email}}
Thanks,<br>
{{ config('app.name') }}
@endcomponent
