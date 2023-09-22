<HTML>
<HEAD><TITLE> EJ3B – Conversor decimal a base 16<</TITLE></HEAD>
<BODY>

<?php
// Transformar un número decimal a hexadecimal usando bucles (no se podrá utilizar
//la función de conversióndechex)

// hexadecimal -> 0 al 9 - A a F (16 digitos)

$num="222";
$base="16";
$aux="";
$cifra="";

echo "El numero en decimal es ".$num;
echo "<br>";
echo "La base es ".$base;
echo "<br>";


while ($num>=(1)) {
	switch($num%$base){
		case 10:
		$cifra="A";
		break;
		case 11:
		$cifra="B";
		break;
		case 12:
		$cifra="C";
		break;
		case 13:
		$cifra="D";
		break;
		case 14:
		$cifra="E";
		break;
		case 15:
		$cifra="F";
		break;
		default:
		$cifra=($num%$base);
	}

	$aux=($cifra).$aux;
	$num=$num/$base;
}

echo "El numero en base ".$base." es ".$aux;
?>

</BODY>
</HTML>
