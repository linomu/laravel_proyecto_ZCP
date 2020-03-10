

var x;
x=$(document);
x.ready(inicializarEventos);
function inicializarEventos(){

    $("#textUsuarios").keyup(function()
    {

        //convierte en un array todas las lineas del mensaje
        var correosErroneos = new Array();
        var losCorreos = $(this).val();
        var arreCorreos = losCorreos.split("\n");
        console.log(arreCorreos);
        for (var i=0; i<arreCorreos.length; i++){
            if(validar_email(arreCorreos[i])) {
                console.log("correcto ");
            }
            else {
                correosErroneos.push(arreCorreos[i])
                console.log("incorrecto");
            }


        }
        //por cada linea, la valida, si no es correo , saca un mensaje
        console.log(correosErroneos);
       alert("tiene "+correosErroneos);
    });
}


function validar_email(email )
{
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}
