<HTML>
<HEAD>
<TITLE> EJ2- Arrays Multidimensionales</TITLE>
<style>
	table, td {
		
		border: 1px solid black;
		border-collapse: collapse;
		border-spacing: 5px;
	}
</style>
</HEAD>
<BODY>

<?php
/*Modificar el ejercicio anterior para mostrar la suma de los elementos
 por filas y por columnas. Los valores se almacenarán en dos arrays*/


$matriz;
$cont=1;

for ($i = 0; $i < 3; $i++){
	
	for ($j = 0; $j < 3; $j++){
		
		$matriz[$i][$j]= $cont * 2;
		$cont++;
	}
};

#creo dos arrays

$arrayFilas = array(0,0,0);
$arrayColumnas = array(0,0,0);


//Tabla para suma de las filas

echo "<table>";
		
for ($i = 0; $i < 3; $i++){
	
	echo "<tr>";
	
	for ($j = 0; $j < 3; $j++){
		
		$arrayFilas[$i]+=$matriz[$i][$j];
	
	}
		echo "<td>".$arrayFilas[$i]."<td>";
	echo "<tr>";
};
	
echo "</table>";

	echo "<br>";	
	echo "<br>";

//Tabla para suma de las columnas

echo "<table>";
		
for ($i = 0; $i < 3; $i++){
	
	echo "<tr>";
	
	for ($j = 0; $j < 3; $j++){
		
		$arrayColumnas[$i]+=$matriz[$j][$i]; 
		#importante cambiar el orden de la j y la i, para q sume
		#los valores de la columna
	
	}
		echo "<td>".$arrayColumnas[$i]."<td>";
	echo "<tr>";
};
	
echo "</table>";

?>

</BODY>
</HTML>
