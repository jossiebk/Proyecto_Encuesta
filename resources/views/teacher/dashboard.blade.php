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
          	@if(session('alert'))
        		<div class="alert alert-danger" role="alert">
				  {{ session('alert') }}
				</div>
        	@endif
        	@if(session('message'))
        		<div class="alert alert-success" role="alert">
				  {{ session('message') }}
				</div>
        	@endif
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
              <h3 class="mb-3 btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">Informacion Academica</h3>
              <p class="text-muted mb-0">Ingresa los ultimos 3 titulos obtenidos.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-briefcase text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3 btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal2">Experiencia Laboral</h3>
              <p class="text-muted mb-0">Cuentanos sobre tus ultimas experiencas laborales.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-balance-scale text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3 btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">Mis Evaluaciones</h3>
              <p class="text-muted mb-0">Resumen de las valoraciones de los usuarios.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-github-square text-primary mb-3 sr-icons"></i>
              <h3 class="mb-3 btn btn-outline-dark" data-toggle="modal" data-target="#exampleModal">Referencia Personal</h3>
              <p class="text-muted mb-0">Ingresa la direccion de tu pagina web o repositorio personal.</p>
            </div>
          </div>
        </div>
      </div>
    </section>


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
        <form method="POST" action="{{ url('/teacher/dashboard/titles') }}">
        	@csrf
        	<div class="form-group">
		        <label for="recipient-name" class="col-form-label">Id de catedratico:</label>
		        <input type="number" class="form-control" name="id" required>
	        </div>
        	<div class="form-group">
		        <label for="recipient-name" class="col-form-label">Titulo academico 1:</label>
		        <input type="text" class="form-control" name="title1" required>
	        </div>
	        <div class="form-group">
		        <label for="recipient-name" class="col-form-label">Titulo academico 2:</label>
		        <input type="text" class="form-control" name="title2">
	        </div>
	        <div class="form-group">
		        <label for="recipient-name" class="col-form-label">Titulo academico 3:</label>
		        <input type="text" class="form-control" name="title3">
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

<!-- Modal Experiencia laboral -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingrese su informacion laboral</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ url('/teacher/dashboard/works') }}">
        	@csrf
        	<div class="form-group">
		        <label for="recipient-name" class="col-form-label">Id de catedratico:</label>
		        <input type="number" class="form-control" name="id" required>
	        </div>
        	<div class="form-group">
		        <label for="recipient-name" class="col-form-label">Puesto en ultimo empleo:</label>
		        <input type="text" class="form-control" name="work1" required>
	        </div>
	        <div class="form-group">
		        <label for="recipient-name" class="col-form-label">Puesto en penultimo empleo:</label>
		        <input type="text" class="form-control" name="work2">
	        </div>
	        <div class="form-group">
		        <label for="recipient-name" class="col-form-label">Puesto en antepenultimo empleo:</label>
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
</div
@endsection