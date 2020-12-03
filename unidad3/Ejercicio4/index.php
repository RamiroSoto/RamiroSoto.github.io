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
        <h1>Lista de libros</h1>
        <a href="registrar.php">Nuevo</a>
        <table>
            <th>
                <tr>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Precio</th>
                    <th>Editorial</th>
                    <th>Enlace</th>
                </tr>
            </th>
            <tbody>
                <?php
                    if(isset($_GET["titulo"])){
                        $titulo=$_GET["titulo"];
                        $autor = $_GET["autor"];
                        $precio = $_GET["precio"];
                        $editorial = $_GET["editorial"];
                    }
                    echo "<tr>";
                        echo "<td> $titulo </td>";
                        echo "<td> $autor </td>";
                        echo "<td> $precio </td>";
                        echo "<td> $editorial </td>";
                    echo "</tr>";
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>