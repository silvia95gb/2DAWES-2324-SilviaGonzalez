<HTML>
<HEAD>
<TITLE> EJ5- Arrays Multidimensionales</TITLE>
<style>
	table, td {
		
		border: 1px solid black;
		border-collapse: collapse;
	}
</style>

</HEAD>
<BODY>

<?php
/*Definir una matriz de 5x3 tal que en cada posición contenga el número
que resulta de sumar el número que identifica la columna con el número que identifica la fila del mismo,
imprimir los elementos de la matriz por columnas.*/


//Declaro la matriz

$matriz = array();

//Recorremos filas (i) y columnas (j) y sumamos

for ($i = 0; $i < 5; $i++){
	for ($j = 0; $j < 3; $j++){
	
	$matriz[$i][$j] = $i + $j;
}
	
}

// Imprimimos matriz dentro de la tabla:


echo "<table>";

for ($i = 0; $i < 5; $i++){
	echo "<tr>"; 
	
	for ($j = 0; $j < 3; $j++){
		echo "<td>". $matriz[$i][$j]."</td>";
		
	}
	echo "</tr>";
	
};
echo "</table>";

?>

</BODY>
</HTML>
