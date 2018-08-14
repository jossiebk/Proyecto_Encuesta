@extends('layouts.app')

@section('title', 'Evaluacion Auxiliar')

@section('content')
    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong> Evaluación Auxiliar</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">A continuación se le presentan una serie de preguntas que debe responder
            según su criterio.</p>
          </div>
        </div>
      </div>
    </header>
   <section class="bg-primary" id="about">
      <form method="post" action="{{ url('/formAux') }}">
        @csrf
        <input type="number" name="p1" placeholder="puntualidad">
        <input type="number" name="p2">
        <input type="number" name="p3">
        <input type="number" name="p4">
        <input type="number" name="p5" placeholder="asistencia">
        <input type="text" name="comment" placeholder="comentario">
        <input type="number" name="id_user_evaluator">
        <input type="number" name="id_user_evaluated">
        <input type="number" name="id_course">
        <button type="submit">Enviar</button>
      </form>
    </section>
@endsection