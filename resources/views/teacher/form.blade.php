@extends('layouts.app')

@section('title', 'Encuesta Profesor')
	<header class="masthead text-center text-white">
		<br><br><br><br><br><br><br><br>

		<br><br>
		{!! Form::open(['url' => '/teacher_form/calculate']) !!}
 			{!!Form::label('Pregunta1', '1. Pregunta 1?')!!}
 			<br>
 			{!!Form::number('P1', '10', ['max'=> 10, 'min'=>0])!!}
 			<br><br>
 			{!!Form::label('Pregunta2', '2. Pregunta 2?')!!}
 			<br>
 			{!!Form::number('P2', '10', ['max'=> 10, 'min'=>0])!!}
 			<br><br>
 			{!!Form::label('Pregunta3', '3. Pregunta 3?')!!}
 			<br>
 			{!!Form::number('P3', '10', ['max'=> 10, 'min'=>0])!!}
 			<br><br>
 			{!!Form::label('Pregunta4', '4. Pregunta 4?')!!}
 			<br>
 			{!!Form::number('P4', '10', ['max'=> 10, 'min'=>0])!!}
 			<br><br>
 			{!!Form::label('Pregunta5', '5. Pregunta 5?')!!}
 			<br>
 			{!!Form::number('P5', '10', ['max'=> 10, 'min'=>0])!!}
 			<br><br>
 			{!!Form::label('Pregunta6', '6. Pregunta 6?')!!}
 			<br>
 			{!!Form::number('P6', '10', ['max'=> 10, 'min'=>0])!!} 
 			<br><br>	
 			{!!Form::label('Pregunta7', '7. Pregunta 7?')!!}
 			<br>
 			{!!Form::number('P7', '10', ['max'=> 10, 'min'=>0])!!}
 			<br><br>
 			{!!Form::label('Pregunta8', '8. Pregunta 8?')!!}
 			<br>
 			{!!Form::number('P8', '10', ['max'=> 10, 'min'=>0])!!}
 			<br><br>
 			{!!Form::label('Pregunta9', '9. Pregunta 9?')!!}
 			<br>
 			{!!Form::number('P9', '10', ['max'=> 10, 'min'=>0])!!}
 			<br><br>
 			{!!Form::label('Pregunta10', '10. Pregunta 10?')!!}
 			<br>
 			{!!Form::number('P10', '10', ['max'=> 10, 'min'=>0])!!} 	 					 			 	
 			<br><br>
 			<br><br>
 			{!!Form::label('Opinion1', 'Opinion 1.')!!}
 			<br><br>
 			{!!Form::textarea('O1', null, ['rows' => 5, 'cols' => 30,'style' => 'resize:none'])!!}
 			<br>
 			{!!Form::submit('Evaluar')!!}
		{!! Form::close() !!}

	</header>

@section('content')

@endsection