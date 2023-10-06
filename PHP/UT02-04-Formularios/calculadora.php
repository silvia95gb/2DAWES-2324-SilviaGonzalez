<HTML>
    <HEAD>
        <TITLE> EJ1 - FORMULARIOS</TITLE>
        <meta charset="UTF-8">
    </HEAD>
    <BODY>
    <h1>CALCULADORA</h1>

    <?php

$operando1 = $_GET['operando1'];
$operando2 = $_GET['operando2'];
$operacion = $_GET['operacion'];
$resultado = 0;


if ($operacion == "+"){
    $resultado = $operando1 + $operando2;
}elseif ($operacion == "-"){
    $resultado = $operando1 - $operando2;
}elseif($operacion == "*"){
    $resultado = $operando1 * $operando2;
}elseif($operacion == "/"){
    $resultado = $operando1 / $operando2;
}

echo "El resultado de la operación es: ".$operando1." ".$operacion." ".$operando2." = ".$resultado."";
    
    ?>
    </BODY>
    </HTML>

    
