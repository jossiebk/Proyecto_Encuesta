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
<div class="row align-items-center justify-content-center">
          <h1 style="color:white;" class="display-3">Perfil de catedratico</h1>
      </div>
    <br>

	  <div class="row align-items-center justify-content-center">
          <h1 style="color:white;" class="display-3">{{ $teacher->user->name }}</h1>
      </div>
      <br>
      <br>
      <br>
    <div class="container">
      <table class="w3-table-all">
  
  <tbody>
    <tr class="w3-light-grey w3-hover-red">
      <td colspan="1">Descripcion</td>
      <td colspan="3">{{$teacher->personal_description}}</td>
    </tr>

    <tr class="w3-hover-green">
      <td colspan="1">Cumpleaños</td>
      <td colspan="3">{{$teacher->birthdate}}</td>
    </tr>

    <tr class="w3-hover-blue">
      <td colspan="1">Titulos</td>
      <td>{{$teacher->academic_title_1}}</td>
      <td>{{$teacher->academic_title_2}}</td>
      <td>{{$teacher->academic_title_3}}</td>
    </tr>

    <tr class="w3-hover-black">
      <td colspan="1">Experiencia laboral</td>
      <td>{{$teacher->work_experience_1}}</td>
      <td>{{$teacher->work_experience_2}}</td>
      <td>{{$teacher->work_experience_3}}</td>
    </tr>

    <tr class="w3-hover-brown">
      <td colspan="1">Referencias</td>
      <td colspan="3">{{$teacher->references}}</td>
    </tr>

  </tbody>
</table>


<br>
<div class="row">


 <div class="col-sm-4">
 <a href="{{url('teacher_form',['id'=>$teacher->id]) }}" 
 	class="btn btn-success btn-block" 
 	role="button" >Encuesta</a>
 </div>


<div class="col-sm-4">
 <a href="{{url('teacherReview',['id'=>$teacher->id]) }}" 
 	class="btn btn-info btn-block" 
 	role="button" >Opinar</a>
 </div>

<div class="col-sm-4">
 <a href="{{url('ProfileCourse',['id'=>$teacher->id]) }}" 
 	class="btn btn-warning btn-block" 
 	role="button" >Cursos</a>
 </div>

<br> <br>
 <div class="col-sm-4">
 <a href="{{url('/teacher/ProfessorResult',['id'=>$teacher->id]) }}" 
  class="btn btn-warning btn-block" 
  role="button" >Ver Notas</a>
 </div>

</div>
</div>
</div>
@endsection




