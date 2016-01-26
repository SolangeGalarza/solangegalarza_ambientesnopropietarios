$(document).ready(function(){

 $("form#usuario").validate({
 	rules :{

 		nombre: {
 			required:true,
 			minlength: 2

 		},

 		email: {
 			required:true,
 			email:true
 			

 		},

 		telefono :{
 			required:true,
 			minlength: 9

 		},

 		contrasenia: {

 			required:true,
 			minlength: 4
 		},

        contrasenia2:{

            required:true,
        	equalTo:"#contrasenia"
        },

        usuario :{

        	required:true,
        	remote: {

        url: "rpc/validar_usuario.php",
        type: "post",
        data:{
         
         usuario: function(){
            return $('#txtusuario').val();
          }

        }


        	}
    }


 	},

messages:{

	nombre:{

		required:"Es necesario ingresar tu nombre",
		 minlength: $.validator.format("Al menos {0} caracteres requeridos")
	},

	email:{

		required:"Es necesario ingresar un email , para completar el registro",
		email: "Por favor , Ingrese un email valido"
	},

	telefono :{

		required:"Por favor , Ingrese su numero telefonico",
		minlength:$.validator.format("Al menos {0} caracteres requeridos")
	},
	contrasenia:{

		required:"Es necesario que escriba una contraseña para el registro",
		minlength: $.validator.format("Al menos {0} caracteres requeridos")
	},

	contrasenia2:{

		required: "Por favor repita la contraseña , para su confirmacion.",
		equalTo: "La contraseña debe ser igual a la que ingreso antes"
	},

	usuario: {

		required:"Por favor ingrese el nombre de usuario, para continuar con el registro",
		remote:"El usuario ya esta registrado , intente con otro"
	}


}

 });

$('#btnRegistrar').on('click',  function(event) {
  event.preventDefault();
  if($('form#usuario').valid())
  {
    
    $.ajax({
      url: 'rpc/procesar.php',
      type: 'post',
      dataType:"json",
      data: {
        nombre: $('form#usuario #nombre').val(),
        email: $('form#usuario #email').val(),
        telefono:$('form#usuario #telefono').val(),
        direccion:$('form#usuario #direccion').val(),
        provincia:$('form#usuario #provincia').val(),
        canton:$('form#usuario #canton').val(),
        parroquia:$('form#usuario #parroquia').val(),
        usuario:$('form#usuario #usuario').val(),
        contrasenia:$('form#usuario #contrasenia').val()
},
    })
    .done(function(msg) {
      if(msg == "Mensaje enviado con éxito.")
        $('#mensaje').addClass('alert-success');
      else
        $('#mensaje').addClass('alert-danger');

      $('#mensaje').html(msg.result);
      console.log("success");

      $('#tabla_usuarios tbody').html(msg.celdasU);
      $('#usuario').trigger("reset");


    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      // $('#usuario').reset();
      console.log("complete");
    });
    


  }


});


$('#txtprovincia').on('change', function(event) {
  event.preventDefault();
  
  $.ajax({
    url: 'rpc/get_cantones.php',
    type: 'POST',
    data: {provincia: $('#txtprovincia').val()},
  })
  .done(function(msg) {
    $('#txtcanton').html(msg);
    $('#txtparroquia').html('<option value="">Seleccione...</option>');
    console.log("success");
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
  
});


$('#txtcanton').on('change', function(event) {
  event.preventDefault();
  
  $.ajax({
    url: 'rpc/get_parroquias.php',
    type: 'POST',
    data: {canton: $('#txtcanton').val()},
  })
  .done(function(msg) {
    $('#txtparroquia').html(msg);
    console.log("success");
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
  
});

var campo,id ,valor; 

 $('td.editable span').each(function(index, el) {
 $(el).on('click', function(event) {
  //event.stopPropagation();
   //event.preventDefault();
   $("td:not(.id)").removeClass("editable");
   td=$(this).closest("td");
   campo=$(this).closest("td").data("campo");
   valor=$(this).text();
   id=$(this).closest("tr").find(".id").text();
    td.text("").html('<input type="text" id="modificar" value="'+ $(this).html() +'"> <button id="guardar_' + $(this).attr("id") + '">Guardar cambios</button>  <button id="cancelar_' + $(this).attr('id') + '">Cancelar</button>');
    //$('#modificar').focus();
   // $(this).off('click');

    
       $('#guardar_' + $(this).attr('id')).on('click', function(event) {
    event.preventDefault();
    nuevovalor=$(this).closest("td").find("input").val();
    //event.stopPropagation();
       $.ajax({
         url:'rpc/actualizar.php',
         type:'post',
         dataType:'json',
         data: {

          valorM: $('#modificar').val(),
          campo:campo,
          id:id

        },
         })
  .done(function(msg) {
       $('#mensaje2').html(msg.result);
      //$('#tabla_usuarios tbody').html(msg.celdasUsu);
      td.html("<span>"+nuevovalor+"</span>");
          $("td:not(.id)").addClass("editable");
      alert($(this).parent().html());
      


})
      .fail(function() {
      console.log("error");
      })
      .always(function() {
        console.log("complete");
      });
      
   });

      var valor;

  $('#cancelar_' + $(this).attr('id')).on('click', function(event) {
    
     td.html("<span>"+valor+"</span>");
      $("td:not(.id)").addClass("editable");
  



});



   });



   

       

   });

//$("#busqueda").focus();

  $("#busqueda").keyup(function(e){
                                
            
                    $.ajax({
                    type: "POST",
                    url: "rpc/buscar.php",
                    data: {
                      consulta :$("#busqueda").val()
                    },
                    dataType: "json",
                    
              })

       .done(function(msg) {
       $('#mensaje2').html(msg.result);
       $('#tabla_usuarios tbody').html(msg.celdasBus);
        
      
      })
      .fail(function() {
      console.log("error");
      })
      .always(function() {
        console.log("complete");
      });
      
   });






})


	