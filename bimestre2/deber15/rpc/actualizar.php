<?php
$result="";
if($_POST){
$valor=$_POST['valorM'];
$campo=$_POST['campo'];
$id=$_POST['id'];

$conn = new mysqli('localhost', 'root',"", "registro");
  if( $conn->connect_error ) 
    $result = "No se puede establecer la conexión con la Base de Datos";
  else{
    $q_update = "update usuario set ".$_POST["campo"]."='".$_POST["valorM"]."' where id='".intval($_POST["id"])."' limit 1";

    $res = $conn->query($q_update);

    if(!$res){
      $result = 'Existi&oacute; un error al actualizar los datos.' . $conn->error;
    } else {
      $result = ' Los datos han sido actualizados con &eacute;xito.';
    }
  }

  
  $query2 = "SELECT * FROM usuario";
$result2 = $conn ->query($query2);
if (!$result2) die($conn ->error);
$rows2 = $result2 ->num_rows;
$usuarios=array();

for ($j = 0 ; $j < $rows2 ; ++$j){
  $result2 ->data_seek($j);
  $usuarios[] = $result2 ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}

$celdasU = "";
$cont=0;
  foreach ($usuarios as $usuario) {
    
    $celdasUsu .= 

'<tr>      
          <td >'.$usuario["id"].'</td>
          <td id="nombre' . $cont . '" >'.$usuario["nombre"].'</td>
          <td id="email' . $cont . '" >'.$usuario["email"].'</td>
          <td id="direccion' . $cont . '" >'.$usuario["direccion"].'</td>
          <td id="telefono' . $cont . '" >'.$usuario["telefono"].'</td>
           <td id="usuario' . $cont . '" >'.$usuario["usuario"].'</td>
          
          
        </tr>
       ';

   $cont++;

  }









  $salidaJSON=array("result" => $result,"celdasU" => $celdasU);

  echo json_encode( $salidaJSON);
}