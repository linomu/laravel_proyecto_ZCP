@extends('layouts.master')

@include("../layouts/userInformation")

@section('content')

        @if(session('mensaje'))
            <div class="alert alert-success">
                {{session('mensaje')}}
            </div>
        @endif


        <div class="">
            <!--
            <div class="page-title">
                <div class="title_left">
                    <h3>Perfil de Usuario</h3>
                </div>


            </div>
            -->

            <div class="clearfix"></div>
            <h1 class="text-primary">Tú Información</h1>
            <div class="row">
                @if(session('mensajeError'))
                    <div class="alert alert-warning">
                        {{session('mensajeError')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Perfil de Usuario
                                <small>Activity report</small>
                            </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>



                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="col-md-3 col-sm-3  profile_left">
                                <div class="profile_img">
                                    <div id="crop-avatar">
                                        <!-- Current avatar -->

                                        <img class="img-responsive avatar-view" src="{{ URL::asset( "images/".$actor[0]->ulrphoto) }}" alt="Avatar" title="Change the avatar"  height="100%" width="100%">

                                    </div>
                                </div>
                                <h3>{{$actor[0]->firstname." ".$actor[0]->lastname}}</h3>

                                <ul class="list-unstyled user_data">
                                    <li><i class="fa fa-envelope user-profile-icon"></i> {{$actor[0]->email}}
                                    </li>

                                    <li>
                                        <i class="fa fa-birthday-cake user-profile-icon"></i> {{$actor[0]->birth_date}}
                                    </li>

                                    <li>
                                        <i class="fa fa-phone user-profile-icon"></i> {{$actor[0]->phonenumber}}
                                    </li>

                                    @if($actor[0]->gender=="m")
                                        <li>
                                            <i class="fa fa-male user-profile-icon"></i> Hombre
                                        </li>
                                        @else
                                        <li>
                                            <i class="fa fa-female user-profile-icon"></i> Mujer
                                        </li>
                                    @endif


                                </ul>


                                <br />



                            </div>
                            <div class="col-md-9 col-sm-9 ">



                                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Profile</a>
                                        </li>
                                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Estadísticas sobre las que ha trabajado</a>
                                        </li>

                                    </ul>
                                    <div id="myTabContent" class="tab-content">

                                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                                            <!-- start user projects -->
                                            <table class="data table table-striped no-margin">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Project Name</th>
                                                    <th>Client Company</th>
                                                    <th class="hidden-phone">Hours Spent</th>
                                                    <th>Contribution</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>New Company Takeover Review</td>
                                                    <td>Deveint Inc</td>
                                                    <td class="hidden-phone">18</td>
                                                    <td class="vertical-align-mid">
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-success" data-transitiongoal="99"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>New Partner Contracts Consultanci</td>
                                                    <td>Deveint Inc</td>
                                                    <td class="hidden-phone">13</td>
                                                    <td class="vertical-align-mid">
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-danger" data-transitiongoal="15"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Partners and Inverstors report</td>
                                                    <td>Deveint Inc</td>
                                                    <td class="hidden-phone">30</td>
                                                    <td class="vertical-align-mid">
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-success" data-transitiongoal="45"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>New Company Takeover Review</td>
                                                    <td>Deveint Inc</td>
                                                    <td class="hidden-phone">28</td>
                                                    <td class="vertical-align-mid">
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-success" data-transitiongoal="75"></div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <!-- end user projects -->

                                        </div>
                                        <div role="tabpanel" class="tab-pane active" id="tab_content3" aria-labelledby="profile-tab">

                                            @if(auth()->user()->rol=="evaluator")
                                                <form action="{{route('pollster.update',$actor[0]->actors_id)}}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  onsubmit="return validarPasswordsIguales()" enctype="multipart/form-data">
                                                @else
                                                        <form action="{{route('admin.update',$actor[0]->actors_id)}}" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  onsubmit="return validarPasswordsIguales()" enctype="multipart/form-data">
                                            @endif

                                                @method('PUT')
                                                @csrf

                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="identification">Identificación: <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <input type="number" id="identification" name="identification" required="required" class="form-control" value="{{$actor[0]->actors_id}}">
                                                    </div>
                                                </div>

                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nombre <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <input type="text" id="firstname" name="firstname" required="required" class="form-control" value="{{$actor[0]->firstname}}">
                                                    </div>
                                                </div>
                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Apellido <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <input type="text" id="lastname" name="lastname" required="required" class="form-control" value="{{$actor[0]->lastname}}">
                                                    </div>
                                                </div>


                                                <div class="item form-group">
                                                    <label for="phonenumber" class="col-form-label col-md-3 col-sm-3 label-align">Celular
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <input id="phonenumber" name="phonenumber" class="form-control" type="text" name="middle-name" value="{{$actor[0]->phonenumber}}" >
                                                    </div>
                                                </div>
                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Gender</label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <div id="gender" class="btn-group" data-toggle="buttons">

                                                            @if($actor[0]->gender== "m")
                                                                <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                    <input type="radio" checked name="gender" value="m" class="join-btn" > &nbsp; Male &nbsp;
                                                                </label>
                                                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                    <input type="radio" name="gender" value="f" class="join-btn" > Female
                                                                </label>
                                                                @else
                                                                <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                    <input type="radio"  name="gender" value="m" class="join-btn" > &nbsp; Male &nbsp;
                                                                </label>
                                                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                    <input type="radio" checked name="gender" value="f" class="join-btn" > Female
                                                                </label>
                                                                @endif



                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Fecha de nacimiento <span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <input id="birthday" name="birthday" class="date-picker  form-control" required="required" type="date" value="{{$actor[0]->birth_date}}">
                                                    </div>
                                                </div>

                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Imagen
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <input id="urlphoto" name="urlphoto" class="form-control" type="file" accept=".jpg,.png">
                                                    </div>
                                                </div>


                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Contraseña
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <input id="password" name="password" class="form-control"  type="password">
                                                    </div>
                                                </div>
                                                <div class="item form-group">
                                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Repetir Contraseña
                                                    </label>
                                                    <div class="col-md-6 col-sm-6 ">
                                                        <input id="passwordConfirm" name="passwordConfirm" class="form-control"  type="password">
                                                    </div>
                                                </div>


                                                <div class="ln_solid"></div>
                                                <div class="item form-group">
                                                    <div class="col-md-6 col-sm-6 offset-md-3">
                                                        <button type="submit" class="btn btn-success">Modificar</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection

@section('script_section')

    <script src="{{URL::asset('js/functionsByLino.js') }}"></script>
@endsection
