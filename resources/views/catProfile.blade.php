@extends('layouts.app')


@section('title', 'Perfil de Catedratico')
<div style="background-image: url(img/header.jpg); height: 1250px; width: 1600px;">
	
@section('content')
	<br><br><br><br><br><br><br><br>
	<div><h1>perfil de catedratico</h1></div>
	<br><br>
	<div><h4>Nombre: {{ $teacher->user->name }} </h3>  </div>
	<div><h4>Fecha de Nacimiento: {{ $teacher->birthdate }} </h3></div>
	<div><h4>Descripcion:</h3></div>
	<div><h4>titulos:</h3></div>
	<div><h4>Experiencia:</h3></div>
	<div><h4>eferencias:</h3></div>

		<br><br><br>
	<div>
		<table>
			<tr>
				<td><button>Calificar</button></td>
				<td><button>Opinar</button></td>
				<td><button>Cursos</button></td>
			</tr>
		</table>
	</div>

</div>


@endsection




