@extends('layouts.app')

@section('title', 'Encuesta Profesor')
<div style="background-image: url(img/header.jpg); height: 1250px; width: 1400px;">



		<br><br><br><br>
		<!-- Formulario de preguntas dedicadas a la evaluacion del catedratico-->

		{!! Form::open(['url' => '/teacher_form/evaluate', 'method' => 'post', 'class' => 'form-row align-items-center','onsubmit' => 'return confirm("Quieres enviar esta evaluacion?")']) !!}
		<div class="container" type="text" readonly>
		{!! Form::token('tokenN')!!}

			<div class="container">


		<div class="card">
  		<div class="card-header">
    		Instrucciones:
  		</div>
  		<div class="card-body">
    		<h5 class="card-title">Evaluacion de docente</h5>
    		<p class="card-text">Responda las preguntas que a continuacion se le presentan. Seleccione valores dentro de 1 a 10 siendo 1 malo y 10 bueno.</p>
  		</div>
		</div>
		<BR><BR>
 		<!--******************************************************************-->
 		{!!Form::label('Pregunta1', '1. El catedratico cumple con el horario establecido?' ,array('class' => 'text-white'))!!}
 		<br>
		{!!Form::select('P1', array('1' => '1', '2' => '2','3' => '3', '4' => '4','5' => '5', '6' => '6','7' => '7', '8' => '8','9' => '9', '10' => '10'), '', array('class' => 'custom-select mr-sm-2' ))!!}


 		<!--******************************************************************-->
 		{!!Form::label('Pregunta2', '2. El catedratico demuestra su dominio sobre los temas impartidos?',array('class' => 'text-white'))!!}
 		<br>
		{!!Form::select('P2', array('1' => '1', '2' => '2','3' => '3', '4' => '4','5' => '5', '6' => '6','7' => '7', '8' => '8','9' => '9', '10' => '10'), 'null', array('class' => 'custom-select mr-sm-2' ))!!}
 	

 		<!--******************************************************************-->
 		{!!Form::label('Pregunta3', '3.La presentacion personal del catedratico es la adecuada?',array('class' => 'text-white'))!!}
 		<br>
		{!!Form::select('P3', array('1' => '1', '2' => '2','3' => '3', '4' => '4','5' => '5', '6' => '6','7' => '7', '8' => '8','9' => '9', '10' => '10'), 'null', array('class' => 'custom-select mr-sm-2' ))!!}
 


 		<!--******************************************************************-->
 		{!!Form::label('Pregunta4', '4. El catedratico entrega notas en las fecha establecida?',array('class' => 'text-white'))!!}
 		<br>
		{!!Form::select('P4', array('1' => '1', '2' => '2','3' => '3', '4' => '4','5' => '5', '6' => '6','7' => '7', '8' => '8','9' => '9', '10' => '10'), 'null', array('class' => 'custom-select mr-sm-2' ))!!}
			
<!--******************************************************************-->
 		{!!Form::label('Pregunta5', '5. El catedratico asiste al curso los dias establecidos?',array('class' => 'text-white'))!!}
 		<br>
		{!!Form::select('P5', array('1' => '1', '2' => '2','3' => '3', '4' => '4','5' => '5', '6' => '6','7' => '7', '8' => '8','9' => '9', '10' => '10'), 'null', array('class' => 'custom-select mr-sm-2' ))!!}


 		{!!Form::label('Comentario', 'Agregue un comentario (Opcional).',array('class' => 'text-white'))!!}
 		<br>
		{!!Form::textarea('comment',null,array('rows' => 10, 'cols' => 50 ))!!}


		<br><br><br><br>
 			{!!Form::submit('Evaluar', array('class'=>'btn btn-primary btn-lg btn-block'))!!}
 		</div>
		{!! Form::close() !!}
	</div>
	</div>

@section('content')

@endsection