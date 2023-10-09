<HTML>
    <HEAD><TITLE> EJ3 - FORMULARIOS</TITLE>
    <?php
 
    include('funciones/funcCambiobase.php');

    ?>

<style>
	table, td {
		
		border: 1px solid black;
		border-collapse: collapse;
	}
</style>

    </HEAD>
    <BODY>
        <h1>CONVERSOR NUMERICO</h1>
        <form name="cambiobase" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Numero Decimal: <input type="text" name="num" value="" size="15"/>

            <br><br>
           
            Convertir a:<br>
            <input type='radio' name='operacion' value='binario'>Binario</br>
            <input type='radio'  name='operacion' value='octal'>Octal</br>
            <input type='radio' name='operacion' value='hexadecimal'>Hexadecimal</br>
            <input type='radio' checked name='operacion' value='todos'>Todos Sistemas</br>

            <br>
            <input type="submit" value="Enviar">

            <input type="reset" value="Borrar">


        </form>

        <?php


if ($_SERVER["REQUEST_METHOD"] == "POST"){
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
}

?>
    </BODY>
    </HTML>
    
