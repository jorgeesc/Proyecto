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
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>status</th>
            <th>stock</th>
            <th>Portada</th>
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
<h2>Catálogo de juegos</h2>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header">{{ __('Juegos') }}</div>
<div class="card-body">


<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>status</th>
            <th>stock</th>
            <th>Portada</th>
            <th>Comentarios</th>
            <th>Calificación</th>
            <th>Compra</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableJuegos as $rowJuegos)
            <tr>
                <td>
                    {{$rowJuegos->nombre}}
                </td>
                <td>{{$rowJuegos->descripcion}}</td>
                <td>{{$rowJuegos->precio}}</td>
                <td> @if($rowJuegos->status) Disponible @else No disponible @endif </td>
                <td>{{$rowJuegos->stock}}</td>
                <td><img src="{{ asset('storage/'.$rowJuegos->imgNombreFisico )}}" width="200px"></td>
                <td> Aqui iran los comentarios</td>
                <td> Aqui se calificará</td>
                <td>Aqui estara el agregar al carrito</td>
                
                
            </tr>
        @endforeach
    </tbody>
</table>

</div>
                </div>
        </div>
    </div>
</div>
@endif

@endsection
