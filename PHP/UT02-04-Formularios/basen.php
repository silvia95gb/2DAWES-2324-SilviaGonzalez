<HTML>
    <HEAD>
        <TITLE> EJ4 - FORMULARIOS</TITLE>
        <meta charset="UTF-8">
    </HEAD>
    <BODY>
    <?php

function transformarBase($numero,$baseInicial,$toBase){ //Parámetro genérico

    return base_convert($numero, $baseInicial, $toBase);

}

$num = $_GET['num'];
$num = substr($num, 0, strpos($num, "/"));

$baseInicial = $_GET['num'];
$baseInicial = substr($baseInicial, strpos($baseInicial, "/")+1);

$nuevaBase = $_GET['nuevaBase'];

$resultado = transformarBase($num,$baseInicial,$nuevaBase); //Llamada con tus variables a la función

echo "Numero ".$num." en base ".$baseInicial." = ".$resultado." en base ".$nuevaBase;



    ?>

    </BODY>
    </HTML>

    
