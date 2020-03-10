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
					<th>Descripción</th>
					<th>Tipo</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($tests as $item)
				<tr>
					<th scope="row">{{$item->id}}</td>
					<td>{{$item->name}}</td>
					<td>{{$item->description}}</td>
					<td>{{$item->kindSurvey}}</td>
				</tr>
			@endforeach()
			</tbody>
		</table>
	</div>
</div>

@endsection
