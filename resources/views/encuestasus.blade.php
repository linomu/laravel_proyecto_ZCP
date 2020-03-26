<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900">
    	<link rel="stylesheet" href="fonts/icomoon/style.css">
    	<link rel="stylesheet" href="css/bootstrap.min.css">
    	<link rel="stylesheet" href="css/magnific-popup.css">
    	<link rel="stylesheet" href="css/jquery-ui.css">
    	<link rel="stylesheet" href="css/owl.carousel.min.css">
    	<link rel="stylesheet" href="css/owl.theme.default.min.css">
    	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
        <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

    	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    	<link rel="stylesheet" href="css/aos.css">
    	<link rel="stylesheet" href="css/jquery.fancybox.min.css">


    	<link rel="stylesheet" href="css/style.css">

		<title>Encuesta</title>
	</head>
	<body>

        <iframe class="jumbotron mr-4" height="2000" width="800" align="right" src="{{$page}}"></iframe>
        <div class="container-fluid bg-light col-4 ml-4 text-center">
             <h3>Datos del Usuario</h3>
            <form id="encuesta_form" name="encuesta" action="{{route('sus.send_answers')}}" method="POST">
                <label class="mx-sm-3">Género:</label>
                <div class="form-group row mx-sm-3">
                    <input class="form-check-input" type="radio" name="femenino" id="radioFemenino" value="f" checked>
                    <label class="form-check-label" for="exampleRadios1">F</label>
                </div>

                <div class="form-group row mx-sm-2">
                    <input class="form-check-input" type="radio" name="masculino" id="radioMasculino" value="m" checked>
                    <label class="form-check-label" for="exampleRadios1">M</label>
                </div>

                <div class="form-group row mx-sm-3">
                    <label for="date" class="col-form-label mb-2 mx-sm-3">Fecha de nacimiento:</label>
                    <input class="form-control mx-sm-3" type="date" id="date-input" name="birthdate">
                </div>

                <div class="form-group row mx-sm-3">
                    <label for="exampleInputEmail1" class="mx-sm-3">Email:</label>
                    <input type="email" class="form-control" id="InputEmail" name="useremail" aria-describedby="emailHelp" value="example@email.com">
                </div>

             <h3 class="text-uppercase text-primary text-center">{{$name[0]->description}}</h3>
                @foreach ($preguntas as $pregunta)
                <div class="container text-center">
                <p>* {{$pregunta->description}}</p>
                 <div class="mb-2 mt-2">
                    <label for="inputState">Seleccione de 1 a 5</label>
                    <select id="rta" name="respuesta" class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
                @endforeach
                <input type="button" id="btnEnviar" name="enviar" class="btn btn-primary col-4 ml-4 mt-4" value="Enviar" align="center">
            </form>
        </div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		</body>
</html>