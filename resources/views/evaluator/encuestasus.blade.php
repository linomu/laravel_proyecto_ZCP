<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Encuesta ZCP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ URL::asset('vendors/font-awesome/css/font-awesome.min.css') }}"rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ URL::asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- iCheck -->

    <link href="{{ URL::asset('vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">

    <!-- bootstrap-progressbar -->

    <link href="{{ URL::asset('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <!-- JQVMap -->

    <link href="{{ URL::asset('vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->

    <link href="{{ URL::asset('vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->

    <link href="{{ URL::asset('build/css/custom.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleEnc.css') }}">
</head>

<body>
       <iframe class="container-enc mr-3" height="800" width="800" align="right" src="{{$page}}"></iframe>
        <div class="container-enc col-4 ml-3 text-center">
            <h3>Datos del Usuario</h3>
            <form id="encuesta_form" name="encuesta" action="{{ route('sus.send_answers') }}" method="post">
                <label class="mx-sm-3">Género:</label>
                <div class="form-group mx-sm-1">
                    <input class="form-check-input" type="radio" name="femenino" id="radioFemenino" value="f">
                    <label class="form-check-label" for="exampleRadios1">F</label>
                </div>

                <div class="form-group mx-sm-2">
                    <input class="form-check-input" type="radio" name="masculino" id="radioMasculino" value="m">
                    <label class="form-check-label" for="exampleRadios1">M</label>
                </div>

                <div class="form-group mx-sm-3">
                    <label for="date">Edad:</label>
                    <input class="form-control mb-2 mt-2" type="text" id="age-input" name="userage">
                </div>

             <h3 class="text-uppercase text-primary">{{$name[0]->description}}</h3>
                @foreach ($preguntas as $pregunta)
                <div class="container text-center">
                <p name="nombrepregunta">* {{$pregunta->description}}</p>
                 <div class="mb-2 mt-2">
                    <label for="inputState">Seleccione de 1 a 5</label>
                    <select id="rta" name="respuesta" class="form-control">
                        <option name="opcion" value=1>1</option>
                        <option name="opcion" value=2>2</option>
                        <option name="opcion" value=3>3</option>
                        <option name="opcion" value=4>4</option>
                        <option name="opcion" value=5>5</option>
                    </select>
                </div>
            </div>
                @endforeach
                <input type="submit" id="btnEnviar" name="enviar" class="btn btn-primary col-4 ml-4 mt-4" value="Enviar" align="center">
            </form>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


     