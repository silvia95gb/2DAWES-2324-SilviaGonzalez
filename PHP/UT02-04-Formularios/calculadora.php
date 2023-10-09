<HTML>
    <HEAD>
        <TITLE> EJ1 - FORMULARIOS</TITLE>
        <meta charset="UTF-8">
    </HEAD>
    <BODY>
    <h1>CALCULADORA</h1>

    <?php

    function suma($numero1, $numero2){

        return $numero1 + $numero2;
    }

    function resta($numero1, $numero2){

        return $numero1 - $numero2;
    }

    function producto($numero1, $numero2){

        return $numero1 * $numero2;
    }

    function division($numero1, $numero2){

        return $numero1 / $numero2;
    }

$operando1 = $_GET['operando1'];
$operando2 = $_GET['operando2'];
$operacion = $_GET['operacion'];
$resultado = 0;


if ($operacion == "+"){
    $resultado = suma($operando1,$operando2);
}elseif ($operacion == "-"){
    $resultado = resta($operando1,$operando2);
}elseif($operacion == "*"){
    $resultado = producto($operando1,$operando2);
}elseif($operacion == "/"){
    $resultado = division($operando1,$operando2);
}

echo "El resultado de la operación es: ".$operando1." ".$operacion." ".$operando2." = ".$resultado."";

    
    ?>
    </BODY>
    </HTML>

    
    
