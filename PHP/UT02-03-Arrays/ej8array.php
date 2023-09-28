<HTML>
<HEAD>
<TITLE> EJ8- Arrays unidimensionales</TITLE>
</HEAD>
<BODY>

<?php
/*Crear un array asociativo con los nombres de 5 alumnos y la nota de cada uno de 
ellos en Bases Datos. Se pide:*/

//Declaramos el array

$alumnos = [

	"Alba" => 10,
	"Carolina" => 8,
	"Jorge" => 9,
	"Matias" => 4,
	"Manuel" => 5,

];

//Mostrar el alumno con mayor nota.


$alumnoAux; // Variable para almacenar el nombre del mejor alumno
$notaAux = -1;     // Variable para almacenar la mejor nota (inicializada con un valor muy bajo)

foreach ($alumnos as $nombre => $nota) {
    if ($nota > $notaAux) {
        $notaAux = $nota;
        $alumnoAux = $nombre;
    }
}

echo "El alumno con mayor nota es ".$alumnoAux." cuya nota es un: ".$notaAux;

echo "<br>";

//Mostrar el alumno con menor nota
$alumnoAux; // Variable para almacenar el nombre del mejor alumno
$notaAux = 11;     // Variable para almacenar la mejor nota (inicializada con un valor por encima de 10)

foreach ($alumnos as $nombre => $nota) {
    if ($nota < $notaAux) {
        $notaAux = $nota;
        $alumnoAux = $nombre;
    }
}

echo "El alumno con peor nota es ".$alumnoAux." cuya nota es un: ".$notaAux;


//Media de las notas de los alumnos

$acum=0;

foreach ($alumnos as $nombre => $nota){
	
	$acum=$acum+$nota;
	
}

$mediaAlumnos= $acum / 5;

echo "<br>";
echo "La media de los alumnos es: ".$mediaAlumnos; 

?>

</BODY>
</HTML>
