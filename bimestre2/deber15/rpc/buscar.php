<?php
$result="";
$buscar=$_POST['consulta'];
$conn = new mysqli('localhost', 'root',"", "registros");
$sql ="SELECT * FROM usuario WHERE nombre LIKE '%".$buscar."%' ";
$res = $conn->query($sql);
$contar = $res->num_rows;

if(!$res){
      $result = 'Existi&oacute; un error al Consultar la bd.' . $conn->error;
    } else {
      $result = 'Consulta ejecutada con &eacute;xito.';
    }

$celdasbuscar = "";
if($contar == 0){
  $celdasbuscar.='<td> No se han encontrado resultados </td>';
   }
   else{
    
    for ($j = 0 ; $j < $contar ; ++$j){
  $res ->data_seek($j);
  $buscado[] = $res ->fetch_array(MYSQLI_ASSOC); //MYSQLI_NUM , MYSQLI_BOTH
}

$cont=0;
  foreach ($buscado as $valor) {
    
    $celdasbuscar .= 

'<tr>      
          <td >'.$valor["id"].'</td>
          <td id="nombre' . $cont . '" ><span>'.$valor["nombre"].'</span></td>
          <td id="email' . $cont . '" ><span>'.$valor["email"].'</span></td>
          <td id="direccion' . $cont . '" ><span>'.$valor["direccion"].'</span></td>
          <td id="telefono' . $cont . '" ><span>'.$valor["telefono"].'</span></td>
           <td id="usuario' . $cont . '" ><span>'.$valor["usuario"].'</span></td>
          
          
        </tr>
       ';

   $cont++;



   }

}

     $salidaJSON=array("result" => $result,"celdasbuscar" => $celdasbuscar);

  echo json_encode( $salidaJSON);