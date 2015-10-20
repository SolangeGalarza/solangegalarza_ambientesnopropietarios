
<?php
echo '<html>';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<title>Página 100% PHP</title>';
echo '<style>';
echo 'h1{
  text-align: center;
}

body{
  background-color:#c8c8c8;
  margin-left:30px;
  margin-right:30px;
}

label{
  font-weight:bold;

}
#nombre{
  margin-left:30px;
}
#apellido{
  margin-left:30px;
}

input{
margin-bottom: 10px;
}

table{
  margin:auto;
}


table, th, td{
  border: 1px solid #000000;
  border-collapse: collapse;
}

table th{
  background-color: blue; 
  color:white;
}


table tr:nth-child(even){
  background-color: #15efe8; 
}

table tr:nth-child(odd){
  background-color: #dddddd; 
}
';
echo '</style>';
echo '</head>';
echo '<body>';
echo '<h1>Este es el cuerpo de la página.</h1>';
echo '<p>La siguiente tabla es genera .... (elemento <code>&lt;ol&gt;</code>)</p>';
echo '<ol>';
echo '<li>La tabla ...</li>';
echo '<li>La tabla ...</li>';
echo '<li>La tabla ...</li>';
echo '<li>La tabla ...</li>';
echo '</ol>';

echo '<table>';
echo '<thead>';
echo '<tr>';
echo '<th>Columna 1</th>';
echo '<th>Columna 2</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

$i = 0;
$es_impar = true;
while($i < 10){
  echo '<tr ' . ($es_impar ? 'class ="impar"' :  'class="par"') . '">';
  $es_impar = ( $es_impar ? false : true );
  for($j = 0; $j < 2; $j++){
    echo '<td>';
    echo ++$i;
    echo '</td>';
  }
  echo '</tr>';
}




echo '</tbody>';
echo '</table>';


echo '<div class:"label">';

echo'<label for="nombre">Nombre</label>';
echo'<input name="nombre" id="nombre" type="text" />';

echo'<div>';


echo'<label for="apellido">Apellido</label>';
echo'<input name="apellido" id="apellido" type="text" />
        </div>';

echo' <button type="button" class="enviar" >Enviar</button>';



echo '</body>';
echo '</html>'; 
