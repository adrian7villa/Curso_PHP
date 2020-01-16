<?php

$meses=array('Enero',"Febrero",'Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');


echo count($meses).'</br>';

$ultimomes=count($meses) - 1;
echo $meses[$ultimomes];

?>