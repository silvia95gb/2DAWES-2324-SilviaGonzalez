<HTML>
<HEAD>
<TITLE> EJ6- Arrays Multidimensionales</TITLE>
<style>
	table, td {
		
		border: 1px solid black;
		border-collapse: collapse;
	}
</style>

</HEAD>
<BODY>

<?php
/*Definir una matriz de 3x3 con números aleatorios. 
Generar un array que contenga los valores máximos 
de cada fila y otro que contenga los promedios de la mismas. 
Mostrar el contenido de ambos arrays por pantalla.*/


//Declaro la matriz

$matriz = array();

//Recorremos filas (i) y columnas (j) y con funcion rand rellenamos aleatoriamente

for ($i = 0; $i < 3; $i++){
	for ($j = 0; $j < 3; $j++){
	
	$matriz[$i][$j] = rand(1,100);
}
	
}

// Imprimimos matriz dentro de la tabla:


echo "<table>";

for ($i = 0; $i < 3; $i++){
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
