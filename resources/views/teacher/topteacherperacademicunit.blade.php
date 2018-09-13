
@extends('layouts.app')

@section('title', 'Encuesta Profesor')

<div style="background-image: url('/img/header.jpg'); height: 1250px; width: 1600px;">


@section('content')
		<br><br><br><br><br><br><br>
      <div class="container text-center">
        <h2 class="section-heading text-white">TOP 10 CATEDRATICOS POR UNIDAD ACADEMICA</h2>
        <hr class="light my-4">
         <p class="text-faded mb-4">Seleccione el nombre de la Unidad Academica desee consultar</p>
        <form method="GET" action="{{ url('/Generate_Top') }}">
          @csrf
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Unidad Academica:</span>
            </div>
				<select class="form-control form-control-lg" name="school_name">

				</select>
			</div>
			
				<br>
				<br>
          <input class="btn btn-light btn-xl" type="submit" value="Buscar!"></input>
        </form>
		</div>
		</div>
@endsection