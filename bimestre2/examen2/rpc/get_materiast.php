<?php

$conn = new mysqli('localhost' , 'root' , '', 'examen2');
if ($conn->connect_error) die($conn ->connect_error);

$query2 = "SELECT * FROM materia";
$result2 = $conn ->query($query2);
if (!$result2) die($conn ->error);
$rows2 = $result2 ->num_rows;
$usuarios=array();

for ($j = 0 ; $j < $rows2 ; ++$j){
  $result2 ->data_seek($j);
  $materias[] = $result2 ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}

$celdasMaterias = "";
  foreach ($materias as $materia) {
    $celdasMaterias .= 

'<tr>
					<td>'.$materia["nombrem"].'</td>
					<td>'.$materia["nivel"].'</td>
					<td>'.$materia["profesor"].'</td>
					
					
					
				</tr>
			 ';



  }

  echo $celdasMaterias;
