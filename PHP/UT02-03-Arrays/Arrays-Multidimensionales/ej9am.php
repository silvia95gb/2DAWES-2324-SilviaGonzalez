<HTML>
<HEAD>
<TITLE> EJ9- Arrays Multidimensionales</TITLE>
<style>
	table, td {
		
		border: 1px solid black;
		border-collapse: collapse;
	}
</style>

</HEAD>
<BODY>

<?php

/*Definir una matriz de 3x4 y sacar la matriz traspuesta*/

for ($i = 0; $i < 3; $i++){
	for ($j = 0; $j < 4; $j++){
	
	$matriz[$i][$j] = rand(1,100);
}
	
}

// Imprimimos matriz dentro de la tabla:


echo "<table>";

for ($i = 0; $i < 3; $i++){
	echo "<tr>"; 
	
	for ($j = 0; $j < 4; $j++){
		echo "<td>". $matriz[$i][$j]."</td>";
		
	}
	echo "</tr>";
	
};
echo "</table>";

echo "<br>";
echo "<br>";

//realizar la matriz traspuesta

//importante invertir el orden de filas y columnas e i y j

$matrizTraspuesta = array();

for ($i = 0; $i < 4; $i++) { //aqui ahora iran las columnas
    for ($j = 0; $j < 3; $j++) { //aqui las filas
        $matrizTraspuesta[$i][$j] = $matriz[$j][$i]; //invertir el orden real de la matriz original
    }
}

// Imprimir la matriz traspuesta
echo "<br>La matriz traspuesta es:<br>";
echo "<table>";
for ($i = 0; $i < 4; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 3; $j++) {
        echo "<td>" . $matrizTraspuesta[$i][$j] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

</BODY>
</HTML>
