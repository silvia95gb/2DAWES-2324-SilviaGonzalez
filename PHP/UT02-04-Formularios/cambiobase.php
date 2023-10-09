<HTML>
    <HEAD>
        <TITLE> EJ3 - FORMULARIOS</TITLE>
        <meta charset="UTF-8">
        <style>
	table, td {
		
		border: 1px solid black;
		border-collapse: collapse;
	}
</style>

    </HEAD>
    <BODY>
    <h1>CONVERSOR NUMERICO</h1>

    <?php

    function test_input($data) { //funcion de 'limpiar'
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function binario($num){
        return decbin($num);
    }

    function octal($num){
        return decoct($num);
    }

    function hexadecimal($num){
        return dechex($num);
    }

    $num = test_input($_POST['num']);
    $operacion = test_input($_POST['operacion']);


echo "El numero decimal es: <input type='text' name='num' value='$num' size='15'/>";

    switch ($operacion) {
        case 'binario':
            echo "<table>
                <tr>
                    <td>Binario</td>
                    <td>".binario($num)."</td>
                </tr>
            
            </table>";
            break;
        
        case 'octal':
            echo "<table>
                <tr>
                    <td>Octal</td>
                    <td>".octal($num)."</td>
                </tr>
            
            </table>";
            break;
        case 'hexadecimal':
            echo "<table>
                <tr>
                    <td>Hexadecimal</td>
                    <td>".hexadecimal($num)."</td>
                </tr>
            
            </table>";
            break;

        case 'todos':
            echo "<table>
            <tr>
            <td>Binario</td>
            <td>".binario($num)."</td>
            </tr>
            <tr>
            <td>Octal</td>
            <td>".octal($num)."</td>
            </tr>
            <tr>
            <td>Hexadecimal</td>
            <td>".hexadecimal($num)."</td>
             </tr>
            
            </table>";
            break;
    }

    ?>

    </BODY>
    </HTML>

    
