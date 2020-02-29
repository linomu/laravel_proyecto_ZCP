@extends('layouts.master')

@include("../layouts/userInformation")

@section('nav')
    @include("../layouts/navevaluator")
@endsection


@section('content')
    <h1>Elige el cuestionario y decide a quienes quieres encuestar!</h1>
    <h2>{{$data}}</h2>
    <br>
    <form class="" action="{{route('survey.send')}}" method="POST">
            @csrf
             <!-- Select Basic -->
            <div class="row form-group">
                <label class="col-md-2 control-label" for="selectbasic">Tipo de Formulario</label>
                <div class="col-md-6">
                    <select id="selectbasic" name="selectTest" class="form-control">
                        @foreach($data as $options)
                            <option value="{{$options->id}}">{{$options->name}}</option>
                        @endforeach

                    </select>
                </div>
            </div>

            <!-- Textarea -->
            <div class="row form-group">
                <label class="col-md-2 control-label" for="textarea">Usuarios</label>
                <div class="col-md-6">
                    <textarea class="form-control" id="textarea" name="textUsuarios"></textarea>
                </div>
            </div>

            <!-- Text input-->
            <div class="row form-group">
                <label class="col-md-2 control-label" for="textinput">Sitio Web</label>
                <div class="col-md-6">
                    <input id="textinput" name="txtPage" type="text" placeholder="Escribe una página web" class="form-control input-md">
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="btnSendSurvey"></label>
                <div class="col-md-4">
                    <button id="btnSendSurvey" name="btnSendSurvey" class="btn btn-success">Enviar</button>
                </div>
            </div>


    </form>

@endsection
