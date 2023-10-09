<HTML>

<HEAD>
    <TITLE> EJ1 - FORMULARIOS</TITLE>
    <meta charset="UTF-8">
</HEAD>

<BODY>
    <h1>CALCULADORA</h1>

    <?php
    function test_input($data) { //funcion de 'limpiar'
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    return $data;
  }

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

$operando1 = test_input($_POST['operando1']);
$operando2 = test_input($_POST['operando2']);
$operacion = test_input($_POST['operacion']);
$resultado = 0;


if ($operacion == "+"){
    $resultado = suma($operando1,$operando2);
}elseif ($operacion == "-"){
    $resultado = resta($operando1,$operando2);
}elseif($operacion == "*"){
    $resultado = producto($operando1,$operando2);
}else{
    $resultado = division($operando1,$operando2);
}

echo "El resultado de la operación es: ".$operando1." ".$operacion." ".$operando2." = ".$resultado."";

    
    ?>
</BODY>

</HTML>
