@extends('master')

@section('title', 'Homepage')

@section('content')

	<h1>Recent Messages:</h1>
	
	<ul>
		@foreach($messages as $message) 
			<li> {{$message->title }} - {{$message->content }} <br> created: - {{$message->created_at}} </li>
		@endforeach
	</ul>

@endsection