@extends('layouts.app')



@section('content')
  <section class="bg-dark text-white">
    <div class="container text-center">
      <h2 class="mb-4 sr-button">dashboard de auxiliar</h2>
    </div>

    <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 text-center">
            <div class="service-box mt-5 mx-auto">
              
              <a href="#search">
                <i class="fa fa-4x fa-address-card text-secondary mb-3 sr-icons"></i>
                <p class="text-muted mb-0">Buscar catedratico o auxiliar</p>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 text-center">
            <div class="service-box mt-5 mx-auto">
              
              <a href="#">
                <i class="fa fa-4x fa-user-friends text-secondary mb-3 sr-icons"></i>
                <p class="text-muted mb-0">Listar auxiliares</p>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 text-center">
            <div class="service-box mt-5 mx-auto">
              
              <a href="#">
                <i class="fa fa-4x fa-user-graduate text-secondary mb-3 sr-icons"></i>
                <p class="text-muted mb-0">Listar catedraticos</p>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 text-center">
            <div class="service-box mt-5 mx-auto">
              
              <a href="#">
                <i class="fa fa-4x fa-user-circle text-secondary mb-3 sr-icons"></i>
                <p class="text-muted mb-0">Cargar Curriculum</p>
              </a>
            </div>
          </div>

        </div>
      </div>
  </section>

@include('blocks.search')

@endsection