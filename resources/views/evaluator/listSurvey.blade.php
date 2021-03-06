@extends('layouts.master')

@include("../layouts/userInformation")




@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
        <h1 class="text-primary">Encuestas</h1>
<div class="container-enc">

	<div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Descripción</th>
					<th>Tipo</th>
					<th colspan = 2>Acciones</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($tests as $item)
				<tr>
					<th scope="row">{{$item->id}}</th>
					<td class="clickable-row_prueba" data-href="{{route('survey.statistics',$item->id)}}">{{$item->name}}</td>
					<td class="clickable-row_prueba" data-href="{{route('survey.statistics',$item->id)}}">{{$item->description}}</td>
					<td class="clickable-row_prueba" data-href="{{route('survey.statistics',$item->id)}}">{{$item->kindSurvey}}</td>
					<td>
                		<a href="{{ route('survey.edit',$item->id)}}" class="btn btn-primary  btn-sm">Editar</a>
            		</td>
					<td>
						<form action="{{ route('survey.destroy', $item->id)}}" method="POST">
							@csrf
							@method('DELETE')
							<button class="btn btn-danger  btn-sm" type="submit">Eliminar</button>
						</form>
					</td>
					<td>
                		<a href="{{ route('survey.questions_list',$item->id)}}" class="btn btn-secondary  btn-sm">Ver preguntas</a>
            		</td>
				</tr>
			@endforeach()
			</tbody>
		</table>
	</div>
</div>
@if(session('mensaje'))
<div class="alert alert-success">
  {{session('mensaje')}}
</div>
@endif
@endsection

@section('script_section')
    <script src="{{URL::asset('js/myscript.js') }}"></script>
@endsection
