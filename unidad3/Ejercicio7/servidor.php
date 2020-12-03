<?php

$servidor="localhost";
$usuario="root";
$contrasena="";
$bd="ejemplo1"
$id=$_GET["id"]

$conexion=mysqli_connect($servidor, $usuario, $contrasena, $bd);

$consulta = "SELECT id, nombre, edad, direccion FROM personas where id=$id";
echo "<br>";
$resultado=mysqli_query($conexion, $consulta);

if($resultado->num_rows>0){
    while($fila=$resultado->fetch_assoc()){
        $datos=Array(
            "id"=>$fila["id"],
            "nombre"=>$fila["nombre"],
            "edad"=>$fila["edad"],
            "direccion"=>$fila["direccion"]
        );
    }
}

    /*$tecnologias = array(
        'frontend'=> 'html5 ,ccs3, javascript',
        'backend'=>'php, mysql, apache',
        'fullstack'=>'html5, ccs3, javascript, php, mysql, apache'
    );*/

    echo json_encode ($datos);

?>