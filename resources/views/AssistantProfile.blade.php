@extends('layouts.app')

@section('cssextra')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@endsection

@section('boton')
<li class="nav-item">
<a class="nav-link js-scroll-trigger" href="#">Cerrar Sesion</a>
</li>
@endsection

@section('content')
<div style="background-image: url(/img/header.jpg); height: 1250px; width: 1400px;">
<br>
<br>
<br>
<br>
		<br>
    <br>
    <br>
    <br>
    <br>
    <br>
	  <div class="row align-items-center justify-content-center">
          <h1 style="color:white;" class="display-3">{{ $assistant->user->name }}</h1>
      </div>
      <br>
      <br>
      <br>
    <div class="container">
      <table class="w3-table-all">
  
  <tbody>
    <tr class="w3-light-grey w3-hover-red">
      <td colspan="1">Descripcion</td>
      <td colspan="3">{{$assistant->personal_description}}</td>
    </tr>

    <tr class="w3-hover-green">
      <td colspan="1">Cumpleaños</td>
      <td colspan="3">{{$assistant->birthdate}}</td>
    </tr>

    <tr class="w3-hover-blue">
      <td colspan="1">Experiencia academica</td>
      <td>{{$assistant->academic_experience_1}}</td>
      <td>{{$assistant->academic_experience_2}}</td>
      <td>{{$assistant->academic_experience_3}}</td>
    </tr>

    <tr class="w3-hover-black">
      <td colspan="1">Experiencia laboral</td>
      <td>{{$assistant->work_experience_1}}</td>
      <td>{{$assistant->work_experience_2}}</td>
      <td>{{$assistant->work_experience_3}}</td>
    </tr>

    <tr class="w3-hover-brown">
      <td colspan="1">Referencias</td>
      <td colspan="3">{{$assistant->references}}</td>
    </tr>

  </tbody>
</table>


<br>
<div class="row">
  <div class="col-sm-4"><button type="button" class="btn btn-success btn-block"><a  href="{{url('formAux',['id'=>$assistant->id]) }}";>Calificar</a></button></div>


  <div class="col-sm-4"><button type="button" class="btn btn-info btn-block"><a  href="{{url('AuxReview',['id'=>$assistant->id]) }}";>Opinar</a></button></div>
  <div class="col-sm-4"><button type="button" class="btn btn-warning btn-block">Cursos</button></div>

</div>
<br>

<div class="row">
      <div class="col-md-4">
    <button type="button" class="btn btn-info btn-block" data-toggle="modal" data-target="#exampleModal">Editar</button>
  </div>

</div>
    </div>
</div>


<!-- Modal Experiencia academica -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingrese su informacion academica</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ url('/assistantProfile') }}">
          @csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Id de catedratico:</label>
            <input type="number" class="form-control" name="id" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Titulo academico 1:</label>
            <input type="text" class="form-control" name="academic1" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Titulo academico 2:</label>
            <input type="text" class="form-control" name="academic2">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Titulo academico 3:</label>
            <input type="text" class="form-control" name="academic3">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Experiencia Laboral 1:</label>
            <input type="text" class="form-control" name="work1" required>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Experiencia Laboral 2:</label>
            <input type="text" class="form-control" name="work2">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Experiencia Laboral 3:</label>
            <input type="text" class="form-control" name="work3">
          </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection