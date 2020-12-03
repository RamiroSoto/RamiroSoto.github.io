<?php
    require ('conexion.php');
    
    $conexion=conectar($servidor, $usuario, $contrasena, $bd);
    $consulta = "SELECT id, titulo, autor, precio, editorial FROM libros";
    $registros=mysqli_query($conexion, $consulta);
    desconectar($conexion);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Lista de libros</h1>
        <a href="registrar.php">Nuevo</a>
        <table>
            <th>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Precio</th>
                    <th>Editorial</th>
                </tr>
            </th>
            <tbody>
                <?php
                    if ($registros->num_rows>0){
                        while($fila = $registros->fetch_assoc()){
                            echo "<tr>";
                            echo "<td>". $fila["id"]. "</td>";
                            echo "<td>". $fila["titulo"]. "</td>";
                            echo "<td>". $fila["autor"]. "</td>";
                            echo "<td>". $fila["precio"]. "</td>";
                            echo "<td>". $fila["editorial"]. "</td>";
                            echo "</tr>";
                        }   
                    }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>