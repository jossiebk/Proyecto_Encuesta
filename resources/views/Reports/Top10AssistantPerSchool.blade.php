@extends('layouts.app')

@section('title', 'Top10 Auxiliares por Escuela')
<div style="background-image: url(/img/header.jpg); height: 1250px; width: 1400px;">
  <br><br><br><br>

    <div class="container" type="text" readonly>

      <div class="container">


    <div class="card">
      <div class="card-header">
        Top 10 Auxiliares por Escuela
      </div>
      <div class="card-body">
        <h5 class="card-title">Los 10 auxiliares por escuela mejor calificados son:</h5>
      </div>

        <form method="GET" action="{{ url('/Top10AssistantPerSchool/Top_Generado') }}">
          @csrf
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Escuela:</span>
            </div>
        <select class="form-control form-control-lg" name="school_name">
                @if($escuelas !=null)
      @forelse($escuelas as $esc)
            @if($esc->name != null )
            
        <option>{{ $esc->name}} </option>
            @endif
             @empty
        <option>Escuelas no encontradas</option>>
            @endforelse
      </select>
      @endif
 
          </div>
          <input class="btn btn-light btn-xl" type="submit" value="Buscar!"></input>
        </form>



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