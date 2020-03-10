@extends('layouts.master')

@include("../layouts/userInformation")





@section('content')
	<div class="container-enc">
		@if(session('mensaje'))
			<div class="alert-success" style="heigth:25px;text-align:center;">   {{session('mensaje')}}
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		@endif
		<form action="{{ route('survey.crear') }}" method="POST">
			@csrf

			<h1>Crear Encuesta</h1>

			<div class="espaciado">
				<label for="txtNameSurvey">Nombre de la encuesta</label>
				<input name="nombre" type="text" class="form-control mb-2" id="txtNameSurvey">
			</div>

			@error('nombre')
            <div class="alert alert-danger">Falta el nombre de la encuesta
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @enderror

			<div class="espaciado">
				<label for="txtDescSurvey">Descripción de la encuesta</label>
				<textarea name="descripcion" class="form-control mb-2" id="txtDescSurvey"></textarea>
			</div>	

			@error('descripcion')
            <div class="alert alert-danger">Falta la descripción de la encuesta
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @enderror

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

			@error('descripcion')
            <div class="alert alert-danger">Falta ingresar preguntas
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @enderror
			
			<button type="submit" class="btn btn-primary btn-block">
				{{ __('Enviar') }}
			</button>

		</form>	
	</div>
@endsection
