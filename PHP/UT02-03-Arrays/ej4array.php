<HTML>
<HEAD>
<TITLE> EJ4- Arrays unidimensionales</TITLE>
<style>
	table, td {
		
		border: 1px solid black;
		border-collapse: collapse;
	}


</style>
</HEAD>
<BODY>

<?php
/*A partir del array definido en el ejercicio anterior crear un nuevo array que almacene 
los números binarios en orden inverso.*/

//array orden normal
$miArrayBinarios = array();


for ($i = 0; $i <= 19; $i++){
	
	$miArrayBinarios[] = decbin($i);
	
		
}

for ($i = 19; $i >= 0; $i--){
	
	$miArrayBinariosInverso[] = decbin($i);
	
		
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
		echo "<td>"."Binario Inverso"."</td>";
		
foreach ($miArrayBinarios as $i => $miArrayBinarios[$i]){
	
	    echo "<tr>"; 		
			echo "<td>".$i."</td>";
			echo "<td>".$miArrayBinarios[$i]."</td>";
			echo "<td>".$miArrayBinariosInverso[$i]."</td>";
		echo "</tr>";
		
}
echo "</table>";
?>

</BODY>
</HTML>
