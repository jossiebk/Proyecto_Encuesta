@extends('layouts.app')



@section('content')


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

         <div class="col-lg-4 col-md-4 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href="#" data-toggle="modal" data-target="#Pestaña1">
                <i class="fa fa-4x fa-file-text text-primary mb-3 sr-icons"></i>
                <p class="mb-3 btn btn-outline-dark">agregar curso</p>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href="#" data-toggle="modal" data-target="#Pestaña2">
                <i class="fa fa-4x fa-user-plus text-primary mb-3 sr-icons"></i>
                <p class="mb-3 btn btn-outline-dark">agregar auxiliar</p>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href="#" data-toggle="modal" data-target="#Pestaña3">
                <i class="fa fa-4x fa-graduation-cap text-primary mb-3 sr-icons"></i>
                <p class="mb-3 btn btn-outline-dark">agregar catedratico</p>
              </a>
            </div>
          </div>


          <div class="col-lg-4 col-md-4 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href="#" data-toggle="modal" data-target="#Pestaña4">
                <i class="fa fa-4x fa-child text-primary mb-3 sr-icons"></i>
                <p class="mb-3 btn btn-outline-dark">agregar estudiante</p>
              </a>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href="#" data-toggle="modal" data-target="#Pestaña5">
                <i class="fa fa-4x fa-edit text-primary mb-3 sr-icons"></i>
                <p class="mb-3 btn btn-outline-dark">modificar curso</p>
              </a>
            </div>
          </div>


          <div class="col-lg-4 col-md-4 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href="#" data-toggle="modal" data-target="#Pestaña6">
                <i class="fa fa-4x fa-id-card text-primary mb-3 sr-icons"></i>
                <p class="mb-3 btn btn-outline-dark">modificar auxiliar</p>
              </a>
            </div>
          </div>
         
          <div class="col-lg-4 col-md-4 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href="#" data-toggle="modal" data-target="#Pestaña7">
                <i class="fa fa-4x fa-remove text-primary mb-3 sr-icons"></i>
                <p class="mb-3 btn btn-outline-dark">eliminar curso</p>
              </a>
            </div>
          </div>

         <div class="col-lg-4 col-md-4 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href="#" data-toggle="modal" data-target="#Pestaña8">
                <i class="fa fa-4x fa-user-times text-primary mb-3 sr-icons"></i>
                <p class="mb-3 btn btn-outline-dark">eliminar catedratico</p>
              </a>
            </div>
          </div>

         <div class="col-lg-4 col-md-4 text-center">
            <div class="service-box mt-5 mx-auto">
              <a href="#" data-toggle="modal" data-target="#Pestaña9">
                <i class="fa fa-4x fa-gavel text-primary mb-3 sr-icons"></i>
                <p class="mb-3 btn btn-outline-dark">eliminar auxiliar</p>
              </a>
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

     {!! Form::open(['url' => '/LoadAssistant/save', 'method' => 'post', 'class' => 'form-row align-items-center']) !!}
    <div class="container" type="text" readonly>
    {!! Form::token('tokenL')!!}

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
    {!! Form::close() !!}

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
      <div class="col-lg-4 col-md-6 textz-center">
        <p> Nombre &nbsp; &nbsp;&nbsp;&nbsp;   <input id="name" type="text" name="name" /></p>
        <p> Correo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<input id="email" type="text" name="email" /></p> 
        <p> Contraseña &nbsp;<input id="pass" type="text" name="pass" /></p> 
        <p> Cumpleaños <input id="birthday" type="text" name="birthday" /></p> 
        <p> Descripción &nbsp;<input id="des" type="text" name="des" /></p>
        <p> Titulo 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="tittle1" type="text" name="tittle1" /></p>
        <p> Titulo 2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="tittle2" type="text" name="tittle2" /></p>
        <p> Titulo 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input id="tittle3" type="text" name="tittle3" /></p>
        <p> Experiencia 1 <input id="ex1" type="text" name="ex1" /></p>
        <p> Experiencia 2 <input id="ex2" type="text" name="ex2" /></p>
        <p> Experiencia 3 <input id="ex3" type="text" name="ex3" /></p>
        <p> Referencia <input id="ref" type="text" name="ref" /></p>
      </div>

       <div class="col-sm-4">
        <a href="" 
          class="btn btn-warning btn-block" 
          role="button" >Guardar</a>
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