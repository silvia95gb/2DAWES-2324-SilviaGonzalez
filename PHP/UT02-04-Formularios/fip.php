<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ5- FORMULARIOS</title>
    <?php

    include('funciones/funcIp.php');

    ?>

</head>
<body>
 
    <h1>IPs</h1>
    <form name="ips" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        IP notación decimal: <input type="text" name="ip" value="" size="15"/>
     
        <br><br>
       
        <input type="submit" value="Notacion Binaria">

        <input type="reset" value="borrar">


    </form>
        

    <?php


if ($_SERVER["REQUEST_METHOD"] == "POST"){
$ip = test_input($_POST['ip']);
$resultadoBinario = convertir($ip);
echo "<br>";
echo "<br>";

echo "IP notación decimal: <input type='text' name='ip' value='$ip' size='15'/>";
echo "<br>";
echo "IP binario: <input type='text' name='' value='$resultadoBinario' size='25'/>";
}
?>

    
</body>
</html>
