<?php
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $bd="ejemplo1";

    function conectar($servidor, $usuario, $contrasena, $bd){
        $conexion=mysqli_connect($servidor, $usuario, $contrasena, $bd);
        if (!$conexion){
            die('ocurrio un error al hacer la conección con la BD');
        }else{
            echo "Conexión a la BD realizada con exito";
        }
        return $conexion;
    }
    
    function desconectar($conexion){
        mysqli_close($conexion);
    }
?>