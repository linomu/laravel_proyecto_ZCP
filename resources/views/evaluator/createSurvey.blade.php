@extends('layouts.master')

@include("../layouts/userInformation")

@section('nav')
    @include("../layouts/navevaluator")
@endsection


@section('content')
	<div class="container-enc">
		<form action="{{ route('survey.crear') }}" method="POST">
			@csrf
			<div class="espaciado">
				<label for="txtNameSurvey">Nombre de la encuesta</label>
	    		<input name="nombre" type="text" class="form-control mb-2" id="txtNameSurvey">
		 	</div>

		 	<div>
				<label for="cbTypeSurvey">Tipo de encuesta</label>
			</div>
			<div class="espaciado">
				<input class="cb-ts form-control mb-2" type="text" name="tipo" id="cbTypeSurvey" list="exampleList" placeholder="Seleccione el tipo de encuesta">
				<datalist id="exampleList">
			  		<option value="SUS">
				  	<option value="Other">
				</datalist>
		 	</div>

		 	<div class="espaciado">
				<label>Preguntas</label>
				<input type="text" class="ip-questions form-control" id="txtQuestions1">
				<input type="text" class="ip-questions form-control" id="txtQuestions2">
				<input type="text" class="ip-questions form-control" id="txtQuestions3">
		 	</div>

			<button type="submit" class="btn btn-primary btn-block">
		    {{ __('Enviar') }}
	        </button>
	    </form>	
	</div>
@endsection
