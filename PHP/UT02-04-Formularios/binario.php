<HTML>
    <HEAD>
        <TITLE> EJ2 - FORMULARIOS</TITLE>
        <meta charset="UTF-8">
    </HEAD>
    <BODY>
    <h1>CONVERSOR BINARIO</h1>

    <?php

function test_input($data) { //funcion de 'limpiar'
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
return $data;
}

function transformar($numero){

    return decbin($numero);
}

$numDecimal = test_input($_POST['numDecimal']);
$numBinario = "";

$numBinario = transformar($numDecimal);


echo "Numero Decimal: <input type='text' name='numDecimal' value='$numDecimal' size='15'/>";

echo "<br>";
echo "Numero Binario: <input type='text' name='numBinario' value='$numBinario' size='15'/>";

    ?>

    </BODY>
    </HTML>

    
