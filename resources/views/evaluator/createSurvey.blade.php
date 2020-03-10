@extends('layouts.master')

@include("../layouts/userInformation")

@section('nav')
    @include("../layouts/navevaluator")
@endsection


@section('content')
	<div class="container-enc">
		<form action="{{ route('survey.crear') }}" method="POST">
			@csrf

			<h1>Crear Encuesta</h1>

			<div class="espaciado">
				<label for="txtNameSurvey">Nombre de la encuesta</label>
				<input name="nombre" type="text" class="form-control mb-2" id="txtNameSurvey">
			</div>

			<div class="espaciado">
				<label for="txtDescSurvey">Descripción de la encuesta</label>
				<textarea name="descripcion" class="form-control mb-2" id="txtDescSurvey"></textarea>
			</div>	

			<div>
				<label for="cbTypeSurvey">Tipo de encuesta</label>
			</div>
			<div class="espaciado">
				<select id="selectbasic" name="selectTest" class="form-control">
					@foreach($enum as $item)
						<option value="{{$item}}">{{$item}}</option>
					@endforeach
				</select>
			</div>

			<div class="espaciado">
				<label>Preguntas</label>
			</div>

			<div class="espaciado">
				<textarea class="form-control txtarea-containt" id="textarea" name="textQuestions" placeholder="Ingrese cada pregunta separada de una coma (,)"></textarea>
			</div>
			
			<button type="submit" class="btn btn-primary btn-block">
				{{ __('Enviar') }}
			</button>

		</form>	
	</div>
@endsection
