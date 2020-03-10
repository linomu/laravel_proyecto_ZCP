@extends('layouts.master')

@include("../layouts/userInformation")



@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<h1>Administrador</h1>
<h2>Nombre: {{$admin->name}}</h2>



</div>
@endsection
