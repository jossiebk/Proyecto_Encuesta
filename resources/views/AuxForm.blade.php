@extends('layouts.app')

@section('title', 'Evaluacion Auxiliar')

@section('content')
    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong> Evaluación Auxiliar</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">A continuación se le presentan una serie de preguntas que debe responder
            según su criterio.</p>
          </div>
        </div>
      </div>
    </header>
   <section class="bg-primary" id="about">
     <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <form method="post" action="{{ url('/formAux') }}">
              @csrf
              <hr>
              <p class="text-faded mb-4">1. ¿Se presenta puntual a dar laboratorio?</p>
              <br>
              <select class="btn btn-light btn-xl js-scroll-trigger" name="p1" style="width: 500px ">
                <option value="1">1</option> 
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option> 
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option> 
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
              <hr>
              <p class="text-faded mb-4">2. ¿conocimiento?</p>
              <br>
              <select class="btn btn-light btn-xl js-scroll-trigger" name="p2" style="width: 500px ">
                <option value="1">1</option> 
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option> 
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option> 
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
              <hr>
              <p class="text-faded mb-4">3. ¿Su presentacion es la adecuada?</p>
              <br>
              <select class="btn btn-light btn-xl js-scroll-trigger" name="p3" style="width: 500px ">
                <option value="1">1</option> 
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option> 
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option> 
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
              <hr>
              <p class="text-faded mb-4">4. ¿Proporciona el material adecuado?</p>
              <br>
              <select class="btn btn-light btn-xl js-scroll-trigger" name="p4" style="width: 450px ">
                <option value="1">1</option> 
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option> 
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option> 
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
              <hr>
              <p class="text-faded mb-4">5. ¿Asiste a dar laboratorio todos los dias?</p>
              <br>
              <select class="btn btn-light btn-xl js-scroll-trigger" name="p5" style="width: 450px ">
                <option value="1">1</option> 
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option> 
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option> 
                <option value="9">9</option>
                <option value="10">10</option>
              </select>
              <hr>
              <p class="text-faded mb-4">6. Realice un comentario sobre el axuiliar.</p>
              <br>
              <textarea rows="4" cols="50" name="p6" placeholder="comentario"></textarea>
              <br>
              <input type="number" name="id_user_evaluator">
              <br>
              <input type="number" name="id_user_evaluated">
              <br>
              <input type="number" name="id_course">
              <br>
              <button >Evaluar</button>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection