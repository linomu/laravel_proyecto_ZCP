@extends('layouts.master')

@include("../layouts/userInformation")



@section('content')

    <div class="container">
        <h1>Estadísticas</h1>
        <div class="row">
            <div class="col-md-6">

                <div id="chartContainer" style="height: 400px; width: 400px"></div>
            </div>
            <div class="col-md-6">Estadistica de Viviana</div>

        </div>

        <div class="row">
            <div class="col-md-6">
                Estadistica de Juan

            </div>
            <div class="col-md-6">
                <div id="chartContainerTomas" style="height: 370px; width: 100%;"></div>

            </div>


        </div>
        <div class="row">
            <div class="col-md-6">
                Estadistica de Pu

            </div>
            <div class="col-md-6">
                Estadistica de plus

            </div>


        </div>



    </div>








@endsection()

@section('script_section')
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainerTomas", {
                theme: "light1", // "light2", "dark1", "dark2"
                animationEnabled: false, // change to true
                title:{
                    text: "¿Qué preguntas tuvieron una respuesta promedio menor a 3?"
                },
                data: [
                    {
                        // Change type to "bar", "area", "spline", "pie",etc.
                        type: "column",
                        dataPoints: [
                                @foreach($consultaTomas as $queryTomas)
                            { label: "{{$queryTomas->description}}",  y: {{$queryTomas->promedio}}  },
                            @endforeach
                        ]
                    }
                ]
            });
            chart.render();


            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "¿Qué porcenteje de ciudadanos respondieron más a tus preguntas?"
                },
                data: [{
                    type: "pie",
                    startAngle: 240,
                    yValueFormatString: "##0.00\"%\"",
                    indexLabel: "{label} {y}",
                    dataPoints: [
                        {y: {{$adultos}}, label: "Adultos"},
                        {y: {{$jovenes}}, label: "Jóvenes"},
                    ]
                }]
            });
            chart.render();


        }
    </script>



@endsection
