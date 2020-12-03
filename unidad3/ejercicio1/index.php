<?php
/*
    $edad = 20;
    $nombre = "Juan";
    $estudia = true;
    $altura = 1.7;

    $colores = array('amarillo', 'rojo', 'verde');

    $alumnos = array("123"=>"Juan",
                "456"=>"M",
                "789"=>"E");
    
    $alumno1 = (object)["matricula"=>"123",
                        "nombre"=>"vallarta",
                        "carrera"=>"ITI",
                        "promedio"=>7.8,
                        "colores"=>$colores];
    
    echo "Nombre: " . $nombre."<br>";
    echo "edad: " . $edad."<br>";
    echo "Estudia: " . ($estudia?"SI":"NO")."<br>";
    echo "altura: " . $altura."<br>";

    echo "Colores: " . $colores[0]. "<br>";
    print_r($colores);
    echo "<br>";
    echo "alumno2: ". $alumnos ["456"]. "<br>";
    var_dump ($alumnos);
    echo "<br>";
    var_dump($alumno1);
    echo "<br>";
    for($i=0;$i<10;$i++){
        echo "ciclo for i= ". $i . "<br>";
    }
    echo "<br>";
    $i=0;
    while ($i<10){
        echo "ciclo while i= ". $i . "<br>";
        $i++;
    }
    echo "<br>";
    $i=0;
    do{
        echo "ciclo do while i= ". $i . "<br>";
        $i++;
    }while($i<10);
    echo "<br>";

    if($estudia){
        $texto= "SI";
    }else{
        $texto= "NO";
    }

    $i=1;
    foreach($colores as $color){
        echo "color $i: $color <br>";
        $i++;
    }

    foreach ($alumnos as $matricula=>$nombre){
        echo "Matricula: $matricula - $nombre <br>";
    }*/

    for($i=0;$i<10;$i++){
        echo "<h2>Subtitulo". ($i+1)."</h2>";
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
    <h1>Abajo debe ir h2</h1>
    <!--<php for($i=0;$i<10;$i++){ ?>
        <h2>subtitulo <!?php echo ($i+1); ?> </h2>
    <--?php    
    }
    ?-->

    <?php
    for($i=0;$i<10;$i++){
        echo "<h2>Subtitulo". ($i+1)."</h2>";
    }
    ?>

</body>
<script>
    //alert("esto es de un script")
</script>
</html>

