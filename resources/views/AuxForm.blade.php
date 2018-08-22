@extends('layouts.app')

@section('title', 'Encuesta Auxiliar')
<div style="background-image: url(img/header.jpg); height: 1550px; width: 1400px;">
<style type="text/css">
  .slider{
    -webkit-appearance: none;
    width: 100%;
    height: 25px;
    background: #e6e6e6;
    outline: none;
    opacity: 0.4;
    filter: alpha(opacity=30);
    -webkit-transition: .2s;
    transition: opacity .2s;
  }
  .slider::-webkit-slider-thumb {
    -webkit-appearance: none; 
    appearance: none;
    width: 15px; 
    height: 35px; 
    background: #b3b3b3; 
    cursor: pointer; 
  }   
  .valores {
    font-size: 0.75em;
  } 
  .comentario_size{
  background: #e6e6e6;    
  width: 100%;
    height: 100px;
    opacity: 0.4;
    filter: alpha(opacity=30);    
  }
  .comentario_seze::texto{
      color: #ffffff;
  }
</style>


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
    <input type="range" min="0" max="10" value="5" class="slider" name="p1" id="R1" onchange="Barra1(this,'Lab1')" >
    <label id="Lab1" , class="text-white valores"></label>
    <br>
    <br>

    <!--***************************PREGUNTA 12***************************************-->
    <p class="text-faded mb-4">2. ¿El auxiliar demuestra su dominio sobre los temas impartidos?</p>
    <br>
    <p class="text-faded mb-4">Malo ---------------------------------------------------------------------------------------- Bueno</p>
    <br>
    <input type="range" min="0" max="10" value="5" class="slider" name="p2" id="R2" onchange="Barra1(this,'Lab2')">
    <label id="Lab2" , class="text-white valores"></label>
    <br>
    <br>

    <!--******************************************************************-->
    <p class="text-faded mb-4">3. ¿El auxiliar se presenta de forma decueda para impartir la clase ?</p>
    <br>
    <p class="text-faded mb-4">Malo ---------------------------------------------------------------------------------------- Bueno</p>
    <br>
    <input type="range" min="0" max="10" value="5" class="slider" name="p3" id="R3" onchange="Barra1(this,'Lab3')">
    <label id="Lab3" , class="text-white valores"></label>
    <br>
    <br>


    <!--******************************************************************-->
    <p class="text-faded mb-4">4. ¿El auxiliar proporciona el material adecuado?<
    <br>
    <p class="text-faded mb-4">Malo ---------------------------------------------------------------------------------------- Bueno</p>
    <br>
    <input type="range" min="0" max="10" value="5" class="slider" name="p4" id="R4" onchange="Barra1(this,'Lab4')">
    <label id="Lab4" , class="text-white valores"></label>
    <br>
    <br>    
<!--******************************************************************-->
    <p class="text-faded mb-4">5. ¿El auxiliar asiste a dar laboratorio todos los dias?</p>
    <br>
    <p class="text-faded mb-4">Malo ---------------------------------------------------------------------------------------- Bueno</p>
    <br>
    <input type="range" min="0" max="10" value="5" class="slider" name="p5" id="R5" onchange="Barra1(this,'Lab5')">
    <label id="Lab5" , class="text-white valores"></label>
    <br>
    <br>

    <p class="text-faded mb-4">6. Realice un comentario sobre el axuiliar.</p>
    <br>
              <textarea rows="4" cols="50" name="comment" placeholder="comentario"></textarea>


    <br><br><br><br>
    <hr>
              
              <input type="number" name="id_user_evaluator">
              <br>
              <input type="number" name="id_user_evaluated">
              <br>
              <input type="number" name="id_course">
              <br>
    <button >Evaluar</button>
    <script>
  //      var Rango1 = document.getElementById("R1");
        function Barra1(Rango,Etiqueta){
          console.log(Rango.value);
          console.log(Etiqueta);
          document.getElementById(Etiqueta).innerHTML ='(' + Rango.value + ')';
          var Valor = Rango.value;
        switch(Valor){
          case '0':
            Rango.style.backgroundColor ="#e60000";
            break;
          case '1':
            Rango.style.backgroundColor ="#ff4000";
            break;
          case '2':
            Rango.style.backgroundColor ="#ff8000";
            break;
          case '3':
            Rango.style.backgroundColor ="#ffbf00";
            break;
          case '4':
            Rango.style.backgroundColor ="#ffff00";
            break;
          case '5':
            Rango.style.backgroundColor ="#bfff00";
            break;
          case '6':
            Rango.style.backgroundColor ="#80ff00";
            break;
          case '7':
            Rango.style.backgroundColor ="#40ff00";
            break;
          case '8':
            Rango.style.backgroundColor ="#00ff00";
            break;    
          case '9':
            Rango.style.backgroundColor ="#00ff40";
            break;        
          case '10':
            Rango.style.backgroundColor = "#00cc33";
            break; 
          default:
            Rango.className = "slider";
            break;
        }}    
      </script>
     </form>
  </div>
@section('content')
@endsection