@component('mail::message')

# Salut {{ $msg->name }} !
- {{ $msg->name }}
- {{ $msg->email }}

@component('mail::panel')
    {{ $msg->message }}
@endcomponent
 
Thanks, {{ config('app.name') }}
@endcomponent


