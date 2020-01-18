<?php


$edad=18;
$nombre='Carlos';
if($edad>=18 and $nombre=='Carlos')
{
    echo '<h1>Bienvenido</h1>';
}
if($edad<18 or $nombre!='Carlos')
{
    echo '<h1>Eres menor de edad y/o no te llamas carlos</h1>';
}

?>