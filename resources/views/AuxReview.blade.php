@extends('layouts.app')

@section('title', 'Calificacion y Opinio Auxiliar')


<div style="background-image: url(img/header.jpg); height: 950px; width: 1600px;">
@section('content')
<br><br><br><br>
  <div><h1>Calificar Auxiliar</h1></div>
  <br><br>
  <form method="post" action="{{ url('/AuxReview') }}">
  @csrf
  <div>
    <h4>Auxiliar: ################## </h4>  </div>
  <div>
    <textarea type="text" name="opinion" placeholder="comentario" style="width:600px; height:200px"></textarea>
    <textarea type="text" name="opinion2" placeholder="comentario" style="width:600px; height:200px"></textarea>
  </div>
  <br><br>
  <div><input type="text" name="score" placeholder="punteo"></input></div>
   <div><input type="number" name="id" placeholder="id"></input></div>
  <br><br>
  <button >Guardar</button>
  </form>
</div>

@endsection