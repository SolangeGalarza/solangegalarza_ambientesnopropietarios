<?php require('c_registro.php'); 
?>
<!DOCTYPE html> 
<head>
<meta charset="utf-8">
<title>Examen</title>
</head>
<body> 
<div id="div-Formulario"> 
<div class="form-title">Registro de Usuarios </div> 

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

 <td><label for="verficar_contraseña">Verificar Contraseña:</label></td> 
 <td><div class="input-container"> 
 <input name="verificar_contrasena" id="verificar_contrasena" type="password" />
        </div></td> 
 </tr> 
 <tr> 
        <td><input type="submit" value="Registrar" id="btnRegistrar"></td>
</tr>
</table>
</tbody>

</body>
</html>

