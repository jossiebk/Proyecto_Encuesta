@extends('layouts.app')

@section('title', 'Top10General')
<div style="background-image: url(/img/header.jpg); height: 1250px; width: 1400px;">
  <br><br><br><br>

    <div class="container" type="text" readonly>

      <div class="container">


    <div class="card">
      <div class="card-header">
        Top 10 Catedraticos en General
      </div>
      <div class="card-body">
        <h5 class="card-title">Los 10 catedraticos mejor calificados son:</h5>
      </div>
          @if(isset($consulta) && count($consulta) > 0)
            <center>
              <table>
                <tr>
                <th> NAME &nbsp;&nbsp;&nbsp;</th>
                <th> &nbsp; &nbsp; NOTE &nbsp;</th>
                </tr>
                @foreach($consulta as $registro)
                <tr>
                <td>{{ $registro->NAME }} &nbsp; &nbsp; &nbsp;</td>
                <td> &nbsp; &nbsp;{{ $registro->NOTE }}</td>
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