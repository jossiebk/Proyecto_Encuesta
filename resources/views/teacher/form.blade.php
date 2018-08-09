@extends('layouts.app')

@section('title', 'Encuesta Profesor')

@section('content')
	<header class="masthead text-center text-white"></header>

@section('content')

{!! Form::open(['url' => 'foo/bar']) !!}
    {!!Form::text('email', 'example@gmail.com')!!}
{!! Form::close() !!}

@endsection


@endsection