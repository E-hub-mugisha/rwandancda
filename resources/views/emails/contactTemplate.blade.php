@component('mail::message')
# {{ $contactReceived['name'] }}

Hello I'm {{ $contactReceived['name'] }}<br/>
<p><b>Email:</b> {{ $contactReceived['email'] }}</p>
<p><b>Subject:</b> {{ $contactReceived['subject'] }}</p>
<p><b>messages:</b> {{ $contactReceived['messages'] }}</p>



Thanks,

{{ config('app.name') }}
@endcomponent