@extends('layouts.master')

@include("../layouts/userInformation")



@section('content')
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <h1>Evaluador</h1>
            <?php
            $id = auth()->user()->actors_id;
            $actor = App\Actors::findOrFail($id);
            $imagen = "images/".$actor->ulrphoto;
            ?>
            <img src="{{ URL::asset($imagen)}}" width="200" height="200" alt="A 200x200 image">

        <h2>Documento: {{$pollster->id}}</h2>
        <h2>Nombre: {{$pollster->firstname}}</h2>
        <h2>Apellido: {{$pollster->lastname}}</h2>
        <h2>Género: {{$pollster->gender}}</h2>
        <h2>Número de celular: {{$pollster->phonenumber}}</h2>
        <h2>Fecha de Nacimiento: {{$pollster->birth_date}}</h2>



    </div>
@endsection
