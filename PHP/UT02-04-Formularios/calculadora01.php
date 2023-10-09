<HTML>
    <HEAD><TITLE> EJ1 - FORMULARIOS</TITLE>
</HEAD>
    <BODY>
        <h1>CALCULADORA</h1>
        <form name="calculadora"  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> //se llama a sí mismo
            Operando1: <input type="text" name="operando1" value="" size="15"/>

            <br><br>
            Operando2: <input type="text" name="operando2" value="" size="15"/>

            <br><br>
            Selecciona una operacion:<br>
            <input type='radio' checked name='operacion' value='+'>Suma</br>
            <input type='radio'  name='operacion' value='-'>Resta</br>
            <input type='radio' name='operacion' value='*'>Producto</br>
            <input type='radio' name='operacion' value='/'>Division</br>

            <br>
            <input type="submit" value="Enviar">

            <input type="reset" value="Borrar">

        </form>

    <?php

$operando1 = $_POST['operando1'];
$operando2 = $_POST['operando2'];
$operacion = $_POST['operacion'];
$resultado = 0;

include ('funciones/funcCalculadora.php'); //llama a las funciones

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
    
