@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Ventas') }}</div>
<div class="card-body">

@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>total</th>
            <th>status</th>
            <th>ID del usuario</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableVentas as $rowVenta)
            <tr>
                <td>
                    {{$rowVenta->total}}
                </td>

                <td>
                    {{$rowVenta->status}}
                </td>

                <td>
                    {{$rowVenta->user_id}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
                </div>
        </div>
    </div>
</div>

@endsection
