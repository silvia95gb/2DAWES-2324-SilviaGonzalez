<HTML>
    <HEAD>
        <TITLE> EJ6 - FORMULARIOS</TITLE>
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

function test_input($data) { //funcion de 'limpiar'
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
return $data;
}

// El nombre es obligatorio
if(empty($_POST["nombre"])){
    $errores[] = "El nombre es requerido";
}
// El email es obligatorio y ha de tener formato adecuado - filter var filtra la variable que elijas, con un filtro predeterminado que en esta caso es filterValidateEmail
if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || empty($_POST["email"])){
    $errores[] = "No se ha indicado email o el formato no es correcto";
}
//Es obligatorio indicar el sexo, con isset nos muestra si la variable tiene valor
if(!isset($_POST['sexo'])) {
    $errores[] = "No se ha marcado ningún sexo";
}

// Si el array $errores está vacío, se aceptan los datos y se asignan a variables
if(empty($errores)) {
    $nombre = test_input($_POST["nombre"]);
    $apellido1 = test_input($_POST["apellido1"]);
    $apellido2 = test_input($_POST["apellido2"]);
    $email = test_input($_POST["email"]);
    $sexo = $_POST['sexo'];


    echo "<table>
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Email</th>
        <th>Sexo</th>
      </tr>
      <tr>
        <td>".$nombre."</td>
        <td>".$apellido1." ".$apellido2."</td>
        <td>".$email."</td>
        <td>".substr($sexo,0,1)."</td>
      </tr>
    </table>";

    #guardamos el contenido en un fichero
    $archivo=fopen("./datos.txt","a+");
    # escribimos en el fichero vacio
    fwrite($archivo, $nombre."   ");
    fwrite($archivo, $apellido1." ".$apellido2."   ");
    fwrite($archivo, $email."   ");
    fwrite($archivo, substr($sexo,0,1));
    //chr es una funcion tipo ascii, en este caso pinta un salto de linea, tambien se puede con \n, pero hay que abrirlo con notepad++
    //para que se esriba en una nueva linea
    fwrite($archivo, chr(10));
    #cerramos el fichero
    fclose($archivo);

}


    ?>

    </BODY>
    </HTML>

    
