@extends('layouts.app')

@section('title', 'Encuesta Auxiliar')
<div style="background-image: url(img/header.jpg); height: 1550px; width: 1400px;">
<style type="text/css">
  .slider0{
    -webkit-appearance: none;
    width: 100%;
    height: 25px;
    background: #e6e6e6;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
  }
  .slider1{
    -webkit-appearance: none;
    width: 100%;
    height: 25px;
    background: #00cc00;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
  }
  .slider2{
    -webkit-appearance: none;
    width: 100%;
    height: 25px;
    background: #ffff00;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
  }
  .slider3{
    -webkit-appearance: none;
    width: 100%;
    height: 25px;
    background: #cc0000;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
  } 
  .slider0::-webkit-slider-thumb {
    -webkit-appearance: none; /* Override default look */
    appearance: none;
    width: 25px; /* Set a specific slider handle width */
    height: 25px; /* Slider handle height */
    background: #4CAF50; /* Green background */
    cursor: pointer; /* Cursor on hover */
  }   
</style>>


    <br><br><br><br>
    <!-- Formulario de preguntas dedicadas a la evaluacion del catedratico-->

      <div class="container" type="text" readonly>


      <div class="container">


    <div class="card">
      <div class="card-header">
        Instrucciones:
      </div>
      <div class="card-body">
        <h5 class="card-title">Evaluacion de auxiliar</h5>
        <p class="card-text">Responda las preguntas que a continuacion se le presentan. Mueva la barra dependiendo de la su respuesta, siendo el color verde el valor maximo.</p>
      </div>
    </div>
    <BR><BR>
    <form method="post" action="{{ url('/formAux') }}">
    @csrf
    <!--************************PREGUNTA 1******************************************-->
    <p class="text-faded mb-4">1. ¿El auxiliar se presenta puntual a dar laboratorio?</p>
    <br>
    <p class="text-faded mb-4">Malo ---------------------------------------------------------------------------------------- Bueno</p>
    <input type="range" min="0" max="10" value="50" class="slider0" id="R1" onchange="Barra1(this)">
    <br>
    <br>

    <!--***************************PREGUNTA 12***************************************-->
    <p class="text-faded mb-4">2. ¿El auxiliar demuestra su dominio sobre los temas impartidos?</p>
    <br>
    <p class="text-faded mb-4">Malo ---------------------------------------------------------------------------------------- Bueno</p>
    <br>
    <input type="range" min="0" max="10" value="50" class="slider0" id="R2" onchange="Barra1(this)">
    <br>
    <br>

    <!--******************************************************************-->
    <p class="text-faded mb-4">3. ¿El auxiliar se presenta de forma decueda para impartir la clase ?</p>
    <br>
    <p class="text-faded mb-4">Malo ---------------------------------------------------------------------------------------- Bueno</p>
    <br>
    <input type="range" min="0" max="10" value="50" class="slider0" id="R3" onchange="Barra1(this)">
    <br>
    <br>


    <!--******************************************************************-->
    <p class="text-faded mb-4">4. ¿El auxiliar proporciona el material adecuado?<
    <br>
    <p class="text-faded mb-4">Malo ---------------------------------------------------------------------------------------- Bueno</p>
    <br>
    <input type="range" min="0" max="10" value="50" class="slider0" id="R4" onchange="Barra1(this)">
    <br>
    <br>    
<!--******************************************************************-->
    <p class="text-faded mb-4">5. ¿El auxiliar asiste a dar laboratorio todos los dias?</p>
    <br>
    <p class="text-faded mb-4">Malo ---------------------------------------------------------------------------------------- Bueno</p>
    <br>
    <input type="range" min="0" max="10" value="50" class="slider0" id="R5" onchange="Barra1(this)">
    <br>
    <br>

    <p class="text-faded mb-4">6. Realice un comentario sobre el axuiliar.</p>
    <br>
              <textarea rows="4" cols="50" name="comment" placeholder="comentario"></textarea>


    <br><br><br><br>
    <button >Evaluar</button>
    </div>

    </div>

    <script>
//      var Rango1 = document.getElementById("R1");
      function Barra1(Rango){
        console.log(Rango.value);
      if(Rango.value <= 4){
          Rango.className = "slider3"; 
      }else if(Rango.value > 4 && Rango.value <= 7){
          Rango.className = "slider2";
      }else if(Rango.value > 7){
          Rango.className = "slider1";
      }}
          
    </script>
   </form>
  </div>

@section('content')

@endsection