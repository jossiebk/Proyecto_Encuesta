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
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
          	<hr class="light my-4">
          	<br>
            <h4 class="text-faded mb-4">1. ¿Pregunta 1?</h4>
        		{!!Form::select('r1', array('1' => '1', '2' => '2','3' => '3', '4' => '4','5' => '5', '6' => '6','7' => '7', '8' => '8','9' => '9', '10' => '10'), '', array('class' => 'custom-select mr-sm-2' ))!!}
        	<hr>
   	        <h4 class="text-faded mb-4">2. ¿Pregunta 2?</h4>
   	        <br>
        		{!!Form::select('r2', array('1' => '1', '2' => '2','3' => '3', '4' => '4','5' => '5', '6' => '6','7' => '7', '8' => '8','9' => '9', '10' => '10'), '', array('class' => 'custom-select mr-sm-2' ))!!}
        	<hr>
        	<h4 class="text-faded mb-4">3. ¿Pregunta 3?</h4>
        	<br>
        		{!!Form::select('r3', array('1' => '1', '2' => '2','3' => '3', '4' => '4','5' => '5', '6' => '6','7' => '7', '8' => '8','9' => '9', '10' => '10'), '', array('class' => 'custom-select mr-sm-2' ))!!}
        	<hr>
        	<h4 class="text-faded mb-4">4. ¿Pregunta 4?</h4>
        	<br>
        		{!!Form::select('r4', array('1' => '1', '2' => '2','3' => '3', '4' => '4','5' => '5', '6' => '6','7' => '7', '8' => '8','9' => '9', '10' => '10'), '', array('class' => 'custom-select mr-sm-2' ))!!}
        	<hr>
        	<h4 class="text-faded mb-4">5. ¿Pregunta 5?</h4>
        	<br>
        		{!!Form::select('r5', array('1' => '1', '2' => '2','3' => '3', '4' => '4','5' => '5', '6' => '6','7' => '7', '8' => '8','9' => '9', '10' => '10'), '', array('class' => 'custom-select mr-sm-2' ))!!}
        	<hr>
         	<h4 class="text-faded mb-4">6. ¿Pregunta 6?</h4>
        		{!!Form::select('r6', array('1' => '1', '2' => '2','3' => '3', '4' => '4','5' => '5', '6' => '6','7' => '7', '8' => '8','9' => '9', '10' => '10'), '', array('class' => 'custom-select mr-sm-2' ))!!}
        	<br>
        	<p class="text-faded mb-4"> </p>
        	<a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Evaluar</a>
      </div>
    </section>
@endsection