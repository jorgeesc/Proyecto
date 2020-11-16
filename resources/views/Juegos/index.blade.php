@extends('layouts.admin')
@section('content')
@if( \Auth::user()->rol_id== 2 )

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Juegos') }}</div>
<div class="card-body">

<a href="{{route('Juegos.create')}}">Registrar Juego</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif

<form>
<div class="row">
<div class="form-group col-md-3">
<label for="nombre">Filtrar por nombre</label>
<input type="text" name="nombre" value="{{$filtroNombre}}" class="form-control">
</div>
</div>
<button>Buscar</button>
</form>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>status</th>
            <th>stock</th>
            <th>Portada</th>
            <th>Género</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableJuegos as $rowJuegos)
            <tr>
                <td>
                    <a href="{{route('Juegos.show', $rowJuegos->id)}}">{{$rowJuegos->nombre}}</a>
                </td>
                <td>{{$rowJuegos->descripcion}}</td>
                <td>{{$rowJuegos->precio}}</td>
                <td>{{$rowJuegos->status}}</td>
                <td>{{$rowJuegos->stock}}</td>
                
                <td>
                        <img src="{{ asset('storage/'.$rowJuegos->imgNombreFisico )}}" width="30%">
                    </td>

                <td>{{$rowJuegos->getGenero->nombre}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</div>
                </div>
        </div>
    </div>
</div>


@else


<section class="">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../resources/views/Juegos/Slider/01.jpg" class="d-block w-40 h-40" alt="50px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Chibas Campion del mundo, abajo los poyos</h5>
        <p>Arriba las chibas carnal, deja agarro señal.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../resources/views/Juegos/Slider/02.png" class="d-block w-40 h-4x0" alt="50px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../resources/views/Juegos/Slider/03.png" class="d-block w-40 h-4x0" alt="50px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../resources/views/Juegos/Slider/04.png" class="d-block w-40 h-4x0" alt="50px">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    
    <div class="carousel-item">
      <img src="../resources/views/Juegos/Slider/05.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><br><br>
</section>


 @foreach($tableJuegos as $rowJuegos)
<center><figure class="figure">
  <a href="{{route('Juegos.show', $rowJuegos->id)}}" data-size="1200x1017"><h1>{{$rowJuegos->nombre}}</h1>
  <img src="{{ asset('storage/'.$rowJuegos->imgNombreFisico )}}" class="figure-img img-fluid rounded" width="90%" height="100px" alt="...">  
</figure>
</a>

<h6>{{$rowJuegos->precio}}</h6>
<h6>{{$rowJuegos->genero}}</h6>
</center>

@endforeach







@endif
@endsection
