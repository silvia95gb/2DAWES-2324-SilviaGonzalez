<HTML>
<HEAD><TITLE> EJ2B – Conversor decimal a binario</TITLE></HEAD>
<BODY>

<?php

//Transformar un número decimal a cualquier otra base (base 2 a base 9) usando
//bucles (no se podrán utilizar las funciones de conversión).

$num="256";
$aux="";
$base="9";

echo "El numero en decimal es " .$num;
echo "<br>";

//Hacemos el mismo proceso que el anterior solo que añadimos la variable $base 

while ($num>=1) {
	$aux=($num%$base).$aux; 
	$num=$num/$base; 
}

echo "El numero con base $base es ".$aux;

?>

</BODY>
</HTML>
