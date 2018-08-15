@extends('layouts.app')

@section('title', 'CatedraticoCursos')
<div style="background-image: url(img/header.jpg); height: 1250px; width: 1400px;">
	<br><br><br><br>


{!! Form::open(['url' => '/teacher_form/evaluate', 'method' => 'post', 'class' => 'form-row align-items-center','onsubmit' => 'return confirm("Quieres enviar esta evaluacion?")']) !!}
		<div class="container" type="text" readonly>
		{!! Form::token('tokenN')!!}

			<div class="container">


		<div class="card">
  		<div class="card-header">
    		Listado Cursos Catedratico.
  		</div>
  		<div class="card-body">
    		<h5 class="card-title">Evaluacion de docente</h5>
    		<p class="card-text">Listado Cursos Catedratico.</p>
  		</div>
		</div>
		<BR><BR>
</div>

@section('content')



@endsection