@extends('layouts.app')

@section('title', 'Calificacion y Opinio Auxiliar')
<style type="text/css">
#form {
  width: 250px;
  margin: 0 auto;
  height: 50px;
}
#form p {
  text-align: center;
}
#form label {
  font-size: 20px;
}
input[type="radio"] {
  display: none;
}
label {
  color: grey;
}
.clasificacion {
  direction: rtl;
  unicode-bidi: bidi-override;
}
label:hover,
label:hover ~ label {
  color: orange;
}
input[type="radio"]:checked ~ label {
  color: orange;
}
body {
   background-image: url('/img/header.jpg'); height: 1250px; width: 1600px;
}
</style>

<div style="background-image: url('/img/header.jpg'); height: 950px; width: 1600px;">
@section('content')
<br><br><br><br>

  <div class="row align-items-center justify-content-center">
    <h1 style="color:white;" class="display-3">Calificar Auxiliar</h1>
  </div>
  <br><br>
  <form method="post" action="{{ url('/AuxReview/{id}') }}">
  @csrf
  <div class="row align-items-center justify-content-center">
  <h1 style="color:white;" class="display-5">{{ $assistant->user->name }}</h1>
      </div>

  
  <div>
 <p class="clasificacion" style="font-size:50px; text-align:center;" >

      <input id="radio1" type="radio" name="estrellas" value="5">
      <label for="radio1">★</label>

      <input id="radio2" type="radio" name="estrellas" value="4">
      <label for="radio2">★</label>

      <input id="radio3" type="radio" name="estrellas" value="3">
      <label for="radio3">★</label>

      <input id="radio4" type="radio" name="estrellas" value="2">
      <label for="radio4">★</label>
      
      <input id="radio5" type="radio" name="estrellas" value="1">
      <label for="radio5">★</label>
  </p>
  </div>

  <div class="row align-items-center justify-content-center">

    <textarea type="text" name="opinion" placeholder="comentario" style="width:500px; height:200px"></textarea>
    <br>
    <textarea type="text" name="opinion2" placeholder="comentario" style="width:500px; height:200px"></textarea>
  </div>

  <br>
  <div class="row align-items-center justify-content-center">
    <input type="text" name="score" placeholder="punteo"></input>
  </div>

  <div class="row align-items-center justify-content-center">
    <input type="number" name="id" placeholder="id"></input>
  </div>
  <br>
  <div class="row align-items-center justify-content-center ">

  <div class="col-sm-4">
  <button type="button" class="btn btn-success btn-block" >Guardar</button>  
  </div>

  </div>
  
  </form>
</div>
</body>
@endsection