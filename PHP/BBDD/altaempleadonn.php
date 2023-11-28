<HEAD> <TITLE> VALIDACIONES EN FORMULARIOS  </TITLE>
</HEAD>
<BODY>


<H1> Formulario alta empleado </h1>
<form name='mi_formulario' action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method='POST'>

DNI
<input type='text' name='dni' value='' size=15><br><br>
Nombre empleado
<input type='text' name='nombre_emple' value='' size=15><br><br>
Codigo Departamento
<input type='text' name='cod_dpto' value='' size=15><br><br>
salario
<input type='text' name='salario' value='' size=15><br><br>
Fecha nacimiento
<input type='date' name='fecha_nac' value='' size=15><br><br>

<input type="submit" value="Crear empleado">

</FORM>
</BODY>

<?php
//FORMA DE VALIDACION QUE SÍ VAMOS A DAR
/*Inserción en tabla Prepared Statement- mysql PDO*/

$servername = "localhost";
$username = "root";
$password = "rootroot";
$dbname = "empleadosnn";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO empleado (dni, nombre_emple, salario, fecha_nac) VALUES (:dni,:nombre_emple,:salario,:fecha_nac)");
    $stmt->bindParam(':dni', $dni);
    $stmt->bindParam(':nombre_emple', $nombre_emple);
    $stmt->bindParam(':salario', $salario);
    $stmt->bindParam(':fecha_nac', $fecha_nac);
  
    // insert a row
	$dni = $_POST['dni'];
    $cod_dpto = $_POST['cod_dpto'];
    $nombre_emple = $_POST['nombre_emple'];
    $salario = $_POST['salario'];
    $fecha_nac = $_POST['fecha_nac'];
   
    $stmt->execute();

    //**************************************************** 

    // prepare sql and bind parameters
    $stmt2 = $conn->prepare("INSERT INTO emple_dpto (dni, cod_dpto, fecha_ini, fecha_fin) VALUES (:dni,:cod_dpto,:fecha_ini,:fecha_fin)");
    $stmt2->bindParam(':dni', $dni);
    $stmt2->bindParam(':cod_dpto', $cod_dpto);
    $stmt2->bindParam(':fecha_ini', $fecha_ini);
    $stmt2->bindParam(':fecha_fin', $fecha_fin);
 
    
    // insert a row
    //Formato fecha. Igualamos a null fecha_fin porque aun no sabemos cuando se va a dar de baja
    $fecha_ini = date("y-m-d");
    $fecha_fin = null;

    
    $stmt2->execute();


    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;

?>
