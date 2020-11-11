@extends('layouts.admin')
@section('content')

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
@endsection
