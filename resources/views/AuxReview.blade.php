@extends('layouts.app')

@section('title', 'Calificacion y Opinio Auxiliar')
<style>


.ec-stars-wrapper {
  /* Espacio entre los inline-block (los hijos, los `a`) 
     http://ksesocss.blogspot.com/2012/03/display-inline-block-y-sus-empeno-en.html */
  font-size: 0;
  /* Podríamos quitarlo, 
    pero de esta manera (siempre que no le demos padding), 
    sólo aplicará la regla .ec-stars-wrapper:hover a cuando
    también se esté haciendo hover a alguna estrella */
  display: inline-block;
}
.ec-stars-wrapper a {
  text-decoration: none;
  display: inline-block;
  /* Volver a dar tamaño al texto */
  font-size: 32px;
  font-size: 2rem;
  
  color: #888;
}

.ec-stars-wrapper:hover a {
  color: rgb(241, 196, 15);
}
/*
 * El selector de hijo, es necesario para aumentar la especifidad
 */
.ec-stars-wrapper > a:hover ~ a {
  color: #888;
}
</style>

<div style="background-image: url('/img/header.jpg'); height: 950px; width: 1600px;">
@section('content')
<br><br><br><br>
  <div><h1>Calificar Auxiliar</h1></div>
  <br><br>
  <form method="post" action="{{ url('/AuxReview/{id}') }}">
  @csrf
  <div>
    <h4>Auxiliar: ################## </h4>  
  <div class="ec-stars-wrapper">
    <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
    <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
    <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
    <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
    <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
  </div>

  </div>
  <div>

    <textarea type="text" name="opinion" placeholder="comentario" style="width:500px; height:200px"></textarea>
    <textarea type="text" name="opinion2" placeholder="comentario" style="width:500px; height:200px"></textarea>
  </div>
  <div><input type="text" name="score" placeholder="punteo"></input></div>
  <div><input type="number" name="id" placeholder="id"></input></div>
  <br><br>

  <br><br>
  <button >Guardar</button>
  </form>
</div>
</body>
@endsection