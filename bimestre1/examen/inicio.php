<?php
include('p_index.php');
?>
<!DOCTYPE html> 
<body>
<div id="div-Formulario">
<div class="form-title">Registro de clientes</div>


<form id="Formulario" >
<table>
<tbody>
<tr>

<td><label for="nombre">Nombre:</label></td>
 <td><div class="input-container">
<input name="nombre" id="nombre" type="text" />
        </div></td>
<td>
</td>
<td><label for="apellidos">Apellidos:</label></td>
<td><div class="input-container">
<input name="apellidos" id="apellidos" type="text" />
        </div></td>
<td>
</td>
<td>
</td>        
<td><label for="edad">Edad:</label></td>
<td>
        <div class="input-container">
        <select name="edad" id="edad">
        <option value="0">Seleccione...</option>
        <option value="1">Entre 20 y 39 años </option>
        <option value="2">Entre 40 y 59 años </option>
        <option value="3">Más de 60 años </option>
        </select>
</div>
</td>

</tr>
<tr>
<tr>
<td><label for="peso">Peso:</label></td>
<td><div class="input-container">
<input name="peso" id="peso" type="text" />
        </div></td>

<td><label for="genero">Género:</label></td>
<td><input type = 'Radio' name ='genero' value= 'masculino'>Masculino</td>
<td><input type = 'Radio' name ='genero' value= 'femenino'>Femenino</td>
<td>
</td>
<td><label for="estado_civil">Estado civil:</label></td>
<td><input type = 'Radio' name ='estado' value= 'soltero'>Soltero</td>
<td><input type = 'Radio' name ='estado' value= 'casado'>Casado</td>
<td><input type = 'Radio' name ='estado' value= 'otro'>otro</td>
</tr>
</tr>
<tr> 
        <td><input type="submit" value="Registrar" id="btnRegistrar"></td>
</tr>
</table>
</tbody>                                                                
</form>
 
</body>
</html>



