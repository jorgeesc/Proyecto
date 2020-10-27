@extends('layouts.layout')
@section('content')

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
		<td>{{$rowUser->name}}</td>
		<td>{{$rowUser->email}}</td>


	</tr>


	@endforeach

</tbody>
</table>

@endsection