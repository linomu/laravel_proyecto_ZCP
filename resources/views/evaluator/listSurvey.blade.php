@extends('layouts.master')

@include("../layouts/userInformation")

@section('nav')
    @include("../layouts/navevaluator")
@endsection


@section('content')
<div class="container-enc">
	<div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Tipo</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($surveys as $item)
				<tr>
					<th scope="row">{{$item->id}}</td>
					<td>{{$item->nombre}}</td>
					<td>{{$item->tipo}}</td>
				</tr>
			@endforeach()
			</tbody>
		</table>
	</div>
</div>

@endsection
