@extends('layouts.master')

@include("../layouts/userInformation")




@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<h1>Create and admin</h1>

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
              @error('txt_user')
              <div class="alert alert-danger">El Usuarios obligatorio
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              @enderror
              <div class="col-md-12">
                  <label class="font-weight-bold" for="txt_user">Usuario</label>
                  <input type="text" name="txt_user" value="{{old('txt_user')}}" class="form-control" placeholder="Usuario">
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
                  <label class="font-weight-bold" for="password">Usuario</label>
                  <input type="password" name="txt_pass" value="{{old('txt_pass')}}" class="form-control" placeholder="Password">
              </div>
          </div>


          <div class="row form-group">
            <div class="col-md-12">
              <input type="submit" value="Guadar" class="btn btn-primary rounded-0 btn-lg">
            </div>
          </div>
        </form>
    </div>



</div>
@endsection
