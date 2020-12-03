<?php
    require "conexion_bd.php";

    $valido = false;

    if (isset($_POST["aceptar"])) {
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];
        
        if (!valida_usuario_bd($usuario, $contrasena, $conexion)) {
            echo "No es valido <br>";
            $valido = false; 
        } else {
            echo "Sí es valido <br>";
            session_start();
            $valido = true;
            $_SESSION["usuario"] = $usuario;
            header("Location:index.php");
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <input type="text" name="usuario" class="form_ctrl" placeholder="usuario" required="Introduce el nombre de usuario">
      <input type="password" name="contrasena" class="form_ctrl" placeholder="contrasena" required>
      <input type="submit" value="Ingresar" name="aceptar" class="btn">

      <?php
          if (!$valido && isset($_POST["aceptar"])) {
              echo "<p class='alerta'>Usuario y/o contrasena no valido</p>";
          }
      ?>
      <br>
    <a href="register/index.php">Registrar usuario</a>
    </form>
    
    
    <div class="contenedor_login">

    </div>
</body>
</html>