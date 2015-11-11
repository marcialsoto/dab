@extends ('master')
@section('content')
<h1>Contactame</h1>
<h3>Personas que me agradan:</h3>

@if (count($people))
<ul>
	@foreach ($people as $person)
		<li>{{$person}}</li>
	@endforeach
</ul>
@endif

@stop
