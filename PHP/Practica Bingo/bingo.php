<!DOCTYPE html>
<HTML>
<meta charset="UTF-8">
<HEAD> <TITLE> BINGO </TITLE> </HEAD>
<BODY>
<?php

include_once 'soloFuncionesBingo.php';

#1º CREACION DEL BINGO
/*En primer lugar, creamos un array con los nums del 1 al 60, hacemos una copia y la guardamos en bingo, y la aleatorizamos con shuffle*/

$bingo=array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17,
          		  18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34,
          		  35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51,
        		  52, 53, 54, 55, 56, 57, 58, 59, 60);

shuffle($bingo); //con esta funcion los nums de la variable bingo se mezclan



?>
</BODY>
</HTML>
