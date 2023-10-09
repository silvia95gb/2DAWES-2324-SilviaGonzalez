<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ2-FORMULARIOS</title>

<?php

include ('funciones/funcBinario.php')

?>

</head>
<body>
    <h1>CONVERSOR BINARIO</h1>
    <form name="binario" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Numero Decimal: <input type="text" name="numDecimal" value="" size="15"/>

        <br><br>
       
        <input type="submit" value="Enviar">

        <input type="reset" value="Borrar">

    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
$numDecimal = test_input($_POST['numDecimal']);
$numBinario = "";

$numBinario = transformar($numDecimal);

echo "<br>";
echo "Numero Decimal: <input type='text' name='numDecimal' value='$numDecimal' size='15'/>";

echo "<br>";
echo "Numero Binario: <input type='text' name='numBinario' value='$numBinario' size='15'/>";
}
    ?>
    
</body>
</html>
