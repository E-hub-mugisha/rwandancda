<h1>Hello Rwanda NCD Alliance</h1>

@if( $description == '')
<p>No Description provided</p>
@else
{{ $description }}
@endif

<p>Organization name: {{ $organization }}</p>  <br>

<p>Title of the newsletter: {{ $title }}</p>

<p>{{ $content }}</p><br>

<p>For details checkout: {{ $resources }}</p>

<h4>Received From:</h4>  {{ $name }}

<h5>Comments: </h5> 

<p>{{ $comments }}</p>

<h4>Contacts: </h4> <br>

<p>Phone number: {{ $phone }} </p> <br>

<p>Email Address: {{ $email }}</p>  <br>

