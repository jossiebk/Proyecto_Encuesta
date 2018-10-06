@extends('layouts.app')

@section('title', 'Pagina de Inicio')

<style type="text/css">

  .comentario_size{
  background: #e6e6e6;    
  width: 100%;
    height: 100px;
    opacity: 0.4;
    filter: alpha(opacity=30);    
  }
    .texto_card{
      color: #0000;
  }
</style>


@section('content')

 <header class="masthead text-center text-white d-flex">
     
      <div class="container my-auto">

        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>cargar curriculum</strong>
            </h1>
            


          </div>


        </div>
      </div>
    </header>

    <b><br><br><br>

           <div class="card">
      <div class="card-header">
        Instrucciones:
      </div>
      <br><br>
      <div class="card-body">
        <h5 class="card-title">Informacion del Auxiliar</h5>
        <p class="card-text">Ingrese la informacion que a continuacion se solicita.</p>
      </div>
    </div>
 


    <div class="content"> 
     {!! Form::open(['url' => '/LoadAssistant/save', 'method' => 'post', 'class' => 'form-row align-items-center']) !!}
    <div class="container" type="text" readonly>
    {!! Form::token('tokenL')!!}

      <div class="container">

    <BR><BR>
    <!--******************************************************************-->
    {!!Form::label('L1', 'Fecha de nacimiento')!!}
    <br>
    {{Form::date('birthdate', \Carbon\Carbon::now())}}
    <br>
    <br>

    {!!Form::label('L2', 'Foto de Perfil')!!}
    <br>
    {!!Form::file('image');!!}
    <br>
    <br>

    {!!Form::label('L3', 'Creditos')!!}
    <br>
    {!!Form::number('credits', 0);!!}
    <br>
    <br>

    {!!Form::label('L4', 'Descripcion Personal')!!}
    <br>
    {!!Form::textarea('personal_description',null,array('class' => 'comentario_size'))!!}
    <br>
    <br>

    {!!Form::label('L5', 'Experiencia Academica 1')!!}
    <br>
    {!!Form::textarea('academic_experience_1',null,array('class' => 'comentario_size'))!!}
    <br>
    <br>

    {!!Form::label('L6', 'Experiencia Academica 2')!!}
    <br>
    {!!Form::textarea('academic_experience_2',null,array('class' => 'comentario_size'))!!}
    <br>
    <br>

    {!!Form::label('L7', 'Experiencia Academica 3')!!}
    <br>
    {!!Form::textarea('academic_experience_3',null,array('class' => 'comentario_size'))!!}
    <br>
    <br>

    {!!Form::label('L8', 'Experiencia Laboral 1')!!}
    <br>
    {!!Form::textarea('work_experience_1',null,array('class' => 'comentario_size'))!!}
    <br>
    <br>

    {!!Form::label('L9', 'Experiencia Laboral 2')!!}
    <br>
    {!!Form::textarea('work_experience_2',null,array('class' => 'comentario_size'))!!}
    <br>
    <br>

    {!!Form::label('L10', 'Experiencia Laboral 3')!!}
    <br>
    {!!Form::textarea('work_experience_3',null,array('class' => 'comentario_size'))!!}
    <br>
    <br>

    {!!Form::label('L11', 'Referencias')!!}
    <br>
    {!!Form::textarea('references',null,array('class' => 'comentario_size'))!!}
    <br>
    <br>{!!Form::submit('Guardar', array('class'=>'btn btn-primary btn-lg btn-block'))!!}
    </div>
    {!! Form::close() !!}

</div>

@endsection