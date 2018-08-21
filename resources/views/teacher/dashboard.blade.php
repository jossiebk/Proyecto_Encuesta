@extends('layouts.app')

@section('title', 'Dashboard Catedratico')

@section('content')
	<section class="bg-dark text-white">
		<div class="container text-center">
			<h2 class="mb-4 sr-button">Bienvenido al Dashboard de Catedraticos!</h2>
			<a class="btn btn-light btn-xl sr-button js-scroll-trigger" href="#services">Explorar</a>
		</div>
	</section>

	<section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading sr-icons">Selecciona una opcion.</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-address-card text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Informacion Academica</h3>
              <p class="text-muted mb-0">Ingresa los ultimos 3 titulos obtenidos.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-briefcase text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Experiencia Laboral</h3>
              <p class="text-muted mb-0">Cuentanos sobre tus ultimas experiencas laborales.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-balance-scale text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Resultados de mis Evaluaciones</h3>
              <p class="text-muted mb-0">Resumen de las valoraciones de los usuarios.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-github-square text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3">Referencia Personal</h3>
              <p class="text-muted mb-0">Ingresa la direccion de tu pagina web o repositorio personal.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection