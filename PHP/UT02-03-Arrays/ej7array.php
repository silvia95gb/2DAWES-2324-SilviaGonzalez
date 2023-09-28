<HTML>
<HEAD>
<TITLE> EJ7- Arrays unidimensionales</TITLE>
</HEAD>
<BODY>

<?php
/*Crear un array asociativo con los nombres de 5 alumnos y la edad de cada uno de 
ellos. Se pide:*/

//Declaramos el array

$alumnos = [

	"Alba" => 25,
	"Carolina" => 20,
	"Jorge" => 22,
	"Matias" => 23,
	"Manuel" => 29,

];

//a. Mostrar el contenido del array utilizando bucles.

#print_r($alumnos); 

#con bucles:

foreach ($alumnos as $nombre => $edad) {
	 echo "El/la alumno/a ".$nombre." tiene ".$edad." años"."<br>";
	
}
echo "<br>";

//b. Sitúa el puntero en la segunda posición del array y muestra su valor


//Volvemos indexado el array
$arrayAuxValores = array_values($alumnos);

echo "Array convertido a indexado: "."<br>";
print_r($arrayAuxValores);

echo "<br>";
echo "<br>";

echo "Valores del array convertido: "."<br>";
for ($i = 0; $i < count($arrayAuxValores); $i++){
	
	echo $arrayAuxValores[$i]." ";
	
}

echo "<br>";
echo "<br>";

echo "El valor de la segunda posición es: "."<br>";
echo $arrayAuxValores[1];

echo "<br>";

#$posicion2 = array_values($alumnos)[1];

//c. Avanza una posición y muestra el valor
echo "El valor de la siguiente posición es: "."<br>";
echo $arrayAuxValores[1+1];
echo "<br>";
//d. Coloca el puntero en la última posición y muestra el valor
echo "El valor de la última posición es: "."<br>";
echo $arrayAuxValores[1+3];

/*e. Ordena el array por orden de edad (de menor a mayor) y muestra 
la primera posición del array y la última.*/


//Con funcion sort ordenamos array indexado en forma ascendente
sort($arrayAuxValores);

echo "<br>";
echo "Array ordenado por edades de forma ascendente: "."<br>";

//Imprimir por orden
foreach ($arrayAuxValores as $indice => $edad) {
    echo "Posición $indice: $edad" ."<br>";
}

?>

</BODY>
</HTML>
