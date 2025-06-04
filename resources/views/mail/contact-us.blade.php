@component('mail::message')
# Contact Us

From Email: {{$contactUs->email}}
From Name: {{$contactUs->name}}
From Phone: {{$contactUs->phone}}
Message: {{$contactUs->message}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
