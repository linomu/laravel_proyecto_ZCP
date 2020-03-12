
<?php
$id = auth()->user()->actors_id;
$actor = App\Actors::findOrFail($id);
$imagen = "images/".$actor->ulrphoto;

?>

@section('firstImage')
    <img src="{{ URL::asset($imagen)}}" alt="..." class="img-circle profile_img">
@endsection
@section('userName')

    <h2>{{$actor->firstname." ".$actor->lastname}} </h2>
@endsection
@section('imageName')


    <img src="{{ URL::asset($imagen) }}" alt="">{{$actor->firstname." ".$actor->lastname}}

@endsection
