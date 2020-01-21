<?php

function calcular($base,$altura){
    $resultado=($base*$altura)/2;
    return $resultado;
}

#echo 'El area del triangulo es '.calcular(10,10).' metros cuadrado';



$texto='<> & ""';

echo htmlspecialchars($texto);

?>