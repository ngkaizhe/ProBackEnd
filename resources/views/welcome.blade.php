@extends('layout')

@section('content')

	<h1>
		welcome
	</h1>
	@parent

	<ul>
		@foreach($tasks as $task)
			<li>{{ $task }}</li>
		@endforeach
	</ul>
@endsection()

