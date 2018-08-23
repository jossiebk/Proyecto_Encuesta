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
	<div><textarea type="text" name="opinion" placeholder="comentario positivo" style="width:400px; height:100px"></textarea>
		<textarea type="text" name="opinionN" placeholder="comentario negativo" style="width:400px; height:100px"></textarea></div>
	<br><br>
	  <p class="clasificacion">
    <input id="radio1" type="radio" name="estrellas" value="5"><!--
    --><label for="radio1">★</label><!--
    --><input id="radio2" type="radio" name="estrellas" value="4"><!--
    --><label for="radio2">★</label><!--
    --><input id="radio3" type="radio" name="estrellas" value="3"><!--
    --><label for="radio3">★</label><!--
    --><input id="radio4" type="radio" name="estrellas" value="2"><!--
    --><label for="radio4">★</label><!--
    --><input id="radio5" type="radio" name="estrellas" value="1"><!--
    --><label for="radio5">★</label>
    
  </p>
	<div><input type="text" name="score" placeholder="punteo"></input></div>
	 <div><input type="number" name="id" placeholder="id"></input></div>
	<br><br>
	<button >Guardar</button>
	</form>
</div>


@endsection