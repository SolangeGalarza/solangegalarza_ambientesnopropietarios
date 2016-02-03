<?php


if($_POST){
  $email = $_POST['email'];
  $contrasena = md5($_POST['contrasena']);
  
  $conn = mysql_connect("localhost", "root", "");
  mysql_select_db("examen2", $conn);

$consulta= mysql_query("SELECT * from estudiante where email='$email'",$conn);
$filas=mysql_num_rows ($consulta); 

if(($email=="")||($contrasena==""))
{
   echo htmlentities('Ingrese usuario y contraseña');
}

else
{

if($filas!=0)
{

   $_SESSION['email'] = $email;
     $_SESSION['contrasena'] = $contrasena;
     http_redirect('matriculacion.php');
}

else
{
  echo htmlentities('Usuario y/o contraseña incorrectos');
}

                       
}

}

?>

<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8"> 
<title> Examen 2</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">


 
</head>
<body>

<div class="container">

<div class="row" id="encabezado">
<div class="col-md-12">
<div class="col-md-3">

<p id ='inicio1'><b>Inicia sesión para matricularte</b></p>


</div>
</div>
</div>
<br>
<br>
<br>
<br>

<form action="" method='POST' id="sesión" novalidate="novalidate">


<div class="row" id="fila1">
<div class="col-md-3">
</div>

<div class="col-md-2">
<label for="email">Email</label>
</div>

<div class="col-md-3">
<input type="text" id="email" value="" name="email" placeholder="Email">
</div>
</div>

<div class="row" id="fila2">
<div class="col-md-3">
</div>

<div class="col-md-2">
<label for="contrasena">Contraseña</label>
</div>
<div class="col-md-3">
<input type="password" id="contrasena" value="" name="contrasena" placeholder="Contraseña">
</div>
</div>

</div>
<br>
<div class="row" id="fila3">
<br>
<div class="col-md-3">
</div>
<div class="col-md-6">
<input type="submit" value="Iniciar Sesion" id="inicio">
<div class="col-md-3">
</div>
<a href="registro.php">Registrarme</a>

</div>								
</div>



</form>


<script type="text/javascript" src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/additional-methods.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>