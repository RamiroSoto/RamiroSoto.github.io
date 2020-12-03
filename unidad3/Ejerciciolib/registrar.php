<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <main class="registar">
        <form action="#" method="POST">
            <div>
                <label class="etiquetas" for="titulo">Título:</label>
                <input class="controles" type="text" name="titulo" required>
            </div>
            <div>
                <label class="etiquetas" for="editorial">Editorial:</label>
                <input class="controles" type="text" name="editorial" required>
            </div>
            <div>
                <label class="etiquetas" for="autor">Autor:</label>
                <input class="controles" type="text" name="autor" required>
            </div>
            <div>
                <label class="etiquetas" for="enlace">Enlace:</label>
                <input class="controles" type="text" name="enlace" required>
            </div>
            <div>
                <label class="etiquetas" for="precio">Precio:</label>
                <input class="controles" type="number" step="0.01" name="precio" required>
            </div>
            <button type="submit" title="Log In" name="registar" >registrar</button>
        </form>
        <?php
            if (isset($_POST['registar'])){ 
                require 'conexion.php';
                session_start();

                $titulo = $_POST['titulo'];
                $editorial = $_POST['editorial'];
                $autor = $_POST['autor'];
                $enlace = $_POST['enlace'];
                $precio = $_POST['precio'];

                $q = "INSERT INTO libros (id, titulo, editorial, autor, enlace ,precio) VALUES (Null, '$titulo' , '$editorial', '$autor', '$enlace', '$precio');";
                $consulta = mysqli_query($conexion,$q);
                
                header("location: index.php");
            }
			?>
     </main>
</body>
</html>