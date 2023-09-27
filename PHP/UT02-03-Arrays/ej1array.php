<HTML>
<HEAD>
<TITLE> EJ1- Arrays unidimensionales</TITLE>
<style>
	table, td {
		
		border: 1px solid black;
		border-collapse: collapse;
	}


</style>
</HEAD>
<BODY>

<?php
/*Definir un array y almacenar los 20 primeros números impares. 
Mostrar en la salida una tabla como la de la figura*/


$miArray = array();
//Esto siguiente es para almacenar los 20 primeros impares:

for ($i = 1; $i <= 20; $i+=2){
	
	$miArray[] = $i;
	
		
}
	
//para imprimir los numeros	
foreach ($miArray as $numero) {
    echo $numero . " ";
}


echo "<br>";
echo "<br>";
echo "<br>";

//CREACION DE LA TABLA

echo "<table>";
echo "<tr>";
	echo "<td>"."Indice"."</td>";
		echo "<td>"."Valor"."</td>";
		echo "<td>"."Suma"."</td>";
		
foreach ($miArray as $i => $miArray[$i]){
	
	    echo "<tr>"; 		
			echo "<td>".$i."</td>";
			echo "<td>".$miArray[$i]."</td>";
			echo "<td>".($miArray[$i]+$i)."</td>";
		echo "</tr>";
		
}
echo "</table>";
?>

</BODY>
</HTML>
