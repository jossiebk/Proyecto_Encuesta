@extends('layouts.app')


@section('boton')
<li class="nav-item">
<a class="nav-link js-scroll-trigger" href="#">Cerrar Sesion</a>
</li>
@endsection

@section('content')
<div style="background-image: url(img/header.jpg); height: 1250px; width: 1400px;">
<br>
<br>
<br>
<br>
<div><h4> Nombre:  {{ $assistant->user->name }} </h4>  </div>


</div>
@endsection