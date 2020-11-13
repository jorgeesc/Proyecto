@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Juegos') }}</div>
<div class="card-body">

<a href="{{ URL::to('Juegos') }}">Regresar</a> <br> <br>

<h5>Formulario de creación</h5>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'Juegos', 'enctype' => 'multipart/form-data')) }}

<div class="row">

<div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre del juego') }}
        {{ Form::text('nombre', Request::old('nombre'),
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30)) }}
    </div>

    <div class="form-group col-md-12">
        {{ Form::label('descripcion', 'Descripción del Juego') }} <br>
        {{ Form::textArea('descripcion', Request::old('descripcion'),
           array('class' => 'form-control', 'required'=>true, 
           'maxlength'=> 200, 'rows'=>2)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('precio', 'Precio') }}
        {{ Form::number('precio', Request::old('precio'), 
           array('class' => 'form-control', 'required'=>true, 'step'=>'.01')) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('stock', 'Existencias') }}
        {{ Form::number('stock', Request::old('stock'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('status', 'Estatus') }}
        {{ Form::checkbox('status', Request::old('status'), false,  
           array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('imagen', 'Imagen')}} <br>
        {{ Form::file('imagen', ['accept'=>"image/x-png,image/gif,image/jpeg"]) }} <br>
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('genero_id', 'Género del Juego') }}
        {{ Form::select('genero_id', $tableJuegos, Request::old('genero_id'),  
           array('class' => 'form-control')) }}
    </div>

</div>

    {{ Form::submit('Registrar Juego', ['class' => 'btn btn-primary'] ) }}

{{ Form::close() }}

</div>
                </div>
        </div>
    </div>
</div>

@endsection
