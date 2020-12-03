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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <a href="index.php">Tabla</a>
        <form action="registrar.php" method="GET">
            <div>
                <label class="etiquetas" for="titulo">Titulo</label>
                <input class="controles" type="text" name="titulo" value="<?php echo "$titulo"?>" required>
            </div>
            <div>
                <label class="etiquetas" for="autor">Autor</label>
                <input class="controles" type="text" name="autor" required>
            </div>
            <div>
                <label class="etiquetas" for="editorial">Editorial</label>
                <input class="controles" type="text" name="editorial" required>
            </div>
            <div>
                <label class="etiquetas" for="precio">Precio</label>
                <input class="controles" type="text" name="precio" required>
            </div>

            <input type="submit" value="aceptar">
        </form>
    </main>
</body>
</html>