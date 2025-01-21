<?php
$nombre=$_POST['nombre'];
echo("el nombre es :". $nombre);
$numero1=$_POST['numero1'];
$numero2=$_POST['numero2'];
$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$division=$numero1/$numero2;
$multiplicacion=$numero1*$numero2;
?>
<br>;
<?php
echo("la suma: ". $suma);

?>
<br>;
<?php
echo("la resti: ". $resta);
?>
<br>;
<?php

echo("la divi: ". $division);
?>
<br>
<?php

echo("la multi: ". $multiplicacion."<br>");

// if es una sentencia de control de decisión 
//el cual tiene dos caminois verdadero o falso 
//sintaxis es la siguiente 
//if(condición){
//intrucciones
//else{
//instrucciones
//} 
$numero1=$_POST['numero1'];
$numero2=$_POST['numero2'];
$numero3=$_POST['numero3'];
//Realizar un ejercicion donde verificiamos que número es mayor

if($numero1>$numero2||$numero1>$numero3){
    echo("El número mayor es: ". $numero1);
}elseif($numero2>$numero1 || $numero2>$numero3){
    echo("El número es mayor es: ". $numero2);

}else{
    echo("El número mayor es : " .$numero3);
}

//crear un programa que verifique que el número 3 es par o inpar 
echo("<h2>número par</h2>");

//realiuzamos la condición para verificar si un número es par 

if($numero3%2==0){
    echo("El numero es par: ". $numero3);
}else{
    echo("El numero es impar: ". $numero3);
}
//funciones matemáticas, dentro de Php existe cioertas funciones
//que te ayudan ah resolver operaciones complejas
//raiz cuadradad pára resolver la raiz cuadrada utilizmaos la funcion sqrt(el número a resolver)
//potencia: para sacar la pontencia para dos utilizamos la funcion pow(número, potencia):
echo ("<h2>Raiz y potencia</h2>");
$raiz=sqrt($numero3);
echo ("la raiz cuatrada de número 3 es : " .$raiz."<br>" );
$u=pow($numero3,2);
echo("El resultado es: ". $u);

$a=$_POST['numero1'];
$
?>