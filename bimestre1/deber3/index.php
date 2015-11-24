<!DOCTYPE html> 
<?php
echo '<html>';

echo '<meta charset="utf-8">';
echo '<head>';
echo '<title>Deber 3</title>';
echo  '</head>';
echo '<style>';


echo 'body{
        margin-top:20px;
        font-family:Arial, Helvetica, sans-serif;
        background-color:#CBD4E4;
        height:100%;
        
        font-size:11px;
}

input,select{
        padding:3px;
        color:#333333;

        border:1px solid #96A6C5;
        margin-top:2px;
        width:200px;
        font-size:11px;
}

select{
        width:auto;
        padding:2px;
}

label{
        font-size:11px;
        text-align:right;
}

table{
        width:300px;
}

td{
        font-size:11px;
}

.input-container{
        padding:1px;
}

#div-Formulario,.registered{
        border:0px solid #eeeeee;
        padding:15px;

        background:url(img/bg.jpg) repeat-x #cbd4e4;
        color:#203360;

        margin:30px auto 40px auto;
        width:400px;
}

.form-title,
.form-sub-title{
        font-size:20px;

        font-family:"Lucida Grande",Tahoma,Verdana,Arial,sans-serif;
        font-size:20px;
        font-weight:bold;
}

.form-sub-title{
        font-weight:normal;
        padding:6px 0 15px 0;
}

.registrarse{
        width:auto;
        margin:10px 0 0 2px;
        padding:3px 4px 3px 4px;
        color:white;
        background-color:#589d39;
        outline:none;
        border:1px solid #006600;
        font-weight:bold;
}';

echo '</style>';

echo '<body>';
echo '<div id="div-Formulario">';
echo '<div class="form-title">Regístrate</div>';
echo '<div class="form-sub-title">Es gratis( y lo seguirá siendo)</div>';

echo'<form id="Formulario" >';
echo'<table>';
echo'<tbody>';
echo'<tr>';

echo'<td><label for="nombre">Nombre:</label></td>';
echo' <td><div class="input-container">';
echo'<input name="nombre" id="nombre" type="text" />
        </div></td>';
echo'</tr>';
echo'<tr>';

echo'<td><label for="apellidos">Apellidos:</label></td>';
echo'<td><div class="input-container">';
echo'<input name="apellidos" id="apellidos" type="text" />
        </div></td>';

echo'</tr>';
echo'<tr>';

echo'<td><label for="email">Tu correo electrónico:</label></td>';
echo'<td><div class="input-container">';
echo'<input name="email" id="email" type="text" />
        </div></td>';

echo'</tr>';
echo'<tr>';

echo'<td><label for="contraseña">Contraseña:</label></td>';
echo'<td><div class="input-container">';
echo'<input name="contraseña" id="contraseña" type="text" />
        </div></td>';
echo'</tr>';
echo'<tr>';
echo'<td><label for="sexo">Sexo:</label></td>';
echo'<td>';
        echo'<div class="input-container">';
        echo'<select name="sexo" id="sexo">';
        echo'<option value="0">Selecciona el sexo:</option>';
        echo'<option value="1">Femenino</option>';
        echo'<option value="2">Masculino</option>';
        echo'</select>';
echo'</div>';
echo'</td>';
echo'</tr>';
echo'<tr>';

echo'<td><label>Fecha de nacimiento:</label></td>';
echo'<td>';
echo'<div class="input-container">';
echo'<select name="mes">';
echo'<option value="0">Mes:</option>';
echo'<option value="1">Enero</option>';
echo'<option value="2">Febrero</option>';
echo'<option value="3">Marzo</option>';
echo'<option value="4">Abril</option>';
echo'<option value="5">Mayo</option>';
echo'<option value="6">Junio</option>';
echo'<option value="7">Julio</option>';
echo'<option value="8">Agosto</option>';
echo'<option value="9">Septiembre</option>';
echo'<option value="10">Octubre</option>';
echo'<option value="11">Noviembre</option>';
echo'<option value="12">Diciembre</option>';
echo'</select>';
echo'<select name="día">';
echo'<option value="0">Día:</option>';
echo'<option value="1">1</option>';
echo'<option value="2">2</option>';
echo'<option value="3">3</option>';
echo'<option value="4">4</option>';
echo'<option value="5">5</option>';
echo'<option value="6">6</option>';
echo'<option value="7">7</option>';
echo'<option value="8">8</option>';
echo'<option value="9">9</option>';
echo'<option value="10">10</option>';
echo'<option value="11">11</option>';
echo'<option value="12">12</option>';
echo'<option value="13">13</option>';
echo'<option value="14">14</option>';
echo'<option value="15">15</option>';
echo'<option value="16">16</option>';
echo'<option value="17">17</option>';
echo'<option value="18">18</option>';
echo'<option value="19">19</option>';
echo'<option value="20">20</option>';
echo'<option value="21">21</option>';
echo'<option value="22">22</option>';
echo'<option value="23">23</option>';
echo'<option value="24">24</option>';
echo'<option value="25">25</option>';
echo'<option value="26">26</option>';
echo'<option value="27">27</option>';
echo'<option value="28">28</option>';
echo'<option value="29">29</option>';
echo'<option value="30">30</option>';
echo'<option value="31">31</option>';
echo'</select>';
echo'<select name="año">';
echo'<option value="0">Año:</option>';
echo'<option value="1">1980</option>';
echo'<option value="2">1981</option>';
echo'<option value="3">1982</option>';
echo'<option value="4">1983</option>';
echo'<option value="5">1984</option>';
echo'<option value="6">1985</option>';
echo'<option value="7">1986</option>';
echo'<option value="8">1987</option>';
echo'<option value="9">1988</option>';
echo'<option value="10">1989</option>';
echo'<option value="11">1990</option>';
echo'<option value="12">1991</option>';
echo'<option value="13">1992</option>';
echo'<option value="14">1993</option>';
echo'<option value="15">1994</option>';
echo'<option value="16">1995</option>';
echo'<option value="17">1996</option>';
echo'<option value="18">1997</option>';
echo'<option value="19">1998</option>';
echo'<option value="20">1999</option>';
echo'<option value="21">2000</option>';
echo'<option value="22">2001</option>';
echo'<option value="23">2002</option>';
echo'<option value="24">2003</option>';
echo'<option value="25">2004</option>';
echo'<option value="26">2005</option>';
echo'<option value="27">2006</option>';
echo'<option value="28">2007</option>';
echo'<option value="29">2008</option>';
echo'<option value="30">2009</option>';
echo'<option value="31">2010</option>';
echo'</select>';
echo' </div>';
echo'</td>';
echo'</tr>';
echo'<tr>';
echo'<td> </td>';
echo'<td>
<a href="pagina_deber.php.html" id="enlance" >¿Por que debo proporcionar esta informacion?</a><br>
<input type="submit" class="registrarse" value="Regístrate" />

     
        </td>';


echo'</tr>';



echo'</tbody>';



echo'</table>';
echo ' <br>';

echo'</form>';




echo '</body>';
echo'<html>';
?>







