@extends('layouts.master')

@include("../layouts/userInformation")




@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

@if(session('mensaje'))
<div class="alert alert-success">
  {{session('mensaje')}}
</div>
@endif

<div class="container-enc">
	<div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Id</th>
					<th>Descripción</th>
				</tr>
			</thead>
			<tbody>
			@foreach ($questions as $item)
				<tr>
					<th scope="row">{{$item->id}}</th>
					<td>{{$item->description}}</td>
				</tr>
			@endforeach()
			</tbody>

            <div>
            <a style="margin 2px;background-color:#fff;font-size:26px;border: 0.5px solid #fff;padding:5px;" href="{{ route('surveys_list')}}">Atrás</a>
            </div>
		</table>
	</div>
</div>

@endsection

@section('script_section')
    <script src="{{URL::asset('js/myscript.js') }}"></script>
@endsection
