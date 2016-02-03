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


})