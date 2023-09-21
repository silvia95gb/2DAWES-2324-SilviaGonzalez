
<HTML>
<HEAD><TITLE> EJ3-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>

<?php

$ipMasc="192.168.16.100/16";
$ip="192.168.16.100";

echo "La ip en decimal es: $ip";     
echo"<br>";
echo"<br>";
/*Pasamos la ip entera a binario*/
$ip1 = decbin(ip2long($ip)); //funcion ip2long para convertir la $ip en formato largo de 32 bits
echo "La ip en binario es: $ip1","<br>";
echo"<br>";

//La mascara se encuentra detrás de la /, con lo cual usamos la funcion substr y almacenamos el resultado en una nueva variable máscara
$mascara=substr($ipMasc,strpos($ipMasc,"/")+1);
echo "La mascara es: $mascara";
echo"<br>";

/*Selecciono los 16 primeros numeros de la ip, y relleno con 0*/
echo "La direccion de red es ";


$var1=substr($ip1,0,$mascara);
$dired=str_pad($var1,32,"0");
echo (bindec(substr($dired,0,8))),".",
	 (bindec(substr($dired,8,8))),".",
	 (bindec(substr($dired,16,8))),".",
	 (bindec(substr($dired,24,8)));

echo"<br>";

/*Selecciono los 16 primeros numeros de la ip, y relleno con 1*/
echo "La direccion de broadcast es ";
$var1=substr($ip1,0,$mascara);
$dirbroad=str_pad($var1,32,"1");
/*El substr escoge desde la posicion inicial que le digas, con longitud 8 porque se lo hemos ordenado*/
echo (bindec(substr($dirbroad,0,8))),".",
	 (bindec(substr($dirbroad,8,8))),".",
	 (bindec(substr($dirbroad,16,8))),".",
	 (bindec(substr($dirbroad,24,8)));
	 
echo"<br>";

/*Le sumamos 1 a la direccion de red y restamos 1 a la direccion de broadcast*/
echo "El rango de IPs es ";
echo (bindec(substr($dired,0,8))),".",
	 (bindec(substr($dired,8,8))),".",
	 (bindec(substr($dired,16,8))),".",
	 (bindec(substr($dired,24,8))+1);
echo " a ";
echo (bindec(substr($dirbroad,0,8))),".",
	 (bindec(substr($dirbroad,8,8))),".",
	 (bindec(substr($dirbroad,16,8))),".",
	 (bindec(substr($dirbroad,24,8))-1);

?>

</BODY>
</HTML>
