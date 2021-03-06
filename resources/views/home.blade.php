@extends('layouts.app')

@section('title', 'Pagina de Inicio')

@section('content')
  <header class="masthead text-center text-white d-flex">
     
      <div class="container my-auto">

        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Sistema de evaluaciones para catedraticos y auxiliares</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            @if(Auth::check())
              <p class="mb-5">
                Bienvenido 
                @if (Auth::user()->teacher)
                  profesor
                @elseif (Auth::user()->assistant)
                  auxiliar
                @else
                  estudiante
                @endif
                {{ Auth::user()->name }}
              </p>
            @endif
            <p class="mb-5">Ayudanos a evaluar los aspectos importantes de nuestros docentes!</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#">Boton</a>
          </div>
        </div>
      </div>
    </header>
@endsection