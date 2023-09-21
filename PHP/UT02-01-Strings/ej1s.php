<HTML>
<HEAD><TITLE> EJ1-Conversion IP Decimal a Binario </TITLE></HEAD>
<BODY>
<?php
$ip="192.18.16.204";
echo "La ip en binario es ";
//Voy a utilizar el comando strpos, para comprobar la posicion en la que se encuentra el caracter, en este caso ".", en la cadena
    // echo strpos($ip,"."),"<br>";
 


//sprintf para convertir al formato que quieres en este caso, la variable:

//Vamos a 'desgranar' por partes la ip
//Paso a binario el 192


$ipOcteto1=sprintf('%08b',$ip);
	//Guardo en la variable $ip el 18.16.204
	$ip=substr($ip,strpos($ip,".")+1);   //substr() para extraer el primer octeto de la IP 

     //En este caso, busca la posición del primer punto en la dirección IP. Si la dirección IP es "192.18.16.204", 
     //esta función devolverá la posición del primer punto, que es 3 (recuerda que la posición se cuenta desde 0). por eso mismo, pondremos +1 más adelante para que empiece a partir de una posición más del punto

//Paso a binario el 18
$ipOcteto2=sprintf('%08b',$ip);
	//Guardo en la variable $ip el 16.204
	$ip=substr($ip,strpos($ip,".")+1);


//Paso a binario el 16
$ipOcteto3=sprintf('%08b',$ip);
	//Guardo en la variable $ip el 204
	$ip=substr($ip,strpos($ip,".")+1);

//Paso a binario el 204
$ipOcteto4=sprintf('%08b',$ip);

//imprimimos de forma concatenada los 4 octetos:
echo "$ipOcteto1",".","$ipOcteto2",".","$ipOcteto3",".","$ipOcteto4";

?>

</BODY>
</HTML>