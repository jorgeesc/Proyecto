@extends('layouts.internal')
@section('content')
<center>
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">

<a href="{{URL::to('users')}}"> Regresar</a><br>
<h1>Formulario de creación</h1>

{{HTML::ul($errors->all())}}

{{Form::open(['url'=> 'users'])}}
<div class="col-md-4 col-form-label text-md-right">
	<center>{{Form::label('name','Nombre')}}</center>
	{{Form::text('name',Request::old('name'),["class"=>"form-control"])}}
</div>

<div class="col-md-4 col-form-label text-md-right">
	<center>{{Form::label('password','Contraseña')}}</center>
	{{Form::text('password',Request::old('password'),["class"=>"form-control"])}}
</div>

<div class="col-md-4 col-form-label text-md-right">
	<center>{{Form::label('email','Correo electrónico')}}</center>
	{{Form::text('email',Request::old('email'),["class"=>"form-control"])}}
</div>

<br>
{{Form::submit('Registrar usuario',["class"=>"btn-primary"])}}
{{Form::close()}}

</div>
</div>
</div>
</center>
@endsection