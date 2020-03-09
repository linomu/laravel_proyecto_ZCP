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


    	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    	<link rel="stylesheet" href="css/aos.css">
    	<link rel="stylesheet" href="css/jquery.fancybox.min.css">


    	<link rel="stylesheet" href="css/style.css">

		<title>Encuesta</title>
	</head>
	<body>
		
    <div class="jumbotron bg-primary text-light ml-4 mr-4">
        <form class="form-inline mb-2 mx-sm-3">
        <label class="mb-2 mx-sm-3">Género:</label>
        <div class="form-group mb-2 mx-sm-3">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
        <label class="form-check-label" for="exampleRadios1">
         F
        </label>
        </div>

        <div class="form-group mb-2 mx-sm-3">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
        <label class="form-check-label" for="exampleRadios1">
         M
        </label>
      </div>

        <div class="form-group mb-2 mx-sm-3">
        <label for="example-datetime-local-input" class="col-form-label">Fecha de nacimiento:</label>
         <input class="form-control mx-sm-3" type="date" id="example-date-input">
        </div>
        </form>
    </div>

  <h1 class="text-uppercase">{{$test->name}}</h1>
  <h2>{{$test->description}}</h2>
        <iframe class="jumbotron mr-4" height="2000" width="800" align="right" src="http://bajalogratis.com/">
            
        </iframe>

        <div class="jumbotron bg-light col-4 ml-4">
        @foreach ($questions as $question)
           <p>{{$question->description}}</p>
              <div>
                <table>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>YES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input  type = "button" class="btn btn-danger" value=1></input></td>
                            <td><input  type = "button" class="btn btn-warning" value=2></input></td>
                            <td><input  type = "button" class="btn btn-success" value=3></input></td>
                            <td><input  type = "button" class="btn btn-info" value=4></input></td>
                            <td><input  type = "button" class="btn btn-primary" value=5></input></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
            @endforeach
        </div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

		</body>
</html>