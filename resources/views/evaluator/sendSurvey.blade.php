@extends('layouts.master')

@include("../layouts/userInformation")




@section('content')


    <script src=”validae_email.js” language=”Javascript”></script>
    <h1>Envía tus encuestas!</h1>
    <title>Document Object Model</title>
    <br>
    @if(session('mensaje'))
        <div class="alert alert-success">   {{session('mensaje')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
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


           <div class="row form-group">

               <label class="col-md-2 control-label" for="deadLine">Fecha Límite de respuesta:</label>
               <div class="col-md-6">
                   <input type="date" id="deadline" name="txt_deadLine"  value=""  min="" max="" >
               </div>
             </div>


            <!-- Textarea -->


            @error('textUsuarios')
            <div class="alert alert-danger">No ha ingresado usuarios o los correos estan las ecritos

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times; sdd</span>
                </button>
            </div>
            @enderror
            <div class="row form-group">

                <label class="col-md-2 control-label" for="textarea">Usuarios</label>

                <div class="col-md-6"><div  id=correo></div>

                    <div class="msgusuarios alert alert-secondary" role="alert">
                         <a id="mensaje" href="#" class="alert-link"></a>
                    </div>


                    <textarea class="form-control" id="textUsuarios" name="textUsuarios"></textarea>


                </div>
            </div>

            <!-- Text input-->
            @error('textUsuarios')
            <div class="alert alert-danger">No ha ingresado un Sitio Web
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @enderror
            <div class="row form-group">
                <label class="col-md-2 control-label" for="textinput">Sitio Web</label>
                <div class="col-md-6">
                    <div class="msgURLvalidate alert alert-secondary" role="alert">
                        <a id="mensajeUrl" href="#" class="alert-link"></a>
                    </div>
                    <div  class="msgURLExists alert alert-secondary" role="alert">
                        <a id="mensajeURlExists" href="#" class="alert-link"></a>
                    </div>
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

@section('script_section')
    <script src="{{URL::asset('js/validae_email.js') }}"></script>
    <script src="{{URL::asset('js/functionsByLino.js') }}"></script>
@endsection




