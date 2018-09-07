@extends('layouts.app')


@section('boton')
<li class="nav-item">
<a class="nav-link js-scroll-trigger" href="#">Cerrar Sesion</a>
</li>
@endsection


@section('content')
  <section class="bg-dark text-white">
    <div class="container text-center">
      <h2 class="mb-4 sr-button">Dashboard Estudiantes</h2>
    </div>
  </section>

@include('blocks.search')

@endsection