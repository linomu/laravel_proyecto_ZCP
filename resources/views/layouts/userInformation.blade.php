
@section('firstImage')
    <img src="{{ URL::asset('images/usuario.png')}}" alt="..." class="img-circle profile_img">
@endsection
@section('userName')
    <?php
        $id = auth()->user()->actors_id;
        $actor = App\Actors::findOrFail($id);

    ?>
    <h2>{{$actor->firstname." ".$actor->lastname}} </h2>
@endsection
@section('imageName')
    <img src="{{ URL::asset('images/usuario.png') }}" alt="">{{$actor->firstname." ".$actor->lastname}}
@endsection
