<?php

function saludo($nombre){
    echo "Saludo, $nombre";
}

function sumar($numero1,$numero2)
{
    $resultado=$numero1+$numero2;
    echo $resultado.'</br>';
}

//llamada de funciones

saludo('Adrian');
echo '</br>';

sumar(10,15);
sumar(1,158);
sumar(15,25);

?>