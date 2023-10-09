<HTML>
    <HEAD>
        <TITLE> EJ5 - FORMULARIOS</TITLE>
        <meta charset="UTF-8">
    </HEAD>
    <BODY>
    <h1>IPs</h1>
    <?php

    function test_input($data) { //funcion de 'limpiar'
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
        return $data;
}

    function transformarBinario($numero){

        return decbin($numero);

    }

    function convertir ($ip){

        $ipOcteto = explode(".", $ip); //explode - separar el string ($ip) en partes por un delimitador, en este caso "."

       /* echo $ipOcteto[0]; //192
        echo "<br>";
        echo $ipOcteto[1]; //168
        echo "<br>";
        echo $ipOcteto[2]; //15
        echo "<br>";
        echo $ipOcteto[3]; //20
        */
        
        $binario0 = transformarBinario($ipOcteto[0]);
        $binario1 = transformarBinario($ipOcteto[1]);
        $binario2 = transformarBinario($ipOcteto[2]);
        $binario3 = transformarBinario($ipOcteto[3]);
        $resultadoBinario = $binario0.".".$binario1.".".$binario2.".".$binario3;

        return $resultadoBinario;
    }

    $ip = test_input($_POST['ip']);
    $resultadoBinario = convertir($ip);
    echo "<br>";
    echo "<br>";

    echo "IP notación decimal: <input type='text' name='ip' value='$ip' size='15'/>";
    echo "<br>";
    echo "IP binario: <input type='text' name='' value='$resultadoBinario' size='25'/>";
    
    ?>

    </BODY>
    </HTML>

    
