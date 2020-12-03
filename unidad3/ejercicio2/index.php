<?php
    $tabla = 5;
    $resultados = 15;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Tabla</th>
                <th>Numero</th>
                <th>Resultado</th>
            </tr>

            <?php
            for ($i=1;$i<=$resultados;$i++){
                echo "<tr><td>". $tabla . "</td><td>". $i. "</td><td>". ($tabla*$i). "</td></tr>";
            }
            ?>
        </thead>
    </table>
</body>
</html>