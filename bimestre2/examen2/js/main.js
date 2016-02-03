
$(document).ready(function(){

 $("form#estudiante").validate({
 	rules :{

 		nombres: {
 			required:true,
 			minlength: 5

 		},

 		apellidos:{
 			required:true,
 			minlength: 5

 		},

 		email: {
 			required:true,
 			email:true
 			

 		},

 		
 		contrasena: {

 			required:true,
 			minlength: 5
 		},

        vcontrasena:{

            required:true,
        	equalTo:"#contrasena"
        }

	},

messages:{

	nombre:{

		required:"Es necesario que ingrese su nombre completo",
		 minlength: $.validator.format("Al menos {0} caracteres requeridos")
	},

	apellidos :{

		required:"Es necesario que ingrese su apellido",
		minlength:$.validator.format("Al menos {0} caracteres requeridos")
	},

	email:{

		required:"Es necesario ingresar un email válido , para completar el registro",
		email: "Por favor , Ingrese un email válido"
	},

	contrasena:{

		required:"Es necesario que escriba una contraseña para el registro y su seguridad",
		minlength: $.validator.format("Al menos {0} caracteres requeridos")
	},

	vcontrasena:{

		required: "Por favor vuelva a escribir la contraseña.",
		equalTo: "La contraseña debe contener los mismos parámetros que la anterior"
	}
}



 });



$('#registrarme').on('click',  function(event) {
  event.preventDefault();
  if($('form#estudiante').valid())
  {
    
    $.ajax({
      url: 'rpc/procesar.php',
      type: 'post',
      data: {
        nombres: $('form#estudiante #nombres').val(),
        apellidos:$('form#estudiante #apellidos').val(),
        email: $('form#estudiante #email').val(),
        contrasena:$('form#estudiante #txtcontrasena').val()
},
    })
    .done(function(msg) {
      		if(msg == "Mensaje enviado con éxito.")
       		 $('#mensaje').addClass('alert-success');
      		else
       		 $('#mensaje').addClass('alert-danger');

      		$('#mensaje').html(msg);
      			console.log("success");
    })
    		.fail(function() {
      			console.log("error");
    		})
    		.always(function() {
      
      		console.log("complete");
    		});
    


  }


});

})