<?php
$result="";
if($_POST){
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$provincia=$_POST['provincia'];
$canton=$_POST['canton'];
$parroquia=$_POST['parroquia'];
$usuario=$_POST['usuario'];
$contrasenia=md5($_POST['contrasenia']);


$conn = new mysqli('localhost', 'root',"", "registros");
  if( $conn->connect_error ) 
    $result = "No se puede establecer la conexión con la Base de Datos";
  else{
    $q_insert = "INSERT INTO usuario(nombre,email,telefono,direccion,provincia,canton,parroquia,usuario,contrasenia)
                  VALUES ('$nombre', '$email', '$telefono', '$direccion','$provincia','$canton','$parroquia','$usuario','$contrasenia')";

    $res = $conn->query($q_insert);

    if(!$res){
      $result = 'Existi&oacute; un error al insertar.' . $conn->error;
    } else {
      $result = 'Mensaje enviado con &eacute;xito.';
    }
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
    $celdasU .= 

'<tr>      
          <td >'.$usuario["id"].'</td>
          <td id="nombre' . $cont . '" >'.$usuario["nombre"].'</td>
          <td id="email' . $cont . '" >'.$usuario["email"].'</td>
          <td id="direccion' . $cont . '" >'.$usuario["direccion"].'</td>
          <td id="telefono' . $cont . '" >'.$usuario["telefono"].'</td>
           <td id="usuario' . $cont . '" >'.$usuario["usuario"].'</td>
          
          
        </tr>
       ';



  }

  



$salidaJSON=array("result" => $result,"celdasU" => $celdasU);

echo json_encode( $salidaJSON );
?>