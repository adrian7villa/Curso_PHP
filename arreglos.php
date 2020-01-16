<?php

$semana=array('Lunes',"Martes",'Miercoles','Jueves','Vieres','Sabado','Domingo');
$arreglo=['Lunes','Martes','Miercoles','Jueves','Vieres','Sabado','Domingo'];
$multiples=['Lunes',"Martes",1,array('dentro1',2),true];
$semana[7]="Nuevo";
$semana[10]="MAs Nuevo";
echo $semana[1]. '<br/> ';
echo $semana[7]. '<br/>';
echo $semana[10].'<br/>';
echo $arreglo[0].'<br/>';
echo $arreglo[5].'<br/>';
echo $multiples[0].'<br/>';
echo $multiples[1].'<br/>';
echo $multiples[2].'<br/>';
echo $multiples[3][0].'<br/>';
echo $multiples[4].'<br/>';
#echo $multiples[3,1].' ';
#echo $semana[8];





?>