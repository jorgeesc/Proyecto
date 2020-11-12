@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Juegos') }}</div>
<div class="card-body">
<a href="{{ route('Roles.show', $modelo->id) }}">Regresar</a> <br> <br>

<h1>Atualización de Roles</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('Roles.update', $modelo->id), 'method' => 'PUT') ) }}


<div class="row">

    <div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', null, 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

   
</div>

    {{ Form::submit('Actualizar rol', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
                </div>
        </div>
    </div>
</div>
@endsection