<!DOCTYPE html>
<HTML>
<meta charset="UTF-8">
<HEAD> <TITLE> BINGO </TITLE> 
<link rel="stylesheet" type="text/css" href="./css/style.css"/>
</HEAD>
<BODY>
<?php

include_once 'funcionesbingo.php';

#1º CREACION DEL BINGO

//Creamos el bombo con los 60 numeros

$bombo = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17,
18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34,
35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51,
  52, 53, 54, 55, 56, 57, 58, 59, 60);

shuffle($bombo);
//echo "El bombo es:";
//var_dump($bombo);
$ganador = false;

$jugadores = crearJugadores();
$jugadoresCopia = $jugadores;
$bolasSacadas = array();

echo "Las bolas que han salido son:";
echo "<br>";
echo "<br>";

while ($ganador==false) {
	$bolaSacada = array_shift($bombo); //array_shift igual que shuffle te deja guardado el valor de l variable

	//echo "La bola sacada es: ".$bolaSacada; //array_shift guarda el primer valor que se extrae en este caso de bombo y además se lo quita a bombo
	//var_dump($bombo); //prueba para ver el bombo sin el primer valor extraido
	
	//Con esto mostramos las bolas que han salido
	echo "<img src='./images/$bolaSacada.PNG' width='40' height='40'>";

	//echo "<br>";
	

	//Array para almacenar las bolas que se sacan

	
	array_push($bolasSacadas, $bolaSacada); //mete las bolas sacadas por el final [--->]

	//Bucle para recorrer los cartones y comprobar si la bola sacada esta en el carton
	//j de jugador (4 jugadores) y c de cartones (3 cartones)
	for ($j=0; $j < 4 ; $j++) {
		for ($c=0; $c < 3 && !$ganador; $c++) { 
			

			$pos = array_search($bolaSacada, $jugadores[$j][$c]); //para acceder a las posiciones de los cartones dentro del array jugadores (=$carton)
			if ($pos !== false){
				/*
				echo "<br>";
				echo "Elimino la bola -> del jugador ".$j." y su carton ".$c;
				echo "<br>";
				*/
				unset( ($jugadores[$j][$c]) [$pos]);

			}
			
			if (empty($jugadores[$j][$c]) == true) { //Si el carton c de jugador j está vacío

				$ganador = true;

				echo "<p> El ganador es el jugador ".$j." con su cartón ".$c."</p>";
				//var_dump($jugadoresCopia[$j][$c]);
			}
		}
	}
}


pintarCartones($jugadoresCopia, $bolasSacadas);
//var_dump ($bolasSacadas);



?>
</BODY>
</HTML>
