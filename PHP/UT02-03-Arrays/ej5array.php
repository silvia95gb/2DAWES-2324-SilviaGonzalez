<HTML>
<HEAD>
<TITLE> EJ5- Arrays unidimensionales</TITLE>
</HEAD>
<BODY>

<?php
/*definir tres arrays con los siguientes valores relativos a módulos que se imparten en 
el ciclo DAW:

1. “Bases Datos”, “Entornos Desarrollo”, “Programación”
2. “Sistemas Informáticos”,”FOL”,”Mecanizado”
3. “Desarrollo Web ES”,”Desarrollo Web EC”,”Despliegue”,
”Desarrollo Interfaces”, “Inglés”*/

//Definimos los 3 arrays

$array1 = array("Bases Datos","Entornos Desarrollo","Programación");
$array2 = array("Sistemas Informáticos","FOL","Mecanizado");
$array3 = array("Desarrollo Web ES","Desarrollo Web EC","Despliegue",
"Desarrollo Interfaces", "Inglés");


//a. Unir los 3 arrays en uno único sin utilizar funciones de arrays

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

//Para imprimir el nuevo array

echo "El nuevo array es: "."<br>";
print_r ($arrayAux); //print_r para mostrar de forma más estructurada

echo "<br>";
echo "<br>";

//b. Unir los 3 arrays en uno único usando la función array_merge()

print_r(array_merge($array1, $array2, $array3));
echo "<br>";
echo "<br>";

//c. Unir los 3 arrays en uno único usando la función array_push()

#Creo un array auxiliar adicional

$arrayAux2 = array();

#Lo vamos rellenando con los otros 3, con push no se puede rellenar con los 3 de golpe

foreach ($array1 as $asignatura) {
	
	array_push($arrayAux2,$asignatura);
	
}

foreach ($array2 as $asignatura) {
	
	array_push($arrayAux2,$asignatura);
	
}

foreach ($array3 as $asignatura) {
	
	array_push($arrayAux2,$asignatura);
	
}

print_r($arrayAux2);

?>

</BODY>
</HTML>
