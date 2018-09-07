@extends('layouts.app')

@section('title', 'Encuesta Profesor')

<div style="background-image: url('/img/header.jpg'); height: 1250px; width: 1600px;">


@section('content')
		<br><br><br><br><br><br><br>
      <div class="container text-center">
        <h2 class="section-heading text-white">TOP 10 CATEDRATICOS POR ESCUELA</h2>
        <hr class="light my-4">
        <p class="text-faded mb-4">Ingrese el nombre de la escuela que desee consultar</p>
        <form method="GET" action="{{ url('/search') }}">
          @csrf
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Nombre:</span>
            </div>
            <input type="text" class="form-control" placeholder="Escuela a buscar..." aria-label="Nombre a buscar..." aria-describedby="basic-addon1" name="school_name">
          </div>
          @if ($errors->any())
            <div >
                <ul style="list-style-type:none">
                    @foreach ($errors->all() as $error)
                        <li><p class="section-heading h4">{{ $error }}</p></li>
                    @endforeach
                </ul>
            </div>
          @endif
          <input class="btn btn-light btn-xl" type="submit" value="Buscar!"></input>
        </form>
		</div>
		</div>
@endsection