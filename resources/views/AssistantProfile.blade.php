@extends('layouts.app')


@section('boton')
<li class="nav-item">
<a class="nav-link js-scroll-trigger" href="#">Cerrar Sesion</a>
</li>
@endsection

@section('content')
<div style="background-image: url(/img/header.jpg); height: 1250px; width: 1400px;">
<br>
<br>
<br>
<br>
		
	  <div class="row align-items-center justify-content-center">
          <h1 style="color:white;" class="display-4">{{ $assistant->user->name }}</h1>
      </div>

      <div class="container">
  <h2>Hoverable Dark Table</h2>
              
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
</div>


</div>
@endsection