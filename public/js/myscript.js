var x;
x=$(document);
x.ready(inicializarEventos);
function inicializarEventos(){
$('#alert').hide();

    $('.btnDelete').click(function(e){
        e.preventDefault();
        if(!confirm('Está seguro de eliminar el administrador')){
            return false;
        }
        var row = $(this).parents('tr');
        var form = $(this).parents('form');
        var url = form.attr('action');

        $('#alert').show();

        console.log(url);
        
        $.post(url, form.serialize(), function(result){
            row.fadeOut();
            $('#alert').html(result.mensaje);
        }).fail(function(){
            $('#alert').html('Algo salió mal')
        });

    });

    $('.clickable-row').click(function(){
        $('selector').css('cursor', 'pointer');
        window.location = $(this).data("href")
    });

    $('.clickable-row').mouseover(function(e){
        $(this).css('cursor', 'pointer');
        
        
    });




}