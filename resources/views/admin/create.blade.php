@extends('layouts.master')

@include("../layouts/userInformation")




@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

<h1>Crear Administradores</h1>

    @if(session('mensaje'))
      <div class="alert alert-success">
        {{session('mensaje')}}
      </div>
    @endif

    <div class="col-sm-6">

      <form action="{{route('admin.store')}}" method="POST" class="">

      @csrf
        <div class="row form-group">

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


        <div class="row form-group">
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


          <div class="row form-group">
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


          @error('gender')
          <div class="alert alert-danger">El genero es obligatorio
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          @enderror
          <div class="row form-group">
              <label class="col-form-label col-md-3 col-sm-3 label-align">Género</label>
              <div class="col-md-6 col-sm-6 ">
                  <div id="gender" class="btn-group" data-toggle="buttons">
                      <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                          <input type="radio" name="gender" value="m" class="join-btn"> &nbsp; Hombre &nbsp;
                      </label>
                      <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                          <input type="radio" name="gender" value="f" class="join-btn"> Mujer
                      </label>
                  </div>
              </div>
          </div>




          @error('birthday')
          <div class="alert alert-danger">El genero es obligatorio
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          @enderror
          <div class="row form-group">

              <label class="font-weight-bold" for="birthday">Fecha de nacimiento</label>
              <div class="col-md-6">
                  <input type="date" id="deadline" name="birthday"  value=""
                         min="" max="">
              </div>
          </div>



          <div class="row form-group">
            @error('txt_email')
            <div class="alert alert-danger">El Correo Electronico es obligatorio
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @enderror
            <div class="col-md-12">
              <label class="font-weight-bold" for="email">Email</label>
            <input type="email" name="txt_email" value="{{old('txt_email')}}" class="form-control" placeholder="Email Address">
            </div>
            </div>



          <div class="row form-group">
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


          <div class="row form-group">
              @error('txt_pass')
              <div class="alert alert-danger">La contraseña es obligatoria
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              @enderror
              <div class="col-md-12">
                  <label class="font-weight-bold" for="password">Contraseña</label>
                  <input type="password" name="txt_pass" value="{{old('txt_pass')}}" class="form-control" placeholder="Password">
              </div>
          </div>

<<<<<<< HEAD

          <div class="row form-group">
            <div class="col-md-12">
              <input type="submit" value="Guardar" class="btn btn-primary rounded-0 btn-lg">
            </div>
          </div>
=======
            <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Guardar" class="btn btn-primary rounded-0 btn-lg">
                </div>
              </div>
>>>>>>> 6dc26fb72759bc0d0e0b12e4d38ef31b3c2d181a
        </form>
    </div>



</div>
@endsection
