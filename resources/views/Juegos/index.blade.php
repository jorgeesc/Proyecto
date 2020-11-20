@extends('layouts.admin')
@section('content')
@if( \Auth::user()->rol_id== 2 )

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
             <th>Proveedor</th>
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
                <td>{{$rowJuegos->getProveedor->nombre}}</td>
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

<div class="container">
    <div class="row justify-content-center">
        
            <div class="card">
                <center><div class="card-header"><h1>{{ __('Catálogo de Juegos') }}</h1></div></center>
<div class="card-body">
<div class ="row">

 @foreach($tableJuegos as $rowJuegos)
    <div class="col-md-6">
<center><figure class="figure">
  <a href="{{route('Juegos.show', $rowJuegos->id)}}" data-size="1200x1017"><h1>{{$rowJuegos->nombre}}</h1>
  <img src="{{ asset('storage/'.$rowJuegos->imgNombreFisico )}}" class="figure-img img-fluid rounded" width="90%" height="100px" alt="...">  
</figure>
</a>

<h6>{{$rowJuegos->genero}}</h6>
<td>
{{ Form::open(['url' => 'agregarCarrito'] ) }}
{{ Form::hidden('id', $rowJuegos->id ,
array('class' => 'form-control')) }} <br>
{{ Form::text('cantidad', 0 ,
array('class' => 'form-control', 'required'=>true)) }} <br>
{{ Form::submit('Agregar al carrito',['class' => 'btn btn-primary btn-lg btn-block' , 'role' => 'button' , 'aria-pressed' => 'true'] ) }}
{{ Form::close()}}
</td>
</center>
<br>                
<a href="{{route('Juegos.show', $rowJuegos->id)}}" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true">Detalle de juego </a>
                </div>
        
        
@endforeach
    </div>
            </div>
        </div>
    </div>
</div>







@endif
@endsection
