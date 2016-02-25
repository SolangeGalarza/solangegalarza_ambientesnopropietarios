<?php

$conn = new mysqli('localhost', 'root',"", "supletorio");
$query = "SELECT * FROM materia ";
$result = $conn ->query($query);
if (!$result) die($conn ->error);
$rows = $result ->num_rows;
$materias=array();

for ($j = 0 ; $j < $rows ; ++$j){
  $result ->data_seek($j);
  $materias[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}

 $checkMaterias="";
 foreach ($materias as $materia) {

 	$checkMaterias.='<input type="checkbox" name="'.$materia['nombre'].'" value="'.$materia["id_materia"].'"> '.$materia["nombre"].'<br>';
 }


/*$query2 = "SELECT estudiante_x_materia.id_materia,nombre ,id_nivel from materia inner join estudiante_x_materia on (materia.id_materia=estudiante_x_materia.id_materia) 
and (estudiante_x_materia.id_estudiante='$id')and(id_nivel='$nivel')";
$result2 = $conn ->query($query2);
$rows2 = $result2 ->num_rows;
$materiasRegistradas=array();

for ($j = 0 ; $j < $rows ; ++$j){
  $result2 ->data_seek($j);
  $materiasRegistradas[] = $result2 ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}

foreach ($materiasRegistradas as $materia) {

	$checkMaterias.='<input type="checkbox" checked="true" name="materias[]" value="'.$materia["id_materia"].'"> '.$materia["nombre"].'<br>';
}
*/


echo  $checkMaterias;

?>