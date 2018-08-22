@extends('layouts.app')

@section('title', 'Top10General')
<div style="background-image: url(/img/header.jpg); height: 1250px; width: 1400px;">
	<br><br><br><br>


{!! Form::open(['url' => '/teacher_form/evaluate', 'method' => 'post', 'class' => 'form-row align-items-center','onsubmit' => 'return confirm("¿Quiere salir de este reporte?")']) !!}
		<div class="container" type="text" readonly>
		{!! Form::token('tokenN')!!}

			<div class="container">


		<div class="card">
  		<div class="card-header">
    		Top 10 Catedraticos en General
  		</div>
  		<div class="card-body">
    		<h5 class="card-title">Top 10 Catedraticos en General</h5>
  		</div>

		</div>
	<BR><BR>
</div>



@section('content')



@endsection