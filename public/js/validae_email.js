

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

        coreos = document.getElementById("mensaje");

        var cantidad_de_correos = correosErroneos.length;

        if(cantidad_de_correos>0){
                    var primer_posicion=correosErroneos[0];
                    var aux="";
                    if (primer_posicion===aux){
                        coreos.innerHTML="";
                    }else
                    {
                        console.log(primer_posicion)
                        var advertencia=correos => 'revisar los siguientes correos    '+correos;
                        coreos.innerHTML=advertencia(correosErroneos);
                    }


        } else{
            coreos.innerHTML="";
        }

    });
}


function validar_email(email )
{
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}
