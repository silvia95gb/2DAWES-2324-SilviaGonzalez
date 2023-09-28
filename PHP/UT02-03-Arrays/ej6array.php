<HTML>
<HEAD>
<TITLE> EJ6- Arrays unidimensionales</TITLE>
</HEAD>
<BODY>

<?php
/* Mostrar el array resultante del ejercicio anterior en orden inverso. Previamente, se 
deberá borrar el módulo mecanizado que no se imparte en el ciclo DAW.*/

//Definimos los 3 arrays

$array1 = array("Bases Datos","Entornos Desarrollo","Programación");
$array2 = array("Sistemas Informáticos","FOL","Mecanizado");
$array3 = array("Desarrollo Web ES","Desarrollo Web EC","Despliegue",
"Desarrollo Interfaces", "Inglés");

//Borramos elemento "Mecanizado" del array 2 con la funcion unset

unset($array2[2]);

//Creamos un nuevo array auxiliar para guardar los otros tres

$arrayAux = array();

//Con foreach agregamos los elementos de cada uno de los arrays al array creado 

foreach ($array1 as $asignatura) {
	
	$arrayAux[] = $asignatura;
	
}

foreach ($array2 as $asignatura) {
	
	$arrayAux[] = $asignatura;
	
}

foreach ($array3 as $asignatura) {
	
	$arrayAux[] = $asignatura;
	
}

//Para imprimir el array de forma inversa: funcion array_reverse


#Invertir el orden de los elementos en $arrayAux

$arrayAuxInverso = array_reverse($arrayAux);

echo "El nuevo array inverso es: "."<br>";
print_r ($arrayAuxInverso); //print_r para mostrar de forma más estructurada

echo "<br>";
echo "<br>";

?>

</BODY>
</HTML>
