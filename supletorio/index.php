<?php
$conn = new mysqli('localhost' , 'root' , '', 'supletorio');
if ($conn->connect_error) die($conn ->connect_error);

$query = "SELECT * FROM nivel";
$result = $conn ->query($query);
if (!$result) die($conn ->error);

$rows = $result ->num_rows;
$niveles = array();
for ($j = 0 ; $j < $rows ; ++$j){
  $result ->data_seek($j);
  $niveles[] = $result ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Supletorio</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
</head>
<body>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-9 col-md-offset-3">
			<h1>Registro de materias </h1>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4">
			<label for="nivel">Nivel</label>
			<select id="nivel" name="nivel">
				<option>Seleccione</option>
				<?php
				foreach($niveles as $nivel){
    				echo '<option value="' . $nivel['id_nivel'] . '">' . $nivel['nombre'] . '</option>';
  				}
				?>
			</select>
			<div class="row">
				<div class="col-md-12">
					<button type="button" class="btn btn-primary guardarm" id="btnGuardarMaterias">Guardar</button>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<button type="button" class="btn btn-primary cancelarm" id="btnCancelar">Cancelar</button>
				</div>
			</div>
		</div>
		<div class="col-md-4 ">
			<label for="lblnivel-materia">Lista de materias del nivel</label>
			<div id="nivel-materia">        
			</div>
		</div>
		<div class="col-md-4" id=>
			<label for="materias">Lista de todas las materias</label>
			<div id="lstMaterias">
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