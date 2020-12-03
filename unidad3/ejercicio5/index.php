<?php
    //include ('conexion.php');//Para agregar codigo no vital
    require ('conexion.php');//obligatorio
    
    $conexion=conectar($servidor, $usuario, $contrasena, $bd);

    $consulta = "SELECT id, nombre, edad, direccion FROM personas";
    echo "<br>";
    $registros=mysqli_query($conexion, $consulta);
    //var_dump($registros);
    if ($registros->num_rows>0){
        while($fila = $registros->fetch_assoc()){
            echo "ID: ". $fila["id"]. "<br>";
            echo "NOMBRE: ". $fila["nombre"]. "<br>";
            echo "EDAD: ". $fila["edad"]. "<br>";
            echo "DOMICILIO: ". $fila["direccion"]. "<br>";
        }   
    }else{
        echo "ERROR AL HACER LA CONSULTA";
    }
    /*$nombre='Juanongo';
    $consulta="INSERT INTO personas values(NULL, '$nombre', 19, 'Zaragosa no 53')";
    if(mysqli_query($conexion, $consulta)){
        echo "Registro ingresado con exito <br>";
    }else{
        echo "ERROR AL REGISTRAR";
    }*/
    
   desconectar($conexion);
?>


