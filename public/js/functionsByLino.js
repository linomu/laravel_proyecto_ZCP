var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos() {

    //Con las siguientes 3 lineas de codigo, hago que el valor minimo que puede obtener la fecha de nacimiento, es paraalguien que tiene 15 anos
    var startdate = moment();
    startdate = startdate.subtract(5475, "days");
    startdate = startdate.format("YYYY-MM-DD");

    $("#birthday").attr("max", startdate);

    var today = new Date();
    var month = (today.getMonth()+1);
    var day = today.getDate();
    if((today.getMonth()+1)<10){
        var month = "0"+(today.getMonth()+1);

    }
    if(today.getDate()< 10){
        day = "0" + (today.getDate());
    }
    var date = today.getFullYear()+'-'+month+'-'+day;
    //alert(date);
    $("#deadline").attr("min",date);
    $("#deadline").attr("value",date);




}

function validar(){
    var fechaDeNaciemiento = $("#birthday").val();





   /*

    console.log(fechaDeNaciemiento);
    var f = new Date();
    var fechaActual = (f.getFullYear() + "-" + (f.getMonth() +1) + "-" + f.getDate());
    var hoy = moment(fechaActual);

    //Puedo en vez de years, usar days
    //console.log(hoy.diff(fechaDeNaciemiento, 'years'), ' dias de diferencia');
    var days = hoy.diff(fechaDeNaciemiento, 'days');
    if(days < 5475){
        //Es menor de 15 anios
        alert("Debes tener al menos 15 años");

        return false;
    }


    */

    var email = $("#txt_email").val();
    var emailConfirmation = $("#txt_email2").val();
    if(email != emailConfirmation){
        alert("Los Correos no coinciden")
        return false;
    }

    return true;
}


