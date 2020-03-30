@extends('layouts.master')

@include("../layouts/userInformation")



@section('content')
<div class="container-enc bg-transparent">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<h1 class="text-primary">Administradores que tú has creado</h1>
@if(session('mensaje'))
<div class="alert alert-success">
  {{session('mensaje')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

@endif

<div id="alert" class="alert alert-info"></div>

<table class="table table-striped">
  <thead>
    <tr>

      <th scope="col">Documento</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      <th scope="colgroup">Opciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($admins as $admin)

    <tr>

        <td  class="clickable-row" data-href="{{route('admin.show',$admin->id)}}">{{$admin->id}}</td>
    <?php   /*
    <!--<td><a href="{{route('admin.show',$admin->id)}}">{{$admin->name}}</a></td>--> */
        ?>
        <td  class="clickable-row" data-href="{{route('admin.show',$admin->id)}}">{{$admin->firstname}}</td>
        <td  class="clickable-row" data-href="{{route('admin.show',$admin->id)}}">{{$admin->lastname}}</td>
        <td  class="clickable-row" data-href="{{route('admin.show',$admin->id)}}">{{$admin->email}}</td>
        <td>
          <?php   //<a href="{{route('admin.edit', $admin->id)}}" class="btn btn-warning btn-sm">Editar</a> ?>
          <form action="{{route('admin.destroy',$admin->id)}}" class="d-inline" method="POST">
            @method('DELETE')
            @csrf
            <button class="btnDelete btn btn-danger btn-sm ">Eliminar</button>
          </form>
        </td>

      </tr>

    @endforeach

  </tbody>
</table>
{{$admins->links()}}

</div>
@endsection


@section('script_section')

    <script src="{{URL::asset('js/myscript.js') }}"></script>
@endsection
