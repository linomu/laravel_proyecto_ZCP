@extends('layouts.master')

@include("../layouts/userInformation")

@section('nav')
    @include("../layouts/navevaluator")
@endsection


@section('content')
	<div class="container-enc">
		<form method="GET">
			<div class="espaciado">
				<label for="txtNameSurvey">Nombre de la encuesta</label>
	    		<input name="nombre" type="text" class="form-control" id="txtNameSurvey">
		 	</div>

		 	<div>
				<label for="cbTypeSurvey">Tipo de encuesta</label>
			</div>
			<div class="espaciado">
				<input class="cb-ts" type="text" name="TypeSurvey" id="cbTypeSurvey" list="exampleList" placeholder="Seleccione el tipo de encuesta">
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

			<button type="submit" class="btn-env">
		    {{ __('Enviar') }}
	        </button>
	    </form>	
	</div>
@endsection
