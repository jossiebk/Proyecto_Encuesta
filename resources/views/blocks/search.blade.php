<section class="bg-primary" id="search">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="section-heading text-white">Busqueda de Catedraticos y Auxiliares</h2>
        <hr class="light my-4">
        <p class="text-faded mb-4">Ingresa el nombre del catedratico o auxiliar que desees buscar</p>
        <form method="GET" action="{{ url('/search') }}">
          @csrf
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">@</span>
            </div>
            <input type="text" class="form-control" placeholder="Nombre a buscar..." aria-label="Nombre a buscar..." aria-describedby="basic-addon1" name="user_name">
          </div>
          @if ($errors->any())
            <div >
                <ul style="list-style-type:none">
                    @foreach ($errors->all() as $error)
                        <li><p class="section-heading h4">{{ $error }}</p></li>
                    @endforeach
                </ul>
            </div>
          @endif
          <input class="btn btn-light btn-xl" type="submit" value="Buscar!"></input>
        </form>
      </div>
    </div>    
  </div>
</section>