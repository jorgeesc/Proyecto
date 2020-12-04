@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Detalle de Compras') }}</div>
<div class="card-body">

@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif

{{HTML::ul($errors->all())}}

<table class="table table-striped">
    <thead>
        <tr>
            <th>Producto</th>
            <th>precio</th>
            <th>cantidad</th>
            <th>Quitar</th>
         
        </tr>
    </thead>
    <tbody>
        @foreach($carrito as $rowcarro)
        <tr>
            <td>{{$rowcarro['nombre']}}</td>
            <td>{{$rowcarro['precio']}}</td>
            <td>{{$rowcarro['cantidad']}}</td>


            <td>{{ Form::submit('X', array('class' => 'btn btn-danger')) }}</td>
        </tr>


        @endforeach


    </tbody>
</table>

    {{ Form::open(['url' => 'ConcretarVenta'] ) }} <br>

{{ Form::submit('Concretar venta',['class' => 'btn btn-primary btn-lg btn-block' , 'role' => 'button' , 'aria-pressed' => 'true'] ) }}
{{ Form::close()}} <br><br>
</div>
                </div>
        </div>
    </div>
</div>

@endsection
