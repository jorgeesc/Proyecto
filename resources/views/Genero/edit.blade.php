@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Users') }}</div>
<div class="card-body">

<a href="{{ route('Genero.show', $modelo->id) }}">Regresar</a> <br> <br>

<h5>Formulario de actualización</h5>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('Genero.update', $modelo->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data') ) }}


<div class="row">

    <div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre') }}
        {{ Form::text('nombre', null, 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

</div>


    {{ Form::submit('Actualizar Género', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
</div>
                </div>
        </div>
    </div>
</div>

@endsection