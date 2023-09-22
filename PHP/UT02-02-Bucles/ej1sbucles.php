<HTML>
<HEAD><TITLE>EJ1B - Conversor decimal a binario</TITLE></HEAD>
<BODY>

<?php

$num="168";
$aux="";
echo "El numero en decimal es ".$num;
echo "<br>";

/* La variable num se actualiza con el cociente de cada division*/

while ($num>=1) {
	$aux=($num%2).$aux;
	$num=$num/2;
}

echo "El numero en binario es ".$aux;

?>

</BODY>
</HTML>
