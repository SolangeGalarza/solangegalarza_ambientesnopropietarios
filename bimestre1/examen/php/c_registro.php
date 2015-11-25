<?php

if($_POST){
  $email = $_POST['email'];
  $contrasena = md5($_POST['contrasena']);
  $verificar_contrasena = md5($_POST['verificar_contrasena']);
  
  if($contrasena !== $verificar_contrasena){
    echo htmlentities('Las contraseñas no coinciden');
  }
else{


$conn = new mysqli('localhost' , 'root' , '', 'examen');
  if ($conn->connect_error) die($conn ->connect_error);
  
   $consulta= $conn->query("SELECT * from usuarios where email='$email'") ;
  
   $fila=$consulta->num_rows;

  if ($fila==0){
  	
    $query = "INSERT INTO usuarios
                  (email, 
                    contrasena, 
                    verificar_contrasena
                  )
                VALUES (
                  '$email',
                  '$contrasena',
                  '$verificar_contrasena'
                  )
  ";
  $result = $conn ->query($query);
  if (!$result) {
        
        echo htmlentities('Usuario Ingresado Correctamente');

  }
  	
  }
  else{


echo htmlentities('Ya existe el email en la base de datos, intente con otro');

}

	


}

}




?>