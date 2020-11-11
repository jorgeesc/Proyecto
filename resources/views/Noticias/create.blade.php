
@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header">{{ __('Noticias') }}</div>
<div class="card-body">


<a href="{{ URL::to('Noticias') }}">Regresar</a> <br> <br>

<h5>Formulario de creación</h5>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'Noticias', 'enctype' => 'multipart/form-data')) }}

<div class="row">

<div class="form-group col-md-4">
        {{ Form::label('descripcion', 'Descripcion de noticia') }}
        {{ Form::textArea('descripcion', Request::old('descripcion'),
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 200)) }}
    </div> <br> <br>
<div class="form-group col-md-4">
        {{ Form::label('fuente', 'Fuente') }}
        {{ Form::text('fuente', Request::old('fuente'),
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 200)) }}
    </div>

    <div class="form-group col-md-4">
{{ Form::label('imagen', 'Imagen')}} <br>
{{ Form::file('imagen', ['accept'=>"image/x-png,image/gif,image/jpeg"]) }} <br>
</div>

</div>

    {{ Form::submit('Registrar Noticia', ['class' => 'btn btn-primary'] ) }}

{{ Form::close() }}
</div>
                </div>
        </div>
    </div>
</div>

@endsection
