@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Juegos') }}</div>
<div class="card-body">

<a href="{{route('users.create')}}">Registrar usuario</a>
<br><br>
@if(Session::has('message'))

{{Session::get('message')}}<br><br>

@endif

<table class="table table-straped" bgcolor="white">
	<thead>
		<tr>
			<td>Nombre</td><br>
			<td>Correo</td>
		</tr>
</thead> 
<tbody>
	@foreach($tableUsers as $rowUser)
	<tr>
		<td>
            <a href="{{route('users.show', $rowUser->id)}}">{{$rowUser->name}}</a>
        </td>
		
		<td>{{$rowUser->email}}</td>


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