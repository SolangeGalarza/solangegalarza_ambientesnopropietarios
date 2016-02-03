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
<div class="col-md-3">

<p id ='registrate'><b>Regístrate para poder matricularte</b></p>


</div>
</div>
</div>
<br>
<br>
<br>
<br>

<form action="rpc/procesar.php" method='POST' id="estudiante" novalidate="novalidate">


<div class="row" id="fila1">

<div class="col-md-3">
</div>
<div class="col-md-2">
<label for="nombre">Nombres</label>
</div>

<div class="col-md-3">
<input type="text" id="nombres"  name="nombres" placeholder="Nombres">
</div>
</div>


<div class="row "id="fila2">

<div class="col-md-3">
</div>

<div class="col-md-2">
<label for="apellidos">Apellidos</label>
</div>

<div class="col-md-3">
<input type="text" id="apellidos" value="" name="apellidos" placeholder="Apellidos">
</div>
</div>


<div class="row" id="fila3">
<div class="col-md-3">
</div>

<div class="col-md-2">
<label for="email">Email</label>
</div>

<div class="col-md-3">
<input type="text" id="email" value="" name="email" placeholder="Email">
</div>
</div>

<div class="row" id="fila4">
<div class="col-md-3">
</div>

<div class="col-md-2">
<label for="contrasena">Contraseña</label>
</div>
<div class="col-md-3">
<input type="password" id="contrasena" value="" name="contrasena" placeholder="Contraseña">
</div>
</div>

<div class="row" id="fila5">

<div class="col-md-3">
</div>
<div class="col-md-2">
<label for="contrasena">Verificar Contraseña</label>
</div>
<div class="col-md-3">
<input type="password" id="vcontrasena" value="" name="vcontrasena" placeholder="Verificar contraseña">
</div>
</div>



<div class="row" id="fila6">

<div class="col-md-3">
</div>

<div class="col-md-3">
<button  id="registrarme" name="registrarme"> Registrarme</button>
<div class="col-md-3">
</div>
<input type="button"onclick=" location.href='index.php'" class="cancelar" value="Cancelar">
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