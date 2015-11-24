<?php 
if($_POST){
	
	$provincia=$_POST['prov'];
	$canton=$_POST['canton'];
$parroquia=$_POST ['parroquia'];

$conn= mysql_connect("localhost","root","");
  if ($conn->connect_error) die($conn ->connect_error);

mysql_select_db("s5e3",$conn);

$query =" INSERT INTO ubicacion
                  (provincia,
                  	canton,
                  	parroquia)
                VALUES (
                  '$provincia',
                  '$canton',
                  '$parroquia'
                  )
";

$result = $conn ->query($query);



}