<HTML>
<HEAD><TITLE> EJ2-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>
<?php


//Sin utilizar las funciones sprintf o printf
$ip="192.18.16.204";


//Paso a binario el 192, y guardamos en la variable ip, la siguiente cadena de la ip
//echo decbin($ip),"."; Con este comando nos da la ip sin ceros delante
echo str_pad(decbin($ip),8,"0",STR_PAD_LEFT),".";  //STR_PAD_LEFT si no lo ponemos por defecto será right, sirve para escribir los caracteres de izq a dcha

$ip=substr($ip,strpos($ip,".")+1);

//Paso a binario el 18, y actualizamos la ip
echo str_pad(decbin($ip),8,"0",STR_PAD_LEFT),".";
$ip=substr($ip,strpos($ip,".")+1);

//paso a binario el 16, y actualizamos la ip
echo str_pad(decbin($ip),8,"0",STR_PAD_LEFT),".";
$ip=substr($ip,strpos($ip,".")+1);

//paso a binario el 204, y actualizamos la ip
echo str_pad(decbin($ip),8,"0",STR_PAD_LEFT);




?>

</BODY>
</HTML>

