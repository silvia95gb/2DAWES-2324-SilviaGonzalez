<HTML>
    <HEAD>
        <TITLE> EJ2 - FICHEROS</TITLE>
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

$f1 = fopen("fichero2.txt", "a+");

// para no completar con espacios los campos para separarlos por ##
$data = $nombre . "##" . $apellido1 . "##" . $apellido2 . "##" . $nacimiento . "##" . $localidad;
fwrite($f1, $data . chr(10)); //fwrite($f1, $data . PHP_EOL);


fclose($f1);


}

   #Si hay errores, nos los muestra
   if(!empty($errores)) {
    echo "<ul>";
            foreach ($errores as $error){
                echo "<li>".$error."</li>";
            }
        }

    echo "</ul>";

    ?>

    </BODY>
    </HTML>

    
