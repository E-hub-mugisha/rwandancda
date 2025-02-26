<h1>Hello Rwanda NCD Alliance</h1>

@if( $messages == '')
<p>No message provided</p>
@else
{{ $messages }}
@endif


<p>Title of the message: {{ $subject }}</p>

<p>{{ $messages }}</p><br>

<h4>Received From:</h4>  {{ $name }}


<p>Email Address: {{ $email }}</p>  <br>