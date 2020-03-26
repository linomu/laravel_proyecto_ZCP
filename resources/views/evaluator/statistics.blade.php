@extends('layouts.master')

@include("../layouts/userInformation")



@section('content')

    <div class="container">
        <h1>Usuarios que contestaron y que No contestaron la encuesta</h1>
        <div class="row">
            <div class="col-md-6">
                <div id="chartContainer" style="height: 400px; width: 400px"></div>
            </div>
            <div class="col-md-6">Estadistica de Viviana</div>
            <script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    title:{
        text: "Estadisticas",
        horizontalAlign: "center"
    },
    data: [{
        type: "doughnut",
        startAngle: 60,
        //innerRadius: 60,
        indexLabelFontSize: 17,
        indexLabel: "{label} - #percent%",
        toolTipContent: "<b>{label}:</b> {y} (#percent%)",
        dataPoints: [
            { y: {{$porcentajesi}}, label: "Sí contestaron" },
            { y: {{$porcentajeno}}, label: "No contestaron" }
        ]
    }]
});
chart.render();

}
</script>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div id="chartMinMax" style="margin: 20px; height: 300px; width: 100%;"></div>
            </div>
            <div class="col-md-6">
                Estadistica de Tomas

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

            var chart = new CanvasJS.Chart("chartMinMax", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title: {
                    text: "¿Cuál fue la pregunta con mayor y menor puntuación?"
                },
                axisY: {
                    title: "Puntuación",
                    includeZero: false
                },
                axisX: {
                    title: "Preguntas"
                },
                data: [{
                    type: "column",
                    dataPoints: [
                        { label: "{{$descMax}}", y: {{$valueMax}}},
                        { label: "{{$descMin}}", y: {{$valueMin}}}
                    ]
                }]
            });
            chart.render();
        }
    </script>

@endsection
