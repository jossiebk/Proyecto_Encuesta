@extends('layouts.app')

@section('title', 'Resultados de busqueda')

@section('content')
	<section class="bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Resultados de Reporte</h2>
            <br>
            <h3 class="section-heading">Top 10 Catedraticos de Escuela: {{$users->escuela}}</h3>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <?php $indice =0; ?>
          @forelse($users as $user)
          	@if($user->name != null )
          	<?php $indice++; ?>
	          <div class="container">
	            <div class="service-box mt-5 mx-auto">
	              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
	              <h3 class="mb-3"><a href="{{ url('/perCat/'.$user->id) }}"> {{$indice.'. ' . $user->name}}</a></h3>
	              	<p class="text-muted mb-0"> Catedratico </p>
    		        <p class="text-muted mb-0">Promedio: {{ $user->total}}/50 </p>
	              </a>
	            </div>
	          </div>
          	@endif
             @empty
	          <div class="container">
	            <div class="service-box mt-5 mx-auto">
	              <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
		  	              <h3 class="mb-3">Reporte No Generado</h3>
	              <p class="text-muted mb-0">Faltan datos para realizar el reporte </p>
	            </div>
	          </div>
          @endforelse
        </div>
      </div>
    </section>

@endsection('content')