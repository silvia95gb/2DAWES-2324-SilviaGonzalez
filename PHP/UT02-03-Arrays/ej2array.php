<HTML>
<HEAD>
<TITLE> EJ2- Arrays unidimensionales</TITLE>
<style>
	table, td {
		
		border: 1px solid black;
		border-collapse: collapse;
	}


</style>
</HEAD>
<BODY>

<?php
/*modificar el ejemplo anterior para que calcule la media de los valores que están en 
las posiciones pares y las posiciones impares.*/

//Rellenar los dos arrays  con condicion if
$arrayImpares = array();
$arrayPares = array();

for ($i = 1; $i <= 20; $i++){
	
	if ($i % 2 == 1) {
		
		$arrayImpares[]= $i;
	
	}else{
		
		$arrayPares[] = $i;
		
	}
		
}

//para imprimir los numeros	
foreach ($arrayImpares as $numero) {
    echo $numero . " ";
}

echo "<br>";
echo "<br>";

foreach ($arrayPares as $numero) {
    echo $numero . " ";
}


echo "<br>";
echo "<br>";
echo "<br>";

//MEDIA ARITMETICA

//inicializarmos acumulador, contador y media de pares e impares

$mediaImpares = 0;
$mediaPares = 0;
$contImpares = 0;
$contPares = 0;
$acumImpares = 0;
$acumPares = 0;


// Media de números impares
for ($i = 0; $i < count($arrayImpares); $i++) { //count() para contar n de elementos de un array
    $acumImpares += $arrayImpares[$i];
    $contImpares++;
}

// Media de números pares
for ($i = 0; $i < count($arrayPares); $i++) {
    $acumPares += $arrayPares[$i];
    $contPares++;
}

$mediaImpares = $acumImpares / $contImpares;
$mediaPares = $acumPares / $contPares;

echo "Media de los números impares: " . $mediaImpares . "<br>";
echo "Media de los números pares: " . $mediaPares . "<br>";

?>

</BODY>
</HTML>
