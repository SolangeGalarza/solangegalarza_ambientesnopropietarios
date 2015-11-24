<?php
if($_POST){
  $nombre = $_POST['nombre'];
  $apellidos = $_POST['apellidos'];
  $email = $_POST['email'];
  $contrasena = md5($_POST['contrasena']);
  $rcontrasena = md5($_POST['rcontrasena']);
  $sexo = $_POST['sexo'];
  $fecha = $_POST['fecha'];
  if($contrasena !== $rcontrasena){
    echo htmlentities('Las contraseñas no coinciden');
  }
$conn = new mysqli('localhost' , 'root' , '', 'sistema');
if ($conn->connect_error) die($conn ->connect_error);
$query = "SELECT * FROM usuarios";
$result = $conn ->query($query);
if (!$result) die($conn ->error);
$rows = $result ->num_rows;
for ($j = 0 ; $j < $rows ; ++$j){
  $result ->data_seek($j);
  $row = $result ->fetch_array(MYSQLI_ASSOC); 
  echo 'Nombre: ' . $row['nombre'] . '<br>';
  echo 'Apellidos: ' . $row['apellidos'] . '<br>';
  echo 'Email: ' . $row['email'] . '<br>';
  echo 'Fecha: ' . $row['fecha'] . '<br>';
}
$result ->close();
$conn ->close();