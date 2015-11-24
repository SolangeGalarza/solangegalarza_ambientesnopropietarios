<!DOCTYPE html>
<?php
	function generar_tabla(){
		echo "<table id='tabla'>" ;
		echo "<caption>NUMEROS PRIMOS</caption>";
		$i = 0 ;
		while ( $i < 100 ) {
			echo "<tr>" ;
			for ( $j = 0 ; $j < 10 ; $j++ ) { 
				$nprimo = nprimo( $i );
				echo '<td' . ($nprimo ? ' class="nprimo"' : '') . '>';
				echo $i++ ;
				echo "</td>" ;
			}
			echo "</tr>" ;
		}
		echo "</table>" ;
	}

	function nprimo($numero){

$numerosdivisibles=0;

for ($k=1; $k <= $numero; $k++) 
{ 
	if($numero%$k == 0) 
		{ 
			$numerosdivisibles = $numerosdivisibles + 1;  
		} 
} 
	if($numerosdivisibles==2)
	{

		return true;
	}

}
?>
<html>
	<head>
		<title>NUMEROS PRIMOS</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
	</head>
	<body>
			<?php
					generar_tabla();
			?>
	</body>
</html>