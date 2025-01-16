<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola PHP</title>
</head>
<body>
    <h1>PHP</h1>
    <p>
        Es un lenguaje de programacion de alto nivel
        que trebaja del lado del servidor    
    </p>
    
    <?php
    //Todo esto que esta dentro de las etiquetas<?php
    //imprimimos en pantalla
    echo("Hola mundo desde php")
    ?>
    <h2>
        Variable php
    </h2>
    <p>
        Un espacio de memoria donde se guardea informacion, y esa informacio esta dispónible mientras se necesite la varialble o este en ejecución la aplicacion
    </p>
    <?php
    //inicializabndo varibles de tipo texto
    $nombre="Alan";
    $direccion="Sector Andalucia";
    echo("el nombre del estudiante es: ".$nombre);
    $numero1=10;
    $numero2=10.5;
    $suma=$numero1+$numero2;
    ?>
    <br>;
    <?php
    echo("La suma es:".$suma);
    ?>

</body>
</html>