$(document).ready(function(){

$('#lstMaterias')
 event.preventDefault();
        
        $.ajax({
            url: 'rpc/get_materias.php',
        })
        .done(function(msg) {
            $('#lstMaterias').html(msg);
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        
    
    var mats=[];
    $('#btnGuardarMaterias').on('click', function(e) {
        event.preventDefault();
        $('input[type=checkbox]').each(function(){
            if (this.checked) {
                mats.push($(this).val());
            }
        }); 
        $.ajax({
            url: 'rpc/guardarMaterias.php',
           dataType:'json',
           type:'POST',
            data: {
                materias: mats,
                nivel:$('#nivel').val()
        },
        })
        .done(function(msg) {
            $('#nivel-materia').html(msg);
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        


    });

    $('#nivel').on('change',function(e){
    e.preventDefault();
    $.ajax({
            url: 'rpc/materias_elegidas.php',
            type:'POST',
            data:{
                nivel: $(this).val()
            },
        })
        .done(function(msg) {
            $('#nivel-materia').html(msg);
           
            console.log("success");
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });


    });

       $('#btnCancelar').on('click',function(e){

        $('input[type=checkbox]').each(function() {
            if(this.checked){

                $(this).removeAttr('checked');
            }
            
        });

        });
});












