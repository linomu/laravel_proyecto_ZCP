var x;
x=$(document);
x.ready(inicializarEventos);

function inicializarEventos() {


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
