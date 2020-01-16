<?php


#arreglos asociativos
$arregloaso=array('telefono'=>'3111487862','edad'=>31,'apellido'=>'Villaseñor','pais'=>'Mexico');



echo $arregloaso["telefono"].'<br/>';
echo $arregloaso["edad"].'<br/>';
echo $arregloaso["apellido"].'<br/>';
echo $arregloaso["pais"].'<br/>';

$arregloaso['telefono']=311;
echo 'Nuevo Telefono: '.$arregloaso['telefono']

?>