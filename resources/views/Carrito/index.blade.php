@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Detalle de Ventas') }}</div>
<div class="card-body">

@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>id</th>
            <th>precio</th>
            <th>cantidad</th>
         
        </tr>
    </thead>
    <tbody>
   
    </tbody>
</table>
</div>
                </div>
        </div>
    </div>
</div>

@endsection
