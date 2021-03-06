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
              
              @auth
              <a href="LoadAssistant/{{Auth::user()->assistant->id}}">
                <i class="fa fa-4x fa-user-circle text-secondary mb-3 sr-icons"></i>
                <p class="text-muted mb-0">Cargar Curriculum</p>
              </a>
              @else
              <a href="LoadAssistant/1}">
                <i class="fa fa-4x fa-user-circle text-secondary mb-3 sr-icons"></i>
                <p class="text-muted mb-0">Cargar Curriculum</p>
              </a>
              @endauth
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

          <div class="col-lg-4 col-md-4 text-center">
            <div class="service-box mt-5 mx-auto">
              <a data-toggle="modal" data-target="#ModalEvaluaciones">
                <i class="fa fa-4x fa-align-justify text-secondary mb-3 sr-icons"></i>
                <p class="text-muted mb-0">Mis Evaluaciones</p>
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


<div class="modal fade" id="ModalEvaluaciones" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalEvaluaciones">Resultado de sus evaluaciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
            <div class="placeholder">
              <span class="small">Puntualidad: {{ $rating['puntuality'] }}</span>
            </div> 

            <div class="overlay" >           
                @while($rating['puntuality'] > 0)
                    @if($rating['puntuality'] >= 1)
                        <i class="fas fa-star"></i>
                    @else
                        <i class="fas fa-star-half"></i>
                    @endif
                    @php $rating['puntuality']--; @endphp
                @endwhile
            </div>

            <br>

            <div class="placeholder">
              <span class="small">Dominio de los temas: {{ $rating['knowledge'] }}</span>
            </div> 

            <div class="overlay" >           
                @while($rating['knowledge'] > 0)
                    @if($rating['knowledge'] >= 1)
                        <i class="fas fa-star"></i>
                    @else
                        <i class="fas fa-star-half"></i>
                    @endif
                    @php $rating['knowledge']--; @endphp
                @endwhile
            </div>

            <br>

            <div class="placeholder">
              <span class="small">Presentacion: {{ $rating['presentation'] }}</span>
            </div> 

            <div class="overlay" >           
                @while($rating['presentation'] > 0)
                    @if($rating['presentation'] >= 1)
                        <i class="fas fa-star"></i>
                    @else
                        <i class="fas fa-star-half"></i>
                    @endif
                    @php $rating['presentation']--; @endphp
                @endwhile
            </div>

            <br>

            <div class="placeholder">
              <span class="small">Entrega de notas: {{ $rating['notes'] }}</span>
            </div> 

            <div class="overlay" >           
                @while($rating['notes'] > 0)
                    @if($rating['notes'] >= 1)
                        <i class="fas fa-star"></i>
                    @else
                        <i class="fas fa-star-half"></i>
                    @endif
                    @php $rating['notes']--; @endphp
                @endwhile
            </div>

            <br>

            <div class="placeholder">
              <span class="small">Asistencia: {{ $rating['assistance'] }}</span>
            </div> 

            <div class="overlay" >           
                @while($rating['assistance'] > 0)
                    @if($rating['assistance'] >= 1)
                        <i class="fas fa-star"></i>
                    @else
                        <i class="fas fa-star-half"></i>
                    @endif
                    @php $rating['assistance']--; @endphp
                @endwhile
            </div>
        
      </div>

      <div class="modal-body">
        <div class="service-box"> 
           <p class="text-muted mb-0">Evaluaciones: {{ $rating['reviewsCount'] }}</p>
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>  


@include('blocks.search')

@endsection