<?php
$result="";
if($_POST){
$nivel=$_POST['nivel'];
$materias=$_POST['materias'];
$conn = new mysqli('localhost', 'root',"", "supletorio");
  				if( $conn->connect_error ) 
    				$result = "No se puede establece la conexión con la BDD";
 			    else{
 			    	
 			    	foreach ($materias as $materia=> $value) {
 			    	$q_update = "UPDATE materia set id_materia=$value,id_nivel=$nivel where id_materia=$value";
					$res = $conn->query($q_update);
					}

					if(!$res){
     					 $result = 'Existi&oacute; un error al insertar.' . $conn->error;
               
 					 } 
   				    else {
     					 $result = 'Mensaje enviado con &eacute;xito.';
    					 }
                }

               

echo ($result);

}









