<!DOCTYPE html>
<HTML>
<meta charset="UTF-8">
<HEAD> <TITLE> BINGO </TITLE> </HEAD>
<BODY>


<?php

#FUNCIONES
//Creamos un array de 60 numeros, los mezclamos con shuffle y en el for asignamos las 15 primeras posiciones al cartón
function crearCarton() {

	$carton = array();
	$nums=array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17,
				18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34,
				35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51,
  				52, 53, 54, 55, 56, 57, 58, 59, 60);

	shuffle($nums); //con esta funcion los numeros de la var nums se mezclan

	for ($i=0; $i < 15; $i++) { 
		$carton[$i] = $nums[$i];
	}

	return $carton;
}
//Está función es dando números aleatorios y comprobando que no estén ya en el cartón
function crearCarton2() {
	$carton=array();
	// Damos valores al carton
	for ($i = 0; $i < 15; $i++) {
	    do {
	        $numero = rand(1, 60);
	    } while( in_array($numero,$carton)  );

	    $carton[$i] = $numero;
	}
	return $carton;

}

 $jugador0 = array(crearCarton(), crearCarton(), crearCarton());
 $jugador1 = array(crearCarton(), crearCarton(), crearCarton());
 $jugador2 = array(crearCarton(), crearCarton(), crearCarton());
 $jugador3 = array(crearCarton(), crearCarton(), crearCarton());


 /*$c0 = crearCarton();
 $c1 = crearCarton();
 $c2 = crearCarton();
 $jugador0 = array($c0, $c1, $c2);*/



 var_dump($jugador0);
 var_dump($jugador1);
 var_dump($jugador2);
 var_dump($jugador3);




//array_pop() - Extrae el último elemento del final del array
//array_shift() - Quita un elemento del principio del array
//array_unshift() - Añadir al inicio de un array uno a más elementos




//Pruebas
/*
$c1 = crearCarton();
print_r($c1);
echo "<br>";
echo $c1[0];
echo "<br>";
echo $c1[1];

$c2 = crearCarton();
print_r($c2);
*/

?>


</BODY>
</HTML>
