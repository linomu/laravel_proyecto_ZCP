@extends('layouts.master')

@include("../layouts/userInformation")

@section('nav')
    @include("../layouts/navevaluator")
@endsection


@section('content')
    <div>
    	<div>
    		<div>
    			<table>
    				<tr>
    					<td>Nombre Encuesta</td>
    				</tr>
    				<tr>
    					<td></td>
    					<td></td>
    					<td></td>
    					<td></td>
    				</tr>
    			</table>
    		</div>
    		<div>
    		<input type="submit" value="{{ (' Refrescar ') }}">
    		</div>
    	</div>
    </div>
@endsection
