

var x;
x=$(document);
x.ready(inicializarEventos);
function inicializarEventos(){

    $("#textUsuarios").keyup(function(ww)
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


    $("#textinput").keyup(function()
    {

        var url = $(this).val();
        console.log(url);
        mensaje_url = document.getElementById("mensajeUrl");
        if(isValidURL(url)){
            console.log("entro");
            mensaje_url.innerHTML="";
        }else{
            console.log(" no entro");

            var advertencia=correos => 'tiene que tener el formato https://www.***.**** ';
            mensaje_url.innerHTML=advertencia(url);
        }
         var aux="";
        if(url===aux) {
            console.log("entro");
            mensaje_url.innerHTML = "";
        }


    });

    $("#textinput").bind('paste', function() {

        console.log("entro");
    });
    $("#textUsuarios").bind('paste', function() {
        console.log("holaa");
        var correosErroneos = new Array();
        var losCorreos = $(this).valueOf('textUsuarios');
        console.log(losCorreos);

    });


}


function validar_email(email )
{
    var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email) ? true : false;
}

function isValidURL(str) {
    var pattern = new RegExp('^((https?:)?\\/\\/)?'+ // protocol
        '(?:\\S+(?::\\S*)?@)?' + // authentication
        '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
        '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
        '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
        '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
        '(\\#[-a-z\\d_]*)?$','i'); // fragment locater
    if (!pattern.test(str)) {
        return false;
    } else {
        return true;
    }
}
