<HTML>
    <HEAD>
        <TITLE> EJ1 - FICHEROS</TITLE>
        <meta charset="UTF-8">
    <style>
        table, td, th {
		
		border: 1px solid black;
		border-collapse: collapse;
	}

    </style>
    </HEAD>
    <BODY>
    <h1>Datos Alumnos</h1>
    <?php

function filtrado($data) { //funcion de 'limpiar'
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
return $data;
}

// El nombre es obligatorio y apellido son campos obligatorios
if(empty($_POST["nombre"])){
    $errores[] = "El nombre es requerido";
}

if(empty($_POST["apellido1"])){
    $errores[] = "El primer apellido es requerido";
}

//Es obligatorio indicar el nacimiento, con isset nos muestra si la variable tiene valor
if(!isset($_POST['nacimiento'])) {
    $errores[] = "No se ha puesto la fecha de nacimiento";
}

if(empty($_POST["localidad"])){
    $errores[] = "La localidad es requerida";
}

// Si el array $errores está vacío, se aceptan los datos y se asignan a variables
if(empty($errores)) {
    $nombre = filtrado($_POST["nombre"]);
    $apellido1 = filtrado($_POST["apellido1"]);
    $apellido2 = filtrado($_POST["apellido2"]);
    $nacimiento = $_POST["nacimiento"];
    $localidad = filtrado($_POST['localidad']);


    echo "<table>
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Fecha de Nacimiento</th>
        <th>Localidad</th>
      </tr>
      <tr>
        <td>".$nombre."</td>
        <td>".$apellido1." ".$apellido2."</td>
        <td>".$nacimiento."</td>
        <td>".$localidad."</td>
      </tr>
    </table>";

#guardamos el contenido en un fichero
$f1=fopen("fichero1.txt","r+"); //diferencia con a+?
$cont=0;
while($cont < 160){
    fwrite($f1, chr(32)); //chr(32) funcion tipo ASCII para escribir un espacio en blanco
    $cont++;
}

//PREGUNTAR POR QUÉ ME QUEDA TODO JUNTO!!
# escribimos en el fichero vacio
rewind($f1); //te coloca el puntero al principio del archivo
fwrite($f1, $nombre, 40);
fseek($f1,41);//te coloca el puntero en la posicion 41 (la ultima del anterior)
fwrite($f1, $apellido1, 41);
fseek($f1,82);
fwrite($f1, $apellido2, 42);
fseek($f1,124);
fwrite($f1, $nacimiento, 10);
fseek($f1,134);
fwrite($f1, $localidad, 27);
//chr es una funcion tipo ascii, en este caso pinta un salto de linea, tambien se puede con \n, pero hay que abrirlo con notepad++
fwrite($f1, chr(10));
#cerramos el fichero
fclose($f1);


}

    ?>

    </BODY>
    </HTML>

    
