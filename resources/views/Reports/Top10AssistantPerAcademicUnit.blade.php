@extends('layouts.app')

@section('title', 'Top10 Auxiliares por Unidad Academica')
<div style="background-image: url(/img/header.jpg); height: 1250px; width: 1400px;">
  <br><br><br><br>

    <div class="container" type="text" readonly>

      <div class="container">


    <div class="card">
      <div class="card-header">
        Top 10 Auxiliares por Unidad Academica
      </div>
      <div class="card-body">
        <h5 class="card-title">Los 10 auxiliares por unidad academica mejor calificados son:</h5>
      </div>

        <form method="GET" action="{{ url('') }}">
 
          </div>
          <input class="btn btn-light btn-xl" type="submit" value="Buscar!"></input>
        </form>
    </div>
  <BR><BR>
</div>
  


@section('content')

@endsection