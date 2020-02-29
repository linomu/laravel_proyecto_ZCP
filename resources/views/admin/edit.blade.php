@extends('layouts.master')

@include("../layouts/userInformation")

@section('nav')
    @include("../layouts/navadmin")
@endsection

@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<h1>Actualizar un Administrador</h1>
@if(session('mensaje'))
    <div class="alert alert-success">
      {{session('mensaje')}}
    </div>
@endif
<div class="col-sm-6">
  <form action="{{route('admin.update',$admin->id)}}" method="POST" class="p-5 bg-white">
    @method('PUT')
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
        <input type="text" name="txt_personal_id" class="form-control" placeholder="Cédula" value="{{$admin->personal_id}}">
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
            <label class="font-weight-bold" for="fullname">Primer Nombre</label>
          <input type="text" name="txt_name" class="form-control" placeholder="Primer Nombre" value="{{$admin->name}}">
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
            <label class="font-weight-bold" for="fullname">Segundo Nombre</label>
          <input type="text" name="txt_last_name" class="form-control" placeholder="Segundo Nombre" value="{{$admin->lastname}}">
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
          <input type="email" name="txt_email" class="form-control" placeholder="Email Address" value="{{$admin->email}}">
          </div>
        </div>

        <div class="row form-group">
          <div class="col-md-12">
            <input type="submit" value="Modificar" class="btn btn-primary rounded-0 btn-lg">
          </div>
        </div>
      </form>
  </div>

</div>
@endsection
