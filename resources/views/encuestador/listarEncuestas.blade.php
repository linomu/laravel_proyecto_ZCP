@extends('layouts.encuestador')

@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<h1>Listado de Formularios</h1>

</div>
@endsection