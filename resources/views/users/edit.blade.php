@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Usuarios') }}</div>
<div class="card-body">

<a href="{{ route('users.show', $modelo->id) }}">Regresar</a> <br> <br>

<h5>Formulario de actualización</h5>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('users.update', $modelo->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data') ) }}


<div class="row">

    <div class="form-group col-md-4">
        {{ Form::label('name', 'Nombre del usuario') }}
        {{ Form::text('name', Request::old('name'),
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30)) }}
    </div>

	<div class="form-group">
        {{ Form::label('password', 'Contraseña') }}
        {{ Form::input('password', 'password', '*****', array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-10">
        {{ Form::label('email', 'Correo') }} <br>
        {{ Form::text('email', Request::old('email'),
           array('class' => 'form-control', 'required'=>true, 
           'maxlength'=> 50)) }}
    </div>

</div>
<div class="form-group col-md-3">
        {{ Form::label('rol_id', 'Rol') }}
        {{ Form::select('rol_id', $tableRol, Request::old('rol_id'),  
           array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Actualizar Usuario', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
                </div>
        </div>
    </div>
</div>

@endsection