<HTML>
    <HEAD>
        <TITLE> EJ1 - FORMULARIOS</TITLE>
        <meta charset="UTF-8">
    </HEAD>
    <BODY>
    <h1>CONVERSOR BINARIO</h1>

    <?php

$numDecimal = $_GET['numDecimal'];
$numBinario = "";

$numBinario = decbin($numDecimal);


echo "Numero Decimal: <input type='text' name='numDecimal' value='$numDecimal' size='15'/>";

echo "<br>";
echo "Numero Binario: <input type='text' name='numBinario' value='$numBinario' size='15'/>";

    ?>

    </BODY>
    </HTML>

    
