@extends('layouts.master')



@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<h1>Mostrar un administrador {{$id}}</h1>

</div>
@endsection