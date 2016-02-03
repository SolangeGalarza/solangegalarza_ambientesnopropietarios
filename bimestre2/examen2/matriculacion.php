<?php

$conn = new mysqli('localhost' , 'root' , '', 'examen2');
if ($conn->connect_error) die($conn ->connect_error);

$query = "SELECT * FROM nivel";
$result = $conn ->query($query);
if (!$result) die($conn ->error);

$rows = $result ->num_rows;
$nivel = array();
for ($j = 0 ; $j < $rows ; ++$j){
  $result ->data_seek($j);
  $nivel[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}
// 

$query2 = "SELECT * FROM materia";
$result2 = $conn ->query($query2);
if (!$result2) die($conn ->error);
$rows2 = $result2 ->num_rows;
$usuarios=array();

for ($j = 0 ; $j < $rows2 ; ++$j){
  $result2 ->data_seek($j);
  $materias[] = $result2 ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}
//print_r($usuarios);


$result ->close();
$conn ->close();
?>

<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8"> 
<title> Examen 2</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">

 
</head>
<body>

<div class="container">

<div class="row" id="encabezado">
<div class="col-md-12">


<p id ='inicio'><b>Bienvenido en esta pantalla puedes matricularte</b></p>


</div>
</div>
</div>
<br>
<br>
<br>
<br>

<form action="" method='POST' id="sesión" novalidate="novalidate">


<div class="row" id="fila1">

<div class="col-md-12">
</div>
<div class="col-md-2">
<label for="nivel">Selecciona el nivel</label>
</div>
<div class="col-md-3">
<select id="nivel" name="nivel">
  <option value="">Seleccione...</option>
<?php
  foreach($nivel as $nivel){
    echo '<option value="' . $nivel['id_nivel'] . '">' . $nivel['nombre'] . '</option>';
  }

?>
</select>
</div>
</div>

<div class="row" id="fila2">
<div class="col-md-3">
</div>
<div class="col-md-2">
<label for="materia">Lista de materias disponibles en  Nivel</label>
</div>

<div class="col-md-3">
<select id="materia" name="materia">
  <option value="">Seleccione...</option>
</select>
</div>
</div>
<br>
<br>
<br>
<div class="col-md-3">
	</div>
<div class="col-md-3">
<button  id="registrarm" name="registrarm"> Registrar materias</button>
</div>
</div>

</form>
<table id="tabla_registro" class="table" value="Lista de materias en las que se encuentra registrado">
<thead>
  <tr>
    <th>Materia</th>
    <th>Nivel</th>
    <th>Profesor</th>
  </tr>
</thead>
<tbody>
  <?php
  $contador = 0;
  foreach ($usuarios as $usuario) {

    echo '<tr>';
     echo '<td class="id" data-campo="id"><span>'. $materia['nombre'] .'</span></td>';
     echo '<td class="id" data-campo="id"><span>'. $materia['nivel'] .'</span></td>';
     echo '<td class="id" data-campo="id"><span>'. $materia['profesor'] .'</span></td>';
    echo '</tr>';

  $contador++;
  }
  ?>
  
  </tbody>
</table>
</div>

<div class="row" id="mensaje2">
<div class="col-md-12">
<div id="mensaje2" class="success"></div>
</div>
</div>

</div>

</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/additional-methods.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</body>
</html>