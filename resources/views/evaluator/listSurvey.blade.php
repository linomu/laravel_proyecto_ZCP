@extends('layouts.master')

@include("../layouts/userInformation")

@section('nav')
    @include("../layouts/navevaluator")
@endsection


@section('content')
<div>
	<div>
		<table>
			<thead>
				<tr>
					<td>Nombre Encuesta</td>
				</tr>
			</thead>
			<tbody>
			@foreach ($surveys as $item)
				<tr>
					<th scope="row">{{$item->id}}</td>
					<td>{{$item->nombre}}</td>
					<td>{{$item->descripcion}}</td>
				</tr>
			@endforeach()
			</tbody>
		</table>
	</div>
	<div>
	<input type="submit" value="{{ (' Refrescar ') }}">
	</div>
</div>

@endsection
