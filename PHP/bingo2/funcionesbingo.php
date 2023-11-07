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

//ASIGNAR CARTONES A JUGADORES

function crearJugadores() {

 $jugador0 = array(crearCarton(), crearCarton(), crearCarton());
 $jugador1 = array(crearCarton(), crearCarton(), crearCarton());
 $jugador2 = array(crearCarton(), crearCarton(), crearCarton());
 $jugador3 = array(crearCarton(), crearCarton(), crearCarton());

 $jugadores = array($jugador0, $jugador1, $jugador2, $jugador3); 

 return $jugadores;

}

//array_pop() - Extrae el último elemento del final del array
//array_shift() - Quita un elemento del principio del array
//array_push() - Inserta uno o más elementos al final de un array
//array_unshift() - Añadir al inicio de un array uno a más elementos





# Funcion pintarCartones en pantalla
function pintarCartones($jugadoresCopia, $bolasSacadas){

	echo "<div class='divtotal'>";
	for ($j=0; $j < 4 ; $j++) { //los 4 jugadores
	
		echo "<div class='divjugador'>";
	
		for ($c=0; $c <3 ; $c++) { //los 3 cartones
			echo "<div class='divcarton'>";
			echo "<table>";
			echo "<tr>";
			echo "<td class='encabezado' colspan='5'>JUGADOR ".($j)." - CARTON ".($c)."</td>";
			echo "</tr>";
			echo "<tr>";
	
				for ($y = 0; $y < 15; $y++) { //los 15 numeros
					if(($y==5)||($y==10) ){//cada 5 numeros me pinta un tr
						echo "</tr>";
						echo "<tr>";
					}
					
	
					if (in_array($jugadoresCopia[$j][$c][$y], $bolasSacadas)) {
						echo "<td class='acierto'>".$jugadoresCopia[$j][$c][$y];
						echo "</td>";
					}
					else{
						echo "<td>".$jugadoresCopia[$j][$c][$y];
						echo "</td>";
					}
					
				}
			echo "</tr>";
			echo "</table>";
			echo "</div>";
			//echo "<br>";
		}
		echo "</div>";
		echo "<br>";
	}
	echo "</div>";
	
	}

	
?>

