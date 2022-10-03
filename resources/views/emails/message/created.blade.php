@component('mail::message')
#Salut Admin ,<br>
    -{{$msg->nom}},<br>
    -{{$msg->email}},<br>
@component('mail::panel')
    {{$msg->message}}
@endcomponent
    Merci,
    {{ config('app.name') }}
@endcomponent


