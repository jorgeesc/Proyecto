
@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Juegos') }}</div>
<div class="card-body">
<a href="{{ URL::to('Roles') }}">Regresar</a> <br> <br>

<h1>Registro de Roles</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'Roles')) }}

<div class="row">

<div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre del rol') }}
        {{ Form::text('nombre', Request::old('nombre'),
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30)) }}
    </div>

</div>

    {{ Form::submit('Registrar rol', ['class' => 'btn btn-primary'] ) }}

{{ Form::close() }}

</div>
                </div>
        </div>
    </div>
</div>
@endsection
