@extends('layouts.app')

@section('title', 'CatedraticoCursos')
<div style="background-image: url(/img/header.jpg); height: 1250px; width: 1400px;">
	<br><br><br><br>



		<div class="container" type="text" readonly>
			<div class="container">
		<div class="card">
  		<div class="card-header">
    		Listado Cursos Auxiliar.
  		</div>
  		<div class="card-body">
    		<h5 class="card-title">Evaluacion de Auxiliar</h5>
    		<p class="card-text">Listado Cursos Auxiliar</p>
  		</div>

  		@if(isset($consulta) && count($consulta) > 0)
<center>
<h3>Los cursos son:</h3>
<table>
<tr>
<th> ID &nbsp;</th>
<th> CURSO &nbsp;</th>
</tr>
@foreach($consulta as $registro)
<tr>
<td>{{ $registro->ID }}</td>
<td>{{ $registro->CURSO }}</td>
</tr>
@endforeach
</table>
</center>
<BR><BR>
@else
<h3>No se encontró ningún curso</h3>
@endif
		</div>
		<BR><BR>






</div>



@section('content')



@endsection