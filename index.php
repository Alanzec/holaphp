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

    // Operadores matematicos:
    /*
        Dentro de php existen operadores matematicos
        + suma = suma de números 
        -resta 
        *multiplicacion
        / divicion 
        % porciento

        Operadoires de asignacion 
        = igual 
        != no igual

        Operadores lógicos 
        > mayor 
        < menor 
        == igual igual 
        >= mayor igual 
        <= menor igual 
        && and y 
        || or o 
        ! not 



    */

        

    ?>
    
    <br>;
    <?php
    echo("La suma es:".$suma);
    ?>
    <p>Manerjo de formularios con php</p>
    <form action="resultado.php" method= "POST">
        <div>
            <label for="nombre">ingrese el nombre:</label>
            <input type="text" name="nombre" id="nombre">
        </div>
        <div>

        </div>
        <div>
            <label for="numero1">ingrese el numero:</label>
            <input type="number" name="numero1" id="numero1">
        </div>
        <div>
     
        </div>
        <div>
            <label for="numero2">ingrese el numero:</label>
            <input type="number" name="numero2" id="numero2">
        </div>
        </div>
        <div>
            <label for="numero3">ingrese el numero:</label>
            <input type="number" name="numero3" id="numero3">
        </div>
        <div>
        <div>
        <input type="submit"value= "Enviar">
        </div>
       


</body>
</html>