
var x;
x=$(document);
x.ready(inicializarEventos);
function inicializarEventos(){

    alert("holu validarurl");
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


/**
 * Tiene que recibir:
 *  - la url a revisar
 *  - indicar si es obligatorio [1|0]. Si es obligatorio, devuelve
 *    false si la url esta vacia
 *  - indicar si validamos que la direccion pueda ser de un servidor
 *    ftp [1|0]
 * Devuelve True o False
 */
function isValidUrl(url,obligatory,ftp)
{
    // Si no se especifica el paramatro "obligatory", interpretamos
    // que no es obligatorio
    if(obligatory==undefined)
        obligatory=0;
    // Si no se especifica el parametro "ftp", interpretamos que la
    // direccion no puede ser una direccion a un servidor ftp
    if(ftp==undefined)
        ftp=0;

    if(url=="" && obligatory==0)
        return true;

    if(ftp)
        var pattern = /^(http|https|ftp)\:\/\/[a-z0-9\.-]+\.[a-z]{2,4}/gi;
    else
        var pattern = /^(http|https)\:\/\/[a-z0-9\.-]+\.[a-z]{2,4}/gi;

    if(url.match(pattern))
        return true;
    else
        return false;
}
