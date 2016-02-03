<?php

if($_POST){

  $nivel = $_POST['nivel'];

  $conn = new mysqli('localhost' , 'root' , '', 'examen2');
      
      if ($conn->connect_error) die($conn ->connect_error);

      $query = "SELECT * FROM materia WHERE id_nivel = '$nivel'";
      
      $result = $conn ->query($query);
      
      if (!$result) die($conn ->error);

      $rows = $result ->num_rows;
      
      $materia = array();

      for ($j = 0 ; $j < $rows ; ++$j){
        $result ->data_seek($j);
        $materia[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
  }
  // print_r($cantones);

  $options = "";
  foreach ($materia as $materia) {
    $options .= '<option value="' . $materia['id_materia'] . '">' . htmlentities($materia["nombre"]) . '</option>';
  }

  echo $options;

  $result ->close();
  $conn ->close();

  
} else {
  echo "No se han recibido datos";
}  

?>