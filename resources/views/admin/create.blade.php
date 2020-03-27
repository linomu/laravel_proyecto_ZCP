@extends('layouts.master')

@include("../layouts/userInformation")




@section('content')
<div class="container-enc bg-transparent">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

        <h1 class="text-primary">Crear Administradores</h1>

    @if(session('mensaje'))
      <div class="alert alert-success">
        {{session('mensaje')}}
      </div>
    @endif

    <div class="col-sm-6 bg-transparent container-enc">

      <form action="{{route('admin.store')}}" method="POST" class=""  onsubmit="return validar()">

      @csrf
        <div class="espaciado">

          @error('txt_personal_id')
          <div class="alert alert-danger">El Documento es obligatorio {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @enderror
          <div class="col-md-12 mb-3 mb-md-0">
            <label class="font-weight-bold" for="fullname">Cédula</label>
          <input type="text" name="txt_personal_id" class="form-control" placeholder="Cédula" value="{{old('txt_personal_id')}}">
          </div>
        </div>


        <div class="espaciado">
          @error('txt_name')
          <div class="alert alert-danger">El Nombre es obligatorio
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @enderror
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Nombre</label>
              <input type="text" name="txt_name" value="{{old('txt_name')}}" class="form-control" placeholder="Primer Nombre">
            </div>
          </div>


          <div class="espaciado">
            @error('txt_last_name')
            <div class="alert alert-danger">El Apellido es obligatorio
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @enderror
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Apellido</label>
            <input type="text" name="txt_last_name" value="{{old('txt_last_name')}}" class="form-control" placeholder="Segundo Nombre">
            </div>
          </div>



          <div class="espaciado">

           <label class="font-weight-bold col-md-12 mb-3 mb-md-0">Género</label>
            @error('gender')
          <div class="alert alert-danger">El genero es obligatorio
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          @enderror
              <div class="col-md-12 mb-3 mb-md-0">
                  <div id="gender" class="espaciado btn-group" data-toggle="buttons">
                      <label class="btn btn-outline-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                          <input type="radio" name="gender" value="m" class="join-btn"> &nbsp; Hombre &nbsp;
                      </label>
                      <label class="btn btn-outline-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                          <input type="radio" name="gender" value="f" class="join-btn"> Mujer
                      </label>
                  </div>
              </div>
          </div>




          @error('birthday')
          <div class="alert alert-danger">La fecha de nacimiento es obligatorio
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          @enderror
          <div class="espaciado">

                <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="birthday">Fecha de nacimiento</label>
                  <input type="date" id="birthday" name="birthday"  value="{{old('birthday')}}"
                         min="" max="">
            </div>
          </div>



          <div class="espaciado">
            @error('txt_email')
            <div class="alert alert-danger">El Correo Electronico es obligatorio
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @enderror
            <div class="col-md-12">
              <label class="font-weight-bold" for="email">Correo:</label>
            <input type="email"  id="txt_email" name="txt_email" value="{{old('txt_email')}}" class="form-control" placeholder="Escriba su correo">
            </div>
            </div>

          <div class="col-md-12">
              <label class="font-weight-bold" for="email">Confirmación de Correo:</label>
              <input type="email" id="txt_email2" name="txt_email2" value="" class="form-control" placeholder="Vuelva a escribir su correo">
          </div>




          <div class="espaciado">
              @error('txt_number')
              <div class="alert alert-danger">El Correo Electronico es obligatorio
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              @enderror

              <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Celular y/o Teléfono</label>
                  <input class="form-control" placeholder="Number"  name="txt_number" type="tel" value="{{old('txt_number')}}" id="example-tel-input">
              </div>
          </div>


          <div class="espaciado">
            <div class="col-md-12">
                <br>
              <input type="submit" value="Guardar" class="btn btn-primary rounded-0 btn-lg">
            </div>
          </div>

        </form>
    </div>



</div>
@endsection


@section('script_section')
    <script src="http://momentjs.com/downloads/moment.min.js"></script>
    <script src="{{URL::asset('js/functionsByLino.js') }}"></script>
@endsection
