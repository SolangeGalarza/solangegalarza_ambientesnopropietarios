<?php  
	$result="";

	if($_POST){
		
        $nivel=$_POST['nivel'];
		$materias=$_POST['materias'];
		$conn = new mysqli('localhost', 'root',"", "supletorio");
  		if( $conn->connect_error ) 
    		$result = "No se puede establece la conexión con la BDD";
 		else{
 			$contador=0;
 			foreach ($materias as $materia=> $value) {
 				$q_update = "UPDATE materia set id_materia=$value ,id_nivel=$nivel
                where id_materia=$value";
				$res = $conn->query($q_update);
				
			}

			if(!$res){
     			$result = 'Existi&oacute; un error al insertar.' . $conn->error;
            } 
   			else {
     			$result = 'Mensaje enviado con &eacute;xito.';
    		}
		}
		/*$q_select= "SELECT m)";
		    $res2 = $conn->query($q_select);
		    $rows = $res2 ->num_rows;
		    $materias2 = array();
		    for ($j = 0 ; $j < $rows ; ++$j){
		    $res2 ->data_seek($j);
		    $materias2[] = $res2 ->fetch_array(MYSQLI_ASSOC);
		}

		$regMaterias="";
		foreach ($materias2 as $materia) {
			$regMaterias.='
		     	<tr>      
		          	<td >'.$materia["nombre"].'</td>
			        <td >'.$materia["id_nivel"].'</td>
			        <td >'.$materia["profesor"].'</td>
		        </tr>

		    ';
		}*/


		// $salidaJSON=array("result" => $result,"regMaterias" => $regMaterias);

		echo ($result);

	}