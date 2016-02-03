 $(document).ready(function (){
   $("#submit").click(function (){
        if($("#email").val()==""||$("#contrasena").val()=="")
            $("#errorMessage").html("por favor, ingrese credenciales");
        else
            $.post( $("#sesión").attr("action"), 
                    $("#sesión :input").serializeArray(),
                    function(data){
                        $("errorMessage").html(data);
                    });
        $("#sesión").submit( function(){
            return false;
        });
     });
    });
