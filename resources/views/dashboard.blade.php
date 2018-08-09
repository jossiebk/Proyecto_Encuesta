@extends('layouts.app')


@section('content')

<section class="p-0" id="top">
  

</section>


  <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="{{ url('/') }}">
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

          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="">
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

          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Buscar
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>

          
        </div>
      </div>
    </section>
@endsection