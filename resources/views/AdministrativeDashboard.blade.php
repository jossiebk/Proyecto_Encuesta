@extends('layouts.app')

@section('content')

<div style="background-image: url(/img/header.jpg); height: 1250px; width: 1400px;">
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<div class="row align-items-center justify-content-center">
          <h1 style="color:white;" class="display-3">Dashboard administrativo</h1>
      </div>

</div>

	<section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-address-card text-primary mb-3 sr-icons">ti
              </i>
                 <h3 class="mb-3 btn btn-outline-dark" data-toggle="modal" data-target="#Pestaña1">carga de cursos</h3>
                 <button id="carga de cursos" data-toggle="modal" data-target="#Pestaña1">cursos</button>
              <p class="text-muted mb-0"></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-briefcase text-primary mb-3 sr-icons"></i>
    			<h3 class="mb-3 btn btn-outline-dark" data-toggle="modal" data-target="#Pestaña2">cargar auxiliar</h3>

              <p class="text-muted mb-0"></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-balance-scale text-primary mb-3 sr-icons"></i>
 			   <h3 class="mb-3 btn btn-outline-dark" data-toggle="modal" data-target="#Pestaña3">cargar catedratico</h3>
              <p class="text-muted mb-0"></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-user text-primary mb-3 sr-icons"></i>
   				 <h3 class="mb-3 btn btn-outline-dark" data-toggle="modal" data-target="#Pestaña4">cargar estudiante</h3>
              <p class="text-muted mb-0"></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-user text-primary mb-3 sr-icons"></i>
   				     <h3 class="mb-3 btn btn-outline-dark" data-toggle="modal" data-target="#Pestaña5">modificar curso</h3>

              <p class="text-muted mb-0"></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-user text-primary mb-3 sr-icons"></i>
   				     <h3 class="mb-3 btn btn-outline-dark" data-toggle="modal" data-target="#Pestaña6">modificar auxiliar</h3>

              <p class="text-muted mb-0"></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-user text-primary mb-3 sr-icons"></i>
   				      <h3 class="mb-3 btn btn-outline-dark" data-toggle="modal" data-target="#Pestaña7">eliminar curso</h3>

              <p class="text-muted mb-0"></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-user text-primary mb-3 sr-icons"></i>
                <h3 class="mb-3 btn btn-outline-dark" data-toggle="modal" data-target="#Pestaña8">eliminar catedratico</h3>


              <p class="text-muted mb-0"></p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-user text-primary mb-3 sr-icons"></i>
                 <h3 class="mb-3 btn btn-outline-dark" data-toggle="modal" data-target="#Pestaña9">eliminar auxiliar</h3>

              <p class="text-muted mb-0"></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Modal Agragar curso -->
<div class="modal fade" id="Pestaña1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ingrese informacion del curso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>

    <!-- Modal Agragar curso -->
<div class="modal fade" id="Pestaña2" tabindex="-1" role="dialog" aria-labelledby="exampleModa2Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModa2Label">Ingrese informacion para el auxiliar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>

    <!-- Modal Agragar curso -->
<div class="modal fade" id="Pestaña3" tabindex="-1" role="dialog" aria-labelledby="exampleModa3Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModa3Label">Ingrese informacion para el catedratico</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>

    <!-- Modal Agragar curso -->
<div class="modal fade" id="Pestaña4" tabindex="-1" role="dialog" aria-labelledby="exampleModa4Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModa4Label">Ingrese informacion para el estudiante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>

    <!-- Modal Agragar curso -->
<div class="modal fade" id="Pestaña5" tabindex="-1" role="dialog" aria-labelledby="exampleModa5Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModa5Label">Ingrese informacion para el curso a modificar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>

    <!-- Modal Agragar curso -->
<div class="modal fade" id="Pestaña6" tabindex="-1" role="dialog" aria-labelledby="exampleModa6Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModa6Label">Ingrese informacion para el auxiliar a modificar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>

    <!-- Modal Agragar curso -->
<div class="modal fade" id="Pestaña7" tabindex="-1" role="dialog" aria-labelledby="exampleModa7Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModa7Label">Elija el curso a eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>

    <!-- Modal Agragar curso -->
<div class="modal fade" id="Pestaña8" tabindex="-1" role="dialog" aria-labelledby="exampleModa8Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModa8Label">Elija el catedratico a eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>

    <!-- Modal Agragar curso -->
<div class="modal fade" id="Pestaña9" tabindex="-1" role="dialog" aria-labelledby="exampleModa9Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModa9Label">Elija el auxiliar a eliminar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
  </div>
</div>
@endsection