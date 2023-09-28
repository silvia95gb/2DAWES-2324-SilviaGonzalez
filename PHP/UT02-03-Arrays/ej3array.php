<HTML>
<HEAD>
<TITLE> EJ3- Arrays unidimensionales</TITLE>
<style>
	table, td {
		
		border: 1px solid black;
		border-collapse: collapse;
	}

</style>
</HEAD>
<BODY>

<?php
/*Definir un array y almacenar los 20 primeros números binarios. Mostrar en la salida 
una tabla como la de la figura*/


$miArrayBinarios = array();
$miArrayOctal = array ();
//Esto siguiente es para almacenar los 20 primeros numeros:

for ($i = 0; $i <= 19; $i++){
	
	$miArrayBinarios[] = decbin($i);
	
		
}

for ($i = 0; $i <= 19; $i++){
	
	$miArrayOctal[] = decoct($i);
	
		
}
	
//para imprimir los numeros	
foreach ($miArrayBinarios as $numero) {
    echo $numero . " ";
}

//ahora tengo que convertirlos en binario

echo "<br>";
echo "<br>";
echo "<br>";

//CREACION DE LA TABLA

echo "<table>";
echo "<tr>";
	echo "<td>"."Indice"."</td>";
		echo "<td>"."Binario"."</td>";
		echo "<td>"."Octal"."</td>";
		
foreach ($miArrayBinarios as $i => $miArrayBinarios[$i]){
	
	    echo "<tr>"; 		
			echo "<td>".$i."</td>";
			echo "<td>".$miArrayBinarios[$i]."</td>";
			echo "<td>".$miArrayOctal[$i]."</td>";
		echo "</tr>";
		
}
echo "</table>";
?>

</BODY>
</HTML>
