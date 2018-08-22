@extends('layouts.app')


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
		
	  <div class="row align-items-center justify-content-center">
          <h1 style="color:white;" class="display-4">{{ $assistant->user->name }}</h1>
      </div>


</div>
@endsection