@extends('layouts.master')

@include("../layouts/userInformation")




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

					<th scope="row">{{$item->id}}</th>
					<td class="clickable-row" data-href="{{route('survey.statistics',$item->id)}}">{{$item->name}}</td>
					<td class="clickable-row" data-href="{{route('survey.statistics',$item->id)}}">{{$item->description}}</td>
					<td class="clickable-row" data-href="{{route('survey.statistics',$item->id)}}">{{$item->kindSurvey}}</td>
				</tr>
			@endforeach()
			</tbody>
		</table>
	</div>
</div>

@endsection

@section('script_section')
    <script src="{{URL::asset('js/myscript.js') }}"></script>
@endsection
