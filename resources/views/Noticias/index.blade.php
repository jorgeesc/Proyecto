@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Noticias') }}</div>
<div class="card-body">
    
<a href="{{route('Noticias.create')}}">Registrar Noticia</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Descripcion</th>
            <th>Fuente</th>
            <th>Portada</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableNoticias as $rowNoticias)
            <tr>
                <td>
                    <a href="{{route('Noticias.show', $rowNoticias->id)}}">{{$rowNoticias->descripcion}}</a>
                    
                </td>
                <td>{{$rowNoticias->fuente}}</td>
                <td>
                        <img src="{{ asset('storage/'.$rowNoticias->imgNombreFisico )}}" width="20%">
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
