<?php
include('p_index.php');
?>
<!DOCTYPE html> 
<head>
<meta charset="utf-8">
<title>Examen</title>
</head>
<body> 
<div id="div-Formulario"> 
<div class="form-title">Inicio de Sesión </div> 

 <form id="Formulario" method="POST" > 
 <table> 
 <tbody> 
 <tr> 

 <td><label for="email">Email:</label></td> 
  <td><div class="input-container"> 
 <input name="email" id="email" type="text" />
        </div></td> 
 </tr> 
 <tr> 

 <td><label for="contrasena">Contraseña:</label></td> 
 <td><div class="input-container"> 
 <input name="contrasena" id="contrasena" type="password" />
        </div></td> 

 </tr> 
 <tr>
 <td><input type="submit" value="Ingresar" id="btnIngresar"></td>
<td><input type="button"onclick=" location.href='registro.php'" class="registrar" value="Registrarme"></td>


