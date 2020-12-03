<?php
$servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $bd="pruebau";

    
    $conexion=mysqli_connect($servidor, $usuario, $contrasena, $bd);
        
    if (!$conexion){
        die('ocurrio un error al hacer la conección con la BD');
    }else{
        //echo "Conexión a la BD $bd realizada con exito";
    }
    
    function valida_usuario_bd($usuario, $contrasena, $conexion){
        $query = "select 1 as user_valido from usuarios where usuario='$usuario' and contrasena=MD5('$contrasena')";
        //echo $query . '<br/>';
        $resultado = mysqli_query ($conexion, $query) or die ("error al ejecutar la consulta");
        if(mysqli_num_rows($resultado)==0){
            return false;
        }else{
            return true;
        }
    }

    /*echo "<br>";
    if (valida_usuario_bd('Juan', 'sogo1199', $conexion)){
        echo "usuario valido";
    }else{
        echo "usuario no valido";
    }*/


?>