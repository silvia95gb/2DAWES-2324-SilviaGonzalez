<HTML>
<HEAD><TITLE> EJ4B – Tabla Multiplicar con TD</TITLE></HEAD>
<style>
	table, td {
		border: 1px solid black; 
		border-collapse: collapse;
		}
  
</style>
<BODY>
<?php
//le damos estilo a la etiqueta style
//Mostrar por pantalla la tabla de multiplicar de un número 
//con su tabla HTML correspondiente:
$num=8;

echo "<table>";
for ($i = 1; $i <= 10; $i++) {

  echo "<tr>
    <td>".$num." x ".$i." =</td>
    <td>".$num*$i."</td>
  </tr>";
  
}
echo "</table>";

?>
</BODY>
</HTML>
