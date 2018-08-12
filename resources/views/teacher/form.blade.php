@extends('layouts.app')

@section('title', 'Encuesta Profesor')
<div style="background-image: url(img/header.jpg); height: 1250px; width: 1400px;">



		<br><br><br><br>
		<!-- Formulario de preguntas dedicadas a la evaluacion del catedratico-->

		{!! Form::open(['url' => '/teacher_form/calculate', 'class' => 'form-row align-items-center']) !!}
		<div class="container" type="text" readonly>


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
 		{!!Form::label('Pregunta1', '1. Pregunta 1?' ,array('class' => 'text-white'))!!}
 		<br>
		{!!Form::select('P1', array('N1' => '1', 'N2' => '2','N3' => '3', 'N4' => '4','N5' => '5', 'N6' => '6','N7' => '7', 'N8' => '8','N9' => '9', 'N10' => '10'), '', array('class' => 'custom-select mr-sm-2' ))!!}


 		<!--******************************************************************-->
 		{!!Form::label('Pregunta2', '2. Pregunta 2?',array('class' => 'text-white'))!!}
 		<br>
		{!!Form::select('P2', array('N1' => '1', 'N2' => '2','N3' => '3', 'N4' => '4','N5' => '5', 'N6' => '6','N7' => '7', 'N8' => '8','N9' => '9', 'N10' => '10'), 'null', array('class' => 'custom-select mr-sm-2' ))!!}
 	

 		<!--******************************************************************-->
 		{!!Form::label('Pregunta3', '3. Pregunta 3?',array('class' => 'text-white'))!!}
 		<br>
		{!!Form::select('P3', array('N1' => '1', 'N2' => '2','N3' => '3', 'N4' => '4','N5' => '5', 'N6' => '6','N7' => '7', 'N8' => '8','N9' => '9', 'N10' => '10'), 'null', array('class' => 'custom-select mr-sm-2' ))!!}
 


 		<!--******************************************************************-->
 		{!!Form::label('Pregunta4', '4. Pregunta 4?',array('class' => 'text-white'))!!}
 		<br>
		{!!Form::select('P4', array('N1' => '1', 'N2' => '2','N3' => '3', 'N4' => '4','N5' => '5', 'N6' => '6','N7' => '7', 'N8' => '8','N9' => '9', 'N10' => '10'), 'null', array('class' => 'custom-select mr-sm-2' ))!!}
			
<!--******************************************************************-->
 		{!!Form::label('Pregunta5', '5. Pregunta 5?',array('class' => 'text-white'))!!}
 		<br>
		{!!Form::select('P5', array('N1' => '1', 'N2' => '2','N3' => '3', 'N4' => '4','N5' => '5', 'N6' => '6','N7' => '7', 'N8' => '8','N9' => '9', 'N10' => '10'), 'null', array('class' => 'custom-select mr-sm-2' ))!!}


 		<!--******************************************************************-->
 		{!!Form::label('Pregunta6', '6. Pregunta 6?',array('class' => 'text-white'))!!}
 		<br>
		{!!Form::select('P6', array('N1' => '1', 'N2' => '2','N3' => '3', 'N4' => '4','N5' => '5', 'N6' => '6','N7' => '7', 'N8' => '8','N9' => '9', 'N10' => '10'), 'null', array('class' => 'custom-select mr-sm-2' ))!!}
 	

 		<!--******************************************************************-->
 		{!!Form::label('Pregunta7', '7. Pregunta 7?',array('class' => 'text-white'))!!}
 		<br>
		{!!Form::select('P7', array('N1' => '1', 'N2' => '2','N3' => '3', 'N4' => '4','N5' => '5', 'N6' => '6','N7' => '7', 'N8' => '8','N9' => '9', 'N10' => '10'), 'null', array('class' => 'custom-select mr-sm-2' ))!!} 


 		<!--******************************************************************-->
 		{!!Form::label('Pregunta8', '8. Pregunta 8?',array('class' => 'text-white'))!!}
 		<br>
		{!!Form::select('P8', array('N1' => '1', 'N2' => '2','N3' => '3', 'N4' => '4','N5' => '5', 'N6' => '6','N7' => '7', 'N8' => '8','N9' => '9', 'N10' => '10'), 'null', array('class' => 'custom-select mr-sm-2' ))!!}

		<!--******************************************************************-->
 		{!!Form::label('Pregunta9', '9. Pregunta 9?',array('class' => 'text-white'))!!}
 		<br>
		{!!Form::select('P9', array('N1' => '1', 'N2' => '2','N3' => '3', 'N4' => '4','N5' => '5', 'N6' => '6','N7' => '7', 'N8' => '8','N9' => '9', 'N10' => '10'), 'null', array('class' => 'custom-select mr-sm-2' ))!!}
 

 		<!--******************************************************************-->
 		{!!Form::label('Pregunta10', '10. Pregunta 10?',array('class' => 'text-white'))!!}
 		<br>
		{!!Form::select('P10', array('N1' => '1', 'N2' => '2','N3' => '3', 'N4' => '4','N5' => '5', 'N6' => '6','N7' => '7', 'N8' => '8','N9' => '9', 'N10' => '10'), 'null', array('class' => 'custom-select mr-sm-2' ))!!}

		<br><br><br><br>
 			{!!Form::submit('Evaluar', array('class'=>'btn btn-primary btn-lg btn-block'))!!}
 		</div>
		{!! Form::close() !!}
	</div>
	</div>

@section('content')

@endsection