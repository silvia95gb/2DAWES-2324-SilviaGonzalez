<HTML>
<HEAD>
<TITLE> EJ8- Arrays Multidimensionales</TITLE>
<style>
	table, td {
		
		border: 1px solid black;
		border-collapse: collapse;
	}
</style>

</HEAD>
<BODY>

<?php


for ($i = 0; $i < 3; $i++){
	for ($j = 0; $j < 3; $j++){
	
	$matriz1[$i][$j] = rand(1,100);
}
	
}

for ($i = 0; $i < 3; $i++){
	for ($j = 0; $j < 3; $j++){
	
	$matriz2[$i][$j] = rand(1,100);
}
	
}


// Imprimimos matriz dentro de la tabla:


echo "<table>";

for ($i = 0; $i < 3; $i++){
	echo "<tr>"; 
	
	for ($j = 0; $j < 3; $j++){
		echo "<td>". $matriz1[$i][$j]."</td>";
		
	}
	echo "</tr>";
	
};
echo "</table>";

echo "<br>";
echo "<br>";


echo "<table>";

for ($i = 0; $i < 3; $i++){
	echo "<tr>"; 
	
	for ($j = 0; $j < 3; $j++){
		echo "<td>". $matriz2[$i][$j]."</td>";
		
	}
	echo "</tr>";
	
};
echo "</table>";

echo "<br>";
echo "<br>";


//Suma de las dos matrices:


//declaramos la nueva matriz resultante

$matrizSuma = array();


for ($i = 0; $i < 3; $i++){
	
	for ($j = 0; $j < 3; $j++){
		
		$matrizSuma[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];
		
	}
	
}

//imprimir la matriz resultante, que es la suma de las dos anteriores

echo "La suma de las dos matrices es: ";
echo "<br>";
echo "<br>";

echo "<table>";

for ($i = 0; $i < 3; $i++){
    echo "<tr>"; 
    
    for ($j = 0; $j < 3; $j++){
        echo "<td>". $matrizSuma[$i][$j]."</td>";
    }
    echo "</tr>";
    
};
echo "</table>";

//Producto de las dos matrices:


//declaramos la nueva matriz resultante, producto de las dos anteriores

$matrizProducto = array();


for ($i = 0; $i < 3; $i++){
	
	for ($j = 0; $j < 3; $j++){
		
		$matrizProducto[$i][$j] = $matriz1[$i][$j] * $matriz2[$i][$j];
		
	}
	
}

//imprimir la matriz resultante, que es el producto de las dos anteriores

echo "El producto de las dos matrices es: ";
echo "<br>";
echo "<br>";

echo "<table>";

for ($i = 0; $i < 3; $i++){
    echo "<tr>"; 
    
    for ($j = 0; $j < 3; $j++){
        echo "<td>". $matrizProducto[$i][$j]."</td>";
    }
    echo "</tr>";
    
};
echo "</table>";



?>

</BODY>
</HTML>
