<!DOCTYPE html>
<html>
<head>
    <title>EJ3 - FICHEROS</title>
</head>
<body>
    <h1>Contenido de fichero1.txt</h1>
    <table border="1">
        <tr>
            <th>Datos de Alumnos</th>
        </tr>
        <?php
        $lines = file("alumnos1.txt", FILE_IGNORE_NEW_LINES); // para leer todas las lineas de un archivo

        if ($lines !== false) { //comprobar la lectura de las lineas (si no es falso se ejecuta)
            $rowCount = 0;

            foreach ($lines as $line) {
                $rowCount++;
                echo "<tr>";
                echo "<td>{$line}</td>";
                echo "</tr>";
            }

            echo "</table>";
            echo "<p>Número de filas leídas: " . $rowCount . "</p>";
        } else {
            echo "No se pudo abrir el archivo.";
        }
        ?>
    </table>
</body>
</html>
