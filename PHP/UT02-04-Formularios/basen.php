<HTML>
    <HEAD>
        <TITLE> EJ4 - FORMULARIOS</TITLE>
        <meta charset="UTF-8">
    </HEAD>
    <BODY>
    <?php

function test_input($data) { //funcion de 'limpiar'
    $data = trim($data);
    $data = htmlspecialchars($data); //en este ejercicio como necesitamos de \ quito la funcion striplashes !!
    return $data;
}
function transformarBase($numero,$baseInicial,$toBase){ 

    return base_convert($numero, $baseInicial, $toBase);

}

$num = test_input($_POST['num']);
$num = substr($num, 0, strpos($num, "/"));

$baseInicial = test_input($_POST['num']);
$baseInicial = substr($baseInicial, strpos($baseInicial, "/")+1);

$nuevaBase = test_input($_POST['nuevaBase']);

$resultado = transformarBase($num,$baseInicial,$nuevaBase); 

echo "Numero ".$num." en base ".$baseInicial." = ".$resultado." en base ".$nuevaBase;


    ?>

    </BODY>
    </HTML>

    
