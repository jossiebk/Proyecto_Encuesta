@extends('layouts.app')

@section('title', 'Top 10 Auxiliares por Unidad Academica')
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

          @if(isset($consulta) && count($consulta) > 0)
            <center>
              <table>
                <tr>
                <th> NAME &nbsp;&nbsp;&nbsp;</th>
                <th> &nbsp; &nbsp; NOTE &nbsp;</th>
                <th> &nbsp; &nbsp; &nbsp; &nbsp; COURSE &nbsp;</th>
                </tr>
                @foreach($consulta as $registro)
                <tr>
                <td>{{ $registro->NAME }} &nbsp; &nbsp; &nbsp;</td>
                <td> &nbsp; &nbsp;{{ $registro->NOTE }}</td>
                <td> &nbsp; &nbsp; &nbsp; &nbsp;{{ $registro->COURSE }}</td>
                </tr>
                @endforeach
              </table>
            </center>
          @endif
       <BR><BR>
    </div>
  <BR><BR>
</div>
  


@section('content')



@endsection