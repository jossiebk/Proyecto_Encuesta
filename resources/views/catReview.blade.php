@extends('layouts.app')


@section('title', 'opinar y calificar')
<div style="background-image: url(img/header.jpg); height: 1250px; width: 1600px;">

@section('content')
<br><br><br><br>
	<div><h1>Calificar Catedratico</h1></div>
	<br><br>
	<form method="post" action="{{ url('/teacherReview/{id}') }}">
    @csrf
	<div><h4>Catedratico:  {{ $teacher->user->name }} </h4>  </div>
	<div><textarea type="text" name="opinion" placeholder="comentario" style="width:700px; height:100px"></textarea></div>
	<br><br>
	<div><input type="text" name="score" placeholder="punteo"></input></div>
	 <div><input type="text" name="id" placeholder="id"></input></div>
	<br><br>
	<a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Guardar</a>
	</form>
</div>


@endsection