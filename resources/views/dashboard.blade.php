@extends('layouts.app')


@section('boton')
<li class="nav-item">
<a class="nav-link js-scroll-trigger" href="#">Cerrar Sesion</a>
</li>
@endsection


@section('content')
<div style="background-image: url(img/header.jpg); height: 1250px; width: 1400px;">

        


      <div class="row align-items-center justify-content-center">
          <h1 style="color:transparent;" class="display-1">e</h1>
      </div>
      <div class="row align-items-center justify-content-center">
          <h1 style="color:white;" class="display-4">Bienvenido</h1>
      </div>

       <div class="row align-items-center justify-content-center">
          <div class="col-lg-4 col-sm-6 ">
            <a class="portfolio-box nav-link js-scroll-trigger" href="#search">
              <img class="img-fluid" src="img/buscar.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Buscar
                  </div>
                  <div class="project-name">
                    Busca algun catedratico o auxiliar
                  </div>
                </div>
              </div>
            </a>
          </div>
     </div>
     
      <br>

      <div class="row align-items-center justify-content-center">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="#">
              <img class="img-fluid" src="img/taux.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Auxiliares
                  </div>
                  <div class="project-name">
                    Ver el listado de auxiliares de catedra
                  </div>
                </div>
              </div>
            </a>
          </div>
      </div>
      
      <br>

<div class="row align-items-center justify-content-center">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="#">
              <img class="img-fluid" src="img/teachers.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Catedraticos
                  </div>
                  <div class="project-name">
                    Ver el listado de catedraticos
                  </div>
                </div>
              </div>
            </a>
          </div>
      </div>

     <br>

     @include('blocks.search')

 </div>
@endsection