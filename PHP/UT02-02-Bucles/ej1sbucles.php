<HTML>
<HEAD><TITLE> EJ1B – Conversor decimal a binario</TITLE></HEAD>
<BODY>

<?php

//Programa ej1b.php: Transformar un número decimal a binario usando bucles 
//(no se podrá utiliza la función decbin)

//Creamos variable auxiliar para ir guardando el resto de num%2
$num="19766";
$aux="";

echo "El numero en decimal es " .$num;
echo "<br>";



while ($num>=1) {
	$aux=($num%2).$aux; //con % obtienes el resto y concatenas el resultado
	$num=$num/2; //mientras que se cumpla la condicion seguir haciendo la operacion
}

echo "El numero en binario es ".$aux;

?>

</BODY>
</HTML>
