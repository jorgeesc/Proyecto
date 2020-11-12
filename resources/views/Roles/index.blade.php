@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Juegos') }}</div>
<div class="card-body">
<a href="{{route('Roles.create')}}">Registrar Rol</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Rol</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableRoles as $rowRol)
            <tr>
                <td>
                    <a href="{{route('Roles.show', $rowRol->id)}}">{{$rowRol->nombre}}</a>
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
