var x;
x=$(document);
x.ready(inicializarEventos);
function inicializarEventos(){
    $('.btnDelete').click(function(e){
        e.preventDefault();
        if(! confirm('Está seguro de eliminar el administrador')){
            return false;
        }
    });
}