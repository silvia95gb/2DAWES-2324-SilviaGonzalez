<HTML>
<HEAD><TITLE>EJ1B - Conversor decimal a binario</TITLE></HEAD>
<BODY>

<?php

$num="168";
$aux="";
echo "El numero en decimal es ".$num;
echo "<br>";

/* Esta parte del codigo es por si el numero en decimal es 0*/
if($num==0){
	$aux=0;
}

/* La variable num se actualiza con el cociente de cada division*/

while ($num>=1) {
	$aux=($num%2).$aux;
	$num=$num/2;
}

echo "El numero en binario es ".$aux;

?>

</BODY>
</HTML>
