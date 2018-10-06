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

          <div class="col-lg-4 col-md-4 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href="#" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-4x fa-edit text-secondary mb-3 sr-icons"></i>
                <p class="text-muted mb-0">Informacion Academica</p>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href="#" data-toggle="modal" data-target="#exampleModal2">
                <i class="fa fa-4x fa-align-justify text-secondary mb-3 sr-icons"></i>
                <p class="text-muted mb-0">Informacion Laboral</p>
              </a>
            </div>
          </div>

        </div>
      </div>
  </section>

<!-- Modal Edicion Informacion Academica -->
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
        <form method="POST" action="{{ url('/assistantProfile/academic') }}">
          @csrf
          <div class="form-group">
            @auth
              <input type="hidden" class="form-control" name="id" required value="{{ Auth::user()->assistant ?Auth::user()->assistant->id : 1 }}">
            @else
              <input type="hidden" class="form-control" name="id" required value="1">
            @endauth
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Titulo academico 1:</label>
            @auth
              <input type="text" class="form-control" name="academic1" required value="{{Auth::user()->assistant ? Auth::user()->assistant->academic_experience_1 : ''}}">
            @else
              <input type="text" class="form-control" name="academic1" required>
            @endauth
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Titulo academico 2:</label>
            @auth
              <input type="text" class="form-control" name="academic2" required value="{{Auth::user()->assistant ? Auth::user()->assistant->academic_experience_2 : ''}}">
            @else
              <input type="text" class="form-control" name="academic2" required>
            @endauth
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Titulo academico 3:</label>
            @auth
              <input type="text" class="form-control" name="academic3" required value="{{Auth::user()->assistant ? Auth::user()->assistant->academic_experience_3 : ''}}">
            @else
              <input type="text" class="form-control" name="academic3" required>
            @endauth
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

<!-- Modal Edicion Informacion Laboral -->
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
        <form method="POST" action="{{ url('/assistantProfile/work') }}">
          @csrf
          <div class="form-group">
            @auth
              <input type="hidden" class="form-control" name="id" required value="{{ Auth::user()->assistant ? Auth::user()->assistant->id : 1 }}">
            @else
              <input type="hidden" class="form-control" name="id" required value="1">
            @endauth
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Experiencia Laboral 1:</label>
            @auth
              <input type="text" class="form-control" name="work1" required value="{{Auth::user()->assistant ? Auth::user()->assistant->work_experience_1 : ''}}">
            @else
              <input type="text" class="form-control" name="work1" required>
            @endauth
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Experiencia Laboral 2:</label>
            @auth
              <input type="text" class="form-control" name="work2" required value="{{Auth::user()->assistant ? Auth::user()->assistant->work_experience_2 : ''}}">
            @else
              <input type="text" class="form-control" name="work2" required>
            @endauth
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Experiencia Laboral 3:</label>
            @auth
              <input type="text" class="form-control" name="work3" required value="{{Auth::user()->assistant ? Auth::user()->assistant->work_experience_3 : ''}}">
            @else
              <input type="text" class="form-control" name="work3" required>
            @endauth
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
@include('blocks.search')

@endsection