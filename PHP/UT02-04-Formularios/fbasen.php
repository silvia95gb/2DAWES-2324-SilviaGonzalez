<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ4- FORMULARIOS</title>

    <?php

    include('funciones/funcBasen.php');
    
    ?>

</head>
<body>
 
    <h1>Cambio de Base</h1>
    <form name="basen" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Numero: <input type="text" name="num" value="" size="15"/>
     
        <br><br>
        Nueva Base: <input type="text" name="nuevaBase" value="" size="15"/>
    
        <br><br>
        <input type="submit" value="Cambio Base">

        <input type="reset" value="borrar">

    </form>

    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$num = test_input($_POST['num']);
$num = substr($num, 0, strpos($num, "/"));

$baseInicial = test_input($_POST['num']);
$baseInicial = substr($baseInicial, strpos($baseInicial, "/")+1);

$nuevaBase = test_input($_POST['nuevaBase']);

$resultado = transformarBase($num,$baseInicial,$nuevaBase); 

echo "Numero ".$num." en base ".$baseInicial." = ".$resultado." en base ".$nuevaBase;

}

    ?>
        
    
</body>
</html>
