@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Usuarios') }}</div>
<div class="card-body">

<a href="{{URL::to('users')}}"> Regresar</a><br>
<center>
<h5>Formulario de creación</h5>

{{HTML::ul($errors->all())}}

{{Form::open(['url'=> 'users'])}}


<div class="col-md-4 col-form-label text-md-right">
	<center>{{Form::label('name','Nombre')}}</center>
	{{Form::text('name',Request::old('name'),["class"=>"form-control"])}}
</div>

<div class="col-md-4 col-form-label text-md-right">
	<center>{{Form::label('email','Correo electrónico')}}</center>
	{{Form::text('email',Request::old('email'),["class"=>"form-control"])}}
</div>

<div class="col-md-4 col-form-label text-md-right">
	<center>{{Form::label('password','Contraseña')}}</center>
	{{Form::text('password',Request::old('password'),["class"=>"form-control"])}}
</div>

<div class="form-group col-md-3">
        {{ Form::label('rol_id', 'Rol') }}
        {{ Form::select('rol_id', $tableRol, Request::old('rol_id'),  
           array('class' => 'form-control')) }}
</div>


<br>
{{Form::submit('Registrar usuario',["class"=>"btn-primary"])}}
{{Form::close()}}
</center>
</div>
                </div>
        </div>
    </div>
</div>

@endsection