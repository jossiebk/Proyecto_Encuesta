@extends('layouts.app')


@section('title', 'Perfil de Catedratico')
<div style="background-image: url('/img/header.jpg'); height: 1250px; width: 1600px;>

@section('content')
	<br><br><br><br><br><br>
	<div><h1>perfil de catedratico</h1></div>
	<br><br>
	<div><h4> Nombre:  {{ $teacher->user->name }} </h4>  </div>
	<div><h4> Fecha de Nacimiento: {{ $teacher->birthdate }} </h4></div>
	<div><h4> Descripcion: {{$teacher->personal_description}}</h4></div>
	<div><h4> Titulos: 1. {{$teacher->academic_title_1}}</h4></div>
	<div><h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2. {{$teacher->academic_title_2}}</h4></div>
	<div><h4> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3. {{$teacher->academic_title_3}}</h4></div>
	<div><h4> Experiencia: 1. {{$teacher->work_experience_1}}</h4></div>
	<div><h4>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. {{$teacher->work_experience_1}}</h4></div>
	<div><h4>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. {{$teacher->work_experience_1}}</h4></div>
	<div><h4> Referencias: {{$teacher->references}}</h4></div>

		<br><br><br>
	<div>
		<center>
		<table>
			<tr>
				<td><button style="width:250px; height:40px">Calificar</button></td>
				<td><button style="width:250px; height:40px">Opinar</button></td>
				<td><button style="width:250px; height:40px">Cursos</button></td>
			</tr>
		</table>
	</center>
	</div>

</div>


@endsection




