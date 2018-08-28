@extends('layouts.app')

@section('title', 'Encuesta Profesor')

<div style="background-image: url('/img/header.jpg'); height: 1250px; width: 1600px;">

<style type="text/css">
	.slider{
    -webkit-appearance: none;
    width: 100%;
    height: 25px;
    background: #e6e6e6;
    outline: none;
    opacity: 0.4;
    filter: alpha(opacity=30);
    -webkit-transition: .2s;
    transition: opacity .2s;
	}
	.slider::-webkit-slider-thumb {
    -webkit-appearance: none; 
    appearance: none;
    width: 15px; 
    height: 35px; 
    background: #b3b3b3; 
    cursor: pointer; 
	}		
	.valores {
    font-size: 0.75em;
	}	
	.comentario_size{
	background: #e6e6e6;		
	width: 100%;
    height: 100px;
    opacity: 0.4;
    filter: alpha(opacity=30);    
	}
	.comentario_seze::texto{
	    color: #ffffff;
	}
</style>



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
    		<p class="card-text">Responda las preguntas que a continuacion se le presentan. Seleccione una posicion en la 
    		barra,  siendo rojo para malo y verde para exelente..</p>
  		</div>
		</div>
		<BR><BR>
 		<!--******************************************************************-->
 		{!!Form::label('Pregunta1', '1. El catedratico cumple con el horario establecido?' ,array('class' => 'text-white'))!!}
 		<br>
 		<input type="range" min="0" max="10" value="5" class="slider" name="R1" id="R1" onchange="Barra1(this,'Lab1')" >
 		<label id="Lab1" , class="text-white valores"></label>
 		<br>
 		<br>
 		<!--******************************************************************-->
 		{!!Form::label('Pregunta2', '2. El catedratico demuestra su dominio sobre los temas impartidos?',array('class' => 'text-white'))!!}
 		<br>
 		<input type="range" min="0" max="10" value="5" class="slider" name="R2" id="R2" onchange="Barra1(this,'Lab2')">
		<label id="Lab2" , class="text-white valores"></label>
 		<br>
 	 	<br>
 		<!--******************************************************************-->
 		{!!Form::label('Pregunta3', '3.La presentacion personal del catedratico es la adecuada?',array('class' => 'text-white'))!!}
 		<br>
 		<input type="range" min="0" max="10" value="5" class="slider" name="R3" id="R3" onchange="Barra1(this,'Lab3')">
		<label id="Lab3" , class="text-white valores"></label>
 		<br>
  		<br>
 		<!--******************************************************************-->
 		{!!Form::label('Pregunta4', '4. El catedratico entrega notas en las fecha establecida?',array('class' => 'text-white'))!!}
 		<br>
 		<input type="range" min="0" max="10" value="5" class="slider" name="R4" id="R4" onchange="Barra1(this,'Lab4')">
		<label id="Lab4" , class="text-white valores"></label>
 		<br> 		
		<!--******************************************************************-->
 		{!!Form::label('Pregunta5', '5. El catedratico asiste al curso los dias establecidos?',array('class' => 'text-white'))!!}
 		<br>
 		<input type="range" min="0" max="10" value="5" class="slider" name="R5" id="R5" onchange="Barra1(this,'Lab5')">
		<label id="Lab5" , class="text-white valores"></label>
 		<br>
 		<br>

 		{!!Form::label('Comentario', 'Agregue un comentario (Opcional).',array('class' => 'text-white'))!!}
 		<br>
		{!!Form::textarea('comment',null,array('class' => 'comentario_size'))!!}


		<br><br><br><br>
 			{!!Form::submit('Evaluar', array('class'=>'btn btn-primary btn-lg btn-block'))!!}
 		</div>
		{!! Form::close() !!}
		</div>

 		<script>
// 			var Rango1 = document.getElementById("R1");
 			function Barra1(Rango,Etiqueta){
 				console.log(Rango.value);
 				console.log(Etiqueta);
 				document.getElementById(Etiqueta).innerHTML ='(' + Rango.value + ')';
 				var Valor = Rango.value;
 			switch(Valor){
 				case '0':
 					Rango.style.backgroundColor ="#e60000";
 					break;
 				case '1':
 					Rango.style.backgroundColor ="#ff4000";
 					break;
 				case '2':
 					Rango.style.backgroundColor ="#ff8000";
 					break;
 				case '3':
 					Rango.style.backgroundColor ="#ffbf00";
 					break;
 				case '4':
 					Rango.style.backgroundColor ="#ffff00";
 					break;
 				case '5':
 					Rango.style.backgroundColor ="#bfff00";
 					break;
 				case '6':
 					Rango.style.backgroundColor ="#80ff00";
 					break;
 				case '7':
 					Rango.style.backgroundColor ="#40ff00";
 					break;
 				case '8':
 					Rango.style.backgroundColor ="#00ff00";
 					break; 		
				case '9':
 					Rango.style.backgroundColor ="#00ff40";
 					break;				
				case '10':
 					Rango.style.backgroundColor = "#00cc33";
 					break; 
 				default:
 					Rango.className = "slider";
 					break;
 			}}		
 		</script>
	</div>

@section('content')

@endsection