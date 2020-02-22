@extends('layouts.master')



@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<h1>Create and admin</h1>

  
    <div class="col-sm-6">
      <form action="/admin" method="POST" class="p-5 bg-white">

      @csrf
        <div class="row form-group">
          <div class="col-md-12 mb-3 mb-md-0">
            <label class="font-weight-bold" for="fullname">Cédula</label>
            <input type="text" id="fullname" class="form-control" placeholder="Cédula">
          </div>
        </div>  
        <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Primer Nombre</label>
              <input type="text" id="fullname" class="form-control" placeholder="Primer Nombre">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Segundo Nombre</label>
              <input type="text" id="fullname" class="form-control" placeholder="Segundo Nombre">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <label class="font-weight-bold" for="email">Email</label>
              <input type="email" id="email" class="form-control" placeholder="Email Address">
            </div>
          </div>
      
          <div class="row form-group">
            <div class="col-md-12">
              <input type="submit" value="Guadar Administrador" class="btn btn-primary rounded-0 btn-lg">
            </div>
          </div>
        </form>
    </div>
  


</div>
@endsection