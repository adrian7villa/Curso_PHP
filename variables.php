<?php

//string: cadena de texto
$nombre="Carlos";

//integer: numeros enteros
$numero=7;

//double: numero con decimales
$numero_decimal=7.7;

//boolean: verdadero o falso (true/false)
$verdadero=false;

#Array: Arreglo
#Object: Objeto
#Class: Clase
#Null: Cuando a una variable aun no se le ha asignado ningun valor

echo "$nombre \n";//Problemas de seguridad
echo $numero .'<br/>';
echo $numero_decimal;
echo $verdadero;

echo 'Hola mundo'.'<br/>';

echo gettype($nombre).'<br/>';
echo gettype($numero_decimal).'<br/>';
echo gettype($numero).'<br/>';
echo gettype($verdadero);

?>