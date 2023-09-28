<HTML>
<HEAD>
<TITLE> EJ1- Arrays Multidimensionales</TITLE>
<style>
	table, td {
		
		border: 1px solid black;
		border-collapse: collapse;
	}
</style>
</HEAD>
<BODY>

<?php
/*Crear una matriz de 3x3 con los sucesivos múltiplos de 2. 
Mostrar el contenido de la matriz por filas tal 
y como se indica en la figura*/


$matriz;
$cont=1;

for ($i = 0; $i < 3; $i++){
	
	for ($j = 0; $j < 3; $j++){
		
		$matriz[$i][$j]= $cont * 2;
		$cont++;
	}
};

#imprimir la matriz

for ($i = 0; $i < 3; $i++){
	
	for ($j = 0; $j < 3; $j++){
		
		echo $matriz[$i][$j] ." ";
	}
	
	echo "<br>";
	
};

/* imprimir la matriz con foreach:
	
	foreach ($matriz as $fila){
		
		foreach ($fila as $elemento){
			
			echo $elemento." ";
		}
		echo "<br>";
	};*/


//CREACION DE LA TABLA

echo "<table>";
		
for ($i = 0; $i < 3; $i++){
	
	echo "<tr>";
	
	for ($j = 0; $j < 3; $j++){
		
		echo "<td>".($matriz[$i][$j])."<td>";
	}
	echo "<tr>";
};
	
echo "</table>";

?>

</BODY>
</HTML>
